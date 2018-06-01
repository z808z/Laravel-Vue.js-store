<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel + vue.js :)</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<div id="app">
    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container is-fluid">
                <div class="columns">
                    <div class="column is-one-third">
                        <router-view></router-view>
                    </div>
                    <div class="column">
                        <router-view name="products"></router-view>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<footer class="footer">
    <div class="container">
        <div class="content has-text-centered">
            <p>
                <a href="https://vk.com/write7047194" target="_blank">Написать мне в VK</a>
            </p>
            <p>
                <a href="http://solomein.ru" target="_blank">solomein.ru</a>
            </p>
        </div>
    </div>
</footer>
<script src="/js/app.js"></script>
</body>
</html>
