<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blablaland Tchat gratuit, jeu virtuel et tchat pour ados</title>
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" />
    <meta name='viewport' content='width=1030'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
<div class="modal fade" id="skinModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="min-width:650px !important">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Changer de skin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <div id="PROFIL_SWF">
                    Flash doit être actif pour changer de skin
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container text-center vh-100 d-flex justify-content-center align-items-center" style="max-width:950px">
    <div class="row">
        <div class="col-sm-12">
            <div class="text-start">
                <img src="{{ asset('images/logo-min.png') }}" alt="Logo min" class="mb-2" />
            </div>
            <div id="DIV_TCHAT_SWF">
                <div id="DIV_TCHAT_FLASH">
                    <p>Bonjour <b>{{ $user ? $user->username : 'Touriste' }}</b> !</p>
                    <p>
                        Flash n'étant plus supporté par les navigateurs, un logiciel est nécessaire pour accéder à Blablaland.
                        Si tu n'as pas le launcher, je t'invite à le télécharger !!
                    </p>
                    <a class="btn btn-primary" href="https://data.blablaland.eu/bin/Blablaland.eu_1.1.0.exe">Télécharger le Launcher (Windows Portable)</a>
                    <a class="btn btn-primary" href="https://data.blablaland.eu/bin/Blablaland.eu_Setup_1.1.0.exe">Télécharger le Launcher (Windows)</a>
                    <a class="btn btn-primary" href="https://data.blablaland.eu/bin/Blablaland.eu_1.1.0.dmg">Télécharger le Launcher (MacOS)</a>
                    <a class="btn btn-primary" href="https://data.blablaland.eu/bin/Blablaland-eu_1.1.0_amd64.deb">Télécharger le Launcher (Debian/Ubuntu)</a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 mt-1">
            @auth
                <button type="button" class="btn btn-quaternary float-start rounded-2" data-bs-toggle="modal" data-bs-target="#skinModal" style="border-radius: 0.5rem !important; margin-right:10px">
                    <i class="fa-solid fa-repeat"></i> Changer de skin
                </button>
                @if ($user->isModerator())
                    <a target="_blank" href="{{ route('console.index') }}" class="btn btn-secondary float-start" style="border-radius: 0.5rem !important; margin-right:10px">
                        <i class="fa-solid fa-gamepad"></i> Console
                    </a>
                @endif
            @endauth
            <input type="color" id="background-color" name="background-color" class="form-control visually-hidden">
            <button type="button" id="color-picker-btn" class="btn btn-quaternary float-start rounded-2" style="border-radius: 0.5rem !important">
                <i class="fa-solid fa-fill-drip"></i> Choisir une couleur
            </button>
            <a href="{{ route('game') }}" class="btn btn-secondary float-end rounded-2" style="border-radius: 0.5rem !important; margin-right:10px">
                <i class="fa-solid fa-left-long"></i> Mode normal
            </a>
        </div>
    </div>
</div>

<script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/swf/swfobject.js') }}"></script>
<script src="{{ asset('js/background.js') }}"></script>
<script src="{{ asset('js/game.js') }}"></script>
<script>
    $(document).ready(function() {
        embedChatSWF("{{ now()->timestamp }}", "{{ $tipMessage }}", "{{ $tipSecuMessage }}", "{{ $user ? $user->player->session : 0 }}")
        embedProfilSWF("{{ $user ? $user->player->session : 0 }}")
    })
</script>

<link rel="stylesheet" href="{{ asset('css/pages/_game.css') }}">
<style>
    body {
        font-family: Verdana, Arial, Helvetica, sans-serif !important;
        font-size: 12px !important;
        background-color: #48abfc;
        background-image: url("/images/background/default.png");
        background-repeat: repeat;
    url("/images/background.png");
    }
    button, a {
        font-size: 14px !important;
    }
</style>
</body>
</html>
