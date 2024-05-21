<x-app-layout :title="'Blablaland Boutique objets, tchat ados gratuit, jeu virtuel de tchat en flash'">
    <div class="row">
        <div class="col-sm-9">
            @include('components.alert')
            @if (Route::currentRouteName() === 'shop.power.show')
                <div class="container-header-quaternary">
                    {{ $power->name }}
                </div>
                <div class="container-content-quaternary">
                    <div class="row mt-2">
                        <div class="col-sm-4 text-center separator-preview">
                            <img src="{{ asset('images/shop/objects/' . $power->id . '_prev.jpg') }}" />
                            <span class="text-preview fw-bold">Aperçu de l'objet en action</span>
                            <small class="text-preview">Note : en vrai, c'est encore mieux :)</small>
                        </div>
                        <div class="col-sm-8">
                            <h3>{{ $power->name }}</h3>
                            <p>{!! $power->description !!}</p>
                            @if (!$user)
                                <div class="alert alert-danger text-center">
                                    <p class="fw-bold">
                                        Tu dois être connecté(e) pour acheter cet objet. </br>
                                        <a href="{{ route('login') }}">
                                            Se connecter
                                        </a>
                                        ou
                                        <a href="{{ route('register') }}">
                                            s'inscrire
                                        </a>
                                    </p>
                                </div>
                            @else
                                @if (!$power->unavailable)
                                    @if (!Auth::user()->player->powers->contains($power) || (Auth::user()->player->powers->contains($power) && ($power->type == \App\Enums\PowerType::Quantity || $power->type == \App\Enums\PowerType::Time)))
                                        <form method="POST">
                                            <div class="row">
                                                @csrf
                                                @if ($power->type == \App\Enums\PowerType::Quantity || $power->type == \App\Enums\PowerType::Time)
                                                    <div class="col text-center">
                                                        <p>
                                                            <strong>
                                                                Quantité (pack de {{ $power->type === \App\Enums\PowerType::Quantity ? $power->pack : $power->pack / 60 . 'min' }})
                                                            </strong> <br>
                                                            <input type="number" name="quantity" id="quantity" min="1" value="1">
                                                            @if (Auth::user()->player->powers->contains($power))
                                                                <br><span class="text-muted">
                                                     Tu en as {{ Auth::user()->player->powers()->wherePivot('power_id', $power->id)->first()->pivot->quantity }}
                                                    </span>
                                                            @endif
                                                        </p>
                                                        <script>
                                                            document.getElementById('quantity').addEventListener('input', function (evt) {
                                                                let val = this.value * {{ $power->price }}
                                                                document.getElementById('price').innerHTML = val
                                                                if (val > {{ $user->player->blabillon }}) {
                                                                    document.getElementById("price-color").className = "text-danger"
                                                                } else {
                                                                    document.getElementById("price-color").className = "text-success"
                                                                }
                                                            })
                                                        </script>
                                                    </div>
                                                @endif
                                                <div class="col">
                                                    <div class="alert alert-warning text-center">
                                                        <p>Tes Blabillons :
                                                            <strong class="color-quaternary">
                                                                {{ $user->player->blabillon }} BBL
                                                            </strong>
                                                        </p>
                                                        <p>Prix total :
                                                            <strong id="price-color" class="text-success">
                                                                <span id="price">{{ $power->price }}</span>
                                                                BBL
                                                            </strong>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <input type="hidden" name="power_id" value="{{ $power->id }}">
                                                <button type="submit" class="bg-transparent border-0">
                                                    <img alt="acheter" src="{{ asset('images/shop/btn-buy.png') }}" />
                                                </button>
                                            </div>
                                        </form>
                                    @elseif(Auth::user()->player->powers->contains($power))
                                        <div class="alert alert-warning text-center">
                                            <img src="{{ asset('images/blablaland/success.gif') }}" alt="Success" /> <br>
                                            <strong>Félicitation, tu possèdes cet objet !</strong> <br>
                                            <a href="{{ route('game') }}">
                                                Rends-toi sur le tchat pour l'utiliser !
                                            </a>
                                        </div>
                                    @endif
                                @endif
                            @endif
                        </div>
                    </div>
                </div>

            @endif
            <div class="container-header-quaternary">
                <i class="fas fa-shopping-cart"></i>
                Liste des objets
            </div>
            <div class="container-content-quaternary">
                <div class="row mt-2">
                    <div class="col-sm-5 text-center">
                        <img src="{{ asset('images/shop/objects-header.jpg') }}" />
                    </div>
                    <div class="col-sm-7">
                        <h3 class="shop-skin-title">Boutique d'objets</h3>
                        <p class="shop-skin-description ">
                            Avec les pouvoirs/objets magiques, Blablaland devient encore plus fun !
                            Envole toi dans les airs avec le Jetpack, avale une potion magique pour
                            courir ou nager plus vite, téléporte-toi, pose des bombes, déclare ton
                            amour grâce aux coeurs, crée des trous noirs, des séismes etc...
                            tout simplement énorme !
                        </p>
                    </div>
                    <div class="col-sm-12 mt-2">
                        @if (request()->get('search'))
                            <div class="alert alert-warning text-center">
                                Résultat de la recherche pour
                                <div class="fw-bold">
                                    "{{ request()->get('search') }}"
                                </div>
                                <div class="fw-bold">
                                    <a href="{{ route('shop.power.index') }}">
                                        Actualiser la liste des objets
                                    </a>
                                </div>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <a href="{{ route('shop.power.index') }}" class="btn btn-outline-primary btn-sm">Tous</a>
                                <a href="{{ route('shop.power.gender', 1) }}" class="btn btn-outline-primary btn-sm">Montures</a>
                                <a href="{{ route('shop.power.gender', 2) }}" class="btn btn-outline-primary btn-sm">Bliblis</a>
                                <a href="{{ route('shop.power.gender', 3) }}" class="btn btn-outline-primary btn-sm">Maisons</a>
                                <a href="{{ route('shop.power.gender', 4) }}" class="btn btn-outline-primary btn-sm">Potions</a>
                                <a href="{{ route('shop.power.gender', 5) }}"  class="btn btn-outline-primary btn-sm">Jetons</a>
                                <a href="{{ route('shop.power.gender', 6) }}" class="btn btn-outline-primary btn-sm">Autres</a>
                            </div>
                            <div class="col-sm-9 mt-2">
                                <div class="shop-pagination">
                                    {{ $powers->links('pagination.default') }}
                                </div>
                            </div>
                            <div class="col-sm-3 mt-2">
                                <form method="GET" action="{{ route('shop.power.filter') }}">
                                    <input class="form-control mb-2"
                                           name="search"
                                           type="text"
                                           maxlength="30"
                                           placeholder="Rechercher..." />
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <table class="table table-striped">
                                @foreach ($powers as $power)
                                    @include ('shop.components.power', ['power' => $power])
                                @endforeach
                            </table>
                            <div class="shop-pagination">
                                {{ $powers->links('pagination.default') }}
                            </div>
                            <div class="col-sm-12 text-center">
                                <a href="{{ route('shop.power.index') }}" class="btn btn-outline-primary btn-sm">Tous</a>
                                <a href="{{ route('shop.power.gender', 1) }}" class="btn btn-outline-primary btn-sm">Montures</a>
                                <a href="{{ route('shop.power.gender', 2) }}" class="btn btn-outline-primary btn-sm">Bliblis</a>
                                <a href="{{ route('shop.power.gender', 3) }}" class="btn btn-outline-primary btn-sm">Maisons</a>
                                <a href="{{ route('shop.power.gender', 4) }}" class="btn btn-outline-primary btn-sm">Potions</a>
                                <a href="{{ route('shop.power.gender', 5) }}"  class="btn btn-outline-primary btn-sm">Jetons</a>
                                <a href="{{ route('shop.power.gender', 6) }}" class="btn btn-outline-primary btn-sm">Autres</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-page" style="margin: -4px"></div>
            </div>
        </div>
        <x-navbar-right/>
    </div>
@section('style')
    <link rel="stylesheet" href="{{ asset('css/pages/_shop.css') }}">
@endsection
</x-app-layout>
