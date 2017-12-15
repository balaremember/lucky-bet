<template>
    <div>
    <div id="navbar_container">
        <nav id="navbar">
            <div>
                <router-link id="logo" to="/">LuckyBet</router-link>
                <router-link id="bets" to="/rates">Как делать ставки</router-link>
                <router-link id="info" to="/ourpage">О нас</router-link>
                <router-link id="jobs" to="/careers">Вакансии</router-link>
                <router-link id="login" to="/login" v-if="!user">Авторизоваться/Зарегестрироваться</router-link>
                <router-link v-if="user" @click.prevent="logout">Logout</router-link>
            </div>
        </nav>
    </div>
    </div>
</template>

<script>
    import auth from './scripts/authorization'

    export default {
        data() {
            return {
                user: auth.user
            }
        },

        methods: {
            logout() {
                auth.logout()
            }
        }
    }
</script>