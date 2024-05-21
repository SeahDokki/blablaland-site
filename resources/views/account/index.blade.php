<x-account-layout>
    <div class="container-header-secondary">
        Changer de skin
    </div>
    <div class="container-content-secondary">
        <center>
            <div id="PROFIL_SWF">
                Accédez à cette page avec le launcher pour changer votre skin. <br>
                Rendez-vous sur la page "<a href="{{ route('game') }}">Jouer</a>" pour le télécharger !
            </div>
        </center>
    </div>
@section('javascript')
    <script src="{{ asset('js/swf/swfobject.js') }}"></script>
    <script>
        swfobject.embedSWF("data/outils/elements/profil/profil.swf", "PROFIL_SWF", "600", "550", "11.0", "", {
                SESSION: "{{ $user->player->session }}"
            }, {
                wmode: "transparent"
            }, {
                name: "PROFIL_SWF"
            }
        );
    </script>
@endsection
</x-account-layout>
