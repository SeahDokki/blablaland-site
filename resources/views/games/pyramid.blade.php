<x-app-layout :title="'Blablaland, Pyramide : retrouve le sarcophage de la Pyramide de Huybit III !!'">
    <div class="row">
        <div class="col-sm-9">
            <div class="container-header-primary">
                <i class="fas fa-trophy"></i>
                MINI Jeu Pyramide
            </div>
            <div class="container-content-primary p-0" id ="games">
                <div class="game-header p-1">
                    <div class="text-center">
                        <img src="{{ asset('images/games/header_page2.png') }}" class="mt-1" />
                    </div>
                    <div class="row game-description">
                        <div class="col-sm-3 text-center">
                            <img src="{{ asset('images/games/skins/perso2.png') }}" />
                        </div>
                        <div class="col-sm-9">
                            <div class="card">
                                <div class="card-header">Mini Jeu : La Pyramide de Huybit III</div>
                                <div class="card-body">
                                    <p>Pars à l’aventure dans la Pyramide de Huybit III et découvre son sarcophage secret le plus rapidement possible. Des trésors exclusifs à gagner grace aux Jetons Pyramide !!</p>
                                    <p>
                                        Affronte la grande Malédiction et détourne les pièges !!<br>
                                        Seras-tu à la hauteur ?!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="game-rewards">
                    <div class="card m-0 p-0">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a class="nav-link @if (empty(request()->type)) active @endif" href="{{ route('game.pyramid') }}">Pyramide</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if (request()->type === 'help') active @endif" href="{{ route('game.pyramid', 'help') }}">Aide au jeu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if (request()->type === 'flag') active @endif" href="{{ route('game.pyramid', 'flag') }}">Les Héros Hyubit III</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if (request()->type === 'podium') active @endif" href="{{ route('game.pyramid', 'podium') }}">Classement</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        @if (empty(request()->type))
                            @auth
                                <div class="separator-primary">
                                    Tes jetons
                                    <div class="stars"></div>
                                </div>
                                <div class="text-center m-3">
                                    <div class="col-sm-12">
                                        <span class="color-quaternary fw-bold">
                                            Tu as actuellement <img src="{{ asset('images/shop/jetons/1.png') }}" />
                                            {{ number_format($statGame['remaining_token'] ?? 0, 0, ' ', ' ') }} Jetons Pyramide<br>
                                        </span>
                                    </div>
                                    <span class="text-small">Depuis le début tu en as gagné <b>{{ number_format($statGame['total_token'] ?? 0, 0, ' ', ' ') }}</b> en tout.</span>
                                </div>
                            @endauth
                            <div class="separator-primary">
                                Les récompenses
                                <div class="stars"></div>
                            </div>
                            <div class="row text-center game-list-rewards justify-content-center">
                                    @foreach($items as $key => $item)
                                        @foreach ($item as $value)
                                            @if ($key == 0)
                                                <div class="col-sm-2">
                                                    <a href="{{ route('shop.skin.show', $value) }}" style="text-decoration:none">
                                                        <img src="{{ asset('images/shop/skins/' . $value->id . '.jpg') }}" alt="{{ $value->name }}" width="80px" />
                                                        <div class="game-token">
                                                            <img src="{{ asset('images/shop/jetons/1.png') }}" />
                                                            {{ $value->token }}
                                                        </div>
                                                        <p><strong>SKIN</strong> {{ $value->name }}</p>
                                                    </a>
                                                </div>
                                            @else
                                                <div class="col-sm-2">
                                                    <a href="{{ route('shop.power.show', $value) }}" style="text-decoration:none">
                                                        <img src="{{ asset('images/shop/objects/' . $value->id . '.jpg') }}" alt="{{ $value->name_shop }}" width="80px" />
                                                        <div class="game-token">
                                                            <img src="{{ asset('images/shop/jetons/1.png') }}" />
                                                            {{ $value->token }}
                                                        </div>
                                                        <p><strong>POUVOIR</strong> {{ $value->name_shop }}</p>
                                                    </a>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endforeach
                            </div>
                            <div class="separator-primary">
                                Les derniers héros : drapeau !
                                <div class="stars"></div>
                            </div>
                            <p class="m-1">
                                <strong>Ils sont {{ $flags->total() }} à avoir le Drapeau HuyBit III</strong><br>
                                Voici les derniers héros :
                            </p>
                            <div class="d-flex justify-content-center">
                                @foreach($lastFlags as $key => $player)
                                    @include('components.user-card', ['user' => $player->user, 'grade' => true])
                                @endforeach
                            </div>
                        @elseif (request()->type === 'help')
                            <div class="m-3">
                                <ul>
                                    <li><a href="#aide_principe">Principe du Jeu</a></li>
                                    <li><a href="#aide_pyramide">Comment aller au Manoir Hanté</a></li>
                                    <li><a href="#aide_howto">Comment jouer</a></li>
                                    <li><a href="#aide_recompenses">Les récompenses et les Jetons</a></li>
                                </ul>
                                <div class="row">
                                    <div class="col-sm-4 text-center">
                                        <img src="{{ asset('images/games/pyramid/aide_principe.png') }}" />
                                    </div>
                                    <div class="col-sm-8">
                                        <h2 id="aide_principe" class="game-help-title">
                                            <img src="{{ asset('images/shop/jetons/1.png') }}" />
                                            Principe du jeu
                                        </h2>
                                        <p>L’épreuve de la Pyramide est un mini-jeu de plateforme qui rend hommage au jeu 8-bits. Le but du jeu est de sortir du labyrinthe le plus vite possible en évitant les pièges.</p>
                                        <p>Une fois dans la Pyramide, vous êtes sous l’influence de la Malédiction de Huybit III : Celle-ci vous transforme en égyptien pixélisé et vous empêche d’utiliser les objets de votre sac ainsi que les pouvoirs. Sinon, ce serait trop simple :)</p>
                                    </div>
                                    <div class="col-sm-8">
                                        <h2 id="aide_pyramide" class="game-help-title">
                                            <img src="{{ asset('images/shop/jetons/1.png') }}" />
                                            Comment aller à la Pyramide
                                        </h2>
                                        <p>La Pyramide de Huybit III se trouve dans la région de Blahiti plage (à l’est de la plaine de Blablaland). Elle est accéssible depuis tous les univers, ce qui signifie que vous pouvez aussi y jouer en mode Tournament Fury :)</p>
                                        <p>À noter que le Blibli Scarabée vous permet de vous y téléporter instantanément.</p>
                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <img src="{{ asset('images/games/pyramid/aide_pyramide.png') }}" />
                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <img src="{{ asset('images/games/pyramid/aide_howto.png') }}" />
                                    </div>
                                    <div class="col-sm-8">
                                        <h2 id="aide_howto" class="game-help-title">
                                            <img src="{{ asset('images/shop/jetons/1.png') }}" />
                                            Comment jouer
                                        </h2>

                                        <p>Il vous suffit simplement d'entrer dans la pyramide et d’avancer le plus rapidement possible... en évitant les pièges !! Lorsque vous êtes tué, vous êtes renvoyé à l’entrée... et c’est reparti pour un tour !!</p>
                                        <p>Le personnage Pharaon 8-bits s’utilise comme un skin normal. Flèche droite et gauche pour se déplacer, flèche du haut pour sauter et s’agripper aux cordes.</p>
                                        <p>À noter qu’il est impossible de revenir en arrière, vous ne pouvez progresser dans le Labyrinthe qu’en avançant.</p>
                                        <p>
                                            À partir de la seconde pièce du labyrinthe, vous pourrez trouver des Jetons Pyramide.<br>
                                            Après un certain nombre de maps traversées sans mourir, vous atteindrez "enfin" la salle du sarcophage secret, et obtiendrez un nombre de Jetons Pyramide équivalent à votre temps. Plus vous serez rapide, plus vous gagnerez de Jetons !!
                                        </p>
                                    </div>
                                    <div class="col-sm-8">
                                        <h2 id="aide_recompenses" class="game-help-title">
                                            <img src="{{ asset('images/shop/jetons/1.png') }}" />
                                            Les récompenses et les Jetons
                                        </h2>
                                        <p>En jouant à la Pyramide, vous gagnez des Jetons Pyramide qui s’utilisent comme une monnaie en Boutique, vous donnant accès à des récompenses exclusives qui ne peuvent être acquises autrement.</p>
                                        <p>Cliquez ici <a href="{{ route('game.pyramid') }}">pour voir les récompenses Pyramide</a>.</p>
                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <img src="{{ asset('images/games/pyramid/aide_recompenses.png') }}" />
                                    </div>
                                </div>
                            </div>
                        @elseif (request()->type === 'flag')
                            <p class="m-1">Ils sont {{ $flags->total() }} à avoir le Drapeau HuyBit III</p>
                            <table class="table table-sm table-striped-primary text-center">
                                <thead>
                                <tr>
                                    <th>Pos</th>
                                    <th>Blabla</th>
                                    <th>Date</th>
                                    <th>Jetons Gagnés</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($flags as $key => $player)
                                    @php
                                        $rank = ($flags->currentPage() - 1) * $flags->perPage() + $loop->iteration
                                    @endphp
                                    <tr>
                                        <td>
                                            @if (in_array($rank - 1, [0, 1, 2]))
                                                <img src="/images/trophies/trophy_small_{{ $rank - 1 }}.png">
                                            @else
                                                {{ $rank }}
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('user.show',  $player->user )}}" class="text-black">
                                                <strong>{!! $player->user->username !!}</strong>
                                            </a>
                                        </td>
                                        <td>le {{ $player->pivot->created_at->format(' d-m-Y à H:i') }}</td>
                                        <td>{{ number_format($player->stats('PYRAMID')->total_token ?? 0, 0, ' ', ' ') }}</td>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $flags->links('pagination.default') }}
                        @elseif (request()->type === 'podium')
                            <table class="table table-sm table-striped-primary text-center mt-3">
                                <thead>
                                <tr>
                                    <th>Pos</th>
                                    <th width="30%">Blabla</th>
                                    <th width="20%">Score</th>
                                    <th>Sarcophage</th>
                                    <th>Morts</th>
                                    <th>Jetons Gagnés</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($rankings as $key => $ranking)
                                    @php
                                        $rank = ($rankings->currentPage() - 1) * $rankings->perPage() + $loop->iteration
                                    @endphp
                                    <tr>
                                        <td>
                                            @if (in_array($rank - 1, [0, 1, 2]))
                                                <img src="/images/trophies/trophy_small_{{ $rank - 1 }}.png">
                                            @else
                                                {{ $rank }}
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('user.show',  $ranking->player->user )}}" class="text-black">
                                                <strong>{!! $ranking->player->user->username !!}</strong>
                                            </a>
                                        </td>
                                        <td>
                                            <span class="game-score">{{ number_format($ranking->score, 0, ' ', ' ') }} Pts</span>
                                        </td>
                                        <td>{{ number_format($ranking->won, 0, ' ', ' ') }}</td>
                                        <td>{{ number_format($ranking->lost, 0, ' ', ' ') }}</td>
                                        <td>{{ number_format($ranking->total_token, 0, ' ', ' ') }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $rankings->links('pagination.default') }}
                        @endif
                    </div>
                </div>
                <div class="footer-page"></div>
            </div>
        </div>
        <x-navbar-right/>
    </div>
@section('style')
    <link rel="stylesheet" href="{{ asset('css/pages/_games.css') }}">
@endsection
</x-app-layout>
