<tr
    @if (!empty($color))
        style="background-color:{{ $color }};"
    @endif
>
    <td width="80%">
        <div class="row"
             @if (!empty($color))
                style="margin-left:20px"
            @endif
        >
            <div class="col-sm-3">
                <img src="{{ asset('images/shop/skins/' . $skin->id . '.jpg') }}" />
            </div>
            <div class="col-sm-9">
                <a href="{{ route('shop.skin.show', $skin) }}" class="skin-name">
                    {{ $skin->name }}
                </a>
                @isset ($skin->group_id)
                    <p class="skin-group">
                        <span>Groupe : </span>
                        <a href="{{ route('shop.skin.group', $skin->group) }}">
                            {{ $skin->group->name }}
                        </a>
                    </p>
                @endisset
                <p class="skin-description">
                    {!! $skin->description !!}
                </p>
            </div>
        </div>
    </td>
    <td class="align-middle text-center">
        @if ($skin->special === \App\Enums\SkinSpecial::IrwishToilet)
        @elseif ($skin->special === \App\Enums\SkinSpecial::Mysthoria)
            <img src="{{ asset('images/shop/mysthoria_mine.png') }}" /><br>
            <strong style="color:#FF00FF">
                Skin Exclu Mysthoriä
            </strong> <br>
        @elseif ($skin->special === \App\Enums\SkinSpecial::PirateQuest)
            <strong style="color:#FF00FF">
                Récompense de Quête
            </strong> <br>
        @elseif ($skin->special === \App\Enums\SkinSpecial::Cookie)
            <strong style="color:#FF00FF">
                Exclusif Fortune Cookie
            </strong> <br>
        @elseif ($skin->special === \App\Enums\SkinSpecial::Card)
            <strong style="color:#FF5001">
                GRATTEZ UNE CARTE
            </strong> <br>
        @elseif ($skin->unavailable)
            <span class="text-danger fw-bold">
                BIENTÔT EN BOUTIQUE !!
            </span>
        @else
            @isset ($skin->price)
                <p class="color-quaternary fw-bold">
                    <i class="fa-solid fa-money-bill-wave"></i>
                    {{ $skin->price }} BBL
                </p>
            @endisset
            @isset ($skin->special)
                @isset ($skin->token)
                    @if ($skin->token > 0)
                        <p class="token">
                            @if ($skin->special === \App\Enums\SkinSpecial::Dungeon)
                                <img src="{{ asset('images/shop/jetons/5.png') }}" />
                            @elseif ($skin->special === \App\Enums\SkinSpecial::HauntedManor)
                                <img src="{{ asset('images/shop/jetons/4.png') }}" />
                            @elseif ($skin->special === \App\Enums\SkinSpecial::NavalBattle)
                                <img src="{{ asset('images/shop/jetons/2.png') }}" />
                            @elseif ($skin->special === \App\Enums\SkinSpecial::Pyramid)
                                <img src="{{ asset('images/shop/jetons/1.png') }}" />
                            @endif
                            {{ $skin->token }} JETONS
                        </p>
                    @endif
                @endisset
            @endisset
            @auth
                @if (Auth::user()->player->skins->contains($skin))
                    <img src="{{ asset('images/blablaland/ok.gif') }}" alt="Ok" /> <br>
                    <span style="color:#666666">
                        Tu as déjà ce skin
                    </span> <br>
                    <a href="{{ route('shop.skin.show', $skin) }}">
                        Plus d'infos
                    </a>
                @else
                    <a href="{{ route('shop.skin.show', $skin) }}" class="btn btn-sm btn-quaternary fw-bold p-1 rounded">
                        Je prends !
                    </a>
                @endif
            @else
                <a href="{{ route('login') }}" class="text-danger fw-bold">
                    CONNECTE TOI POUR OBTENIR CE SKIN
                </a>
            @endauth
        @endif
        <br>
        <a href="{{ route('shop.skin.show', $skin) }}">Plus d'infos</a>
    </td>
</tr>
@if ($skin->giftSkins)
    @foreach ($skin->giftSkins as $item)
        @include('shop.components.skin', [
        'skin' => $item,
        'color' => '#fffce1'
    ])
    @endforeach
@endif
