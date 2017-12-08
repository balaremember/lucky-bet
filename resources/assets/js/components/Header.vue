<template>
    <div>
    <div id="navbar_container">
        <nav id="navbar">
            <div>
                <router-link id="logo" to="/">LuckyBet</router-link>
                <router-link id="bets" to="/">Как делать ставки</router-link>
                <router-link id="info" to="/404">О нас</router-link>
                <router-link id="jobs" to="/">Вакансии</router-link>
                <router-link id="login" to="/login" v-if="!user.authenticated">Авторизоваться/Зарегестрироваться</router-link>
                <router-link v-if="user.authenticated" @click.prevent="logout">Logout</router-link>
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