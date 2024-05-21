<x-app-layout :title="'Blablaland Boutique, tchat ados gratuit, jeu chat et monde virtuel de tchat en flash'">
    <div class="row">
        <div class="col-sm-9">
            <div class="container-header-tertiary">
                <i class="fas fa-shopping-cart"></i>
                Boutique
            </div>
            <div class="container-content-tertiary">
                <div class="text-center shop-info">
                    <p>
                        <img src="{{ asset('images/blablaland/news_new.gif') }}" />
                        DÉCOUVRE LES DERNIÈRES MERVEILLES DE BLABLALAND !!
                    </p>
                    @foreach($items as $key => $item)
                        @foreach ($item as $value)
                            @if ($key == 0)
                                <a href="{{ route('shop.skin.show', $value) }}" style="text-decoration:none">
                                    <img src="{{ asset('images/shop/skins/' . $value->id . '.jpg') }}" alt="{{ $value->name }}" width="65px" />
                                </a>
                            @else
                                <a href="{{ route('shop.power.show', $value) }}" style="text-decoration:none">
                                    <img src="{{ asset('images/shop/objects/' . $value->id . '.jpg') }}" alt="{{ $value->name_shop }}" width="65px" />
                                </a>
                            @endif
                        @endforeach
                    @endforeach
                </div>
                <div class="row justify-content-center" id="shop">
                    <div class="col-4">
                        <a class="card text-center" href="{{ route('shop.skin.index') }}" style="height: 280px">
                            <div class="card-body">
                                <img src="{{ asset('/images/shop/header_skin.jpg') }}" width="120px" />
                                <p class="shop-title">Les skins</p>
                                <p>
                                    Relook ton blabla avec des centaines de skins !! Du commando super hi-tech au p'tit martien bizarre,
                                    en passant par une flopée de super délires, à découvrir d'urgence !
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-4">
                        <a class="card text-center" href="{{ route('shop.power.index') }}" style="height: 280px">
                            <div class="card-body">
                                <img src="{{ asset('/images/shop/header_object.jpg') }}" width="120px" />
                                <p class="shop-title">Objets pouvoirs</p>
                                <p>
                                    Booste ton blabla sur le Tchat avec tout plein d'objets en tout genre. Envole-toi dans les airs avec un hélicoptère,
                                    bois des potions pour courir plus vite, etc...
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-4">
                        <a class="card text-center" href="{{ route('shop.smiley.index') }}" style="height: 280px">
                            <div class="card-body">
                                <img src="{{ asset('/images/shop/header_smile.jpg') }}" width="120px" />
                                <p class="shop-title">Les Smileys</p>
                                <p>
                                    La liste des packs de smiles, martiens, fun, gore, etc..., tout est là, et c'est tout pour toi :)
                                    Décore et rends tes conversations sur le T'chat plus vivantes et hautes en couleurs !
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <p class="mt-3">
                    Ici, tu trouveras tout ce qu'il te faut pour relooker et booster ton blabla pour le jeu de tchat ^^ <br>
                    <strong>Tu veux changer de look dans le jeu de tchat</strong>, ou tu veux pouvoir t'envoler dans les airs,
                    ou peut-être faire des smiles super fun, ou une potion pour courir plus vite que la lumière... ?
                </p>
                <div class="footer-page" style="margin: -4px"></div>
            </div>
        </div>
        <x-navbar-right/>
    </div>
@section('style')
    <link rel="stylesheet" href="{{ asset('css/pages/_shop.css') }}">
@endsection
</x-app-layout>
