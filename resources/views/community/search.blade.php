<x-app-layout :title="'Blablaland, La communauté du jeu de tchat gratuit pour ados, tchatche et fais toi des amis sur le chat'">
    <div class="row">
        <div class="col-sm-9">
            <div class="container-header-tertiary">
                <i class="fas fa-users"></i>
                Recherche un membre ou un tags !!
            </div>
            <div class="container-content-tertiary p-0">
                <div class="row mb-2 mt-2">
                    <div class="col-sm-3 text-center">
                        <img src="{{ asset('images/community/book.jpg') }}" alt="Livre de Blablaland" />
                    </div>
                    <div class="col-sm-8">
                        <span class="fs-5">L'annuaire de Blablaland</span>
                        <p>
                            Tu cherches un Blabla en particulier, pour en savoir un peu plus sur lui. Ou tu recherches tout simplement à rencontrer de nouveaux amis
                            pour tchater avec eux. Fais une recherche ici pour voir qui est qui, et qui fait quoi dans ce joli petit monde qu'est le jeu de
                            tchat de Blablaland.
                        </p>
                        <form method="GET" action="{{ route('community.search.index') }}">
                            <div class="form-group">
                                <input class="form-control" name="search" value="{{ request()->get('search') }}" placeholder="Recherche un membre ou un tag">
                                @error('search')
                                <small class="form-text text-danger">{{ $message }}</small>
                                @else
                                    <small class="form-text text-muted">3 caractères au minimum, sans compter les espaces</small>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="option" value="user" @checked((request()->get('option') == 'user') == 1)>
                                    <label class="form-check-label">Membres</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="option" value="tag" @checked((request()->get('option') == 'tag') == 1)>
                                    <label class="form-check-label">Tags</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-tertiary">Rechercher</button>
                        </form>
                    </div>
                </div>
                @if($users)
                    <div class="separator-tertiary fs-6">Résultat de votre recherche </div>
                    @if (\Illuminate\Support\Facades\Auth::user())
                        <table class="table table-striped">
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->username }} ({{ $user->player->pseudo }})</td>
                                        <td>
                                            <a href="{{ route('user.show', $user) }}">
                                                Consulter
                                            </a>
                                        </td>
                                        <td>Inscrit depuis le {{ $user->created_at->translatedFormat('d.m.Y') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="text-center mt-2">
                            <span class="text-danger fw-bold">
                                Désolé, tu dois être identifié pour utiliser l'annuaire de Blablaland !
                            </span><br>
                            <a href="{{ route('login') }}">Connecte-toi,</a> ou <a href="{{ route('register') }}">inscris-toi</a> :D
                        </div>
                    @endif
                @endisset
                <div class="footer-page"></div>
            </div>
            <div class="container-header-primary">
                <i class="fas fa-users"></i>
                Les derniers inscrits
            </div>
            <div class="container-content-primary">
                <div class="d-flex justify-content-center flex-wrap">
                    @foreach($registrants as $registant)
                        @include('components.user-card', ['user' => $registant, 'pseudo' => true])
                    @endforeach
                </div>
            </div>
            <div class="container-header-quaternary">
                <i class="fas fa-tags"></i>
                Les centres d'intêrets les plus populaires...
            </div>
            <div class="container-content-quaternary">
                <div class="row">
                    <div class="col-sm-2 text-center">
                        <img src="{{ asset('images/community/robot.jpg') }}" alt="Robot" />
                    </div>
                    <div class="col-sm-9">
                        @foreach($popularTags as $tag)
                            <a href="{{ route('community.search.index', $tag).'&option=tag&search='.$tag->name }}"
                               style="text-decoration: none">
                                {!! $tag->nameSpan !!},
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <x-navbar-right/>
    </div>
</x-app-layout>
