<x-app-layout>
    <div class="row">
        <div class="col-sm-9">
            <div class="container-header-tertiary">
                <i class="fas fa-paint-brush"></i>
                BBL'ART CLUB
            </div>
            <div class="container-content-tertiary">
                <div class="row">
                    <div class="col-sm-4 text-center">
                        <img src="{{ asset('images/community/bblartclub_logo_persos.jpg') }}" />
                    </div>
                    <div class="col-sm-8">
                        <span class="fs-5">Le Blabla'Art Club</span>
                        <p>Libère tout le Powa qui sommeille en toi, lâche ton esprit artistique, et partage toutes tes passions autour de Blablaland !</p>
                        <p>
                            Tu trouveras sur cette page le meilleur du ArtClub.
                            L'activité principale du ArtClub se trouve <a href="#">ici sur le forum ArtClub !</a>
                        </p>
                        <div class="alert alert-warning">
                            <strong>Toi aussi participe au BBL'ArtClub !</strong>
                            <p>Fais des dessins, des vidéos, des photos, déguise toi, crée des jeux etc... Lâche toi avec Blabla et présente nous tes créations :</p>
                            <p>
                                <strong>1/</strong> Fais une création sur Blablaland<br>
                                <strong>2/</strong> Poste la sur le <a href="#">Forum ArtClub</a><br>
                                <strong>2/</strong> Si ta création a beaucoup de succès, elle sera présentée sur cette page et tu gagneras un ArtClub Point !
                            </p>
                            <p>A toi de jouer, <a href="#">Montre nous tes créations !</a></p>
                        </div>
                    </div>
                </div>
                <div class="footer-page" style="margin: -4px"></div>
            </div>

            @if (Route::currentRouteName() === 'community.artwork.show')
                <div class="container-header-quaternary">
                    <i class="fas fa-paint-brush"></i>
                    BBL'ART CLUB :
                </div>
                <div class="container-content-quaternary">
                    <div class="row">
                        <div class="col-sm-3 text-center artwork-frame text-bottom">
                            <img src="{{ $artwork->pictureMinUrl }}" alt="{{ $artwork->name }}" class="artwork-picture" />
                            </a>
                        </div>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-7">
                                    <h4>{{ $artwork->name }}</h4>
                                    <p class="m-0">Ajouté le <strong>{{ $artwork->created_at->format('d.m.Y') }}</strong></p>
                                    <p class="m-0">Affiché <strong>{{ $artwork->views }} fois</strong></p>
                                </div>
                                <div class="col-sm-3 text-end">
                                    Auteur : <a href="{{ route('user.show', $artwork->user) }}" class="text-decoration-none fw-bold">{!! $artwork->user->usernameColor !!}</a>
                                    <p class="m-0">{{ $countArtworksUser }} ArtClub Pts</p>
                                </div>
                                <div class="col-sm-2 text-end">
                                    <img src="{{ asset($artwork->user->avatarUrl) }}" class="rounded-3" style="float:right"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 text-center">
                            <hr>
                            <img src="{{ $artwork->pictureUrl }}" alt="{{ $artwork->name }}" style="max-height:400px" />
                            <div class="mt-2">
                                <strong>Notes</strong>
                                <p>{{ $artwork->description }}</p>
                                <a href="{{ route('topic.show', $artwork->topic) }}">
                                    Commenter sur le forum
                                </a> - {{ $artwork->topic->posts()->count() }} commentaire(s)
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <div class="container-header-tertiary">
                <i class="fas fa-paint-brush"></i>
                Vos meilleures créations
            </div>
            <div class="container-content-tertiary">
                <div class="row">
                    <div class="m-2">
                        {{ $artworks->links('pagination.default') }}
                    </div>
                    @foreach ($artworks as $artwork)
                        <div class="col-sm-3 text-center artwork-frame mb-2">
                            <img src="{{ $artwork->pictureMinUrl }}" alt="{{ $artwork->name }}" class="artwork-picture" />
                            <a href="{{ route('community.artwork.show', $artwork) }}">
                                {{ $artwork->name }}</a><br>
                            par <a href="{{ route('user.show', $artwork->user) }}" class="fw-bold">
                                {!! $artwork->user->player->pseudoColor !!}
                            </a>
                        </div>
                    @endforeach
                    <div class="m-2">
                        {{ $artworks->links('pagination.default') }}
                    </div>
                </div>
            </div>
        </div>
        <x-navbar-right/>
    </div>
@section('style')
    <link rel="stylesheet" href="{{ asset('css/pages/_artwork.css') }}">
@endsection
</x-app-layout>
