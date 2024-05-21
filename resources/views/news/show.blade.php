<x-app-layout :title="$news->name">
    <div class="row forum">
        <div class="col-sm-9">
            <div class="container-header-primary">
                <i class="fas fa-book"></i>
                l'Actu de Blablaland
            </div>
            <div class="container-content-primary">
                <div class="row">
                    <div class="col-sm-2 text-center">
                        <img src="{{ asset($news->pictureMinUrl) }}" alt="{{ $news->topic->name }}" class="rounded-3" />
                    </div>
                    <div class="col-sm-10">
                        <h1 class="news-title fs-5 m-0">{{ $news->topic->name }}</h1>
                        <span>Publiée le {{ $news->topic->created_at->translatedFormat('d/m/Y à H:i') }}</span>
                        <div class="mt-2">
                            {!! nl2br($news->content) !!}
                        </div>
                        <hr>
                        <div class="text-end m-2">
                            <a href="{{ route('topic.show', $news->topic) }}" class="fs-6 fw-bold text-decoration-none">
                                <img alt="Réagir sur le forum" src="{{ asset('images/bulle.gif') }}" />
                                Réagir sur le forum
                            </a>
                            <span class="text-small">- {{ $news->topic->posts->count() }} réponse(s)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-navbar-right/>
    </div>
</x-app-layout>
