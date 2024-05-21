<x-app-layout>
    <div class="row">
        <div class="col-sm-9">
            @include('components.alert')
            <div class="container-header-primary">
                <i class="fas fa-lock-open"></i>
                Identifiants perdus...
            </div>
            <div class="container-content-primary">
                <div class="row">
                    <div class="col-sm-4 text-center justify-content-center align-self-center">
                        <img src="{{ asset('images/mdp-snif.png') }}" alt="Mot de passe perdu">
                    </div>
                    <div class="col-sm-8">
                        <div>
                            <span class="fs-5">Identifiants perdus...</span>
                            <p class="mt-1">Tu ne te souviens plus de tes identifiants, tu n'as toujours pas reçu l'email pour valider ton compte, ou tu penses que ton compte a été piraté...</p>
                            <p class="mt-1">Pas de souci, l'administration Blabla et là pour te donner un coup de main. Suis les instructions ci-dessous :</p>
                            <p class="mt-1">
                                <img src="{{ asset('images/star.png') }}"/>
                                <strong>Tu n'arrives plus à te connecter :</strong><br>
                                - Mot de passe perdu ? ben c'est malin...<br>
                                - Ton compte a peut-être été piraté (mot de passe pas assez sécurisé, tu as donné tes identifiants à quelqu'un d'autre, etc...). Ne t'en fais pas, nous pouvons retrouver ton compte et tout rentrera dans l'ordre :)
                            </p>
                            <p class="mt-1">
                                <img src="{{ asset('images/star.png') }}"/>
                                <strong>Tu n'as toujours pas reçu l'email pour valider ton compte :</strong><br>
                                - Vérifie les dossiers de spams, ou de courriers indésirables, de la boite email avec laquelle tu t'es inscrit. Il arrive que les emails soient pris pour des spams alors qu'ils n'en sont pas. C'est souvent le cas avec des boites email comme hotmail...<br>
                                - Si tu es patient, attends encore un petit instant...
                            </p>
                            <p class="mt-1">
                                <strong>La solution, dans tous les cas :</strong><br>
                                Donne-nous ton login ou ton email et hop d'un tour de magie on t'enverra un email pour modifier ton mot de passe, ou bien on te renverra un email de confirmation si ton compte n'est pas encore validé :D
                            </p>
                        </div>
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="form-group mb-1">
                                <label for="login"><i class="fa-solid fa-user"></i> Login</label>
                                <input id="login" class="form-control @error('username') is-invalid @enderror" placeholder="Saisie un login" type="text" name="username" value="{{ old('username') }}" required autofocus />
                                @error('username')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @endif
                            </div>
                            <div class="form-group mb-1">
                                <label for="email"><i class="fa-solid fa-envelope"></i> Email</label>
                                <input id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Saisie une email" type="email" name="email" value="{{ old('email') }}" required autofocus />
                                @error('email')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @endif
                            </div>
                            <div class="form-group mt-2">
                                <button class="btn btn-primary">
                                    {{ __('Envoyer') }}
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
