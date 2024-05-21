<x-app-layout>
    <!-- Modal -->
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

    <div class="row" style="margin-left:20px;margin-right:10px">
        <div class="col-sm-12">
            <div id="DIV_TCHAT_SWF" class="text-center">
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
        <div class="col-sm-12 mt-1 mb-3">
            @auth
                <button type="button" class="btn btn-quaternary float-start" data-bs-toggle="modal" data-bs-target="#skinModal" style="border-radius: 0.5rem !important; margin-right:10px">
                    <i class="fa-solid fa-repeat"></i> Changer de skin
                </button>
            @endauth
            <input type="color" id="background-color" name="background-color" class="form-control visually-hidden">
            <button type="button" id="color-picker-btn" class="btn btn-quaternary float-start rounded-2" style="border-radius: 0.5rem !important">
                <i class="fa-solid fa-fill-drip"></i> Choisir une couleur
            </button>
            <a href="{{ route('game.light') }}" class="btn btn-secondary float-end" style="border-radius: 0.5rem !important">
                <i class="fa-solid fa-right-long"></i> Mode Light
            </a>
        </div>
    </div>

    @section('style')
        <link rel="stylesheet" href="{{ asset('css/pages/_game.css') }}">
    @endsection

    @section('javascript')
        <script src="{{ asset('js/swf/swfobject.js') }}"></script>
        <script src="{{ asset('js/background.js') }}"></script>
        <script src="{{ asset('js/game.js') }}"></script>
        <script>
            $(document).ready(function() {
                embedChatSWF("{{ now()->timestamp }}", "{{ $tipMessage }}", "{{ $tipSecuMessage }}", "{{ $user ? $user->player->session : 0 }}")
                embedProfilSWF("{{ $user ? $user->player->session : 0 }}")
            })
        </script>
    @endsection
</x-app-layout>
