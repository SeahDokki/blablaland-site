<x-app-layout>
    <div class="row">
        <div class="col-sm-9">
            <div class="container-header-secondary">
                <i class="fas fa-comment"></i>
                Forum : {{ $section->name }}
            </div>
            <div class="container-content-secondary" id="forum">
                <div id="forum">
                    <div class="text-center m-2">
                        @if ($section->description_bis)
                            <div class="section-description">
                                {!! $section->description_bis !!}
                            </div>
                        @else
                            <img src="{{ asset('images/logo-blablaland-small.jpg') }}" />
                            <div class="section-name fs-5">
                                <strong>{{ $section->name }}</strong>
                            </div>
                            @isset($section->description)
                                <div class="section-description">
                                    {!! $section->description !!}
                                </div>
                            @endisset
                        @endif
                    </div>
                    @if($section->sections->count() > 0)
                        <div class="separator-secondary fs-6">
                            Sous Forums
                        </div>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th width="50%">Forum</th>
                                <th>Discussions</th>
                                <th>Messages</th>
                                <th>Dernier message</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($section->sections as $subSection)
                                <tr>
                                    <td>
                                        <a class="section-name" href="{{ route('section.index', $subSection) }}">
                                            @if(session()->has('section_viewed_' . $subSection['id']))
                                                <div class="smile-default"></div>
                                            @else
                                                <div class="smile-happy"></div>
                                            @endif
                                            {{ $subSection->name }}
                                        </a>
                                        <p class="section-description">{!! $subSection->description !!}</p>
                                    </td>
                                    <td class="align-middle text-center">{{ $subSection->topicsCount ?? 0 }}</td>
                                    <td class="align-middle text-center">{{ $subSection->postsCount ?? 0 }}</td>
                                    <td class="align-middle text-center">
                                        @isset($subSection->lastPost)
                                            le <a href="{{ route('topic.show', [$subSection->lastPost->topic, 'page' => $subSection->lastPost->topic->getPageForPost($subSection->lastPost)]).'#'.$subSection->lastPost->id }}">
                                                {{ $subSection->lastPost->created_at->translatedFormat('d/m/Y à H:i') }}
                                            </a> <br>
                                            par
                                            @if ($subSection->lastPost->user)
                                                <a href="{{ route('user.show', $subSection->lastPost->user) }}" style="text-decoration: none">
                                                    {!! $subSection->lastPost->user->usernameColor !!}
                                                </a>
                                            @else
                                                <strong>Touriste_{{ $subSection->lastPost->user_id }}</strong>
                                            @endif
                                        @else
                                            Aucun message...
                                        @endisset
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                    @auth
                        @if($user->grade_id >= $section->grade_id)
                            <a class="d-flex flex-row-reverse m-2" href="{{ route('topic.create', $section) }}">
                                <div class="p-2 btn-new-topic"></div>
                            </a>
                        @endif
                    @endauth
                    <div class="separator-secondary fs-6">{{ $section->name }}</div>
                    {{ $topics->links('pagination.default') }}
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th width="50%">Discussion</th>
                            <th>Réponses</th>
                            <th>Vues</th>
                            <th>Dernier message</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($topics as $topic)
                            <tr>
                                <td>
                                    @if($topic->pinned)
                                        <span>[Épinglé]</span>
                                    @elseif($topic->locked)
                                        <span>[Verrouillé]</span>
                                    @endif
                                    @if(session()->has('topic_viewed_' . $topic['id']))
                                        <div class="smile-default"></div>
                                    @else
                                        <div class="smile-happy"></div>
                                    @endif
                                    <a href="{{ route('topic.show', $topic) }}">
                                        {{ $topic->name }}
                                    </a>
                                    <p>
                                        par
                                        @if (!$topic->user->trashed())
                                            <a href="{{ route('user.show', $topic->user) }}" style="text-decoration: none">
                                                {!! $topic->author !!}
                                            </a>
                                        @else
                                            <strong>Touriste_{{ $topic->user_id }}</strong>
                                        @endif
                                    </p>
                                </td>
                                <td class="align-middle text-center">
                                    {{ $topic->posts->count() }}
                                </td>
                                <td class="align-middle text-center">
                                    {{ $topic->views }}
                                </td>
                                <td class="align-middle text-center">
                                    @if($topic->posts()->count() > 0)
                                        @php ($lastPost = $topic->posts()->orderByDesc('created_at')->first())
                                        le <a href="{{ route('topic.show', [$topic, 'page' => $topic->getPageForPost($lastPost)]).'#'.$lastPost->id }}">
                                            {{ $lastPost->created_at->translatedFormat('d/m/Y à H:i') }}
                                        </a> <br>
                                        par
                                        @if (!$lastPost->user->trashed())
                                            <a href="{{ route('user.show', $lastPost->user) }}" style="text-decoration: none">
                                                {!! $lastPost->user->usernameColor !!}
                                            </a>
                                        @else
                                            <strong>Touriste_{{ $lastPost->user_id }}</strong>
                                        @endif

                                    @else
                                        Aucun message...
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $topics->links('pagination.default') }}
                </div>
            </div>
        </div>
        <x-navbar-right/>
    </div>

@section('style')
    <link rel="stylesheet" href="{{ asset('css/pages/_forum.css') }}">
@endsection
</x-app-layout>
