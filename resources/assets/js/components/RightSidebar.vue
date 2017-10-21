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
            <div>
                <!--Здесь будут отображать выбранные ставки, коэффициенты и суммы-->
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
                            <!--TODO: найти иконку для iOS-->
                            <md-icon></md-icon> iOS
                        </md-button>
                    </li>
                    <!--Android-->
                    <li class="mobile">
                        <md-button id="button_android">
                            <md-icon>android</md-icon> Anroid
                        </md-button>
                    </li>
                </ul>
            </div>
        </div>
        <!--HELP-->
        <div id="help">
            <p>Онлайн поддержка</p>
            <p id="help_tel">8 (800) 555-35-35</p>
            <p>Звонок бесплатный</p>
            <p>Электронная почта</p>
            <p id="help_email">info@lucky-bet.com</p>
        </div>
    </aside>
</template>

<script>

</script>