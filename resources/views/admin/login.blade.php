<x-app-layout>
    <div class="container-header-quaternary">Liste des connexions</div>
    <div class="container-content-quaternary">
        <h2>Liste des connexions</h2>
        <hr>
        {{ $logins->links('pagination.default') }}
        <table class="table table-striped">
            <thead>
            <tr>
                <th>UserId</th>
                <th>Login</th>
                <th>Pseudo</th>
                <th>Adresse IP</th>
                <th>Date</th>
            </tr>
            </thead>
            <tbody>
                @foreach($logins as $login)
                <tr>
                    <td>{{ $login->user_id }}</td>
                    <td>{{ $login->user->username }}</td>
                    <td>{{ $login->user->player->pseudo }}</td>
                    <td>
                        <a href="https://www.ip2location.com/{{ $login->ip_address }}" target="_blank">
                            {{ $login->ip_address }}
                        </a>
                    </td>
                    <td>{{ $login->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $logins->links('pagination.default') }}
     </div>
</x-app-layout>
