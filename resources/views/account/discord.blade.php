<x-account-layout>
    <div class="container-header-secondary">
        <i class="fas fa-link"></i>
        Mon Discord
    </div>
    <div class="container-content-secondary">
        @if ($user->discord)
            <p class="text-center">Ton compte est relié au Discord <strong>{{ $user->discord->username . '#' . $user->discord->discriminator }}</strong> !</p>
        @else
            <p>Pour lier ton compte discord à ton compte, ça se passe ici !</p>
            <a class="btn btn-secondary" href="{{ route('discord.index') }}">
                Se connecter à Discord
            </a>
        @endif
    </div>
</x-account-layout>
