<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <!--TODO:-->
    <!--HEADER-->
    
    <!--Без авторизации-->
    <!--     LOGO | Информация {как делать ставки} | Компания {О компании, Акции, Вакансии} | Форма входа {Поле ввода логина/пароля, Забыл пароль, Войти, Зарегестрироваться}  -->
    <!--С авторизацией-->
    <!--     LOGO | Информация {как делать ставки} | Компания {О компании, Акции, Вакансии} | Баланс , Мои ставки, Выйти, Настройки профиля -->
    <!--<header id="header"></header>-->
    
    <!--MAIN-->
    <main>
        <!--LEFT SIDEBAR-->
        <!--TODO: Все виды ставок-->
        <!--<aside #left_sidebar></aside>-->
        <!--RIGHT SIDEBAR-->
        <!--TODO: Купон | Мобильное приложение | Онлайн поддержка(просто блок с номером и почтой)-->
        <!--<aside #right_sidebar></aside>-->
        <!--SECTION-->
        <section>
            <!--TODO: Обновлять будем здесь-->
        </section>
        
        <!--TEST REGISTRATION-->
        <registration></registration>
    </main>
    <!--TODO: Партнеры | Платежные системы | Ссылки на соц. сети-->
    <!--<footer id="footer"></footer>-->
</div>
    <!--JS-->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>