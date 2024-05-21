<x-app-layout :title="'Blablaland, joue à la Blablataille Navale en ligne avec des milliers de joueurs - gratuit !!'">
    <div class="row">
        <div class="col-sm-9">
            <div class="container-header-primary">
                <i class="fas fa-trophy"></i>
                Armez vos canons !!!
            </div>
            <div class="container-content-primary p-0" id ="games">
                <div class="game-header p-1">
                    <div class="text-center">
                        <img src="{{ asset('images/games/header_page4.jpg') }}" class="mt-1" />
                    </div>
                    <div class="row game-description">
                        <div class="col-sm-3 text-center">
                            <img src="{{ asset('images/games/skins/capitaine.jpg') }}" />
                        </div>
                        <div class="col-sm-9">
                            <div class="card">
                                <div class="card-header">Blablataille Navale</div>
                                <div class="card-body">
                                    <p>Affronte ton adversaire sur le tchat et détruit sa flotte entière avant qu’il ne te fasse boire la tasse en premier. Tous les coups sont permis, surtout les boulets de canon !</p>
                                    <p><b>Armez vos canons... Feuuuuuu !!!	</b></p>
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
                                    <a class="nav-link @if (empty(request()->type)) active @endif" href="{{ route('game.naval-battle') }}">Blablataille Navale</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if (request()->type === 'help') active @endif" href="{{ route('game.naval-battle', 'help') }}">Aide au jeu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if (request()->type === 'flag') active @endif" href="{{ route('game.naval-battle', 'flag') }}">Les Héros (Drapeaux)</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if (request()->type === 'podium') active @endif" href="{{ route('game.naval-battle', 'podium') }}">Classement</a>
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
                                            Tu as actuellement <img src="{{ asset('images/shop/jetons/2.png') }}" />
                                            {{ number_format($statGame['remaining_token'] ?? 0, 0, ' ', ' ') }} Jetons Blablataille Navale<br>
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
                                                            <img src="{{ asset('images/shop/jetons/2.png') }}" />
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
                                                            <img src="{{ asset('images/shop/jetons/2.png') }}" />
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
                                <strong>Ils sont {{ $flags->total() }} à avoir le Drapeau Blablataille Navale</strong><br>
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
                                    <li><a href="#aide_blablataille">Comment lancer une partie</a></li>
                                    <li><a href="#aide_howto">Comment jouer</a></li>
                                    <li><a href="#aide_recompenses">Les récompenses et les Jetons</a></li>
                                    <li><a href="#aide_boost">Boost : Le Blibli "Sous-Marin"</a></li>
                                </ul>
                                <div class="row">
                                    <div class="col-sm-4 text-center">
                                        <img src="{{ asset('images/games/naval-battle/aide_principe.png') }}" />
                                    </div>
                                    <div class="col-sm-8">
                                        <h2 id="aide_principe" class="game-help-title">
                                            <img src="{{ asset('images/shop/jetons/2.png') }}" />
                                            Principe du jeu
                                        </h2>
                                        <p>
                                            La Blablataille Navale se base sur le jeu classique “Touché Coulé”. <br>
                                            Le but est simple : 2 joueurs s’affrontent. Chacun place ses 5 bateaux sur une grille et la partie est lancée. A tour de rôle, les joueurs désigne une case adverse et tire un boulet de canon pour tenter de couler la flotte adverse.</p>
                                        <p>Celui qui arrive à détruire tous les navires ennemis en premier gagne la partie.</p>
                                    </div>
                                    <div class="col-sm-8">
                                        <h2 id="aide_blablataille" class="game-help-title">
                                            <img src="{{ asset('images/shop/jetons/2.png') }}" />
                                            Comment lancer une Partie
                                        </h2>
                                        <p>Une fois connecté au Tchat, 2 solutions :</p>
                                        <p>
                                            <img src="{{ asset('images/games/naval-battle/cible.jpg') }}" />
                                            <b>Pour inviter un joueur :</b><br>
                                            Clique sur le joueur que vous souhaitez inviter à jouer avec vous à la Blablataille Navale. Un menu déroulant apparait, sélectionnez “Blablataille Navale” dans le menu “Jeux”.<br>
                                            Si le joueur accepte l’invitation, la partie est immédiatement lancée.
                                        </p>
                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <img src="{{ asset('images/games/naval-battle/aide_partie.png') }}" />
                                    </div>
                                    <div class="col-sm-12">
                                        <p><i>Astuce : Il est conseillé de parler au joueur avant de l’inviter à jouer avec vous. Le but étant tout de même d’échanger et de s’amuser. Un petit “Bonjour, ça te dis de jouer avec moi à la Blablataille Navale ?”, c’est plus friendly ^^</i></p>
                                        <p>
                                            <img src="{{ asset('images/games/naval-battle/cible.jpg') }}" />
                                            <b>Si on est invité par un joueur :</b><br>
                                            Si un joueur vous invite, vous recevez une alerte. Il vous suffit de l’accepter pour que la partie se lance. (A noter que vous pouvez aussi refuser ^^)
                                        </p>
                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <img src="{{ asset('images/games/naval-battle/aide_howto.png') }}" />
                                    </div>
                                    <div class="col-sm-8">
                                        <h2 id="aide_howto" class="game-help-title">
                                            <img src="{{ asset('images/shop/jetons/2.png') }}" />
                                            Comment jouer ?
                                        </h2>
                                        <p>Le jeu se déroule en 3 phases.</p>
                                        <p>
                                            <img src="{{ asset('images/games/naval-battle/cible.jpg') }}" />
                                            <b>Préparation du jeu :</b><br>
                                            Une fois la partie lancée, les 2 joueurs sont invités à placer leurs bateaux sur la carte, grand moment de stratégie qui peut grandement influencer la partie. Une fois prêt, validez pour commencer la partie.
                                        </p>
                                    </div>
                                    <div class="col-sm-12">
                                        <p>
                                            <img src="{{ asset('images/games/naval-battle/cible.jpg') }}" />
                                            <b>Votre phase de tir :</b><br>
                                            Quand c’est à votre tour de jouer, l’écran affiche le camp adverse en indiquant les zones où vous avez déjà tiré. Visez une case en espérant toucher un navire adverse.<br>
                                            Si aucun navire ne se trouve sur cette case, ça fait “Plouf”<br>
                                            Sinon, ça fait “booom”
                                        </p>
                                        <p>
                                            Chaque tir vous donne une chance de gagner un bonus “POWA” qui boostera votre prochain tir.<br>
                                            A noter que le Blibli “Machin” débloque de nouveaux Powa pour enrichir la partie.
                                        </p>
                                        <p>
                                            <img src="{{ asset('images/games/naval-battle/cible.jpg') }}" />
                                            <b>La phase de tir adverse :</b><br>
                                            Grand moment de stress. Vous avez sous vos yeux tremblant de panique votre flotte, et vous voyez en temps réel votre adversaire hésitez sur sa prochaine cible.
                                        </p>
                                    </div>
                                    <div class="col-sm-8">
                                        <h2 id="aide_recompenses" class="game-help-title">
                                            <img src="{{ asset('images/shop/jetons/2.png') }}" />
                                            Les récompenses et les Jetons
                                        </h2>
                                        <p>En jouant à la Blablataille Navale, vous gagnez des Jetons Blablataille Navale qui s’utilisent comme une monnaie en Boutique, vous donnant accès à des récompenses exclusives qui ne peuvent être acquises autrement.</p>
                                        <p>A la fin de la partie, <b>les deux joueurs gagnent des Jetons</b> (sauf si la partie a été annulée).</p>
                                        <p><i>Astuce : Lorsque vous perdez une partie, chaque coup réussi vous rapportera des Jetons, alors n’abandonnez pas et finissez la partie pour obtenir votre récompense.</i></p>
                                        <p>Cliquez ici pour <a href="{{ route('game.naval-battle') }}">voir les récompenses Blablataille Navale</a>.</p>
                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <img src="{{ asset('images/games/naval-battle/aide_recompenses.png') }}" />
                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <img src="{{ asset('images/games/naval-battle/aide_blibli.png') }}" />
                                    </div>
                                    <div class="col-sm-8">
                                        <h2 id="aide_boost" class="game-help-title">
                                            <img src="{{ asset('images/shop/jetons/2.png') }}" />
                                            Boost : Le Blibli "Sous-Marin"
                                        </h2>
                                        <p>Si vous jouez à la Blablataille Navale avec votre Blibli Machin activé, vous aurez accès à de nouveaux POWA qui boosteront grandement la partie (Lignes de tirs, Tête de Mort etc...).</p>
                                        <p>De plus, si le Blibli est toujours activé à la fin de la partie, il augmentera de 20% vos gains de Jetons !!></p>
                                        <p>Cliquez ici pour <a href="{{ route('shop.power.show', 193) }}">aller en Boutique vous procurer ce Blibli</a> :)</p>
                                    </div>
                                </div>
                            </div>
                        @elseif (request()->type === 'flag')
                            <p class="m-1">Ils sont {{ $flags->total() }} à avoir le Drapeau Blablataille Navale</p>
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
                                        <td>{{ number_format($player->stats('NAVAL_BATTLE')->total_token ?? 0, 0, ' ', ' ') }}</td>
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
                                    <th>Victoires</th>
                                    <th>Défaites</th>
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
