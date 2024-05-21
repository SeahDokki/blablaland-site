<div class="text-center">
    <ul class="list-unstyled" style="width: 120px">
        <img class="text-center rounded-3" src="{{ asset($user->avatarUrl) }}" />
        <li>
            <a href="{{ route('user.show', $user) }}">
                <strong>{{ $user->username }}</strong>
            </a>
        </li>
        @isset($pseudo)
            <li>{{ $user->player->pseudo }}</li>
        @endisset
        @isset($grade)
            <li>{!! $user->grade_id != 0 ? $user->gradeName : $user->statutName !!}</li>
        @endisset
        @isset($status)
            <li> @if($user->player->isConnected()) <img src="{{ asset('images/online.gif') }}" /> @else <img src="{{ asset('images/offline.gif') }}" /> @endif Chat
            </li>
            <li>@if($user->isConnected()) <img src="{{ asset('images/online.gif') }}" /> @else <img src="{{ asset('images/offline.gif') }}" /> @endif Forum
            </li>
        @endisset
    </ul>
</div>
