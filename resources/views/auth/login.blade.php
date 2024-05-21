<x-app-layout>
    <div class="row">
        <div class="col-sm-9">
            @include('components.alert')
            <div class="container-header-primary">
                <i class="fas fa-sign-in-alt"></i>
                Connexion
            </div>
            <div class="container-content-primary">
                <div class="row">
                    <div class="col-sm-4 text-center justify-content-center align-self-center">
                        <canvas id="connexion" width="159" height="214"></canvas>
                        <script src="{{ asset('js/canvas/login.js') }}"></script>
                    </div>
                    <div class="col-sm-8">
                        <div>
                            <span class="fs-5">Bon retour parmi nous !</span>
                            <p class="mt-1">Pour ta première connexion de la journée, nous t'offrons 100 BBL !!<br> C'est génial, n'est-ce pas ?</p>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group mb-1">
                                <label for="login"><i class="fa-solid fa-user"></i> Login</label>
                                <input id="username" class="form-control @error('username') is-invalid @enderror" placeholder="Saisie ton login" type="text" name="username" value="{{ old('username') }}" required autofocus />
                                @error('username')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="fa-solid fa-key"></i> Mot de passe</label>
                                <input id="password" class="form-control @error('password') is-invalid @enderror"
                                       type="password"
                                       name="password"
                                       placeholder="Saisie ton mot de passe"
                                       required autocomplete="current-password" />
                            </div>
                            @error('password')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                            <div class="form-check">
                                <label for="remember_me">
                                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                                    <span class="form-check-label">{{ __('Se souvenir de moi') }}</span>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Se connecter</button>
                                <div class="flex items-center justify-end">
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                            {{ __('Mot de passe oublié ?') }}
                                        </a>
                                    @endif
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <x-navbar-right/>
    </div>
</x-app-layout>
