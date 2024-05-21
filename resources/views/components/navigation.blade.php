<div class="container">
    <div class="navbar-banner">
        <div class="d-flex justify-content-end h-100">
            <div class="login-avatar">
                @guest
                    <img src="{{ asset('/images/blablaland/avatarbbl.png') }}" alt="Avatar Blablaland" class="rounded-3" />
                @else
                    <a href="{{ route('user.show', $user->id) }}">
                        <img src="{{ asset($user->avatarUrl) }}" alt="Avatar" class="rounded-3" /><br>
                    </a>
                @endguest
            </div>
            <div class="login-form">
                @guest
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <input class="form-control form-control-sm mb-2" name="username" placeholder="Login" />
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-sm" name="password" type="password"/>
                        </div>
                        <button class="btn btn-sm btn-primary w-100 mt-2 rounded-2">
                            <i class="fas fa-sign-in-alt"></i> Se connecter
                        </button>
                        <br>
                        <a href="{{ route('password.request') }}">Identifiants perdus ?</a>
                    </form>
                @else
                    <a href="{{ route('user.show', $user->id) }}" class="fs-4 fw-bold" style="text-decoration:none">
                        {!! $user->usernameColor !!}
                    </a>
                    <ul>
                        <li>
                            <a href="#">
                                <img src="{{ asset('/images/blablaland/picto_bbl.png') }}" alt="BBL" />
                                <strong id="login-bbl">{{ number_format($user->player->blabillon, 0, ' ', ' ') }}</strong> BBL
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('account.index') }}">
                                <img src="{{ asset('/images/blablaland/picto_xp.png') }}" alt="XP" />
                                <strong id="login-xp">{{  number_format($user->player->experience, 0, ' ', ' ') }}</strong> XP
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('/images/blablaland/picto_messages.png') }}" alt="Message(s)" />
                                <strong id="login-msg">0</strong> nouveau
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('account.friend.index') }}">
                                <img src="{{ asset('/images/blablaland/picto_amis.png') }}" alt="Amis" />
                                <strong id="login-friends-online">{{ $user->player->friendsConnected() }}</strong>/<span id="login-friends-length">{{ $user->player->friends()->count() }}</span> Amis
                                (<strong>{{ \App\Models\Affinity::whereType('FRIEND')->whereAccepted(0)->whereReceiverId($user->player->id)->count() }}</strong>)
                            </a>
                        </li>
                    </ul>
                @endguest
            </div>
        </div>
    </div>
        <nav class="navbar navbar-expand">
            <ul class="nav navbar-nav flex-nowrap justify-content-center mx-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('index') }}">
                        <i class="fas fa-home"></i> Accueil
                    </a>
                </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('community*') ? 'active' : '' }}" href="{{ route('community.index') }}">
                            <i class="fas fa-people-group"></i> Communauté
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('forum*') ? 'active' : '' }}"
                           @if (request()->is('game*'))
                               target="_blank"
                           @endif
                           href="{{ route('category.index') }}">
                            <i class="fas fa-comment"></i> Forum
                        </a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('shop*') ? 'active' : '' }}"
                       @if (request()->is('game*'))
                           target="_blank"
                       @endif
                       href="{{ route('shop.index') }}">
                        <i class="fas fa-shopping-cart"></i> Boutique
                    </a>
                </li>
                <li class="nav-item btn-play">
                    <a class="nav-link" href="{{ route('game') }}">
                        <i class="fas fa-gamepad"></i>
                        @guest
                            Essayer
                        @else
                            Jouer
                        @endguest
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('games*') ? 'active' : '' }}"
                       @if (request()->is('game*'))
                           target="_blank"
                       @endif
                       href="{{ route('game.index') }}">
                        <i class="fas fa-trophy"></i> Mini-Jeux
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('team*') ? 'active' : '' }}" href="{{ route('team') }}">
                        <i class="fas fa-users"></i> L'équipe
                    </a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('account*') ? 'active' : '' }}" href="{{ route('account.index') }}">
                            <i class="fas fa-user"></i> Mon Compte
                        </a>
                    </li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <li class="nav-item {{ request()->is('logout*') ? 'active' : '' }}">
                            <button class="nav-link" type="submit">
                                <i class="fas fa-sign-out-alt"></i> Déconnexion
                            </button>
                        </li>
                    </form>
                @else
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('register*') ? 'active' : '' }}" href="{{ route('register') }}">
                            <i class="fas fa-user-plus"></i>
                            Inscription
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('login*') ? 'active' : '' }}" href="{{ route('login') }}">
                            <i class="fas fa-sign-in-alt"></i> Connexion
                        </a>
                    </li>
                @endauth
            </ul>
        </nav>
    </div>
</div>
