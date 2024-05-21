<x-app-layout>
    <div class="container-header-quaternary">Liste une news</div>
    <div class="container-content-quaternary">
        <h2>Liste des news</h2>
        <hr>
        {{ $news->links('pagination.default') }}
        <a class="btn btn-quaternary" href="{{ route('dashboard.news.create') }}">
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
            @foreach($news as $item)
                <tr>
                    <td>
                        <img src="{{ asset($item->pictureMinUrl) }}" alt="{{ $item->name }}" /><br>
                        <a href="{{ $item->pictureUrl }}" target="_blank">Voir la grande</a>
                    </td>
                    <td>
                        {{ $item->name }}<br>
                    </td>
                    <td>
                        @if($item->hidden)
                            <a href="{{ route('dashboard.news.status', $item) }}" class="btn btn-success">Afficher</a>
                        @else
                            <a href="{{ route('dashboard.news.status', $item) }}" class="btn btn-warning">Retirer</a>
                        @endif
                        @if($item->published)
                            <a href="{{ route('dashboard.news.published', $item) }}" class="btn btn-warning">Dépublier</a>
                        @else
                            <a href="{{ route('dashboard.news.published', $item) }}" class="btn btn-success">Publier</a>
                        @endif
                        <a href="{{ route('dashboard.news.edit', $item) }}" class="btn btn-secondary">Editer</a>
                        <a href="{{ route('dashboard.news.destroy', $item) }}" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $news->links('pagination.default') }}
    </div>
</x-app-layout>
