<x-app-layout>
    <div class="row">
        <div class="col-sm-9">
            <div class="container-header-secondary">
                <i class="fas fa-comment"></i>
                Forum
            </div>
            <div class="container-content-secondary" id="forum">
                <div class="d-flex">
                    <div class="p-1">Pages : <strong>{{ $posts->currentPage() }}</strong></div>
                    <div class="p-1">
                        <a href="{{ route('category.index') }}">Accueil</a> /
                        <a href="{{ route('section.index', $topic->section) }}">{{ $topic->section->name }}</a> /
                        <a href="{{ route('topic.show', $topic) }}">{{ $topic->name }}</a>
                    </div>
                </div>
                {{ $posts->links('pagination.default') }}
                <div class="text-center">
                    <img src="{{ asset('images/logo-blablaland-small.jpg') }}" />
                    <div class="fs-5"><strong>{{ $topic->name }}</strong></div>
                </div>
                @if($user && $user->grade_id >= 90)
                    <div class="d-flex flex-row-reverse">
                        <a class="p-1" href="{{ route('topic.destroy', $topic) }}">Supprimer</a>
                        @if($topic->locked)
                            <a class="p-1" href="{{ route('topic.lock', $topic) }}">Déverouiller</a>
                        @else
                            <a class="p-1" href="{{ route('topic.lock', $topic) }}">Verrouiller</a>
                        @endif
                        @if($topic->pinned)
                            <a class="p-1" href="{{ route('topic.pin', $topic) }}">Désépingler</a>
                        @else
                            <a class="p-1" href="{{ route('topic.pin', $topic) }}">Épingler</a>
                        @endif
                    </div>
                    <div class="d-flex flex-row-reverse">
                        <form class="p-1" method="POST" action="{{ route('topic.move', $topic) }}">
                            @csrf
                            <select name="section_id">
                                @foreach($categories as $category)
                                    <optgroup label="{{ $category->name }}">
                                        @foreach($category->sections as $section)
                                            <option value="{{ $section->id }}">{{ $section->name }}</option>
                                        @endforeach
                                    </optgroup>
                                @endforeach
                            </select>
                            <button class="btn btn-sm btn-secondary" type="submit" class="p-1" href="#">Déplacer</button>
                        </form>
                    </div>
                @endif
                @foreach($posts as $post)
                    <div class="separator-secondary fs-6">
                        <span class="post-date">{{ $post->created_at->translatedFormat('d-m-Y H:i:s -') }}</span>
                        <span class="topic-name">{{ $topic->name }}</span>
                    </div>
                    <div class="post" id="{{ $post->id }}">
                        <div class="post-1">
                            <div class="post-username mt-2">
                                @if (!$post->user->trashed())
                                    <a href="{{ route('user.show', $post->user ?? 0) }}">
                                        {{ $post->user->username }}
                                    </a>
                                @else
                                    <strong>{{ 'Touriste_' . $post->user_id }}</strong>
                                @endif
                            </div>
                            @if (!$post->user->trashed())
                                <div class="post-pseudo">Pseudo : <strong>{{ $post->user->player->pseudo }}</strong></div>
                                <img class="post-avatar rounded-3" src="{{ $post->user->avatarUrl }}" />
                                <div class="post-statut"><strong>{!! $post->user->grade_id != 0 ? $post->user->gradeName : $post->user->   statutName !!}</strong></div>
                                <div class="post-number">Messages : {{ $post->user->countPosts }}</div>
                                <div class="post-user-chat-connected">
                                    @if($post->user->player->isConnected())
                                        <img src="{{ asset('images/online.gif') }}" />
                                    @else
                                        <img src="{{ asset('images/offline.gif') }}" />
                                    @endif
                                    Chat
                                </div>
                                <div class="post-user-forum-connected">
                                    @if($post->user->isConnected())
                                        <img src="{{ asset('images/online.gif') }}" />
                                    @else
                                        <img src="{{ asset('images/offline.gif') }}" />
                                    @endif
                                    Forum
                                </div>
                            @else
                                {{ '(ex-blabla: ' . $post->user_id . ')' }}
                            @endif
                        </div>
                        <div class="post-2" @isset($post->color) style="background-color: {{ $post->color }}" @endisset>
                            <div class="m-1">
                                <div  class="post-content">{!! nl2br($post->content) !!}</div>
                                @if($post->created_at != $post->updated_at)
                                    <div class="post-updated text-small mt-3">
                                        <i>
                                            Dernière modification le {{ $post->updated_at->translatedFormat('d/m/Y à H:i:s') }}
                                        </i>
                                    </div>
                                @endif
                            </div>
                            <div class="d-flex flex-row-reverse m-2">
                                @if($user && $post->user_id == $user->id ||
                                    $user && $user->grade_id > 90)
                                    <a class="p-1" onclick="quote({{ $post->id }})">Citer</a>
                                    <a class="p-1" href="{{ route('post.edit', $post) }}">Editer</a>
                                    <a class="p-1" href="{{ route('post.destroy', $post) }}"
                                       onclick="return confirm('Êtes-vous sûr de supprimer ce post ?')">
                                        Supprimer
                                    </a>
                                @endif
                            </div>
                            @if(!$post->user->trashed() && isset($post->user->signature))
                                <hr>
                                <div class="post-signature m-2">
                                    @auth
                                        {!! nl2br($post->user->signature) !!}
                                    @else
                                        <p class="m-0 text-center">
                                            <strong>
                                                Tu dois être identifié pour voir les signatures des membres.<br>
                                            </strong>
                                            <a href="{{ route('login') }}">S'identifier</a> ou <a href="{{ route('register') }}" class="fw-bold">s'inscrire</a>
                                        </p>
                                    @endauth
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
                {{ $posts->links('pagination.default') }}
                <div class="separator-tertiary fs-6">
                    Réponse de l'équipe Blablaland.eu
                </div>
                <div class="text-center p-3" style="text-align: center; background-color: #dcffd6">
                    @if ($postsAdmin->isNotEmpty())
                        <div class="fw-bold">Ce topic contient {{ $postsAdmin->count() }} messages de l'équipe Blablaland.eu</div>
                        <ul class="mt-2 list-unstyled">
                        @foreach($postsAdmin as $key => $post)
                            <li>
                                <a class="fw-light" href="{{ route('topic.show', [$topic, 'page' => $topic->getPageForPost($post)]).'#'.$post->id }}">
                                    {{ $key + 1 }}{{ $key === 0 ? 'ère' : 'ème' }} réponse postée le {{ $post->created_at->format('d/m/Y') }}
                                </a>
                            </li>
                        @endforeach
                        </ul>
                    @else
                        <div>Ce topic ne contient aucun message de l'équipe Blablaland.eu</div>
                    @endif
                </div>
                @isset($user)
                    @if(!$topic->locked || $user->grade_id >= 90)
                        @isset ($contentPreview)
                            <div class="separator-secondary fs-6">
                                Prévisualisation du message
                            </div>
                            <div class="m-1" style="overflow: hidden; overflow-wrap: break-word; margin: 0 auto;">
                                {!! nl2br($contentPreview) !!}
                            </div>
                        @endisset
                        <div class="separator-secondary fs-6">
                            Répondre au topic
                        </div>
                        <form method="POST" action="">
                            @csrf
                            <div class="form-group m-2">
                                <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="editor" >{{ $content ?? '' }}</textarea>
                                @error('content')
                                <small class="form-text text-danger">{{ $message }}</small>
                                @else
                                    <small class="form-text text-muted"></small>
                                    @enderror
                            </div>
                            <div class="m-2">
                                <button class="btn btn-secondary" name="response" type="submit">Répondre</button>
                                <button class="btn btn-secondary" name="preview" type="submit">Prévisualisation</button>
                            </div>
                        </form>
                    @endif
                @endisset
                <div class="d-flex">
                    <div class="p-1">Pages : <strong>{{ $posts->currentPage() }}</strong></div>
                    <div class="p-1">
                        <a href="{{ route('category.index') }}">Accueil</a> /
                        <a href="{{ route('section.index', $topic->section) }}">{{ $topic->section->name }}</a> /
                        <a href="{{ route('topic.show', $topic) }}">{{ $topic->name }}</a>
                    </div>
                </div>
            </div>
        </div>
        <x-navbar-right/>
    </div>
@section('style')
    <link rel="stylesheet" href="{{ asset('css/pages/_forum.css') }}">
@endsection
@section('javascript')
        <script>
            function quote(id) {
                const url = `{{ route('post.api', '__id__') }}`.replace('__id__', id)
                fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        "_token": "{{ csrf_token() }}"
                    })
                })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Erreur réseau')
                        }
                        return response.json()
                    })
                    .then(data => {
                        const element = document.querySelector('.wysibb-body')
                        element.innerHTML += `[quote=${data.username}]${data.content}[/quote]`
                        element.scrollIntoView()
                    })
                    .catch(error => {
                        console.error('Erreur lors de la requête:', error)
                    });
            }
        </script>
        <script src="{{ asset('js/wysibb.js') }}" defer></script>
        <script src="{{ asset('js/forum.js') }}" defer></script>
@endsection
</x-app-layout>
