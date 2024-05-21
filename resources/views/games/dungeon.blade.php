<x-app-layout :title="'Blablaland, Donjon : Explorez le donjon avec vos amis !!'">
    <div class="row">
        <div class="col-sm-9">
            <div class="container-header-primary">
                <i class="fas fa-trophy"></i>
                MINI Jeu Donjon
            </div>
            <div class="container-content-primary p-0" id="games">
                <div class="game-header p-1">
                    <div class="text-center">
                        <img src="{{ asset('images/games/header_page5.png') }}" class="mt-1" />
                    </div>
                    <div class="row game-description">
                        <div class="col-sm-3 text-center">
                            <img src="{{ asset('images/games/skins/perso5.png') }}" />
                        </div>
                        <div class="col-sm-9">
                            <div class="card">
                                <div class="card-header">Mini Jeu : Le Donjon</div>
                                <div class="card-body">
                                    <p>Explore le Donjon de Blablaland et combat les monstres tout seul ou avec tes amis dans une ambiance trop fun !!!</p>
                                    <p>Morganne la Nécromancienne a besoin de ton aide ! Rejoins-la sans plus tarder dans la Forêt Hantée à côté du Manoir :)</p>
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
                                    <a class="nav-link @if (empty(request()->type)) active @endif" href="{{ route('game.dungeon') }}">Jeu Donjon</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if (request()->type === 'help') active @endif" href="{{ route('game.dungeon', 'help') }}">Aide au jeu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if (request()->type === 'flag') active @endif" href="{{ route('game.dungeon', 'flag') }}">Drapeaux valeureux</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if (request()->type === 'podium') active @endif" href="{{ route('game.dungeon', 'podium') }}">Classement</a>
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
                                            Tu as actuellement <img src="{{ asset('images/shop/jetons/5.png') }}" />
                                            {{ number_format($statGame['remaining_token'] ?? 0, 0, ' ', ' ') }} Jetons Donjon<br>
                                        </span>
                                    </div>
                                    <span class="text-small">
                                        Depuis le début tu en as gagné <b>{{ number_format($statGame['total_token'] ?? 0, 0, ' ', ' ') }}</b> en tout.
                                    </span>
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
                                                        <img src="{{ asset('images/shop/jetons/5.png') }}" />
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
                                                        <img src="{{ asset('images/shop/jetons/5.png') }}" />
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
                                <strong>Ils sont {{ $flags->total() }} à avoir le Drapeau valeureux</strong><br>
                                Voici les derniers joueurs :
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
                                    <li><a href="#aide_donjon">Comment se rendre au Donjon ?</a></li>
                                    <li><a href="#aide_howto">Comment jouer</a></li>
                                    <li><a href="#aide_recompenses">Les récompenses et les Jetons</a></li>
                                </ul>
                                <div class="row">
                                    <div class="col-sm-4 text-center">
                                        <img src="{{ asset('images/games/dungeon/aide_principe.png') }}" />
                                    </div>
                                    <div class="col-sm-8">
                                        <h2 id="aide_principe" class="game-help-title">
                                            <img src="{{ asset('images/shop/jetons/5.png') }}" />
                                            Principe du jeu
                                        </h2>
                                        <p>Explorez un Donjon sans fin en traversant le plus de maps possibles et en tuant le maximum de monstres ! Vous devez sauter pour éviter les pièges et les trous et anéantir les monstres sur votre passage.</p>
                                        <p>Interminable donjon, rempli de monstres aussi horribles les uns que les autres !!</p>
                                    </div>
                                    <div class="col-sm-8">
                                        <h2 id="aide_donjon" class="game-help-title">
                                            <img src="{{ asset('images/shop/jetons/5.png') }}" />
                                            Comment se rendre au Donjon ?
                                        </h2>
                                        <p>Le Donjon se trouve au cimetière de Blablaland, à gauche du pont des racines de la Zone 52, ou à droite du Phare de Blahiti. Il est accessible depuis tous les univers !</p>
                                        <p>À noter que le <a href="{{ route('shop.power.show', 304) }}">Blibli Chauve-Souris</a>, récompense du jeu, vous permet de vous y téléporter instantanément :)</p>
                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <img src="{{ asset('images/games/dungeon/aide_rendre.png') }}" />
                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <img src="{{ asset('images/games/dungeon/aide_howto.png') }}" />
                                    </div>
                                    <div class="col-sm-8">
                                        <h2 id="aide_howto" class="game-help-title">
                                            <img src="{{ asset('images/shop/jetons/5.png') }}" />
                                            Comment jouer ?
                                        </h2>
                                        <p>Pour lancer une partie, il suffit de parler à Morganne la Nécromancienne. Une pop-up s'ouvre et vous permet d'inviter un jouer qui se trouve sur la map.</p>
                                        <p>
                                            Vous pouvez inviter 3 Blablas au maximum. Une fois que tout le monde a accepté l'invitation, cliquez sur lancer la partie. <br>
                                            <i>Notez que le Donjon peut aussi se jouer tout seul :)</i>
                                        </p>
                                        <p>Vous pouvez entrer dans le donjon avec n'importe quel skin. Vous êtes alors transformé en aventurier sauf si vous portez <u>un skin Héros.</u></p>
                                    </div>
                                    <div class="col-sm-12">
                                        <p>Une fois sur la première map, utilisez les flèches directionnelles pour déplacer votre personnage.</p>
                                        <p>
                                            La touche <b>ctrl</b> permet d'attaquer et <b>flèche du bas + ctrl</b> permet d'utiliser son action spéciale (ou cliquer sur le bouton dans les pouvoirs).<br>
                                            Cette action spéciale n'est utilisable qu'une seule fois par map.<br>
                                            La touche maj permet de sauter moins haut : indispensable dans certaines maps :D !!
                                        </p>
                                        <p>Lorsque vous êtes touché par un monstre, vous perdez de la vie, symbolisée par des coeurs. Tous les coeurs vides = mort.</p>
                                        <p>
                                            La rune en haut à gauche indique si le pouvoir est utilisable : allumée vous pouvez y aller, éteinte : vous ne pouvez plus l'utiliser pour cette map.<br>
                                            Chaque map doit être traversée dans un temps donné, visible en haut à gauche de l'écran.<br>
                                            Après chaque boss tué, un coffre apparait avec des cadeaux à l'intérieur :)
                                        </p>
                                        <p>Un map traversée = 1 jeton Donjon gagné !</p>
                                    </div>
                                    <div class="col-sm-8">
                                        <h2 id="aide_recompenses" class="game-help-title">
                                            <img src="{{ asset('images/shop/jetons/5.png') }}" />
                                            Les récompenses et les Jetons
                                        </h2>
                                        <p>En jouant au Donjon, vous gagnez des Jetons Donjon qui s’utilisent comme une monnaie en Boutique, vous donnant accès à des récompenses exclusives qui ne peuvent être acquises autrement.</p>
                                            Cliquez ici pour <a href="{{ route('game.dungeon') }}">voir les récompenses du Donjon</a>.
                                        </p>
                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <img src="{{ asset('images/games/dungeon/aide_recompenses.png') }}" />
                                    </div>
                                </div>
                            </div>
                        @elseif (request()->type === 'flag')
                            <p class="m-1">Ils sont {{ $flags->total() }} à avoir le Drapeau valeureux</p>
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
                                        <td>{{ number_format($player->stats('DUNGEON')->total_token ?? 0, 0, ' ', ' ') }}</td>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $flags->links('pagination.default') }}
                        @elseif (request()->type === 'podium')
                            <table class="table table-sm table-striped-primary text-center mt-3">
                                <thead>
                                <tr>
                                    <th>Pos</th>
                                    <th>Blabla</th>
                                    <th width="20%">Score</th>
                                    <th>Lvl max</th>
                                    <th>Nombre de parties</th>
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
                                        <td>{{ number_format($ranking->max_level, 0, ' ', ' ') }}</td>
                                        <td>{{ number_format($ranking->won, 0, ' ', ' ') }}</td>
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
