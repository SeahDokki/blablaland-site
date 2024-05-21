<x-account-layout xmlns="http://www.w3.org/1999/html">
    <div class="container-header-secondary">
        <i class="fa-solid fa-user-group"></i>
        Ma liste d'amis
    </div>
    <div class="container-content-secondary" id="friends">
        <p class="title-account">Tes amis</p>
        <div class="row">
            @foreach ($friends as $friend)
                @if ($friend->accepted)
                    <div class="col-sm-4">
                        <a href="{{ route('user.show', $friend->getPlayerAffinity()->user) }}" class="fw-bold">
                            <img src="{{ asset($friend->getPlayerAffinity()->user->avatarUrl) }}" class="rounded-3"
                                 style="float:left;margin-right:5px;margin-bottom:40px" />
                            {!! $friend->getPlayerAffinity()->pseudoColor !!}
                        </a>
                        <p class="m-0">
                            @if ($friend->getPlayerAffinity()->isConnected())
                                <img src="{{ asset('images/online.gif') }}" />
                            @else
                                <img src="{{ asset('images/offline.gif') }}" />
                            @endif
                            Chat
                        </p>
                        <p class="m-0">
                            @if ($friend->getPlayerAffinity()->user->isConnected())
                                <img src="{{ asset('images/online.gif') }}" />
                            @else
                                <img src="{{ asset('images/offline.gif') }}" />
                            @endif
                            Forum
                        </p>
                        <a href="{{ route('account.friend.delete', $friend) }}">Supprimer</a>
                    </div>
                    @endif
            @endforeach
        </div>
        @if ($friendsSend->count() || $friendsRequest->count()) <hr> @endif
        @if ($friendsRequest->count())
            <p class="title-account">Demandes reçues ({{ $friendsRequest->count() }})</p>
            <table class="table">
                <tbody>
                    @foreach ($friendsRequest as $friend)
                        <tr>
                            <td>
                                @if($friend->getPlayerAffinity()->user->trashed())
                                    <span class="fw-bold">{!! $friend->getPlayerAffinity()->pseudoColor !!}</span>
                                @else
                                    <a href="{{ route('user.show', $friend->getPlayerAffinity()->user) }}" class="fw-bold">
                                        {!! $friend->getPlayerAffinity()->pseudoColor !!}
                                    </a> - le {{ $friend->created_at->format('d/m/Y à H:i') }}
                                @endif
                            </td>
                            <td class="text-end">
                                <a href="{{ route('account.friend.accept', $friend) }}">Accepter</a> | <a href="{{ route('account.friend.decline', $friend) }}">Refuser</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        @if ($friendsSend->count())
            <p class="title-account">Demandes envoyées ({{ $friendsSend->count() }})</p>
            <table class="table">
                <tbody>
                @foreach ($friendsSend as $friend)
                    <tr>
                        <td>
                            @if($friend->getPlayerAffinity()->user->trashed())
                                <span class="fw-bold">{!! $friend->getPlayerAffinity()->pseudoColor !!}</span>
                            @else
                                <a href="{{ route('user.show', $friend->getPlayerAffinity()->user) }}" class="fw-bold">
                                    {!! $friend->getPlayerAffinity()->pseudoColor !!}
                                </a> - le {{ $friend->created_at->format('d/m/Y à H:i') }}
                            @endif
                        </td>
                        <td class="text-end"><a href="{{ route('account.friend.cancel', $friend) }}">Annuler</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-account-layout>
