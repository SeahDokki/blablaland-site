<x-account-layout>
    <div class="container-header-secondary">
        <i class="fa-solid fa-gamepad"></i>
        Mes jetons
    </div>
    <div class="container-content-secondary p-2">
        <p>Tous les Jetons que tu as gagnés dans les jeux Blablaland !</p>
        <div class="row">
            <div class="col-sm-6 mb-2">
                <p class="m-1">
                    <span class="color-quaternary fw-bold">
                        <img src="{{ asset('images/shop/jetons/1.png') }}" />
                        {{ number_format($gameStats['PYRAMID']['remainingToken'], 0, ' ', ' ') }} Pyramide <br>
                    </span>
                    ({{ number_format($gameStats['PYRAMID']['totalToken'], 0, ' ', ' ') }} gagnés depuis le début !)
                </p>
                <a href="{{ route('game.pyramid') }}" style="text-decoration: none">» Utiliser mes jetons Pyramide !</a>
            </div>
            <div class="col-sm-6 mb-2">
                <p class="m-1">
                    <span class="color-quaternary fw-bold">
                        <img src="{{ asset('images/shop/jetons/2.png') }}" />
                        {{ number_format($gameStats['NAVAL_BATTLE']['remainingToken'], 0, ' ', ' ') }} Blablataille Navale<br>
                    </span>
                    ({{ number_format($gameStats['NAVAL_BATTLE']['totalToken'], 0, ' ', ' ') }} gagnés depuis le début !)
                </p>
                <a href="{{ route('game.naval-battle') }}" style="text-decoration: none">» Utiliser mes jetons Blablataille Navale !</a>
            </div>
            <div class="col-sm-6 mb-2">
                <p class="m-1">
                    <span class="color-quaternary fw-bold">
                        <img src="{{ asset('images/shop/jetons/3.png') }}" />
                        {{ number_format($gameStats['MYSTHORIA']['remainingToken'], 0, ' ', ' ') }} Mysthoriä<br>
                    </span>
                    ({{ number_format($gameStats['MYSTHORIA']['totalToken'], 0, ' ', ' ') }} gagnés depuis le début !)
                </p>
                <a href="{{ route('game.mysthoria') }}" style="text-decoration: none">» Utiliser mes jetons Mysthoriä !</a>
            </div>
            <div class="col-sm-6 mb-2">
                <p class="m-1">
                    <span class="color-quaternary fw-bold">
                        <img src="{{ asset('images/shop/jetons/4.png') }}" />
                        {{ number_format($gameStats['HAUNTED_MANOR']['remainingToken'], 0, ' ', ' ') }} Manoir Hanté<br>
                    </span>
                    ({{ number_format($gameStats['HAUNTED_MANOR']['totalToken'], 0, ' ', ' ') }} gagnés depuis le début !)
                </p>
                <a href="{{ route('game.haunted-manor') }}" style="text-decoration: none">» Utiliser mes jetons Manoir Hanté !</a>
            </div>
            <div class="col-sm-6 mb-2">
                <p class="m-1">
                    <span class="color-quaternary fw-bold">
                        <img src="{{ asset('images/shop/jetons/5.png') }}" />
                        {{ number_format($gameStats['DUNGEON']['remainingToken'], 0, ' ', ' ') }} Donjon<br>
                    </span>
                    ({{ number_format($gameStats['DUNGEON']['totalToken'], 0, ' ', ' ') }} gagnés depuis le début !)
                </p>
                <a href="{{ route('game.dungeon') }}" style="text-decoration: none">» Utiliser mes jetons Donjon !</a>
            </div>
        </div>

    </div>
</x-account-layout>
