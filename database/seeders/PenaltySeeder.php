<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenaltySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('penalties')->insert([
            'name' => 'Cam/Skype',
            'description' => "Les annonces Skype, Snapchat et/ou Cam sont interdites sur Blablaland !",
            'grade_id' => 92,
            'duration' => 15
        ]);

        \DB::table('penalties')->insert([
            'name' => 'Cybersexe',
            'description' => "Blablaland n'est pas un lieu de débauche. Le cybersexe n'y est pas autorisé.",
            'grade_id' => 92,
            'duration' => 60
        ]);

        \DB::table('penalties')->insert([
            'name' => 'Propos sexuels',
            'description' => "Les conversations à caractère sexuel n'ont pas leur place sur BBL.",
            'grade_id' => 92,
            'duration' => 15
        ]);

        \DB::table('penalties')->insert([
            'name' => 'Insultes',
            'description' => "Peu importe les raisons, les insultes ne sont pas tolérées sur Blablaland !",
            'grade_id' => 92,
            'duration' => 30
        ]);

        \DB::table('penalties')->insert([
            'name' => 'Lang grossier',
            'description' => "Surveille ton langage s'il te plaît !",
            'grade_id' => 92,
            'duration' => 15
        ]);

        \DB::table('penalties')->insert([
            'name' => 'Flood',
            'description' => "Il est interdit de flooder (nombreuses répétitions d'un message ou d'actions) sur Blablaland pour la tranquillité et le confort des joueurs.",
            'grade_id' => 92,
            'duration' => 0
        ]);

        \DB::table('penalties')->insert([
            'name' => 'Info perso',
            'description' => "Il est interdit de divulguer ou de demander des informations personnelles sur le tchat, peu importe à qui elles appartiennent (mail, tel, mot de passe, adresse, photo, IP...)",
            'grade_id' => 92,
            'duration' => 20
        ]);

        \DB::table('penalties')->insert([
            'name' => 'Pseudo',
            'description' => "Merci de prendre un pseudo conforme au Règlement de Blablaland.",
            'grade_id' => 92,
            'duration' => 0
        ]);

        \DB::table('penalties')->insert([
            'name' => 'Pub',
            'description' => "Les petites annonces et la publicité sont interdites !",
            'grade_id' => 92,
            'duration' => 5
        ]);

        \DB::table('penalties')->insert([
            'name' => 'Animation',
            'description' => "Merci de ne pas nuire au bon déroulement de l'animation !",
            'grade_id' => 91,
            'duration' => 10
        ]);

        \DB::table('penalties')->insert([
            'name' => 'Aide : MDP',
            'description' => "Rappel : Donner son mot de passe, c'est perdre son compte ! Ne donne JAMAIS ton mot de passe, même pas à ton poisson rouge !",
            'grade_id' => 92,
            'duration' => 0
        ]);

        \DB::table('penalties')->insert([
            'name' => 'Arnaque site',
            'description' => "Diffuser un site proposant des Blabillons en échange de mots de passe ou de codes BBL, c'est interdit. Désactive-le ou tu risques le blocage définitif de ton compte.",
            'grade_id' => 92,
            'duration' => 60
        ]);

        \DB::table('penalties')->insert([
            'name' => 'Aide : Site MDP',
            'description' => "Ne donne JAMAIS ton mot de passe, qu'importe la somme de blabillons que l'on te propose, c'est une arnaque !",
            'grade_id' => 92,
            'duration' => 0
        ]);

        \DB::table('penalties')->insert([
            'name' => 'Don/vente compte',
            'description' => "Le don, la vente ou l'échange/partage de compte n'est pas admis sur Blablaland. Consulte le Règlement !",
            'grade_id' => 92,
            'duration' => 15
        ]);

        \DB::table('penalties')->insert([
            'name' => 'Discours haineux',
            'description' => "Les paroles haineuses (racisme, homophobie, discriminations) sont punies par la Loi française et ne sont pas tolérables sur Blablaland.",
            'grade_id' => 92,
            'duration' => 60
        ]);

        \DB::table('penalties')->insert([
            'name' => 'Failleur',
            'description' => "Merci de ne pas exploiter les bugs de Blablaland. Tu risques le blocage définitif de ton compte si tu continues.",
            'grade_id' => 92,
            'duration' => 60
        ]);

        \DB::table('penalties')->insert([
            'name' => 'Crash/DDOS',
            'description' => "Les crashs maps, ddos, etc sont interdits. A la prochaine faille, ton compte sera exclu définitivement.",
            'grade_id' => 92,
            'duration' => 60
        ]);

        \DB::table('penalties')->insert([
            'name' => 'Diffusion faille',
            'description' => "Le cheat est interdit ! Tu risques une exclusion définitive si tu demandes et/ou diffuses un lien ou une méthode de cheat/faille !",
            'grade_id' => 92,
            'duration' => 60
        ]);

        \DB::table('penalties')->insert([
            'name' => 'Anti-dodo',
            'description' => "Les logiciels d'automatisation et de cheat sont interdits sur BBL. Tu risques une exclusion définitive si tu en utilises.",
            'grade_id' => 92,
            'duration' => 60
        ]);

        \DB::table('penalties')->insert([
            'name' => 'Menaces/harcèlement',
            'description' => "Les menaces, l'intimidation et/ou le harcèlement ne sont pas tolérés sur tout le site de Blablaland. Change d'attitude !",
            'grade_id' => 92,
            'duration' => 60
        ]);

        \DB::table('penalties')->insert([
            'name' => 'Provocation',
            'description' => "Merci de ne pas provoquer les membres de la communauté !",
            'grade_id' => 92,
            'duration' => 60
        ]);

        \DB::table('penalties')->insert([
            'name' => 'Récidive',
            'description' => "Malgré nos avertissements, tu n'es toujours pas revenu dans la voie de la Sagesse. Bon séjour en prison !",
            'grade_id' => 92,
            'duration' => 60
        ]);

        \DB::table('penalties')->insert([
            'name' => 'Répète',
            'description' => "Merci de ne pas répèter bêtement les propos incorrects des autres joueurs",
            'grade_id' => 92,
            'duration' => 5
        ]);

        \DB::table('penalties')->insert([
            'name' => 'Parole musik',
            'description' => "Le fait que tes propos soient tirés d'une chanson ne les rend pas pour autant moins incorrects. Respecte le règlement quelle que soit la situation",
            'grade_id' => 92,
            'duration' => 5
        ]);

        \DB::table('penalties')->insert([
            'name' => 'Codes/cartes',
            'description' => "L'échange ou la vente de cartes cadeaux/codes est interdit sur Blablaland. Ne recommence pas !",
            'grade_id' => 92,
            'duration' => 15
        ]);

        \DB::table('penalties')->insert([
            'name' => 'Triche jeux',
            'description' => "L'utilisation de doubles comptes ou de cheat pour tricher aux jeux est interdit. Ne recommence pas !",
            'grade_id' => 92,
            'duration' => 60
        ]);

        \DB::table('penalties')->insert([
            'name' => 'Blocage PNJ',
            'description' => "Merci de ne pas bloquer l'accès au PNJ.",
            'grade_id' => 92,
            'duration' => 15
        ]);

        \DB::table('penalties')->insert([
            'name' => 'Aide : Gérérale',
            'description' => "Tu trouveras la réponse à ta question dans l'Aide du Jeu, ici : http://www.blablaland.com/site/aide.php",
            'grade_id' => 90,
            'duration' => 0
        ]);

        \DB::table('penalties')->insert([
            'name' => 'Aide : Suicide',
            'description' => "Si tu as des soucis et que tu souhaites en parler, tu peux regarder sur cette page : http://www.blablaland.com/site/aide_enfance.php",
            'grade_id' => 90,
            'duration' => 0
        ]);

        \DB::table('penalties')->insert([
            'name' => 'Ddos',
            'description' => "Le ddos et les menaces de ddos sont interdits.",
            'grade_id' => 92,
            'duration' => 360
        ]);

        \DB::table('penalties')->update(['created_at' => now(), 'updated_at' => now()]);
    }
}
