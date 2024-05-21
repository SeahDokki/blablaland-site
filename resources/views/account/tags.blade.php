<x-account-layout>
    <div class="container-header-secondary">
        <i class="fas fa-tags"></i>
        Changer mes tags
    </div>
    <div class="container-content-secondary">
        <form method="POST" action="{{ route('account.tag.update') }}">
            @csrf
            <div class="form-group">
                <label>Tag :</label>
                <input class="form-control @error('tag') is-invalid @enderror" name="tag" />
                @error('tag')
                <small class="form-text text-danger">{{ $message }}</small>
                @else
                    <small class="form-text text-muted">20 caractères maximum</small>
                    @enderror
            </div>
            <button class="btn btn-secondary" type="submit">Enregistrer</button>
            <div class="account-tags">
                @foreach($user->tags as $tag)
                   <a href="{{ route('account.tag.destroy', $tag) }}" style="text-decoration: none"
                   onclick="return confirm('Êtes-vous sûr de supprimer ce tag ?')">
                       {!! $tag->nameSpan !!}
                   </a>,
                @endforeach
            </div>
        </form>
    </div>
</x-account-layout>
