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

</script>