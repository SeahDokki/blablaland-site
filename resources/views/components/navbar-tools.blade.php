<div class="navbar-tools">
    <div class="container">
        <div class="col-sm-12">
            <div class="grid-container">
                <div class="link">
                    <a href="https://discord.gg/fAH3xJCzD3" target="_blank">Discord</a>
                    @auth
                        @if(Auth::user()->grade->id >= 90)
                            | <a target="_blank" href="{{ route('console.index') }}">Console</a>
                            | <a target="_blank" href="{{ route('dashboard.index') }}">Administration</a>
                        @endif
                    @endauth
                </div>
                <div class="game">{{ number_format(\App\Models\User::all()->count(), 0, ' ', ' ') }} joueurs | <span id="online">{{  number_format(App\Models\Player::whereOnline(1)->count(), 0, ' ', ' ') }}</span> en ligne</div>
            </div>
        </div>
    </div>
</div>
