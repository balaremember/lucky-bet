import axios from 'axios';

export default {

    user: {
        authenticated: false
    },

    data () {
        return {
            email: '',
            password: ''
        };
    },

    methods: {
        signin() {
            axios.post('http://lucky-bet.com/api/user/signin',
                {
                    email: this.email,
                    password: this.password,
                },
                {
                    headers: {'X-Requested-With': 'XMLHttpRequest'}
                })
                .then(
                    (response) => {
                        const token = response.data.token;
                        const base64Url = token.split('.')[1];
                        const base64 = base64Url.replace('-', '+').replace('_', '/');
                        console.log(JSON.parse(window.atob(base64)));
                        localStorage.setItem('token', token);

                        if(response.data.message === 'Successfully') {
                            this.user.authenticated = true;
                            this.$router.push('/');
                        } else {
                            this.$router.push('/login');
                        }
                    }
                )
                .catch(
                    (error) => console.log(error)
                );
        },

        checkAuth() {
            const jwt = localStorage.getItem('token');
            if(jwt) {
                this.user.authenticated = true;
            } else {
                this.user.authenticated = false;
            }
        },

        logout() {
            localStorage.removeItem('token');
            this.user.authenticated = false;
        }
    }

}