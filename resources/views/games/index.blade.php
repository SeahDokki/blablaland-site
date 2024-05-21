<x-app-layout :title="'Blablaland, les mini jeux qui complètent le jeu Blablaland'">
    <div class="row">
        <div class="col-sm-9">
            <div class="container-header-primary">
                <i class="fas fa-trophy"></i>
                Mini-jeux
            </div>
            <div class="container-content-primary" id="games">
                <h1 class="game-title">TOUS LES MINI-JEUX... EN PLUS DU JEU !!</h1>
                <p class="mb-4 mt-1">
                    Blablaland c'est bien plus qu'un simple jeu de tchat ...
                    Engage-toi au Tournament Fury, Affronte la Malédiction de la Pyramide Huybit III, Coule les flottes adverses etc... des tas de jeux en plus à découvrir !!
                </p>
                <div class="row info-games">
                    <div class="col-sm-6 mb-4">
                        <a href="{{ route('game.dungeon') }}" class="card">
                            <img src="{{ asset('images/games/box/box_donjon.jpg') }}" class="card-img-top">
                            <div class="card-body" style="min-height: 10.5rem">
                                <p class="card-text"><strong>DONJON</strong> : Explore le Donjon de Blablaland et combats les monstres tout seul ou avec tes amis dans une ambiance trop fun !!!
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <a href="{{ route('game.haunted-manor') }}" class="card">
                            <img src="{{ asset('images/games/box/box_manoir.jpg') }}" class="card-img-top">
                            <div class="card-body" style="min-height: 10.5rem">
                                <p class="card-text"><strong>Manoir Hanté</strong> : Dévale les rails endiablés du Manoir Hanté à bord d'un chariot, évite les pièges et débarrasse-toi des monstres et des fantômes. Des récompenses exclusives à gagner grce aux jetons Clown !!
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <a href="{{ route('game.mysthoria') }}" class="card">
                            <img src="{{ asset('images/games/box/box_mysthoria.jpg') }}" class="card-img-top">
                            <div class="card-body" style="min-height: 10.5rem">
                                <p class="card-text"><strong>MYSTHORIÄ</strong> : Creuse les terres de Blablaland à la recherche des précieux fragments de Mysthoriä pour créer des montures et skins exclusifs. Rendez-vous dans les mines de Blablaland pour commencer l'aventure...
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{ route('game.pyramid') }}" class="card">
                            <img src="{{ asset('images/games/box/box_pyramide.jpg') }}" class="card-img-top">
                            <div class="card-body" style="min-height: 10.5rem">
                                <p class="card-text"><strong>Pyramide Huybit III</strong> : Pars à l’aventure dans la Pyramide de Huybit III et découvre son sarcophage secret le plus rapidement possible. Des trésors exclusifs à gagner grce aux Jetons Pyramide !!
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{ route('game.naval-battle') }}" class="card">
                            <img src="{{ asset('images/games/box/box_navale.jpg') }}" class="card-img-top">
                            <div class="card-body" style="min-height: 10.5rem">
                                <p class="card-text"><strong>BLABLATAILLE NAVALE</strong> : Découvre le premier jeu sur le tchat Blablaland ! Affronte ton adversaire à la Blablataille Navale et détruis sa flotte avant qu'il ne te fasse boire la tasse ;)
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{ route('game.tournament-fury') }}" class="card">
                            <img src="{{ asset('images/games/box/box_bbltf.jpg') }}" class="card-img-top">
                            <div class="card-body" style="min-height: 10.5rem">
                                <p class="card-text"><strong>BBL Tournament Fury</strong> : Entre dans la légende et combats les plus grands guerriers de Blablaland ! Le jeu BBL Tournament Fury (BBLTF) est un univers du Tchat dans lequel tu affrontes tous les autres joueurs
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row text-center justify-content-center info-games">
                    <strong class="mt-4 mb-2 fs-5">Les jeux c'est aussi : </strong>
                    <div class="col-sm-2" style="width: 9rem">
                        <a href="{{ route('game.pirate-quest') }}">
                            <img src="{{ asset('images/games/box/minibox_pirate.jpg') }}" />
                            <span>Quête Pirate</span>
                        </a>
                    </div>
                    <div class="col-sm-2" style="opacity:0.5; width: 9rem">
                        <img src="{{ asset('images/games/box/minibox_monstres_nuit.jpg') }}" />
                        <a href="#">Monstres de la Nuit</a>
                    </div>
                    <div class="col-sm-2" style="width: 9rem">
                        <a href="{{ route('game.irwish-toilet') }}">
                            <img src="{{ asset('images/games/box/minibox_madamepipi.jpg') }}" />
                            <span>Madame Pipi =)</span>
                        </a>
                    </div>
                    <div class="col-sm-2" style="opacity:0.5; width: 9rem">
                        <img src="{{ asset('images/games/box/minibox_wwf.jpg') }}" />
                        <a href="#">WWF PANDA</a>
                    </div>
                    <div class="col-sm-2" style="opacity:0.5; width: 9rem">
                        <img src="{{ asset('images/games/box/minibox_loteries.jpg') }}" />
                        <a href="#">Loteries !!</a>
                    </div>
                    <p class="mt-2">Blablaland, bien plus qu'un simple Jeu : )</p>
                </div>
                <div class="footer-page" style="margin: -4px"></div>
            </div>
        </div>
        <x-navbar-right/>
    </div>
@section('style')
    <link rel="stylesheet" href="{{ asset('css/pages/_games.css') }}">
@endsection
</x-app-layout>
