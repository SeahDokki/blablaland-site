<x-app-layout>
    @auth
        @if ($firstLogin)
            <div class="alert text-center first-login">
                <strong>CADEAU DU JOUR :)</strong><br>
                Comme c'est ta première connexion de la journée, on t'offre <strong>100 BBL</strong> !!
            </div>
            <script>
                $(document).ready(function() {
                    setTimeout(() => {
                        $('.first-login').fadeOut(1000, function() {
                            $(this).remove()
                        })
                    }, 1500)
                })
            </script>
       @endif
    @endauth
    <div class="row">
        <div class="col-sm-9">
            @foreach($news->where('hidden', false) as $item)
                <a href="{{ route('news.show', $item) }}">
                    <img src="{{ asset($item->pictureUrl) }}" alt="{{ $item->topic->name }}" class="mb-2" />
                </a>
            @endforeach
            <div class="container-header-primary">
                <i class="fas fa-book"></i>
                L'actu du Jeu Blablaland
            </div>
            <div class="container-content-primary">
                <div class="news">
                    <div class="news-1">
                        <div class="row">
                            @foreach($news as $item)
                                <div class="col-sm-2 mb-2">
                                    <img src="{{ asset($item->pictureMinUrl) }}" alt="{{ $item->topic->name }}" class="rounded-3" />
                                </div>
                                <div class="col-sm-10" style="padding-left:1rem; padding-right:2rem">
                                    <span class="news-title fs-6">
                                        {{ $item->topic->name }}
                                    </span>
                                    <p class="news-description m-0">
                                        {{ $item->description }}
                                    </p>
                                    <p class="m-0">
                                        <a href="{{ route('news.show', $item) }}">
                                            [Voir en entier]
                                        </a>
                                        Publiée le {{ $item->topic->created_at->translatedFormat('d/m/Y à H:i') }}
                                    </p>
                                    <hr>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="news-2">
                        <ul>
                            <img alt="Les petites news" src="{{ asset('images/little-news.jpg') }}" />
                            @foreach($littleNews as $topic)
                                <li>
                                    <img src="{{ asset('images/star.png') }}" alt="Star"/>
                                    <a href="{{ route('topic.show', $topic) }}">
                                        {{ $topic->name }}
                                    </a>
                                    <p class="m-0 text-small">
                                        par
                                        @if (!$topic->user->trashed())
                                            <a href="{{ route('user.show', $topic->user) }}"><strong>{!! $topic->author !!}</strong></a>,
                                        @else
                                            <strong>{!! $topic->author !!}</strong>,
                                        @endif
                                        le {{ $topic->created_at->translatedFormat('d/m/Y à H:i') }}
                                    </p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @guest
                <div class="container-header-tertiary">
                    <i class="fas fa-question"></i>
                    QU'EST-CE QUE BLABLALAND ?
                </div>
                <div class="container-content-tertiary">
                    <div class="row">
                        <div class="col-sm-4 text-center">
                            <img src="{{  asset('images/blablaland/join.png') }}" alt="Rejoins nous" />
                        </div>
                        <div class="col-sm-8">
                            <p>
                                <strong>Blablaland est un jeu de tchat gratuit !!</strong><br>
                                <small>Jouable sans téléchargement simplement depuis son navigateur Internet.</small>
                            </p>
                            <p>
                                Pars à la découverte d'un monde surprenant et délirant !! Entre dans la peau de ton avatar, lance toi dans l'aventure seul ou entre potes et parcours le monde pour te remplir les poches de blabillons, ou participe à des jeux en temps réel carrément incroyables !! Blablaland est un univers sans limite, c'est comme une immense aire de tout et n'importe quoi. Une joyeuse pagaille !!
                            </p>
                            <p>
                                Tu peux te poser dans un coin et discuter tranquillement avec tes amis, ou bien mettre ton JetPack et faire des courses de folie, poser des bombes ou faire des batailles de tomates !!
                                <br>Sur Blablaland, l'ennui n'existe pas...
                            </p>

                            <p>Découvre un monde où ta seule limite sera ton imagination :)</p>
                            <a href="{{ route('register') }}">
                                Clique ici pour t'inscrire : Une nouvelle vie t'attend !!
                            </a>
                        </div>
                    </div>
                </div>
            @endguest
            <div class="container-header-quaternary">
                <i class="fas fa-pen"></i>
                BBL'ART CLUB
            </div>
            <div class="container-content-quaternary">
                <div class="row">
                    @foreach ($artworks as $artwork)
                        <div class="col-sm-3 text-center artwork-frame">
                            <a href="{{ route('community.artwork.show', $artwork) }}">
                                <img src="{{ $artwork->pictureMinUrl }}" alt="{{ $artwork->name }}" class="artwork-picture" />
                            </a>
                        </div>
                    @endforeach
                </div>
                <hr class="mb-0 mt-2">
               <p class="m-0 p-0 fst-italic">
                   Le BBL'Art Club regroupe les meilleures créations réalisées par les Fans autour du Tchat de Blablaland... Toi aussi participe :)
               </p>
            </div>
            <div class="container-header-quaternary">
                <i class="fas fa-comment"></i>
                BBL Forum
            </div>
            <div class="container-content-quaternary">
                <div class="topic">
                    <div class="topic-1">
                        <ul>
                            <strong>Les derniers topics...</strong>
                            @foreach($lastTopics as $topic)
                                <li>
                                    <img src="{{ asset('images/star.png') }}" alt="Star" />
                                    <a href="{{ route('topic.show', $topic) }}">
                                        {{ $topic->name }}
                                    </a>
                                    <p class="m-0 text-small">
                                        par
                                        @if (!$topic->user->trashed())
                                            <a href="{{ route('user.show', $topic->user) }}"><strong>{!! $topic->author !!}</strong></a>,
                                        @else
                                            <strong>{!! $topic->author !!}</strong>,
                                        @endif
                                        dernier post de
                                        @php($lastPostUser = $topic->posts->sortByDesc('created_at')->first())
                                        @if (!$lastPostUser->user->trashed())
                                            <a href="{{ route('user.show', $lastPostUser->user) }}">
                                                <strong>
                                                    {!! $lastPostUser->user->usernameColor !!}
                                                </strong>
                                            </a>
                                        @else
                                            <strong>Touriste_{{ $lastPostUser->user_id }}</strong>
                                        @endif
                                    </p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="topic-2">
                        <ul>
                            <strong>Les derniers messages...</strong>
                            @foreach($lastPosts as $post)
                                <li>
                                    <img src="{{ asset('images/star.png') }}" alt="Star"/>
                                    <a href="{{ route('topic.show', [$post->topic, 'page' => $post->topic->getPageForPost($post)]).'#'.$post->id }}">
                                        {{ $post->topic->name }}
                                    </a>
                                    <p class="m-0 text-small">
                                        par
                                        @if (!$post->topic->user->trashed())
                                            <a href="{{ route('user.show', $post->topic->user) }}"><strong>{!! $post->topic->author !!}</strong></a>,
                                        @else
                                            <strong>{!! $topic->author !!}</strong>,
                                        @endif
                                        dernier post de
                                        @if (!$post->user->trashed())
                                            <a href="{{ route('user.show', $post->user) }}"><strong>{!! $post->user->usernameColor !!}</strong>
                                            </a>
                                            @else
                                                <strong>{!! $topic->author !!}</strong>
                                        @endif
                                    </p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <x-navbar-right/>
    </div>
@section('style')
    <link rel="stylesheet" href="{{ asset('css/pages/_index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/_artwork.css') }}">
@endsection
</x-app-layout>
