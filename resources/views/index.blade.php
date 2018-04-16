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
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="navbar-nav">
                        <router-link to="/" class="nav-link">Forside</router-link>
                        <router-link to="/information" class="nav-link">Informationer</router-link>
                        <router-link to="/gallery" class="nav-link">Galleri</router-link>
                        <router-link to="/membership" class="nav-link">Medlemskab</router-link>
                        <router-link to="/calendar" class="nav-link">Kalender</router-link>
                        <router-link to="/contact" class="nav-link">Kontakt</router-link>
                    </div>
                </div>
            </nav>
            <router-view/>
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
