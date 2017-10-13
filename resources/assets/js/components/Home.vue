<template>
        <div class="log-in">
            <form>
                <!--todo-ruslan Выровнять по центру!!!-->
                <form novalidate @submit.stop.prevent="submit">
                    <md-input-container>
                        <label>Введите ваш логин</label>
                        <md-input v-model="initialValue"></md-input>
                    </md-input-container>

                    <md-input-container md-has-password>
                        <label>Введите пароль</label>
                        <md-input type="password"></md-input>
                    </md-input-container>

                    <md-button class="md-raised">Войти</md-button>

                    <md-button class="md-raised md-warn" >Зарегистрироваться</md-button>
                </form>
            </form>
        </div>
</template>

<script>
export default {
    data () {
        return {
            initialValue: ''
        };
    }
}
</script>