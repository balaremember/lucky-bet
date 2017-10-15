<template>
        <div class="log-in">
            <!--todo-ruslan Выровнять по центру!!!-->
            <form novalidate @submit.stop.prevent="submit">
                <md-input-container md-clearable>
                    <label>Введите ваш логин</label>
                    <md-input type="email" v-model="login" required name="login"></md-input>
                </md-input-container>

                <md-input-container md-has-password>
                    <label>Введите пароль</label>
                    <md-input type="password" required name="password"
                              pattern="(?=^.{8,32}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                    ></md-input>
                </md-input-container>

                <md-button class="md-raised">Войти</md-button>

                <md-button class="md-raised md-warn" >Зарегистрироваться</md-button>
            </form>
        </div>
</template>

<script>
export default {
    data () {
        return {
            login: ''
        };
    }
}
</script>