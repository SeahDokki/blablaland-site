<x-app-layout>
    <div class="row">
        <div class="col-sm-12">
            <img src="{{ asset('images/account/decoration.png') }}"/>
            <div class="container-header-quaternary" style="margin-top:-3.5rem;height:3.2rem;padding-top:1.2rem">
            <i class="fas fa-user"></i>
            Bienvenue sur la gestion de ton compte, {{ $user->username }}
            </div>
            <div class="container-content-quaternary">
                <div class="header">
                    <div class="header-1 text-center">
                        <img src="{{ asset($user->avatarUrl) }}" class="rounded-3" />
                    </div>
                    <div class="header-2">
                        <ul>
                            <li><span class="header-username">{{ $user->username }}</span></li>
                            <li>Pseudo : <span class="color-quaternary">{{ $user->player->pseudo }}</span></li>
                            <li>Grade : <span class="color-quaternary">{!! $user->gradeName !!}</span></li>
                            <li>Statut : <span class="color-quaternary">{!! $user->statutName !!}</span></li>
                            <li>Pays : <span class="color-quaternary">{{ $user->country->name }}</span></li>
                        </ul>
                    </div>
                    <div class="header-3">
                        <ul>
                            <li>Genre : <span class="color-quaternary">{{ $user->genderName }}</span></li>
                            <li>Mon skin actuel : <span class="color-quaternary">{{ $user->player->skin->name }}</span></li>
                            <li>Mes Blabillons : <span class="color-quaternary">{{ $user->player->blabillon }} BBL</span></li>
                            <li>Mon XP : <span class="color-quaternary">{{ $user->player->experience }} XP</span></li>
                            <li>Amis en ligne : <span class="color-quaternary"> {{$user->player->friendsConnected() }}/{{ $user->player->friends()->count() }}</span></li>
                            <li>
                                Union avec :
                                <span class="color-quaternary">
                                    @if ($user->player->wedding())
                                        <a href="{{ route('user.show', $user->player->wedding()->getPlayerAffinity($user)) }}" style="text-decoration:none">
                                            {!! $user->player->wedding()->getPlayerAffinity($user)->pseudoColor !!}
                                        </a>
                                    @else
                                        ?
                                    @endif
                                </span>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="header-4">
                        <ul>
                            {{--
                                <li>Points d'animations : <span class="color-quaternary">0</span></li>
                                <li>Points de classement : <span class="color-quaternary">0</span></li>
                            --}}
                            <li>Inscrit le : <span class="color-quaternary">{{ $user->created_at->translatedFormat('d/m/Y à H:i') }}</span></li>
                            <li>Dernière modification le : <span class="color-quaternary"><br>{{ $user->updated_at->translatedFormat('d/m/Y à H:i') }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            @include('components.alert')
            {{ $slot }}
        </div>
        <div class="col-sm-4">
            <div class="container-header-secondary">
                Modifier mon compte
            </div>
            <div class="container-content-secondary" id="link-account">
                <ul>
                    <li><a class="{{ request()->is('account') ? 'link-active' : '' }}" href="{{ route('account.index') }}">Le changement de skin</a></li>
                    <li><a class="{{ request()->is('account/update') ? 'link-active' : '' }}" href="{{ route('account.user') }}">Les informations</a></li>
                    <li><a class="{{ request()->is('account/avatar') ? 'link-active' : '' }}" href="{{ route('account.avatar.index') }}">L'avatar</a></li>
                    <li><a class="{{ request()->is('account/statut') ? 'link-active' : '' }}" href="{{ route('account.statut.index') }}">Les statuts</a></li>
                    <li><a class="{{ request()->is('account/signature') ? 'link-active' : '' }}" href="{{ route('account.signature.index') }}">La signature</a></li>
                    <li><a class="{{ request()->is('account/tags') ? 'link-active' : '' }}" href="{{ route('account.tag.index') }}">Les tags</a></li>
                    <li><a class="{{ request()->is('account/friends') ? 'link-active' : '' }}" href="{{ route('account.friend.index') }}">La liste d'amis</a></li>
                    <li><a class="{{ request()->is('account/discord') ? 'link-active' : '' }}" href="{{ route('account.discord.index') }}">Mon discord</a></li>
                    <li><a class="{{ request()->is('account/token') ? 'link-active' : '' }}" href="{{ route('account.token.index') }}">Mes jetons</a></li>
                </ul>
            </div>
        </div>
    </div>
@section('style')
    <link rel="stylesheet" href="{{ asset('css/pages/_account.css') }}">
@endsection
</x-app-layout>

