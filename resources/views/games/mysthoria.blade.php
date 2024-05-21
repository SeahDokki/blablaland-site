<x-app-layout :title="'Blablaland, Mysthoria : pioche à la chasse de fragments de mysthoriä !!'">
    <div class="row">
        <div class="col-sm-9">
            <div class="container-header-primary">
                <i class="fas fa-trophy"></i>
                MINI Jeu Mysthoriä & Pioche
            </div>
            <div class="container-content-primary p-0" id ="games">
                <div class="game-header p-1">
                    <div class="text-center">
                        <img src="{{ asset('images/games/header_page.png') }}" class="mt-1" />
                    </div>
                    <div class="row game-description">
                        <div class="col-sm-3 text-center">
                            <img src="{{ asset('images/games/skins/perso9.png') }}" />
                        </div>
                        <div class="col-sm-9">
                            <div class="card">
                                <div class="card-header">Mini Jeu : Les Fragments de Mysthoriä</div>
                                <div class="card-body">
                                    <p>Equipe toi d'une pioche, et pars à la recherche des précieux Fragments de Mysthoriä dans les terres de Blablaland. Cette pierre rare possède des propriétés exceptionnelles. Une fois concentrée en grande quantité, elle peut animer les objets.</p>
                                    <p>Fais le stock de déchets en piochant (Chaussures abimées, peaux de bananes, etc..) et rends-toi dans les mines de Blablaland pour y découvrir un mineur et son étrange machine. Il sera capable, grâce aux Catalyseurs, de te fabriquer des montures et skins exclusifs !!</p>
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
                                    <a class="nav-link @if (empty(request()->type)) active @endif" href="{{ route('game.mysthoria') }}">Mysthoriä</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if (request()->type === 'flag') active @endif" href="{{ route('game.mysthoria', 'flag') }}">Les chasseurs Héros (Drapeaux)</a>
                                </li>
                            </ul>
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
                                                Tu as actuellement <img src="{{ asset('images/shop/jetons/3.png') }}" />
                                                {{ number_format($statGame['remaining_token'] ?? 0, 0, ' ', ' ') }} Jetons Mysthoriä<br>
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
                                    <p class="fw-bold">Les Récompenses avec les Fragments de Mystoriä</p>
                                    @foreach($items as $key => $item)
                                        @foreach ($item->where('token', '>', 0)->sortBy('token') as $value)
                                            @php
                                                $routeName = ($key == 0) ? 'shop.skin.show' : 'shop.power.show';
                                                $imgPath = ($key == 0) ? 'images/shop/skins/' : 'images/shop/objects/';
                                                $itemName = ($key == 0) ? $value->name : $value->name_shop;
                                            @endphp

                                            <div class="col-sm-2">
                                                <a href="{{ route($routeName, $value) }}" style="text-decoration:none">
                                                    <img src="{{ asset($imgPath . $value->id . '.jpg') }}" alt="{{ $itemName }}" width="80px" />
                                                    <div class="game-token">
                                                        <img src="{{ asset('images/shop/jetons/3.png') }}" />
                                                        {{ $value->token }}
                                                    </div>
                                                    <p>
                                                        <strong>{{ ($key == 0) ? 'SKIN' : 'POUVOIR' }}</strong>
                                                        {{ $itemName }}
                                                    </p>
                                                </a>
                                            </div>
                                        @endforeach
                                    @endforeach
                                    <p class="fw-bold">Les Récompenses qui se fabriquent dans la mine avec les déchets de Pioche et les Catalyseurs</p>
                                    @foreach($items as $key => $item)
                                        @foreach ($item->where('token', '=', 0) as $value)
                                            @php
                                                $routeName = ($key == 0) ? 'shop.skin.show' : 'shop.power.show';
                                                $imgPath = ($key == 0) ? 'images/shop/skins/' : 'images/shop/objects/';
                                                $itemName = ($key == 0) ? $value->name : $value->name_shop;
                                            @endphp

                                            <div class="col-sm-2">
                                                <a href="{{ route($routeName, $value) }}" style="text-decoration:none">
                                                    <img src="{{ asset($imgPath . $value->id . '.jpg') }}" alt="{{ $itemName }}" width="80px" />
                                                    <p>
                                                        {{ $itemName }}
                                                    </p>
                                                </a>
                                            </div>
                                        @endforeach
                                    @endforeach
                                </div>
                                <div class="separator-primary">
                                    Les derniers héros : drapeau !
                                    <div class="stars"></div>
                                </div>
                                <p class="m-1">
                                    <strong>Ils sont {{ $flags->total() }} à avoir le Drapeau Mysthoriä</strong><br>
                                    Voici les derniers héros :
                                </p>
                                <div class="d-flex justify-content-center">
                                    @foreach($lastFlags as $key => $player)
                                        @include('components.user-card', ['user' => $player->user, 'grade' => true])
                                    @endforeach
                                </div>
                            @else
                                <p class="m-1">Ils sont {{ $flags->total() }} à avoir le Drapeau Mysthoriä</p>
                                <table class="table table-sm table-striped-primary text-center">
                                    <thead>
                                    <tr>
                                        <th>Pos</th>
                                        <th>Blabla</th>
                                        <th>Date</th>
                                        <th>Fragments trouvés</th>
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
                                                    <a href="{{ route('user.show', $player->user)}}">
                                                        <strong class="text-black">
                                                            {!! $player->user->username !!}
                                                        </strong>
                                                    </a>
                                                </td>
                                                <td>le {{ $player->pivot->created_at->format(' d-m-Y à H:i') }}</td>
                                                <td>{{ number_format($player->stats('MYSTHORIA')->total_token ?? 0, 0, ' ', ' ') }}</td>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $flags->links('pagination.default') }}
                            @endif
                        </div>
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
