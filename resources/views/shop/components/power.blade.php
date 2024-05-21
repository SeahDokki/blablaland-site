<tr>
    <td width="80%">
        <div class="row">
            <div class="col-sm-2">
                <img src="{{ asset('images/shop/objects/' . $power->id . '.jpg') }}" />
            </div>
            <div class="col-sm-10">
                <a href="{{ route('shop.power.show', $power) }}" class="power-name">
                    {{ $power->name_shop }}
                </a>
                <p class="power-description">
                    {!! $power->description !!}
                </p>
            </div>
        </div>
    </td>
    <td class="align-middle text-center">
        @if ($power->special === \App\Enums\PowerSpecial::MiniMonster && $power->unavailable)
            <span class="text-danger fw-bold">RECOMPENSES EXCLUSIVE</span>
        @elseif ($power->special === \App\Enums\PowerSpecial::IrwishToilet && $power->unavailable)
            <strong style="color:#FF00FF">Récompense Madame Pipi !!</strong>
        @elseif ($power->special === \App\Enums\PowerSpecial::Mysthoria && $power->unavailable)
            <img src="{{ asset('images/shop/mysthoria_mine.png') }}" /><br>
            <strong style="color:#FF00FF">Objet Exclu Mysthoriä</strong>
        @elseif ($power->special === \App\Enums\PowerSpecial::Cookie && $power->unavailable)
            <img src="{{ asset('images/shop/fete_soleil_levant.png') }}" /><br>
            <strong style="color:#FF00FF">Fête du Soleil Levant</strong>
        @elseif ($power->special === \App\Enums\PowerSpecial::WinterFestival && $power->unavailable)
            <img src="{{ asset('images/shop/festival_des_neiges.png') }}" /><br>
            <strong style="color:#FF00FF">Fête de l'Hiver</strong>
        @elseif ($power->special === \App\Enums\PowerSpecial::PirateQuest && $power->unavailable)
            <strong style="color:#FF00FF">Récompense de Quête</strong>
        @elseif ($power->special === \App\Enums\PowerSpecial::Christmas && $power->unavailable)
            <span class="text-danger fw-bold">EXCLU NOËL</span>
        @elseif ($power->special === \App\Enums\PowerSpecial::Irwish && $power->unavailable)
            <img src="{{ asset('images/shop/irwish.png') }}" /><br>
            <strong style="color:#FF00FF">Boisson Spéciale Irwish</strong>
        @elseif ($power->special === \App\Enums\PowerSpecial::Alchemist && $power->unavailable)
            <img src="{{ asset('images/shop/alchimie.png') }}" /><br>
            <strong style="color:#FF00FF">Objet Spéciale Alchimie / Druide</strong>
        @elseif ($power->special === \App\Enums\PowerSpecial::Horia && $power->unavailable)
            <img src="{{ asset('images/shop/minipictoshop.png') }}" /><br>
            <strong style="color:#FF00FF">Objet Exclu Horia</strong>
        @elseif ($power->special === \App\Enums\PowerSpecial::ArtBook && $power->unavailable)
            <span class="text-danger fw-bold">EXCLU ARTBOOK 2</span>
        @elseif ($power->special === \App\Enums\PowerSpecial::Card && $power->unavailable)
            <span class="text-danger fw-bold">GRATTEZ UNE CARTE</span>
        @else
            @isset ($power->price)
                <p class="color-quaternary fw-bold">
                    <i class="fa-solid fa-money-bill-wave"></i>
                    {{ $power->price }} BBL
                </p>
            @endif
            @isset ($power->token)
                @if ($power->token > 0)
                    <p class="token">
                        @if ($power->special === \App\Enums\PowerSpecial::Dungeon)
                            <img src="{{ asset('images/shop/jetons/5.png') }}" />
                        @elseif ($power->special === \App\Enums\PowerSpecial::HauntedManor)
                            <img src="{{ asset('images/shop/jetons/4.png') }}" />
                        @elseif ($power->special === \App\Enums\PowerSpecial::Mysthoria)
                            <img src="{{ asset('images/shop/jetons/3.png') }}" />
                        @elseif ($power->special === \App\Enums\PowerSpecial::NavalBattle)
                            <img src="{{ asset('images/shop/jetons/2.png') }}" />
                        @elseif ($power->special === \App\Enums\PowerSpecial::Pyramid)
                            <img src="{{ asset('images/shop/jetons/1.png') }}" />
                        @endif
                    {{ $power->token }} JETONS
                    </p>
               @endif
            @endisset
            @if ($power->type === \App\Enums\PowerType::Time)
                <p class="fw-bold m-0">Pack de {{ $power->pack/60 }}min</p>
            @elseif ($power->type === \App\Enums\PowerType::Quantity)
                <p class="fw-bold m-0">Pack de {{ $power->pack }}</p>
            @endif
            @auth
                @if (Auth::user()->player->powers->contains($power) )
                    {{-- The player cannot buy the power if it is not a quantity item  --}}
                    @if ($power->type == \App\Enums\PowerType::OneTime)
                        <img src="{{ asset('images/blablaland/ok.gif') }}" alt="Ok" /> <br>
                        <span style="color:#666666">Tu as déjà cet objet</span>
                    @else
                        <p class="text-muted">
                            <img src="{{ asset('images/blablaland/ok.gif') }}" alt="Ok" />
                            Tu en as {{ Auth::user()->player->powers()->wherePivot('power_id', $power->id)->first()->pivot->quantity }}
                        </p>
                        @if ($power->unavailable)
                            <span class="text-danger fw-bold">
                            BIENTÔT EN BOUTIQUE !!
                        </span>
                        @else
                            <a href="{{ route('shop.power.show', $power) }}" class="btn btn-sm btn-quaternary fw-bold p-1 rounded">
                                Je prends !
                            </a>
                        @endif
                    @endif
                @else
                    @if ($power->unavailable)
                        <span class="text-danger fw-bold">
                        BIENTÔT EN BOUTIQUE !!
                    </span>
                    @else
                        <a href="{{ route('shop.power.show', $power) }}" class="btn btn-sm btn-quaternary fw-bold p-1 rounded">
                            Je prends !
                        </a>
                    @endif
                @endif
            @else
                <a href="{{ route('login') }}" class="text-danger fw-bold">
                    CONNECTE TOI POUR OBTENIR CET OBJET
                </a>
            @endauth
        @endif
        <br>
        <a href="{{ route('shop.power.show', $power) }}">Plus d'infos</a>
    </td>
</tr>
