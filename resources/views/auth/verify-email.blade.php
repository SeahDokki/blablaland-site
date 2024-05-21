<x-app-layout>
    <div class="row">
        <div class="col-sm-9">
            @if (session('status') == 'verification-link-sent')
                <div class="alert alert-success">
                    Un nouveau lien de vérification a été envoyé à l'adresse e-mail que tu as fournie lors de ton inscription !
                </div>
            @endif
            <div class="container-header-primary">
                <i class="fas fa-mail-bulk"></i>
                Confirme ton adresse e-mail
            </div>
            <div class="container-content-primary">
                <div class="row">
                    <div class="col-sm-4 text-center justify-content-center align-self-center p-3">
                        <canvas id="connexion" width="159" height="214"></canvas>
                        <script src="{{ asset('js/canvas/login.js') }}"></script>
                    </div>
                    <div class="col-sm-8">
                        <span class="fs-5">Merci pour ton inscription !</span>
                        <p class="mt-2">
                            Avant de continuer, tu dois vérifier ton adresse e-mail en cliquant sur le lien que nous t'avons envoyé ! Si tu ne le trouves pas, n'oublie pas de vérifier attentivement le dossier des spams. Si tu ne le trouves toujours pas, n'hésite pas à refaire une demande.
                        </p>
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <button class="btn btn-primary">Renvoyer l'e-mail de vérification</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <x-navbar-right/>
    </div>
</x-app-layout>
