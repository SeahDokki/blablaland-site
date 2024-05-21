<x-account-layout>
    <div class="container-header-secondary">
        Changer mes informations
    </div>
    <div class="container-content-secondary">
        <form method="POST" action="{{ route('account.user.update') }}">
            @csrf
            <div class="form-group">
                <label>Login : <b class="color-quaternary">{{ $user->username }}</b> <a href="{{ route('account.username.index') }}">[Changer d'identité] </a></label>
            </div>
            <div class="form-group">
                <label>Pseudo :</label>
                <input class="form-control @error('pseudo') is-invalid @enderror" name="pseudo" value="{{ $user->player->pseudo }}" />
                @error('pseudo')
                    <small class="form-text text-danger">{{ $message }}</small>
                @else
                    <small class="form-text text-muted">3 à 10 caractères, chiffres et lettres sans caractères spéciaux sauf "-" et "_"</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Genre :</label>
                <select class="form-control @error('gender') is-invalid @enderror" name="gender">
                    <option value="0" @selected(old('gender') == 0 || $user->gender == 0)>Mystère</option>
                    <option value="1" @selected(old('gender') == 1 || $user->gender == 1)>Gars</option>
                    <option value="2" @selected(old('gender') == 2 || $user->gender == 2)>Fille</option>
                </select>
                @error('gender')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Pays :</label>
                <select class="form-control @error('country') is-invalid @enderror" name="country_id">
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}" @selected($user->country_id == $country->id)>{{ $country->name }}</option>
                    @endforeach
                </select>
                @error('country')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Site web :</label>
                <input class="form-control @error('website') is-invalid @enderror" name="website" value="{{ $user->website }}" />
                @error('website')
                    <small class="form-text text-danger">{{ $message }}</small>
                @else
                    <small class="form-text text-muted">Le lien doit être valide</small>
                @enderror
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" @checked(old('show_friend') != null || $user->show_friend === 1) name="show_friend">
                <label class="form-check-label">
                    Afficher ma liste d'amis sur mon profil
                </label>
                @error('show_friend')
                <br><small class="form-text text-danger">{{ $message }}</small>
                @else
                    <br><small class="form-text text-muted">Décoche cette case pour plus de discrétion sur tes amis ^^</small>
                    @enderror
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" @checked(old('show_wedding') != null || $user->show_wedding === 1) name="show_wedding">
                <label class="form-check-label">
                    Afficher mon Alliance d'union sur mon profil
                </label>
                @error('show_wedding')
                    <br><small class="form-text text-danger">{{ $message }}</small>
                @else
                    <br><small class="form-text text-muted">Décoche cette case si tu ne veux pas dévoiler ton union</small>
                @enderror
            </div>
            <div class="bg-light">
                <p class="fw-bold">Changement de mot de passe</p>
                <div class="form-group">
                    <label>Ancien mot de passe :</label>
                    <input class="form-control @error('old_password') is-invalid @enderror" name="old_password" type="password" />
                    @error('old_password')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Nouveau mot de passe :</label>
                    <input class="form-control @error('new_password') is-invalid @enderror" name="new_password" type="password" />
                    @error('new_password')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @else
                        <small class="form-text text-muted">Utilise un mot de passe sécurité et unique !</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Retapez le nouveau mot de passe :</label>
                    <input class="form-control  @error('new_password_confirmation') is-invalid @enderror" name="new_password_confirmation" type="password" />
                    @error('new_password_confirmation')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <button class="btn btn-secondary" type="submit">Enregistrer</button>
        </form>
    </div>
</x-account-layout>
