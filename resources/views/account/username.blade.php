<x-account-layout>
    <div class="container-header-secondary">
        <i class="fas fa-user"></i>
        Changer de login
    </div>
    <div class="container-content-secondary">
        <ul class="m-0 mb-2">
            <li>Changer de Login requiert 500 XP.</li>
            <li>Ton Login est très important car c'est avec lui que tu te connectes, et il est ton pseudo par défaut.</li>
            <li>Si le login que tu as demandé est disponible, alors ton login sera changé automatiquement.</li>
        </ul>
        <form method="POST" action="{{ route('account.username.update') }}">
            @csrf
            <div class="form-group">
                <label>Login :</label>
                <input class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $user->username }}" />
                @error('username')
                    <small class="form-text text-danger">{{ $message }}</small>
                @else
                    <small class="form-text text-muted">3 à 10 caractères, chiffres et lettres sans caractères spéciaux sauf "-" et "_"</small>
                @enderror
            </div>
            <button class="btn btn-secondary" type="submit">Enregistrer</button>
        </form>
    </div>
</x-account-layout>
