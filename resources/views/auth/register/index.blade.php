<x-app-layout>
    <div class="row">
        <div class="col-sm-9">
            @include('components.alert')
            <div class="container-header-primary">
                <i class="fa-solid fa-user-plus"></i>
                Inscription
            </div>
            <div class="container-content-primary">
                <div class="row">
                    <div class="col-sm-4 text-center justify-content-center align-self-center p-3">
                        <canvas id="connexion" width="159" height="214"></canvas>
                        <script src="{{ asset('js/canvas/login.js') }}"></script>
                    </div>
                    <div class="col-sm-8">
                        @if (!$state)
                        <div>
                            <span class="fs-5">Bienvenue sur Blablaland</span>
                            <p class="mt-1">Pars à l'aventure en solo ou avec tes amis. Discute, participe à des jeux en temps réel et vis des expériences incroyables. Rejoins-nous dès maintenant et laisse libre cours à ton imagination sur Blablaland !</p>
                        </div>
                        <p>
                            Pour t'inscrire et profiter du tchat, tu as besoin d'un compte Discord !
                        </p>
                        <p>
                            Pense à nous comme à une grande place publique animée. <br>
                            Lorsque tu te connectes à ton compte Discord, c'est un peu comme si tu arrivais sur la place en arborant un insigne qui montre que tu fais partie de la foule. Cela nous permet de reconnaître les membres de notre communauté et de créer un espace où chacun se sent à l'aise et en sécurité. <br>
                            Alors, rejoins-nous en toute tranquillité d'esprit pour partager des moments agréables ensemble !
                        </p>
                        <a class="btn btn-secondary" href="{{ route('discord.index') }}">
                            Se connecter à Discord
                        </a>
                        @elseif ($state == 'REGISTER_DISCORD_CREATE')
                            <span class="fs-5">Youhou ! Tu as réussi à te connecter</span>
                            <p class="mt-1">Tu es presque au bout de l'aventure !</p>
                            <p>
                                Bien joué ! Pour finaliser ton inscription, il te reste une dernière étape :
                            </p>
                            <ol>
                                <li>Rejoins notre serveur Discord en cliquant sur le bouton ci-dessous.</li>
                                <li>Tape la commande <strong>/verify</strong> dans un channel !</li>
                            </ol>
                            <a class="btn btn-secondary" href="https://discord.gg/fAH3xJCzD3" target="_blank">
                                Rejoindre le Discord
                            </a>
                            <br>
                            <small class="form-text text-muted">
                                Si tu as déjà rejoint le serveur Discord, il ne te reste plus qu'à taper la commande. <br> Facile, non ?
                            </small>
                        @elseif ($state == 'REGISTER_DISCORD_UPDATE')
                            <span class="fs-5">Attention ! Une erreur s'est produite</span>
                            <p class="mt-1">Tu as tout fait correctement ?</p>
                            <p>
                                Ton compte Discord est déjà associé, mais pour terminer ton inscription, il te reste une étape à franchir si ce n'est pas déjà fait.
                            </p>
                            <ol>
                                <li>Rejoins notre serveur Discord en cliquant sur le bouton ci-dessous.</li>
                                <li>Tape la commande <strong>/verify</strong> dans un channel !</li>
                            </ol>
                            <a class="btn btn-secondary" href="https://discord.gg/fAH3xJCzD3" target="_blank">
                                Rejoindre le Discord
                            </a>
                            <br>
                            <small class="form-text text-muted">
                                Si tu as des questions ou que tu rencontres difficultés, n'hésitez pas à contacter l'équipe via Discord.
                            </small>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <x-navbar-right/>
    </div>
@section('javascript-header')
        @turnstileScripts()
@endsection
</x-app-layout>
