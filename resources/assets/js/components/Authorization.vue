<template>
    <div>
        <router-view name="header"></router-view>
        <div class="log_in">
            <!--todo-ruslan Выровнять по центру!!!-->
            <form novalidate @submit.stop.prevent="submit">
                <div class="log_in">
                <md-input-container md-clearable>
                    <label>Введите ваш E-mail</label>
                    <md-input type="email" v-model.trim="email" required name="email"></md-input>
                </md-input-container>

                <md-input-container md-has-password>
                    <label>Введите пароль</label>
                    <md-input type="password" required name="password" v-model.trim="password"></md-input>
                </md-input-container>
                <md-button class="md-raised" @click.prevent="signin">Войти</md-button>
                <router-link to="/reg">
                    <md-button class="md-raised md-warn" >Зарегестрироваться</md-button>
                </router-link>
                <md-button class="md-raised">Забыл пароль</md-button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
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

                            if(response.data.message == 'Successfully') {
                                this.$router.push('/');
                            } else {
                                this.$router.push('/login');
                            }
                        }
                    )
                    .catch(
                        (error) => console.log(error)
                    );
            }
        }

    }
</script>