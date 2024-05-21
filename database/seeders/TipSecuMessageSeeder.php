<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TipSecuMessageSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('tip_secu_messages')->delete();

        \DB::table('tip_secu_messages')->insert(array (
            0 =>
            array (
                'id' => 1,
                'message' => 'Ton mot de passe est secret, ne le donne à personne. Même si on te propose des blabillons en échange, c\'est une arnaque.',
            ),
            1 =>
            array (
                'id' => 2,
                'message' => 'Partager ton compte avec un ami, un membre de ta famille ou même ton poisson rouge augmente les risques de te faire pirater ton compte',
            ),
            2 =>
            array (
                'id' => 3,
                'message' => 'Si tu partage les identifiants de ton adresse email avec quelqu\'un... il aura la possibilité de te voler ton compte Blablaland. Fais bien attention !',
            ),
            3 =>
            array (
                'id' => 4,
                'message' => 'Vérifie bien que tu es sur www.blablaland.com pour t\'assurer de ne pas te faire pirater ton compte.',
            ),
            4 =>
            array (
                'id' => 5,
            'message' => 'Par sécurité, évite de divulguer tes informations personnelles (nom, adresse, tél etc...)',
            ),
            5 =>
            array (
                'id' => 6,
                'message' => 'Un vrai modérateur ne te demandera jamais ton mot de passe. Ne le communique donc à personne !',
            ),
            6 =>
            array (
                'id' => 7,
                'message' => 'Partager ton compte avec un ami, un membre de ta famille ou même ton poisson rouge augmente les risques de te faire pirater ton compte. C\'est donc interdit !',
            ),
            7 =>
            array (
                'id' => 8,
            'message' => 'On ne peut acheter des Blabillons que sur le site de Blablaland.com, tout autre solution (gratuite ou payante) est un piège à éviter.',
            ),
            8 =>
            array (
                'id' => 9,
                'message' => 'Par mesure de sécurité, on vous conseille d\'avoir un mot de passe différent pour votre compte Blablaland et votre email.',
            ),
        ));

        \DB::table('tip_secu_messages')->update(['created_at' => now(), 'updated_at' => now()]);
    }
}
