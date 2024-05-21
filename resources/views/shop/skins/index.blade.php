<x-app-layout :title="'Blablaland Boutique Skins et Avatars pour le jeu de tchat ! Prends un perso et viens tchatter, discuter et jouer gratuitement au jeu virtuel de tchat ados en flash'">
    <div class="row">
        <div class="col-sm-9">
            @include('components.alert')
            @if (Route::currentRouteName() === 'shop.skin.show')
                <div class="container-header-quaternary">
                    {{ $skin->name }}
                </div>
                <div class="container-content-quaternary">
                    <div class="row">
                        <div class="col-sm-2 text-center">
                            <img src="{{ asset('images/shop/skins/' . $skin->id . '.jpg') }}" />
                        </div>
                        <div class="col-sm-10">
                            <h3>{{ $skin->name }}</h3>
                            <p>{!! $skin->description !!}</p>
                            @if (!$user)
                                <div class="alert alert-danger text-center">
                                    <p class="fw-bold">
                                        Tu dois être connecté(e) pour acheter ce skin. </br>
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
                                @if ($user->player->skins->contains($skin))
                                    <div class="alert alert-warning text-center">
                                        <img src="{{ asset('images/blablaland/success.gif') }}" alt="Success" /> <br>
                                        <strong>Félicitation, tu possèdes ce skin !</strong> <br>
                                        <a href="{{ route('account.index') }}">
                                            Rends-toi sur ton Profil pour mettre ce skin !
                                        </a>
                                    </div>
                                @else
                                    @if (!$skin->unavailable)
                                        @if ($skin->special === \App\Enums\SkinSpecial::Mysthoria)
                                            <div class="alert alert-warning text-center flex-fill">
                                                <p>
                                                    <strong>
                                                        Skin à créer jeu Mysthoriä
                                                    </strong> <br>
                                                    Rendez-vous dans la mine de Blablaland pour en savoir plus
                                                </p>
                                            </div>
                                        @elseif ($skin->special === \App\Enums\SkinSpecial::IrwishToilet)
                                            <div class="alert alert-warning text-center flex-fill">
                                                <p>
                                                    <strong>
                                                        Skin Exclusif "Madame Pipi"
                                                    </strong> <br>
                                                    Ce skin est à gagner dans les Toilettes de l'Irwish !!
                                                </p>
                                            </div>
                                        @elseif ($skin->special === \App\Enums\SkinSpecial::PirateQuest)
                                            <div class="alert alert-warning text-center flex-fill">
                                                <p>
                                                    <strong>
                                                        Skin Sirène
                                                    </strong> <br>
                                                    Ce skin est une récompense de la Quête du Pirate et de la Sirène
                                                </p>
                                            </div>
                                        @elseif ($skin->special === \App\Enums\SkinSpecial::Cookie)
                                            <div class="alert alert-warning text-center flex-fill">
                                                <p>
                                                    <strong>
                                                        COLLECTOR Fête du Soleil Levant
                                                    </strong> <br>
                                                    Ce skin rare se gagne exclusivement en mangeant des Fortune Cookies
                                                </p>
                                            </div>
                                        @elseif ($skin->special === \App\Enums\SkinSpecial::Card)
                                            <div class="alert alert-warning text-center flex-fill">
                                                <p>
                                                    <strong>
                                                        Skin Collector Carte Cadeau
                                                    </strong> <br>
                                                    Ce skin était offert grâce à une carte cadeau que l'on pouvait obtenir en achetant sur la Boutique Niveau99-Shop
                                                </p>
                                            </div>
                                        @else
                                            <div class="d-flex d-flex">
                                                <div class="alert alert-warning text-center flex-fill">
                                                    <p>Tes Blabillons :
                                                        <strong class="color-quaternary">
                                                            {{ $user->player->blabillon }} BBL
                                                        </strong>
                                                    </p>
                                                    <p>Prix total :
                                                        <strong class="text-success">
                                                            {{ $skin->price }} BBL
                                                        </strong>
                                                    </p>
                                                </div>
                                                @if ($skin->special === \App\Enums\SkinSpecial::HauntedManor)
                                                    <p class="text-center color-quaternary fw-bold fs-3 m-2 p-2">+</p>
                                                    <div class="alert alert-warning text-center flex-fill">
                                                        <p>
                                                            <strong>
                                                                {{ $skin->token }} Jetons Manoir Hanté
                                                            </strong>
                                                        </p>
                                                    </div>
                                                @elseif ($skin->special === \App\Enums\SkinSpecial::Dungeon)
                                                    <p class="text-center color-quaternary fw-bold fs-3 m-2 p-2">+</p>
                                                    <div class="alert alert-warning text-center flex-fill">
                                                        <p>
                                                            <strong>
                                                                {{ $skin->token }} Jetons Donjon
                                                            </strong>
                                                        </p>
                                                    </div>
                                                @elseif ($skin->special === \App\Enums\SkinSpecial::Pyramid)
                                                    <p class="text-center color-quaternary fw-bold fs-3 m-2 p-2">+</p>
                                                    <div class="alert alert-warning text-center flex-fill">
                                                        <p>
                                                            <strong>
                                                                {{ $skin->token }} Jetons Pyramide
                                                            </strong>
                                                        </p>
                                                    </div>
                                                @elseif ($skin->special === \App\Enums\SkinSpecial::NavalBattle)
                                                    <p class="text-center color-quaternary fw-bold fs-3 m-2 p-2">+</p>
                                                    <div class="alert alert-warning text-center flex-fill">
                                                        <p>
                                                            <strong>
                                                                {{ $skin->token }} Jetons Blablataille Navale
                                                            </strong>
                                                        </p>
                                                    </div>
                                                @endif
                                            </div>
                                            <form method="POST">
                                                @csrf
                                                <input type="hidden" name="skin_id" value="{{ $skin->id }}">
                                                <button type="submit" class="bg-transparent border-0">
                                                    <img alt="acheter" src="{{ asset('images/shop/btn-buy.png') }}" />
                                                </button>
                                            </form>
                                        @endif
                                    @endif
                                @endif
                            @endif
                        </div>
                    </div>
                </div>

            @endif
            <div class="container-header-quaternary">
                <i class="fas fa-shopping-cart"></i>
                Liste des skins
            </div>
            <div class="container-content-quaternary">
                <div class="row mt-2">
                    <div class="col-sm-5 text-center">
                        <img src="{{ asset('images/shop/skins-header.jpg') }}" />
                    </div>
                    <div class="col-sm-7 mb-2">
                        <h3 class="shop-skin-title">Boutique des skins</h3>
                        <p class="shop-skin-description">
                            Découvre une multitude de Skins pour le <strong>t'chat</strong> !
                            Du plus romantique au plus guerrier, en passant par le plus mignon,
                            ou le plus impressionant !! Chaque skin possède ses propres caractéristiques et
                            pouvoirs magiques. Alors n'attends pas plus pour te faire plaisir et épater tes amis
                            sur le <strong>tchat</strong>, à toi tous les Skins Blablas !
                        </p>
                    </div>
                    <div class="col-sm-9">
                        @if (request()->get('search'))
                            <div class="alert alert-warning text-center">
                                Résultat de la recherche pour
                                <div class="fw-bold">
                                    "{{ request()->get('search') }}"
                                </div>
                                <div class="fw-bold">
                                    <a href="{{ route('shop.skin.index') }}">
                                        Actualiser la liste des skins
                                    </a>
                                </div>
                            </div>
                        @endif
                        <div class="shop-pagination">
                            {{ $skins->links('pagination.default') }}
                        </div>
                        <table class="table table-striped">
                            @foreach ($skins as $skin)
                                @include ('shop.components.skin', ['skin' => $skin])
                            @endforeach
                        </table>
                        <div class="shop-pagination">
                            {{ $skins->links('pagination.default') }}
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <form method="GET" action="{{ route('shop.skin.filter') }}">
                            <input class="form-control mb-2"
                                   name="search"
                                   type="text"
                                   maxlength="30"
                                   placeholder="Rechercher..." />
                        </form>
                        @foreach ($groups as $group)
                            <div class="category-list">
                                <img src="{{ asset('images/star.png') }}" />
                                <a href="{{ route('shop.skin.group', $group) }}">
                                    {{ $group->name }}
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div>
                            <span>Les catégories </span>
                            @foreach ($groups as $group)
                                <img src="{{ asset('images/star.png') }}" />
                                <a href="{{ route('shop.skin.group', $group) }}">
                                    {{ $group->name }}
                                </a>
                            @endforeach
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
