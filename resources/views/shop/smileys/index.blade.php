<x-app-layout :title="'Blablaland Boutique Smiles, tchat ados gratuit, jeu virtuel de tchat en flash'">
   <div class="row">
       <div class="col-sm-9">
           @include('components.alert')
           @if (Route::currentRouteName() === 'shop.smiley.show')
               <div class="container-header-quaternary">
                   {{ $smiley->name }}
               </div>
               <div class="container-content-quaternary">
                   <div class="row mt-2">
                       <div class="col-sm-3 text-center separator-preview">
                           <img src="{{ asset('images/shop/smileys/' . $smiley->id . '_preview.jpg') }}" />
                           <span class="text-preview fw-bold">Aperçu du pack</span>
                           <small class="text-preview">Note : en vrai, c'est encore mieux :)</small>
                       </div>
                       <div class="col-sm-9">
                           <h3>{{ $smiley->name }}</h3>
                           <p>{!! $smiley->description !!}</p>
                           @if (!$user)
                               <div class="alert alert-danger text-center">
                                   <p class="fw-bold">
                                       Tu dois être connecté(e) pour acheter ce pack. </br>
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
                               @if ($user->player->smileys->contains($smiley))
                                   <div class="alert alert-warning text-center">
                                       <img src="{{ asset('images/blablaland/success.gif') }}" alt="Success" /> <br>
                                       <strong>Félicitation, tu possèdes ce pack !</strong> <br>
                                       <a href="{{ route('game') }}">
                                           Rends-toi sur le tchat pour l'utiliser !
                                       </a>
                                   </div>
                               @else
                                   @if (!$smiley->unavailable)
                                       <div class="d-flex d-flex">
                                           <div class="alert alert-warning text-center flex-fill">
                                               <p>Tes Blabillons :
                                                   <strong class="color-quaternary">
                                                       {{ $user->player->blabillon }} BBL
                                                   </strong>
                                               </p>
                                               <p>Prix total :
                                                   <strong class="text-success">
                                                       {{ $smiley->price }} BBL
                                                   </strong>
                                               </p>
                                           </div>
                                       </div>
                                       <form method="POST">
                                           @csrf
                                           <input type="hidden" name="smiley_id" value="{{ $smiley }}">
                                           <button type="submit" class="bg-transparent border-0">
                                               <img alt="acheter" src="{{ asset('images/shop/btn-buy.png') }}" />
                                           </button>
                                       </form>
                                   @endif
                               @endif
                           @endif
                       </div>
                   </div>
               </div>
           @endif
           <div class="container-header-quaternary">
               <i class="fas fa-shopping-cart"></i>
               Liste des smileys
           </div>
           <div class="container-content-quaternary">
               <div class="row mt-2">
                   <div class="col-sm-5 text-center">
                       <img src="{{ asset('images/shop/smiles-header.jpg') }}" />
                   </div>
                   <div class="col-sm-7">
                       <h3 class="shop-smiley-title">Boutique de smiles</h3>
                       <p class="shop-smiley-description ">
                           Exprime toutes les émotions qui t'envahissent sur le tchat, toutes sans exception ! Ils sont mignons, déjantés et drôles : ils n'attendent que toi pour prendre vie dans le monde de Blablaland !
                           Alors viens vite découvrir tous nos packs de smiles pour en mettre plein les yeux et t'éclater à faire la fête bien haut en couleur dans le jeu !
                       </p>
                   </div>
                   <div class="col-sm-12 mt-2">
                       <div class="row">
                           <div class="col-sm-10">
                               <div class="shop-pagination">
                                   {{ $smileys->links('pagination.default') }}
                               </div>
                           </div>
                       </div>
                       <div class="col-sm-12">
                           <table class="table table-striped">
                               @foreach ($smileys as $smiley)
                                   @include ('shop.components.smiley', ['smiley' => $smiley])
                               @endforeach
                           </table>
                           <div class="shop-pagination">
                               {{ $smileys->links('pagination.default') }}
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
