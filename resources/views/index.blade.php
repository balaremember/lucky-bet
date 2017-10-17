<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">{{----}}
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="pragma" content="no-cache"/>
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
            <router-link id="logo" to="/">Lucky Bet</router-link>
            <a>Как делать ставки</a>
            <a>О нас</a>
    </header>
    <router-view></router-view>

    <footer>

    </footer>
</div>
    <!--JS-->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>