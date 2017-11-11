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
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <title>Ставки на спорт - Букмекерская компания "Lucky Bet"</title>
</head>
<body>
<div id="app">
    <header id="head">
        <router-view name="header"></router-view>
    </header>
    <main>
        <router-view name="left"></router-view>
        <router-view name="right"></router-view>
        <section id="slider"><router-view name="board"></router-view>
        </section>
        <section id="main_section">
            <!--Основная перерисовка будет происходить здесь-->
            <router-view name="registration"></router-view>
            <router-view name="home"></router-view>
        </section>
    </main>
    <footer>
        <router-view name="footer"></router-view>
    </footer>
</div>
    <!--JS-->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>