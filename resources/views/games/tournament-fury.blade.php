<x-app-layout :title="'Blablaland, joue à BBL Tournament FURY et entre dans la légende du jeu de combat en ligne gratuit !!'">
    <div class="row">
        <div class="col-sm-9">
            <div class="container-header-primary">
                <i class="fas fa-trophy"></i>
                Entrez dans la légende
            </div>
            <div class="container-content-primary p-0" id="games">
                <div class="game-header p-1">
                    <div class="text-center">
                        <img src="{{ asset('images/games/header_page3.jpg') }}" class="mt-1" />
                    </div>
                    <div class="row game-description">
                        <div class="col-sm-3 text-center">
                            <img src="{{ asset('images/games/skins/perso_tournament_fury.jpg') }}" />
                        </div>
                        <div class="col-sm-9">
                            <div class="card">
                                <div class="card-header">
                                    BBL Tournament FURY !
                                </div>
                                <div class="card-body">
                                    <p>
                                        Entre dans la légende et combats les plus grands guerriers de Blablaland ! Le jeu BBL Tournament Fury (BBLTF) est un univers du Tchat dans lequel tu affrontes tous les autres joueurs, tu récupères des armes et pars à la Bataille en mode Death Match : chacun pour soi !! L'objectif est simple, survivre et mettre à terre le maximum d'adversaires.<br>
                                        Seras-tu à la hauteur des plus grands guerriers de tous les temps ?!
                                    </p>
                                    <p class="fw-bold">Deviens le prochain Héros !!</p>
                                    <p>
                                        <a class="fs-6 fw-bold" style="text-decoration: none" href="{{ route('game') }}">
                                            Clique ici pour JOUER directement au Tournament Fury !</a>
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
                                    <a class="nav-link @if (empty(request()->type)) active @endif" href="{{ route('game.tournament-fury') }}">Classement</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if (request()->type === 'help') active @endif" href="{{ route('game.tournament-fury', 'help') }}">Aide au jeu</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        @if (empty(request()->type))
                                @if ($tournamentFuries->count() >= 3)
                                    <div class="separator-primary">
                                        Les héros du jour
                                        <div class="stars"></div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        @foreach($tournamentFuries->take(3) as $key => $tournamentFury)
                                            <div class="text-center mt-2 mb-2" style="width: 250px">
                                                <ul class="list-unstyled">
                                                    <li><img class="text-center rounded-3" src="{{ asset($tournamentFury->player->user->avatarUrl) }}" /></li>
                                                    <li class="fs-4">
                                                        <img src="/images/trophies/trophy_small_{{ $key }}.png">
                                                        <a href="{{ route('user.show', $tournamentFury->player->user) }}" style="text-decoration: none">
                                                            <strong>{!! $tournamentFury->player->user->usernameColor !!}</strong>
                                                        </a>
                                                    </li>
                                                    <li>Pseudo :
                                                        <a href="{{ route('user.show', $tournamentFury->player->user) }}" style="text-decoration: none">
                                                            {!! $tournamentFury->player->pseudoColor !!}
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <span class="game-score fs-5">{{ number_format($tournamentFury->score, 0, ' ', ' ') }} Pts</span>
                                                    </li>
                                                    <li class="text-small text-success" style="color:green">{{ $tournamentFury->won }} Frags, {{ $tournamentFury->lost }} Morts</li>
                                                    <li class="text-small text-success fw-bold">{{ $tournamentFury->successRate() }} % de réussite</li>
                                                </ul>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            <div class="separator-primary">
                                Classement
                                <div class="stars"></div>
                            </div>
                            <p class="m-1"><i>Note : Les positions sont mises à jour automatiquement</i></p>
                            <table class="table table-sm table-striped-primary text-center">
                                <thead>
                                <tr class="text-center">
                                    <th width="10%">Pos</th>
                                    <th width="40%">Blabla</th>
                                    <th width="20%">Score</th>
                                    <th width="10%">Frags</th>
                                    <th width="10%">Morts</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tournamentFuries as $key => $tournamentFury)
                                    @php
                                        $rank = ($tournamentFuries->currentPage() - 1) * $tournamentFuries->perPage() + $loop->iteration
                                    @endphp
                                    <tr>
                                        <td class="align-middle">
                                            @if (in_array($rank - 1, [0, 1, 2]))
                                                <img src="/images/trophies/trophy_small_{{ $rank - 1 }}.png">
                                            @else
                                                {{ $rank }}
                                            @endif
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ route('user.show', $tournamentFury->player->user)}}">
                                                <strong style="color: black">
                                                    {!! $tournamentFury->player->user->username !!}
                                                </strong>
                                            </a>
                                        </td>
                                        <td class="align-middle">
                                            <span class="game-score">{{ number_format($tournamentFury->score, 0, ' ', ' ') }} Pts</span><br>
                                            <span class="text-small">{{ $tournamentFury->successRate() }} % de réussite</span>
                                        </td>
                                        <td class="align-middle">{{ number_format($tournamentFury->won, 0, ' ', ' ') }}</td>
                                        <td class="align-middle">{{ number_format($tournamentFury->lost, 0, ' ', ' ') }}</td>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $tournamentFuries->links('pagination.default') }}
                        @elseif (request()->type === 'help')
                            <div class="m-3">
                                <ul>
                                    <li><a href="#aide_principe">Principe du Jeu</a></li>
                                    <li><a href="#aide_fury">Comment lancer / rejoindre une partie</a></li>
                                    <li><a href="#aide_howto">Système de Jeu</a></li>
                                    <li><a href="#aide_recompenses">Listing des Armes / Bonus</a></li>
                                </ul>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h2 id="aide_principe" class="game-help-title">
                                            <img src="{{ asset('images/games/tournament-fury/ico_lazer_bbl.jpg') }}" />
                                            Principe du jeu
                                        </h2>
                                        <p>Bienvenue dans l'univers BBL Tournament Fury : Dans ce mode du jeu, le but est très simple... combattre le maximum de joueurs adverses pour gagner des points et devenir le Héros !! Pour y parvenir, vous avez par défaut le Laser, illimité en nombre de coups. En vous déplaçant, vous trouverez d'autres armes qui apparaissent aléatoirement dans le jeu.<
                                        <p>
                                           <b>Survivez, et abattez les autres, vous voilà en mode DeathMatch ^^</b><br>
                                            Un contre tous, à vous d'être le meilleur !
                                        </p>
                                        <p>Et, bien entendu... c'est 100% Gratuit ^__^</p>
                                        <h2 id="aide_fury" class="game-help-title">
                                            <img src="{{ asset('images/games/tournament-fury/ico_lazer_bbl.jpg') }}" />
                                            Comment lancer/rejoindre une Partie
                                        </h2>
                                        <p>BBL Tournament Fury est un Univers en plus dans le monde de Blablaland. Il suffit donc de vous connecter sur le tchat, d'atteindre une Porte Ancestrale et de choisir l'univers <b>"Tournament Fury"</b>. Vous serez alors téléporté dans l'univers où se déroule le jeu.</p>
                                        <img src="{{ asset('images/games/tournament-fury/img_porteancestrale.jpg') }}" width="221px" height="173px" />
                                        <p class="mt-2">
                                            Le jeu se déroule dans l'intégralité de l'univers.<br>
                                            Une fois connecté dans Tournament Fury, la partie n'est pas lancée tant que vous n'avez pas sélectionné une arme. Pour le faire, il suffit :<br>
                                            - soit de cliquer sur le laser dans votre inventaire<br>
                                            - soit d'appuyer sur la touche "Ctrl" de votre clavier, ce qui sélectionne une arme - donc le laser.
                                        </p>
                                        <p>
                                            Attention... vous êtes maintenant dans la partie !!<br>
                                            Votre vie s'affiche au dessus de votre tête, et chaque dégât que vous allez prendre vous fera perdre plus ou moins de vie.<br>
                                            Plus d'échappatoire possible, vous voilà dans BBL Tournament Fury ^^
                                        </p>
                                        <h2 id="aide_howto" class="game-help-title">
                                            <img src="{{ asset('images/games/tournament-fury/ico_lazer_bbl.jpg') }}" />
                                            Système de Jeu
                                        </h2>
                                        <p>Lorsque l'on est dans l'univers Tournament Fury et que l'on a choisi une arme, la partie est lancée : le but est alors de tuer le plus de joueurs possible pour monter dans le classement.</p>
                                        <p>
                                            <b>Commandes :</b><br>
                                            Les déplacements fonctionnent comme dans le tchat :<br>
                                            - Utilisez les flèches du clavier droite/gauche pour déplacer votre personnage<br>
                                            - Flèche du haut pour sauter<br>
                                            - Flèche du bas pour prendre les portes
                                        </p>
                                        <p>
                                            Nouvelles touches :
                                            - Utilisez la touche "CTRL" de votre clavier pour changer d'armes<br>
                                            - Pour viser, déplacez votre souris à l'écran, vous verrez votre personnage et son arme s'orienter<br>
                                            - Faite un "clic gauche" sur votre souris pour tirer, et plein de clics à la suite pour canarder ^^
                                        </p>
                                        <p class="fw-bold">Point de Vie :</p>
                                    </div>
                                    <div class="col-sm-3 text-center">
                                        <img src="{{ asset('images/games/tournament-fury/img_vie.jpg') }}" />
                                    </div>
                                    <div class="col-sm-9">
                                        <p>
                                            On commence la partie avec 100% des points de vie - ce qui correspond aux 5 coeurs situés au dessus des personnages qui indiquent aussi la vie des autres joueurs. Plus vous subissez de dégâts, plus vous perdez de point de vie et les coeurs disparaissent.<br>
                                            A zéro point de vie, vous êtes mort et votre personnage se transforme en fantôme. (voir "Mort" plus bas).
                                        </p>
                                        <p>Info : Aléatoirement, des packs de vie apparaissent dans le jeu, passez votre personnage dessus pour regagner de la vie.</p>
                                    </div>
                                    <div class="col-sm-12">
                                        <p>
                                            <b>Armes / Bonus :</b><br>
                                            Vous vous servez de différentes armes pour tuer les autres joueurs. Un listing et des explications détaillées sur les armes sont disponibles plus bas dans cette aide. Votre arme par défaut est le laser, il est illimité en nombre de tirs mais ses dégâts sont faibles. D'autres armes plus puissantes apparaissent aléatoirement dans les maps du jeu, il suffit de passer son personnage dessus pour les prendre. A noter qu'il est impossible de récupérer des armes en fantôme, ou tant que le jeu n'est pas lancé.<br>
                                            Plusieurs Bonus/Boost peuvent être utilisés dans le jeu comme des boucliers pour réduire les dégâts, ou des JetPacks et Boards pour se déplacer plus rapidement. Le pouvoir des Bombes fait aussi des dégâts.
                                        </p>
                                        <p>
                                            <b>Mort :</b><br>
                                            Vous mourez lorsque votre vie tombe à zéro, votre personnage se transforme alors en fantôme pendant 10 secondes durant lesquelles vous n'êtes plus en jeu et vous pouvez vous déplacer librement dans le monde sans subir de dégâts.<br>
                                            Attention : En fantôme, vous ne pouvez pas récupérer d'armes supplémentaires, vous avez seulement 10 secondes pour vous replacer ou changer d'endroit.<br>
                                            Après ces 10 secondes, le jeu reprend automatiquement avec la dernière arme sélectionnée.
                                        </p>
                                        <p>
                                            <b>Frag / Système de Point :</b><br>
                                            Vous gagner un point "Frag" lorsque :<br>
                                            - Vous tuez un joueur<br>
                                            - Un joueur se déconnecte ou change d'univers et que vous avez été le dernier à le toucher dans les 30 secondes.
                                        </p>
                                        <p>Au contraire, vous prenez donc un point "Mort" lorsque vous êtes tué, ou lorsque vous quittez le jeu alors que vous avez subi des dégats. Vous ne prenez pas de point "Mort" si vous quittez pendant que vous êtes en fantôme.</p>
                                        <p>Toutes les heures, un classement est recalculé par rapport aux nombre de Frags que vous avez faits dans la journée. Le nombre de points obtenus est réduit tous les jours afin de laisser une chance aux nouveaux arrivants de prendre place, mais aussi de faire disparaitre lentement du classement ceux qui ne jouent plus.</p>
                                        <p>Concrètement : Prenez place, mettez votre Bouclier, trouvez les plus grosses armes du jeu, déplacez vous vite avec le JetPack, les Boards ou Potions de vitesse, visez bien et vous aurez vos chances au Top du Classement !</p>
                                        <p class="text-small">(à noter que les attaques de skins comme les coups d'épée, les firewall etc.. n'infligent actuellement aucun dégât)</p>
                                        <h2 id="aide_recompenses" class="game-help-title">
                                            <img src="{{ asset('images/games/tournament-fury/ico_lazer_bbl.jpg') }}" />
                                            Listing des Armes / Bonus
                                        </h2>
                                        <p>
                                            L'arme par défaut est le laser, il est illimité mais ses dégâts sont faibles. En plus du laser, d'autres armes bien plus puissantes apparaissent aléatoirement dans l'univers, il suffit de déplacer son personnage dessus en premier pour l'obtenir. Toutes les autres armes sont limitées en munitions... mais elles infligent des dégâts bien plus conséquents.<br>
                                            <i>Astuces : Lorsque vous avez plusieurs armes, utilisez la touche "CTRL" de votre clavier pour changer automatiquement d'armes, ce qui évite d'aller fouiller dans l'inventaire</i>
                                        </p>
                                        <p>
                                            Il existe différents types de dégâts d'armes :<br>
                                            - DIRECT : Les armes qui infligent des dégâts directement lorsque le tir touche un blabla<br>
                                            - INDIRECT : Infligent des dégâts uniquement lorsque le tir explose à l'impact d'une surface
                                        </p>
                                        <p>Listing des Armes :</p>
                                    </div>
                                    <div class="col-sm-2 text-center">
                                        <img src="{{ asset('images/games/tournament-fury/arme_lazer.jpg') }}" />
                                    </div>
                                    <div class="col-sm-10">
                                        <p>
                                            <b>LASER</b> (DIRECT)<br>
                                            L'arme par défaut du jeu. Le laser a l'avantage d'être illimité, mais sa puissance n'est pas son meilleur atout.
                                            Chaque tir consomme un peu d'énergie à votre laser, et sa puissance dépend de l'énergie dont il dispose : plus la jauge est pleine, plus les dégâts occasionnés seront importants. Il est donc conseillé d'attendre quelques secondes qu'il se recharge afin de tirer à pleine puissance. Le laser fait un tir droit qui peut toucher tous les joueurs sur son chemin.
                                        </p>
                                    </div>
                                    <div class="col-sm-2 text-center">
                                        <img src="{{ asset('images/games/tournament-fury/arme_bazooka.jpg') }}" />
                                    </div>
                                    <div class="col-sm-10">
                                        <p>
                                            <b>BAZOOKA</b> (INDIRECT)<br>
                                            On sort l'artillerie lourde avec le Bazooka qui, comme son joli nom l'indique, lance de bonnes grosses roquettes. La roquette ne fait pas de dégâts directs, mais elle explose dès qu'elle touche un obstacle (autre qu'un blabla). C'est l'explosion qui inflige des dégâts à tous les joueurs qui sont à proximité. Plus un joueur est proche du point d'impact, plus il subira des dégâts, et paf le Blabla !!
                                        </p>
                                    </div>
                                    <div class="col-sm-2 text-center">
                                        <img src="{{ asset('images/games/tournament-fury/arme_biglazer.jpg') }}" />
                                    </div>
                                    <div class="col-sm-10">
                                        <p>
                                            <b>BLASTER</b> (INDIRECT)<br>
                                            Le Blaster n'est autre qu'un très gros laser qui fait le vide sur son passage. Contrairement au laser par défaut, le Blaster n'a pas de temps de recharge et sa puissance de tir est assez dévastatrice !! Mais lui n'est pas illimité et il faudra parcourir le monde à sa recherche avant de pouvoir canarder. Les tirs du Blaster sont gros et touchent tous les blablas qui sont dans l'axe. De quoi faire le ménage sans trop de fatigue !
                                        </p>
                                    </div>
                                    <div class="col-sm-2 text-center">
                                        <img src="{{ asset('images/games/tournament-fury/arme_tnt.jpg') }}" />
                                    </div>
                                    <div class="col-sm-10">
                                        <p>
                                            <b>CHARGES.C4</b> (INDIRECT)<br>
                                            Le C4 est une arme très perfide ! Certes complexe à manipuler et dangereuse, mais avec de la maîtrise cette arme est redoutable et fera le vide dans une map. Lorsque cette arme est active et que vous cliquez sur l'écran, un petit menu apparait et vous donne le choix entre "Poser une charge" ou "Faire exploser" !! Vous avez compris l'idée, posez des charges un peu partout à l'écran (nombre limité), mettez-vous en retrait, et faites sauter tout ça !! Explosion massive, gros dégâts, tout ce qu'il faut pour bien se marrer quoi... !
                                        </p>
                                    </div>
                                    <div class="col-sm-2 text-center">
                                        <img src="{{ asset('images/games/tournament-fury/arme_firewall.jpg') }}" />
                                    </div>
                                    <div class="col-sm-10">
                                        <p>
                                            <b>FIREWALLER</b> (INDIRECT)<br>
                                            Le Firewaller est une arme très spéciale... aux dégâts hors normes ! En effet, elle propulse une roquette qui, lorsqu'elle touche une surface, déclenche un firewall qui infligera de lourds dégâts à quiconque se retrouvera dans les flammes de l'enfer !! Voilà une arme redoutable qui saura faire son travail de boucherie flambée ! A vous de faire les plus belles brochettes de Blablas ^^
                                        </p>
                                    </div>
                                    <div class="col-sm-2 text-center">
                                        <img src="{{ asset('images/games/tournament-fury/arme_big.jpg') }}" />
                                    </div>
                                    <div class="col-sm-10">
                                        <p>
                                            <b>FUSION</b> (INDIRECT)<br>
                                            Là, ça ne rigole plus : Fusion est l'arme la plus destructrice du jeu : en un tir, elle est capable quasiment de tuer un blabla dans une énorme explosion. Son coeur à fusion génère un tir lent qui n'explosera qu'à l'impact, mais un conseil, restez très loin de sa zone d'explosion car elle dévastera tout autour d'elle ! Si par chance vous arrivez à toucher plusieurs blablas en même temps, c'est le Jackpot pour les multi-frags !! Bien entendu cette arme est rare... et la posséder est un pur bonheur, sauf pour ceux qui sont en face ^^
                                        </p>
                                    </div>
                                    <div class="col-sm-2 text-center">
                                        <img src="{{ asset('images/games/tournament-fury/arme_big.jpg') }}" />
                                    </div>
                                    <div class="col-sm-10">
                                        <p>
                                            <b>PUMKINS LAUNCHER</b> (INDIRECT)<br>
                                            <span class="fw-bold text-danger">Spécial Halloween 2010 !!</span> Gros gros dégâts et délires en perspective avec cette arme spéciale Halloween... le Pumkins Launcher !! Tire des citrouilles qui infliguent de gros dégâts à l'impact, tout comme l'arme "Fusion"... Mais, en plus d'être bourrine et délire, pour chaque mort qu'elle fait, il y a une chance pour qu'un cadeau tombe du ciel !! Trop trop puissant... Profitez-en un max durant Halloween ^^
                                        </p>
                                    </div>
                                    <div class="col-sm-12">
                                        <p class="text-small">Astuce : Avec une arme aux dégâts Directs, il est impossible de toucher un blabla qui est sur le toit de l'Irwish par exemple, car le laser touche le toit et donc pas le blabla, alors qu'avec du dégât Indirect comme le Bazooka, l'explosion lui infligera des dégâts !! Héhé, c'est technique :P</p>
                                        <p>Listing des Boosts :</p>
                                    </div>
                                    <div class="col-sm-2 text-center">
                                        <img src="{{ asset('images/games/tournament-fury/bonus_vie.jpg') }}" />
                                    </div>
                                    <div class="col-sm-10">
                                        <p>
                                            <b>PACK DE VIE</b><br>
                                            Houra... !! Le pack de vie remontera votre santé à 100% directement, de quoi oublier ses blessures et reprendre le combat comme si de rien n'était. Rien de mieux pour reprendre le dessus et terrasser vos adversaires qui étaient en train de se défouler sur vous !! Le Pack de vie vous rapproche de la victoire !!
                                        </p>
                                    </div>
                                    <div class="col-sm-12">
                                        <p>
                                            Et voilà pour le contenu spécifique aux BBL Tournament Fury !!<br>
                                            Mais, les Objets et Pouvoirs de Blablaland peuvent aussi être très utiles
                                        </p>
                                        <p>
                                            - Les <a href="{{ route('shop.power.show', 5) }}">Bombes</a> infligent aussi des dégâts dans Tournament Fury<br>
                                            - Les <a href="{{ route('shop.power.show', 11) }}">JetPack</a>, <a href="{{ route('shop.power.show', 43) }}">Boards</a> et <a href="{{ route('shop.power.show', 14) }}">Potions</a> sont d'une efficacité redoutable pour se déplacer rapidement<br>
                                            - Le <a href="{{ route('shop.power.show', 8) }}">Bouclier</a> amortit 30% des dégâts
                                        </p>
                                        <p>
                                            <a href="{{ route('shop.power.index') }}">Cliquez ici pour faire un tour dans la Boutique Objets / Pouvoir de Blablaland !</a>
                                        </p>
                                        <p class="fw-bold">
                                            Alors, armez-vous au mieux, passez une Porte Ancestrale vers Tournament Fury, et à vous la victoire !!
                                        </p>
                                    </div>
                                </div>
                            </div>
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
