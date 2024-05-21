@props(['title'])
<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="{{ asset('images/favicon.ico') }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{$title ?? "Blablaland Tchat gratuit, jeu virtuel et tchat pour ados"}}</title>
        <meta name="title" content="Blablaland Tchat gratuit, jeu virtuel et tchat pour ados">
        <meta name="description" content="Blablaland est un jeu de tchat gratuit pour ados, délires avec tes potes dans un monde virtuel fun et coloré">
        <meta name="keywords" content="blablaland, bla bla land, tchat, jeu tchat, chat gratuit, tchat ado, jeu virtuel, ados, tchat, clavardage, clavarde, retro blablaland, blablaland retro, blablaland fermeture, blablaland skin, blablaland 2023, blablaland 2024, blablaland chat, jeu comme blablaland, blablaland jeu, www blablaland, bbl gratuit">
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="French">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <meta name='viewport' content='width=1030'>
        @yield('style')
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
        @yield('javascript-header')
    </head>
    <body class="d-flex flex-column min-vh-100">
        <header>
            @include('components.navbar-tools')
            @include('components.navigation')
        </header>
        <main class="website">
            <div class="container">
                {{ $slot }}
            </div>
            @yield('javascript')
        </main>
    </body>
    <footer class="footer mt-5 py-3 mt-auto">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-6">
                    <img src="{{ asset('images/logo-min.png') }}" alt="Logo min" />
                </div>
                <div class="col-sm-6">
                    <p>Blablaland est un jeu créé par l'équipe de <strong>Niveau99</strong>.</p>
                    <a href="{{ route('index') }}">Accueil</a> |
                    <a href="{{ route('game') }}">Jouer</a> |
                    <a href="{{ route('team') }}">L'équipe</a> |
                    <a href="{{ route('category.index') }}">Forum</a>
                </div>
            </div>
        </div>
    </footer>
</html>
