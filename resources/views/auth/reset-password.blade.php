<x-app-layout>
    <div class="row">
        <div class="col-sm-9">
            <div class="container-header-primary">
                <i class="fas fa-sign-in-alt"></i>
                Connexion
            </div>
            <div class="container-content-primary">
                <div class="row">
                    <div class="col-sm-4 text-center justify-content-center align-self-center">
                        <img src="{{ asset('images/mdp-snif.png') }}" alt="Mot de passe perdu">
                    </div>
                    <div class="col-sm-8">
                        <div>
                            <span class="fs-5">Choisissez un nouveau mot de passe</span>
                            <p class="mt-1">Vous êtes invité à sélectionner un nouveau mot de passe pour votre compte. Ce mot de passe sera utilisé pour vos prochaines connexions.</p>
                        </div>
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                <div class="form-group mb-1">
                                    <label for="email"><i class="fa-solid fa-envelope"></i> Email</label>
                                    <input id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Saisie une email" type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus />
                                    @error('email')
                                        <small class="form-text text-danger">{{ $message }}</small>
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
                                <div class="form-group mt-1">
                                    <button class="btn btn-primary">
                                        {{ __('Réinitialiser') }}
                                    </button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
        <x-navbar-right/>
    </div>
</x-app-layout>
