<x-app-layout>
    <div class="row">
        <div class="col-sm-9">
            <div class="container-header-quaternary">
                <i class="fas fa-users"></i> L'équipe
            </div>
            <div class="container-content-quaternary team">
                <div class="row">
                    <div class="col-sm-3 text-center">
                        {{--<img src="{{ asset('images/gandalf.png') }}"/>--}}
                        <canvas id="faq_gandalf" width="150" height="190"></canvas>
                    </div>
                    <div class="col-sm-9">
                        <span class="fs-5">Toute l'équipe</span>
                        <p class="mt-2">
                            Nous sommes un rétro du jeu Blablaland développé par l'équipe Niveau99. Notre copie évolue
                            chaque jour un peu plus grâce à vous, mais aussi grâce à tous ceux et celles qui l'aident à
                            devenir meilleur.
                        </p>
                        <p>
                            <b>Tu trouveras ci-dessous la liste de l'équipe !</b>
                        </p>
                        <p>
                            Note : Ceux qui disent appartenir à l'équipe et qui ne sont pas listés sur cette page sont
                            des menteurs. On ne devient pas modérateur en échange de son mot de passe ou de son compte
                            blabla ;)
                        </p>
                    </div>
                </div>
                <div class="alert alert-warning">
                    <strong>Les modérateurs</strong><br>
                    Ce sont des personnes bénévoles qui connaissent très bien Blablaland et qui interviennent sur le jeu
                    et sur le Forum pour s’assurer que le Règlement de Blablaland est bien respecté et que chacun peut
                    jouer, s’amuser, discuter dans une ambiance agréable et fun. Les modérateurs peuvent envoyer des
                    Messages Privés, kicker du jeu ou bien mettre en prison.
                </div>
                <div class="d-flex justify-content-center flex-wrap">
                    @foreach($users->whereIn('grade_id', [90, 92, 93, 95, 96, 300]) as $user)
                        @include('components.user-card', ['user' => $user, 'grade' => true, 'status' => true])
                    @endforeach
                </div>

                <div class="alert alert-warning">
                    <strong>Les animateurs</strong><br>
                    Ce sont eux aussi des personnes bénévoles qui connaissent très bien Blablaland, mais les animateurs
                    sont là pour divertir la communauté contrairement aux modérateurs qui s'assurent que vous ne faites
                    pas de bêtises ! Si tu as envie d'animer, tu peux contacter une personne dans la liste ci-dessous
                    pour co-animer !
                </div>
                <div class="d-flex justify-content-center flex-wrap">
                    @foreach($users->whereIn('grade_id', [91, 94]) as $user)
                        @include('components.user-card', ['user' => $user, 'grade' => true, 'status' => true])
                    @endforeach
                </div>

                <div class="alert alert-warning">
                    <strong>L'équipe de développement</strong><br>
                    Tous les membres que tu vois ci-dessous travaillent sur ce rétro, ils sont là seulement par passion
                    pour redonner vie à l'ancien Blablaland. Un peu de nostalgie ça ne fait jamais de mal !
                </div>
                <div class="d-flex justify-content-center">
                    @foreach($users->where('grade_id', '>=', 700) as $user)
                        @include('components.user-card', ['user' => $user, 'grade' => true])
                    @endforeach
                </div>
                <div class="footer-page" style="margin: -4px"></div>
            </div>
        </div>
        <x-navbar-right/>
    </div>
@section('style')
    <link rel="stylesheet" href="{{ asset('css/pages/_team.css') }}">
@endsection
<script src="{{ asset('js/canvas/faq_gandalf.js') }}"></script>
</x-app-layout>
