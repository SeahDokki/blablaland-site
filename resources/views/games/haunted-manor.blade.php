<x-app-layout :title="'Blablaland, Manoir hanté : Lancez-vous dans le chariot de la mort !!'">
    <div class="row">
        <div class="col-sm-9">
            <div class="container-header-primary">
                <i class="fas fa-trophy"></i>
                MINI Jeu Le Manoir Hanté
            </div>
            <div class="container-content-primary p-0" id ="games">
                <div class="game-header p-1">
                    <div class="text-center">
                        <img src="{{ asset('images/games/header_page8.png') }}" class="mt-1" />
                    </div>
                    <div class="row game-description">
                        <div class="col-sm-3 text-center">
                            <img src="{{ asset('images/games/skins/perso.png') }}" />
                        </div>
                        <div class="col-sm-9">
                            <div class="card">
                                <div class="card-header">Mini Jeu : Le Manoir Hanté</div>
                                <div class="card-body">
                                    <p>Dévale les rails endiablés du Manoir Hanté à bord d'un chariot, évite les pièges et débarrasse-toi d'un maximum de monstres et de fantômes !!</p>
                                    <p>
                                        Le Clown t'invite à faire une partie, affronte ta peur et lance-toi dans le Manoir Hanté !! Mouahahahaaaaaaa !!!
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
                                    <a class="nav-link @if (empty(request()->type)) active @endif" href="{{ route('game.haunted-manor') }}">Jeu Manoir Hanté</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if (request()->type === 'help') active @endif" href="{{ route('game.haunted-manor', 'help') }}">Aide au jeu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if (request()->type === 'flag') active @endif" href="{{ route('game.haunted-manor', 'flag') }}">Drapeaux Hantés</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if (request()->type === 'podium') active @endif" href="{{ route('game.haunted-manor', 'podium') }}">Classement</a>
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
                                            Tu as actuellement <img src="{{ asset('images/shop/jetons/4.png') }}" />
                                            {{ number_format($statGame['remaining_token'] ?? 0, 0, ' ', ' ') }} Jetons Manoir<br>
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
                                                            <img src="{{ asset('images/shop/jetons/4.png') }}" />
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
                                                            <img src="{{ asset('images/shop/jetons/4.png') }}" />
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
                                <strong>Ils sont {{ $flags->total() }} à avoir le Drapeau Manoir Hanté</strong><br>
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
                                    <li><a href="#aide_manoir">Comment aller à la Pyramide</a></li>
                                    <li><a href="#aide_howto">Comment jouer</a></li>
                                    <li><a href="#aide_recompenses">Les récompenses et les Jetons</a></li>
                                </ul>
                                <div class="row">
                                    <div class="col-sm-4 text-center">
                                        <img src="{{ asset('images/games/haunted-manor/aide_principe.png') }}" />
                                    </div>
                                    <div class="col-sm-8">
                                        <h2 id="aide_principe" class="game-help-title">
                                            <img src="{{ asset('images/shop/jetons/4.png') }}" />
                                            Principe du jeu
                                        </h2>
                                        <p>Dans le jeu du Manoir Hanté, vous êtes propulsé à 100 à l'heure à bord d'un chariot dans les sous-sols diaboliques et hantés du Manoir. Vous devez sauter pour éviter les pièges et les trous, et réussir à dégommer un maximun de fantômes pour gagner des points.</p>
                                        <p>Le Clown vous a préparé un parcours de l'enfer... Mouahahahaaa !!</p>
                                    </div>
                                    <div class="col-sm-8">
                                        <h2 id="aide_manoir" class="game-help-title">
                                            <img src="{{ asset('images/shop/jetons/4.png') }}" />
                                            Comment aller à Manoir Hanté
                                        </h2>
                                        <p>Le Manoir se trouve au cimetière de Blablaland, à gauche du pont des racines de la Zone 52, ou à droite du Phare de Blahiti. Il est accessible depuis tous les univers... !</p>
                                        <p>À noter que le <a href="{{ route('shop.power.show', 270) }}">Blibli Grigri</a>, récompense du jeu, vous permet de vous y téléporter instantanément :)</p>
                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <img src="{{ asset('images/games/haunted-manor/aide_manoir.png') }}" />
                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <img src="{{ asset('images/games/haunted-manor/aide_howto.png') }}" />
                                    </div>
                                    <div class="col-sm-8">
                                        <h2 id="aide_howto" class="game-help-title">
                                            <img src="{{ asset('images/shop/jetons/4.png') }}" />
                                            Comment jouer
                                        </h2>
                                        <p>
                                            Lorsque vous êtes entré dans le Manoir Hanté, il vous suffit de sauter dans le chariot, et d'appuyer sur la flèche du bas de votre clavier... et vous voilà propulsé dans le gouffre infernal !! Si vous mourez en chemin, vous serez téléporté à l'entrée, et... c'est reparti pour un tour ! Lorsque vous finissez le parcours, vous êtes éjecté par la bouche du Croqueur et vous gagnez vos Jetons : Un fantôme tué = 2 Jetons ! <br>
                                            A noter que les Jetons ramassés en jeu sont instantanément gagnés !
                                        </p>
                                        <p>
                                            Déplacements : Le chariot se dirige tout seul vers l'avant, il vous suffit simplement d'appuyer sur la touche du haut de votre clavier pour sauter afin d'éviter pièges et trous !
                                        </p>
                                    </div>
                                    <div class="col-sm-12">
                                        <p>Attaque : Le curseur de votre souris est remplacé par une cible, lorsque vous cliquez à l'écran, vous tirez un projectile en direction du pointeur de votre souris... Utilisez cette attaque pour dégommer les monstres et marquer plus de points !</p>
                                        <p><i>En jeu, vous pouvez gagner directement des Jetons Manoir Hanté si vous passez dessus, sinon, c'est le nombre de monstres éliminés qui vous sera attribué en fin de parcours, si vous avez survécu ! :)</i></p>
                                    </div>
                                    <div class="col-sm-8">
                                        <h2 id="aide_recompenses" class="game-help-title">
                                            <img src="{{ asset('images/shop/jetons/4.png') }}" />
                                            Les récompenses et les Jetons
                                        </h2>
                                        <p>En jouant au Manoir Hanté, vous gagnez des Jetons Manoir qui s’utilisent comme une monnaie en Boutique, vous donnant accès à des récompenses exclusives qui ne peuvent être acquises autrement.</p>
                                        <p>Cliquez ici <a href="{{ route('game.haunted-manor') }}">pour voir les récompenses du Manoir Hanté</a>.</p>
                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <img src="{{ asset('images/games/haunted-manor/aide_recompenses.png') }}" />
                                    </div>
                                </div>
                            </div>
                        @elseif (request()->type === 'flag')
                            <p class="m-1">Ils sont {{ $flags->total() }} à avoir le Drapeau Manoir Hanté</p>
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
                                        <td>{{ number_format($player->stats('HAUNTED_MANOR')->total_token ?? 0, 0, ' ', ' ') }}</td>
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
                                    <th>Réussites</th>
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
