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
                    <div class="col-sm-4 text-center justify-content-center align-self-center">
                        <canvas id="connexion" width="159" height="214"></canvas>
                        <script src="{{ asset('js/canvas/login.js') }}"></script>
                    </div>
                    <div class="col-sm-8">
                        <div>
                            <span class="fs-5">Bienvenue sur Blablaland</span>
                            <p class="mt-1">Pars à l'aventure en solo ou avec tes amis. Discute, participe à des jeux en temps réel et vis des expériences incroyables. Rejoins-nous dès maintenant et laisse libre cours à ton imagination sur Blablaland !</p>
                        </div>
                        <form method="POST" action="{{ route('register.create', $discordUser->confirmation_token) }}">
                            @csrf
                            <div class="form-group">
                                <label for="login"><i class="fa-solid fa-user"></i> Login</label>
                                <input id="login" class="form-control @error('username') is-invalid @enderror" placeholder="Saisie un login" type="text" name="username" value="{{ old('username') }}" required autofocus />
                                @error('username')
                                <small class="form-text text-danger">{{ $message }}</small>
                                @else
                                    <small class="form-text text-muted">3 à 10 caractères, chiffres et lettres sans caractères spéciaux sauf "-" et "_". Ton login te servira à te connecter à Blablaland.</small>
                                @enderror
                            </div>
                            <div class="form-group mb-1">
                                <label for="email"><i class="fa-solid fa-envelope"></i> Email</label>
                                <input id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Saisie une email" type="email" name="email" value="{{ old('email') }}" required autofocus />
                                @error('email')
                                <small class="form-text text-danger">{{ $message }}</small>
                                @else
                                    <small class="form-text text-muted">Obligatoire pour valider ton compte ^^</small>
                                @enderror
                            </div>
                            <div class="form-group mb-1">
                                <label for="password"><i class="fa-solid fa-key"></i> Mot de passe</label>
                                <input id="password" class="form-control @error('password') is-invalid @enderror"
                                       placeholder="Saisie un mot de passe"
                                       type="password"
                                       name="password"
                                       required autocomplete="new-password" />
                                @error('password')
                                <small class="form-text text-danger">{{ $message }}</small>
                                @else
                                    <small class="form-text text-muted">Choisis un mot de passe compliqué, et ne le divulge JAMAIS !</small>
                                    @enderror
                            </div>
                            <div class="form-group mb-1">
                                <label for="password_confirmation"><i class="fa-solid fa-key"></i> Mot de passe</label>
                                <input id="password_confirmation @error('password_confirmation') is-invalid @enderror" class="form-control"
                                       placeholder="Confirme ton mot de passe"
                                       type="password"
                                       name="password_confirmation" required />
                                @error('password_confirmation')
                                <small class="form-text text-danger">{{ $message }}</small>
                                @else
                                    <small class="form-text text-muted">Pour être sûr que tu as bien tapé ton mot de passe :p</small>
                                    @enderror
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="rules" id="rules">
                                <label class="form-check-label" for="rules">
                                    J'accepte le règlement du jeu
                                </label>
                                @error('rules')
                                    <br>
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <x-turnstile/>
                                <small class="form-text text-muted">Tu ne vois pas la sécurité ? Change de navigateur pour t'inscrire !</small>
                            </div>
                            @error('cf-turnstile-response')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                            <div class="form-group mt-1">
                                <button class="btn btn-primary">
                                    {{ __('S\'inscrire') }}
                                </button>
                                <div>
                                    <a href="{{ route('login') }}">
                                        {{ __('Tu es déjà inscrit ?') }}
                                    </a>
                                </div>
                            </div>
                        </form>
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
