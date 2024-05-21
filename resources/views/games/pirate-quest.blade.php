<x-app-layout :title="'Blablaland, Pirate : Pars à la recherche du trésor XD'">
    <div class="row">
        <div class="col-sm-9">
            <div class="container-header-primary">
                <i class="fas fa-trophy"></i>
                Mini jeu Pirate
            </div>
            <div class="container-content-primary p-0" id ="games">
                <div class="game-header p-1">
                    <div class="text-center">
                        <img src="{{ asset('images/games/header_page6.png') }}" class="mt-1" />
                    </div>
                    <div class="row game-description">
                        <div class="col-sm-3 text-center">
                            <img src="{{ asset('images/games/skins/perso6.png') }}" />
                        </div>
                        <div class="col-sm-9">
                            <div class="card">
                                <div class="card-header">Mini Jeu : Pirate</div>
                                <div class="card-body">
                                    <p>Partez à la rencontre du Pirate Jhon Gold sur l'Île Tortue et lancez vous à la conquête de Trésors. Un petit détour par l'Irwish sera plus que recommandé, notre ami Pirate étant du genre... Elixir !<br>Amassez les Perles et rendez-vous au fond des Océans rencontrer une merveilleuse Sirène... si friande de ces petites boules précieuses afin de gagner tout plein de cadeaux !! Et notament, LE Drapeau Pirate !!</p>
                                    <p>Partez à la chasse au Trésors du Pirate !</p>
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
                                    <a class="nav-link @if (empty(request()->type)) active @endif" href="{{ route('game.pirate-quest') }}">Quête Pirate</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if (request()->type === 'flag') active @endif" href="{{ route('game.pirate-quest', 'flag') }}">Drapeaux</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            @if (empty(request()->type))
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
                                                        <p><strong>SKIN</strong> {{ $value->name }}</p>
                                                    </a>
                                                </div>
                                            @else
                                                <div class="col-sm-2">
                                                    <a href="{{ route('shop.power.show', $value) }}" style="text-decoration:none">
                                                        <img src="{{ asset('images/shop/objects/' . $value->id . '.jpg') }}" alt="{{ $value->name_shop }}" width="80px" />
                                                        <p><strong>POUVOIR</strong> {{ $value->name_shop }}</p>
                                                    </a>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endforeach
                                    <p>De nombreux cadeaux à gagner en échangeant les précieuses Perles auprès de la Sirène. Un des plus précieux cadeau est le fameux Drapeau Pirate qui se gagne rarement sur le plus gros lot de perles. Bonne chasse à tous !!</p>
                                </div>
                                <div class="separator-primary">
                                    Les derniers héros : drapeau !
                                    <div class="stars"></div>

                                </div>
                                <p class="m-1">
                                    <strong>Ils sont {{ $flags->total() }} à avoir le Drapeau Pirate</strong><br>
                                    Voici les derniers blablas gagnants :
                                </p>
                                <div class="d-flex justify-content-center">
                                    @foreach($lastFlags as $key => $player)
                                        @include('components.user-card', ['user' => $player->user, 'grade' => true])
                                    @endforeach
                                </div>
                            @else
                                <p class="m-1">Ils sont {{ $flags->total() }}  à avoir le Drapeau Pirate</p>
                                <table class="table table-sm table-striped-primary text-center">
                                    <thead>
                                    <tr>
                                        <th>Pos</th>
                                        <th>Blabla</th>
                                        <th>Date</th>
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
                                                    <strong style="color: black">
                                                        {!! $player->user->username !!}
                                                    </strong>
                                                </a>
                                            </td>
                                            <td>le {{ $player->pivot->created_at->format(' d-m-Y à H:i') }}</td>
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
