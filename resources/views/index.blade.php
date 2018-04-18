<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="/css/app.css" rel="stylesheet" type="text/css"/>
    <title>Odense Airsoft</title>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-darkgray">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <router-link to="/home" class="nav-link">Forside</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/information" class="nav-link">Informationer</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/gallery" class="nav-link">Galleri</router-link>
                    </li>
                </ul>
                <div class="navbar-logo">
                    <img src="{{URL::asset('/svg/logo.svg')}}" alt="Odense Airsoft Logo" style="width:100px;">
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <router-link to="/membership" class="nav-link">Medlemskab</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/calendar" class="nav-link">Kalender</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/contact" class="nav-link">Kontakt</router-link>
                    </li>
                </ul>
            </div>
        </nav>
        <transition name="page-transition" mode="out-in">
            <router-view/>
        </transition>
    </div>
    <script src="/js/app.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
</body>
</html>
