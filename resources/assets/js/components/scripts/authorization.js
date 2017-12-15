import axios from 'axios';

export default {

    user: false,

    data () {
        return {
            email: '',
            password: '',
            user: this.user,
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
                            this.user = true;
                            console.log(response.data.message);
                            console.log(this.user);
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
                this.user = true;
            } else {
                this.user = false;
            }
        },

        logout() {
            localStorage.removeItem('token');
            this.user = false;
        }
    }

}