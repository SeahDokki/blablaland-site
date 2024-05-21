<x-app-layout :title="'Blablaland, La communauté du jeu de tchat gratuit pour ados, tchatche et fais toi des amis sur le chat'">
    <div class="row">
        <div class="col-sm-9">
            <div class="container-header-tertiary">
                <i class="fas fa-users"></i>
                Communauté
            </div>
            <div class="container-content-tertiary" id="community">
                {{--
                <h1 class="community-title">BLABLALAND, C'EST LA FÊTE TOUS LES JOURS !</h1>
                    <p class="mb-4 mt-1">
                        Ici, tu trouveras un peu de tout sur la communauté du <strong>Jeu de Tchat Blablaland</strong> ...<br>
                        Les Statistiques des jeux, des infos sur les joueurs que tu croises sur le t'chat, des créations, fansites, loteries, etc... ^^
                    </p>
                <div>
                 --}}
                <div class="row">
                    <div class="col-sm-6 mb-4">
                        <a href="{{ route('community.artwork.index') }}" class="card">
                            <img src="{{ asset('images/community/box/box_artclub.jpg') }}" class="card-img-top">
                            <div class="card-body" style="min-height: 8rem">
                                <p class="card-text"><strong>BBL'ART CLUB</strong> : Les plus belles créations des membres sur le jeu de tchat Blablaland. Dessins, montages vidéos, créations irl etc... !! Toi aussi participe et gagne des points ArtClub !</p></div>
                        </a>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <a href="{{ route('category.index') }}" class="card">
                            <img src="{{ asset('images/community/box/box_forums.jpg') }}" class="card-img-top">
                            <div class="card-body" style="min-height: 8rem">
                                <p class="card-text"><strong>FORUMS</strong> : Bla bla bla !! Tous les potins, les discussions, les grands débats !! Exprime-toi et donne ton avis sur les forums de Blablaland</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <a class="card">
                            <a href="{{ route('community.search.index') }}">
                                <img src="{{ asset('images/community/box/box_annuaire.jpg') }}" class="card-img-top">
                            </a>
                            <div class="card-body" style="min-height: 8rem">
                                <p class="card-text"><strong>ANNUAIRE BLABLAS</strong> : Tu cherches, on trouve !</p>
                                <form method="GET" action="{{ route('community.search.index') }}">
                                    @csrf
                                    <input name="search">
                                    <input type="hidden" name="option" value="user" value="1" />
                                    <button type="submit">Rechercher</button>
                                </form>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="footer-page" style="margin: -4px"></div>
            </div>
        </div>
        <x-navbar-right/>
    </div>
@section('style')
    <link rel="stylesheet" href="{{ asset('css/pages/_community.css') }}">
@endsection
</x-app-layout>
