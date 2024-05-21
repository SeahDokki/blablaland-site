<x-app-layout>
    <div class="row">
        <div class="col-sm-9">
            @include('components.alert')
            @if (Route::currentRouteName() === 'user.ban')
                <div class="container-header-primary">
                    <i class="fa-solid fa-handcuffs"></i> Mettre en prison
                </div>
                <div class="container-content-primary">
                    <form method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Durée :</label>
                            <input type="number" min="1" max="999" value="1" class="form-control @error('duration') is-invalid @enderror" name="duration" />
                        </div>
                        <div class="form-group">
                            <label>Raison :</label>
                            <textarea name="reason" class="form-control @error('reason') is-invalid @enderror"></textarea>
                        </div>
                        <button class="btn btn-primary" type="submit">Enregistrer</button>
                    </form>
                </div>
            @endif
            <div>
                <div class="container-header-quaternary">
                    <i class="fas fa-user"></i>
                    Profil public de {{ $user->username }}
                </div>
                <div class="container-content-quaternary">
                    <h1 class="fw-bold">{{ $user->username }}</h1>
                    <p>
                        Pseudo sur le Tchat : <strong>{{ $user->player->pseudo }}</strong>
                        @auth
                            @if(Auth::user()->id == $user->id)
                                <a class="modify-account" href="{{ route('account.index', $user) }}">[Modifier mon compte]</a>
                            @endif
                        @endauth
                    </p>
                    <hr>
                    <div class="row">
                        <div class="col-sm-2 text-center">
                            <img src="{{ asset($user->avatarUrl) }}" class="rounded-3"/>
                            @if($user->grade_id != 0)
                                <p class="m-0">{!! $user->gradeName !!}</p>
                            @else
                                <p class="m-0">{!! $user->statutName !!}</p>
                            @endif
                            <div>
                                @if($user->player->isConnected())
                                    <img src="{{ asset('images/online.gif') }}" />
                                @else
                                    <img src="{{ asset('images/offline.gif') }}" />
                                @endif
                                Chat
                            </div>
                            <div>
                                @if($user->isConnected())
                                    <img src="{{ asset('images/online.gif') }}" />
                                @else
                                    <img src="{{ asset('images/offline.gif') }}" />
                                @endif
                                Forum
                            </div>
                            @if (Auth::user() && Auth::user()->grade_id > 90)
                                <div class="mt-2">
                                    <a class="btn btn-sm btn-secondary" title="Casier" href="{{ route('blablaland.console.casierJudiciere') . '?SESSION=' . Auth::user()->player->session . '&UID=' . $user->id }}">
                                        <i class="fa-sharp fa-solid fa-hammer"></i>
                                    </a>
                                    <a class="btn btn-sm btn-primary" title="Prison" href="{{ route('user.ban', $user) }}">
                                        <i class="fa-solid fa-handcuffs"></i>
                                    </a>
                                    <a class="btn btn-sm btn-tertiary" title="Signature"
                                       onclick="return confirm('Êtes-vous sûr de supprimer cette signature ?')"
                                       href="{{ route('user.delete.signature', $user) }}">
                                        <i class="fa-solid fa-file-signature"></i>
                                    </a>
                                </div>
                            @endif
                        </div>
                        <div class="col-sm-10">
                            <div class="block">
                                <div class="separator">
                                    <label id="title">SIGNATURE</label>
                                </div>
                                <div class="block-content" style="overflow: hidden;overflow-wrap: break-word">
                                    @auth
                                        {!! nl2br($user->signature) !!}
                                    @else
                                        <p class="m-0 text-center">
                                            <strong>
                                                Tu dois être identifié pour voir les signatures des membres.<br>
                                            </strong>
                                            <a href="{{ route('login') }}">S'identifier</a> ou <a href="{{ route('register') }}" class="fw-bold">s'inscrire</a>
                                        </p>
                                    @endauth
                                </div>
                            </div>
                            <div class="block">
                                <div class="separator">
                                    <label id="title">INFOS</label>
                                </div>
                                <div class="block-content">
                                    <div class="infos">
                                        <div class="info-1">
                                            <span class="fs-5 fw-bold">
                                                <img src="/images/countries/{{ strtolower($user->country->iso) }}.gif">
                                                {{ $user->username }}
                                            </span>
                                            <p><i class="fas fa-user"></i> Pseudo : <span class="fw-bold color-quaternary">{{ $user->player->pseudo }}</span></p>
                                            <p class="mb-2"><i class="fas fa-arrow-up-right-dots"></i> Son XP : <span class="fw-bold color-quaternary" >{{ number_format($user->player->experience ?? 0, 0, ' ', ' ') }}</span></p>
                                            <img src="{{ asset('images/account/friends.png') }}" />
                                            <a href="{{ route('account.friend.send', $user->player) }}">L'inviter à rejoindre ma <strong>Liste d'Amis</strong> !</a>
                                        </div>
                                        <div class="info-2">
                                            <p><i class="fas fa-male"></i> Sexe : <span class="fw-bold color-quaternary"><img src="{{ asset($user->genderImage) }}" /></span></p>
                                            <p><i class="fas fa-clock"></i> Arrivé sur BBL le : <span class="fw-bold color-quaternary">{{ $user->created_at->translatedFormat('d.m.Y') }}</span></p>
                                            <p><i class="fas fa-message"></i> Nombre de posts  : <span class="fw-bold color-quaternary">{{ $user->countPosts }}</span></p>
                                            <p class="mb-2">
                                                <i class="fas fa-link"></i> Site web  :
                                                    @if($user->website)
                                                        <a href="{{ $user->website }}" target="_blank">{{ $user->website }}</a>
                                                    @else
                                                        <span class="fw-bold color-quaternary">Aucun...</span>
                                                    @endif
                                            </p>
                                            <p>
                                                <i class="fas fa-user-group"></i>
                                            @if ($user->show_wedding)
                                                    <a class="fw-bold" href="{{ route('user.show', $user) }}">{!! $user->player->pseudoColor !!}</a>
                                                    @if ($user->player->wedding())
                                                        est uni(e) avec <a class="fw-bold" href="{{ route('user.show', $user->player->wedding()->getPlayerAffinity($user)) }}">{!! $user->player->wedding()->getPlayerAffinity($user)->pseudoColor !!}</a>
                                                    @else
                                                        n'a pas d'union
                                                    @endif
                                                @else
                                                    <strong>{!! $user->player->pseudoColor  !!}</strong> ne souhaite pas dévoiler son union
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block">
                                <div class="separator">
                                    <label id="title">BBL TOURNAMENT FURY</label>
                                </div>
                                <div class="block-content">
                                    <div class="infos">
                                        <div class="info-1">
                                            <img src="{{ asset('images/account/medaille_1er.jpg') }}" />
                                            <span style="color:#22b70e;font-size:14px;">
                                                <strong>{{ number_format($statTournament->score ?? 0, 0, ' ', ' ') }}</strong> Pts
                                            </span>
                                            <p>
                                                <strong>{{ number_format($statTournament->won ?? 0, 0, ' ', ' ') }}</strong> frags,
                                                <strong>{{ number_format($statTournament->lost ?? 0, 0, ' ', ' ') }}</strong> morts
                                            </p>
                                        </div>
                                        <div class="info-2">
                                                @if (in_array($posTournamentFury - 1, [0, 1, 2]))
                                                    <img src="/images/trophies/trophy_small_{{ $posTournamentFury - 1 }}.png">
                                                @endif
                                            <span class="fs-5">
                                                <strong>{{ $posTournamentFury }}</strong>{{ $posTournamentFury === 1 ? "er" : "ème" }}
                                            </span>
                                        <p>
                                            <a href="{{ route('game.tournament-fury') }}">
                                                <i class="fas fa-trophy"></i>
                                                Clique ici pour voir le classement général
                                            </a>
                                        </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block">
                                <div class="separator">
                                    <label id="title">TAGS</label>
                                </div>
                                <div class="block-content">
                                    @if($user->tags->count() > 0)
                                        <div class="text-center">
                                            @foreach($user->tags as $tag)
                                                <a href="{{ route('community.search.index', $tag).'&option=tag&search='.$tag->name }}">
                                                    {!! $tag->nameSpan !!}
                                                    @if (!$loop->last)
                                                        ,
                                                    @endif
                                                </a>
                                            @endforeach
                                        </div>
                                    @else
                                        Aucun tag enregistré
                                    @endif
                                </div>
                            </div>
                            <div class="block">
                                <div class="separator">
                                    <label id="title">SES AMIS</label>
                                </div>
                                <div class="block-content">
                                    <img src="{{ asset('images/account/friends.png') }}" />
                                    @if ($user->show_friend)
                                        @if ($user->player->friends()->where('accepted', 1)->count() !== 0)
                                            @foreach ($user->player->friends() as $friend)
                                                @if ($friend->accepted)
                                                    <a href="{{ route('user.show', $friend->getPlayerAffinity($user)->user) }}" class="fw-bold">
                                                        {!! $friend->getPlayerAffinity($user)->pseudoColor !!}
                                                    </a>
                                                    ({{ $friend->getPlayerAffinity($user)->user->username }})
                                                    @if (!$loop->last)
                                                        ,
                                                    @endif
                                                @endif
                                            @endforeach
                                         @else
                                            Aucun amis...
                                        @endif
                                    @else
                                        <strong>{!! $user->player->pseudoColor !!}</strong> ne souhaite pas montrer sa liste d'amis...
                                    @endif
                                </div>
                            </div>
                            @if (Auth::user() && Auth::user()->grade_id > 90)
                                <div class="block">
                                    <div class="separator">
                                        <label id="title">DOUBLES COMPTES</label>
                                    </div>
                                    <div class="block-content">
                                        @if ($user->getUserConnections()->count() !== 0)
                                            @foreach ($user->getUserConnections() as $login)
                                                @if ($login->user)
                                                    <a href="{{ route('user.show', $login->user )}}" class="fw-bold">
                                                        {!! $login->user->player->pseudoColor !!}
                                                    </a>
                                                    ({{ $login->user->username }})@if (!$loop->last),@endif
                                                @endif
                                            @endforeach
                                        @else
                                            Aucun...
                                        @endif
                                    </div>
                                </div>
                            @endif
                            @if (Auth::user() && Auth::user()->grade_id >= 300)
                                <div class="block">
                                    <div class="separator">
                                        <label id="title">Adresses IP</label>
                                    </div>
                                    <div class="block-content">
                                        @if ($IPlogins !== 0)
                                            @foreach ($IPlogins as $login)
                                                <a href="https://www.ip2location.com/{{ $login->ip_address }}">
                                                {{ $login->ip_address }}
                                                </a>@if (!$loop->last),@endif
                                            @endforeach
                                        @else
                                            Aucun...
                                        @endif
                                    </div>
                                </div>
                            @endif
                            <div class="block">
                                <div class="separator">
                                    <label id="title">FORUM</label>
                                </div>
                                <div class="block-content list-post">
                                    @if($user->posts->count() > 0)
                                        <ul>
                                            @foreach($lastPosts as $post)
                                                <li>
                                                    <img src="{{ asset('images/star.png') }}"/>
                                                    <a href="{{ route('topic.show', [$post->topic, 'page' => $post->topic->getPageForPost($post)]).'#'.$post->id }}">{{ $post->topic->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @else
                                        Aucun enregistrement dans l'historique..
                                    @endisset
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-page" style="margin: -4px"></div>
                </div>
            </div>
        </div>
        <x-navbar-right/>
    </div>
    @section('style')
        <link rel="stylesheet" href="{{ asset('css/pages/_account.css') }}">
    @endsection
</x-app-layout>
