<x-app-layout :title="'Blablaland, Madame Pipi : gagne des items exclusifs Madame Pipi XD'">
    <div class="row">
        <div class="col-sm-9">
            <div class="container-header-primary">
                <i class="fas fa-trophy"></i>
                Mini jeu Madame Pipi :)
            </div>
            <div class="container-content-primary p-0" id ="games">
                <div class="game-header p-1">
                    <div class="text-center">
                        <img src="{{ asset('images/games/header_page9.png') }}" class="mt-1" />
                    </div>
                    <div class="row game-description">
                        <div class="col-sm-3 text-center">
                            <img src="{{ asset('images/games/skins/perso8.png') }}" />
                        </div>
                        <div class="col-sm-9">
                            <div class="card">
                                <div class="card-header">Mini Jeu : Madame Pipi :)</div>
                                <div class="card-body">
                                    <p>Madame Pipi n'est pas celle que vous pensez... Derrière ce comptoir se cache en fait une Super Héroïne du lavage incroyablement équipée (Même Batman serait super jaloux de son arsenal) !! Par contre, pour le gagner... il ne faut pas la vexer !!</p>
                                    <p>Elle s'occupe du ménage des Toilettes de l'Irwish, et peut devenir très généreuse en offrant son arsenal de nettoyage à ceux qui seront gentils avec elle et qui valoriseront son travail :)</p>
                                    <p>Mettez 1 BBL dans sa p'tite boîte et vous aurez une chance de gagner des cadeaux, ou une lingette, ou rien... si ce n'est d'avoir des WC propres :)</p>
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
                                    <a class="nav-link @if (empty(request()->type)) active @endif" href="{{ route('game.irwish-toilet') }}">Madame Pipi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if (request()->type === 'flag') active @endif" href="{{ route('game.irwish-toilet', 'flag') }}">Drapeaux</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            @if (empty(request()->type))
                                <div class="separator-primary">
                                    Les lots à gagner !!
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
                                    <p>Les skins et les Montures se gagnent dans l'ordre. C'est à dire que vous ne pourrez gagner le skin Ultimate que si vous avez déjà gagné le skin Racing, qui lui ne peut être gagné que si vous avez déjà remporté le skin Madame Pipi. Il en va de même pour les montures. Le drapeau quant à lui ne peut être remporté qu'une fois l'ensemble des 3 skins et 2 montures remportés !! Et là, Madame Pipi sera ravie !!</p>
                                </div>
                                <div class="separator-primary">
                                    Les derniers héros : drapeau !
                                    <div class="stars"></div>
                                </div>
                                <p class="m-1">
                                    <strong>Ils sont {{ $flags->total() }} à avoir le Drapeau Madame Pipi</strong><br>
                                    Voici les derniers blablas gagnants :
                                </p>
                                <div class="d-flex justify-content-center">
                                    @foreach($lastFlags as $key => $player)
                                        @include('components.user-card', ['user' => $player->user, 'grade' => true])
                                    @endforeach
                                </div>
                            @else
                                <p class="m-1">Ils sont {{ $flags->total() }}  à avoir le Drapeau Madame Pipi</p>
                                <table class="table table-sm table-striped-primary text-center">
                                    <thead>
                                    <tr>
                                        <th>Pos</th>
                                        <th>Blabla</th>
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
