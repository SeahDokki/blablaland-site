<aside class="col-sm-3">
    @guest
    {{--
        <div class="container-header-quaternary">
            <i class="fas fa-sign-in"></i>
            Connexion
        </div>
        <div class="container-content-quaternary">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input class="form-control" name="username" placeholder="Login" />
                </div>
                <div class="form-group">
                    <input class="form-control" name="password" placeholder="Mot de passe" type="password"/>
                </div>
                <button class="btn bg-quaternary w-100 mt-2">Se connecter</button>
            </form>
        </div>
    --}}
    @endguest
    <div class="container-header-primary">
        <i class="fas fa-shopping-cart"></i>
        {{ $skinRandom->name }}
    </div>
    <div class="container-content-primary text-center m-0 fw-bold">
        <img src="{{ asset('images/shop/skins/' . $skinRandom->id . '.jpg') }}" alt="{{ $skinRandom->name }}" />
        <p class="color-primary fs-5">{{ $skinRandom->price }} BBL</p>
        <a class="btn btn-sm btn-primary btn-skin-random" href="{{ route('shop.skin.show', $skinRandom) }}">
            Acheter
        </a>
    </div>
    <div class="container-header-secondary mt-3">
        <i class="fas fa-comment"></i>
        Forum
    </div>
    <div class="container-content-secondary">
        @foreach($lastPosts as $post)
            <li style="list-style-type: none;margin-bottom: 5px">
                <img src="{{ asset('images/star.png') }}" alt="Star" />
                <a style="text-decoration: none" href="{{ route('topic.show', [$post->topic, 'page' => $post->topic->getPageForPost($post)]).'#'.$post->id }}">{{ $post->topic->name }}</a>
                <p class="m-0 text-small">
                    par
                    @if (!$post->topic->user->trashed())
                        <a style="text-decoration: none" href="{{ route('user.show', $post->topic->user) }}"><strong>{!! $post->topic->author !!}</strong></a>,
                    @else
                        <strong>{!! $post->topic->author !!}</strong>,
                    @endif
                    dernier post de
                    @if (!$post->user->trashed())
                    <a style="text-decoration: none" href="{{ route('user.show', $post->user) }}">
                        <strong>
                            {!! $post->user->usernameColor !!}
                        </strong>
                    </a>
                    @else
                        <strong>Touriste_{{ $post->user_id }}</strong>
                    @endif
                </p>
            </li>
        @endforeach
    </div>
    <div class="container-header-quaternary mt-3">
        <i class="fas fa-trophy"></i>
        Classement XP
    </div>
    <div class="container-content-quaternary">
        <table class="table table-striped ranking-navbar">
            <thead>
            <tr>
                <th width="10%">Position</th>
                <th>Pseudo</th>
                <th>XP</th>
            </tr>
            </thead>
            <tbody>
            @php ($count = 0)
            @foreach ($players as $player)
                <tr>
                    <td class="ranking" id="{{ $count }}">
                        {{ $count }}
                    </td>
                    <td>
                        <a href="{{ route('user.show', $player->user) }}"
                           style="text-decoration: none">
                            <strong>
                                {!! $player->user->usernameColor !!}
                            </strong>
                        </a>
                    </td>
                    <td>{{ $player->experience }}</td>
                </tr>
                @php ($count++)
            @endforeach
            </tbody>
        </table>
    </div>
</aside>
<script>
    let rankingElement = document.getElementsByClassName('ranking')
    for(let value of rankingElement) {
        value.innerHTML = `<img src="/images/trophies/trophy_small_${value.id}.png" alt="Trophée ${value.id}">`
    }
</script>
