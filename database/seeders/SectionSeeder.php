<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('sections')->insert([
            'name' => 'Informations et Règlement de Blablaland',
            'description' => 'À lire absolument pour ne pas être perdu :)',
            'view_grade_id' => 0,
            'grade_id' => 300,
            'category_id' => 1
        ]);

        \DB::table('sections')->insert([
            'name' => 'Blablaland NEWS',
            'description' => 'Toutes belles toutes fraîches, les dernières News de Blablaland !',
            'description_bis' => "<div class='row'><div class='col-sm-3 text-center'><img src='/images/forum/fofo_news_logo2.jpg'/></div> <div class='col-sm-9 text-start'><div class='fs-6'><strong>Blablaland News</strong></div><p>Retrouve toute l'actualité importante de Blablaland sur cette page. Tu peux réagir aux news, à condition que ton message respecte les règles bien entendu. Tu trouveras aussi les \"Petites News\", comme les petites modifications qu'on fait régulièrement et autres petites choses bonnes à savoir</p><p>Retrouve toutes les News de Blablaland sur le <a href='/news'>Page News</a></p></div></div>",
            'view_grade_id' => 0,
            'grade_id' => 300,
            'category_id' => 1
        ]);

        \DB::table('sections')->insert([
            'name' => 'Les Petites News',
            'description_bis' => "<div class='row'><div class='col-sm-12 text-center'><img src='/images/logo-blablaland-small.jpg'/><div class='fs-6'><strong>\"Les Petites News\"</strong></div>Les petites news secondaires bonnes à savoir !</div></div>",
            'view_grade_id' => 0,
            'grade_id' => 300,
            'section_id' => 2,
            'category_id' => 1
        ]);

        \DB::table('sections')->insert([
            'name' => 'AIDE / FAQ - Foire aux Questions',
            'description' => 'Une question sur BBL ? On a sûrement une réponse :)',
            'description_bis' => "<div class='row'><div class='col-sm-3 text-center'><img src='/images/forum/gandalf_small.jpg'/></div> <div class='col-sm-9 text-start'><div class='fs-6'><strong>L'aide de Blablaland</strong></div><p>Bienvenue sur l'aide, ou F.A.Q, comme Foire Aux Questions.<br>Ici, tu trouveras toutes les documentations sur Blablaland. Grosso modo, les réponses à toutes les questions que tu pourrais te poser.<br>Note que cette aide est perpétuellement modifiée. On y ajoute régulièrement des documentations</p><p>Si par contre tu ne trouves pas ta réponse. Pose ta question dans les partie Questions/réponses.<br><a href='/faq'>Le contenu entier de cette aide est listé ici.</a></p></div></div>",
            'view_grade_id' => 0,
            'grade_id' => 90,
            'category_id' => 1
        ]);

        \DB::table('sections')->insert([
            'name' => 'A Propos de Blablaland',
            'description_bis' => "<div class='row'><div class='col-sm-12 text-center'><img src='/images/forum/gandalf_small2.jpg'/><div class='fs-6'><strong>Aide : \"A propos de Blablaland\"</strong></div></div></div>",
            'section_id' => 4,
            'view_grade_id' => 0,
            'grade_id' => 90,
            'category_id' => 1
        ]);

        \DB::table('sections')->insert([
            'name' => 'L\'inscription à Blablaland',
            'description_bis' => "<div class='row'><div class='col-sm-12 text-center'><img src='/images/forum/gandalf_small2.jpg'/><div class='fs-6'><strong>Aide : \"L'inscription à Blablaland\"</strong></div></div></div>",
            'section_id' => 4,
            'view_grade_id' => 0,
            'grade_id' => 90,
            'category_id' => 1
        ]);

        \DB::table('sections')->insert([
            'name' => 'Mon Compte',
            'description_bis' => "<div class='row'><div class='col-sm-12 text-center'><img src='/images/forum/gandalf_small2.jpg'/><div class='fs-6'><strong>Aide : \"Mon Compte\"</strong></div></div></div>",
            'view_grade_id' => 0,
            'grade_id' => 90,
            'section_id' => 4,
            'category_id' => 1
        ]);

        \DB::table('sections')->insert([
            'name' => 'Le Tchat de Blablaland',
            'view_grade_id' => 0,
            'description_bis' => "<div class='row'><div class='col-sm-12 text-center'><img src='/images/forum/gandalf_small2.jpg'/><div class='fs-6'><strong>Aide : \"Le Tchat de Blablaland\"</strong></div></div></div>",
            'grade_id' => 90,
            'section_id' => 4,
            'category_id' => 1
        ]);

        \DB::table('sections')->insert([
            'name' => 'Le Forum de Blablaland',
            'description_bis' => "<div class='row'><div class='col-sm-12 text-center'><img src='/images/forum/gandalf_small2.jpg'/><div class='fs-6'><strong>Aide : \"Le Forum de Blablaland\"</strong></div></div></div>",
            'view_grade_id' => 0,
            'grade_id' => 90,
            'section_id' => 4,
            'category_id' => 1
        ]);

        \DB::table('sections')->insert([
            'name' => 'La Boutique de Blablaland',
            'description_bis' => "<div class='row'><div class='col-sm-12 text-center'><img src='/images/forum/gandalf_small2.jpg'/><div class='fs-6'><strong>Aide : \"La Boutique de Blablaland\"</strong></div></div></div>",
            'view_grade_id' => 0,
            'grade_id' => 90,
            'section_id' => 4,
            'category_id' => 1
        ]);

        \DB::table('sections')->insert([
            'name' => 'L\'Univers de Blablaland',
            'description' => 'Le Blabla de la Communauté !',
            'view_grade_id' => 0,
            'grade_id' => 90,
            'category_id' => 2
        ]);

        \DB::table('sections')->insert([
            'name' => 'La Taverne des Blablas',
            'view_grade_id' => 0,
            'grade_id' => 0,
            'section_id' => 11,
            'category_id' => 2
        ]);

        \DB::table('sections')->insert([
            'name' => 'Idées pour le site',
            'view_grade_id' => 0,
            'grade_id' => 0,
            'section_id' => 11,
            'category_id' => 2
        ]);

        \DB::table('sections')->insert([
            'name' => 'Idées pour le tchat',
            'view_grade_id' => 0,
            'grade_id' => 0,
            'section_id' => 11,
            'category_id' => 2
        ]);

        \DB::table('sections')->insert([
            'name' => 'Débat sur l\'Univers de Blablaland',
            'view_grade_id' => 0,
            'grade_id' => 0,
            'section_id' => 11,
            'category_id' => 2
        ]);

        \DB::table('sections')->insert([
            'name' => 'Blabla\'Folies',
            'description' => 'Forum d\'animation du t\'chat !</br>Quizz, jeux, events en tout genre, c\'est par ici que ça bouge ^^',
            'view_grade_id' => 0,
            'grade_id' => 90,
            'category_id' => 2
        ]);

        \DB::table('sections')->insert([
            'name' => 'Propositions de Jeux',
            'view_grade_id' => 0,
            'grade_id' => 0,
            'section_id' => 16,
            'category_id' => 2
        ]);

        \DB::table('sections')->insert([
            'name' => 'Archives',
            'view_grade_id' => 0,
            'grade_id' => 90,
            'section_id' => 16,
            'category_id' => 2
        ]);

        \DB::table('sections')->insert([
            'name' => 'Annonces libres',
            'view_grade_id' => 0,
            'grade_id' => 0,
            'section_id' => 16,
            'category_id' => 2
        ]);

        \DB::table('sections')->insert([
            'name' => 'BBL\'Art Club - Présente tes créations ici',
            'description' => '<b>Forum de la Communauté des Graphistes !</b></br>Ici tu trouveras tout ce qui touche aux montages, trucages, et autres créations diverses et variées sur Blablaland ^^',
            'description_bis' => "<div class='row'><div class='col-sm-4 text-center'><img src='/images/forum/bblartclub_logo2.jpg'/></div> <div class='col-sm-8 text-start'><div class='fs-6'><strong>Le BBL'Art Club !</strong></div><p>Présente nous ici tes créations : Fansites, Photos, FanArts... etc.<br>Tu trouveras un forum par thème, et même \"SOS Trucages\" si tu cherches des astuces pour te perfectionner.<br>Dévoile tout le POWA qui est en toi !</p><p>Les plus belles créations seront présentées sur <a href='/community/artclub'>la page officielle du BBL'Art Club !</a> A chaque fois qu'une de tes créations est prise, tu gagnes un point dans la catégorie.</p></div></div>",
            'view_grade_id' => 0,
            'grade_id' => 90,
            'category_id' => 2
        ]);

        \DB::table('sections')->insert([
            'name' => 'Fansites',
            'description_bis' => "<div class='row'><div class='col-sm-12 text-center'><img src='/images/forum/bblartclub_logo_small2.jpg'/><div class='fs-6'><strong>BBL'ArtClub : \"Fansites\"</strong></div></div></div>",
            'view_grade_id' => 0,
            'grade_id' => 0,
            'section_id' => 20,
            'category_id' => 2
        ]);

        \DB::table('sections')->insert([
            'name' => 'Art Visuel',
            'description_bis' => "<div class='row'><div class='col-sm-12 text-center'><img src='/images/forum/bblartclub_logo_small2.jpg'/><div class='fs-6'><strong>BBL'ArtClub : \"Art Visuel\"</strong></div></div></div>",
            'view_grade_id' => 0,
            'grade_id' => 0,
            'section_id' => 20,
            'category_id' => 2
        ]);

        \DB::table('sections')->insert([
            'name' => 'Galerie des avatars & signatures',
            'description_bis' => "<div class='row'><div class='col-sm-12 text-center'><img src='/images/forum/bblartclub_logo_small2.jpg'/><div class='fs-6'><strong>BBL'ArtClub : \"Galerie des avatars & signatures\"</strong></div></div></div>",
            'view_grade_id' => 0,
            'grade_id' => 0,
            'section_id' => 20,
            'category_id' => 2
        ]);

        \DB::table('sections')->insert([
            'name' => 'Aide',
            'description_bis' => "<div class='row'><div class='col-sm-12 text-center'><img src='/images/forum/bblartclub_logo_small2.jpg'/><div class='fs-6'><strong>BBL'ArtClub : \"Aide\"</strong></div></div></div>",
            'view_grade_id' => 0,
            'grade_id' => 0,
            'section_id' => 20,
            'category_id' => 2
        ]);

        \DB::table('sections')->insert([
            'name' => 'Astuces et tutoriels',
            'description_bis' => "<div class='row'><div class='col-sm-12 text-center'><img src='/images/forum/bblartclub_logo_small2.jpg'/><div class='fs-6'><strong>BBL'ArtClub : \"Astuces et tutoriels\"</strong></div></div></div>",
            'view_grade_id' => 0,
            'grade_id' => 0,
            'section_id' => 20,
            'category_id' => 2
        ]);

        \DB::table('sections')->insert([
            'name' => 'Parle nous de toi!',
            'view_grade_id' => 0,
            'grade_id' => 0,
            'description' => 'Viens te présenter auprès des autres membres. Présentation recommandée mais non obligatoire !',
            'category_id' => 3
        ]);

        \DB::table('sections')->insert([
            'name' => 'Débats',
            'view_grade_id' => 0,
            'grade_id' => 0,
            'description' => 'Débat avec nous sur des thèmes importants, des sujets d\'actualité, et forge toi ta propre opinion !',
            'category_id' => 3
        ]);

        \DB::table('sections')->insert([
            'name' => 'Philosophie de comptoir / Psycho',
            'description' => 'Toutes sortes de petits débats pour philosophes et psychologues en herbe. Fais parler ton esprit.',
            'view_grade_id' => 0,
            'grade_id' => 0,
            'category_id' => 3
        ]);

        \DB::table('sections')->insert([
            'name' => 'Musique',
            'description' => 'Parle de la musique que tu aimes, du prochain album d\'un artiste, ou même de ta vocation musicale !',
            'view_grade_id' => 0,
            'grade_id' => 90,
            'category_id' => 3
        ]);

        \DB::table('sections')->insert([
            'name' => 'Le devant de la scène',
            'view_grade_id' => 0,
            'grade_id' => 0,
            'section_id' => 29,
            'category_id' => 3
        ]);

        \DB::table('sections')->insert([
            'name' => 'La Boite à Musique',
            'view_grade_id' => 0,
            'grade_id' => 0,
            'section_id' => 29,
            'category_id' => 3
        ]);

        \DB::table('sections')->insert([
            'name' => 'Le Mur du Son',
            'view_grade_id' => 0,
            'grade_id' => 0,
            'section_id' => 29,
            'category_id' => 3
        ]);

        \DB::table('sections')->insert([
            'name' => 'Ciné/TV',
            'description' => 'Pour tous les adeptes du petit ou du grand écran.',
            'view_grade_id' => 0,
            'grade_id' => 90,
            'category_id' => 3
        ]);


        \DB::table('sections')->insert([
            'name' => 'Films',
            'view_grade_id' => 0,
            'grade_id' => 0,
            'section_id' => 33,
            'category_id' => 3
        ]);

        \DB::table('sections')->insert([
            'name' => 'Acteurs/Réalisateurs',
            'view_grade_id' => 0,
            'grade_id' => 0,
            'section_id' => 33,
            'category_id' => 3
        ]);

        \DB::table('sections')->insert([
            'name' => 'Séries/TV',
            'view_grade_id' => 0,
            'grade_id' => 0,
            'section_id' => 33,
            'category_id' => 3
        ]);

        \DB::table('sections')->insert([
            'name' => 'Mangas/Dessins Animés',
            'view_grade_id' => 0,
            'grade_id' => 0,
            'section_id' => 33,
            'category_id' => 3
        ]);

        \DB::table('sections')->insert([
            'name' => 'Lecture',
            'description' => 'Un roman ou un auteur t\'a plu? Viens partager tout ça avec nous pour nous refiler des bons tuyaux.',
            'view_grade_id' => 0,
            'grade_id' => 90,
            'category_id' => 3
        ]);

        \DB::table('sections')->insert([
            'name' => 'BD\'s/Mangas',
            'view_grade_id' => 0,
            'grade_id' => 0,
            'section_id' => 38,
            'category_id' => 3
        ]);

        \DB::table('sections')->insert([
            'name' => 'Romans',
            'view_grade_id' => 0,
            'grade_id' => 0,
            'section_id' => 38,
            'category_id' => 3
        ]);

        \DB::table('sections')->insert([
            'name' => 'Auteurs',
            'view_grade_id' => 0,
            'grade_id' => 0,
            'section_id' => 38,
            'category_id' => 3
        ]);

        \DB::table('sections')->insert([
            'name' => 'Internet/Jeux Vidéos',
            'view_grade_id' => 0,
            'description' => 'Le coin des geeks, ici on cause de tout ce qui touche à l\'informatique, aux consoles et à l\'actu des mondes du virtuel.',
            'grade_id' => 90,
            'category_id' => 3
        ]);

        \DB::table('sections')->insert([
            'name' => 'Consoles portables',
            'view_grade_id' => 0,
            'grade_id' => 0,
            'section_id' => 42,
            'category_id' => 3
        ]);

        \DB::table('sections')->insert([
            'name' => 'Jeux Consoles/PC',
            'view_grade_id' => 0,
            'grade_id' => 0,
            'section_id' => 42,
            'category_id' => 3
        ]);

        \DB::table('sections')->insert([
            'name' => 'Internet',
            'view_grade_id' => 0,
            'grade_id' => 0,
            'section_id' => 42,
            'category_id' => 3
        ]);

        \DB::table('sections')->insert([
            'name' => 'Sports',
            'description' => 'Partage, ici, ta passion des sports, tes coups de gueule et tes admirations des exploits sportifs.',
            'view_grade_id' => 0,
            'grade_id' => 0,
            'category_id' => 3
        ]);

        \DB::table('sections')->insert([
            'name' => 'Vie quotidienne',
            'description' => 'Tout ce qui touche à la vie de tous les jours. Viens t\'exprimer.',
            'view_grade_id' => 0,
            'grade_id' => 0,
            'category_id' => 3
        ]);

        \DB::table('sections')->insert([
            'name' => 'Pot pourri',
            'description' => 'Ici on regroupe tout ce qui ne colle pas avec le reste. Forum de vrac !',
            'view_grade_id' => 0,
            'grade_id' => 90,
            'category_id' => 3
        ]);

        \DB::table('sections')->insert([
            'name' => 'Coin Pourri',
            'view_grade_id' => 0,
            'grade_id' => 0,
            'section_id' => 48,
            'category_id' => 3
        ]);

        \DB::table('sections')->insert([
            'name' => 'Jeux Pourris',
            'view_grade_id' => 0,
            'grade_id' => 0,
            'section_id' => 48,
            'category_id' => 3
        ]);

        \DB::table('sections')->insert([
            'name' => 'Administration',
            'description' => 'La section réservée aux administrateurs de Blablaland ! Si tu es là, tu dois être une personne importante pour Blablaland :o',
            'view_grade_id' => 300,
            'grade_id' => 300,
            'category_id' => 4
        ]);

        \DB::table('sections')->insert([
            'name' => 'L\'Équipe',
            'description' => 'L\'endroit principal de l\'équipe !',
            'view_grade_id' => 90,
            'grade_id' => 90,
            'category_id' => 4
        ]);

        \DB::table('sections')->insert([
            'name' => 'Règlement et Fonctionnement',
            'view_grade_id' => 90,
            'grade_id' => 90,
            'section_id' => 52,
            'category_id' => 4
        ]);

        \DB::table('sections')->insert([
            'name' => 'Les Guides',
            'view_grade_id' => 90,
            'grade_id' => 90,
            'section_id' => 52,
            'category_id' => 4
        ]);

        \DB::table('sections')->insert([
            'name' => 'Recrutement Modérateur',
            'view_grade_id' => 94,
            'grade_id' => 94,
            'section_id' => 52,
            'category_id' => 4
        ]);

        \DB::table('sections')->insert([
            'name' => 'Recrutement Animateur',
            'view_grade_id' => 94,
            'grade_id' => 94,
            'section_id' => 52,
            'category_id' => 4
        ]);

        \DB::table('sections')->insert([
            'name' => 'Modération',
            'view_grade_id' => 92,
            'grade_id' => 92,
            'description' => 'La section réservée aux modérateurs de Blablaland ! Le GrandSage doit sûrement te faire confiance pour que tu aies accès à cette section !',
            'category_id' => 4
        ]);

        \DB::table('sections')->insert([
            'name' => 'Règlement et Fonctionnement',
            'view_grade_id' => 92,
            'grade_id' => 92,
            'section_id' => 57,
            'category_id' => 4
        ]);

        \DB::table('sections')->insert([
            'name' => 'Les Guides',
            'view_grade_id' => 92,
            'grade_id' => 92,
            'section_id' => 57,
            'category_id' => 4
        ]);

        \DB::table('sections')->insert([
            'name' => 'Animation',
            'description' => 'La section réservée aux animateurs de Blablaland ! Le GrandSage doit sûrement te faire confiance pour que tu aies accès à cette section !',
            'view_grade_id' => 91,
            'grade_id' => 91,
            'category_id' => 4
        ]);

        \DB::table('sections')->insert([
            'name' => 'Règlement et Fonctionnement',
            'view_grade_id' => 91,
            'grade_id' => 91,
            'section_id' => 60,
            'category_id' => 4
        ]);

        \DB::table('sections')->insert([
            'name' => 'Les Guides',
            'view_grade_id' => 91,
            'grade_id' => 91,
            'section_id' => 60,
            'category_id' => 4
        ]);

        \DB::table('sections')->insert([
            'name' => 'Les Tests',
            'description' => 'Pour faire des brouillons de topic, ou pour déplacer un topic le temps de faire le ménage dedans. Bref, c\'est toujours pratique d\'avoir un endroit privé au besoin.',
            'view_grade_id' => 90,
            'grade_id' => 90,
            'category_id' => 4
        ]);

        \DB::table('sections')->update(['created_at' => now(), 'updated_at' => now()]);
    }
}
