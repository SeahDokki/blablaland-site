<x-app-layout>
    <div class="container-header-quaternary">Liste une oeuvres</div>
    <div class="container-content-quaternary">
        <h2>Liste des oeuvres</h2>
        <hr>
        {{ $artworks->links('pagination.default') }}
        <a class="btn btn-quaternary" href="{{ route('dashboard.artwork.create') }}">
            Créer
        </a>
        <table class="table table-striped">
            <thead>
            <tr>
                <th width="20%">Petite image</th>
                <th width="40%">Nom</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($artworks as $item)
                <tr>
                    <td>
                        <img src="{{ asset($item->pictureMinUrl) }}" alt="{{ $item->name }}" /><br>
                        <a href="{{ $item->pictureUrl }}" target="_blank">Voir la grande</a>
                    </td>
                    <td>
                        {{ $item->name }}<br>
                    </td>
                    <td>
                        <a href="{{ route('dashboard.artwork.edit', $item) }}" class="btn btn-secondary">Editer</a>
                        <a href="{{ route('dashboard.artwork.destroy', $item) }}" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $artworks->links('pagination.default') }}
    </div>
</x-app-layout>
