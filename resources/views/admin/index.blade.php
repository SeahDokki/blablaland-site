<x-app-layout>
    <div class="container-header-quaternary">Dashboard</div>
    <div class="container-content-quaternary">
        <h2>Zone d'administration</h2>
        <hr>
        <button class="btn btn-quaternary"><a href="{{ route('dashboard.login.index') }}">Liste des connexions</a></button>
        <button class="btn btn-quaternary"><a href="{{ route('dashboard.news.index') }}">News</a></button>
        <button class="btn btn-quaternary"><a href="{{ route('dashboard.artwork.index') }}">BBL ArtClub</a></button>
    </div>
</x-app-layout>
