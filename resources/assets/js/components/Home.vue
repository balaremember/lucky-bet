<template>
        <div class="log_in">
            <!--todo-ruslan Выровнять по центру!!!-->
            <form novalidate @submit.stop.prevent="submit">
                <md-input-container md-clearable>
                    <label>Введите ваш логин</label>
                    <md-input type="email" v-model.trim="login" required name="login"></md-input>
                </md-input-container>

                <md-input-container md-has-password>
                    <label>Введите пароль</label>
                    <md-input type="password" required name="password" v-model.trim="password"></md-input>
                </md-input-container>
                <!--<ul>
                    <li>
                        <md-button class="md-raised">Войти</md-button>
                    </li>
                    <li>
                        <router-link to="/reg">
                            <md-button class="md-raised md-warn" >Зарегестрироваться</md-button>
                        </router-link>
                    </li>
                    <li>
                        <md-button class="md-raised">Забыл пароль</md-button>
                    </li>
                </ul>-->
            </form>
        </div>
</template>

<script>
export default {
    data () {
        return {
            login: '',
            password: ''
        };
    }
}
</script>