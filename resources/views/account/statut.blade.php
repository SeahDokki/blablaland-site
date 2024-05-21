<x-account-layout>
    <div class="container-header-secondary">
        Changer mon statut
    </div>
    <div class="container-content-secondary">
        <p>
            Retrouve ici la liste de tous les statuts que tu as débloqués en montant tes expériences ou suite à un évenement.
            Sélectionne le statut que tu veux puis clique sur le bouton "Enregistrer".
        </p>
        <form method="POST" action="{{ route('account.statut.update') }}">
            @csrf
            <div class="form-group">
                <select name="statut_id" class="form-control">
                    <option value="0" @selected($user->statut_id == 0)>Automatique</option>
                    @foreach($statuts as $statut)
                        <option value="{{ $statut->id }}" @selected($user->statut_id == $statut->id)>{{ $statut->name }}</option>
                    @endforeach
                </select>
                @error('statut_id')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button class="btn btn-secondary" type="submit">Enregistrer</button>
        </form>
    </div>
</x-account-layout>
