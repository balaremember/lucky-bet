<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">{{----}}
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--Запрет кэширования страницы ТОЛЬКО браузером-->
    <meta http-equiv="Cache-Control" content="private">
    <!--CSS-->
    <!--Стили Laravel по умолчанию-->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!--MD-->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">
    <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{ asset('css/vue-material.css') }}">
    <!--Наши стили-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Ставки на спорт - Букмекерская компания "Lucky Bet"</title>
</head>
<body>
<div id="app">
    <header id="head">
        <div id="navbar_container">
            <nav id="navbar">
                <!--TODO поменять ссылки позже-->
                <router-link id="logo" to="/reg">Lucky Bet</router-link>
                <router-link to="/">Как делать ставки</router-link>
                <router-link to="/">О нас</router-link>
                <router-link to="/">Вакансии</router-link>
            </nav>
        </div>
        <div id="init_form">
            {{--<router-view></router-view>--}}
        </div>        
    </header>
    <main>
        <router-view name="left"></router-view>
        <router-view name="right"></router-view>
        <section id="slider"><router-view name="board"></router-view>
        </section>
        <section id="main_section">
            <!--Основная перерисовка будет происходить здесь-->
            <router-view name="registration"></router-view>
        </section>
    </main>
    <footer>
        <div id="paySystemsContainer">
            <p>Платежные системы</p>
            <div class="img_in_footer">

            </div>
        </div>
        <hr>
        <div id="partnersContainer">
            <p>Наши партнеры</p>
            <div>
                <ul class="img_in_footer">
                    <li>
                        <a href="http://pfc-cska.com">
                            <img title="CSKA" alt="CSKA" src="/images/cska.png">
                        </a>
                    </li>
                    <li>
                        <a href="http://www.fclm.ru">
                            <img title="Lokomotiv" alt="Lokomotiv" src="/images/lokomotiv.png">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.fckrasnodar.ru/">
                            <img title="Krasnodar" alt="Krasnodar" src="/images/krasnodar.png">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <hr>
        <div id="socialNetworksContainer">
            <p>Мы в социальных сетях</p>
            <div class="img_in_footer">

            </div>
        </div>
    </footer>
</div>
    <!--JS-->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>