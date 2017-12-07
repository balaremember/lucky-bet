<template>
    <aside id="right_sidebar">
        <!--Купон-->
        <div id="coupon">
            <div>
                <p>Купон</p>
            </div>
            <div id="#containerClearCoupon">
                <md-button id="buttonClearCoupon" class="md-icon-button">
                    <md-icon>clear</md-icon>
                </md-button>
            </div>
            <br><hr>
            <div v-if="showCoupon">
                <!--Здесь будут отображать выбранные ставки, коэффициенты и суммы-->
                <form id="couponForm">
                    <div id="betTypeContainer">
                        <md-radio v-model="bet_type" id="single" name="bet_type" mdValue="single">Одиночные</md-radio>
                        <md-radio v-model="bet_type" id="express" name="bet_type" mdValue="express">Экспресс</md-radio>
                    </div>
                    <div id="betsContainer">
                        <ul v-for="bet in bets">
                            <li id="betInList">{{bet.name}}</li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
        <!--Mobile-->
        <div id="mobile">
            <div>
                <p>Мобильные приложения</p>
            </div>
            <div>
                <ul>
                    <!--iOS-->
                    <li class="mobile">
                        <md-button id="button_ios">
                            <md-icon><i class="fa fa-apple" aria-hidden="true"></i></md-icon> iOS
                        </md-button>
                    </li>
                    <!--Android-->
                    <li class="mobile">
                        <md-button id="button_android">
                            <md-icon><i class="fa fa-android" aria-hidden="true"></i></md-icon> Anroid
                        </md-button>
                    </li>
                </ul>
            </div>
        </div>
        <!--HELP-->
        <div id="help">
            <p>Онлайн поддержка</p>
            <p id="help_tel"><a id="tel" href="tel:88005553535">8 (800) 555-35-35</a></p>
            <p>Звонок бесплатный</p>
            <p>Электронная почта</p>
            <p id="help_email"><a id="mail" href="mailto:info@lucky-bet.com">info@lucky-bet.com</a></p>
        </div>
    </aside>
</template>

<script>
    export default
    {
        data(){
            return{
                showCoupon: true,
                bet_type: 'single',
                bets: [{name: 'bet #1'}, {name: 'bet #2'}, {name: ' bet #3'}, {name: 'bet #4'}, {name: 'bet #5'},
                    {name: 'bet #6'}, {name: 'bet #7'}, {name: ' bet #8'}, {name: 'bet #9'}, {name: 'bet #10'}]
            };
        }
    }
</script>