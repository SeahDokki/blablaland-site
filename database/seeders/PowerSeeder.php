<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PowerSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('powers')->delete();

        \DB::table('powers')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Etoiles',
                    'name_shop' => 'Etoiles',
                    'description' => 'Permet de faire tomber des étoiles dans toutes la map, ce pouvoir est seulement réservé à l\'administration.',
                    'price' => 100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 1,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Etoile',
                    'name_shop' => 'Etoile',
                    'description' => 'Permet de faire tomber des étoiles sur toi-même, ce pouvoir est seulement réservé à l\'administration.',
                    'price' => 100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 1,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'Téléporteur',
                    'name_shop' => 'Téléporteur',
                    'description' => 'Téléporte-toi instantanément sur n\'importe quelle map de Blablaland en 2 clics, sans avoir à les traverser. Simple, rapide, et ultra efficace, tu pourras rejoindre tes amis plus vite que l\'éclair!<b>Livré par pack de 15 téléports.</b>',
                    'price' => 150,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '15',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'Lingette ultra',
                    'name_shop' => 'Lingette ultra',
                    'description' => 'Sers-toi de tes lingettes ultra pour nettoyer ton blabla et retrouver tes couleurs après avoir reçu une bonne tomate dans la tête, ou tout autre chose salissante.<b>Livré par pack de 30 lingettes</b>',
                    'price' => 30,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '30',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'Bombe',
                    'name_shop' => 'Bombe',
                    'description' => 'BOOOOM !! Pose une bombe, et elle explosera aléatoirement dans la minute qui suit en envoyant au paradis tous ceux qui auraient la folie de rester à proximité. Attention qu\'elle ne t\'explose en pleine tête... <b>Livré par pack de 20 Bombes</b>',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '20',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            5 =>
                array (
                    'id' => 6,
                    'name' => 'Cœur romantique',
                    'name_shop' => 'Cœur romantique',
                    'description' => 'Déclare ton amour en envoyant un cœur dans les airs, sur lequel sont inscrits ton pseudo et celui de ton être aimé.<br>À l\'effigie du blabla que tu portes dans ton cœur, il s\'envolera lentement dans les airs et restera visible plusieurs heures.<br><b>Livré par pack de 5 Ballons cœur</b>',
                    'price' => 50,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '5',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            6 =>
                array (
                    'id' => 7,
                    'name' => 'Parachute',
                    'name_shop' => 'Parachute',
                    'description' => 'Un saut dans le vide et...<br>actionne ton parachute et dirige toi lentement vers le sol pour faire une entrée sensationnelle et inoubliable parmi les autres blablas ! <b>Livré par pack de 40</b>',
                    'price' => 40,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '40',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            7 =>
                array (
                    'id' => 8,
                    'name' => 'Bouclier',
                    'name_shop' => 'Bouclier',
                    'description' => 'Une fois activé, ton bouclier électromagnétique te protègera contre toute attaque, que ce soit des bombes, des tomates ou toute autre offensive.
Alors ne te prive pas de l\'utiliser quand l\'atmosphère devient menaçante. <b>Livré avec une autonomie de 15 minutes (900 secondes)</b>',
                    'price' => 150,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '900',
                    'gender' => 6,
                    'type' => 'TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            8 =>
                array (
                    'id' => 9,
                    'name' => 'Blabicoptère',
                    'name_shop' => 'Blabicoptère',
                    'description' => 'Qui n\'eût pas rêvé de voler dans les airs du monde merveilleux de Blablaland?<br>
Grâce au Blabicoptère ton rêve est désormais une réalité : envole-toi avec poésie et majestuosité afin d\'explorer paisiblement les maps vues d\'en haut ! <b>Livré avec une autonomie de 5 minutes (300 secondes)</b>',
                    'price' => 200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '600',
                    'gender' => 6,
                    'type' => 'TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            9 =>
                array (
                    'id' => 10,
                    'name' => 'Séisme',
                    'name_shop' => 'Séisme',
                    'description' => 'Déclenche un vrai tremblement de terre en créant une boule d\'énergie massivement chargée électriquement!<br>
Certainement le pouvoir le plus spectaculaire de Blablaland.<br>
Même les blablas dans les maps alentours sentiront les ondes de choc du terrible séisme! <b>Livré par pack de 10 séismes</b>',
                    'price' => 50,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '10',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            10 =>
                array (
                    'id' => 11,
                    'name' => 'Jetpack',
                    'name_shop' => 'Jetpack',
                    'description' => 'Voici le pouvoir ultime qui te permettra de t\'envoler librement grâce à ses moteurs fusées!<br>Plus rapide qu\'un aigle et majestueux tout à la fois, le Jetpack fera de toi un blabla libre comme l\'air ! <b>Livré avec une autonomie de 10 minutes (600 secondes)</b>',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '600',
                    'gender' => 6,
                    'type' => 'TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            11 =>
                array (
                    'id' => 12,
                    'name' => 'Laser',
                    'name_shop' => 'Laser',
                    'description' => 'PIOUUUU !! Tire un laser surpuissant, et il cuiras tous les blablas dans son rayon instantanément, pour un allé simple paradis tous ceux qui auraient la folie de rester à proximité de vous !! <b>Livré par pack de 20 Lasers</b>',
                    'price' => 15000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '20',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            12 =>
                array (
                    'id' => 13,
                    'name' => 'Flageolets Magiques',
                    'name_shop' => 'Prout - Flageolets magiques',
                    'description' => 'Avale une bonne quantité de flageolets magiques et intoxique tous tes voisins ^_^<br>La pression est telle que te voila propulsé sous l\'eau et dans les airs.',
                    'price' => 100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '50',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            13 =>
                array (
                    'id' => 14,
                    'name' => 'Potion de rapidité',
                    'name_shop' => 'Potion de rapidité',
                    'description' => 'Une gorgée et tu te déplaces à la vitesse de l\'éclair pendant 1 minute par fiole. Avec cette potion attention à ne pas user tes chaussures lol. Gaffe aux excès de vitesse ^^
<br><br>
<em style="color:#BC6BD6;">Cette Potion peut aussi être achetée en jeu auprès du Marchand Alchimiste (Zone 52, au pied du Champi Géant)</em>
<br><br>
<strong style="color:#BC6BD6;">YATAAAAAAAAAAAAAAAAAAA !!!!!</strong>',
                    'price' => 7,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 4,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            14 =>
                array (
                    'id' => 15,
                    'name' => 'Potion de saut',
                    'name_shop' => 'Potion de saut',
                    'description' => 'Cette potion te permet de sauter très haut pendant toute une minute par fiole. Attention à la tête... Effet kangourou garanti :)
<br><br>
<em style="color:#BC6BD6;">Cette Potion peut aussi être achetée en jeu auprès du Marchand Alchimiste (Zone 52, au pied du Champi Géant)</em>
<br><br>
<strong style="color:#BC6BD6;">Le ciel t\'appartient avec la potion de saut !</strong>',
                    'price' => 7,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 4,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            15 =>
                array (
                    'id' => 16,
                    'name' => 'Potion de nage rapide',
                    'name_shop' => 'Potion de nage rapide',
                    'description' => 'Deviens un homme poisson et sonde les profondeurs à grande vitesse grâce à cette super potion. Pendant une minute (par fiole) tes amis ne verront que des bulles :)
<br><br>
<em style="color:#BC6BD6;">Cette Potion peut aussi être achetée en jeu auprès du Marchand Alchimiste (Zone 52, au pied du Champi Géant)</em>
<br><br>
<strong style="color:#BC6BD6;">Te voilà comme un poisson dans l\'eau !</strong>',
                    'price' => 7,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 4,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            16 =>
                array (
                    'id' => 17,
                    'name' => 'Potion de miniaturisation',
                    'name_shop' => 'Potion de miniaturisation',
                    'description' => 'Tout petit tu deviendras et une minute durera cette potion de miniaturisation :) Tout mini et tout mimi tu plairas à tout le monde ^^ (1 minute par fiole)
<br><br>
<em style="color:#BC6BD6;">Cette Potion peut aussi être achetée en jeu auprès du Marchand Alchimiste (Zone 52, au pied du Champi Géant)</em>
<br><br>
<strong style="color:#BC6BD6;">Tout petit = Tout mimi = Tout délire !</strong>',
                    'price' => 7,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 4,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            17 =>
                array (
                    'id' => 18,
                    'name' => 'Potion multicolore',
                    'name_shop' => 'Potion multicolore',
                    'description' => 'Whaaa... un effet disco décoiffant tout plein de couleurs. Alors là, c\'est la fête assurée pendant une minute par fiole !! Prévoir des lunettes de soleil :)
<br><br>
<em style="color:#BC6BD6;">Cette Potion peut aussi être achetée en jeu auprès du Marchand Alchimiste (Zone 52, au pied du Champi Géant)</em>
<br><br>
<strong style="color:#BC6BD6;">Simplement délirant !!</strong>',
                    'price' => 7,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 4,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            18 =>
                array (
                    'id' => 19,
                    'name' => 'Moonwalk',
                    'name_shop' => 'Moon Walk, l\'art de l\'envers !',
                    'description' => 'Tu as toujours voulu marcher à l\'envers comme "the King of Pop"... C\'est maintenant possible grâce au pouvoir du "Moon Walk" !! Marche en reculant, saute en reculant... Tu fais tout à l\'envers, même parler !!!',
                    'price' => 200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '600',
                    'gender' => 6,
                    'type' => 'TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            19 =>
                array (
                    'id' => 20,
                    'name' => 'Bombe citrouille',
                    'name_shop' => 'Bombe citrouille',
                    'description' => '<strong style="color:#FF5001;">HALLOWEEN !!</strong><br>Décore Blablaland avec des citrouilles (et pas besoin de les vider puis de mettre une bougie, on l\'a fait pour toi). Elle brillera la nuit sous l\'ambiance d\'Halloween... Au bout d\'un moment, elle éclatera et recouvrera de citrouille tout les blablas autour d\'elle !<br>
<br />
<strong style="color:#ef4400;">Les Bombes Citrouilles ne sont plus disponibles à l\'achat, rendez-vous au prochain Halloween !</strong>
<!--
<strong style="color:#ef4400;">Les Bombes Citrouilles peuvent aussi être acheté aux PNJ Sorcières directement en jeu. Attention, à la fin d\'Halloween, les Citrouilles ne seront plus en vente ! Profitez-en maintenant !!</strong>
<br>
<strong style="color:#BC6BD6;">Cet objet sera retiré de la vente après Halloween. Par contre, s\'il vous reste des citrouilles, vous pourrez toujours les utiliser, jusqu\'à épuisement de votre stock personnel. Donc... faites le stock ;)</strong>
-->',
                    'price' => 5,
                    'token' => 0,
                    'special' => 'HALLOWEEN',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            20 =>
                array (
                    'id' => 21,
                    'name' => 'Corps astral',
                    'name_shop' => 'Corps astral',
                    'description' => 'Sors de ton corps et envole-toi à la découverte de Blablaland !! Ton corps t\'attend pour le retour quand tu le souhaites :)<br><b>Pack de 10 mins</b>',
                    'price' => 300,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '600',
                    'gender' => 6,
                    'type' => 'TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            21 =>
                array (
                    'id' => 23,
                    'name' => 'Lampion Chinois Rond',
                    'name_shop' => 'Lampion Chinois Rond',
                    'description' => 'Balade toi avec ce joli lampion chinois dans le monde de Blablaland. La nuit, il éclairera tes pas de sa magnifique lueur !!',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            22 =>
                array (
                    'id' => 24,
                    'name' => 'Lampion Chinois Carré',
                    'name_shop' => 'Lampion Chinois Carré',
                    'description' => 'Balade toi avec ce joli lampion chinois dans le monde de Blablaland. La nuit, il éclairera tes pas de sa magnifique lueur !!',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            23 =>
                array (
                    'id' => 25,
                    'name' => 'Onde de choc',
                    'name_shop' => 'Onde de choc',
                    'description' => 'PIOUUUU !! Expulse les blablas avec une onde de choc super PUISSANTE !! <b>Livré par pack de 25 ondes</b>',
                    'price' => 10000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '25',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            24 =>
                array (
                    'id' => 26,
                    'name' => 'Cœur romantique Or',
                    'name_shop' => 'Cœur romantique Or',
                    'description' => 'Ton amour surpasse le simple coeur romantique, tu voudrais pouvoir démontrer ta passion démesurée avec un coeur à la hauteur de tes sentiments, le Coeur romantique en Or est l\'incarnation de la déclaration d\'amour. Il brillera haut dans le ciel de Blablaland par dessus les autres coeurs et immortalisera ton Amour !<br><b>Livré par pack de 5 Ballons cœur or</b>',
                    'price' => 150,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '5',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            25 =>
                array (
                    'id' => 27,
                    'name' => 'Pack Découverte',
                    'name_shop' => 'Pack Découverte',
                    'description' => '<strong style="color:#BC6BD6;">PACK d\'objets/pouvoirs</strong><br>Tu hésites à prendre un pouvoir ne sachant pas vraiment lequel prendre, alors le Pack Découverte est fait pour toi. Dedans tu as un peu de tout, et à un prix défiant toute concurrence !!<br><br>
<b>Ce Pack contient : </b>2 minutes de Jetpack, 5 coeurs Romantiques, 3 minutes de bouclier, 10 téléporteurs, 4 trampolines, 5 canons à blabla, 10 potions de rapidité, 5 graines de tulipe !',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'PACK',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            26 =>
                array (
                    'id' => 28,
                    'name' => 'Pack Powa',
                    'name_shop' => 'Pack Powa',
                    'description' => '<strong style="color:#BC6BD6;">PACK d\'objets/pouvoirs</strong><br>Tu es un hardcore des pouvoirs, ce Pack Powa est carrément fait pour toi. Un Pack tout plein de supers pouvoirs qui te fera économiser des BBL et remplira ton sac pour de grands moments explosifs !<br><br>
<b>Ce Pack contient : </b>15 lingettes, 15 Téléports, 10 minutes de Bouclier, 25 potions de Rapidité, 25 potions de Saut, 3 minutes de Corps Astral, 10 Bombes, 3 minutes de JetPack (youhou), 3 Cœurs et 1 Cœur d\'Or... Plus de 1780 BBL de pouvoirs pour seulement 1480 BBL !!',
                    'price' => 1480,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'PACK',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            27 =>
                array (
                    'id' => 29,
                    'name' => 'Poisson d\'Avril',
                    'name_shop' => 'Poisson d\'Avril',
                    'description' => 'C\'est le grand rituel du 1er Avril !! Colle des Poissons d\'Avril dans le dos des blablas, mais toi, si on t\'en colle tu ne le verras pas... normal, ils sont dans ton dos XD<br><strong style="color:#BC6BD6;">Les Poissons d\'Avril ne sont en vente que pendant quelques jours, après quoi ils ne seront plus disponible en Boutique... mais s\'il vous en reste en stock, ils ne seront pas supprimés (C\'est donc le moment où jamais de faire le stock...) !!</strong>',
                    'price' => 5,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            28 =>
                array (
                    'id' => 30,
                    'name' => 'LaserMapG',
                    'name_shop' => 'Lasergame',
                    'description' => '-',
                    'price' => -2,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            29 =>
                array (
                    'id' => 32,
                    'name' => 'Trou noir',
                    'name_shop' => 'Trou noir',
                    'description' => 'Invoque un Trou Noir sur le tchat, créant un passage secret qui téléportera vers la map de ton choix tout blabla qui osera s\'en approcher !!<br>
<strong style="color:#BC6BD6;">Le pouvoir ultime pour se téléporter en groupe, ou ne serait-ce que pour avoir la classe d\'invoquer un "trou noir" !!</strong>',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '15',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            30 =>
                array (
                    'id' => 34,
                    'name' => 'Feux d\'artifice',
                    'name_shop' => 'Feux d\'artifice !!',
                    'description' => 'Fais la fête sur Blablaland grâce aux feux d\'artifice !! Quoi de plus beau et de plus festif qu\'un superbe éclat de couleurs dans le ciel !! Pan Pan Pan, c\'est la fiestaaa, grâce à toi :D<br><b>Livré par pack de 30</b>',
                    'price' => 30,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '30',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            31 =>
                array (
                    'id' => 35,
                    'name' => 'Turbo Buggy !!',
                    'name_shop' => 'Turbo Buggy !!',
                    'description' => '<b>SUPER POUVOIR !!</b> Transforme-toi en TURBO BUGGY et fais chauffer le moteur !! Accélère, freine, fais des jumps tout en faisant crier ton moteur (tu peux même klaxonner, énorme XD). C\'est le pouvoir trop puissant qui va littéralement te changer la vie sur Blabla... à toi le bolide !! <b>Pack de 10 minutes</b><br>
<strong style="color:#BC6BD6;">WHOUAAAA !! Mets la gomme et crame le bitume  sur Blabla, à fond la caisse avec ton bolide Turbo Buggy !!!!</strong>',
                    'price' => 200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '600',
                    'gender' => 6,
                    'type' => 'TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            32 =>
                array (
                    'id' => 36,
                    'name' => 'BLIBLI : Bonhomme de neige',
                    'name_shop' => 'BLIBLI : Bonhomme de neige',
                    'description' => 'Balade-toi et délire dans le monde de Blablaland avec ton bonhomme de neige qui te suit partout... c\'est tout simplement ÉNORME et purement excellent !! <b>A posséder ABSOLUMENT !!!</b>
<br><br><b style="color:#FF00FF;">Désormais en Illimité !! Youhouuu !!</b>',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            33 =>
                array (
                    'id' => 37,
                    'name' => 'BLIBLI : La P\'tite Fée',
                    'name_shop' => 'BLIBLI : La P\'tite Fée',
                    'description' => 'Qui n\'a jamais rêvé de posséder une minuscule petite fée ? Cette petite merveille t\'accompagne où que tu ailles. Brillante, magique et câline, elle te soutient de ses toutes petites ailes pour t\'aider à planer dans les airs... Petite mais costaude ! A tes côtés, elle apportera de la joie et de la lumière sur le tchat en allant faire des bisous aux blablas qui t\'entourent.
<br><br>
<b style="color:#BC6BD6;">La fée vole à tes côtés, te donne le pouvoir de flotter dans les airs, et elle fait des bisous aux blablas proches de toi</b><br>Elle peut transformer un Crapaud en prince... ^^<br><em>(Pack de 60 min qui sont décomptées uniquement quand le pouvoir est actif - Maintient la touche du haut appuyée en l\'air pour flotter)</em>
<br><br><b style="color:#FF00FF;">Désormais en Illimité !! Youhouuu !!</b>',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            34 =>
                array (
                    'id' => 38,
                    'name' => 'BLIBLI La Soucoupe Volante',
                    'name_shop' => 'BLIBLI : La Soucoupe Volante',
                    'description' => 'Sommes-nous seuls dans l\'univers !? Visiblement dans l\'univers de Blablaland, ce n\'est pas le cas :). En tout cas,  cet ovni étrange qui te suit partout ne te laissera jamais tomber. C\'est bien le cas de le dire puisque dans les airs il te permettra de planer et de te poser en douceur. Les ovnis sont ils gentils !? Impossible de répondre à cette question mais il semblerait qu\'ils soient quand même plutôt taquins :D. La soucoupe te suit partout, si pour toi elle reste ton allié, gare aux petits curieux de passage dans son champ de vision :D
<br><br>
<b style="color:#BC6BD6;">La soucoupe vole à tes côtés, te donne le pouvoir de flotter dans les airs, et elle transforme en Extraterrestre les blablas qui rôdnte autour d\'elle ^^</b><br>
<em>(Pack de 60 min qui sont décomptées uniquement quand le pouvoir est actif - Maintient la touche du haut appuyée en l\'air pour flotter)</em>
<br><br><b style="color:#FF00FF;">Désormais en Illimité !! Youhouuu !!</b>',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            35 =>
                array (
                    'id' => 39,
                    'name' => 'Lampion Chinois Coeur',
                    'name_shop' => 'Lampion Chinois Coeur',
                    'description' => 'Balade-toi avec ce joli lampion chinois dans le monde de Blablaland. La nuit, il éclairera tes pas de sa magnifique lueur et illuminera ton grand amour !!',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            36 =>
                array (
                    'id' => 40,
                    'name' => 'Lampion Chinois Coeur feuille',
                    'name_shop' => 'Lampion Chinois Coeur feuille',
                    'description' => 'Balade-toi avec ce joli lampion chinois dans le monde de Blablaland. La nuit, il éclairera tes pas de sa magnifique lueur et illuminera ton grand amour !!',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            37 =>
                array (
                    'id' => 41,
                    'name' => 'Sachet de graines : Roses, Lys, Tulipes',
                    'name_shop' => 'Sachet de graines : Roses, Lys, Tulipes',
                    'description' => '<img src="/images/blablaland/news_new.gif" /> Whouaaa !! Des fleurs, ça change tout, même les coins les plus sombres de Blablaland brillent une fois fleuris !! Plante des graines sur le tchat et admire le travail de dame nature (si un jardinier passe par là, en arrosant ça poussera plus vite). Une fois toute belle, tu peux cueillir les fleurs et découvrir la magie !!<br>
<b>Si tu trouves un trèfle porte bonheur, tu gagneras un cadeau (et les Leprechauns ont 2 fois plus de chance d\'en trouver un ^^)</b><br>
<strong style="color:#BC6BD6;">Cueille les fleurs sur le tchat, et si tu trouves un trèfle, tu gagnes des Blabillons !!</strong>',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '30',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            38 =>
                array (
                    'id' => 42,
                    'name' => 'OverBoard Sport',
                    'name_shop' => 'OverBoard Sport',
                    'description' => '<b>LA GRANDE CLASSE !!</b> Plane à la surface du sol comme si tu étais aussi léger qu\'une plume. Défie la gravité et traverse Blablaland à grande vitesse sur la planche aux coloris de ton choix !! Ce pouvoir est le fun concentré par excellence. Fan de technologie et de sensations fortes ? Alors ne cherche pas plus loin, c\'est ce qu\'il te faut.
<br><br>
<strong style="color:#BC6BD6;">Cet Overboard t\'es offert pour l\'achat du skin <a href="/site/shop_skin.php?giveme=278&gr=32" class="fofo_link_extern">"Boarder Sport" !!</a></strong>',
                    'price' => 600,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            39 =>
                array (
                    'id' => 43,
                    'name' => 'OverBoard SHARK !!',
                    'name_shop' => 'OverBoard SHARK !!',
                    'description' => '<b>LA PUISSANCE ULTIME !!</b> Cette version d\'Overboard réunit le fun, la vitesse et la méga-puissance, que des sensations extrêmes !! Choisis la couleur de ta planche et défie les lois de la Gravité !!<br>
SHARK : Cette planche te permet aussi de surfer sur l\'eau, et même de faire de maxi-plongeons et de nager carrément plus vite en t\'accrochant à elle !:<br>
Un must-have, mais... sauras-tu la maîtriser ? :D
<br><br>
<strong style="color:#BC6BD6;">Cete Overboard t\'es offert pour l\'achat du skin <a href="/site/shop_skin.php?giveme=279&gr=32" class="fofo_link_extern">"Boarder Shark" !!</a></strong>',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            40 =>
                array (
                    'id' => 45,
                    'name' => 'BLIBLI Dragonnet',
                    'name_shop' => 'BLIBLI : Dragonnet',
                    'description' => 'Un petit Dragonnet comme compagnon... rien de plus classe !! Il vole autour de toi, et tu peux le diriger pour cracher du feu et brûler les Blablas autour de toi !! Oui, ce Blibli est fait pour toi, c\'est un "must-have" ^^<br><br>
<b style="color:#BC6BD6;">Compagnon Dragon qui vole autour de toi. Lorsqu\'il est actif, fais un drag\'n\'drop depuis son icône dans ta liste de pouvoirs jusqu\'à l\'écran de jeu. Une cible apparaît et quand tu lâches, ton Blibli Dragonnet ira cracher du feu !!<br>
C\'est chaud chaud :)</b><br>
<br>
<em>Nouveau système d\'achat Blibli : Il ne s\'achète non plus à la durée, mais à vie, comme un skin. Plus d’inquiétude à le laisser actif en craignant de ne pas en avoir assez... le Dragonnet est illimité !! Yeaaaah !!</em>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            41 =>
                array (
                    'id' => 46,
                    'name' => 'MONTURE Cheval',
                    'name_shop' => 'MONTURE : Cheval',
                    'description' => '<b style="color:#BC6BD6;font-size:14px;">NOUVEAU : MONTURE !!</b><br>
THE nouveauté ultime... découvre la toute première Monture de Blablaland !! Les chevaux sacrés reviennent peupler les terres, et tu peux désormais avoir ta propre monture cheval rien qu\'à toi !! <br>
Allez hop, saute dessus et c\'est au galop que tu parcourras les terres de Blablaland !! Pas d\'hésitation, à prendre direct !!<br>
<br>
<em>Tout comme les nouveaux Bliblis, la monture Cheval est illimitée dans le temps. Il suffit de cliquer dessus dans sa liste de pouvoir pour monter en selle !!</em>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            42 =>
                array (
                    'id' => 47,
                    'name' => 'Balai flottant',
                    'name_shop' => 'Balai flottant',
                    'description' => 'Sors le grand jeu pour Halloween en chevauchant un Balai flottant, plane sur le tchat et décolle dans les airs grâce à ton Balai... Trop puissant, effet assuré !!
<br><br><strong style="color:#BC6BD6;">Illimité, plane sur le tchat de Blablaland en Balai flottant. La classe assurée !</strong>
<br><br>
<em>Nouveau système d\'achat : Il ne s\'achète non plus à la durée, mais à vie, comme un skin. Plus d\'inquiétude à le laisser actif en craignant de ne pas en avoir assez... le Balais flottant est illimité !! Yeaaaah !!</em>',
                    'price' => 600,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            43 =>
                array (
                    'id' => 48,
                    'name' => 'BLIBLI Fantôme',
                    'name_shop' => 'BLIBLI : Fantôme',
                    'description' => 'Délire, balade-toi sur le tchat accompagné d\'un petit fantôme qui te suit partout où tu iras. Parfait pendant la période Halloween !!',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            44 =>
                array (
                    'id' => 49,
                    'name' => 'BLIBLI Citrouille',
                    'name_shop' => 'BLIBLI : Citrouille',
                    'description' => 'Rien de plus "in" que de se balader sur Blablaland avec une citrouille comme compagnon pendant Halloween !! Effet garanti "Halloween Powa" ^^',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            45 =>
                array (
                    'id' => 50,
                    'name' => 'BLIBLI Feu Follet',
                    'name_shop' => 'BLIBLI : Feu Follet',
                    'description' => 'Trop beau et hyper stylé, promène-toi avec un Feu Follet à tes côtés dans le jeu. Il enflammera ton look !! C\'est THE Blibli pour Halloween !!
<br><br>',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            46 =>
                array (
                    'id' => 51,
                    'name' => 'MONTURE Cheval Mort Vivant',
                    'name_shop' => 'MONTURE : Cheval Mort Vivant',
                    'description' => 'Chevauche un Cheval Mort Vivant sur le tchat. Un design ravageur, stylé... tout simplement "Mortel" !! Les mots sont trop faibles pour décrire ce bijou. Un must-have, incontestablement !!
<br><br><strong style="color:#BC6BD6;">Illimité, design mortel, chevauche un destrier Mort Vivant sur Blablaland !! A posséder "absolument" !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            47 =>
                array (
                    'id' => 52,
                    'name' => 'MONTURE Araignée',
                    'name_shop' => 'MONTURE : Araignée',
                    'description' => 'Hallucinant, dépêche-toi de grimper sur cette nouvelle monture Araignée au design "terrible" !! Elle marche vite, peut escalader, nager etc... Impossible de passer inaperçu avec cette superbe monture hors du commun !!
<br><br><strong style="color:#BC6BD6;">Design mortel, promène toi à dos d\'une araignée sur Blablaland.... Sensations garanties !!</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            48 =>
                array (
                    'id' => 53,
                    'name' => 'Bouteille d\'eau',
                    'name_shop' => 'Bouteille d\'eau',
                    'description' => 'Lors d\'un voyage sur Paris, Yovasystem nous a dévoilé un des ses surprenants pouvoirs magiques.... désormais, le secret n\'étant plus secret (héhé), tu peux toi aussi te transformer en Bouteille d\'eau dans le jeu !! Yattaaa !!<br><br>
<strong style="color:#BC6BD6;">Plus : </strong>Lorsque tu es transformé en Bouteille d\'eau, tu peux utiliser le pouvoir "Splash !" pour éclater et envoyer de l\'eau partout, ce qui lavera tous les blablas autour de toi !!<br>
<b><a href="/site/shop_objet.php?giveme=54">Clique ici pour découvrir le pouvoir "Splash !"</a></b><br>
<br>
<strong style="color:#BC6BD6;">Transforme-toi en Bouteille d\'eau, tout comme Yovasystem<br><a href="/site/goodies.php?gid=38" target="_blank">Clique ici pour regarder la vidéo !!</a></strong><br><br>
<strong style="color:#BC6BD6;">100 Splash ! Offerts ^^</strong>',
                    'price' => 200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            49 =>
                array (
                    'id' => 54,
                    'name' => 'Splash !!',
                    'name_shop' => 'Splash !!',
                    'description' => '<strong style="color:#BC6BD6;">S\'utilise avec le pouvoir de la bouteille d\'eau !!</strong><br>
A utiliser lorsque tu es transformé en bouteille d\'eau !! Ce pouvoir devient disponible et te permet d\'éclater ton bouchon, ce qui lance de l\'eau tout autour de toi et nettoie tous les blablas qui sont à tes côtés ! Délirant et super pratique, de quoi concurrencer largement les vielles lingettes, sûrement bien sales depuis le temps :P<br>
<br>
<strong style="color:#FF0000;">Attention : </strong><b>Tu dois préalablement avoir acheter le super pouvoir "Bouteille d\'eau" pour utiliser le "Splash !" !</b><br>
<b><a href="/site/shop_objet.php?giveme=53">Clique ici pour prendre le pouvoir de la "Bouteille d\'eau"</a></b><br>',
                    'price' => 10,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '30',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            50 =>
                array (
                    'id' => 55,
                    'name' => 'MONTURE Patrouilleur Solid-Tech n2',
                    'name_shop' => 'MONTURE : Patrouilleur Solid-Tech n2',
                    'description' => '<b>Le pouvoir des SolidTech !!</b><br>
Merveille de la technologie, le patrouilleur n2 est davantage remarquable pour sa discrétion et sa rapidité de dépistage en territoire ennemi.<br>
Tout comme le patrouilleur n1, ses énormes jetpacks intégrés lui permettront de survoler les terres adverses et d\'en apprécier le danger sans trop se dévoiler.<br>
<br>
<strong style="color:#BC6BD6;">Ce petit bijou de haute technologie militaire est une véritable avant-première !!</strong><br>
<em>Toutes les 10 secondes, tu peux utiliser la flèche du haut pour activer ses puissants réacteurs.</em>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            51 =>
                array (
                    'id' => 56,
                    'name' => 'MONTURE Patrouilleur Solid-Tech n1',
                    'name_shop' => 'MONTURE : Patrouilleur Solid-Tech n1',
                    'description' => '<b>Le pouvoir des SolidTech !!</b><br>
Entre dans le cokpit de cet exceptionnel exosquelette d\'une puissance remarquable...<br>
En plus d\'être massif et imposant, ce magnifique patrouilleur possède le pouvoir de s\'envoler dans les airs grâce à ses robustes jetpacks intégrés.<br>
<br>
<strong style="color:#BC6BD6;">Un vrai "Must have" pour partir à la guerre aux côtés des SolidTech !!</strong><br>
<em>Toutes les 10 secondes, tu peux utiliser la flèche du haut pour activer ses puissants réacteurs</em>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            52 =>
                array (
                    'id' => 57,
                    'name' => 'BLIBLI Furtif n2',
                    'name_shop' => 'BLIBLI : Furtif n2',
                    'description' => '<b>Le pouvoir des SolidTech à tes côtés !!</b>
Véritable espion à la solde du patrouilleur n2, ce furtif te suivra partout et te permettra de te maintenir plus longtemps dans les airs.<br>
<br>
<strong style="color:#BC6BD6;">Un Blibli SolidTech à la pointe de la technologie !!</strong><br>',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            53 =>
                array (
                    'id' => 58,
                    'name' => 'BLIBLI Furtif n1',
                    'name_shop' => 'BLIBLI : Furtif n1',
                    'description' => '<b>Le pouvoir des SolidTech à tes côtés !!</b>
Véritable espion à la solde du patrouilleur n1, ce furtif te suivra partout et te permettra de te maintenir plus longtemps dans les airs.<br>
<br>
<strong style="color:#BC6BD6;">Un Blibli SolidTech à la pointe de la technologie !!</strong><br>',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            54 =>
                array (
                    'id' => 59,
                    'name' => 'Masque Blablarcher Garçon',
                    'name_shop' => 'Masque Blablarcher Garçon',
                    'description' => '<b>Toi aussi rejoins le clan des Blablarchers</b> !! Prouve à tout le monde que le Powa des BlablArchers est avec toi !! Même sans les skins Archers, youhouuuu, délire !!<br><br>
<strong style="color:#BC6BD6;">Avec ce masque, montre que tu as déjà le POWA des Archers en toi !!</strong>',
                    'price' => 100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            55 =>
                array (
                    'id' => 60,
                    'name' => 'Masque Blablarcher Fille',
                    'name_shop' => 'Masque Blablarcher Fille',
                    'description' => '<b>Toi aussi rejoins le clan des Blablarchers</b> !! Prouve à tout le monde que le Powa des BlablArchers est avec toi !! Même sans les skins Archers, youhouuuu, délire !!<br><br>
<strong style="color:#BC6BD6;">Avec ce masque, montre que tu as déjà le POWA des Archers en toi !!</strong>',
                    'price' => 100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            56 =>
                array (
                    'id' => 61,
                    'name' => 'MONTURE : Wouïk',
                    'name_shop' => 'MONTURE : Wouïk',
                    'description' => 'Découvre les gentils Wouïks !! Cette grosse bête est certainement l\'une des plus adorables de tout Blablaland. Tous poilus mais tellement doux, ils sont très amis avec les Blablas qu\'ils adorent avoir sur leur dos et les promener partout !<br>
<br>
<strong style="color:#BC6BD6;">Promène-toi sur le jeu à dos de Wouïk, une grosse bête remarquablement poilue, mais tellement adorable !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            57 =>
                array (
                    'id' => 62,
                    'name' => 'BLIBLI : Geiza',
                    'name_shop' => 'BLIBLI : Geiza',
                    'description' => 'Tu as sûrement déjà croisé un Geiza dans le monde de Blablaland, ces petites créatures qui se cachent dans les grottes près de la grande chute d\'eau... Depuis le temps, ils ont bien moins peur des Blablas et il est désormais possible d\'en adopter un en Blibli qui te suivra partout dans le jeu !! Yattaaaa<br><br>
<strong style="color:#BC6BD6;">Toi aussi adopte une petite créature Geiza comme Blibli dans le jeu</strong>',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            58 =>
                array (
                    'id' => 63,
                    'name' => 'MONTURE : Ours Polaire',
                    'name_shop' => 'MONTURE : Ours Polaire',
                    'description' => 'Gla gla gla, c\'est l’hiver et il fait bien froid !! Fini d\'avoir les pieds tout congelés grâce à la nouvelle monture Ours Polaire ! Cet adorable Ours te baladera partout et il adore le froid et les câlins !! Prêt pour l\'aventure ?
<strong style="color:#BC6BD6;">Promène-toi sur le dos de ton Ours Polaire, un must have en cette période de froid !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            59 =>
                array (
                    'id' => 64,
                    'name' => 'BLIBLI : Étoile',
                    'name_shop' => 'BLIBLI : Étoile',
                    'description' => 'Un Blibli étoile qui te suivra partout sur le tchat en planant autour de toi !! Elle se transforme en boule magique de temps en temps pour le plaisir des yeux ^^<br><strong style="color:#BC6BD6;">La Magie de Noël est avec toi sur Blablaland :)</strong>',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            60 =>
                array (
                    'id' => 65,
                    'name' => 'MONTURE : Train en Bois',
                    'name_shop' => 'MONTURE : Train en Bois',
                    'description' => 'Trop la classe !! Promène-toi sur le tchat dans ton Train en Bois !! Hallucinant et super délirant, ce Train est scuplté pour toi et fera des jaloux !! Et en plus, il fait aussi de la fumée en bois, délire !!
<br>
<strong style="color:#BC6BD6;">Prend les commandes de ton Train en Bois et pars à l\'aventure !!<br>
Tchou Tchouuuuuuuuuu !!!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            61 =>
                array (
                    'id' => 66,
                    'name' => 'BLIBLI : Avion en Bois',
                    'name_shop' => 'BLIBLI : Avion en Bois',
                    'description' => 'Whouaaa, THE Blibli Jouet en bois !! Un magnifique avion en bois qui te suivra partout sur le tchat, vroooom !!
<br>
<strong style="color:#BC6BD6;">Un Blibli Avion en Bois, rendez-vous dans les nuages !!</strong>',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            62 =>
                array (
                    'id' => 67,
                    'name' => 'MONTURE : Cheval bascule en Bois',
                    'name_shop' => 'MONTURE : Cheval bascule en Bois',
                    'description' => 'Enormissime et inédit !! Grimpe sur un magnifique cheval à bascule en bois et dévale à fond les plaines de Blablaland !! Un Must have super délirant !!<br>
<strong style="color:#BC6BD6;">Grimpe sur ton cheval à bascule en bois et délire à fond !! Enorme !!!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            63 =>
                array (
                    'id' => 68,
                    'name' => 'BLIBLI : Flocon',
                    'name_shop' => 'BLIBLI : Flocon',
                    'description' => 'Promène-toi avec ton Blibli Flocon qui te suivra partout sur le tchat, il tourne sur lui même pour faire de la lumière, prépare toi à épater les autres blablas !!<br>
<strong style="color:#BC6BD6;">Le Blibli Flocon, un allier précieux !!</strong>',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            64 =>
                array (
                    'id' => 70,
                    'name' => 'BLIBLI : Boule de Neige',
                    'name_shop' => 'BLIBLI : Boule de Neige',
                    'description' => 'Et Splaaash !! Une boule de neige en pleine tête :) Héhé !!<br>
Promène-toi avec ton Blibli Boule de Neige qui te suivra partout sur le tchat, et qui, de temps en temps, ira se jeter sur un Blabla comme une Boule de Neige ! Trop délirant pour prendre l\'avantage dans de belles batailles de boules de neige !!<br>
<strong style="color:#BC6BD6;">Le Blibli Flocon,  un allier précieux pour les batailles de Boules de Neige !!</strong>',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            65 =>
                array (
                    'id' => 71,
                    'name' => 'MONTURE : Morse',
                    'name_shop' => 'MONTURE : Morse',
                    'description' => 'Youhouu !! Balade toi dans Blablaland à dos de Morse tout mimi !! Il est tout gentil, et surtout, il nage plus vite dans l\'eau pour gagner du temps. Voilà une monture parfaite pour les expéditions dans la neige et la glace !!<br><br>
<strong style="color:#BC6BD6;">la Monture Morse nage plus vite dans l\'eau !! Yataaaa !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            66 =>
                array (
                    'id' => 72,
                    'name' => 'BLIBLI : Floupi Kawaii',
                    'name_shop' => 'BLIBLI : Floupi Kawaii',
                    'description' => 'Petit Floupi est un gentil Blibli tout simplement ultra mimi qui te suivra partout sur le tchat en volant autour de toi !!<br>
<strong style="color:#BC6BD6;">Floupi, le p\'tit Blibli tout Kawaii !!</strong>',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            67 =>
                array (
                    'id' => 73,
                    'name' => 'MONTURE : Fraise',
                    'name_shop' => 'MONTURE : Fraise',
                    'description' => 'Super Fruité !! N\'attends pas une seconde de plus et grimpe à bord de ta nouvelle Monture Fraise pour des aventures délirantes sur le tchat !! Miam Miam !!<br>
<br><strong style="color:#BC6BD6;">La Monture Fraise, 100% fruitée !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            68 =>
                array (
                    'id' => 74,
                    'name' => 'Cerf Volant Chinois',
                    'name_shop' => 'Cerf Volant Chinois',
                    'description' => '<strong style="color:#BC6BD6;">Nouvel An Chinois 2011</strong><br />
Whouaa !! Lance ton Cerf Volant dans le ciel de Blablaland et regarde le se promener au gré du vent !! Attention quand même aux rafales de vent, ça tire fort ;)<br>
(Essaie donc avec un Overboard ou dans les airs !! Effets surprenants, mais excellents !! Yataaaa !!).<br>
<br /><strong style="color:#BC6BD6;">Lance ton Cerf Volant dans les cieux de Blablaland et découvre ses surprenants effets !!</strong>',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            69 =>
                array (
                    'id' => 75,
                    'name' => 'MONTURE : Dragon Chinois "Tchung"',
                    'name_shop' => 'MONTURE : Dragon Chinois "Tchung"',
                    'description' => 'Chevauche un magnifique Dragon Chinois sur le tchat !! Il est beau, rapide, mais surtout, <b>c\'est la première monture avec un Pouvoir</b> !! Saute dans les airs et appuie deux fois, soit à droite soit à gauche, ton Dragon s’enflammera et sa vitesse sera décuplée !! Whouaaaa !! A posséder impérativement !!
<br /><br /><strong style="color:#BC6BD6;">Chevauche l\'incroyable Dragon Chinois "Tchung". Il est très rapide et possède le pouvoir de s’enflammer pour gagner encore plus de vitesse !! </strong>',
                    'price' => 1600,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            70 =>
                array (
                    'id' => 76,
                    'name' => 'Lampion Chinois 2011',
                    'name_shop' => 'Lampion Chinois 2011',
                    'description' => '<strong style="color:#BC6BD6;">Nouvel An Chinois 2011</strong><br />
Balade-toi avec ce superbe Lampion Chinois dans le dos. La nuit, il éclairera tes pas de sa magnifique lueur aux couleurs du Dragon !!
<br /><strong style="color:#BC6BD6;"></strong>',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            71 =>
                array (
                    'id' => 77,
                    'name' => 'BLIBLI : Coeur Amoureux',
                    'name_shop' => 'BLIBLI : Coeur Amoureux',
                    'description' => 'Trop mignon le Blibli Amoureux qui sèmera l\'amour tout autour de toi avec ses petites ailes !! Et de temps en temps, il ira répandre l\'amour avec des petits bisous aux blablas qui sont près de toi !! Trop chou et tout mimi, le Blibli Cœur Amoureux séduira tout le monde sur ton passage !!<br>
<strong style="color:#BC6BD6;">L\'amour est au rendez-vous avec ce magnifique Blibli Cœur Amoureux qui répandra l\'amour tout autour de toi !!</strong>',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            72 =>
                array (
                    'id' => 78,
                    'name' => 'Table Romantique',
                    'name_shop' => 'Table Romantique',
                    'description' => '<strong style="color:#F00">St Valentin</strong><br>
Invoque une Table Romantique et invite l\'amour de ta vie à te rejoindre pour un dîner très romantique en tête-à-tête !! Un dîner en amoureux sur Blablaland, tout simplement merveilleux !!<br>L\'amour sera au rendez-vous !!<br>
<br><b>A posséder impérativement !!</b><br>
<strong style="color:#BC6BD6;">Invoque une table et invite ton amour à se joindre à tes côtés. Il suffit de se placer devant pour s\'y asseoir. La table reste 10 min tant qu\'une personne est assise, et si vous êtes tous les deux, l\'amour sera au rendez-vous !!</strong><br>
<em>Si les deux personnes quittent la table, elle disparaitra après 1m30.</em>',
                    'price' => 50,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            73 =>
                array (
                    'id' => 79,
                    'name' => 'MONTURE : Cygne',
                    'name_shop' => 'MONTURE : Cygne',
                    'description' => 'Parcours Blablaland à dos de Cygne, une magnifique Monture à l\'allure très romantique et pleine de charisme qui envoûtera tous les blablas !!
<br>
<strong style="color:#BC6BD6;">Le Cygne est très romantique et t\'aidera dans ton chemin vers l\'amour !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            74 =>
                array (
                    'id' => 80,
                    'name' => 'Potion CACA !!',
                    'name_shop' => 'Potion CACA !!',
                    'description' => '"Excrêmement magnifique XD" !!<br>
Incroyable mais vrai, découvre cette merveilleuse Potion magique qui te permettra de te transformer quelques intants en... "CACA" !! Non tu ne rêves pas, c\'est désormais possible !!<br>
<i>A noter que le Grand Sage de Blablaland, fan de cette potion, la surnomme "La PoPo Potion" ;)</i>
<br><br>
<em style="color:#BC6BD6;">Cette Potion peut aussi être achetée en jeu auprès du Marchand Alchimiste (Zone 52, au pied du Champi Géant)</em>
<br><br>
<strong style="color:#BC6BD6;">Excrêmement délire, transforme-toi en Caca !! Yataaa, surprenant, mais poilant !! Prout :)</strong>',
                    'price' => 7,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 4,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            75 =>
                array (
                    'id' => 81,
                    'name' => 'Bouée Girafe',
                    'name_shop' => 'Bouée Girafe',
                    'description' => '<b>Super délire !!</b> Enfile ta bouée et flotte sur l\'eau !! En plus, elle est super délire et illimitée dans le temps !! Mets la au fond de l\'eau et elle te fera remonter super vite à la surface !! Et pour plus de délire, tu peux enfiler jusqu\'à 3 bouées en même temps !!<br>
Voilà de quoi passer un super bon moment dans l\'eau au soleil ^^<br><br>
<strong style="color:#BC6BD6;">Enfile jusqu\'à trois bouées différentes en même temps et flotte à la surface de l\'eau !!</strong>',
                    'price' => 250,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            76 =>
                array (
                    'id' => 82,
                    'name' => 'Faux cadeaux',
                    'name_shop' => 'Faux cadeaux',
                    'description' => '<b>Traitre Suprême !!</b><br>
Lâche des "Faux-Cadeaux" dans le ciel de Blablaland !! Ils ont tout comme les vrais... sauf que ceux-là, ils explosent !! MOUAHAHAHAAAAA !! Avec ce Pouvoir suprême, tu pourras créer le trouble autour de toi :)<br>
<br>
<strong style="color:#BC6BD6;">Youpi un cadeau qui tombe du ciel, je le prends... BOOOOOOM !!!... ou pas !! A toi le pouvoir du Cadeau... faux !!</strong>',
                    'price' => 250,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '20',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            77 =>
                array (
                    'id' => 83,
                    'name' => 'Bouée Donut',
                    'name_shop' => 'Bouée Donut',
                    'description' => '<b>Super délire !!</b> Enfile ta bouée et flotte sur l\'eau !! En plus, elle est super délire et illimitée dans le temps !! Mets la au fond de l\'eau et elle te fera remonter super vite à la surface !! Et pour plus de délire, tu peux enfiler jusqu\'à 3 bouées en même temps !!<br>
Voilà de quoi passer un super bon moment dans l\'eau au soleil ^^<br><br>
<strong style="color:#BC6BD6;">Enfile jusqu\'à trois bouées différentes en même temps et flotte à la surface de l\'eau !!</strong>',
                    'price' => 250,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            78 =>
                array (
                    'id' => 84,
                    'name' => 'Bouée Militaire',
                    'name_shop' => 'Bouée Militaire',
                    'description' => '<b>Super délire !!</b> Enfile ta bouée et flotte sur l\'eau !! En plus, elle est super délire et illimitée dans le temps !! Mets la au fond de l\'eau et elle te fera remonter super vite à la surface !! Et pour plus de délire, tu peux enfiler jusqu\'à 3 bouées en même temps !!<br>
Voilà de quoi passer un super bon moment dans l\'eau au soleil ^^<br><br>
<strong style="color:#BC6BD6;">Enfile jusqu\'à trois bouées différentes en même temps et flotte à la surface de l\'eau !!</strong>',
                    'price' => 250,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            79 =>
                array (
                    'id' => 85,
                    'name' => 'Bulle de Savon',
                    'name_shop' => 'Bulle de Savon',
                    'description' => 'Qui n\'a jamais rêvé de pouvoir se mettre dans une bulle de savon et de voler dans les airs ? C\'est maintenant possible avec ce super pouvoir Bulle de Savon !! Un clic et "hop", te voilà en train de flotter dans ta bulle de savon que tu peux diriger avec les touches du clavier pendant 20 secondes !!<br>
Assez pour traverser plein de maps et avoir la classe !!<br><br>
<strong style="color:#BC6BD6;">Saute dans une bulle de savon et flotte dans les airs !! Tu peux même te diriger dans la direction que tu veux !! Tout simplement trop top !!</strong>',
                    'price' => 200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '30',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            80 =>
                array (
                    'id' => 86,
                    'name' => 'Jetpack Aquatique',
                    'name_shop' => 'Jetpack Aquatique',
                    'description' => 'Whouaaaaa !! Attention le JetPack Aquatique va te propulser dans les eaux de Blablaland à une vitesse hallucinante !! Accroche-toi bien ^^<br>
Grâce à cet objet, tu pourras te déplacer dans l\'eau super vite avec une grande liberté !! (Et pour encore plus de fun, prends une potion de nage rapide... Yataaaaa !!)
<br><br>
<strong style="color:#BC6BD6;">Accroche-toi à ton JetPack Aquatique et trace sous l\'eau à une vitesse incroyable !!<br>
(A tester : Remonte vers la surface et saute comme un dauphin, trop la classe !!)</strong>',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '600',
                    'gender' => 6,
                    'type' => 'TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            81 =>
                array (
                    'id' => 87,
                    'name' => 'Bouée Kawaii',
                    'name_shop' => 'Bouée Kawaii',
                    'description' => '<b>Super délire !!</b> Enfile ta bouée et flotte sur l\'eau !! En plus, elle est super délire et illimitée dans le temps !! Mets là au fond de l\'eau et elle te fera remonter super vite à la surface !! Et pour plus de délire, tu peux enfiler jusqu\'à 3 bouées en même temps !!<br>
Voilà de quoi passer un super bon moment dans l\'eau au soleil ^^<br><br>
<strong style="color:#BC6BD6;">Enfile jusqu\'à trois bouées différentes en même temps et flotte à la surface de l\'eau !!</strong>',
                    'price' => 250,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            82 =>
                array (
                    'id' => 88,
                    'name' => 'Parapluie Classique',
                    'name_shop' => 'Parapluie Classique',
                    'description' => '<b>Trop pas peur de la pluie !!</b> Prends ton super Parapluie pour ne plus te mouiller quand il pleut sur le tchat !! Super esthétique et très pratique pour esquiver les gouttes d\'eau !! En plus, quand tu sautes si tu gardes la flèche du haut appuyée, ton parapluie te fera planer dans les airs !! <b>Tout simplement la classe !!</b>, tout en restant au sec :)<br>
<br>
<strong style="color:#BC6BD6;">Le parapluie te protège de la pluie (étonnant hein !) et te fait planer dans les airs !! Juste trop super !!</strong>',
                    'price' => 250,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            83 =>
                array (
                    'id' => 89,
                    'name' => 'Super Banane',
                    'name_shop' => 'Super Banane',
                    'description' => '<b>Énorme délire !!</b><br>
Mange une Super Banane pleine de vitamines, elle te fera courir plus vite et sauter plus haut pendant quelques temps tellement elle est surchargée de puissance !!<br>
Mais ce n\'est pas tout... le meilleur est à venir... Parce que ta Super Banane est tellement super que sa peau restera au sol et fera glisser tous les Blablas qui marcheront dessus malencontreusement !! Mouahahaha !!!<br>
<b>Un pouvoir tout simplement surpuissant, à dévorer d\'urgence et sans modération !!</b>
<br><br>
<strong style="color:#BC6BD6;">La Super Banane va changer ta vie, et faire tomber les autres !! A toi le pouvoir de la Banane !! A dévorer d\'urgence, et sans modération !!!</strong>',
                    'price' => 100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '30',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            84 =>
                array (
                    'id' => 90,
                    'name' => 'Parapluie Kawaii',
                    'name_shop' => 'Parapluie Kawaii',
                    'description' => '<b>Trop pas peur de la pluie !!</b> Prends ton super Parapluie Kawaii pour ne plus te mouiller quand il pleut sur le tchat !! Super esthétique et très pratique pour esquiver les gouttes d\'eau !! En plus, quand tu sautes si tu gardes la flèche du haut appuyée, ton parapluie te fera planer dans les airs !! <b>Tout simplement la classe !!</b>, tout en restant au sec :)<br>
<br>
<strong style="color:#BC6BD6;">Le parapluie te protège de la pluie (étonnant hein !) et te fait planer dans les airs !! Juste trop super !!</strong>',
                    'price' => 250,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            85 =>
                array (
                    'id' => 91,
                    'name' => 'Parapluie Dentelle',
                    'name_shop' => 'Parapluie Dentelle',
                    'description' => '<b>Trop pas peur de la pluie !!</b> Prends ton magnifique Parapluie en Dentelle pour ne plus te mouiller quand il pleut sur le tchat !! Super esthétique et très pratique pour esquiver les gouttes d\'eau !! En plus, quand tu sautes si tu gardes la flèche du haut appuyée, ton parapluie te fera planer dans les airs !! <b>Tout simplement la classe !!</b>, tout en restant au sec :)<br>
<br>
<strong style="color:#BC6BD6;">Le parapluie te protège de la pluie (étonnant hein !) et te fait planer dans les airs !! Juste trop super !!</strong>',
                    'price' => 250,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            86 =>
                array (
                    'id' => 92,
                    'name' => 'Canon à Blabla',
                    'name_shop' => 'Canon à Blabla',
                    'description' => 'Avec le Canon à Blabla, découvre un nouveau moyen de transport pour ceux qui n\'ont pas froid aux yeux !! Rentre dans le canon, choisi un angle de tir... il ne te reste plus qu\'a allumer la mèche et garder les yeux grands ouverts !! BOUUUMM !! Te voilà propulser à la vitesse lumière !! De quoi traverser plusieurs maps d\'un coup (de canon ^^) !! Juste énorme !!<br><br>
<strong style="color:#BC6BD6;">Propulse toi super loin avec le méga Canon à Blabla !! Marcher, encore une fois, c\'est "has been", maintenant on se propulse à coups de canon !! XD</strong>',
                    'price' => 50,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '15',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            87 =>
                array (
                    'id' => 93,
                    'name' => 'Trampoline',
                    'name_shop' => 'Trampoline',
                    'description' => 'Youhouuu !! Pose un trampoline sur le tchat et amuse tout le monde en faisant de grands sauts !! Garde la flèche du haut enfoncée pour aller de plus en plus haut !!<br>
Et si tu reposes un autre trampoline par dessus, il prend un niveau de plus et te fait sauter encore plus haut !! Il peut monter jusqu\'au niveau 5, de quoi t\'élancer jusqu\'à trois maps de haut !!<br><b>Vers l\'infini et haut blabla !!</b><br><br>
<strong style="color:#BC6BD6;">Pose jusqu\'à 5 trampolines ensemble pour faire des bonds hallucinants dans les airs !!</strong>',
                    'price' => 50,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '15',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            88 =>
                array (
                    'id' => 94,
                    'name' => 'Turbo Tank',
                    'name_shop' => 'Turbo Tank',
                    'description' => 'Whouaaa !! Trop fort !! Transforme-toi en "Turbo Tank" : Un mini-tank télécommandé qui trace partout sur le tchat !! Encore plus fun, il peut tirer des mini-boulets de canon qui feront voir les étoiles aux Blabla que tu touches !! Prêt pour des mini-combats de Turbo Tank ?! A posséder d\'urgence !!<br>
<br>
<strong style="color:#BC6BD6;">Transforme-toi en Turbo Tank télécommandé et tire des mini-boulets de canon !! Petit, mais costaud !! Un pouvoir surpuissant à posséder impérativement pour des grands moments de délire !!</strong>',
                    'price' => 200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '600',
                    'gender' => 6,
                    'type' => 'TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            89 =>
                array (
                    'id' => 95,
                    'name' => 'MONTURE : Raptor',
                    'name_shop' => 'MONTURE : Raptor',
                    'description' => 'Impressionnant !! Chevauche un Raptor sur Blablaland, ça impose le respect !! Le Raptor est un grand dinosaure redoutable avec une mâchoire surpuissante qui dominera tous les Blablas qui s\'approcheront un peu trop de toi !! Être le maître d\'un grand Raptor, c\'est juste trop la grande classe !!
<br /><br /><strong style="color:#BC6BD6;">Chevauche un Raptor sur Blablaland et profite de son immense puissance !!</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            90 =>
                array (
                    'id' => 96,
                    'name' => 'MONTURE : Diplodocus',
                    'name_shop' => 'MONTURE : Diplodocus',
                    'description' => 'Impressionnant !! Chevauche un Diplodocus sur Blablaland !! Ce grand et imposant dinosaure t\'emmènera partout dans le jeu, mais attention, derrière cette magnifique monture se cache une force redoutable, et il est déconseillé de se moquer de lui !! D\'un grand coup au sol il pourrait bien faire voler tous les Blablas devant lui ;)<br /><br /><strong style="color:#BC6BD6;">Chevauche un Diplodocus sur Blablaland et profite de son immense puissance !!</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            91 =>
                array (
                    'id' => 97,
                    'name' => 'BLIBLI : Ptéranodon',
                    'name_shop' => 'BLIBLI : Ptéranodon',
                    'description' => 'Sous ce doux nom relativement complexe se cache un magnifique Blibli Dinosaure qui vole autour de toi et qui t\'accompagne dans tes aventures sur Blablaland !! Juste trop la classe !!
<br /><br /><strong style="color:#BC6BD6;">Un p\'tit Blibli Dinosaure au nom compliqué qui t\'accompagne sur le jeu !!</strong>',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            92 =>
                array (
                    'id' => 98,
                    'name' => 'BLIBLI : Perroquet',
                    'name_shop' => 'BLIBLI : Perroquet',
                    'description' => 'Possède ce magnifique Perroquet qui volera à tes côtés sur Blablaland !! Fidèle compagnon aux couleurs flamboyantes, il a parfois tendance à répéter des bouts de ce qu\'on raconte !!
<br /><br /><strong style="color:#BC6BD6;">Ce Perroquet te suivra jusqu\'au bout du monde, attention, il a la langue bien pendue :)</strong>',
                    'price' => 700,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            93 =>
                array (
                    'id' => 99,
                    'name' => 'Bouée Pirate !',
                    'name_shop' => 'Bouée Pirate !',
                    'description' => '<b>A l\'Abordage !!</b> Enfile ta bouée à l\'effigie des Pirates et flotte sur l\'eau !! Mets là au fond de l\'eau et elle te fera remonter super vite à la surface !! Et pour plus de délire, tu peux enfiler jusqu\'à 3 bouées différentes en même temps !!<br>
Une bouée à posséder impérativement !!!<br>
<br>
<strong style="color:#BC6BD6;">Que le symbole des Pirates règne sur les eaux de Blablaland !!</strong>',
                    'price' => 250,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            94 =>
                array (
                    'id' => 100,
                    'name' => 'MONTURE : Coccinelle',
                    'name_shop' => 'MONTURE : Coccinelle',
                    'description' => 'Whouaa !! Monte sur le dos d\'une coccinelle et pars à l\'aventure dans tout Blablaland !! Élance-toi dans les airs avec la flèche du haut et maintiens la touche enfoncée, la Coccinelle s\'envolera dans le ciel avec toi sur son dos !! Vraiment superbe !!<br>A posséder impérativement !!<br /><br /><strong style="color:#BC6BD6;">Envole-toi dans les airs avec la monture Coccinelle - un must have !!</strong>',
                    'price' => 1600,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            95 =>
                array (
                    'id' => 101,
                    'name' => 'BLIBLI : Cloche de Pâques',
                    'name_shop' => 'BLIBLI : Cloche de Pâques',
                    'description' => 'Les Cloches de Pâques sont avec toi !! Ce petit Blibli Cloche de Pâques te suivra partout dans le jeu et transformera de temps en temps les Blablas autour de toi en petits Œufs de Pâques en chocolat !! Top délire !!<br>
<br>
<strong style="color:#BC6BD6;">Promène ta cloche de Pâques et transforme les Blablas en petits œufs de Pâques !!!</strong>',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            96 =>
                array (
                    'id' => 102,
                    'name' => 'Graines d\'Œuf de Pâques',
                    'name_shop' => 'Graines d\'Œuf de Pâques',
                    'description' => 'Spécial Pâques !! Plante une fleur magique qui fait pousser des Œufs de Pâques dans Blablaland !! Note que les jardiniers peuvent les faire pousser plus vite en les arrosant ;)<br>
Une fois planté et que l’œuf est visible, tu peux récolter les fleurs. <b>Si tu tombes sur un œuf de Pâques porte-bonheur, tu gagneras un cadeau (les Leprechauns ont 2 fois plus de chance d\'en trouver un ^^)</b><br>
<strong style="color:#BC6BD6;">Cueille les fleurs Œufs de Pâques sur le tchat, et si tu trouves un œuf, tu gagnes des Blabillons !!</strong><br><br>
<strong style="color:#FF0000;">Important : Les Graines d’œufs de Pâques ne seront en vente que pendant le week-end de Pâques !! Faites le stock ^__^</strong>',
                    'price' => 100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '10',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            97 =>
                array (
                    'id' => 104,
                    'name' => 'BLIBLI : Luciole',
                    'name_shop' => 'BLIBLI : Luciole',
                    'description' => 'Trop beau !!<br>
Promène toi avec cette merveilleuse Luciole à tes côtés sur Blablaland !! Elle saura te guider dans les moments difficiles et restera toujours à tes côtés !! Juste magnifique !!<br /><br /><strong style="color:#BC6BD6;">Une magnifique Luciole qui te suivra où que tu ailles !!</strong>',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            98 =>
                array (
                    'id' => 105,
                    'name' => 'Masque Smiley Tire-Langue',
                    'name_shop' => 'Masque Smiley Tire-Langue',
                    'description' => '<b>Délirant !! </b> Porte cet excellent masque de Smiley sur ta tête et promène toi fièrement sur le tchat !! C\'est juste trop la classe et top délire sans limite !!<br><br>
<strong style="color:#BC6BD6;">Avec ce masque, t\'as juste trop la classe Powa !!</strong>',
                    'price' => 100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            99 =>
                array (
                    'id' => 106,
                    'name' => 'Masque Smiley Alien',
                    'name_shop' => 'Masque Smiley Alien',
                    'description' => '<b>Délirant !! </b> Porte cet excellent masque de Smiley sur ta tête et promène toi fièrement sur le tchat !! C\'est juste trop la classe et top délire sans limite !!<br><br>
<strong style="color:#BC6BD6;">Avec ce masque, t\'as juste trop la classe Powa !!</strong>',
                    'price' => 100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            100 =>
                array (
                    'id' => 107,
                    'name' => 'Masque Smiley Pink Lapin',
                    'name_shop' => 'Masque Smiley Pink Lapin',
                    'description' => '<b>Délirant !! </b> Porte cet excellent masque de Smiley sur ta tête et promène toi fièrement sur le tchat !! C\'est juste trop la classe et top délire sans limite !!<br><br>
<strong style="color:#BC6BD6;">Avec ce masque, t\'as juste trop la classe Powa !!</strong>',
                    'price' => 100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            101 =>
                array (
                    'id' => 108,
                    'name' => 'Masque Smiley Vache',
                    'name_shop' => 'Masque Smiley Vache',
                    'description' => '<b>Délirant !! </b> Porte cet excellent masque de Smiley sur ta tête et promène toi fièrement sur le tchat !! C\'est juste trop la classe et top délire sans limite !!<br><br>
<strong style="color:#BC6BD6;">Avec ce masque, t\'as juste trop la classe Powa !!</strong>',
                    'price' => 100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            102 =>
                array (
                    'id' => 109,
                    'name' => 'Alliances d\'union',
                    'name_shop' => 'Alliances d\'union',
                    'description' => '<b>Alliances de Mariage !!</b> Oui, je le veux !! Grâce à ces merveilleux anneaux en Or, tu vas pouvoir t\'unir avec la personne de tes rêves (ou juste un pote ^^). Lorsque tu offres l\'anneau à quelqu\'un et qu\'il l\'accepte, tu pourras te téléporter vers lui d\'un simple clic et sans utiliser de téléport !! C\'est la magie de l\'Alliance de Mariage !!<br><br>
<strong style="color:#FF0000;">IMPORTANT :</strong> Tu ne peux être lié qu\'à une seule personne, si tu te lies à quelqu\'un alors que tu es déjà engagé envers une autre personne, le premier lien sera brisé et tu seras allié au nouveau.<br><br>
<strong style="color:#BC6BD6;">Dis OUI à la personne de tes rêves, et téléporte-toi vers lui à volonté pour ne plus jamais être séparé de lui ! Pour le meilleur, et le meilleur seulement ;)</strong>',
                    'price' => 200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            103 =>
                array (
                    'id' => 110,
                    'name' => 'Confettis',
                    'name_shop' => 'Confettis',
                    'description' => '<b>C\'est la fête !! </b> Balance des confettis partout sur le tchat pour faire la fête en grand !! C\'est juste top délire pour mettre l\'ambiance de fête de partout autour de toi !! Et c\'est encore plus fun si tu croises des jeunes mariés et que tu les arroses de confettis !!!<br>
<strong style="color:#BC6BD6;">Balance des confettis partout autour de toi pour faire la fête !!</strong>',
                    'price' => 30,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '45',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            104 =>
                array (
                    'id' => 112,
                    'name' => 'Ballon volant : Coeur',
                    'name_shop' => 'Ballon volant : Coeur',
                    'description' => 'Yeeaahh !! Ouvre ton cœur et sème l\'amour tout autour de toi en te baladant avec ton Ballon Cœur !! C\'est super fun, et encore plus si t\'es sur un Overboard :) Ton ballon vole dans les airs !!<br>
<strong style="color:#BC6BD6;">Promène-toi avec un ballon cœur !!</strong>',
                    'price' => 100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            105 =>
                array (
                    'id' => 113,
                    'name' => 'Lance-Potions !!',
                    'name_shop' => 'Lance-Potions !!',
                    'description' => '<b>Incroyablement SURPUISSANT !!</b><br />
Découvre le pouvoir surpuissant du Lance-Potions !! Arme toi d\'un max de Potions en tout genre et canardes sur le tchat !! Lorsque ta potion éclate au sol, il s\'en dégage un nuage de fumée et tous les blablas qui le traversent subiront le pouvoir de la potion que tu as lancée !! Trop énorme !!<br>
Avec une potion de speed, tout le monde courra super vite, mais avec une potion caca, hahahahaaa, ils seront tous transformés en... CACA !!<br><br>
<strong style="color:#BC6BD6;">EN CADEAU : Pour l\'achat du lance-potions, on t\'offre 60 potions !! Incroyables. Les 6 potions existantes en 10 exemplaires chacune, un ultime cadeau, pour un ultime objet surpuissant !!</strong>
<br>
<br /><strong style="color:#BC6BD6;">Canarde les Potions, juste SURPUISSANT !!<br>
<br>
Le lance-potions et les 60 potions sont offerts pour l\'achat d\'un skin Nucléaire ;)</strong>',
                    'price' => 450,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            106 =>
                array (
                    'id' => 114,
                    'name' => 'MONTURE : Pousse-Pousse',
                    'name_shop' => 'MONTURE : Pousse-Pousse',
                    'description' => '<b>Trop délire !!</b> Promène-toi en Pousse-pousse dans Blablaland, c\'est juste trop énorme et vraiment super délirant !! Voilà une monture carrément originale avec laquelle vous ne passerez pas inaperçu du tout !!<br>
<br /><br /><strong style="color:#BC6BD6;">Un must-have question délire !! Balade-toi en Pousse-Pousse dans Blablaland !! PTDR !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            107 =>
                array (
                    'id' => 115,
                    'name' => 'BLIBLI : Nikuman Hoïru',
                    'name_shop' => 'BLIBLI : Nikuman Hoïru',
                    'description' => '<b>KAWAIIIII !!!</b><br>
Trop mimi cette p\'tite chose qui te suit partout en volant à tes côtés !! Hyper Kawaii et vraiment super choupi, un blibli vraiment magnifique a posséder d\'urgence, il est juste trop trop craquant !!!
<br><br>
<strong style="color:#BC6BD6;">Trop mimi et super chou, un blibli a posséder d\'urgence tellement il est Kawaii !!!</strong>',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            108 =>
                array (
                    'id' => 116,
                    'name' => 'Potion Fantôme',
                    'name_shop' => 'Potion Fantôme',
                    'description' => 'BooOOoooooOOo !!<br>
Avec cette merveilleuse Potion, tu vas pouvoir te transformer en Fantôme comme si tu étais allé au Paradis des Blablas !!<br>Là où c\'est encore plus fun, c\'est d\'utiliser le lance-potions pour transformer les autres en Fantômes, et laisser faire les Chasseurs de Fantômes !! Haha, ou si toi tu veux être fantôme pour te faire chasser, cool !!
<br><br>
<em style="color:#BC6BD6;">Cette Potion peut aussi être achetée en jeu auprès du Marchand Alchimiste (Zone 52, au pied du Champi Géant)</em>
<br><br>
<strong style="color:#BC6BD6;">Fantôme TRAAAANSFOOORMATIOOOOONN !!!</strong>',
                    'price' => 7,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 4,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            109 =>
                array (
                    'id' => 117,
                    'name' => 'BLIBLI : n300 Stabilisateur',
                    'name_shop' => 'BLIBLI : n300 Stabilisateur',
                    'description' => '<b>Blibli Spécial N300</b><br><br>
Cette technologie spéciale n300 anti-gravitationnelle permet d\'annuler l\'apesanteur du guerrier afin de le maintenir parfaitement immobile et stable dans les airs.
<br>
<strong style="color:#BC6BD6;">Le Blibli Stabilisateur permet au n300 de stationner dans les airs !!</strong><br><br>
La Vente des Bliblis spéciaux du n300 n\'est pas limitée dans le temps contrairement au n300.<br>
<strong style="color:#DD0000;">Les pouvoirs de ce Blibli ne s\'activent qu\'avec le skin collector du n300 !</strong>',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            110 =>
                array (
                    'id' => 118,
                    'name' => 'BLIBLI : n300 Sonic Sabre',
                    'name_shop' => 'BLIBLI : n300 Sonic Sabre',
                    'description' => '<b>Blibli Spécial N300</b><br><br>
Décuple la puissance du grand Sabre du n300 lorsqu\'il est activé. Les coups de sabre créeront ainsi une déferlante d\'énergie redoutable qui propulsera une onde de choc surpuissante !!
<br>
<strong style="color:#BC6BD6;">Blibli Sabre Sonic pour décupler la puissance de son Sabre et créer des ondes de choc.</strong><br><br>
La Vente des Bliblis spéciaux du n300 n\'est pas limitée dans le temps contrairement au n300.<br>
<strong style="color:#DD0000;">Les pouvoirs de ce Blibli ne s\'activent qu\'avec le skin collector du n300 !</strong>',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            111 =>
                array (
                    'id' => 119,
                    'name' => 'BLIBLI : n300 Ultra-Speed',
                    'name_shop' => 'BLIBLI : n300 Ultra-Speed',
                    'description' => '<b>Blibli Spécial N300</b><br><br>
Ce Blibli permet de déployer une technologie trop longtemps restée cacher dans le coeur des Solid-Tech car considérée comme trop puissante.<br>
Une fois le Blibli activé, un nouveau pouvoir apparait qui permet d\'un clic de se téléporter instantanément n\'importe où dans la map où tu te trouves. Radicalement puissant !!
<br>
<strong style="color:#BC6BD6;">Permet de se téléporter d\'un point à un autre dans une même map !!</strong><br><br>
La Vente des Bliblis spéciaux du n300 n\'est pas limitée dans le temps contrairement au n300.<br>
<strong style="color:#DD0000;">Les pouvoirs de ce Blibli ne s\'activent qu\'avec le skin collector du n300 !</strong>',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            112 =>
                array (
                    'id' => 120,
                    'name' => 'MONTURE : Super Moto 1',
                    'name_shop' => 'MONTURE : Super Moto 1',
                    'description' => 'Enfourche une Super Moto au design incroyable et super stylé, fais chauffer le moteur et carbure à fond dans les plaines de Blablaland !!<br />
Un plaisir et une sensation de vitesse qui en met plein la vue !! <br />
<br /><br /><strong style="color:#BC6BD6;">Trace à fond sur Blablaland avec ta Super Moto hyper design !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            113 =>
                array (
                    'id' => 121,
                    'name' => 'MONTURE : Super Moto 2',
                    'name_shop' => 'MONTURE : Super Moto 2',
                    'description' => 'Enfourche une Super Moto au design futuriste incroyable et super stylé, fais chauffer le moteur et carbure à fond dans les plaines de Blablaland !!<br />
Un plaisir et une sensation de vitesse qui en met plein la vue !!
<br /><br /><strong style="color:#BC6BD6;">Trace à fond sur Blablaland avec ta Super Moto futuriste incroyable !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            114 =>
                array (
                    'id' => 122,
                    'name' => 'BLIBLI : Chat Kawaii',
                    'name_shop' => 'BLIBLI : Chat Kawaii',
                    'description' => '<strong style="color:#BC6BD6;">Trop Kawaii !!!!</strong><br>
Ce tout petit chat trop trop mimi te suivra partout, accroché à ses beaux ballons il volera à tes côtés et resta à jamais ton plus fidèle compagnon.<br>
Il est juste trop chou et plein d\'amour !!<br><br>
<strong style="color:#BC6BD6;">Trop craquant, hyper Kawaii et plein d\'amour, ce Blibli est juste indispensable !!</strong>',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            115 =>
                array (
                    'id' => 123,
                    'name' => 'Lampion Tête de Mort',
                    'name_shop' => 'Lampion Tête de Mort',
                    'description' => 'Pour Halloween, promène-toi avec ton Lampion Tête de Mort dans le dos pour mettre l\'ambiance et faire la fête !! Que les flammes d\'Halloween soient avec toi !!
<br><strong style="color:#BC6BD6;">Que l\'ambiance d\'Halloween règne grâce à ton Lampion Tête de Mort !!</strong>',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            116 =>
                array (
                    'id' => 124,
                    'name' => 'Cerf Volant Halloween',
                    'name_shop' => 'Cerf Volant Halloween',
                    'description' => 'Trop cool !! Promène-toi avec ce superbe cerf-volant Halloween qui représente une chauve souris, un des plus grand symbole de la fête d\'Halloween !! Trop classe pour mettre l\'ambiance !!
<br><strong style="color:#BC6BD6;">Que les Flammes d\'Halloween soient avec toi grâce à ton cerf-volant !!</strong>',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            117 =>
                array (
                    'id' => 125,
                    'name' => 'Super Balai Flottant',
                    'name_shop' => 'Super Balai Flottant',
                    'description' => 'Découvre le nouveau Balai Flottant d\'Halloween !! Plus impressionnant, plus rapide et plus stylé... il possède surtout la capacité de s\'enflammer lorsque tu appuies 2 fois dans une direction, ce qui te propulsera à une vitesse juste incroyable le temps qu\'il se consume !! A posséder d\'urgence pour des sensations extrêmes !!
<br><strong style="color:#FF5001;">Le nouveau Balai Flottant prend feu et te propulse hyper vite !!</strong>',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            118 =>
                array (
                    'id' => 126,
                    'name' => 'Lampion Citrouille',
                    'name_shop' => 'Lampion Citrouille',
                    'description' => 'Pour Halloween, promène-toi avec ton Lampion Citrouille dans le dos pour mettre l\'ambiance et faire la fête !! Que les flammes d\'Halloween soient avec toi !!
<br><strong style="color:#BC6BD6;">Que l\'ambiance d\'Halloween règne grâce à ton Lampion Citrouille !!</strong>',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            119 =>
                array (
                    'id' => 127,
                    'name' => 'MONTURE : Citrouille',
                    'name_shop' => 'MONTURE : Citrouille',
                    'description' => 'Montez à bord de l\'effroyable monture Citrouille, au design du Ô Collector TOYZ d\'Halloween et affrontez les ténèbres de cette morbide fête sans crainte, vous êtes sûrement le plus hideux et le plus machiavélique d\'entre tous !! MOUAHAHAHA !!<br>
Une monture aux allures collector, à posséder impérativement !!
<br><strong style="color:#BC6BD6;">Criez "AIIIDE MOI" à bord de cette monture, c\'est bon ça hein ?!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            120 =>
                array (
                    'id' => 128,
                    'name' => 'MONTURE : Démon',
                    'name_shop' => 'MONTURE : Démon',
                    'description' => 'Chevauchez cette effroyable monture démoniaque et répandez les ténèbres tout autour de vous sur les plaines de Blablaland !! A vous l\'incarnation du mal et des ténèbres !!
<br><strong style="color:#BC6BD6;">Chevauchez les ténèbres !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            121 =>
                array (
                    'id' => 129,
                    'name' => 'BLIBLI : Gargouille',
                    'name_shop' => 'BLIBLI : Gargouille',
                    'description' => 'Invoquez une maléfique Gargouille volante à vos côtés. Fidèle, elle vous suivra partout et ajoutera une touche démoniaque à votre charisme sûrement déjà ténébreux !!
<br><strong style="color:#BC6BD6;">Dévoilez le côté obscur qui est en vous !!</strong>',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            122 =>
                array (
                    'id' => 130,
                    'name' => 'BLIBLI : Hibou',
                    'name_shop' => 'BLIBLI : Hibou',
                    'description' => 'Invoquez un majestueux Hibou qui vous suivra partout dans Blablaland !! Symbole de la nuit, quoi de mieux qu\'un bon Halloween pour l\'ajouter à sa collection !!
<br><strong style="color:#BC6BD6;">Un magnifique Hibou qui restera à jamais un précieux allié !</strong>',
                    'price' => 350,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            123 =>
                array (
                    'id' => 131,
                    'name' => 'Drapeau Art\'Club Halloween 2011',
                    'name_shop' => 'Drapeau Art\'Club Halloween 2011',
                    'description' => '<strong style="color:#FF5001;">RECOMPENSE ART\'CLUB HALLOWEEN 2011</strong><br />
L\'ultime récompense de l\'Art\'Club 2011 !! Le drapeau symbolise ton extrême maîtrise de l\'art et impose le respect... trop la classe !! Quiconque porte ce drapeau sera au sommet de la gloire :)
<br /><br />
<strong style="color:#BC6BD6;">L\'ultime récompense... démontre ton incontestable maîtrise avec ce drapeau collector !!</strong>',
                    'price' => 100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            124 =>
                array (
                    'id' => 132,
                    'name' => 'MONTURE : Vague de sable',
                    'name_shop' => 'MONTURE : Vague de sable',
                    'description' => 'Imaginez une monture en forme de vague de sable : vous venez d\'imaginer la monture rêvée pour le Lapin Plage le plus fun de tout Blablaland !! La vague fait une bulle avec un coeur lorsqu\'elle est en mode danse !!
<br><br>
<strong style="color:#BC6BD6;">Une monture des sables, parfaite pour le Lapin Plage ou pour se promener dans Blahiti !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            125 =>
                array (
                    'id' => 133,
                    'name' => 'Sac de Noël',
                    'name_shop' => 'Sac de Noël',
                    'description' => 'C\'est Noël !! Sortez avec votre sac rempli de cadeaux pour booster votre look aux couleurs d\'une des plus belles fêtes de toute l\'année !! La magie de Noël ne vous quittera jamais avec ce superbe accessoire !!
<br><strong style="color:#BC6BD6;">Un joli sac de Noël pour faire vivre la magie de cette fête. Joyeuses Fêtes et Joyeux Noël !! HO HO HO !!</strong>',
                    'price' => 450,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            126 =>
                array (
                    'id' => 134,
                    'name' => 'Jetpack NOËL !!',
                    'name_shop' => 'Jetpack NOËL !!',
                    'description' => 'Incroyable !! Découvrez un nouveau JetPack spécial Noël, qui vous donnera des ailes !! Un design remarquable, voilà LE nouveau JetPack qui vous envolera haut dans le ciel en laissant une trainée d\'étoiles derrière vous !!<br>Un must-have, à posséder d\'urgence !!
<br><strong style="color:#BC6BD6;">LE nouveau JetPack, un look merveilleux qui vous donnera des ailes !! Joyeuses Fêtes !!</strong>',
                    'price' => 1100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '600',
                    'gender' => 6,
                    'type' => 'TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            127 =>
                array (
                    'id' => 135,
                    'name' => 'Etoiles de Noël',
                    'name_shop' => 'Etoiles de Noël',
                    'description' => 'Portez haut dans le ciel ce magnifique ballon avec 3 étoiles qui voleront au-dessus de vous pour un max d\'effet durant ces fêtes de fin d\'année !! La magie de Noël vous accompagne !!
<br><strong style="color:#BC6BD6;">Joyeux Noël à tous !!</strong>',
                    'price' => 100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            128 =>
                array (
                    'id' => 136,
                    'name' => 'Luge !!',
                    'name_shop' => 'Luge !!',
                    'description' => 'Grande nouveauté vraiment excellente !! Découvrez la Luge, elle glisse pour de vrai dans les pentes, whouaaaaouuuuuuuuuu !! Prenez de l\'élan et faites d\'incroyables courses de luge dans Blablaland !! Une pente...? Hop, elle glissera !! Top délire et vraiment rapide, voilà LE nouveau moyen de déplacement !!
<br><strong style="color:#BC6BD6;">Prenez de l\'élan et dévalez les pentes de Blablaland grâce au nouveau pouvoir LUGE !! Joyeuses Fêtes !!</strong>',
                    'price' => 600,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            129 =>
                array (
                    'id' => 137,
                    'name' => 'Masque du Père Noël',
                    'name_shop' => 'Masque du Père Noël',
                    'description' => '<b>Délirant !! </b> Porte ce superbe masque du Père Noël en criant "HO HO HO" sur le tchat pour mettre l\'ambiance de Noël et délirer !! Trop top !!<br><br>
<strong style="color:#BC6BD6;">Joyeux Noël à tous, Ho Ho Ho !!</strong>',
                    'price' => 290,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            130 =>
                array (
                    'id' => 138,
                    'name' => 'Ballon Renne de Noël',
                    'name_shop' => 'Ballon Renne de Noël',
                    'description' => 'Portez haut dans le ciel ce magnifique ballon Renne de Noël qui volera au-dessus de vous pour un max d\'effet durant ces fêtes de fin d\'année !! La magie de Noël vous accompagne !!
<br><strong style="color:#BC6BD6;">Joyeux Noël à tous !!</strong>',
                    'price' => 450,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            131 =>
                array (
                    'id' => 139,
                    'name' => 'Ballon Sapin de Noël',
                    'name_shop' => 'Ballon Sapin de Noël',
                    'description' => 'Portez haut dans le ciel ce magnifique ballon Sapin de Noël qui volera au-dessus de vous pour un max d\'effet durant ces fêtes de fin d\'année !! La magie de Noël vous accompagne !!
<br><strong style="color:#BC6BD6;">Joyeux Noël à tous !!</strong>',
                    'price' => 450,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            132 =>
                array (
                    'id' => 140,
                    'name' => 'Graines de Sapinou',
                    'name_shop' => 'Graines de Sapinou',
                    'description' => 'Plante ces Graines de Sapinou magiques  pour faire pousser un magnifique sapin de Noël sur le jeu !! Une fois planté, il poussera lentement (ou super vite si un skin jardinier l\'arrose) jusqu\'à devenir majestueux et merveilleusement décoré !!<br>Ensuite, tu peux tenter de récolter des cadeaux pour différents effets vraiment chouettes !!
<br /><br />
<em>Les Graines de Sapinou sont aussi disponible directement en jeu auprès du PNJ Marchand de Noël dans toutes les maps durant les fêtes de Noël !!</em>
<br /><br /><strong style="color:#BC6BD6;">Joyeux Noël à tous !! Attention, les Graines de Sapinou ne seront en vente que pendant les fêtes de Noël !!</strong>',
                    'price' => 10,
                    'token' => 0,
                    'special' => 'CHRISTMAS',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            133 =>
                array (
                    'id' => 141,
                    'name' => 'BLIBLI : Ange de Noël',
                    'name_shop' => 'BLIBLI : Ange de Noël',
                    'description' => 'Promène-toi sur le jeu avec ce merveilleux Blibli Ange qui volera à tes côtés et t\'apportera du bonheur !! Elle est toute mimi, et en plus, on a tous besoin d\'un ange à nos côtés pour nous soutenir :)
<br><strong style="color:#BC6BD6;">Un magnifique petit Ange, plein de charme et de tendresse pour passer de Joyeuses Fêtes !!</strong>',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            134 =>
                array (
                    'id' => 142,
                    'name' => 'MONTURE : Traineau de Noël',
                    'name_shop' => 'MONTURE : Traineau de Noël',
                    'description' => 'Youhouuuuu !! Toi aussi maintenant tu peux te promener avec un traineau de Noël, tout comme celui du Père Noël, whouaaaaa comme c\'est trop la classe !! Bon par contre, celui-là ne vole pas, et oui, ça c\'est réservé au Père Noël, mais il a vraiment la classe ^__^<br><strong style="color:#BC6BD6;">Une monture Traineau de Noël qui en impose pour les fêtes !! Voilà le moyen de transport du moment pour être vraiment Noël ^^</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            135 =>
                array (
                    'id' => 143,
                    'name' => 'BLIBLI : Pépé Noël',
                    'name_shop' => 'BLIBLI : Pépé Noël',
                    'description' => '<img src="/images/blablaland/news_limite.gif"> <strong style="color:#FF1111;">JOYEUX NOËL !!</strong><br><br>
Un blibli ultra mignon rempli d’énergie ! Toute agité, il suit Pépé Noël dans tout ses déplacements ! Un blibli infatigable qui vous donnera la pêche en toute circonstance !<br><br><strong style="color:#BC6BD6;">Un Blibli édition limité spécial Yovasystem !! A posséder d\'urgence !!</strong><br><br>
<br><strong style="color:#ef4400;">Attention, ce blibli n\'est en vente que pendant les fêtes de Noël, après ça... il ne sera plus disponible à l\'achat !!</strong>',
                    'price' => 777,
                    'token' => 0,
                    'special' => 'CHRISTMAS',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            136 =>
                array (
                    'id' => 144,
                    'name' => 'MONTURE : Traineau de Noël Spatial',
                    'name_shop' => 'MONTURE : Traineau de Noël Spatial',
                    'description' => 'The must pour les fêtes : le traineau de Noël spatial ! Sa technologie est basée sur la même que celle du blablarigeable qui vous emmène partout dans Blablaland. Très écolo et très pratique, ce vaisseau utilise l’énergie dégagé par les blablas lors de leurs mouvements quotidiens. En somme : pas de mouvements inutiles > tout est transformé en énergie gratuite et à volonté !!<br><br><strong style="color:#BC6BD6;">Une monture spéciale Yovasystem !! A posséder d\'urgence !! Et pour plus de fun, il faut l\'avoir avec le Pépé Noël édition limitée ainsi que son Blibli ^^</strong>',
                    'price' => 1444,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            137 =>
                array (
                    'id' => 145,
                    'name' => 'Lampion Bougies de Noël',
                    'name_shop' => 'Lampion Bougies de Noël',
                    'description' => 'C\'est Noël !! Sortez avec votre Lampion de Bougies pour booster votre look aux couleurs d\'une des plus belles fêtes de toute l\'année !! La magie de Noël ne vous quittera jamais avec ce superbe accessoire !!
<br><strong style="color:#BC6BD6;">Un joli Lampion Bougies de Noël pour faire vivre la magie de cette fête. Joyeuses Fêtes et Joyeux Noël !! HO HO HO !!</strong>',
                    'price' => 450,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            138 =>
                array (
                    'id' => 146,
                    'name' => 'Lampion Chinois Panda',
                    'name_shop' => 'Lampion Chinois Panda',
                    'description' => '<strong style="color:#ffa800;">NOUVEL AN CHINOIS 2012 !!</strong><br>
Balade-toi dans le jeu avec ce magnifique Lampion Chinois en hommage au Panda, animal sacré, qui éclairera ta route !
<br>
<br>
<strong style="color:#BC6BD6;">Un Lampion sacré en hommage aux Pandas !!</strong>',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            139 =>
                array (
                    'id' => 147,
                    'name' => 'Cerf Volant Dragon Chinois 2012',
                    'name_shop' => 'Cerf Volant Dragon Chinois 2012',
                    'description' => '<strong style="color:#ffa800;">NOUVEL AN CHINOIS 2012 !!</strong><br>
Lance ton Cerf Volant Dragon Chinois dans le ciel de Blablaland et regarde-le se promener au gré du vent !! Attention quand même aux rafales de vent, ça tire fort ;)
(Essaie donc avec un Overboard ou dans les airs !! Effets surprenants, mais excellents !! Yataaaa !!).
<br>
<br>
<strong style="color:#BC6BD6;">Lance ton Cerf Volant dans les cieux de Blablaland et découvre ses surprenants effets !!</strong>',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            140 =>
                array (
                    'id' => 148,
                    'name' => 'BLIBLI : Masque Chinois 2012',
                    'name_shop' => 'BLIBLI : Masque Chinois 2012',
                    'description' => 'Promène-toi dans Blablaland avec ton Blibli Masque Chinois qui te suivra partout en volant !! Il apportera une grande touche de mystère tout autour de toi !!
<br>
<br>
<strong style="color:#BC6BD6;">Un Blibli Nouvel An Chinois 2012 !!</strong>',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            141 =>
                array (
                    'id' => 149,
                    'name' => 'MONTURE : Dragon Serpent',
                    'name_shop' => 'MONTURE : Dragon Serpent',
                    'description' => '<strong style="color:#ffa800;">NOUVEL AN CHINOIS 2012 !!</strong><br>
Incroyable !! Monte sur le dos d\'un Dragon Serpent Chinois... trop impressionant, et surtout trop la classe !!<br>
Il avance vite grâce à la magie de l\'eau qu\'il projette au sol, mais sa vitesse est encore plus grande lorsqu\'il est dans son élèment : l\'eau !!<br>
De plus, il est capable grâce à une action spéciale de se laver des attaques des tomates et autres désagréments !
<br>
<br>
<b>Grand, impressionnant, redoutable... la monture Dragon Serpent est à posséder d\'urgence !!</b>
<br>
<strong style="color:#BC6BD6;">Chevauche un incroyable Dragon Serpent... whouaaaaaa !!</strong>',
                    'price' => 1600,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            142 =>
                array (
                    'id' => 150,
                    'name' => 'MONTURE : BBL-Solid SPORT Bi-turbo',
                    'name_shop' => 'MONTURE : BBL-Solid SPORT Bi-turbo',
                    'description' => '<strong style="color:#ff0000;">BBL-Solid SPORT !!</strong><br>
Enfin un véhicule digne de ce nom ! Cette voiture de sport équipée d\'un double turbo pour une vitesse démesurée te permettra de montrer à tous quel pilote tu es !<br>
<b>7 actions possibles avec ta BBL-Solid-Sport :</b><br>
Allume/éteins tes phares, allume/éteins tes anti-brouillards, klaxonne, vrombissement du moteur, allume/éteins tes néons tuning, baisse/monte tes vitres électriques afin de voir ton skin, et l\'ultime pouvoir : le BOOST (dont 1 pack de 20 offert avec l\'achat de cette voiture) ! Le BOOST te permettra de démultiplier ta vitesse pendant un laps de temps avec des effets graphiques garantis !!<br>
<br>Ces 7 pouvoirs, tu les géreras à partir d\'un tableau de bord spécialement conçu à cet effet !
<br>
<br>
<strong style="color:#BC6BD6;">Sans conteste cette BBL-Solid SPORT demeure la monture la plus sophistiquée de Blablaland avec au menu 7 actions/pouvoirs activables directement à partir d\'un tableau de bord inédit !!!</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            143 =>
                array (
                    'id' => 151,
                    'name' => 'MONTURE : Super Lapinou Trèfle',
                    'name_shop' => 'MONTURE : Super Lapinou Trèfle',
                    'description' => '<strong style="color:#ff39e4;">KAWAII FIGHT !!</strong><br>
Monte sur les épaules de l\'incroyable Super Lapinou Trèfle !! Ultra mignon, ultra craquant... et ultra puissant !! Il possède la force des Trèfles et peut générer un énorme laser qui transformera tous les Blablas dans son rayon en "Mini-Super-Lapinoux-Trèfles" tous choupis et tous adorables !!<br>
Une monture remarquablement belle, Kawaii, et surpuissante !!<br>
Et en plus, il saute super haut dans les airs :)
<br>
<br>
<b>Super Lapinou : à posséder impérativement !!</b><br>
<strong style="color:#BC6BD6;">Super Kawaii Fight !! Découvrez la monture Super Lapinou avec le pouvoir des Trèfles !!</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            144 =>
                array (
                    'id' => 152,
                    'name' => 'BOOST !!',
                    'name_shop' => 'BOOST !!',
                    'description' => '<strong style="color:#ff0000;">BBL-Solid SPORT & Motor Spring</strong><br>
Le BOOST te permettra de démultiplier incroyablement la vitesse de ta voiture "BBL-Solid SPORT" ou "Motor Spring" pendant un laps de temps avec des effets graphiques garantis !!<br>
Il s\'active depuis l\'interface dédiée à ta voiture.<br>
<strong style="color:#FF0000;">Tu dois posséder une monture "BBL-Solid SPORT" ou "Motor Spring" pour utiliser ce pouvoir</strong>
<br><br>
Un premier pack de 20 Boosts t\'es offert avec l\'achat d\'une monture compatible !
<br>
<br>
<strong style="color:#BC6BD6;">Montre qui est le roi du Bitume avec le BOOST !!</strong>',
                    'price' => 50,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '20',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            145 =>
                array (
                    'id' => 153,
                    'name' => 'MONTURE : BBL-Solid SPORT 16V',
                    'name_shop' => 'MONTURE : BBL-Solid SPORT 16V',
                    'description' => '<strong style="color:#ff0000;">BBL-Solid SPORT !!</strong><br>
"The" voiture de sport ! Cette voiture ultra tuning dotée d\'un moteur surdimensionné te permettra de réaliser une mutltitude d\'actions !<br>
<b>7 actions possibles avec ta BBL-Solid-Sport :</b><br> allume/éteins tes phares, allume/éteins tes anti-brouillards, klaxonne, vrombissement du moteur, allume/éteins tes néons tuning, baisse/monte tes vitres électriques afin de voir ton skin, et l\'ultime pouvoir : le BOOST (dont 1 pack de 20 offert avec l\'achat de cette voiture) ! Le BOOST te permettra de démultiplier ta vitesse pendant un laps de temps avec des effets graphiques garantis !!<br><br>
Ces 7 pouvoirs, tu les géreras à partir d\'un tableau de bord spécialement conçu à cet effet !
<br>
<br>
<strong style="color:#BC6BD6;">Sans conteste cette BBL-Solid SPORT demeure la monture la plus sophistiquée de Blablaland avec au menu 7 actions/pouvoirs activables directement à partir d\'un tableau de bord inédit !!!</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            146 =>
                array (
                    'id' => 154,
                    'name' => 'MONTURE : Super Lapinou Coeur',
                    'name_shop' => 'MONTURE : Super Lapinou Coeur',
                    'description' => '<strong style="color:#ff0000;">Saint Valentin !!</strong><br>
Monte sur les épaules de l\'incroyable Super Lapinou Coeur, spécialement pour la Saint Valentin !! Ultra mignon, ultra craquant... et ultra puissant !! Il possède la force des Coeurs et peut générer un énorme laser qui transportera tous les Blablas touchés dans une bulle de savon magique en forme de Coeur !!<br>
Une monture remarquablement belle, toute Kawaii, pleine d\'amour et surpuissante !!<br>
Et en plus, il saute super haut dans les airs :)
<br>
<br>
<b>Super Lapinou : à posséder impérativement !!</b><br>
<strong style="color:#BC6BD6;">Super Lapinou Coeur !! Découvrez la monture Super Lapinou avec le pouvoir magique des Coeurs !!</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            147 =>
                array (
                    'id' => 156,
                    'name' => 'Bombe Coeur',
                    'name_shop' => 'Bombe Coeur',
                    'description' => '<strong style="color:#FF0000;">Saint Valentin !!</strong><br>
BOOOOOOM d\'amour :) Pose une bombe Coeur au sol qui explosera dans les secondes qui suivent (surprise !!) d\'un bros BOOOOM d\'amour qui transformera en Coeurs tous les Blablas qui flânaient dans les alentours !!<br>
L\'amour fou qui fait "BOOOOM" XD !!
<br><br><strong style="color:#BC6BD6;">Une bombe pleine d\'amour qui fait BOOOM !!</strong>',
                    'price' => 20,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '20',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            148 =>
                array (
                    'id' => 157,
                    'name' => 'Rose à offrir St Valentin',
                    'name_shop' => 'Rose à offrir St Valentin',
                    'description' => '<strong style="color:#FF0000;">Saint Valentin !!</strong><br>
Offre une magnifique Rose pour déclarer ton amour à ton âme soeur, ou simplement pour le plaisir d\'offrir une belle fleur.<br>
Une fois offerte à la personne de ton choix, celle-ci brillera de mille coeurs :)
<br><br><strong style="color:#BC6BD6;">Le plaisir d\'offrir !!</strong>',
                    'price' => 30,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '5',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            149 =>
                array (
                    'id' => 158,
                    'name' => 'Chocolat à offrir St Valentin',
                    'name_shop' => 'Chocolat à offrir St Valentin',
                    'description' => '<strong style="color:#FF0000;">Saint Valentin !!</strong><br>
Offre un chocolat pour déclarer ton amour à ton âme soeur, ou simplement pour le plaisir d\'offrir une gourmandise (Miam miam !).<br>
Une fois offert à la personne de ton choix, celle-ci brillera de mille coeurs, et pourra se régaler d\'un bon chocolat :)
<br><br><strong style="color:#BC6BD6;">Le plaisir d\'offrir !!</strong>',
                    'price' => 30,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '20',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            150 =>
                array (
                    'id' => 159,
                    'name' => 'Ballon Emotions',
                    'name_shop' => 'Ballon Emotions',
                    'description' => '<strong style="color:#FF0000;">Saint Valentin !!</strong><br>
Excellent !! Grâce au Ballon émotion, tu pourras indiquer en jeu ton humeur amoureuse du moment. Tu pourras choisir :<br>
- <strong>Free</strong> : si ton coeur est à prendre.<br>
- <strong>Coeur</strong> : si tu es amoureux(euse) d\'une personne.<br>
- <strong>Coeur brisé</strong> : si tu as un chagrin d\'amour.<br>
- <strong>Free Hugs</strong> : Yattaaaa !!<br>
<br>
Un must-have pour la Saint Valentin !!
<br><br><strong style="color:#BC6BD6;">Indique à tout le monde ton humeur amoureuse du moment !!</strong>',
                    'price' => 200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            151 =>
                array (
                    'id' => 160,
                    'name' => 'MONTURE : Jeep',
                    'name_shop' => 'MONTURE : Jeep',
                    'description' => '<strong style="color:#BC6BD6;">JEEP COMMANDOS !!</strong><br>
Voici "THE" Jeep pour conduire ton skin commando de partout ! Un petit bolide robuste, paré pour les terrains les plus chaotiques. Un lance-roquette dévastateur à l\'arrière du véhicule, capable de tuer les Blablas imprudents, te permettra de combattre tout en étant au volant !!<br>
De plus, une popup "tableau de bord" rassemblera diverses actions telles qu\'allumer/éteindre les phares, klaxonner ainsi que lancer des roquettes meurtrières !!
<br><br>
<strong>Cette monture active les pouvoirs secrets du <a href="/site/shop_objet.php?giveme=161" target="_blank" class="fofo_link_extern">Blibli Hélico Collector #04</a></strong>
<br><br>
<strong style="color:#BC6BD6;">Boostez la puissance de votre armée avec le véhicule Jeep Commando !!</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            152 =>
                array (
                    'id' => 161,
                    'name' => 'BLIBLI : Hélico Commando "Collector"',
                    'name_shop' => 'BLIBLI : Hélico Commando "Collector"',
                    'description' => '<strong>BLIBLI Carte Collector #04 !!</strong><br>

L\'hélicoptère de combat de référence ! Ce puissant allié déploiera toutes ses capacités aux côtés d\'un skin militaire nouvelle génération (ou d\'une Jeep commando).<br>
Au programme : deux batteries de missiles qui tirent en rafale de temps en temps pour renforcer ta force destructrice et un design lumineux super stylé !!

<br><br><strong style="color:#BC6BD6;">Le Blibli Hélico Commando est GRATUIT !! Tu le gagnes avec une Carte Cadeau #04 qui est offerte pour tout achat sur NIVEAU99-SHOP :)</strong>
<br><br>
<a href="http://www.blablaland.com/site/blabillons.php?m=cadeau" class="fofo_link_extern">Si tu as reçu une carte, clique ici pour entrer le code et avoir le skin</a>

<br><br>
La Carte Cadeau #04 n\'est plus disponible... elle est désormais considérée comme RARE !!<br><br>
Plus d\'information sur : <a href="http://www.niveau99-shop.com" target="_blank">NIVEAU99-SHOP</a>',
                    'price' => 1,
                    'token' => 0,
                    'special' => 'CARD',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            153 =>
                array (
                    'id' => 162,
                    'name' => 'Potion de Pierre',
                    'name_shop' => 'Potion de Pierre',
                    'description' => 'POOOF !! Transforme-toi en bloc de Pierre grâce à cette potion. La peau de ton personnage deviendra toute dure et toute grise comme une statue de pierre et tu seras invincible pendant 1 minute comme si tu avais un bouclier !!<br>
Bon après... la Pierre, c\'est lourd hein, alors pour se déplacer, c\'est pas gagné !! M\'enfin, tu es invincible en même temps !!<br>PS : Très fun avec le Lance-Potion :)
<br><br>
<em style="color:#BC6BD6;">Cette Potion peut aussi être achetée en jeu auprès du Marchand Alchimiste (Zone 52, au pied du Champi Géant)</em>
<br /><br />
<strong style="color:#BC6BD6;">Transforme-toi (ou les autres) en une super Statue de Pierre et deviens invincible... !!!</strong>',
                    'price' => 7,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 4,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            154 =>
                array (
                    'id' => 163,
                    'name' => 'Potion Étoile',
                    'name_shop' => 'Potion Étoile',
                    'description' => '<strong>Potion Suprême !!</strong> C\'est presque comme un petit Plombier avec une moustache, cette potion te fera sauter méga haut, courrir hyper vite avec une magnifique trainée d\'étoiles magiques, ton skin sera éclatant de couleurs... et en plus, tu seras immortel pendant tout le temps de son effet !!<br />La Potion Suprême quoi :)<br /><br />Le seul truc, c\'est que cette Potion ne peut pas s\'acheter... il faut la créer soi-même avec <a href="/site/shop_skin.php?gr=6" class="fofo_link_extern">un laboratoire d\'alchimie</a>... mais surtout, il faut découvrir sa recette secrète !!<br /><br /><strong style="color:#BC6BD6;">Découvre la recette secrète pour créer cette Ultime Potion Étoile !!!</strong>',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 4,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            155 =>
                array (
                    'id' => 164,
                    'name' => 'Potion Plume',
                    'name_shop' => 'Potion Plume',
                    'description' => 'Cette Potion est composée d\'ingrédients de douceur et de légèreté, mélangés avec un très grand soin. Elle permet à quiconque la boiera de devenir léger comme une plume... Et du coup de s\'envoler haut, très haut dans les airs et de retomber avec une incroyable délicatesse.
<br><br>
<em style="color:#BC6BD6;">Cette Potion peut aussi être achetée en jeu auprès du Marchand Alchimiste (Zone 52, au pied du Champi Géant)</em>
<br /><br />
<strong style="color:#BC6BD6;">Une potion tout en finesse pour devenir léger comme une plume !!!</strong>',
                    'price' => 7,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 4,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            156 =>
                array (
                    'id' => 165,
                    'name' => 'Potion Foudre',
                    'name_shop' => 'Potion Foudre',
                    'description' => 'OMG !! Découvrez la redoutable Potion Foudre, rien que son nom donne des frissons dans le dos !!<br />
Lorsqu\'un Blabla prend cette potion (<em>avec ou sans son consentement grâce au Lance-Potion, niarf niarf</em>), il commence par s\'électrocuter pendant 2 sec... Et oui, la Foudre ça rigole pas !!<br />
A l\'issu de cette électrocution... il peut mourir mais c\'est très rare quand même. S\'il survie, il est alors imprégné par la Foudre et devient très électrique au point d\'avoir des éclairs qui partent de son corps pour électrocuter d\'autres blablas à leur tour et propager les effets foudroyant de cette Potion ... justement  très foudroyante !!<br>Attention, ça bourine grave !!
<br><br>
<em style="color:#BC6BD6;">Cette Potion peut aussi être achetée en jeu auprès du Marchand Alchimiste (Zone 52, au pied du Champi Géant)</em>
<br /><br />
<strong style="color:#BC6BD6;">Une potion à manipuler avec précaution...au risque de se prendre la foudre en pleine tête !!</strong>',
                    'price' => 7,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 4,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            157 =>
                array (
                    'id' => 166,
                    'name' => 'Potion Gros CACA !!',
                    'name_shop' => 'Potion Gros CACA !!',
                    'description' => '<strong>Potion Suprême !!</strong> Encore plus incroyable que la Potion Caca, découvre l\'ultime Potion du GROS CACA !! A-t-on vraiment besoin de décrire ses effets... ? Quiconque se trouvera en contact avec cette potion sera immédiatement transformé en caca... énoooorme caca !!<br />
Redoutable !! Surtout au Lance-Potions :)<br /><br />
Le seul truc, c\'est que cette Potion ne peut pas s\'acheter... il faut la créer soi-même avec <a href="/site/shop_skin.php?gr=6" class="fofo_link_extern">un laboratoire d\'alchimie</a>... mais surtout, il faut découvrir sa recette secrète !!<br /><br />
<strong style="color:#BC6BD6;">Découvre la recette secrète pour créer cette Ultime Potion Étoile !!!</strong>',
                    'price' => 14,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 4,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            158 =>
                array (
                    'id' => 167,
                    'name' => 'MONTURE : Chameau',
                    'name_shop' => 'MONTURE : Chameau',
                    'description' => 'Trop délirant !! Promène-toi dans les dunes de Blablaland sur le dos de cette magnifique monture Chameau (oui oui, il a deux bosses). Un design trop choupi et top délire, le Chameau saura rapidement devenir votre monture favorite pour vos expéditions autour des Pyramides !
<br><br>
<strong style="color:#BC6BD6;">Monte à dos de ce magnifique Chameau !! En avant toute !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            159 =>
                array (
                    'id' => 168,
                    'name' => 'BLIBLI : Scarabée des Pyramides',
                    'name_shop' => 'BLIBLI : Scarabée des Pyramides',
                    'description' => 'Ce Blibli doré renferme le secret des Pyramides de Blablaland !! Grâce à son pouvoir, tu pourras te téléporter aux portes de la mystérieuse Pyramide de Blablaland, nouvelle map à découvrir dans les dunes !! Ce Blibli est le compagnon idéal des Pharaons :)
<br><br>
<strong style="color:#BC6BD6;">Le Scarabée des Pyramides, un Blibli mystérieux, parfait pour les aventuriers des Pyramides !</strong>',
                    'price' => 700,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            160 =>
                array (
                    'id' => 169,
                    'name' => 'Drapeau 4 ans Blablaland',
                    'name_shop' => 'Drapeau 4 ans Blablaland',
                    'description' => 'Drapeau 4 ans Blablaland',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            161 =>
                array (
                    'id' => 170,
                    'name' => 'Ballon Anniversaire',
                    'name_shop' => 'Ballon Anniversaire',
                    'description' => '<strong style="color:#FF00FF;">Joyeux Anniversaire Blablaland !!</strong><br />Blablaland fête ses 4 ans, quoi de mieux que des ballons pour décorer les lieux et mettre une excellente ambiance de fête de partout dans le jeux grâce à ces ballons de toutes les couleurs !! Il est possible d\'en mettre jusqu\'à 15 par Map !!!<br />
Offrez un magnifique Anniversaire à Blablaland :)<br /><br />
Des ballons vous sont aussi offerts (1 fois) avec une tranche du gâteau d\'Anniversaire Blablaland dans l\'Irwish (en entrant au fond à droite), YOUHOUUUU !!<br /><br />
<strong style="color:#BC6BD6;">JOYEUX ANNIVERSAIRE BLABLALAND !! Mettez l\'ambiance de fête avec ces supers Ballons aux mille couleurs :)</strong>',
                    'price' => 50,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '15',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            162 =>
                array (
                    'id' => 171,
                    'name' => 'MONTURE : Motor Spring Coupé',
                    'name_shop' => 'MONTURE : Motor Spring Coupé',
                    'description' => '<strong style="color:#00ae00;">MOTOR SPRING !!</strong><br>
Un magnifique petit cabriolet pour te balader dans les plaines de Blabland ! Parfait pour avoir grave la classe à bord de cette petite merveille "Motor Spring". Comme les nouvelles montures véhicules, tu peux allumer tes phares, faire des accélérations, utiliser le BOOST etc depuis une popup spéciale !!<br /><br />
<b>Un must have</b> super stylée... et surtout super cabriolet ^^ Trop trop classe !!
<br><br>
<strong><img src="/images/shop/objects/152.jpg" width="25" height="25">En cadeau 20 Boost pour carburer à fond !</strong>
<br><br>
<strong style="color:#BC6BD6;">Monte à bord de ce magnifique cabriolet pour prendre l\'air sur Blablaland avec classe !</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            163 =>
                array (
                    'id' => 172,
                    'name' => 'MONTURE : Motor Spring Bomber',
                    'name_shop' => 'MONTURE : Motor Spring Bomber',
                    'description' => '<strong style="color:#00ae00;">MOTOR SPRING !!</strong><br>
Le véhicule tout terrain le plus imposant qui soit ! Si tu veux en imposer grave en jeu, voilà le Bomber qu\'il te faut : effet garanti ! Comme les nouvelles montures véhicules, tu peux allumer tes phares, faire des accélérations, baisser les vitres, utiliser le BOOST etc depuis une popup spéciale !!
<br /><br />
<b>Un must have</b> super stylée... et surtout super cabriolet ^^ Trop trop classe !!
<br><br>
<strong><img src="/images/shop/objects/152.jpg" width="25" height="25">En cadeau 20 Boost pour carburer à fond !</strong>
<br><br>
<strong style="color:#BC6BD6;">Monte à bord de cet imposant et incroyable Bomber - Un luxe exceptionnel !</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            164 =>
                array (
                    'id' => 173,
                    'name' => 'Sac d\'Herboriste',
                    'name_shop' => 'Sac d\'Herboriste',
                    'description' => 'Sac d\'Herboriste',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            165 =>
                array (
                    'id' => 174,
                    'name' => 'Pétale de Rose',
                    'name_shop' => 'Pétale de Rose',
                    'description' => 'Pétale de Rose',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            166 =>
                array (
                    'id' => 175,
                    'name' => 'Pétale de Lys',
                    'name_shop' => 'Pétale de Lys',
                    'description' => 'Pétale de Lys',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            167 =>
                array (
                    'id' => 176,
                    'name' => 'Pétale de Tulipe',
                    'name_shop' => 'Pétale de Tulipe',
                    'description' => 'Pétale de Tulipe',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            168 =>
                array (
                    'id' => 177,
                    'name' => 'Trèfle',
                    'name_shop' => 'Trèfle',
                    'description' => 'Trèfle',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            169 =>
                array (
                    'id' => 178,
                    'name' => 'Brin d\'herbe',
                    'name_shop' => 'Brin d\'herbe',
                    'description' => 'Brin d\'herbe',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            170 =>
                array (
                    'id' => 179,
                    'name' => 'Fiole Vide',
                    'name_shop' => 'Fiole Vide',
                    'description' => 'Cette Fiole Vide te permet de fabriquer toi-même des Potions avec l\'Alchimiste. Les recettes utilisant la Fiole Vide nécessitent aussi des fleurs qui se récoltent avec le Druide.<br /><br />
<strong>Comment s\'en procurer :</strong> La Fiole Vide peut être fabriquée par l\'Alchimiste (recette à découvrir), mais il est aussi possible de l\'acheter directement en jeu auprès du Marchand Alchimiste au pied du Champi Géant (zone 52)
<br><br>
<strong style="color:#BC6BD6;">La Fiole Vide... pleine d\'air... à remplir soi-même !!</strong>',
                    'price' => 1,
                    'token' => 0,
                    'special' => 'ALCHEMIST',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 4,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            171 =>
                array (
                    'id' => 180,
                    'name' => 'OverBoard TIGER #1 !!',
                    'name_shop' => 'OverBoard TIGER #1 !!',
                    'description' => '<strong style="color:#FF00FF;">NOUVEAUX LOOK : OVERBOARD TIGER !!</strong><br />
<b>LA PUISSANCE ULTIME !!</b> Au même niveau de puissance des Overboards Shark, mais avec un nouveau look ravageur qui s\'illumine la nuit !!<br />
Cette version d\'Overboard réunit le fun, la vitesse et la méga-puissance, que des sensations extrêmes !! Choisis la couleur de ta planche et défie les lois de la Gravité !!<br>
TIGER : Tout comme les SHARK, cette planche te permet aussi de surfer sur l\'eau, et même de faire de maxi-plongeons et de nager carrément plus vite en t\'accrochant à elle !:<br>
Un must-have, mais... sauras-tu la maîtriser ? :D
<br /><br />
<strong style="color:#BC6BD6;">Certainement le moyen le plus efficace de se déplacer, avec graaande classe !!</strong>',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            172 =>
                array (
                    'id' => 181,
                    'name' => 'OverBoard TIGER #2 !!',
                    'name_shop' => 'OverBoard TIGER #2 !!',
                    'description' => '<strong style="color:#FF00FF;">NOUVEAUX LOOK : OVERBOARD TIGER !!</strong><br />
<b>LA PUISSANCE ULTIME !!</b> Au même niveau de puissance des Overboards Shark, mais avec un nouveau look ravageur qui s\'illumine la nuit !!<br />
Cette version d\'Overboard réunit le fun, la vitesse et la méga-puissance, que des sensations extrêmes !! Choisis la couleur de ta planche et défie les lois de la Gravité !!<br>
TIGER : Tout comme les SHARK, cette planche te permet aussi de surfer sur l\'eau, et même de faire de maxi-plongeons et de nager carrément plus vite en t\'accrochant à elle !:<br>
Un must-have, mais... sauras-tu la maîtriser ? :D
<br /><br />
<strong style="color:#BC6BD6;">Certainement le moyen le plus efficace de se déplacer, avec graaande classe !!</strong>',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            173 =>
                array (
                    'id' => 182,
                    'name' => 'Graines de Lys',
                    'name_shop' => 'Graines de Lys',
                    'description' => '<strong style="color:#FF00FF;">NOUVELLE FORMULE !!</strong><br />
Whouaaa !! Des fleurs, ça change tout, même les coins les plus sombres de Blablaland brillent une fois fleuris !! Plante des graines de Lys sur le tchat et admire le travail de Dame nature (si un jardinier passe par là, en arrosant ça poussera plus vite). Une fois toutes belles, tu peux cueillir les fleurs et découvrir la magie !!<br>
<b>Si tu trouves un trèfle porte-bonheur, tu gagneras un cadeau (les Leprechauns ont 2 fois plus de chance d\'en trouver un ^^)</b>
<br />
<strong style="color:#BC6BD6;">Cueille les fleurs de Lys sur le tchat, et si tu trouves un trèfle, tu gagnes des Blabillons !!</strong>',
                    'price' => 100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '10',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            174 =>
                array (
                    'id' => 183,
                    'name' => 'Graines de Roses',
                    'name_shop' => 'Graines de Roses',
                    'description' => '<strong style="color:#FF00FF;">NOUVELLE FORMULE !!</strong><br />
Whouaaa !! Des fleurs, ça change tout, même les coins les plus sombres de Blablaland brillent une fois fleuris !! Plante des graines de Roses sur le tchat et admire le travail de Dame nature (si un jardinier passe par là, en arrosant ça poussera plus vite). Une fois toutes belles, tu peux cueillir les fleurs et découvrir la magie !!<br>
<b>Si tu trouves un trèfle porte-bonheur, tu gagneras un cadeau (les Leprechauns ont 2 fois plus de chance d\'en trouver un ^^)</b>
<br />
<strong style="color:#BC6BD6;">Cueille les fleurs de Roses sur le tchat, et si tu trouves un trèfle, tu gagnes des Blabillons !!</strong>',
                    'price' => 100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '10',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            175 =>
                array (
                    'id' => 184,
                    'name' => 'Graines de Tulipes',
                    'name_shop' => 'Graines de Tulipes',
                    'description' => '<strong style="color:#FF00FF;">NOUVELLE FORMULE !!</strong><br />
Whouaaa !! Des fleurs, ça change tout, même les coins les plus sombres de Blablaland brillent une fois fleuris !! Plante des graines de Tulipes sur le tchat et admire le travail de Dame nature (si un jardinier passe par là, en arrosant ça poussera plus vite). Une fois toutes belles, tu peux cueillir les fleurs et découvrir la magie !!<br>
<b>Si tu trouves un trèfle porte-bonheur, tu gagneras un cadeau (les Leprechauns ont 2 fois plus de chance d\'en trouver un ^^)</b>
<br />
<strong style="color:#BC6BD6;">Cueille les fleurs de Tulipes sur le tchat, et si tu trouves un trèfle, tu gagnes des Blabillons !!</strong>',
                    'price' => 100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '10',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            176 =>
                array (
                    'id' => 185,
                    'name' => 'MONTURE : Scooter Vesbla',
                    'name_shop' => 'MONTURE : Scooter Vesbla',
                    'description' => '<strong style="color:#FF00FF;">TROP LA CLASSE !!</strong><br />
Vrooooooom !! Monte sur ton super Scooter Vesbla et balade-toi sur les collines de Blablaland !! Super stylé avec son sticker Poussin Toyz, super fun, ce scooter est tout simplement génial !! Simple mais rudement efficace, il sera le compagnon idéal pour prendre l\'air !!
<br /><br />
<strong style="color:#BC6BD6;">Certainement le moyen le plus fun et agréable de se déplacer, avec graaande classe !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            177 =>
                array (
                    'id' => 186,
                    'name' => 'MONTURE : Avion Biplan',
                    'name_shop' => 'MONTURE : Avion Biplan',
                    'description' => 'Pars à la conquête des nuages de Blablaland avec cet Avion Biplan super rétro !! Un gameplay tout particulier pour cette monture qui donnera une réelle sensation de vol à l\'ancienne :<br />
Une fois à bord de votre Avion, avancez un moment pour prendre de la vitesse, une fois que la queue de l\'avion se soulève et qu\'il fait de la fumée c\'est parti, vous pouvez appuyer sur la touche du haut et la maintenir enfoncée. Votre avion prendra lentement de l\'altitude. Vous pouvez à tout moment relâcher la touche du haut tant que vous maintenez une direction (droite ou gauche) !!<br />
<br />
A vous la conquête du ciel de Blablaland en mode rétro, mais super fun !! Vous pouvez même monter des groupes d\'avions pour faire des défilés ^__^
<br>
<br>
<strong style="color:#BC6BD6;">Une Monture Avion Biplan hors du temps, super rétro avec un gameplay vraiment fun à jouer !! Un must-have !!</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            178 =>
                array (
                    'id' => 187,
                    'name' => 'Drapeau Pyramide Huybit III',
                    'name_shop' => 'Drapeau Pyramide Huybit III',
                    'description' => '<strong style="color:#fa9a00;">RECOMPENSE PYRAMIDE HUYBIT III</strong><br />
L\'ultime récompense de la Pyramide Huybit III !! Le drapeau symbolise ton extrême maîtrise du jeu et impose le respect... trop la classe !! Quiconque porte ce drapeau sera au sommet de la gloire :)
<br /><br />
<strong style="color:#BC6BD6;">L\'ultime récompense... démontre ton incontestable maîtrise du jeu avec ce drapeau collector !!</strong>
<br /><br />
<a href="/site/jeu_pyramide.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/1.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Pyramide Huybit III</a>',
                    'price' => 10,
                    'token' => 2500,
                    'special' => 'PYRAMID',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 5,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            179 =>
                array (
                    'id' => 188,
                    'name' => 'BLIBLI : Scarabée de la Pyramide Huybit III',
                    'name_shop' => 'BLIBLI : Scarabée de la Pyramide Huybit III',
                    'description' => '<strong style="color:#fa9a00;">RECOMPENSE PYRAMIDE HUYBIT III</strong><br />
Découvrez la variante Pixel Huybit du Blibli Scarabée. Il possède les mêmes pouvoirs que son confrère à savoir un téléport gratuit et direct vers la Pyramide. Le meilleur moyen pour aller déjouer la Malédiction d\'un simple clic !! Un look super rétro, trop classe quoi !!
<br /><br />
<strong style="color:#BC6BD6;">La version Huybit du Scarabée des Pyramides !! un must have pour venir jouer d\'un clic !!</strong>
<br /><br />
<a href="/site/jeu_pyramide.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/1.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Pyramide Huybit III</a>',
                    'price' => 10,
                    'token' => 150,
                    'special' => 'PYRAMID',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 5,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            180 =>
                array (
                    'id' => 189,
                    'name' => 'MONTURE : Nuage Monkey "Collector"',
                    'name_shop' => 'MONTURE : Nuage Monkey "Collector"',
                    'description' => '<strong style="color:#FF00FF;">Monture Carte Collector #05 !!</strong><br />

Découvrez l\'incroyable monture Nuage Monkey qui vous fera planer dans les airs un peu comme un overboard, mais avec plus de puissance. De plus, si vous appuyez deux fois dans une direction, le Nuage Monkey passera en vitesse accélérée et ira encore plus vite !! Prenez un grand bol d\'air frais ^__^
<br />
<br />
<strong>Whouaa : Le Nuage Monkey peut se transformer en Galion Pirate s\'il est utilisé avec une variante Pirate du singe Monkey !! A posséder d\'urgence !!</strong>
<br /><br />
<strong style="color:#BC6BD6;">La monture Nuage Monkey est GRATUITE !! Tu la gagnes grâce à la Carte Cadeau #05 qui est offerte pour tout achat sur NIVEAU99-SHOP :)</strong>
<br><br>
<a href="http://www.blablaland.com/site/blabillons.php?m=cadeau" class="fofo_link_extern">Si tu as reçu une carte, clique ici pour entrer le code et obtenir la monture</a>

<br><br>
La Carte Cadeau #05 est offerte pour tout achat effectué sur notre Boutique de Produits dérivés <a href="http://www.niveau99-shop.com" target="_blank">NIVEAU99-SHOP</a> !! Youhouuu !!',
                    'price' => 1,
                    'token' => 0,
                    'special' => 'CARD',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            181 =>
                array (
                    'id' => 190,
                    'name' => 'Coffre Pyramide',
                    'name_shop' => 'Coffre Pyramide',
                    'description' => '<strong style="color:#fa9a00;">RECOMPENSE PYRAMIDE HUYBIT III</strong><br />
Une fois par jour tu peux acheter ce coffre pour gagner 10 Blabillons. Tu ne peux le faire qu\'une fois par jour, ensuite, tu devras attendre le lendemain si tu désires convertir à nouveau des Jetons Pyramide en Blabillons !!<br />
<br />
<b>Fonctionnement : Lorsque tu as assez de Jetons Pyramide et que tu désires les convertir en BBL, il te suffit d\'acheter ce coffre qui ta fais gagner instantanément 10 BBL.<br />
<em>Le coffre n\'apparait pas dans ton inventaire en jeu.</em></b>
<br /><br />
<strong style="color:#BC6BD6;">Tous les jours, gagne 10 BBL en convertissant tes Jetons Pyramide !!</strong>
<br /><br />
<a href="/site/jeu_pyramide.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/1.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Pyramide Huybit III</a>',
                    'price' => 1,
                    'token' => 100,
                    'special' => 'PYRAMID',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 5,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            182 =>
                array (
                    'id' => 191,
                    'name' => 'MONTURE : Amphore Pixel Huybit III',
                    'name_shop' => 'MONTURE : Amphore Pixel Huybit III',
                    'description' => '<strong style="color:#fa9a00;">RECOMPENSE PYRAMIDE HUYBIT III</strong><br />
Whouuaaaa !! Découvrez une monture incroyablement délire et enflammée !! Ultra rapide et au look trop rétro, designée par Huybit III en personne, cette amphore vous propulsera à une vitesse pharaonique dans tout Blablaland !!
<br /><br />
<strong style="color:#BC6BD6;">Une monture Pixel Huybit qui vous propulsera à une vitesse pyramidale !! Oui oui, ce mot n\'existe pas... mais aucun mot ne peut décrire cette ultime monture !!</strong>
<br /><br />
<a href="/site/jeu_pyramide.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/1.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Pyramide Huybit III</a>',
                    'price' => 10,
                    'token' => 600,
                    'special' => 'PYRAMID',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 5,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            183 =>
                array (
                    'id' => 192,
                    'name' => 'MONTURE : Sous-Marin Blablataille Navale',
                    'name_shop' => 'MONTURE : Sous-Marin Blablataille Navale',
                    'description' => '<strong style="color:#53a2ff;">RECOMPENSE BLABLATAILLE NAVALE</strong><br />
Monte à bord du Sous-Marin exclusif Blablataille Navale. Super rapide et maniable dans l\'eau, il possède en plus la possibilité de se transformer en aéroglisseur une fois sur le sol. Une monture hors du commun transformable pour aller "partout" sur Blablaland !!
<br /><br />
<strong style="color:#BC6BD6;">Un sous-marin pour dominer le fond des Océans de Blablaland qui peut se transformer en aéroglisseur une fois sur terre !! Un must-have !!</strong>
<br /><br />
<a href="/site/jeu_blablataille_navale.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/2.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Blablataille Navale</a>',
                    'price' => 10,
                    'token' => 1000,
                    'special' => 'NAVAL_BATTLE',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 5,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            184 =>
                array (
                    'id' => 193,
                    'name' => 'BLIBLI : Sous-Marin Bataille Navale',
                    'name_shop' => 'BLIBLI : Sous-Marin Bataille Navale',
                    'description' => 'Boostez vos parties de Blablataille Navale !! Un fois activé en jeu, ce Blibli apporte de nouveaux "Powa" redoutables au mini-jeu de la Blablataille Navale.<br />
Mais ce n\'est pas tout, à la fin de la partie, si ce Blibli est activé, vous gagnez 20% de Jetons Blablataille Navale en plus.
<br /><br />
<strong style="color:#BC6BD6;">Le Blibli indispensable pour booster vos parties et vos scores à la Blablataille Navale. Pensez à l\'activer avant de jouer !</strong>
<br /><br />
<a href="/site/jeu_blablataille_navale.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/2.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Blablataille Navale</a>',
                    'price' => 700,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            185 =>
                array (
                    'id' => 194,
                    'name' => 'Bouée Bataille Navale',
                    'name_shop' => 'Bouée Bataille Navale',
                    'description' => '<strong style="color:#53a2ff;">RECOMPENSE BLABLATAILLE NAVALE</strong><br />
Enfile ta bouée exclusive "Blablataille Navale" et flotte sur l\'eau !! Mets-la au fond de l\'eau et elle te fera remonter super vite à la surface !! Et pour plus de délire, tu peux enfiler jusqu\'à 3 bouées en même temps !!
Voilà de quoi passer un super bon moment dans l\'eau au soleil tout en jouant à la Blablataille Navale ^^
<br /><br />
<strong style="color:#BC6BD6;">Une bouée trop exclusive Blablataile Navale XD</strong>
<br /><br />
<a href="/site/jeu_blablataille_navale.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/2.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Blablataille Navale</a>',
                    'price' => 10,
                    'token' => 150,
                    'special' => 'NAVAL_BATTLE',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 5,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            186 =>
                array (
                    'id' => 195,
                    'name' => 'Drapeau Blablataille Navale',
                    'name_shop' => 'Drapeau Blablataille Navale',
                    'description' => '<strong style="color:#53a2ff;">RECOMPENSE BLABLATAILLE NAVALE</strong><br />
L\'ultime récompense de la Blablataille Navale !! Le drapeau symbolise ton extrême maîtrise du jeu et impose le respect... trop la classe !! Quiconque porte ce drapeau sera au sommet de la gloire :)
<br /><br />
<strong style="color:#BC6BD6;">L\'ultime récompense... démontre ton incontestable maîtrise du jeu avec ce drapeau collector !! </strong>
<br /><br />
<a href="/site/jeu_blablataille_navale.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/2.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Blablataille Navale</a>',
                    'price' => 10,
                    'token' => 2500,
                    'special' => 'NAVAL_BATTLE',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 5,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            187 =>
                array (
                    'id' => 196,
                    'name' => 'Coffre Blablataille Navale',
                    'name_shop' => 'Coffre Blablataille Navale',
                    'description' => '<strong style="color:#53a2ff;">RECOMPENSE BLABLATAILLE NAVALE</strong><br />
Une fois par jour, tu peux acheter ce coffre pour gagner 10 Blabillons. Tu ne peux le faire qu\'une fois par jour, ensuite, tu devras attendre le lendemain si tu désires convertir à nouveau des Jetons Blablataille Navale en Blabillons !!<br />
<br />
<b>Fonctionnement : Lorsque tu as assez de Jetons Blablataille Navale et que tu désires les convertir en BBL, il te suffit d\'acheter ce coffre qui te fait gagner instantanément 10 BBL.<br />
<em>Le coffre n\'apparaît pas dans ton inventaire en jeu.</em></b>
<br /><br />
<strong style="color:#BC6BD6;">Tous les jours, gagne 10 BBL en convertissant tes Jetons Blablataille Navale !!</strong>
<br /><br />
<a href="/site/jeu_blablataille_navale.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/2.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Blablataille Navale</a>',
                    'price' => 1,
                    'token' => 100,
                    'special' => 'NAVAL_BATTLE',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 5,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            188 =>
                array (
                    'id' => 197,
                    'name' => 'MONTURE : Laveuse de Supermarché',
                    'name_shop' => 'MONTURE : Laveuse de Supermarché',
                    'description' => '<strong style="color:#FF00FF;">Récompense Madame Pipi !!</strong><br />
Gagne l\'exclusive "Laveuse de Supermarché" de Madame Pipi (1ère de la série monture).<br />
Cette monture, en plus d\'être juste ultra fun, permet de nettoyer les Blablas sales lorsque tu passes devant eux !! Top délire, merci Madame Pipi de partager ton arsenal de nettoyage !!
<br />A looter en donnant des pièces à Madame Pipi !!
<br />
<br />
<strong>Cette monture peut être gagnée dans les Toilettes de l\'Irwish !</strong>
<br />
<a href="" class="fofo_link3_extern" target="_blank">Clique ici pour savoir comment la gagner</a>
<br>
<br>
<strong style="color:#BC6BD6;">La 1ère monture qui se gagne avec Madame Pipi dans les Toilettes de l\'Irwish !!</strong>',
                    'price' => 1,
                    'token' => 0,
                    'special' => 'IRWISH_TOILET',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            189 =>
                array (
                    'id' => 198,
                    'name' => 'MONTURE : Laveuse de Supermarché Tuning',
                    'name_shop' => 'MONTURE : Laveuse de Supermarché Tuning',
                    'description' => '<strong style="color:#FF00FF;">Récompense Madame Pipi !!</strong><br />
Gagne l\'exclusive "Laveuse de Supermarché Tuning" de Madame Pipi (2ème et dernière de la série monture).<br />
Cette monture, en plus d\'être ultra fun, permet de nettoyer les Blablas sales lorsque tu passes devant eux !! Top délire, merci Madame Pipi de partager ton arsenal de nettoyage !!
<br />
Mais ce n\'est pas tout, il est possible d\'utiliser les <a href="/site/shop_objet.php?giveme=152" class="fofo_link_extern" target="_blank">BOOSTS</a> sur cette monture pour nettoyer encore plus vite !! Top délire !!
<br />A looter en donnant des pièces à Madame Pipi !!
<br />
<br />
<strong>Cette monture peut être gagnée dans les Toilettes de l\'Irwish !</strong>
<br />
<a href="" class="fofo_link3_extern" target="_blank">Clique ici pour savoir comment le gagner</a>
<br>
<br>
<strong style="color:#BC6BD6;">La 2ème (et dernière) monture qui se gagne avec Madame Pipi dans les Toilettes de l\'Irwish !! Version ULTIME avec BOOST !!</strong>',
                    'price' => 1,
                    'token' => 0,
                    'special' => 'IRWISH_TOILET',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            190 =>
                array (
                    'id' => 199,
                    'name' => 'Drapeau Madame Pipi',
                    'name_shop' => 'Drapeau Madame Pipi',
                    'description' => '<strong style="color:#FF00FF;">Récompense Madame Pipi !!</strong><br />
Gagne le Drapeau exclusif de Madame Pipi  !! L\'ultime récompense qui ne peut être lootée qu\'après avoir gagné les 3 skins et les 2 montures !! C\'est clairement la récompense ultime de Madame Pipi qui permet d\'avoir la classe totale !!
<br />A looter en donnant des pièces à Madame Pipi !!
<br />
<br />
<strong>Le Drapeau peut être gagné dans les Toilettes de l\'Irwish !</strong>
<br />
<a href="" class="fofo_link3_extern" target="_blank">Clique ici pour savoir comment le gagner</a>
<br>
<br>
<strong style="color:#BC6BD6;">La récompense ultime, qui se gagne avec Madame Pipi dans les Toilettes de l\'Irwish !!</strong>',
                    'price' => 1,
                    'token' => 0,
                    'special' => 'IRWISH_TOILET',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            191 =>
                array (
                    'id' => 200,
                    'name' => 'BLIBLI : Lapin Plage 1',
                    'name_shop' => 'BLIBLI : Lapin Plage 1',
                    'description' => '<strong style="color:#FF00FF;">BLIBLI EXCLU LAPIN PLAGE !!</strong><br>
Adoptez ce merveilleux bébé nuage qui ne demande qu\'à être aimé ! Il saura vous accompagner dans vos périples les plus déjantés.
<br><br>
<strong style="color:#FF00FF;">Blibli OFFERT en achetant <a /site/shop_skin.php?giveme=376&gr=3" class="fofo_link_extern"><img src="/images/shop/skins/376.jpg" width="30" border="0" align="absmiddle" /> le skin Lapin Plage</a></strong>
<br />
Ce Blibli ne peut pas être acheté, c\'est une exclusivité Lapin Plage !!',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            192 =>
                array (
                    'id' => 201,
                    'name' => 'BLIBLI : Lapin Plage 2',
                    'name_shop' => 'BLIBLI : Lapin Plage 2',
                    'description' => '<strong style="color:#FF00FF;">BLIBLI EXCLU LAPIN PLAGE !!</strong><br>
Ce mignon blibli tout plein vous fera craquer avec sa casquette à hélices !
Découvrez l\'un des deux compagnons du Lapin Plage le plus craquant !
<br><br>
<strong style="color:#FF00FF;">Blibli OFFERT en achetant <a /site/shop_skin.php?giveme=376&gr=3" class="fofo_link_extern"><img src="/images/shop/skins/376.jpg" width="30" border="0" align="absmiddle" /> le skin Lapin Plage</a></strong>
<br />
Ce Blibli ne peut pas être acheté, c\'est une exclusivité Lapin Plage !!',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            193 =>
                array (
                    'id' => 203,
                    'name' => 'Élixir de Leprechaun',
                    'name_shop' => 'Boisson Irwish : Élixir de Leprechaun',
                    'description' => '<strong style="color:#31CE00;">BOISSON Spéciale IRWISH !!</strong><br>
Le fameux Elixir de Leprechaun, une Boisson très convoitée dans les plaines de Blablaland. Avec un goût très prononcé et magique, cette Boisson va créer une petite pairie toute fleurie à vos pieds, comme dans un rêve !!
<br /><br />
L\'effet de cette Élixir vous donne plus de chance de trouver des Trèfles sur les fleurs !
<br><br>
<em>Vous pouvez boire cette boisson, ou bien l\'offrir à un ami en cliquant dessus, puis action. A noter : Trop de glouglou, ça pique les yeux :P</em>
<br />
<strong style="color:#BC6BD6">Cette boisson ne peut être achetée que dans l\'Irwish de Blablaland !!</strong>',
                    'price' => 5,
                    'token' => 0,
                    'special' => 'IRWISH',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            194 =>
                array (
                    'id' => 204,
                    'name' => 'Sirop de Trèfle',
                    'name_shop' => 'Boisson Irwish : Sirop de Trèfle',
                    'description' => '<strong style="color:#31CE00;">BOISSON Spéciale IRWISH !!</strong><br>
Mmmhh, avec un bon goût fruité, le Sirop de trèfle développera une aura verte au pied de votre Blabla pendant quelques instants !! C\'est un peu son second effet TrèfleKool :)
<br><br>
<em>Vous pouvez boire cette boisson, ou bien l\'offrir à un ami en cliquant dessus, puis action. A noter : Trop de glouglou, ça pique les yeux :P</em>
<br />
<strong style="color:#BC6BD6">Cette boisson ne peut être achetée que dans l\'Irwish de Blablaland !!</strong>',
                    'price' => 3,
                    'token' => 0,
                    'special' => 'IRWISH',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            195 =>
                array (
                    'id' => 205,
                    'name' => 'Pinte du Lutin',
                    'name_shop' => 'Boisson Irwish : Pinte du Lutin',
                    'description' => '<strong style="color:#31CE00;">BOISSON Spéciale IRWISH !!</strong><br>
Akala Glouglou !! la Pinte du lutin, la boisson qui fait des bulles après l\'avoir bue. Une excellente Pinte parfaite pour passer de bons moments avec ses amis dans l\'Irwish !
<br><br>
<em>Vous pouvez boire cette boisson, ou bien l\'offrir à un ami en cliquant dessus, puis action. A noter : Trop de glouglou, ça pique les yeux :P</em>
<br />
<strong style="color:#BC6BD6">Cette boisson ne peut être achetée que dans l\'Irwish de Blablaland !!</strong>',
                    'price' => 2,
                    'token' => 0,
                    'special' => 'IRWISH',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            196 =>
                array (
                    'id' => 206,
                    'name' => 'BLIBLI : Papillon Princesse',
                    'name_shop' => 'BLIBLI : Papillon Princesse',
                    'description' => '<strong style="color:#FF00FF;">BLIBLI EXCLU PRINCESSE !!</strong><br>
Ce charmant Blibli Papillon vous suivra avec délicatesse dans toutes vos aventures. Il est juste trop joli :)
<br><br>
<strong style="color:#FF00FF;">Blibli OFFERT en achetant <a href="/site/shop_skin.php?giveme=377&gr=13" class="fofo_link_extern"><img src="/images/shop/skins/377.jpg" width="30" border="0" align="absmiddle" /> le skin Princesse</a></strong>
<br />
Ce Blibli ne peut pas être acheté, c\'est une exclusivité de la Princesse !!',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            197 =>
                array (
                    'id' => 207,
                    'name' => 'MONTURE : Licorne',
                    'name_shop' => 'MONTURE : Licorne',
                    'description' => 'Chevauchez une Licorne de rêve, monture idéale et pleine de magie pour la Princesse.<br />La licorne possède le pouvoir de la lumière qui illumine ses sabots et la fait galoper à grande allure dans un nuage d\'étoiles. Une monture magique à découvrir sans plus attendre !
<br />
<br />
<strong style="color:#BC6BD6;">Traversez Blablaland à dos de Licorne, un rêve qui devient réalité !</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            198 =>
                array (
                    'id' => 208,
                    'name' => 'Transformation Chauve-Souris',
                    'name_shop' => 'Transformation Chauve-Souris',
                    'description' => '<strong style="color:#FF5001;">EXCLU HALLOWEEN !!</strong><br>
Incroyable : Une fiole qui te permet de te transformer en chauve-souris pendant 1 min !! Et c\'est la Sorcière qui vend ça, un mélange bien précieux issu de son immonde mixture verdâtre... Le pouvoir de la Chauve-Souris est entre tes mains !!
<br /><br />
<strong style="color:#ef4400;">Les fioles ne sont plus disponibles à l\'achat, rendez-vous au prochain Halloween !</strong>
<!--
<strong style="color:#ef4400;">Les Fioles de Transformation Chauve-Souris ne peuvent être achetées qu\'aux PNJ Sorcières directement en jeu.<br /><br />
Attention, à la fin d\'Halloween, les fioles ne seront plus en vente ! Profitez-en maintenant et faites le stock (car elles ne seront bien entendu pas retirées de votre inventaire mais  seulement plus disponibles à l\'achat) !!</strong>
-->',
                    'price' => 1,
                    'token' => 0,
                    'special' => 'HALLOWEEN',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 4,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            199 =>
                array (
                    'id' => 209,
                    'name' => 'Peluche Doudou Vaudou :)',
                    'name_shop' => 'Peluche Doudou Vaudou :)',
                    'description' => '<strong style="color:#FF5001;">EXCLU Poupée Vaudou !!</strong><br>
Promène toi avec une Peluche "Doudou Vaudou" dans les bras. Une nouveauté maléfique, le Doudou Vaudou :) Tout doux, mais surtout Vaudou, cette Peluche t\'apportera beaucoup de tendresse... Attention tout de même aux aiguilles, ça piquent !!
<br /><br />
<strong><a href="/site/shop_skin.php?giveme=562" class="fofo_link_extern"><img src="/images/shop/skins/562.jpg" align="absmiddle" style="width:45px;" /> Cette Peluche est offerte avec le skin "Poupée Vaudou" !!</a></strong>
<br /><br />
<strong style="color:#ef4400;">Une Peluche Poupée Vaudou, voilà un beau Doudou bien vaudou !!</strong>',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            200 =>
                array (
                    'id' => 210,
                    'name' => 'MONTURE : Groum !',
                    'name_shop' => 'MONTURE : Groum !',
                    'description' => 'Partez au combat pour des batailles épiques à dos d\'une créature de légende !! Barbare et redoutable à souhait, Groum peut charger pour terrasser vos ennemi (appuyez deux fois dans la même direction pour charger).
<br />
<br />
Groum est la monture de prédilection du Mythique Guerrier Secret !!
<br /><br />
<strong style="color:#BC6BD6;">La monture incontournable pour gagner le respect des guerriers et vous engagez dans des Batailles épiques !!</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            201 =>
                array (
                    'id' => 211,
                    'name' => 'BLIBLI compagnon : Cohian',
                    'name_shop' => 'BLIBLI compagnon : Cohian',
                    'description' => '<strong style="color:#FF00FF;">BLIBLI EXCLU Guerrier Secret !!</strong><br>
Le Blibli compagnon de guerre idéal !! Equipé d\'un armure impressionante, Cohian vous suivra partout et complètera votre set de guerrier !!
<br><br>
<strong style="color:#FF00FF;">Blibli OFFERT en achetant <a href="/site/shop_skin.php?giveme=378&gr=10" class="fofo_link_extern"><img src="/images/shop/skins/378.jpg" width="30" border="0" align="absmiddle" /> le skin Guerrier Secret</a></strong>
<br />
Ce Blibli ne peut pas être acheté, c\'est une exclusivité du Guerrier Secret !!',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            202 =>
                array (
                    'id' => 212,
                    'name' => 'MAISON : Chalet',
                    'name_shop' => 'MAISON : Chalet',
                    'description' => '<strong style="color:#F11;">Grande Nouveauté !!</strong><br />
Découvrez la grande nouveauté de Blablaland : Les Maps Privées, sous forme de maisons !! Installez-vous confortablement dans votre Chalet perso pour passer les fêtes avec vos amis, chez vous, sur Blablaland !!
<br /><br />
<b>Fonctionnement pour le Propriétaire :</b><br />
- Installez votre maison dans n\'importe quelle map simplement en cliquant sur le pouvoir,<br />
- Vous êtes directement téléporté dedans, et les autres Blablas voient votre maison en jeu,<br />
- Lorsque quelqu\'un sonne pour entrer, vous avez le choix de l\'accepter ou non chez vous,<br />
- Dans l\'inventaire, vous avez un bouton de réglage de votre maison. Vous pouvez choisir de laisser tout le monde sonner, seulement vos amis, ou bien personne. Vous pouvez aussi passer votre maison en "map protégée".<br />
<br />
<b>Comment entrer dans la maison de quelqu\'un :</b><br />
- Devant une maison, appuyez sur la flèche du bas pour sonner,<br />
- Si son propriétaire vous accepte, une flèche verte apparait au-dessus de la maison pendant quelques secondes,<br />
- Il vous suffit d\'aller devant la maison et de faire flèche du bas pour entrer.<br />
<br />
<em>Note, lorsque le propriétaire quitte sa maison, elle est automatiquement retirée du jeu après quelques secondes. Si d\'autres Blablas étaient dedans, ils sont téléportés dans la map où était posée la maison.</em>
<br /><br />
<b>La Maison Chalet peut contenir 5 Blablas (4 + son propriétaire)</b>
<br /><br />
<strong style="color:#BC6BD6;">Un magnifique Chalet pour passer des fêtes de Noël au chaud devant la cheminée !! Installez votre maison et amusez-vous avec vos amis !!</strong>',
                    'price' => 1600,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 3,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            203 =>
                array (
                    'id' => 213,
                    'name' => 'Skate',
                    'name_shop' => 'Skate',
                    'description' => 'Une pure planche de Skate toute neuve pour grinder les plaines de Blablaland et plaquer des flips !!<br /><br />
<strong>Lorsque tu es en l\'air :</strong> si tu appuies de nouveau sur la flèche du haut tu peux plaquer aléatoirement : un Ollie, un Flip, ou un 360.
<br />
<strong>Avant de retomber sur le sol :</strong> en l\'air, si tu maintiens la flèche du bas enfoncée lorsque tu touches le sol, tu peux grinder.
<br /><br />
Enchaîne les figures pour faire les plus beaux runs possibles, surtout que Blablaland est rempli de superbes spots pour Skater, et même pas besoin de wax ;)
<br>
<br>
<strong style="color:#BC6BD6;">Plaque un 360 en Skate, enchaîne les Ollies et va grinder toutes les plaines de Blablaland !! Le Skate, c\'est juste le must !!</strong>',
                    'price' => 700,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            204 =>
                array (
                    'id' => 214,
                    'name' => 'Glace Pingouin (Transformation)',
                    'name_shop' => 'Glace Pingouin (Transformation)',
                    'description' => '<strong style="color:#F11;">EXCLU NOËL !!</strong><br>
Incroyable : Cette Glace au goût de GlaGla Magique te transforme instantanément en skin "THE Pingouin" pendant 1 minute !! Skin Mythique capable de glissades incroyables et de grand délires glacés !! Cette Glace Pingouin s\'achète directement en jeu auprès du Marchand de Noël présent dans toutes les maps !! GlaGla Powa !!
<br /><br />
<strong>Les Glaces Pingouin (Transformation) ne peuvent être achetées qu\'aux PNJ Marchand de Noël directement en jeu.
</strong>
<br /><br />
<strong style="color:#F11;">Attention, à la fin des fêtes de Noël et de fin d\'année), les Glaces ne seront plus en vente ! Profitez-en maintenant et faites le stock (car elles ne seront bien entendu pas retirées de votre inventaire mais  seulement plus disponibles à l\'achat) !!</strong>
<!--
<strong style="color:#ef4400;">Les Glaces Pingouin ne sont plus disponibles à l\'achat, rendez-vous au prochain Noël !!</strong>
-->',
                    'price' => 1,
                    'token' => 0,
                    'special' => 'CHRISTMAS',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            205 =>
                array (
                    'id' => 215,
                    'name' => 'Statue de Glace : Podium',
                    'name_shop' => 'Statue de Glace : Podium',
                    'description' => '<img src="/images/blablaland/news_new.gif" /> <strong style="color:#01b4ff;">Festival des Neiges</strong>
<br />
Pour le Festival des Neiges, redécore les maps en posant cette Statue représentant un Podium en jeu !! Merveilleusement sculptée dans la glace, elle restera en place pendant une heure et il est possible de monter sur les 3 marches ! Pratique pour les concours entre potes ! En plus, les Blablas pourront voir qui a sculpté ce chef-d\'oeuvre puisque ton pseudo apparaît dès qu\'un Blabla passe devant la sculpture.
<br /><br />
<strong style="color:#BC6BD6;">Cette Statue s\'achète directement en jeu auprès du Marchand des Neiges qui est là durant tout le Festival !</strong>
<br /><br />
<strong style="color:#01b4ff;">Cet objet n\'est en vente que pendant le Festival des Neiges qui dure tout le mois de Février ! Profitez-en !</strong>',
                    'price' => 100,
                    'token' => 0,
                    'special' => 'WINTER_FESTIVAL',
                    'promo' => 0,
                    'pack' => '10',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            206 =>
                array (
                    'id' => 216,
                    'name' => 'Statue de Glace : Gardien des Limites',
                    'name_shop' => 'Statue de Glace : Gardien des Limites',
                    'description' => '<img src="/images/blablaland/news_new.gif" /> <strong style="color:#01b4ff;">Festival des Neiges</strong>
<br />
Pour le Festival des Neiges, redécore les maps en posant cette incroyable Statue du Gardien des Limites !!  Merveilleusement sculptée dans la glace, elle restera en place pendant une heure et il est possible de monter sur sa main (et cette fois, tu ne seras pas jeter dans un pot de peinture ^^). En plus, les Blablas pourront voir qui a sculpté ce chef-d\'oeuvre puisque ton pseudo apparaît dès qu\'un Blabla passe devant la sculpture.
Le Mythique Gardien des Limites est à toi !!
<br /><br />
<strong style="color:#BC6BD6;">Cette Statue s\'achète directement en jeu auprès du Marchand des Neiges qui est là durant tout le Festival !</strong>
<br /><br />
<strong style="color:#01b4ff;">Cet objet n\'est en vente que pendant le Festival des Neiges qui dure tout le mois de Février ! Profitez-en !</strong>',
                    'price' => 100,
                    'token' => 0,
                    'special' => 'WINTER_FESTIVAL',
                    'promo' => 0,
                    'pack' => '10',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            207 =>
                array (
                    'id' => 217,
                    'name' => 'Fortune Cookie',
                    'name_shop' => 'Fortune Cookie',
                    'description' => '<strong style="color:#ffa800;">Fête du Soleil Levant !!</strong><br />
Croque cet excellent Fortune Cookie asiatique et découvre la surprise qu\'il cache en son coeur : des effets surprises jusqu\'aux skins rares & collector !!
<br />
<br />
En mangeant un Fortune Cookie tu peux :<br />
- Gagner des Blabillons<br /><br />
- Avoir un effet surprise<br /><br />
- <strong>Exclu 2015 : <a href="/site/shop_objet.php?giveme=189" target="_blank" class="fofo_link_extern"><img src="/images/shop/objects/189.jpg" style="width:35px;" /> RARE : Gagner le Nuage Monkey</a></strong><br /><br />
- <a href="/site/shop_skin.php?giveme=574" target="_blank" class="fofo_link_extern"><img src="/images/shop/skins/574.jpg" style="width:35px;" /> RARE : Gagner le Sage Chinois</a><br /><br />
- <a href="/site/shop_skin.php?giveme=575" target="_blank" class="fofo_link_extern"><img src="/images/shop/skins/575.jpg" style="width:35px;" /> RARE : Gagner l\'incroyable Maître Samouraï !</a><br />

<br />
<strong>Les Fortune Cookies s\'achètent uniquement en jeu auprès du Marchand à la mare.</strong>
<br /><br />
<span style="color:#ffa800;"><strong>EXCLU Fête du Soleil Levant :</strong> Cet item n\'est en vente que pendant la fête du Soleil Levant... Faites le stock si vous souhaitez gagner ces items Collector !!</span>
<br /><br />
<strong style="color:#BC6BD6;">Régale-toi de ce délicieux Fortune Cookie et découvre ses incroyables propriétés magiques !</strong>',
                    'price' => 1,
                    'token' => 0,
                    'special' => 'COOKIE',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            208 =>
                array (
                    'id' => 218,
                    'name' => 'Statue de Glace : Fauteuil Boss',
                    'name_shop' => 'Statue de Glace : Fauteuil Boss',
                    'description' => '<img src="/images/blablaland/news_new.gif" /> <strong style="color:#01b4ff;">Festival des Neiges</strong>
<br />
Pour le Festival des Neiges, redécore les maps en posant cette Statue en forme de fauteuil du BOSS !! En plus, les Blablas pourront voir qui a sculpté ce chef-d\'oeuvre puisque ton pseudo apparaît dès qu\'un Blabla passe devant la sculpture. Installe toi confortablement dessus et domine Blablaland en mode "Boss" ;)
<br /><br />
<strong style="color:#BC6BD6;">Cette Statue s\'achète directement en jeu auprès du Marchand des Neiges qui est là durant tout le Festival !</strong>
<br /><br />
<strong style="color:#01b4ff;">Cet objet n\'est en vente que pendant le Festival des Neiges qui dure tout le mois de Février ! Profitez-en !</strong>',
                    'price' => 100,
                    'token' => 0,
                    'special' => 'WINTER_FESTIVAL',
                    'promo' => 0,
                    'pack' => '10',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            209 =>
                array (
                    'id' => 219,
                    'name' => 'Statue de Glace : Sapin',
                    'name_shop' => 'Statue de Glace : Sapin',
                    'description' => '<img src="/images/blablaland/news_new.gif" /> <strong style="color:#01b4ff;">Festival des Neiges</strong>
<br />
Pour le Festival des Neiges, redécore les maps en posant cette Statue Sapin en jeu !! Merveilleusement sculptée dans la glace, elle restera en place pendant une heure et il est possible de monter dessus ... mais il faudra faire preuve d\'abilité pour tenir sur son sommet pointu ! En plus, les Blablas pourront voir qui a sculpté ce chef-d\'oeuvre puisque ton pseudo apparaît dès qu\'un Blabla passe devant la sculpture.
<br /><br />
<strong style="color:#BC6BD6;">Cette Statue s\'achète directement en jeu auprès du Marchand des Neiges qui est là durant tout le Festival !</strong>
<br /><br />
<strong style="color:#01b4ff;">Cet objet n\'est en vente que pendant le Festival des Neiges qui dure tout le mois de Février ! Profitez-en !</strong>',
                    'price' => 100,
                    'token' => 0,
                    'special' => 'WINTER_FESTIVAL',
                    'promo' => 0,
                    'pack' => '10',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            210 =>
                array (
                    'id' => 220,
                    'name' => 'Statue de Glace : Pingouin',
                    'name_shop' => 'Statue de Glace : Pingouin',
                    'description' => '<img src="/images/blablaland/news_new.gif" /> <strong style="color:#01b4ff;">Festival des Neiges</strong>
<br />
Pour le Festival des Neiges, redécore les maps en posant cette Statue à l\'effigie du mythique Pingouin !! Merveilleusement sculptée dans la glace, elle restera en place pendant une heure et il est possible de monter dessus ! En plus, les Blablas pourront voir qui a sculpté ce chef-d\'oeuvre puisque ton pseudo apparaît dès qu\'un Blabla passe devant la sculpture.
<br /><br />
<strong style="color:#BC6BD6;">Cette Statue s\'achète directement en jeu auprès du Marchand des Neiges qui est là durant tout le Festival !</strong>
<br /><br />
<strong style="color:#01b4ff;">Cet objet n\'est en vente que pendant le Festival des Neiges qui dure tout le mois de Février ! Profitez-en !</strong>',
                    'price' => 100,
                    'token' => 0,
                    'special' => 'WINTER_FESTIVAL',
                    'promo' => 0,
                    'pack' => '10',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            211 =>
                array (
                    'id' => 221,
                    'name' => 'Statue de Glace : Coeur',
                    'name_shop' => 'Statue de Glace : Coeur',
                    'description' => '<img src="/images/blablaland/news_new.gif" /> <strong style="color:#01b4ff;">Festival des Neiges</strong>
<br />
Pour le Festival des Neiges, redécore les maps en posant cette Statue Coeur en jeu !! Merveilleusement sculptée dans la glace, elle restera en place pendant une heure et il est possible de monter dessus ! En plus, les Blablas pourront voir qui a sculpté ce chef-d\'oeuvre puisque ton pseudo apparaît dès qu\'un Blabla passe devant la sculpture.
<br /><br />
<strong style="color:#BC6BD6;">Cette Statue s\'achète directement en jeu auprès du Marchand des Neiges qui est là durant tout le Festival !</strong>
<br /><br />
<strong style="color:#01b4ff;">Cet objet n\'est en vente que pendant le Festival des Neiges qui dure tout le mois de Février ! Profitez-en !</strong>',
                    'price' => 100,
                    'token' => 0,
                    'special' => 'WINTER_FESTIVAL',
                    'promo' => 0,
                    'pack' => '10',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            212 =>
                array (
                    'id' => 222,
                    'name' => 'Crêpe',
                    'name_shop' => 'Crêpe',
                    'description' => '<img src="/images/blablaland/news_new.gif" /> <strong style="color:#01b4ff;">Festival des Neiges</strong>
<br />
Pour le Festival des Neiges, venez déguster ces excellentes Crêpes au sirop d\'érable !! Toutes chaudes et faites avec amour, elles ont le pouvoir de faire appaître l\'aura des feuilles d\'érable autour de vous. Miam, trop bon !!
<br /><br />
<em>Vous pouvez manger cette crêpe, ou bien l\'offrir à un ami en cliquant dessus, puis action. Miam !</em>
<br /><br />
<strong style="color:#BC6BD6;">Cette bonne Crêpe s\'achète directement en jeu auprès du Marchand des Neiges qui est là durant tout le Festival !</strong>
<br /><br />
<strong style="color:#01b4ff;">La crêpe n\'est en vente que pendant le Festival des Neiges qui dure tout le mois de Février ! Profitez-en !</strong>',
                    'price' => 1,
                    'token' => 0,
                    'special' => 'WINTER_FESTIVAL',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            213 =>
                array (
                    'id' => 223,
                    'name' => 'Poêle à Crêpes',
                    'name_shop' => 'Poêle à Crêpes',
                    'description' => '<img src="/images/blablaland/news_new.gif" /> <strong style="color:#01b4ff;">Festival des Neiges</strong>
<br />
Profitez du Festival des Neiges pour acheter cette Poêle à crêpes. Une fois activée, vous vous baladez poêle à la main et vous pouvez utiliser un nouveau pouvoir ! Ce nouveau pouvoir vous permet d\'activer une danse spéciale qui fait sauter une crêpe, même assis en dormant (et ça, c\'est fort !) ^__^ Un Objet super fun pour tous les gourmands !
<br /><br />
<strong style="color:#BC6BD6;">Cette Poêle s\'achète directement en jeu auprès du Marchand des Neiges qui est là durant tout le Festival !</strong>
<br /><br />
<strong style="color:#01b4ff;">La poêle à crêpes n\'est en vente que pendant le Festival des Neiges qui dure tout le mois de Février ! Profitez-en !</strong>',
                    'price' => 300,
                    'token' => 0,
                    'special' => 'WINTER_FESTIVAL',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            214 =>
                array (
                    'id' => 224,
                    'name' => 'MAISON : Igloo',
                    'name_shop' => 'MAISON : Igloo',
                    'description' => '<img src="/images/blablaland/news_new.gif" /> <strong style="color:#01b4ff;">NOUVELLE MAISON !!</strong>
<br />
Pour l\'occasion du Festival des Neiges, découvrez la deuxième Maison de Blablaland : l\'Igloo !! Installez-vous dans votre propre igloo rien qu\'à vous et invitez-y vos amis pour délirer ensemble dans votre lieu privé.<br />
<br />
<em>Pour plus d\'informations sur le fonctionnement des Maisons, consultez la fiche du Chalet en <a href="/site/shop_objet.php?giveme=212" target="_blank" class="fofo_link_extern">cliquant ici</a></em>
<br />
<br />
<b>La Maison igloo peut contenir 5 Blablas (4 + son propriétaire)</b>
<br /><br />
<strong style="color:#BC6BD6;">Un magnifique igloo pour passer de supers moments avec vos amis dans votre maison perso :)</strong>',
                    'price' => 1600,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 3,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            215 =>
                array (
                    'id' => 225,
                    'name' => 'MONTURE : Orignal',
                    'name_shop' => 'MONTURE : Orignal',
                    'description' => 'Le Festival des Neiges a attiré l\'attention du grand Orignal, cette monture tout droit venue du froid est le parfait compagnon pour braver les monts et collines enneigés de Blablaland. Et puis, monter sur le dos d\'un Orignal, c\'est quand même top la classe !
<br /><br />
<strong style="color:#BC6BD6;"> L\'Orignal, la monture Star du Festival des Neiges ;)</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            216 =>
                array (
                    'id' => 226,
                    'name' => 'MONTURE : Dragon Sylvain',
                    'name_shop' => 'MONTURE : Dragon Sylvain',
                    'description' => '<strong style="color:#ffa800;">Fête du Soleil Levant 2013 !!</strong><br />
Chevauche les plaines de Blablaland sur le dos d\'un Dragon Sylvain. Maître de la nature, il a le pourvoir de faire pousser toutes les fleurs et graines plantées sur le jeu.<br />Une monture de légende des temps anciens !
<br /><br />
<strong style="color:#BC6BD6;">Le Dragon Sylvain peut faire pousser toutes les fleurs de sa map d\'un seul coup.</strong>',
                    'price' => 1600,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            217 =>
                array (
                    'id' => 227,
                    'name' => 'Lampion à Voeu',
                    'name_shop' => 'Lampion à Voeu',
                    'description' => '<strong style="color:#ffa800;">Fête du Soleil Levant !!</strong><br />
Exauce tes voeux avec ce Lampion Chinois magique. Lance le dans les airs de Blablaland en écrivant un voeu dessus, il flottera pendant 1h laissant ton voeu visible à tous les Blablas, selon la coutume asiatique.
<br />
<br />
<strong>Le Lampion à Voeu s\'achète uniquement en jeu auprès du Marchand à la mare.</strong>
<br /><br />
<span style="color:#ffa800;"><strong>EXCLU Fête du Soleil Levant :</strong> Cet item n\'est en vente que pendant la fête du Soleil Levant</span>
<br /><br />
<strong style="color:#BC6BD6;">Fais danser tes voeux dans le ciel de Blablaland :)</strong>',
                    'price' => 1,
                    'token' => 0,
                    'special' => 'COOKIE',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            218 =>
                array (
                    'id' => 228,
                    'name' => 'MAISON : Jardin Secret',
                    'name_shop' => 'MAISON : Jardin Secret',
                    'description' => '<img src="/images/blablaland/news_new.gif" /> <strong style="color:#F00;">St Valentin\'s Day !!</strong>
<br />
Pour l\'occasion de la Saint Valentin, découvrez une nouvelle Maison, cette fois-ci en extérieur avec ce magnifique Jardin Secret. Romantique, calme et discret, cette map privée est des plus reposante, tout en offrant la possibilité de choisir parmi 3 ambiances graphiques (Jour, Coucher de Soleil, ou Nuit). Il est même possible de faire passer une étoile filante lorsqu\'il fait nuit !
<br />
<br />
<em>Pour plus d\'informations sur le fonctionnement des Maisons, consultez la fiche du Chalet en <a href="/site/shop_objet.php?giveme=212" target="_blank" class="fofo_link_extern">cliquant ici</a></em>
<br />
<br />
<b>La Maison extérieur Jardin Secret peut contenir 5 Blablas (4 + son propriétaire)</b>
<br /><br />
<strong style="color:#BC6BD6;">Un paysage incroyable pour des moments romantiques, le Jardin Secret saura séduire votre amour !</strong>',
                    'price' => 1750,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 3,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            219 =>
                array (
                    'id' => 229,
                    'name' => 'MONTURE : Aigle Royal',
                    'name_shop' => 'MONTURE : Aigle Royal',
                    'description' => 'Envolez-vous dans les airs de Blablaland à dos d\'un incroyable Aigle Royal, qui en impose par sa majestueuse carrure !! Une monture vraiment impressionnante, et surtout, capable de voler !!
<br /><br />
<em><strong>Comment vous envoler avec l\'Aigle :</strong> Activez la monture, lorsque vous sautez, gardez la flèche du haut appuyée, l\'Aigle se mettra alors à planer. Après une seconde, ses Ailes s\'orientent vers le haut vous indiquant que vous pouvez relâcher la touche et appuyer de nouveau vers le haut pour faire un battement d\'Ailes et reprendre de l\'élan. Maintenez de nouveau la touche, et ainsi de suite. Conservez le rythme pour dominer le ciel de Blablaland à dos de votre Aigle Royal !<br />
C\'est le même principe que les skins Célestes et Damnés.</em>
<br /><br />
<strong style="color:#BC6BD6;">L\'Aigle Royal, majestueuse créature des airs, vous emmènera au bout de Blablaland à travers les nuages !! Une monture remarquable !</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            220 =>
                array (
                    'id' => 230,
                    'name' => 'BLIBLI : Faucon',
                    'name_shop' => 'BLIBLI : Faucon',
                    'description' => 'Promène-toi dans Blablaland avec un Blibli Faucon qui te suivra partout en volant autour de toi !<br />
<br />
<strong>Extra Faucon :</strong> Ce blibli se pose sur la tête des skins Fauconniers <a href="/site/shop_skin.php?giveme=579&gr=6" class="fofo_link_extern">Garçon</a> et <a href="/site/shop_skin.php?giveme=580&gr=6" class="fofo_link_extern">Fille</a> qui sont leur maître !!
<br /><br />
<strong style="color:#BC6BD6;">Un Blibli sauvage qui vous accompagnera dans toutes vos aventures !</strong>',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            221 =>
                array (
                    'id' => 231,
                    'name' => 'Carte Tresor',
                    'name_shop' => 'Carte Tresor',
                    'description' => 'Carte Tresor',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            222 =>
                array (
                    'id' => 232,
                    'name' => 'Pelle',
                    'name_shop' => 'Pelle',
                    'description' => 'Pelle',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            223 =>
                array (
                    'id' => 233,
                    'name' => 'Perles',
                    'name_shop' => 'Perles',
                    'description' => 'Perles',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            224 =>
                array (
                    'id' => 234,
                    'name' => 'Drapeau Pirate',
                    'name_shop' => 'Drapeau Pirate',
                    'description' => '<strong style="color:#FF00FF;">Récompense Quête Pirate & Sirène !!</strong><br />
Gagne le Drapeau Collector du Pirate !! L\'ultime récompense de la quête du Pirate et de la Sirène qui se trouvent au aux alentours de l\'Île Tortue. Le Drapeau ne se gagne que très rarement, et uniquement avec le plus gros lot de Perles :
<strong>Parcequ\'on est un Pirate, ou on en est pas un :D</strong>
<br />
<br />
<strong style="color:#BC6BD6;">Rendez-vous donc aux alentours de l\'Île Tortue et parlez au Pirate pour découvrir comment gagner des Trésors, et donc ce Drapeau Collector !! Bonne chance à toi, Pirate !!</strong>',
                    'price' => 1,
                    'token' => 0,
                    'special' => 'PIRATE_QUEST',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            225 =>
                array (
                    'id' => 235,
                    'name' => 'Peluche N400',
                    'name_shop' => 'Peluche N400',
                    'description' => 'Peluche N400',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            226 =>
                array (
                    'id' => 236,
                    'name' => 'Masque N400',
                    'name_shop' => 'Masque N400',
                    'description' => 'Masque N400',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            227 =>
                array (
                    'id' => 237,
                    'name' => 'Ballon N400',
                    'name_shop' => 'Ballon N400',
                    'description' => 'Ballon N400',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            228 =>
                array (
                    'id' => 238,
                    'name' => 'Épee N400',
                    'name_shop' => 'Épee N400',
                    'description' => 'Épee N400',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            229 =>
                array (
                    'id' => 239,
                    'name' => 'Ticket loterie Anniversaire',
                    'name_shop' => 'Ticket loterie Anniversaire',
                    'description' => 'Ticket loterie Anniversaire',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            230 =>
                array (
                    'id' => 240,
                    'name' => 'Ticket N100',
                    'name_shop' => 'Ticket N100',
                    'description' => 'Ticket N100',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            231 =>
                array (
                    'id' => 241,
                    'name' => 'Ticket N200',
                    'name_shop' => 'Ticket N200',
                    'description' => 'Ticket N200',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            232 =>
                array (
                    'id' => 242,
                    'name' => 'Ticket N300',
                    'name_shop' => 'Ticket N300',
                    'description' => 'Ticket N300',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            233 =>
                array (
                    'id' => 243,
                    'name' => 'Drapeau 5 ans Blablaland',
                    'name_shop' => 'Drapeau 5 ans Blablaland',
                    'description' => 'Drapeau 5 ans Blablaland',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            234 =>
                array (
                    'id' => 244,
                    'name' => 'Drapeau N400',
                    'name_shop' => 'Drapeau N400',
                    'description' => 'Drapeau N400',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            235 =>
                array (
                    'id' => 245,
                    'name' => 'Pioche à Mysthoriä',
                    'name_shop' => 'Pioche à Mysthoriä',
                    'description' => '<strong style="color:#BC6BD6;">Pars à la chasse de Fragments de Mysthoriä</strong>
<br />
Sors ta pioche et va creuser les terres de Blablaland à la recherche de fragments de Mysthoriä, pierre rare et précieuse tant convoitée depuis sa découverte !!<br />
En piochant, tu pourras trouver des tas de choses, de la plus incroyable à la plus improbable : On raconte qu\'il est même possible de trouver des Lazers encore en état de marche !! Mais tu trouveras aussi des déchets, haaaaa beuuurk... rien ne se perd ici, va donc voir dans les mines, un mineur à l\'allure étrange pourrait bien te créer des merveilles avec de vielles paires de chaussures et des bouts d\'os machés !!<br />
<br />
Et, si un fragment de Mysthoriä est détecté dans la map où tu pioches, un drapeau t\'indiquera dans quelle direction piocher à nouveau, toujours dans cette même map, pour espérer trouver un précieux fragment !!
<br /><br />
<a href="/site/jeu_mysthoria.php">Rends toi sur la page du mini jeu Mysthoriä pour en savoir plus</a>
<br /><br />
<strong style="color:#BC6BD6;">Pioche à la recherche de fragments de Mysthoriä, et sors de la terre des déchets à recycler en objets exclusifs !!</strong>
<br /><br />
<a href="/site/jeu_mysthoria.php" class="fofo_link_extern"><img src="/images/shop/jetons/3.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Mysthoriä</a>',
                    'price' => 3,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            236 =>
                array (
                    'id' => 246,
                    'name' => 'Boîte de conserve',
                    'name_shop' => 'Boîte de conserve',
                    'description' => 'Boîte de conserve',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            237 =>
                array (
                    'id' => 247,
                    'name' => 'Pneu abîmé',
                    'name_shop' => 'Pneu abîmé',
                    'description' => 'Pneu abîmé',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            238 =>
                array (
                    'id' => 248,
                    'name' => 'Peau de banane',
                    'name_shop' => 'Peau de banane',
                    'description' => 'Peau de banane',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            239 =>
                array (
                    'id' => 249,
                    'name' => 'Os mâché',
                    'name_shop' => 'Os mâché',
                    'description' => 'Os mâché',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            240 =>
                array (
                    'id' => 250,
                    'name' => 'Chaussure',
                    'name_shop' => 'Chaussure',
                    'description' => 'Chaussure',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            241 =>
                array (
                    'id' => 251,
                    'name' => 'Sac à pioche',
                    'name_shop' => 'Sac à pioche',
                    'description' => 'Ce sac à pioche vous permettra de garder les objets que vous piocherez !
',
                    'price' => 100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            242 =>
                array (
                    'id' => 252,
                    'name' => 'Catalyseur des mines',
                    'name_shop' => 'Catalyseur des mines',
                    'description' => '<strong style="color:#BC6BD6;">RECOMPENSE MYSTHORIÄ & PIOCHE</strong><br />
Le Catalyseur des mines est comme un coeur mécanique, issu d\'une forte concentration de Mysthoriä. Il a le pouvoir d\'animer les objets s\'il est bien utilisé : chose que peut faire une seule personne sur les terres de Blablaland.
<br /><br />
Descendez dans les mines de Blablaland voir le mineur et sa machine infernale, il sera capable de vous créer des objets et skins exclusifs si vous avez un Catalyseur, et quelques autres objets. Allez donc lui parler pour découvrir tout ça !
<br /><br />
<strong style="color:#BC6BD6;">Le Catalyseur, concentré de Mysthoriä, peut animer les objets... rendez-vous dans les mines de Blablaland !!</strong>
<br /><br />
<a href="/site/jeu_mysthoria.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/3.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Mysthoriä</a>',
                    'price' => 0,
                    'token' => 50,
                    'special' => 'MYSTHORIA',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 5,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            243 =>
                array (
                    'id' => 253,
                    'name' => 'Coffre Mysthoriä (gagne 160 BBL)',
                    'name_shop' => 'Coffre Mysthoriä (gagne 160 BBL)',
                    'description' => '<strong style="color:#BC6BD6;">RECOMPENSE MYSTHORIÄ & PIOCHE</strong><br />
Une fois par jour, tu peux acheter ce coffre pour gagner <b>160 Blabillons</b>. Tu ne peux le faire qu\'une fois par jour, ensuite, tu devras attendre le lendemain si tu désires convertir à nouveau des Fragments de Mysthoriä en Blabillons !!<br />
<br />
<b>Fonctionnement : Lorsque tu as assez de Jetons Fragments de Mysthoriä et que tu désires les convertir en BBL, il te suffit d\'acheter ce coffre qui te fait gagner instantanément 160 BBL.<br />
<em>Le coffre n\'apparait pas dans ton inventaire en jeu.</em></b>
<br /><br />
<strong style="color:#BC6BD6;">Tous les jours, gagne 160 BBL en convertissant tes Jetons Fragments de Mysthoriä !!</strong>
<br /><br />
<a href="/site/jeu_mysthoria.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/3.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Mysthoriä</a>',
                    'price' => 1,
                    'token' => 25,
                    'special' => 'MYSTHORIA',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 5,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            244 =>
                array (
                    'id' => 254,
                    'name' => 'Mysthoriä : MONTURE Raptor Undead',
                    'name_shop' => 'Mysthoriä : MONTURE Raptor Undead',
                    'description' => '<strong style="color:#BC6BD6;">OBJET EXCLUSIF MYSTHORIÄ</strong><br />
Réveillez l\'un des plus terribles dinosaures avec la Mythoriä concentrée en Catalyseur !! Apprivoisez et chevauchez un Raptor Undead... en chaussure (ça, c\'est juste top !) !! Une monture hors du commun sans doute la plus incroyable et la plus précieuse !!
<br /><br />
<strong style="color:#BC6BD6;">Fabriquez votre propre Monture Raptor Undead, chevauchez cette incroyable squelette avec fierté et gloire, oui, il est à vous !!</strong>
<br /><br />
<em>Cet Objet se crée avec les déchets trouvés en piochant, et les Catalyseurs créés à partir de Mysthoriä. Rendez-vous sur la page du mini-jeu ou dans les mines de Blablaland pour en savoir plus.</em>
<br /><br />
<a href="/site/jeu_mysthoria.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/3.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Mysthoriä</a>',
                    'price' => 1,
                    'token' => 0,
                    'special' => 'MYSTHORIA',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            245 =>
                array (
                    'id' => 255,
                    'name' => 'Mysthoriä : Cube Volant Recyclé',
                    'name_shop' => 'Mysthoriä : Cube Volant Recyclé',
                    'description' => '<strong style="color:#BC6BD6;">OBJET EXCLUSIF MYSTHORIÄ</strong><br />
Utilisez un Catalyseur de Mysthoriä et tous les objets à recycler pour créer ce Cube Volant (x30 par fabrication). Posez-le dans les airs et vous pourrez monter dessus un instant. Parfait pour se fabriquer des ponts temporaires, des plateformes, et se créer des chemins improblables au-travers de Blablaland !!
<br /><br />
<strong style="color:#BC6BD6;">Fabriquez-vous des Cubes Volants en recyclant les objets piochés pour vous créer de nouveaux chemins dans les airs !!</strong>
<br /><br />
<em>Astuce : Grâce aux cubes, vous pouvez aller piocher dans les maps ciels pour trouver de la Mysthoriä dans des lieux improbables !!</em>
<br /><br />
<em>Cet Objet se crée avec les déchets trouvés en piochant, et les Catalyseurs créés à partir de Mysthoriä. Rendez-vous sur la page du mini-jeu ou dans les mines de Blablaland pour en savoir plus.</em>
<br /><br />
<a href="/site/jeu_mysthoria.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/3.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Mysthoriä</a>',
                    'price' => 1,
                    'token' => 0,
                    'special' => 'MYSTHORIA',
                    'promo' => 0,
                    'pack' => '30',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            246 =>
                array (
                    'id' => 256,
                    'name' => 'MONTURE : Chariot des Mines',
                    'name_shop' => 'MONTURE : Chariot des Mines',
                    'description' => 'Monte à bord d\'un Chariot des mines et va faire le grand 8 dans les plaines de Blablaland ! En plus tu peux le booster un bon coup en utilisant la <a href="/site/shop_objet.php?giveme=152">Nitro Boost</a> pour partir à fond !! Délirant, et parfait pour partir à la conquête des fragments de Mysthoriä !!
<br /><br />
<strong style="color:#BC6BD6;">A fond dans le chariot des Mines !!</strong>
<br /><br />
<a href="/site/jeu_mysthoria.php" class="fofo_link_extern"><img src="/images/shop/jetons/3.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Mysthoriä</a>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            247 =>
                array (
                    'id' => 257,
                    'name' => 'Mysthoriä : MONTURE Chariot de l\'Enfer',
                    'name_shop' => 'Mysthoriä : MONTURE Chariot de l\'Enfer',
                    'description' => '<strong style="color:#BC6BD6;">OBJET EXCLUSIF MYSTHORIÄ</strong><br />
Montez dans le chariot de l\'enfer... boosté à bloc par la Mysthoriä, dévalez les pentes de Blablaland à une vitesse infernale, et ce n\'est rien pourtant car vous pouvez utiliser la <a href="/site/shop_objet.php?giveme=152">NITRO BOOST</a> pour vous enflammer et aller encore plus vite !! Rendez-vous dans les mines de Blablaland pour découvrir comment la gagner !!
<br /><br />
<strong style="color:#BC6BD6;">Fabriquez votre propre Chariot de l\'Enfer pour des sessions infernales !!!</strong>
<br /><br />
<em>Cet Objet se crée avec les déchets trouvés en piochant, et les Catalyseurs créés à partir de Mysthoriä. Rendez-vous sur la page du mini-jeu ou dans les mines de Blablaland pour en savoir plus.</em>
<br /><br />
<a href="/site/jeu_mysthoria.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/3.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Mysthoriä</a>',
                    'price' => 1,
                    'token' => 0,
                    'special' => 'MYSTHORIA',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            248 =>
                array (
                    'id' => 258,
                    'name' => 'Mysthoriä : MONTURE Foreuse',
                    'name_shop' => 'Mysthoriä : MONTURE Foreuse',
                    'description' => '<strong style="color:#BC6BD6;">OBJET EXCLUSIF MYSTHORIÄ</strong><br />
Montez à bord de la plus célèbre des Foreuses de tout Blablaland, qui reprend vie grâce aux fragments de Mysthoriä et aux Catalyseurs. Rendez-vous dans les mines de Blablaland pour découvrir comment la gagner !!
<br /><br />
<strong style="color:#BC6BD6;">Fabriquez votre propre monture Foreuse pour parcourir Blablaland avec grande classe, c\'est quand même THE Foreuse de Blablaland !!</strong>
<br /><br />
<em>Cet Objet se crée avec les déchets trouvés en piochant, et les Catalyseurs créés à partir de Mysthoriä. Rendez-vous sur la page du mini-jeu ou dans les mines de Blablaland pour en savoir plus.</em>
<br /><br />
<a href="/site/jeu_mysthoria.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/3.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Mysthoriä</a>',
                    'price' => 1,
                    'token' => 0,
                    'special' => 'MYSTHORIA',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            249 =>
                array (
                    'id' => 259,
                    'name' => 'Drapeau Mysthoriä',
                    'name_shop' => 'Drapeau Mysthoriä',
                    'description' => '<strong style="color:#BC6BD6;">RECOMPENSE MYSTHORIÄ & PIOCHE</strong><br />
L\'ultime récompense des chasseurs de Mysthoriä !! Ce drapeau symbolise que tu es un grand chasseur de cette précieuse pierre, et que tu maîtrises sans aucun doute la pioche !! Quiconque porte ce drapeau sera au sommet de la gloire, et chasseur éternel de Mysthoriä :)
<br /><br />
<strong style="color:#BC6BD6;">La récompense ultime pour tous les chasseurs de Mysthoriä !!</strong>
<br /><br />
<a href="/site/jeu_mysthoria.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/3.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Mysthoriä</a>',
                    'price' => 10,
                    'token' => 2500,
                    'special' => 'MYSTHORIA',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 5,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            250 =>
                array (
                    'id' => 260,
                    'name' => 'MAISON : Tipi',
                    'name_shop' => 'MAISON : Tipi',
                    'description' => 'Installez-vous confortablement dans votre nouvelle Maison perso Tipi Indien !! Avec un petit feu au centre, et la possibilité de choisir entre une ambiance jour ou nuit, c\'est la Maison parfaite pour se retrouver avec ses amis dans une ambiance super sympa !! Idéale pour organiser des regroupements entre potes !
<br />
<em>Pour plus d\'informations sur le fonctionnement des Maisons, consultez la fiche du Chalet en <a href="/site/shop_objet.php?giveme=212" target="_blank" class="fofo_link_extern">cliquant ici</a></em>
<br />
<br />
<b>La Maison Tipi peut contenir 5 Blablas (4 + son propriétaire)</b>
<br /><br />
<strong style="color:#BC6BD6;">Installez-vous dans votre Tipi, à l\'ambiance colorée et chaleureuse pour passer de supers moments avec vos amis !</strong>',
                    'price' => 2000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 3,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            251 =>
                array (
                    'id' => 261,
                    'name' => 'MONTURE : Bison',
                    'name_shop' => 'MONTURE : Bison',
                    'description' => 'Chevauchez les plaines de Blablaland à dos de Bison !! C\'est le top, avec un look vraiment chouette, cette monture en impose... et pourtant, il est super câlin ;)
<br /><br />
<strong style="color:#BC6BD6;">Se balader à dos de Bison, c\'est juste la classe !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            252 =>
                array (
                    'id' => 262,
                    'name' => 'Tambour',
                    'name_shop' => 'Tambour',
                    'description' => 'Tambour',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            253 =>
                array (
                    'id' => 263,
                    'name' => 'Chaudron Magique',
                    'name_shop' => 'Chaudron Magique',
                    'description' => '<strong style="color:#FF00FF;">Carte Collector #06 !!</strong><br />

Ce Chaudron Magique a été fabriqué par les Leprechauns : Lorsque vous le posez en jeu, il vous permet d\'ouvrir le coffre de l\'Irwish et de récupérer votre cadeau du jour sans avoir besoin d\'y aller et de traverser la cheminée. Hyper pratique !! Il fonctionne de n\'importe où ^__^<br />De plus, il dégage de temps en temps de la fumée d\'arc en ciel et repeint les Blablas qui squattent autour ! <strong>Ce Chaudron est magique, et ses pouvoirs ne fonctionnent que pour celui qui l\'a posé !!</strong>
<br /><br />
Le Chaudron Magique permet :
<br />
• D\'ouvrir le Coffre de l\'Irwish depuis n\'importe où !
<br />
• Se téléporter à l\'Irwish en illimité
<br />
• Acheter les Boissons de l\'Irwish !
<br /><br />
<strong style="color:#BC6BD6;">Le Chaudrong Magique est GRATUIT !! Tu le gagnes grâce à la Carte Cadeau #06, qui est offerte pour tout achat sur NIVEAU99-SHOP (ou que tu peux retrouver sur les expos de Blablaland)</strong>
<br><br>
<a href="http://www.blablaland.com/site/blabillons.php?m=cadeau" class="fofo_link_extern">Si tu as reçu une carte, clique ici pour entrer le code et obtenir ton Chaudron</a>

<br><br>
La Carte Cadeau #06 est offerte pour tout achat effectué sur notre Boutique de Produits dérivés <a href="http://www.niveau99-shop.com" target="_blank">NIVEAU99-SHOP</a> !! Youhouuu !!',
                    'price' => 1,
                    'token' => 0,
                    'special' => 'CARD',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            254 =>
                array (
                    'id' => 264,
                    'name' => 'Drapeau Japan Expo 2013',
                    'name_shop' => 'Drapeau Japan Expo 2013',
                    'description' => '<strong style="color:#BC6BD6;">RECOMPENSE JAPAN EXPO 2013</strong><br />
L\'ultime récompense de la Japan Expo 2013 !! Le drapeau symbolise ta présence pendant l\'évènement Japon Expo 2013 :)
<br /><br />
<strong style="color:#BC6BD6;">L\'ultime récompense... démontre ta présence avec ce drapeau collector !!</strong>',
                    'price' => 100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            255 =>
                array (
                    'id' => 265,
                    'name' => 'MAISON : Van (pilotable)',
                    'name_shop' => 'MAISON : Van (pilotable)',
                    'description' => 'Entre dans le van le plus psychédélique qui soit ! Avec son air rétro et son intérieur Flower Power, tu ne pourras plus t\'en passer !
<br /><br />
Invite tes amis, prends le volant de ta Maison Van, roule autant que tu veux et pars te poser dans les maps de Blablaland.
<br /><br />
Ses pouvoirs :
<br /><br />
<strong>• Mode Pilotage : </strong>Une fois dans ta maison, prends les commandes. Tu passeras alors en vue extérieure en pilotant ton van comme un skin.
<br />
<strong>• Intercom : </strong>En mode pilotage, utilise l\'intercom pour discuter avec les personnes à l\'intérieur de ton van.
<br />
<strong>• Boost :</strong> Démultiplie ta vitesse pendant un laps de temps avec des effets graphiques garantis !!<br>
La Maison Van est vendue avec un pack de <a href="/site/shop_objet.php?giveme=152" target="_blank" class="fofo_link_extern">10 Nitro,</a> qui te permettent d\'utiliser le Boost.
<br /><br />
<em>Pour plus d\'informations sur le fonctionnement des Maisons, consultez la fiche du Chalet en <a href="/site/shop_objet.php?giveme=212" target="_blank" class="fofo_link_extern">cliquant ici</a></em>
<br />
<br />
<b>La Maison Van peut contenir 5 Blablas (4 + son propriétaire)</b>
<br /><br />
<strong style="color:#BC6BD6;">Installez-vous dans votre van, à l\'ambiance rétro et flashy pour refaire le monde avec vos amis !</strong>',
                    'price' => 2000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 3,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            256 =>
                array (
                    'id' => 266,
                    'name' => 'MONTURE : Griffon',
                    'name_shop' => 'MONTURE : Griffon',
                    'description' => 'Domptez l\'incroyable Griffon !!! Cette créature majestueuse, réveillée par les fouilles des chercheurs de Mysthoriä impose le respect et la puissance.
<br /><br />
<em><strong>Pour vous envoler avec le Griffon :</strong> Activez la monture, lorsque vous sautez, gardez la flèche du haut appuyée, le Griffon se mettra alors à planer. Après une seconde, ses Ailes s\'orientent vers le haut vous indiquant que vous pouvez relâcher la touche et appuyer de nouveau vers le haut pour faire un battement d\'Ailes et reprendre de l\'élan. Maintenez de nouveau la touche, et ainsi de suite. Conservez le rythme pour dominer le ciel de Blablaland !<br /></em>
<br /><br />
<strong>Si vous possédez le <a href="/site/shop_objet.php?giveme=267">BLIBLI : bébé Griffon</a>, votre Griffon peut devenir un superbe Griffon d\'Or !!!</strong>
<br /><br />
<strong style="color:#BC6BD6;">Prouve ta valeur en domptant le fougueux Griffon, la monture incontournable de Blablaland !!!</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            257 =>
                array (
                    'id' => 267,
                    'name' => 'BLIBLI : Bébé Griffon',
                    'name_shop' => 'BLIBLI : Bébé Griffon',
                    'description' => 'Réveillez l\'essence magique de la MONTURE : Griffon !! Activez votre Blibli alors que vous avez la monture Griffon pour développer sa métamorphose en Griffon d\'Or.<br /><br />
Ce bébé reconnaît sa maman en lui montrant des petits coeurs lorsque la monture Griffon est activée et qu\'il se pose à côté d\'elle.<br />
<br />
<strong><a href="/site/shop_objet.php?giveme=266">Cliquez ici pour la Monture Griffon</a></strong>
<br /><br />
<strong style="color:#BC6BD6;">Un bébé Griffon qui réveillera l\'essence magique de la Monture Griffon !</strong>',
                    'price' => 700,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            258 =>
                array (
                    'id' => 269,
                    'name' => 'Graines Plante Carnivore du Manoir Hanté',
                    'name_shop' => 'Graines Plante Carnivore du Manoir Hanté',
                    'description' => '<strong style="color:#a50b00;">RECOMPENSE MANOIR HANTE</strong><br />Sème des graines de Plante Carnivore et terrifie les Blablas qui passent sur ta map !!<br>
<b>Les plantes carnivores peuvent attraper les Blablas et les recracher plus loin !</b>
<br />
<strong style="color:#a50b00;">Gare à celui qui osera s\'approcher trop près de cette plante carnivore !</strong>
<br /><br />
(Pack de 10 graines)
<br /><br />
<a href="/site/jeu_manoir.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/4.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Manoir Hanté</a>',
                    'price' => 5,
                    'token' => 75,
                    'special' => 'HAUNTED_MANOR',
                    'promo' => 0,
                    'pack' => '10',
                    'gender' => 5,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            259 =>
                array (
                    'id' => 270,
                    'name' => 'BLIBLI : Grigri Manoir Hanté',
                    'name_shop' => 'BLIBLI : Grigri Manoir Hanté',
                    'description' => '<strong style="color:#a50b00;">RECOMPENSE MANOIR HANTE</strong><br />
Ce blibli Grigri est tout à fait maléfique puisqu\'il permet de vous téléporter gratuitement et directement vers le Manoir Hanté. Le meilleur moyen pour aller affronter vos peurs d\'un simple clic !!
<br /><br />
<strong style="color:#a50b00;">Le Blibli effrayant qu\'il faut posséder pour défier ses limites en un clic !!</strong>
<br /><br />
<a href="/site/jeu_manoir.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/4.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Manoir Hanté</a>',
                    'price' => 10,
                    'token' => 150,
                    'special' => 'HAUNTED_MANOR',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 5,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            260 =>
                array (
                    'id' => 277,
                    'name' => 'Drapeau Manoir Hanté',
                    'name_shop' => 'Drapeau Manoir Hanté',
                    'description' => '<strong style="color:#a50b00;">RECOMPENSE MANOIR HANTE</strong><br />
L\'ultime récompense du Manoir Hanté !! Le drapeau symbolise ton extrême maîtrise du jeu et impose le respect... trop la classe !! Quiconque porte ce drapeau sera au sommet de la gloire :)
<br /><br />
<strong style="color:#BC6BD6;">L\'ultime récompense... démontre ton incontestable maîtrise du jeu avec ce drapeau collector !!</strong>
<br /><br />
<a href="/site/jeu_manoir.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/4.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Manoir Hanté</a>',
                    'price' => 10,
                    'token' => 2500,
                    'special' => 'HAUNTED_MANOR',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 5,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            261 =>
                array (
                    'id' => 278,
                    'name' => 'Coffre Manoir Hanté (gagne 10 BBL)',
                    'name_shop' => 'Coffre Manoir Hanté (gagne 10 BBL)',
                    'description' => '<strong style="color:#a50b00;">RECOMPENSE MANOIR HANTE</strong>
Une fois par jour tu peux acheter ce coffre pour gagner 10 Blabillons. Tu ne peux le faire qu\'une fois par jour, ensuite, tu devras attendre le lendemain si tu désires convertir à nouveau des Jetons Clown en Blabillons !!<br />
<br />
<b>Fonctionnement : Lorsque tu as assez de Jetons Manoir et que tu désires les convertir en BBL, il te suffit d\'acheter ce coffre qui te fait gagner instantanément 10 BBL.<br />
<em>Le coffre n\'apparait pas dans ton inventaire en jeu.</em></b>
<br /><br />
<strong style="color:#BC6BD6;">Tous les jours, gagne 10 BBL en convertissant tes Jetons Manoir !!</strong>
<br /><br />
<a href="/site/jeu_manoir.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/4.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Manoir Hanté</a>',
                    'price' => 1,
                    'token' => 100,
                    'special' => 'HAUNTED_MANOR',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 5,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            262 =>
                array (
                    'id' => 279,
                    'name' => 'Livre Artbook 2',
                    'name_shop' => 'Livre Artbook 2',
                    'description' => '<strong style="color:#FF00FF;">Pouvoir exclusif du Artbook 2 !!</strong><br />
<br />
Montrez au monde entier que vous êtes l\'heureux propriétaire d\'un ARTBOOK 2 !! Whouaaahahahaaaa !! Dans les toutes dernières pages de votre Artbook 2, vous trouverez un code à entrer sur la page des Codes Cadeaux pour gagner le pouvoir exclusif !!
<br /><br />
Montrez aux autres Blablas que vous êtes trop occupés pour leur répondre, parce que vous feuilletez le nouvel Artbook 2 :D
<br /><br />
<strong style="color:#FF00FF;">Pour obtenir ce pouvoir, vous devez acheter un Livre Artbook 2.<a href="http://www.niveau99-shop.com/article.php?id=11" target="_blank"> Cliquez ici pour découvrir le Artbook 2 sur notre Boutique Niveau99-Shop !</a></strong>
<br /><br />
Lorsque vous avez votre code Artbook 2, <a href="http://www.blablaland.com/site/blabillons.php?m=cadeau" class="fofo_link_extern">rendez-vous sur la page des codes cadeaux pour récupérer le pouvoir exclusif (cliquez ici).</a>
<br /><br />


<strong style="color:#BC6BD6;">128 pages, des centaines d’anecdotes, du bonheur en illimité, et un pouvoir exclusif !! </strong>',
                    'price' => 1,
                    'token' => 0,
                    'special' => 'ARTBOOK',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            263 =>
                array (
                    'id' => 280,
                    'name' => 'Sirop de Saule Pleureur',
                    'name_shop' => 'Sirop de Saule Pleureur',
                    'description' => '<strong style="color:#01b4ff;">Fête de l\'Hiver</strong>
<br />
Ce sirop artisanal confectionné avec soin te permettra de cuisiner toi-même tes crêpes.<br /><br />
Tu vas pouvoir ébranler le monopole des crêpes détenus par les organisateurs de la Fête de l\'Hiver !<br /><br />
Attention pour utiliser ce sirop il te faut <a href="/site/shop_objet.php?giveme=223" target="_blank" class="fofo_link_extern">une poêle</a> !
<br />
Comme on dit dans le milieu : "pas de poêle, pas de crêpes"
<br /><br />
<strong style="color:#BC6BD6;">Le Sirop de Saule Pleureur s\'achète directement en jeu auprès des stands de l\'Hiver !</strong>
<br /><br />
<strong style="color:#01b4ff;">Le sirop de Saule Pleureur n\'est en vente que pendant la Fête de l\'Hiver ! Profitez-en !</strong>',
                    'price' => 1,
                    'token' => 0,
                    'special' => 'WINTER_FESTIVAL',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            264 =>
                array (
                    'id' => 281,
                    'name' => 'MAISON : Pain d\'Épices',
                    'name_shop' => 'MAISON : Pain d\'Épices',
                    'description' => '<br />Tout droit sortie des traditions de Noël, découvrez la Maison Pain d’Épices !!<br /><br />
Remplie de friandises et autres biscuits, <strong>amusez-vous en rebondissant sur les bonbons et profitez d\'une ambiance feutrée et tamisée grâce à la bougie !</strong>
<br /><br />
<em>Pour plus d\'informations sur le fonctionnement des Maisons, consultez la fiche du Chalet en <a href="/site/shop_objet.php?giveme=212" target="_blank" class="fofo_link_extern">cliquant ici</a></em>
<br />
<br />
<b>La Maison Pain d’Épices peut contenir 5 Blablas (4 + son propriétaire)</b>
<br /><br />
<strong style="color:#BC6BD6;">Une superbe maison à croquer ! Attention aux dents :D !!</strong>',
                    'price' => 1600,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 3,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            265 =>
                array (
                    'id' => 282,
                    'name' => 'MONTURE : Super Lapinou Noël',
                    'name_shop' => 'MONTURE : Super Lapinou Noël',
                    'description' => 'Super Lapinou est de retour !!! Toujours aussi mignon, il revient pour Noël paré de son plus beau manteau pour fêter avec nous les fêtes de fin d\'année !<br><br>
<strong>Toujours aussi puissant, chevauche-le, transforme les Blablas touchés, de manière aléatoire, en jolis pains d\'épices ou sucres d\'orge et rebondis très haut dans les airs !</strong><br><br>
<em>*jingle : Super Lapinouuuu !!*</em><br><br>
<strong style="color:#BC6BD6;">Une monture parfaite pour profiter pleinement de l\'ambiance de Noël ! De Joyeuses fêtes avec le Supeeer Lapinouuuuuu! </strong><br /><br />
<strong style="color:#ef4400;">Joyeux Noël à tous !! Attention, cet objet n\'est en vente que pendant les fêtes de Noël !!</strong>',
                    'price' => 2200,
                    'token' => 0,
                    'special' => 'CHRISTMAS',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            266 =>
                array (
                    'id' => 283,
                    'name' => 'Déco Maisons : Sapin',
                    'name_shop' => 'Déco Maisons : Sapin',
                    'description' => '<strong style="color:#FF00FF;">Une déco pour votre maison !</strong><br />
<br />
Posez votre sapin de Noël, rien qu\'à vous <strong>dans chacune de vos maisons </strong>et faites-en profiter vos amis !
<br /><br />
Choisissez parmi les <strong>5 décorations proposées </strong>celle qui vous convient le mieux : du sapin vert et rouge au sapin blanc et bleu, il y en a pour tous les goûts !
<br /><br />
Pour installer votre sapin, il vous suffit de cliquer sur l\'icône pouvoir dans votre inventaire et de cliquer à nouveau pour l\'enlever. Recommencez autant de fois que vous le voulez pour sélectionner le sapin qui vous plaira le plus !
<br /><br />
<strong style="color:#BC6BD6;">Décorez vos maisons comme il vous plait, selon vos envies avec la décoration Sapin !!</strong><br /><br />
<strong style="color:#ef4400;">Joyeux Noël à tous !! Attention, cet objet n\'est en vente que pendant les fêtes de Noël !!</strong>',
                    'price' => 450,
                    'token' => 0,
                    'special' => 'CHRISTMAS',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            267 =>
                array (
                    'id' => 284,
                    'name' => 'BLIBLI : Blibli des Neiges',
                    'name_shop' => 'BLIBLI : Blibli des Neiges',
                    'description' => 'Balade-toi et délire dans le monde de Blablaland avec ton petit Blibli des neiges qui te suit partout... c\'est tout simplement ÉNORME et purement excellent !! <b>A posséder ABSOLUMENT !!!</b>',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            268 =>
                array (
                    'id' => 285,
                    'name' => 'MONTURE : Loup de l\'Hiver',
                    'name_shop' => 'MONTURE : Loup de l\'Hiver',
                    'description' => 'Monte sur le dos d\'un superbe Loup qui incarne l\'Hiver et parcours à toute allure Blablaland! Avec sa fourrure épaisse, il ne craint ni le froid ni la pluie. <br><br>
<strong>Il peut faire baisser la température et faire pleuvoir : </strong>Lorsqu\'il danse, le Loup de l\'Hiver fait baisser la température en jeu de plusieurs degrés et fait pleuvoir sur la map ! Si plusieurs skins du Froid ou plusieurs loups dansent ensemble sur la même map, il est donc possible d\'invoquer l\'hiver, et s\'il pleut à ce moment, la pluie sera alors aussi transformée en neige !
<br>
<br>
<strong style="color:#BC6BD6;">Créez votre meute de Loups de l\'Hiver !! </strong>',
                    'price' => 1300,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            269 =>
                array (
                    'id' => 286,
                    'name' => 'MONTURE : Drakkar',
                    'name_shop' => 'MONTURE : Drakkar',
                    'description' => 'Cette superbe monture Drakkar est à la fois pratique et robuste ! Fabriquée dans le bois le plus résistant qu\'il soit, ce drakkar te conduira partout, sur terre comme sur mer. <br><br>
<strong>Le drakkar flotte sur l\'eau, comme les bouées ! Mets-le au fond de l\'eau et il te fera remonter super vite à la surface !!</strong> Une monture indispensable pour régner sur les mers et les terres de Blablaland !
<br><br>
<strong style="color:#BC6BD6;">Paré pour l\'aventure ?! En avant Guerriers Vikings ! </strong>',
                    'price' => 1650,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            270 =>
                array (
                    'id' => 287,
                    'name' => 'Bamboutus Catapultus',
                    'name_shop' => 'Bamboutus Catapultus',
                    'description' => '<strong style="color:#ffa800;">Fête du Soleil Levant !!</strong><br />Cette nouvelle espèce de la famille des Bambous est surprenante :D <br />
<strong>Son élasticité et sa robustesse</strong> ont été renforcées pour votre plus grand plaisir !
<br /><br />
1. <strong>Posez</strong> un Bamboutus Catapultus,<br />
2. <strong>Sautez sur le sommet </strong>du Bamboutus,<br />
3. <strong>WAAAAAAAOUUUUUHHHHOUUUUUU !! </strong><br />
<br /><br />
<strong style="color:#BC6BD6;">Partez à la découverte de Blablaland en parcourant les maps de Bamboutus Catapultus en Bamboutus Catapultus !!</strong> Vous ne verrez plus Blablaland de la même manière !
<br /><br />
<span style="color:#ffa800;"><strong>EXCLU Fête du Soleil Levant :</strong> Cet item n\'est en vente que pendant la fête du Soleil Levant</span>
<br /><br />',
                    'price' => 8,
                    'token' => 0,
                    'special' => 'COOKIE',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            271 =>
                array (
                    'id' => 288,
                    'name' => 'Déco Maisons : Statue Dragon',
                    'name_shop' => 'Déco Maisons : Statue Dragon',
                    'description' => '<strong style="color:#FF00FF;">Une déco pour votre maison !</strong><br />
<br />
Embellissez vos maisons avec cette <strong>superbe statue dorée de Dragon Chinois ! </strong>
<br /><br />
Toute la finesse et la puissance du Dragon à poser en un clic dans votre nid douillet.<br /><br />
Pour l\'installer, c\'est tout simple, cliquez sur l\'icone de la décoration dans votre inventaire, cliquez à nouveau pour l\'enlever.
<br /><br />
<strong style="color:#BC6BD6;">Décorez vos maisons comme il vous plait, selon vos envies avec cette sublime déco de maison !!</strong><br /><br />',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            272 =>
                array (
                    'id' => 289,
                    'name' => 'Déco Maisons : Ombrelle Chinoise',
                    'name_shop' => 'Déco Maisons : Ombrelle Chinoise',
                    'description' => '<strong style="color:#FF00FF;">Une déco pour votre maison !</strong><br />
<br />
Posez au sol <strong>cette jolie ombrelle en papier ornée de l\'idéogramme du cheval </strong>et décorez votre intérieur d\'une ambiance asiatique !
<br /><br />
Délicate et toute colorée, elle donnera un style exquis à votre intérieur.<br /><br />
Pour l\'installer, c\'est tout simple, cliquez sur l\'icone de la décoration dans votre inventaire, cliquez à nouveau pour l\'enlever.
<br /><br />
<strong style="color:#BC6BD6;">Décorez vos maisons comme il vous plait, selon vos envies avec cette sublime déco de maison !!</strong><br /><br />',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            273 =>
                array (
                    'id' => 290,
                    'name' => 'Déco Maisons : Maneki Neko',
                    'name_shop' => 'Déco Maisons : Maneki Neko',
                    'description' => '<strong style="color:#FF00FF;">Une déco pour votre maison !</strong><br />
<br />
<strong>Ce petit chat tout mignon apporte bonheur et prospérité à tous ceux qui le possèdent !</strong>
<br /><br />
Il n\'y a donc plus une seconde à perdre, mettez toutes les chances de votre côté en adoptant cette statuette toute kawaii.<br /><br />
Pour l\'installer, c\'est tout simple, cliquez sur l\'icone de la décoration dans votre inventaire, cliquez à nouveau pour l\'enlever.
<br /><br />
<strong style="color:#BC6BD6;">Décorez vos maisons comme il vous plait, selon vos envies avec cette sublime déco de maison !!</strong><br /><br />',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            274 =>
                array (
                    'id' => 291,
                    'name' => 'Déco Maisons : Bonzaï',
                    'name_shop' => 'Déco Maisons : Bonzaï',
                    'description' => '<strong style="color:#FF00FF;">Une déco pour votre maison !</strong><br />
<br />
<strong>Zen attitude ! Ajoutez un peu de verdure dans votre maison en posant ce tout mignon bonzai là où vous le souhaitez !</Strong>
<br /><br />
Créez-vous votre petit cocon de calme et de sérénité grâce à ce petit arbre qui ne demande qu\'à embellir vos maisons :)<br /><br />
Pour l\'installer, c\'est tout simple, cliquez sur l\'icone de la décoration dans votre inventaire, cliquez à nouveau pour l\'enlever.
<br /><br />
<strong style="color:#BC6BD6;">Décorez vos maisons comme il vous plait, selon vos envies avec cette sublime déco de maison !!</strong><br /><br />',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            275 =>
                array (
                    'id' => 292,
                    'name' => 'Déco Maisons : Lanterne Chinoise',
                    'name_shop' => 'Déco Maisons : Lanterne Chinoise',
                    'description' => '<strong style="color:#FF00FF;">Une déco pour votre maison !</strong><br />
<br />
<strong>Posez votre Lanterne Chinoise pour égayer chacune de vos maisons et faire entrer un peu d\'Asie dans votre petit nid douillet.</strong>
<br /><br />
Choisissez la lanterne que vous préférez <strong>parmi les 4 proposées</strong>, rouge ou dorée, avec le dessin du cheval ou son idéogramme ! Magique !
<br /><br />
C\'est tout simple, cliquez sur l\'icone de la décoration dans votre inventaire pour l\'installer, cliquez à nouveau pour l\'enlever et découvrez les différentes lanternes !
<br /><br />
<strong style="color:#BC6BD6;">Décorez vos maisons comme il vous plait, selon vos envies avec cette sublime déco de maison !!</strong><br /><br />',
                    'price' => 450,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            276 =>
                array (
                    'id' => 293,
                    'name' => 'MONTURE : Dragon des Volcans',
                    'name_shop' => 'MONTURE : Dragon des Volcans',
                    'description' => 'Ce Dragon à la crinière ébouriffée et aux pattes métalliques a été craché par le volcan lors d\'une montée de magma.
<br />
Quand il se déplace, le Dragon des Volcans plane à la surface du sol, aussi vaporeux qu\'un nuage.<br /><br />
Il possède 2 pouvoirs extraordinaires :<br />
• <strong>Attaque de Feu : </strong>projette et brûle les blablas autour de lui. Pour utiliser ce pouvoir, maintiens le bouton du pouvoir enfoncé jusqu\'à ce que les petites flammèches disparaissent. Lâche alors le bouton et voilà ! Une explosion se produit !<br /><br />
• <strong>Armure anti-feu : </strong>le Dragon des Volcans ne craint pas la lave et peut se poser dessus sans griller !!
<br /><br />
<strong style="color:#BC6BD6;">Maitrise le pouvoir explosif du Dragon des Volcans !!!</strong>',
                    'price' => 1950,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            277 =>
                array (
                    'id' => 295,
                    'name' => 'Drapeau Horia',
                    'name_shop' => 'Drapeau Horia',
                    'description' => '<strong style="color:#BC6BD6;">OBJET EXCLUSIF HORIA</strong><br /><br />
Arbore fièrement l\'emblême de la cité d\'Horia qui prouvera que tu es un grand chasseur de Dragons !!
<br /><br />
<strong style="color:#BC6BD6;">Débloque cet objet en jouant à Horia, the Mystic Battle !!</strong>
<br /><br />
<em>Atteins le niveau 150 sur le jeu mobile Horia, the Mystic Battle pour obtenir ce drapeau.</em>
<br /><br />
<a href="http://horia.niveau99.com" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/pitigemme.png" align="absmiddle" border="0" /> En savoir plus sur Horia, the Mystic Battle.</a>',
                    'price' => 1,
                    'token' => 0,
                    'special' => 'HORIA',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            278 =>
                array (
                    'id' => 296,
                    'name' => 'Tablette Horia',
                    'name_shop' => 'Tablette Horia',
                    'description' => '<strong style="color:#BC6BD6;">OBJET EXCLUSIF HORIA</strong><br /><br />
Montre que tu joues à Horia en paradant avec cet objet tablette !
<br /><br />
<strong style="color:#BC6BD6;">Débloque cet objet en jouant à Horia, the Mystic Battle !!</strong>
<br /><br />
<em>Finis le tutoriel sur le jeu mobile Horia, the Mystic Battle pour obtenir cette tablette.</em>
<br /><br />
<a href="http://horia.niveau99.com" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/pitigemme.png" align="absmiddle" border="0" /> En savoir plus sur Horia, the Mystic Battle.</a>',
                    'price' => 1,
                    'token' => 0,
                    'special' => 'HORIA',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            279 =>
                array (
                    'id' => 297,
                    'name' => 'Nuage St Valentin',
                    'name_shop' => 'Nuage St Valentin',
                    'description' => 'Ce nuage vaporeux est une vraie petite merveille.<br/>
Fais apparaître le nuage et <b>invite jusqu\'à 5 Blablas à te rejoindre</b> !! Seuls les Blablas que tu invites peuvent monter avec toi sur le nuage.<br \\>
Quand tu poses le nuage, une option apparaît dans ton sac pour inviter des gens ou supprimer ton nuage.<br \\><br \\>
<strong style="color:#BC6BD6;">A toi les maps du ciel pour discuter tranquillement avec tes potes !</strong><br>
<em>Le nuage reste 30 minutes mais il disparait si tu te déconnectes. Attention ! Il ne peut y avoir que 5 nuages par map.</em>',
                    'price' => 120,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            280 =>
                array (
                    'id' => 298,
                    'name' => 'Nappe Picnic',
                    'name_shop' => 'Nappe Picnic',
                    'description' => 'Quoi de mieux qu\'une jolie nappe pour un repas en amoureux dans les plaines verdoyantes de Blablaland !
Fais apparaître la nappe et invite une deuxième personne <em>(une copine, un amoureux, qui tu veux !)</em> à te rejoindre en tête-à-tête !!<br \\><br \\>
<b>Vous serez alors complètement isolés du reste du monde puisque vous n\'entendrez plus ce qui se passe sur le reste de la map  et que les Blablas sur la map ne verront pas ce que vous vous dites !!!</b> Vous ne verrez que votre seule conversation.<br />
La nappe reste 10 min tant qu\'une personne reste assise.<br /><br />
<strong style="color:#BC6BD6;">Evadez-vous sur votre nappe et ignorez le reste du monde ! A vous la discrétion et le calme !</strong><br />
<em>Si les deux personnes quittent la nappe, elle disparaîtra après 1m30.</em>',
                    'price' => 100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            281 =>
                array (
                    'id' => 299,
                    'name' => 'Epée Horia',
                    'name_shop' => 'Epée Horia',
                    'description' => '<strong style="color:#BC6BD6;">OBJET EXCLUSIF HORIA</strong><br /><br />
Comment elle est trop classe cette épée et en plus, tu peux l\'utiliser pour cogner les gens !
<br /><br />
<strong style="color:#BC6BD6;">Débloque cet objet en jouant à Horia, the Mystic Battle !!</strong>
<br /><br />
<em>Obtiens tous les points de talents sur le jeu mobile Horia, the Mystic Battle pour obtenir cette épée.</em>
<br /><br />
<a href="http://horia.niveau99.com" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/pitigemme.png" align="absmiddle" border="0" /> En savoir plus sur Horia, the Mystic Battle.</a>',
                    'price' => 1,
                    'token' => 0,
                    'special' => 'HORIA',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            282 =>
                array (
                    'id' => 300,
                    'name' => 'Réduction 50%',
                    'name_shop' => 'Réduction 50%',
                    'description' => 'Réduction 50%',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            283 =>
                array (
                    'id' => 301,
                    'name' => 'Réduction 90%',
                    'name_shop' => 'Réduction 90%',
                    'description' => 'Réduction 90%',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            284 =>
                array (
                    'id' => 302,
                    'name' => 'MONTURE : Tortue Horia',
                    'name_shop' => 'MONTURE : Tortue Horia',
                    'description' => '<strong style="color:#BC6BD6;">MONTURE EXCLUSIVE HORIA</strong><br /><br />
Apprivoise la vile tortue d\'Horia et monte sur son dos sans risquer de perdre un coeur de vie !!
<br /><br />
<strong style="color:#BC6BD6;">Débloque cette monture et en jouant à Horia, the Mystic Battle !!</strong>
<br /><br />
<em>Extermine 500 tortues sur le jeu mobile Horia, the Mystic Battle pour obtenir cette monture tortue.</em>
<br /><br />
<a href="http://horia.niveau99.com" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/pitigemme.png" align="absmiddle" border="0" /> En savoir plus sur Horia, the Mystic Battle.</a>',
                    'price' => 1,
                    'token' => 0,
                    'special' => 'HORIA',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            285 =>
                array (
                    'id' => 303,
                    'name' => 'Drapeau Donjon',
                    'name_shop' => 'Drapeau Donjon',
                    'description' => '<strong style="color:#303030;">RECOMPENSE DONJON</strong><br /><br />
ZE récompense ! LA récompense suprême du Donjon !!<br />
Prouve ta puissance, ta dextérité, ta ruse au combat en hissant ce drapeau exclusif aux couleurs du Donjon !
<br /><br />
<strong style="color:#BC6BD6;">Trop facile pour toi, le jeu du Donjon :D Pavane-toi avec ce magnifaiiique drapeau!</strong>
<br /><br />
<a href="/site/jeu_donjon.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/5.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Donjon</a>',
                    'price' => 1,
                    'token' => 2500,
                    'special' => 'DUNGEON',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 5,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            286 =>
                array (
                    'id' => 304,
                    'name' => 'BLIBLI : Chauve-Souris',
                    'name_shop' => 'BLIBLI : Chauve-Souris',
                    'description' => '<strong style="color:#303030;">RECOMPENSE DONJON</strong><br /><br />
Ce blibli Chauve-Souris aux yeux angoissants <strong>vous téléporte gratuitement et directement sur la map du Donjon et vous permet en plus de doubler le nombre de jetons gagnés lorsque vous l\'activez dans le donjon !!</strong><br />Sympa ce taxi, non ?!
<br /><br />
<strong style="color:#BC6BD6;">Un Blibli pratique qui s\'accordera parfaitement avec votre teint !!</strong>
<br /><br />
<a href="/site/jeu_donjon.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/5.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Donjon</a>',
                    'price' => 1,
                    'token' => 150,
                    'special' => 'DUNGEON',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 5,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            287 =>
                array (
                    'id' => 305,
                    'name' => 'Donjon Potion Vie',
                    'name_shop' => 'Donjon Potion Vie',
                    'description' => '<strong style="color:#303030;">OBJET EXCLUSIF DONJON</strong><br /><br />
Besoin d\'un coup de pouce dans le mini-jeu du Donjon ? <br /><br />
<strong style="color:#BC6BD6;"> Cette Potion de Vie permet de remplir tous les coeurs de vie vides pendant votre partie.</strong>
<br /><br />
<em> Il est possible d\'utiliser autant de Potions de Vie que vous le souhaitez dans la même partie !</em>
<br /><br />
<a href="/site/jeu_donjon.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/5.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Donjon</a>',
                    'price' => 2,
                    'token' => 5,
                    'special' => 'DUNGEON',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 5,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            288 =>
                array (
                    'id' => 307,
                    'name' => 'Donjon Bandage',
                    'name_shop' => 'Donjon Bandage',
                    'description' => '<strong style="color:#303030;">OBJET EXCLUSIF DONJON</strong><br /><br />
Besoin d\'un coup de pouce dans le mini-jeu du Donjon ? <br /><br />
<strong style="color:#BC6BD6;"> Ce Bandage permet de remplir un coeur de vie vide pendant votre partie.</strong>
<br /><br />
<em> Il est possible d\'utiliser autant de bandages que vous le souhaitez dans la même partie !</em>
<br /><br />
<a href="/site/jeu_donjon.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/5.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Donjon</a>',
                    'price' => 1,
                    'token' => 2,
                    'special' => 'DUNGEON',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 5,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            289 =>
                array (
                    'id' => 308,
                    'name' => 'Donjon Petit talisman Vie',
                    'name_shop' => 'Donjon Petit talisman Vie',
                    'description' => '<strong style="color:#303030;">OBJET EXCLUSIF DONJON</strong><br /><br />
Besoin d\'un coup de pouce dans le mini-jeu du Donjon ? <br /><br />
<strong style="color:#BC6BD6;"> Ce gros talisman de Vie augmente la vie du joueur pour toute la durée de la partie : +1 point de vie !</strong>
<br /><br />
<em> On ne peut en porter qu\'un seul à la fois dans une même partie :)</em>
<br /><br />
<a href="/site/jeu_donjon.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/5.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Donjon</a>',
                    'price' => 3,
                    'token' => 5,
                    'special' => 'DUNGEON',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 5,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            290 =>
                array (
                    'id' => 309,
                    'name' => 'Donjon Gros talisman Vie',
                    'name_shop' => 'Donjon Gros talisman Vie',
                    'description' => '<strong style="color:#303030;">OBJET EXCLUSIF DONJON</strong><br /><br />
Besoin d\'un coup de pouce dans le mini-jeu du Donjon ? <br /><br />
<strong style="color:#BC6BD6;"> Ce gros talisman de Vie augmente la vie du joueur pour toute la durée de la partie : +2 points de vie !</strong>
<br /><br />
<em> On ne peut en porter qu\'un seul à la fois dans une même partie :)</em><br /><br />
<a href="/site/jeu_donjon.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/5.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Donjon</a>',
                    'price' => 5,
                    'token' => 10,
                    'special' => 'DUNGEON',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 5,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            291 =>
                array (
                    'id' => 310,
                    'name' => 'Donjon Petit talisman Force',
                    'name_shop' => 'Donjon Petit talisman Force',
                    'description' => '<strong style="color:#303030;">OBJET EXCLUSIF DONJON</strong><br /><br />
Besoin d\'un coup de pouce dans le mini-jeu du Donjon ? <br /><br />
<strong style="color:#BC6BD6;"> Ce petit talisman de Force augmente la puissance du joueur pour toute la durée de la partie : +1 point en attaque !</strong>
<br /><br />
<em> On ne peut en porter qu\'un seul à la fois dans une même partie :)</em>
<br /><br />
<a href="/site/jeu_donjon.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/5.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Donjon</a>',
                    'price' => 3,
                    'token' => 5,
                    'special' => 'DUNGEON',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 5,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            292 =>
                array (
                    'id' => 311,
                    'name' => 'Donjon Gros talisman Force',
                    'name_shop' => 'Donjon Gros talisman Force',
                    'description' => '<strong style="color:#303030;">OBJET EXCLUSIF DONJON</strong><br /><br />
Besoin d\'un coup de pouce dans le mini-jeu du Donjon ? <br /><br />
<strong style="color:#BC6BD6;"> Ce gros talisman de Force augmente la puissance du joueur pour toute la durée de la partie : +3 points en attaque !</strong>
<br /><br />
<em> On ne peut en porter qu\'un seul à la fois dans une même partie :)</em>
<br /><br />
<a href="/site/jeu_donjon.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/5.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Donjon</a>',
                    'price' => 5,
                    'token' => 10,
                    'special' => 'DUNGEON',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 5,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            293 =>
                array (
                    'id' => 312,
                    'name' => 'Coffre Donjon (gagne 11 BBL)',
                    'name_shop' => 'Coffre Donjon (gagne 11 BBL)',
                    'description' => '<strong style="color:#303030;">RECOMPENSE DONJON</strong><br /><br />
Une fois par jour tu peux acheter ce coffre pour gagner 10 Blabillons. Tu ne peux le faire qu\'une fois par jour, ensuite, tu devras attendre le lendemain si tu désires convertir à nouveau des Jetons Donjon en Blabillons !!<br />
<br />
<b>Fonctionnement : Lorsque tu as assez de Jetons Donjon et que tu désires les convertir en BBL, il te suffit d\'acheter ce coffre qui te fait gagner instantanément 11 BBL.<br />
<em>Le coffre n\'apparait pas dans ton inventaire en jeu.</em></b>
<br /><br />
<strong style="color:#BC6BD6;">Tous les jours, gagne 11 BBL en convertissant tes Jetons Donjon!!</strong>
<br /><br />
<a href="/site/jeu_donjon.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/5.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Donjon</a>',
                    'price' => 1,
                    'token' => 100,
                    'special' => 'DUNGEON',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 5,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            294 =>
                array (
                    'id' => 313,
                    'name' => 'Marteau Paladin',
                    'name_shop' => 'Marteau Paladin',
                    'description' => 'Marteau Paladin',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            295 =>
                array (
                    'id' => 314,
                    'name' => 'Chapeau du Mage',
                    'name_shop' => 'Chapeau du Mage',
                    'description' => 'Chapeau du Mage',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            296 =>
                array (
                    'id' => 315,
                    'name' => 'Peluche Elfe',
                    'name_shop' => 'Peluche Elfe',
                    'description' => 'Peluche Elfe',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            297 =>
                array (
                    'id' => 316,
                    'name' => 'Ballon Donjon',
                    'name_shop' => 'Ballon Donjon',
                    'description' => 'Ballon Donjon',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            298 =>
                array (
                    'id' => 317,
                    'name' => 'Ticket N400',
                    'name_shop' => 'Ticket N400',
                    'description' => 'Ticket N400',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            299 =>
                array (
                    'id' => 318,
                    'name' => 'Drapeau 6 ans Blablaland',
                    'name_shop' => 'Drapeau 6 ans Blablaland',
                    'description' => 'Drapeau 6 ans Blablaland',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            300 =>
                array (
                    'id' => 319,
                    'name' => 'MONTURE : Manticore',
                    'name_shop' => 'MONTURE : Manticore',
                    'description' => 'Tout droit sortie de l\'Antre de Feu, la Manticore possède un corps de lion, des ailes de chauve-souris et une queue de scorpion !! Cette créature mystérieuse et impressionnante vit parmi le peuple des Damnés dans l\'Antre de Feu et ne remontre que très rarement à la surface.
<br /><br />
<strong>Pour frapper le sol et faire tomber les Blablas proches : </strong>Appuyez 2 fois sur la flèche du bas lorsque vous êtes en l\'air.<br>
<br /><br />
<strong>Pour vous envoler avec la Manticore :</strong> Activez la monture, lorsque vous sautez, gardez la flèche du haut appuyée, la Manticore se mettra alors à planer. Après une seconde, ses Ailes s\'orientent vers le haut vous indiquant que vous pouvez relâcher la touche et appuyer de nouveau vers le haut pour faire un battement d\'Ailes et reprendre de l\'élan. Maintenez de nouveau la touche, et ainsi de suite. Conservez le rythme pour dominer le ciel de Blablaland !<br />
<br /><br />
<strong style="color:#BC6BD6;">A vous la monture la plus fantasmagorique de Blablaland !!</strong>',
                    'price' => 2100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            301 =>
                array (
                    'id' => 320,
                    'name' => 'MONTURE : Colibri',
                    'name_shop' => 'MONTURE : Colibri',
                    'description' => 'Vif et coloré, ce colibri saura ravir les amoureux de la nature et des oiseaux !
<br /><br />
Le Colibri plane au-dessus du sol et des étendues d\'eau.<br /><br />
<strong>Lance-toi dans les airs avec la flèche du haut et maintiens la touche enfoncée, le Colibri s\'envolera dans le ciel avec toi sur son dos !!</strong>
<br /><br />
<strong style="color:#BC6BD6;">Cette monture pleine de poésie est réservée aux doux rêveurs !</strong>',
                    'price' => 1750,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            302 =>
                array (
                    'id' => 321,
                    'name' => 'MAISON : Cabane',
                    'name_shop' => 'MAISON : Cabane',
                    'description' => 'Quel Blabla ne rêverait pas d\'une superbe cabane dans un arbre ? Spacieuse et confortable, cette jolie maison pleine de nature saura vous charmer !
<br /><br />
<strong>• Plus de maps : </strong>Cette maison possède 4 maps !! De quoi choisir son coin à tous les moments de la journée !
<br /><br />
<strong>• Plus de Blablas : </strong>Cette maison peut accueillir <strong>jusqu\'à 10 blablas </strong>(9 + son propriétaire) !!
<br /><br />
<strong>• Une lunette astronomique : </strong>Monte tout en haut de la plateforme et observe le ciel grâce à la lunette astronomique !!
<br /><br />
<strong>• Intercom : </strong>Utilise l\'intercom pour discuter avec les personnes à l\'intérieur de ta maison. Tu pourras ainsi parler avec tous les blablas présents aux 4 coins de ta maison.<br /> <em>Si tu n\'es pas le propriétaire de la maison, tu ne pourras entendre et parler qu\'avec les blablas présents sur la même map que toi.</em>
<br /><br />
<em>Pour plus d\'informations sur le fonctionnement des Maisons, consultez la fiche du Chalet en <a href="/site/shop_objet.php?giveme=212" target="_blank" class="fofo_link_extern">cliquant ici</a></em>
<br />
<br />
<strong style="color:#BC6BD6;">Un peu de repos en haut d\'un arbre, à écouter le gazouillis des oiseaux :) Fans de nature, cette maison est faite pour vous !</strong>',
                    'price' => 2500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 3,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            303 =>
                array (
                    'id' => 322,
                    'name' => 'Instrument : Guitare',
                    'name_shop' => 'Instrument : Guitare',
                    'description' => 'Pour les amateurs de musique, voici l\'instrument Guitare!!!<br/><br/>
<strong>Quand tu utilises la Guitare, une pop-up apparaît avec une liste de sons différents.</strong><br/> Tu peux donc jouer en cliquant sur les touches ou bien en utilisant les raccourcis sur ton clavier.
<br \\><br \\>
<strong style="color:#BC6BD6;">Réalise ton rêve et deviens une Super Star sur Blablaland !!!</strong><br>',
                    'price' => 850,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            304 =>
                array (
                    'id' => 323,
                    'name' => 'Scène musique',
                    'name_shop' => 'Scène musique',
                    'description' => 'Incontournable pour tous ceux qui veulent se produire en public et montrer leur talent de musicien au monde entier !!<br/><br/>
Fais apparaître la scène de musique et <b>invite jusqu\'à 3 Blablas à te rejoindre</b> !! Seuls les Blablas que tu invites peuvent monter avec toi sur scène.<br \\>
Quand tu poses la scène, une option apparaît dans ton sac pour inviter des gens ou supprimer ta scène.<br \\>
<strong>La scène de musique permet d\'enregistrer la musique jouée par les blablas qui possèdent un instrument de musique et qui se trouvent sur scène.</strong><br \\><br \\>
Appuie sur le rond rouge pour commencer l\'enregistrement et sur le carré pour l\'arrêter puis clique sur la flèche verte pour écouter ton morceau. Tu peux arrêter l\'enregistrement puis utiliser un autre instrument sur la même piste :) <strong>Attention !!! Si tu enregistres à nouveau, le précédent morceau sera effacé et remplacé par ta nouvelle composition !!</strong><br \\><br \\>
Prends une photo de toi ou de ton groupe pour en faire la promo et la partager sur Facebook ou n\'importe où sur la toile !<br \\><br \\>
<strong style="color:#BC6BD6;">A toi les groupies sur Blablaland !!!</strong><br><br \\>
<em> Si ta scène est inactive pendant 15 minutes, alors elle disparaît. Elle disparaît aussi si tu te déconnectes. Attention ! Il ne peut y avoir que 2 scènes par map.</em>',
                    'price' => 1100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            305 =>
                array (
                    'id' => 324,
                    'name' => 'Instrument : Basse',
                    'name_shop' => 'Instrument : Basse',
                    'description' => 'Pour les amateurs de musique, voici l\'instrument Basse !!!<br/><br/>
<strong>Quand tu utilises la Basse, une pop-up apparaît avec une liste de sons différents. </strong><br/>Tu peux donc jouer en cliquant sur les touches ou bien en utilisant les raccourcis sur ton clavier.
<br \\><br \\>
<strong style="color:#BC6BD6;">Réalise ton rêve et deviens une Super Star sur Blablaland !!!</strong><br>',
                    'price' => 850,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            306 =>
                array (
                    'id' => 325,
                    'name' => 'Instrument : Batterie',
                    'name_shop' => 'Instrument : Batterie',
                    'description' => 'Pour les amateurs de musique, voici l\'instrument Batterie !!!<br/><br/>
<strong>Quand tu utilises la Batterie, une pop-up apparaît avec une liste de sons différents.</strong><br/> Tu peux donc jouer en cliquant sur les touches ou bien en utilisant les raccourcis sur ton clavier.<br \\>
<em> Si tu te déplaces alors que tu joues de la batterie, l\'instrument disparaît !</em>
<br \\><br \\>
<strong style="color:#BC6BD6;">Réalise ton rêve et deviens une Super Star sur Blablaland !!!</strong><br>',
                    'price' => 850,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            307 =>
                array (
                    'id' => 326,
                    'name' => 'Huile de Monoï',
                    'name_shop' => 'Huile de Monoï',
                    'description' => 'Bien connue pour ses vertus bronzantes, l\'Huile de Monoï est l\'objet incontournable de l\'été !<br/><br/>
<strong>Applique de l\'huile sur ton Blabla et tu te verras allongé sur la plage, sous un parasol. Tu peux choisir parmi trois couleurs incroyables de parasol !</strong>
<br \\><br \\>
<strong style="color:#BC6BD6;">Te voilà paré pour l\'été !!</strong><br>',
                    'price' => 450,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            308 =>
                array (
                    'id' => 327,
                    'name' => 'MONTURE : Tortue',
                    'name_shop' => 'MONTURE : Tortue',
                    'description' => 'Wouaawww ! Une tortue aventurière !!!
<br /><br />Pars en voyage sur le dos tout équipé de ta tortue :P<br /><br />
<strong>Telle une bouée, la Tortue nage à la surface de l\'eau, ce qui te permet de te déplacer plus vite sur l\'eau !</strong>
<br /><br />
<strong style="color:#BC6BD6;">Une monture tout terrain et qui ne craint rien sur Blablaland !!!</strong>',
                    'price' => 1600,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            309 =>
                array (
                    'id' => 328,
                    'name' => 'MAISON : Plage',
                    'name_shop' => 'MAISON : Plage',
                    'description' => 'Cette petite maison aux allures de Case est vraiment charmante !!<br /><br />
Non seulement vous aurez accès à votre propre plage privée, mais en plus vous pourrez discuter autour du feu sur la plage lorsque la nuit tombe !!
<br /><br />
<strong>Pour un moment entre amis, avec son amoureux ou son amoureuse, la maison Plage peut contenir 2 Blablas (1 + son propriétaire)</strong>
<br /><br />
<strong style="color:#BC6BD6;">Soleil, plage privée : tout est réuni pour réussir de belles vacances sur Blablaland !</strong>
<br /><br />
<em>Pour plus d\'informations sur le fonctionnement des Maisons, consultez la fiche du Chalet en <a href="/site/shop_objet.php?giveme=212" target="_blank" class="fofo_link_extern">cliquant ici</a></em>',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 3,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            310 =>
                array (
                    'id' => 329,
                    'name' => 'BLIBLI : Toucan',
                    'name_shop' => 'BLIBLI : Toucan',
                    'description' => 'Ce Blibli Toucan coloré et gai volera à vos côtés sur Blablaland et vous accompagnera partout !<br /><br />
<strong>En plus, il vous téléporte gratuitement et directement sur la map des Trois Parasols.</strong>
<br /><br />
<strong style="color:#BC6BD6;">Un vol direct et sans escale pour la Plage !!</strong>
<br /><br />',
                    'price' => 850,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            311 =>
                array (
                    'id' => 330,
                    'name' => 'Instrument : Tambour',
                    'name_shop' => 'Instrument : Tambour',
                    'description' => 'Pour les amateurs de musique exotique, voici l\'instrument Tambour !!!<br/><br/>
<strong>Quand tu utilises cet instrument, une pop-up apparaît avec une liste de sons différents.</strong><br/> Tu peux donc jouer en cliquant sur les touches ou bien en utilisant les raccourcis sur ton clavier.<br \\>
<br \\><br \\>
<strong style="color:#BC6BD6;">Crée une ambiance paradisiaque sur Blablaland !!!</strong><br>',
                    'price' => 700,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            312 =>
                array (
                    'id' => 331,
                    'name' => 'Instrument : Ukulele',
                    'name_shop' => 'Instrument : Ukulele',
                    'description' => 'Pour les amateurs de musique exotique, voici l\'instrument Ukulele!!!<br/><br/>
<strong>Quand tu utilises cet instrument, une pop-up apparaît avec une liste de sons différents.</strong><br/> Tu peux donc jouer en cliquant sur les touches ou bien en utilisant les raccourcis sur ton clavier.<br \\>
<br \\><br \\>
<strong style="color:#BC6BD6;">Crée une ambiance paradisiaque sur Blablaland !!!</strong><br>',
                    'price' => 700,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            313 =>
                array (
                    'id' => 332,
                    'name' => 'Graines de Cocotier',
                    'name_shop' => 'Graines de Cocotier',
                    'description' => 'Ces Graines font pousser de splendides cocotiers !! <br />Une fois planté, il poussera lentement (ou super vite si un skin jardinier l\'arrose) jusqu\'à devenir immense !!
<br /><br />
<strong>Tu peux toujours tenter de récolter des trèfles mais si tu n\'y arrives pas, tu seras transformé en noix de coco :D</strong>
<br /><br />
<strong style="color:#BC6BD6;">Fais de la plage un endroit exceptionnel avec tous ces cocotiers !!</strong>',
                    'price' => 100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '10',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            314 =>
                array (
                    'id' => 333,
                    'name' => 'Pack Baston',
                    'name_shop' => 'Pack Baston',
                    'description' => '<strong style="color:#BC6BD6;">PACK d\'objets/pouvoirs</strong><br>Le pack ultime pour tous ceux qui aiment la bagarre !!!<br><br>
<b>Ce Pack contient : </b>1 minute de Jetpack, 5 minutes de bouclier,5 téléporteurs, 15 bombes, 3 canons à blabla, 1 minute de Turbo Tank, 15 faux cadeaux !',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'PACK',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            315 =>
                array (
                    'id' => 334,
                    'name' => 'Pack Love',
                    'name_shop' => 'Pack Love',
                    'description' => '<strong style="color:#BC6BD6;">PACK d\'objets/pouvoirs</strong><br>Le pack pour tous les amoureux :)<br><br>
<b>Ce Pack contient : </b>3 Coeurs Romantiques, 1 Coeur Or, 1 alliance d\'union, 5 Roses, 5 Chocolats, 1 Table Romantique, 1 Nuage St-Valentin',
                    'price' => 650,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'PACK',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            316 =>
                array (
                    'id' => 335,
                    'name' => 'Pack Potions',
                    'name_shop' => 'Pack Potions',
                    'description' => '<strong style="color:#BC6BD6;">PACK d\'objets/pouvoirs</strong><br>A tous les accro aux potions, ce pack est fait pour vous !!<br><br>
<b>Ce Pack contient : </b>5 Potions caca, 5 Potions de miniaturisation, 5 Potions de nage rapide, 5 Potions de pierre, 5 Potions de rapidité, 5 Potions de saut, 5 potions Fantôme, 5 potions Foudre, 5 potions multicolore, 5 Potions Plume !!',
                    'price' => 230,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'PACK',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            317 =>
                array (
                    'id' => 336,
                    'name' => 'Pack Fiestaaa !',
                    'name_shop' => 'Pack Fiestaaa !',
                    'description' => '<strong style="color:#BC6BD6;">PACK d\'objets/pouvoirs</strong><br>C\'est l\'heure de faire la fête !!!<br><br>
<b>Ce Pack contient : </b>15 ballons Anniversaire, 45 confettis, 30 feux d\'artifice, 10 Elixirs de Leprechaun, 10 Pintes du Lutin, 10 Sirops de trèfle et 10 minutes de Moonwalk !!',
                    'price' => 300,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'PACK',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            318 =>
                array (
                    'id' => 337,
                    'name' => 'Pack Kawaii',
                    'name_shop' => 'Pack Kawaii',
                    'description' => '<strong style="color:#BC6BD6;">PACK d\'objets/pouvoirs</strong><br>Le pack TROP mignon x3<br><br>
<b>Ce Pack contient : </b>10 minutes de Blabicoptère, 15 Bulles de Savon, 10 minutes de corps astral et 10 Bombes Coeur !',
                    'price' => 600,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'PACK',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            319 =>
                array (
                    'id' => 338,
                    'name' => 'Pack Fleurs',
                    'name_shop' => 'Pack Fleurs',
                    'description' => '<strong style="color:#BC6BD6;">PACK d\'objets/pouvoirs</strong><br>Amoureux de la nature, ce pack est pour vous !!<br><br>
<b>Ce Pack contient : </b> 30 Graines de Lys, 30 Graines de Rose, 30 Graines de Tulipe !',
                    'price' => 600,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'PACK',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            320 =>
                array (
                    'id' => 339,
                    'name' => 'Pack Donjon',
                    'name_shop' => 'Pack Donjon',
                    'description' => '<strong style="color:#BC6BD6;">PACK d\'objets/pouvoirs</strong><br>Le pack qu\'il te faut pour t\'aider à avancer très loin dans le mini-jeu du Donjon !
<br><br>
<b>Ce Pack contient : </b>15 Bandages, 10 potions de vie, 10 petits talismans de vie, 5 gros talismans de vie, 10 petits talismans de force, 5 gros talismans de force !!
<br /><br />
<a href="/site/jeu_donjon.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/5.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Donjon</a>',
                    'price' => 100,
                    'token' => 190,
                    'special' => 'DUNGEON',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'PACK',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            321 =>
                array (
                    'id' => 340,
                    'name' => 'Plumes & Goudron',
                    'name_shop' => 'Plumes & Goudron',
                    'description' => 'Hahaha !! Pose ce tonneau au sol et attend qu\'il explose ... <br />
Tic tac tic tac ...<br /><br />
BOOOOOOOM ! <strong>Tous les Blablas qui se promenaient tranquillement aux alentours de la bombe sont transformés... en skin plumes !</strong><br /><br />
Et le goudron alors ? Ben il est en-dessous des plumes x)
<br /><br /><strong style="color:#BC6BD6;">Un tonneau plein de plumes pour du fun garanti !!</strong>',
                    'price' => 20,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            322 =>
                array (
                    'id' => 341,
                    'name' => 'MONTURE : Mustang',
                    'name_shop' => 'MONTURE : Mustang',
                    'description' => 'Yihaaaaa !!! Ce magnifique Mustang vient tout juste d\'être apprivoisé !
<br /><br />
Rapide et attachant, tu ne pourras plus te passer de ce magnifique cheval.
<strong>Galope les cheveux au vent sur ton fidèle destrier !</strong>
<br /><br />
<strong style="color:#BC6BD6;">A toi la sensation de liberté sur Blablaland !</strong>',
                    'price' => 1500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            323 =>
                array (
                    'id' => 342,
                    'name' => 'Donjon : Journal du Héros',
                    'name_shop' => 'Donjon : Journal du Héros',
                    'description' => '<strong style="color:#303030;">OBJET EXCLUSIF DONJON</strong><br /><br />
Besoin d\'un coup de pouce dans le mini-jeu du Donjon ? <br /><br />
<strong style="color:#BC6BD6;">Le Journal du Héros permet de booster les caractéristiques de ton personnage.</strong>
<br /><br />
Utilise-le en dehors du Donjon pour choisir quelle(s) caractéristique(s) tu veux améliorer en dépensant tes jetons Donjon.
<br /><br />
<strong>Attention !!! Si tu veux récupérer tes jetons pour améliorer d\'autres compétences, cela te coûtera des Blabillons !!</strong>
<br /><br />
<em> Les améliorations sont valables pour tous les skins Héros !</em>
<br /><br />
<a href="/site/jeu_donjon.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/5.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Donjon</a>',
                    'price' => 250,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            324 =>
                array (
                    'id' => 343,
                    'name' => 'BLIBLI : SuperCureuil',
                    'name_shop' => 'BLIBLI : SuperCureuil',
                    'description' => '<em>*jingle : SuperCureuiiiiiillll!!*</em><br><br>
Trognon ! SuperCureuil arrive pour sauver la forêt !!<br /><br />
<strong>SuperCureuil ramasse des graines de fleurs de la même variété que celle que tu viens de cueillir !!</strong>
<br /><br />
<em>Exemple : Si tu ramasses une graine de Lys, SuperCureuil te fait gagner une graine de Lys :D !! Merciiiii SuperCureuiilll !!!! </em>
<br /><br />
<strong style="color:#BC6BD6;">Protège l\'éco-système de Blablaland grâce à SuperCureuil !!</strong>
<br /><br />',
                    'price' => 850,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            325 =>
                array (
                    'id' => 344,
                    'name' => 'MAISON : Bosquet Magique',
                    'name_shop' => 'MAISON : Bosquet Magique',
                    'description' => 'Un vrai repère de Fées, ce Bosquet Magique !
<br /><br />
<strong>Ressource-toi dans ce petit cocon de nature, entouré d\'arbres et de buissons pour un moment plein de féérie !<br /></strong>
<br /><br />
Rebondis sur le Champignon pour t\'accrocher aux cordes ou passe un moment de tranquilité sur le banc ou le tronc d\'arbre !<br /><br />
Le Bosquet Magique peut contenir 5 Blablas (4 + son propriétaire)
<br /><br />
<strong style="color:#BC6BD6;">Ecoute le gazouillis des oiseaux dans ton Bosquet dans ce moment hors du temps !</strong>
<br /><br />
<em>Pour plus d\'informations sur le fonctionnement des Maisons, consulte la fiche du Chalet en <a href="/site/shop_objet.php?giveme=212" target="_blank" class="fofo_link_extern">cliquant ici</a></em>',
                    'price' => 2000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 3,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            326 =>
                array (
                    'id' => 345,
                    'name' => 'Déco Maisons : Araignée',
                    'name_shop' => 'Déco Maisons : Araignée',
                    'description' => '<strong style="color:#FF00FF;">Une déco pour votre maison !</strong><br />
<br />
<strong>Effrayez vos invités avec une déco cauchemardesque !!</strong>
<br /><br />
Pour l\'installer, c\'est tout simple, cliquez sur l\'icone de la décoration dans votre inventaire, cliquez à nouveau pour l\'enlever.
<br /><br />
<strong style="color:#BC6BD6;">Transformez votre maison en antre de la Terreur !!</strong><br /><br />',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            327 =>
                array (
                    'id' => 346,
                    'name' => 'Déco Maisons : Chaudron',
                    'name_shop' => 'Déco Maisons : Chaudron',
                    'description' => '<strong style="color:#FF00FF;">Une déco pour votre maison !</strong><br />
<br />
<strong>Effrayez vos invités avec une déco cauchemardesque !!</strong>
<br /><br />
Pour l\'installer, c\'est tout simple, cliquez sur l\'icone de la décoration dans votre inventaire, cliquez à nouveau pour l\'enlever. Recommencez autant de fois que vous le voulez pour l\'allumer ou l\'éteindre !
<br /><br />
<strong style="color:#BC6BD6;">Transformez votre maison en antre de la Terreur !!</strong><br /><br />',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            328 =>
                array (
                    'id' => 347,
                    'name' => 'Déco Maisons : Crâne',
                    'name_shop' => 'Déco Maisons : Crâne',
                    'description' => '<strong style="color:#FF00FF;">Une déco pour votre maison !</strong><br />
<br />
<strong>Effrayez vos invités avec une déco cauchemardesque !!</strong>
<br /><br />
Pour l\'installer, c\'est tout simple, cliquez sur l\'icone de la décoration dans votre inventaire, cliquez à nouveau pour l\'enlever. Recommencez autant de fois que vous le voulez pour l\'allumer ou l\'éteindre !
<br /><br />
<strong style="color:#BC6BD6;">Transformez votre maison en antre de la Terreur !!</strong><br /><br />',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            329 =>
                array (
                    'id' => 348,
                    'name' => 'Déco Maisons : Citrouille',
                    'name_shop' => 'Déco Maisons : Citrouille',
                    'description' => '<strong style="color:#FF00FF;">Une déco pour votre maison !</strong><br />
<br />
<strong>Effrayez vos invités avec une déco cauchemardesque !!</strong>
<br /><br />
Pour l\'installer, c\'est tout simple, cliquez sur l\'icone de la décoration dans votre inventaire, cliquez à nouveau pour l\'enlever. Recommencez autant de fois que vous le voulez pour l\'allumer ou l\'éteindre !
<br /><br />
<strong style="color:#BC6BD6;">Transformez votre maison en antre de la Terreur !!</strong><br /><br />',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            330 =>
                array (
                    'id' => 349,
                    'name' => 'Déco Maisons : Butternut',
                    'name_shop' => 'Déco Maisons : Butternut',
                    'description' => '<strong style="color:#FF00FF;">Une déco pour votre maison !</strong><br />
<br />
<strong>Effrayez vos invités avec une déco cauchemardesque !!</strong>
<br /><br />
Pour l\'installer, c\'est tout simple, cliquez sur l\'icone de la décoration dans votre inventaire, cliquez à nouveau pour l\'enlever. Recommencez autant de fois que vous le voulez pour l\'allumer ou l\'éteindre !
<br /><br />
<strong style="color:#BC6BD6;">Transformez votre maison en antre de la Terreur !!</strong><br /><br />',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            331 =>
                array (
                    'id' => 350,
                    'name' => 'Déco Maisons : Potimarron',
                    'name_shop' => 'Déco Maisons : Potimarron',
                    'description' => '<strong style="color:#FF00FF;">Une déco pour votre maison !</strong><br />
<br />
<strong>Effrayez vos invités avec une déco cauchemardesque !!</strong>
<br /><br />
Pour l\'installer, c\'est tout simple, cliquez sur l\'icone de la décoration dans votre inventaire, cliquez à nouveau pour l\'enlever. Recommencez autant de fois que vous le voulez pour l\'allumer ou l\'éteindre !
<br /><br />
<strong style="color:#BC6BD6;">Transformez votre maison en antre de la Terreur !!</strong><br /><br />',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            332 =>
                array (
                    'id' => 351,
                    'name' => 'Peluche Doudou Araignée',
                    'name_shop' => 'Peluche Doudou Araignée',
                    'description' => '<strong style="color:#FF5001;">EXCLU Doudou Araignée !!</strong><br>
Promène toi avec une Peluche "Doudou Araignée" dans les bras. Attention, ce doudou provoque de la peur... :)
<br /><br />
<strong style="color:#FF5001;">Une Peluche Araignée, voilà un beau terrifiant !!</strong>',
                    'price' => 200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            333 =>
                array (
                    'id' => 352,
                    'name' => 'Peluche Doudou Chauve-Souris',
                    'name_shop' => 'Peluche Doudou Chauve-Souris',
                    'description' => '<strong style="color:#FF5001;">EXCLU Doudou Chauve-Souris !!</strong><br>
Promène toi avec une Peluche "Doudou Chauve-Souris" dans les bras. Attention, ce doudou provoque de la peur... :)
<br /><br />
<strong style="color:#FF5001;">Une Peluche Chauve-Souris, voilà un beau terrifiant !!</strong>',
                    'price' => 200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            334 =>
                array (
                    'id' => 353,
                    'name' => 'Peluche Doudou Citrouille',
                    'name_shop' => 'Peluche Doudou Citrouille',
                    'description' => '<strong style="color:#FF5001;">EXCLU Doudou Citrouille !!</strong><br>
Promène toi avec une Peluche "Doudou Citrouille" dans les bras. Attention, ce doudou provoque de la peur... :)
<br /><br />
<strong style="color:#FF5001;">Une Peluche Citrouille, voilà un beau terrifiant !!</strong>',
                    'price' => 200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            335 =>
                array (
                    'id' => 354,
                    'name' => 'Peluche Doudou Poupée',
                    'name_shop' => 'Peluche Doudou Poupée',
                    'description' => '<strong style="color:#FF5001;">EXCLU Doudou Poupée !!</strong><br>
Promène toi avec une Peluche "Doudou Poupée" dans les bras. Attention, ce doudou provoque de la peur... :)
<br /><br />
<strong style="color:#FF5001;">Une Peluche Poupée, voilà un beau terrifiant !!</strong>',
                    'price' => 200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            336 =>
                array (
                    'id' => 355,
                    'name' => 'Peluche Doudou Épouvantail',
                    'name_shop' => 'Peluche Doudou Épouvantail',
                    'description' => '<strong style="color:#FF5001;">EXCLU Doudou Épouvantail !!</strong><br>
Promène toi avec une Peluche "Doudou Épouvantail" dans les bras. Attention, ce doudou provoque de la peur... :)
<br /><br />
<strong style="color:#FF5001;">Une Peluche Épouvantail, voilà un beau terrifiant !!</strong>',
                    'price' => 200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            337 =>
                array (
                    'id' => 356,
                    'name' => 'Bonbon1',
                    'name_shop' => 'Bonbon1',
                    'description' => 'Miam bonbon d\'halloween !',
                    'price' => 1,
                    'token' => 0,
                    'special' => 'HALLOWEEN',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            338 =>
                array (
                    'id' => 357,
                    'name' => 'Bonbon2',
                    'name_shop' => 'Bonbon2',
                    'description' => 'Miam bonbon d\'halloween !',
                    'price' => 10,
                    'token' => 0,
                    'special' => 'HALLOWEEN',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            339 =>
                array (
                    'id' => 358,
                    'name' => 'Bonbon3',
                    'name_shop' => 'Bonbon3',
                    'description' => 'Miam bonbon d\'halloween !',
                    'price' => 10,
                    'token' => 0,
                    'special' => 'HALLOWEEN',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            340 =>
                array (
                    'id' => 359,
                    'name' => 'Bonbon4',
                    'name_shop' => 'Bonbon4',
                    'description' => 'Miam bonbon d\'halloween !',
                    'price' => 10,
                    'token' => 0,
                    'special' => 'HALLOWEEN',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            341 =>
                array (
                    'id' => 360,
                    'name' => 'Bonbon5',
                    'name_shop' => 'Bonbon5',
                    'description' => 'Miam bonbon d\'halloween !',
                    'price' => 10,
                    'token' => 0,
                    'special' => 'HALLOWEEN',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            342 =>
                array (
                    'id' => 361,
                    'name' => 'Oeuf de monstre',
                    'name_shop' => 'Blibli : Monstre Oeuf',
                    'description' => '<strong>Elève ton petit monstre à toi !</strong>
<br \\><br \\>
Achète un oeuf de Mini-Monstre auprès d\'Agh\'ruda Ghast et donne-lui à manger régulièrement !! <br \\>
Ton petit monstre va grandir pour devenir un monstre de plus en plus grand !! <br \\> <br \\>
• <strong>Suivant ce que tu lui donnes à manger,</strong> il deviendra un monstre différent, <br \\><br \\>
• Un Blabla ne peut avoir <strong>qu\'un seul oeuf de Mini-Monstre à la fois, mais une fois éclos tu peux acheter d\'autres oeufs et les faire évoluer puis te balader sur le Tchat avec plusieurs Mini-Monstres,</strong><br \\><br \\>
• <strong>Donne-lui un nom pour 50 BBL </strong>: pour ça, il suffit que tu cliques dessus dans ton inventaire puis que tu cliques sur la petite roue dentée à côté de MINI-MONSTRE (Renommer ton Blibli).<br \\><br \\>
• Ton Mini-Monstre <strong>a besoin de manger pour évoluer : </strong><br \\>
Tu peux lui donner <strong><a href="/site/shop_objet.php?giveme=363" target="_blank" class="fofo_link_extern">de la Compotée de vers des sables sur son lit d\'algues</a>, ou bien <a href="/site/shop_objet.php?giveme=364" target="_blank" class="fofo_link_extern">des Pommes pourries</a> ou encore <a href="/site/shop_objet.php?giveme=365" target="_blank" class="fofo_link_extern">des Brochettes de fourmis</a></strong><br \\><br \\>
• Si ton Mini-Monstre ne te plaît plus, <strong>tu peux le supprimer dans l\'interface des Mini-Monstres</strong> pour acheter un nouvel oeuf. 333 Blabillons te seront alors remboursés<br \\><br \\>
<strong style="color:#ef4400;">Pour acheter un oeuf de Mini-Monstre, sa nourriture et obtenir plus d\'infos, rendez-vous auprès du PNJ Agh\'ruda Ghast sur la map Cabane (à côté du Manoir)</strong><br \\><br \\>
<strong style="color:#BC6BD6;">Adopte un Mini-Monstre et personnalise-le !!</strong>',
                    'price' => 666,
                    'token' => 0,
                    'special' => 'MINI_MONSTER',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            343 =>
                array (
                    'id' => 362,
                    'name' => 'Oeuf de monstre',
                    'name_shop' => 'Blibli : Monstre Oeuf',
                    'description' => '<strong>Elève ton petit monstre à toi !</strong>
<br \\><br \\>
Achète un oeuf de Mini-Monstre auprès d\'Agh\'ruda Ghast et donne-lui à manger régulièrement !! <br \\>
Ton petit monstre va grandir pour devenir un monstre de plus en plus grand !! <br \\> <br \\>
• <strong>Suivant ce que tu lui donnes à manger,</strong> il deviendra un monstre différent, <br \\><br \\>
• Un Blabla ne peut avoir <strong>qu\'un seul oeuf de Mini-Monstre à la fois, mais une fois éclos tu peux acheter d\'autres oeufs et les faire évoluer puis te balader sur le Tchat avec plusieurs Mini-Monstres,</strong><br \\><br \\>
• <strong>Donne-lui un nom pour 50 BBL </strong>: pour ça, il suffit que tu cliques dessus dans ton inventaire puis que tu cliques sur la petite roue dentée à côté de MINI-MONSTRE (Renommer ton Blibli).<br \\><br \\>
• Ton Mini-Monstre <strong>a besoin de manger pour évoluer : </strong><br \\>
Tu peux lui donner <strong><a href="/site/shop_objet.php?giveme=363" target="_blank" class="fofo_link_extern">de la Compotée de vers des sables sur son lit d\'algues</a>, ou bien <a href="/site/shop_objet.php?giveme=364" target="_blank" class="fofo_link_extern">des Pommes pourries</a> ou encore <a href="/site/shop_objet.php?giveme=365" target="_blank" class="fofo_link_extern">des Brochettes de fourmis</a></strong><br \\><br \\>
• Si ton Mini-Monstre ne te plaît plus, <strong>tu peux le supprimer dans l\'interface des Mini-Monstres</strong> pour acheter un nouvel oeuf. 333 Blabillons te seront alors remboursés<br \\><br \\>
<strong style="color:#ef4400;">Pour acheter un oeuf de Mini-Monstre, sa nourriture et obtenir plus d\'infos, rendez-vous auprès du PNJ Agh\'ruda Ghast sur la map Cabane (à côté du Manoir)</strong><br \\><br \\>
<strong style="color:#BC6BD6;">Adopte un Mini-Monstre et personnalise-le !!</strong>',
                    'price' => 666,
                    'token' => 0,
                    'special' => 'MINI_MONSTER',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            344 =>
                array (
                    'id' => 363,
                    'name' => 'Compotée de vers des sables sur son lit d\'algues',
                    'name_shop' => 'Compotée de vers des sables sur son lit d\'algues',
                    'description' => '<strong>Nourriture pour Mini-Monstres</strong>
<br \\><br \\>
Achète <a href="/site/shop_objet.php?giveme=361" target="_blank" class="fofo_link_extern">un oeuf de Mini-Monstre auprès d\'Agh\'ruda Ghast</a> et donne-lui à manger régulièrement pour qu"il grandisse !! <br \\><br \\>
Tu peux lui donner <strong><a href="/site/shop_objet.php?giveme=363" target="_blank" class="fofo_link_extern">de la Compotée de vers des sables sur son lit d\'algues</a>, ou bien <a href="/site/shop_objet.php?giveme=364" target="_blank" class="fofo_link_extern">des Pommes pourries</a> ou encore <a href="/site/shop_objet.php?giveme=365" target="_blank" class="fofo_link_extern">des Brochettes de fourmis</a></strong><br \\><br \\>
<strong>Suivant ce que tu lui donnes à manger,</strong> il deviendra un monstre différent. <br \\><br \\>
<strong style="color:#ef4400;">Pour acheter un oeuf de Mini-Monstre, sa nourriture et obtenir plus d\'infos, rendez-vous auprès du PNJ Agh\'ruda Ghast sur la map Cabane (à côté du Manoir)</strong><br \\><br \\>
<strong style="color:#BC6BD6;">Miam Miam Miam !</strong>',
                    'price' => 10,
                    'token' => 0,
                    'special' => 'MINI_MONSTER',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            345 =>
                array (
                    'id' => 364,
                    'name' => 'Pomme pourrie',
                    'name_shop' => 'Pomme pourrie',
                    'description' => '<strong>Nourriture pour Mini-Monstres</strong>
<br \\><br \\>
Achète <a href="/site/shop_objet.php?giveme=361" target="_blank" class="fofo_link_extern">un oeuf de Mini-Monstre auprès d\'Agh\'ruda Ghast</a> et donne-lui à manger régulièrement pour qu"il grandisse !! <br \\><br \\>
Tu peux lui donner <strong><a href="/site/shop_objet.php?giveme=363" target="_blank" class="fofo_link_extern">de la Compotée de vers des sables sur son lit d\'algues</a>, ou bien <a href="/site/shop_objet.php?giveme=364" target="_blank" class="fofo_link_extern">des Pommes pourries</a> ou encore <a href="/site/shop_objet.php?giveme=365" target="_blank" class="fofo_link_extern">des Brochettes de fourmis</a></strong><br \\><br \\>
<strong>Suivant ce que tu lui donnes à manger,</strong> il deviendra un monstre différent. <br \\><br \\>
<strong style="color:#ef4400;">Pour acheter un oeuf de Mini-Monstre, sa nourriture et obtenir plus d\'infos, rendez-vous auprès du PNJ Agh\'ruda Ghast sur la map Cabane (à côté du Manoir)</strong><br \\><br \\>
<strong style="color:#BC6BD6;">Miam Miam Miam !</strong>',
                    'price' => 10,
                    'token' => 0,
                    'special' => 'MINI_MONSTER',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            346 =>
                array (
                    'id' => 365,
                    'name' => 'Brochette de fourmis',
                    'name_shop' => 'Brochette de fourmis',
                    'description' => '<strong>Nourriture pour Mini-Monstres</strong>
<br \\><br \\>
Achète <a href="/site/shop_objet.php?giveme=361" target="_blank" class="fofo_link_extern">un oeuf de Mini-Monstre auprès d\'Agh\'ruda Ghast</a> et donne-lui à manger régulièrement pour qu"il grandisse !! <br \\><br \\>
Tu peux lui donner <strong><a href="/site/shop_objet.php?giveme=363" target="_blank" class="fofo_link_extern">de la Compotée de vers des sables sur son lit d\'algues</a>, ou bien <a href="/site/shop_objet.php?giveme=364" target="_blank" class="fofo_link_extern">des Pommes pourries</a> ou encore <a href="/site/shop_objet.php?giveme=365" target="_blank" class="fofo_link_extern">des Brochettes de fourmis</a></strong><br \\><br \\>
<strong>Suivant ce que tu lui donnes à manger,</strong> il deviendra un monstre différent. <br \\><br \\>
<strong style="color:#ef4400;">Pour acheter un oeuf de Mini-Monstre, sa nourriture et obtenir plus d\'infos, rendez-vous auprès du PNJ Agh\'ruda Ghast sur la map Cabane (à côté du Manoir)</strong><br \\><br \\>
<strong style="color:#BC6BD6;">Miam Miam Miam !</strong>',
                    'price' => 10,
                    'token' => 0,
                    'special' => 'MINI_MONSTER',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            347 =>
                array (
                    'id' => 366,
                    'name' => 'MONTURE : Chamomie',
                    'name_shop' => 'MONTURE : Chamomie',
                    'description' => 'Shhhrr ! Shrrr !! Entendez-vous le bruit de ses bandelettes qui trainent sur le sol ?! <br /><br />
Il est là ! Il est sorti de son sarcophage de Chameau où il attendait depuis la nuit des temps ! <br /><br />
Voici le légendaire... <strong>Chamomie </strong> !!!<br /><br />
Promène-toi sur son dos sans t\'emmêler à ses vieilles bandelettes dégoutantes! <br /><br />
<strong style="color:#BC6BD6;">La monture parfaite pour fêter un Halloween ancestralement terrifiant!!! Bouuuuh!</strong><br /><br />
<strong>Cette monture est<a href="/forum/viewtopic.php?id=51952" class="fofo_link_extern" target="_blank"> la récompense exclusive du concours "Remplis le mur" d\'Halloween 2014 !</a></strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            348 =>
                array (
                    'id' => 367,
                    'name' => 'MONTURE : Dragon Squelette',
                    'name_shop' => 'MONTURE : Dragon Squelette',
                    'description' => 'Animé par la magie d\'un Nécromancien, ce dragon antique revient hanter les plaines de Blablaland !!
<br /><br />
Le Dragon Squelette détient 2 pouvoirs redoutables :<br /><br />
• Il a <strong>la terrifiante capacité de s\'élever dans les airs et de voler sans jamais retomber !!!</Strong><br /> Pour cela, activez le mode Vol du Dragon dans votre sac de pouvoirs.<br /><br />
• Il peut <strong>répandre la mort grâce à son souffle. </strong>Les Blablas touchés sont alors transformés en squelettes. </Strong><br /> <em>Mieux vaut ne pas porter un skin Squelette quand le Dragon souffle, sinon...</em>
<br /><br />
<strong style="color:#BC6BD6;">Arriverez-vous à dompter cette monture Démoniaque ?!</strong>',
                    'price' => 2666,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            349 =>
                array (
                    'id' => 368,
                    'name' => 'Ballon Saturne',
                    'name_shop' => 'Ballon Saturne',
                    'description' => 'Arborez ce magnifique ballon représentant Saturne et ses étoiles, directement importé du fin fond de la galaxie par nos amis les Extraterrestres Robots !
<br /><br /><strong style="color:#BC6BD6;">Promenez-vous sur le tchat en exprimant votre amour pour nos amis venus d\'ailleurs !</strong>',
                    'price' => 150,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            350 =>
                array (
                    'id' => 369,
                    'name' => 'MONTURE : Soucoupe volante',
                    'name_shop' => 'MONTURE : Soucoupe volante',
                    'description' => 'Alerte OVNI ! Tous aux abris ! Les soucoupes volantes envahissent Blablaland !
<br /><br />
• La soucoupe volante défie les lois de la gravité et <strong>plane à la surface du sol</strong> en émettant un son mystérieux. Est-elle à la recherche de vaches ?!<br /><br />
• Grâce à ses réacteurs suprasoniques, la soucoupe volante <strong>peut se téléporter sur Orogandas en quelques millièmes de secondes</strong> et vous <strong>ramener instantanément à la map d\'où vous êtes partis </strong>!!
<br /><br />
<strong style="color:#BC6BD6;">A vous les voyages intersidéraux !!</strong>',
                    'price' => 1850,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 1,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            351 =>
                array (
                    'id' => 370,
                    'name' => 'Potion Freeze',
                    'name_shop' => 'Potion Freeze',
                    'description' => '<strong style="color:#427934;">Pouvoir gagnant de <a href="/forum/viewtopic.php?id=52220" target="_blank" class="fofo_link_extern">l\'Event Imagine un Pouvoir !</a></strong>
<br><br>
Cette potion a été fabriquée avec du permafrost qu\'on trouve sur les plus vieux icebergs de Blablaland ! <br> <br>
Bois cette potion pour te congeler ou lance-la avec le lance potions pour congeler tes amis !!
Le bloc de glace qui t\'entoure te permet de flotter sur l\'eau et de marcher sur la lave !!
<br><br>
<em style="color:#BC6BD6;">Cette Potion peut aussi être achetée en jeu auprès du Marchand Alchimiste (Zone 52, au pied du Champi Géant).</em>
<br /><br />
<strong style="color:#BC6BD6;">La potion pour avoir les idées fraîches !!</strong>',
                    'price' => 7,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 4,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            352 =>
                array (
                    'id' => 371,
                    'name' => 'Chocolat chaud',
                    'name_shop' => 'Boisson Chocolat chaud',
                    'description' => '<strong style="color:#427934;">Pouvoir coup de coeur de <a href="/forum/viewtopic.php?id=52220" target="_blank" class="fofo_link_extern">l\'Event Imagine un Pouvoir !</a></strong>
<br /><br />
Hummmmm un bon Chocolat Chaud !!!
<br /><br />
<strong>Le Chocolat Chaud immunise contre la potion Freeze !</strong> Personne ne pourra vous geler puisque vous buvez LA boisson qui réchauffe !!
<br /><br />
<em>Vous pouvez boire votre Chocolat seul, ou bien en offrir à un ami en cliquant dessus, puis action.  Trop bon !</em>
<br /><br />
Cette boisson s\'achète aussi en jeu à l\'Irwish et auprès des stands de l\'Hiver !
<br /><br />
<strong style="color:#BC6BD6;">La boisson qui réchauffe les coeurs et les corps !</strong>',
                    'price' => 3,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            353 =>
                array (
                    'id' => 372,
                    'name' => 'Poussière d\'étoiles',
                    'name_shop' => 'Poussière d\'étoiles',
                    'description' => '',
                    'price' => 1,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'QUANTITY',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            354 =>
                array (
                    'id' => 373,
                    'name' => 'MAISON : Boule à Neige',
                    'name_shop' => 'MAISON : Boule à Neige',
                    'description' => 'Que de merveilles dans un si petit objet !
<br><br>
Lorsque vous agitez une boule à neige, de la neige tombe dedans et bien cette fois-ci, vivez l\'expérience de l\'intérieur !<strong> Secouez la Maison Boule à Neige et admirez les flocons virevolter !</strong>
<br><br>
Si le froid se fait trop rude, réfugiez-vous dans la jolie maisonnette et asseyez-vous près de la cheminée.
<br><br>
La Maison Boule à Neige possède 2 maps et peut contenir 7 Blablas (6 + son propriétaire).<br><br>
<strong style="color:#BC6BD6;">Un petit monde merveilleux vous attend dans cette bulle de verre typique de l\'hiver ! </strong><br /><br />
<em>Pour plus d\'informations sur le fonctionnement des Maisons, consultez la fiche du Chalet en <a href="/site/shop_objet.php?giveme=212" target="_blank" class="fofo_link_extern">cliquant ici</a></em><br><br>
<strong style="color:#ef4400;">Joyeux Noël à tous !! Attention, cet objet n\'est en vente que pendant les fêtes de Noël !!</strong>',
                    'price' => 2200,
                    'token' => 0,
                    'special' => 'CHRISTMAS',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 3,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            355 =>
                array (
                    'id' => 374,
                    'name' => 'Peluche Doudou Licorne !!',
                    'name_shop' => 'Peluche Doudou Licorne !!',
                    'description' => '<strong style="color:#FF5001;">EXCLU Doudou Licorne !!</strong><br>
Promène toi avec une Peluche "Doudou Licorne" dans les bras. Une nouveauté pleine de couleurs, le Doudou Licorne :) Tout doux, mais surtout mignon, cette Peluche t\'apportera beaucoup de tendresse...
<br /><br />
<strong style="color:#BC6BD6;">Une Peluche Licorne, voilà un beau Doudou !!</strong>',
                    'price' => 200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            356 =>
                array (
                    'id' => 375,
                    'name' => 'Blibli : Mouton',
                    'name_shop' => 'Blibli : Mouton',
                    'description' => 'Ce Blibli Mouton aux allures de grosse peluche est tout simplement adorable !<br /><br />
<strong>Ce mignon Blibli vous suivra partout en marchant à vos côtés !</strong>
<br /><br />
<strong style="color:#BC6BD6;">Adoptez sans attendre ce Blibli tout en poils et plein de douceur !</strong>
<br /><br />',
                    'price' => 750,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 2,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            357 =>
                array (
                    'id' => 376,
                    'name' => 'MAISON : No man\'s lanl',
                    'name_shop' => 'MAISON : No man\'s lanl',
                    'description' => 'Installez-vous confortablement dans votre nouvelle Maison perso No man\'s lanl !! Cette map emblématique normalement reservé aux modérateurs !!
<br />
<em>Pour plus d\'informations sur le fonctionnement des Maisons, consultez la fiche du Chalet en <a href="/site/shop_objet.php?giveme=212" target="_blank" class="fofo_link_extern">cliquant ici</a></em>
<br />
<br />
<b>La Maison No man\'s lanl peut contenir 5 Blablas (4 + son propriétaire)</b>
<br /><br />
<strong style="color:#BC6BD6;">Installez-vous dans votre maison pour passer de supers moments avec vos amis !</strong>',
                    'price' => 2000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 3,
                    'type' => 'ONE_TIME',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            358 =>
                array (
                    'id' => 377,
                    'name' => 'Croquette Nyan Cat',
                    'name_shop' => 'Croquette Nyan Cat',
                    'description' => '<strong style="color:#F11;">EXCLU FETE DE L\'HIVER!!</strong><br>
Incroyable : Cette Glace au goût de GlaGla Magique te transforme instantanément en skin "THE Pingouin" pendant 1 minute !! Skin Mythique capable de glissades incroyables et de grand délires glacés !! GlaGla Powa !!
<br><br>
<strong>Les Glaces Pingouin (Transformation) ne peuvent être achetées qu\'auprès des stands de l\'Hiver directement en jeu.
</strong>
<br><br>
<strong style="color:#F11;">Attention, les Glaces Pingouin ne sont disponibles à l\'achat que pendant la Fête de l\'Hiver ! Profitez-en maintenant et faites le stock (car elles ne seront bien entendu pas retirées de votre inventaire mais seulement plus disponibles à l\'achat) !!</strong>',
                    'price' => 1,
                    'token' => 0,
                    'special' => 'WINTER_FESTIVAL',
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
            359 =>
                array (
                    'id' => 378,
                    'name' => 'Drapeau Fin',
                    'name_shop' => 'Drapeau Fin',
                    'description' => '<strong style="color:#303030;">RECOMPENSE FIN BLABLALAND</strong><br /><br />',
                    'price' => 100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'pack' => '1',
                    'gender' => 6,
                    'type' => 'ONE_TIME',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => '2022-12-11 20:00:05',
                    'updated_at' => '2022-12-11 20:00:05',
                ),
        ));

        \DB::table('powers')->update(['created_at' => now(), 'updated_at' => now()]);
    }
}
