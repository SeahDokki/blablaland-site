<tr>
    <td width="80%">
        <div class="row">
            <div class="col-sm-2">
                <img src="{{ asset('images/shop/smileys/' . $smiley->id . '_picto.jpg') }}" />
            </div>
            <div class="col-sm-10">
                <a href="{{ route('shop.smiley.show', $smiley) }}" class="smiley-name">
                    {{ $smiley->name }}
                </a>
                <p class="smiley-description">
                    {!! $smiley->description !!}
                </p>
            </div>
        </div>
    </td>
    <td class="align-middle text-center">
        @isset ($smiley->price)
            <p class="color-quaternary fw-bold">
                <i class="fa-solid fa-money-bill-wave"></i>
                {{ $smiley->price }} BBL
            </p>
        @endisset
        @auth
            @if (Auth::user()->player->smileys->contains($smiley))
                <img src="{{ asset('images/blablaland/ok.gif') }}" alt="Ok" /> <br>
                <span style="color:#666666">
                    Tu as déjà ce pack
                </span> <br>
            @else
                @if ($smiley->unavailable)
                    <span class="text-danger fw-bold">BIENTÔT EN BOUTIQUE !!</span>
                @else
                    <a href="{{ route('shop.smiley.show', $smiley) }}" class="btn btn-quaternary btn-sm fw-bold p-1 rounded">
                        Je prends !
                    </a>
                @endif
            @endif
        @else
            <a href="{{ route('login') }}" class="text-danger fw-bold">
                CONNECTE TOI POUR OBTENIR CE PACK
            </a>
        @endauth
            <br>
            <a href="{{ route('shop.smiley.show', $smiley) }}">Plus d'infos</a>
    </td>
</tr>
