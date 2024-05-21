<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SkinSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('skins')->delete();

        \DB::table('skins')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Blonde des champs',
                    'description' => 'Belle, naturelle et blonde, tout simplement.
',
                    'price' => 0,
                    'token' => 0,
                    'special' => 'V1',
                    'promo' => 0,
                    'color' => '77;1;89;77;59;77;73;1;1;1',
                    'unavailable' => 0,
                    'hidden' => 1,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Policier (Admin)',
                    'description' => 'Réservé aux administrateurs !! Découvre ce skin EXCLUSIF, capable de grandir et de rétrécir !',
                    'price' => 0,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '42;11;68;42;1;1;1;1;1;1',
                    'unavailable' => 0,
                    'hidden' => 1,
                    'group_id' => NULL,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'Blonde des champs (Admin)',
                    'description' => 'Réservé aux administrateurs !! Découvre ce skin EXCLUSIF, capable de grandir et de rétrécir !',
                    'price' => 0,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;11;88;60;73;77;73;1;1;1',
                    'unavailable' => 0,
                    'hidden' => 1,
                    'group_id' => NULL,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'Fantomas !!!',
                    'description' => 'WhouuuuUUUuuu !! Fantomas, l\'ancien skin lorsqu\'on a été envoyé au Paradis des Blablas est désormais disponible à l\'achat en tant que Skin !!<br>
Il plane tout comme avant, une pure merveille pour les puristes et fans de Blablaland !!<br>
<br>
Notez que Fantomas conserve ses propriétés en tant que Fantôme et peut donc être aspiré lui aussi ;)
<br><br>
<strong style="color:#BC6BD6;">Fantomas désormais disponible en tant que Skin !!</strong>',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '57;57;57;57;57;57;57;57;57;57',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 1,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'Policière',
                    'description' => 'Skin réservé aux modérateurs ! Faites vous remarquer grâce à ce skin !',
                    'price' => 0,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;11;68;42;42;60;77;1;1;1',
                    'unavailable' => 0,
                    'hidden' => 1,
                    'group_id' => NULL,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            5 =>
                array (
                    'id' => 6,
                    'name' => 'Baby Girl',
                    'description' => 'Tout mimi, tout rose voici la baby girl la plus mignonne de Blablaland.',
                    'price' => 0,
                    'token' => 0,
                    'special' => 'V1',
                    'promo' => 0,
                    'color' => '49;1;89;66;66;66;66;1;1;1',
                    'unavailable' => 0,
                    'hidden' => 1,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            6 =>
                array (
                    'id' => 7,
                    'name' => 'Touriste',
                    'description' => 'L\'Icône de la v1!
L\'Emblême, le symbole représentant le tout premier personnage dessiné pour Blablaland!',
                    'price' => 0,
                    'token' => 0,
                    'special' => 'V1',
                    'promo' => 0,
                    'color' => '49;1;89;45;45;59;66;1;1;1',
                    'unavailable' => 0,
                    'hidden' => 1,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            7 =>
                array (
                    'id' => 8,
                    'name' => 'Aborigène',
                    'description' => 'L\'Arborigène : une vraie force de la nature',
                    'price' => 0,
                    'token' => 0,
                    'special' => 'V1',
                    'promo' => 0,
                    'color' => '73;1;84;15;24;1;1;1;1;1',
                    'unavailable' => 0,
                    'hidden' => 1,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            8 =>
                array (
                    'id' => 9,
                    'name' => 'Ninja',
                    'description' => 'Il peut se faufiler discrêtement partout !',
                    'price' => 0,
                    'token' => 0,
                    'special' => 'V1',
                    'promo' => 0,
                    'color' => '49;1;89;52;52;1;1;1;1;1',
                    'unavailable' => 0,
                    'hidden' => 1,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            9 =>
                array (
                    'id' => 10,
                    'name' => 'Tête d\'os',
                    'description' => 'Son berceau natal est la jungle sauvage ! ',
                    'price' => 0,
                    'token' => 0,
                    'special' => 'V1',
                    'promo' => 0,
                    'color' => '1;1;84;84;18;84;1;1;1;1',
                    'unavailable' => 0,
                    'hidden' => 1,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            10 =>
                array (
                    'id' => 11,
                    'name' => 'Sportive',
                    'description' => 'Sportive et élégante tout à la fois.',
                    'price' => 0,
                    'token' => 0,
                    'special' => 'V1',
                    'promo' => 0,
                    'color' => '1;1;89;73;73;1;1;1;1;1',
                    'unavailable' => 0,
                    'hidden' => 1,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            11 =>
                array (
                    'id' => 12,
                    'name' => 'La timide',
                    'description' => 'Douce et discrète, la petite timide saura passer inaperçue',
                    'price' => 0,
                    'token' => 0,
                    'special' => 'V1',
                    'promo' => 0,
                    'color' => '84;1;89;25;1;1;1;1;1;1',
                    'unavailable' => 0,
                    'hidden' => 1,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            12 =>
                array (
                    'id' => 13,
                    'name' => 'Rockeur',
                    'description' => 'Le skin 100% Rock \'n\' roll rien que pour vous!',
                    'price' => 0,
                    'token' => 0,
                    'special' => 'V1',
                    'promo' => 0,
                    'color' => '73;1;89;73;15;83;17;1;1;1',
                    'unavailable' => 0,
                    'hidden' => 1,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            13 =>
                array (
                    'id' => 14,
                    'name' => 'Chevalier Kawai',
                    'description' => 'Le chevalier le plus attachant de toute sa lignée ! Originaire des anciennes vallées de Blablaland dans des temps anciens.',
                    'price' => 0,
                    'token' => 0,
                    'special' => 'V1',
                    'promo' => 0,
                    'color' => '49;1;89;17;17;73;1;1;1;1',
                    'unavailable' => 0,
                    'hidden' => 1,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            14 =>
                array (
                    'id' => 15,
                    'name' => 'Joggueur',
                    'description' => 'Tout droit sorti d\'un contexte urbain, le joggueur est paré pour son activité préférée.',
                    'price' => 0,
                    'token' => 0,
                    'special' => 'V1',
                    'promo' => 0,
                    'color' => '76;1;89;76;73;76;73;73;73;73',
                    'unavailable' => 0,
                    'hidden' => 1,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            15 =>
                array (
                    'id' => 16,
                    'name' => 'Asiatique',
                    'description' => 'Très typé, son charme véhicule la culture de ses ancêtres.',
                    'price' => 0,
                    'token' => 0,
                    'special' => 'V1',
                    'promo' => 0,
                    'color' => '49;1;80;80;84;70;84;1;1;1',
                    'unavailable' => 0,
                    'hidden' => 1,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            16 =>
                array (
                    'id' => 17,
                    'name' => 'Intello',
                    'description' => 'Comme il en faut toujours un au cas où : le voici!',
                    'price' => 0,
                    'token' => 0,
                    'special' => 'V1',
                    'promo' => 0,
                    'color' => '1;1;89;73;73;1;1;1;1;1',
                    'unavailable' => 0,
                    'hidden' => 1,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            17 =>
                array (
                    'id' => 18,
                    'name' => 'BCBG',
                    'description' => 'Classe et raffinement, tels sont les adjectifs qui qualifient ce skin bien racé.',
                    'price' => 0,
                    'token' => 0,
                    'special' => 'V1',
                    'promo' => 0,
                    'color' => '77;15;89;73;59;1;1;1;1;1',
                    'unavailable' => 0,
                    'hidden' => 1,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            18 =>
                array (
                    'id' => 19,
                    'name' => 'Sportif',
                    'description' => 'Le sportif par excellence, toujours en forme et de bonne humeur pour une 100% blablatitude!',
                    'price' => 0,
                    'token' => 0,
                    'special' => 'V1',
                    'promo' => 0,
                    'color' => '84;1;89;73;73;1;1;1;1;1',
                    'unavailable' => 0,
                    'hidden' => 1,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            19 =>
                array (
                    'id' => 20,
                    'name' => 'Costard',
                    'description' => 'Toujours paré pour les grandes occasions, son charisme apporte une touche de distinction aux maps dans lesquelles il se trouve.',
                    'price' => 0,
                    'token' => 0,
                    'special' => 'V1',
                    'promo' => 0,
                    'color' => '15;15;89;73;15;73;1;1;1;1',
                    'unavailable' => 0,
                    'hidden' => 1,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            20 =>
                array (
                    'id' => 21,
                    'name' => 'Comique',
                    'description' => 'Prêt à avaler les kilomètres de map en map, le Gobe mouche vous étonnera toujours.',
                    'price' => 0,
                    'token' => 0,
                    'special' => 'V1',
                    'promo' => 0,
                    'color' => '49;1;89;73;73;59;59;73;1;1',
                    'unavailable' => 0,
                    'hidden' => 1,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            21 =>
                array (
                    'id' => 22,
                    'name' => 'Miss couette',
                    'description' => 'Toujours prête à aller de l\'avant, son look fonceur saura vous séduire.',
                    'price' => 0,
                    'token' => 0,
                    'special' => 'V1',
                    'promo' => 0,
                    'color' => '84;1;89;45;45;1;1;1;1;1',
                    'unavailable' => 0,
                    'hidden' => 1,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            22 =>
                array (
                    'id' => 23,
                    'name' => 'Fille branchée',
                    'description' => 'Toujours dans le coup, son look branchée met du pep\'s partout où elle se trouve.',
                    'price' => 0,
                    'token' => 0,
                    'special' => 'V1',
                    'promo' => 0,
                    'color' => '67;1;89;67;25;1;1;1;1;1',
                    'unavailable' => 0,
                    'hidden' => 1,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            23 =>
                array (
                    'id' => 24,
                    'name' => 'Gobe Mouche',
                    'description' => 'Toujours volontaire et souriant pour apporter joie et gaieté à son public!',
                    'price' => 0,
                    'token' => 0,
                    'special' => 'V1',
                    'promo' => 0,
                    'color' => '49;73;89;73;59;73;15;1;1;1',
                    'unavailable' => 0,
                    'hidden' => 1,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            24 =>
                array (
                    'id' => 25,
                    'name' => 'Soldat commando',
                    'description' => 'Le soldat de front saura faire face à tous les dangers et déjouera tous les pièges de la guerre avec force et courage!

',
                    'price' => 900,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '58;11;88;58;16;26;58;58;26;5',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 2,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            25 =>
                array (
                    'id' => 26,
                    'name' => 'Capitaine des commandos',
                    'description' => 'Le capitaine des commandos dirige ses troupes à l\'assaut des armées adverses.<br>Doté d\'une expérience inégalée sur le terrain il constitue une valeur sûre quant au déroulement du combat.',
                    'price' => 900,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '58;11;88;3;26;16;83;5;20;26',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 2,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            26 =>
                array (
                    'id' => 27,
                    'name' => 'Commando Fille',
                    'description' => 'Ne vous fiez pas à sa queue de cheval : son look n\'en cache pas moins une redoutable capacité guerrière!<br>Toujours prête à l\'assaut, telle est la devise de la fille commando!',
                    'price' => 900,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;11;88;12;26;16;26;5;26;60',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 2,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            27 =>
                array (
                    'id' => 28,
                    'name' => 'Légionnaire',
                    'description' => 'Entrainé dans les conditions les plus difficiles, le légionnaire ne craint aucun climat de guerre.<br>Les champs de bataille sont pour lui un pur plaisir. ',
                    'price' => 900,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;11;88;5;24;16;24;5;26;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 2,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            28 =>
                array (
                    'id' => 29,
                    'name' => 'Espion Commando',
                    'description' => 'Voici l\'Arme secrète du groupe commando.<br>Equipé de la toute dernière technologie de l\'armée, ce guerrier puissant et furtif vous surprendra par ses multiples capacités!',
                    'price' => 900,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '54;73;24;58;16;26;26;14;59;5',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 2,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            29 =>
                array (
                    'id' => 30,
                    'name' => 'Extrablerrestre',
                    'description' => 'Venu tout droit de l\'espace, cet être mystérieux vous étonnera quand il gonflera tel un ballon de baudruche. Ses antennes lui confèrent une touche d\'exotisme : effet garanti!',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '22;20;27;27;27;92;90;27;4;20',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 1,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            30 =>
                array (
                    'id' => 31,
                    'name' => 'Chef Indien',
                    'description' => '<img src="/images/blablaland/skin_mythique.png" /><br>
Depuis la v1 de Blablaland que vous l\'attendez, l\'incroyable Chef Indien arrive sur Blablaland !! Un skin mythique enfin disponible !!<br>
Il conserve son design, son charme et son charisme si spécial à la v1 de Blablaland !!<br>
Le Chef Indien peut faire la Danse de la Pluie et invoquer un nuage qui a le pouvoir de laver tous les blablas se trouvant dessous. Un skin tant attendu et si merveilleux, un must-have après presque 6 ans d\'attente, à posséder d\'urgence !!<br>
<br><strong style="color:#BC6BD6;">Deviens un Chef Indien, invoque la pluie et impose ton incroyable charisme de Chef de tribu au look si précieux de la v1 !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '59;1;88;83;73;77;34;77;73;72',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            31 =>
                array (
                    'id' => 32,
                    'name' => 'Goutte',
                    'description' => 'Dans des temps anciens et inconnus, la nature de Blablaland a donné naissance à cet artefact tout du moins insolite puisqu\'il prend l\'apparence d\'une goutte d\'eau.<br>Libéré de certaines contraintes gravitationnelles, ce personnage peut effectuer une danse étrange et perturbante.',
                    'price' => 700,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;20;47;67;15;11;67;11;27;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 1,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            32 =>
                array (
                    'id' => 33,
                    'name' => 'Abeille',
                    'description' => 'Bzz Bzz Bzz ... telle est l\'abeille qui se promène librement dans le merveilleux monde de Blablaland, flottant dans les airs avec légèreté.<br>Ses ailes translucides et ses rayures sauront vous faire tomber sous le charme.',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '22;11;77;77;5;48;27;4;20;2',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            33 =>
                array (
                    'id' => 34,
                    'name' => 'Punk à clous',
                    'description' => 'Rebelle de la société, anarchiste à souhait, le punk à clous sait se démarquer de manière tranchée avec son look osé et piquant!',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '20;71;88;66;19;20;66;73;77;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 4,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            34 =>
                array (
                    'id' => 35,
                    'name' => 'Punk',
                    'description' => 'Crête extravagante et colorée un max : telle est la devise du punk authentique.<br>Sa blablarock attitude apporte une touche 60\'s nostalgique fort agréable.',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '54;11;88;15;19;20;15;73;77;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 4,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            35 =>
                array (
                    'id' => 36,
                    'name' => 'Voleur',
                    'description' => 'Masqué et discret, le voleur rôde dans la nuit à l\'affût du gain et de pauvres victimes...<br>Silencieux et solitaire, il saura vous surprendre, alors surveillez bien vos arrières ;)',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '22;11;88;88;4;4;27;4;20;2',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            36 =>
                array (
                    'id' => 37,
                    'name' => 'Plongeur amateur',
                    'description' => 'Équipé de ses palmes et de son tuba, le plongeur amateur vous étonnera par sa rapidité de nage.<br>
Tel un poisson dans l\'eau, arpentez les eaux avec efficacité.',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;11;88;73;73;58;73;50;27;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 3,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            37 =>
                array (
                    'id' => 38,
                    'name' => 'Plongeur Pro',
                    'description' => 'Des palmes de compétition et des bouteilles d\'oxygène haute capacité : voici l\'équipement d\'un explorateur en eaux profondes.<br>Ses capacités hors normes en terme de vitesse dans les fluides démultiplieront votre plaisir à explorer les mondes sous-marins!',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;11;88;42;42;15;42;58;77;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 3,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            38 =>
                array (
                    'id' => 39,
                    'name' => 'Fille à la Rose',
                    'description' => 'Charme incomparable doublé d\'une poésie naturelle, la fille à la rose a tous les atouts pour charmer le plus exigeant des princes.',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '84;42;89;73;72;60;59;73;77;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 14,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            39 =>
                array (
                    'id' => 40,
                    'name' => 'Lapinette',
                    'description' => 'Sa tenue "tape à l\'oeil" ne vous fera pas passer inaperçu!<br>Ses oreilles de lapin et sa tenue mimi attireront sur vous l\'attention de toute la foule.',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;11;89;67;67;11;67;11;27;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            40 =>
                array (
                    'id' => 41,
                    'name' => 'FootMaster',
                    'description' => 'Voilà un skin plein de rebondissements !
Inédit dans sa façon de se déplacer, le ballon de foot roule de map en map et apporte à celles-ci une touche de sportivité assurée!',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;11;58;67;15;11;67;11;27;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 9,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            41 =>
                array (
                    'id' => 42,
                    'name' => 'Squatteur',
                    'description' => 'Arpentant les rues à la recherche d\'aventures croustillantes, le squatteur est un débrouillard né.',
                    'price' => 0,
                    'token' => 0,
                    'special' => 'V1',
                    'promo' => 0,
                    'color' => '77;1;89;25;48;1;1;1;1;1',
                    'unavailable' => 0,
                    'hidden' => 1,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            42 =>
                array (
                    'id' => 43,
                    'name' => 'Squatteuse',
                    'description' => 'Elle est maline et se faufilera partout.',
                    'price' => 0,
                    'token' => 0,
                    'special' => 'V1',
                    'promo' => 0,
                    'color' => '86;1;89;24;24;1;1;1;1;1',
                    'unavailable' => 0,
                    'hidden' => 1,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            43 =>
                array (
                    'id' => 44,
                    'name' => 'Le Blagicien',
                    'description' => 'Deviens un Magicien aux pouvoirs immenses !! D\'un coup de baguette magique, deviens la copie exacte du blablateur que tu auras visé. Tu auras son skin et les pouvoirs du skin durant quelques instants...<br>Attention toutefois, le pouvoir de la magie peut-être dangereux... Même pour le plus grand des magiciens !!',
                    'price' => 1900,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '1;11;89;83;42;77;73;83;76;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 35,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            44 =>
                array (
                    'id' => 45,
                    'name' => 'Street\'Grapheur',
                    'description' => 'BBL Art Grapheur représente ! L\'Art extrême de la Powa est entre tes mains avec le Street\'Grapheur super stylé, avec <b>2 danses Hip\'hop</b> et surtout... <b>une bombe à tagger</b> avec laquelle tu peux tagger tous les blablas qui traversent ton nuage de peinture !<br>Repeins Blablaland à tes couleurs ^^<br /><strong style="color:#BC6BD6;">Tag les autres Blablas ;)</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '47;81;88;37;12;37;12;37;12;58',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 4,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            45 =>
                array (
                    'id' => 46,
                    'name' => 'Campeur',
                    'description' => 'Pars à l\'aventure dans le monde de Blablaland avec ton sac à dos et plante ta tente dès que tu souhaites faire une pause :)<br>
La nature est ta maison, tu vis au rythme des papillons !',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '58;81;88;84;84;73;82;77;77;27',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            46 =>
                array (
                    'id' => 47,
                    'name' => 'Techno\'Street',
                    'description' => '<b>Emblème Fashion de Blablaland</b>, les nouveaux skins débarquent et ça va Milky waver un max avec leurs deux danses, classique et Techno\'Street... Que du Fashion Bonheur ! ',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '81;81;88;81;81;62;84;58;58;85',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 4,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            47 =>
                array (
                    'id' => 48,
                    'name' => 'Chef Indien V1',
                    'description' => '<img src="/images/blablaland/skin_mythique.png"/><br>
Depuis la v1 de Blablaland que vous l\'attendez, l\'incroyable Chef Indien arrive sur Blablaland !! Un skin mythique enfin disponible !!<br>
Il conserve son design, son charme et son charisme si spécial à la v1 de Blablaland !!<br>
Le Chef Indien peut faire la Danse de la Pluie et invoquer un nuage qui a le pouvoir de laver tous les blablas se trouvant dessous. Un skin tant attendu et si merveilleux, un must-have après presque 6 ans d\'attente, à posséder d\'urgence !!<br>
<br><strong style="color:#BC6BD6;">Deviens un Chef Indien, invoque la pluie et impose ton incroyable charisme de Chef de tribu au look si précieux de la v1 !!</strong>',
                    'price' => 0,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '58;1;88;81;73;77;73;1;73;58',
                    'unavailable' => 0,
                    'hidden' => 1,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            48 =>
                array (
                    'id' => 49,
                    'name' => 'Indien V1',
                    'description' => 'Avec un charme tout naturel, le petit Indien a plus d\'une corde à son arc. Rapide comme une flèche une fois dans l\'eau, musicien en herbe derrière son tam-tam, le petit Indien ne peut que vous séduire.',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '84;11;88;83;73;58;83;89;1;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            49 =>
                array (
                    'id' => 50,
                    'name' => 'Indienne V1',
                    'description' => 'Avec un charme tout naturel, la petite Indienne a plus d\'une corde à son arc. Rapide comme une flèche une fois dans l\'eau, musicienne en herbe derrière son tam-tam, la petite Indienne ne peut que vous séduire.',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '84;11;88;85;73;67;83;89;1;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            50 =>
                array (
                    'id' => 51,
                    'name' => 'Hip\'Electro\'Hop',
                    'description' => '<b>Emblème Fashion de Blablaland</b>, les nouveaux skins débarquent et ça va Milky waver un max avec leurs deux danses, classique et Techno\'Street... Que du Fashion Bonheur ! ',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '57;81;88;61;61;58;61;57;58;85',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 4,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            51 =>
                array (
                    'id' => 52,
                    'name' => 'Blabla Fille',
                    'description' => 'Nostalgique d\'un ancien temps, vous voilà servi avec ce joli skin Fille tout droit issu du design de la v1 de Blablaland, relooké pour l\'occasion de la v2 rien que pour vous !',
                    'price' => 700,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '63;42;89;63;63;58;58;58;65;37',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 14,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            52 =>
                array (
                    'id' => 53,
                    'name' => 'Blabla Garçon',
                    'description' => 'Nostalgique d\'un ancien temps, vous voilà servi avec ce joli skin Garçon tout droit issu du design de la v1 de Blablaland, relooké pour l\'occasion de la v2 rien que pour vous !',
                    'price' => 700,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '75;82;88;75;63;58;58;58;65;37',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 14,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            53 =>
                array (
                    'id' => 54,
                    'name' => 'Chèvre',
                    'description' => 'Béééé dit la chèvre ! Cours dans les prairies de Blablaland avec tes belles cornes en avant. Fais des "béééé" un peu partout et charge tout ce qui bouge...',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '81;11;80;81;76;67;83;89;1;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            54 =>
                array (
                    'id' => 55,
                    'name' => 'Bélier',
                    'description' => 'Le bélier, avec ses belles grandes cornes fait preuve de force et de caractère. Charge tes compagnons en courant dans les vastes collines de Blablaland !',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '70;11;87;82;76;67;83;89;1;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            55 =>
                array (
                    'id' => 56,
                    'name' => 'Poussin',
                    'description' => 'Piou piou !! Quel adorable petit poussin, il plane dans les airs en agitant ses petites ailes toutes mignonnes... Irrésistible petit blablanimal plein d\'amour et de légèreté :)',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '70;43;77;75;75;67;83;89;1;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            56 =>
                array (
                    'id' => 57,
                    'name' => 'Cochon',
                    'description' => 'Grouuiiiic !! Que dire de plus, si ce n\'est que c\'est un adorable petit cochon tout mignon qui attend plein de tendresse... et de boue !',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '70;11;67;75;75;67;83;89;1;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            57 =>
                array (
                    'id' => 58,
                    'name' => 'Mouton',
                    'description' => 'Mééé, méééé !! Ce mouton saute haut dans les airs pour garantir de supers parties de saute-mouton dans les plaines de Blablaland :)<br>Toujours partant pour jouer, et plein de bonne humeur, ce mouton est un "must have" !',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '70;11;59;75;75;67;83;89;1;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            58 =>
                array (
                    'id' => 59,
                    'name' => 'Sanglier',
                    'description' => 'Le Sanglier incarne le respect, et attention à celui qui ne le sait pas, le sanglier charge tout ce qui se met sur son chemin. Il est tout mignon, mais il est surtout bien grognon :)',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '70;11;14;11;12;59;83;89;1;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            59 =>
                array (
                    'id' => 60,
                    'name' => 'Cheval',
                    'description' => 'Qui n\'a jamais rêvé de chevaucher les plaines de Blablaland au grand galop avec un magnifique Cheval ?! Un pur sang Blabla\'<br>
<em>A votre avis, qui ira le plus vite entre le cheval et le canard ?</em><br>
<strong style="color:#BC6BD6;">Le Cheval galope plus vite sur le tchat !!</strong><br>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '82;11;83;13;66;66;2;77;84;38',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            60 =>
                array (
                    'id' => 61,
                    'name' => 'Supporter',
                    'description' => 'Deviens un vrai Supporter aux couleurs de ton clan ou de ton groupe improvisé entre amis avec ton drapeau haut dans le ciel de Blablaland.<br /><strong style="color:#BC6BD6;">(Tu auras 2 skins supporter. Un avec un drapeau aux lignes horizontales, et un avec des lignes verticales)</strong>',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '26;11;88;23;26;59;23;59;23;83',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 9,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            61 =>
                array (
                    'id' => 63,
                    'name' => 'Arbitre',
                    'description' => 'Tuuuuut !! Carton rouge ou carton jaune, ici c\'est toi l\'arbitre. Fais appliquer tes règles, mène la danse et siffle à chaque fois qu\'une faute sera faite !! Pas de mi-temps prévue avec le skin arbitre :) ',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '82;11;88;2;2;2;58;58;2;58',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 9,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            62 =>
                array (
                    'id' => 64,
                    'name' => 'Footballeur',
                    'description' => 'Jongle, dribble et tire au buuut !! Viens mettre l\'ambiance des stades avec le Footballer. Grand sportif, il court plus vite et saute plus haut pour ne pas perdre la balle. Rejoins l\'équipe de Blablaland pour le plus grand Match de tous les temps !',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '76;43;89;3;73;42;59;58;77;41',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 9,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            63 =>
                array (
                    'id' => 65,
                    'name' => 'Supporter Fille',
                    'description' => 'Deviens une vraie Supporter aux couleurs de ton clan ou de ton groupe improvisé entre amis avec ton drapeau haut dans le ciel de Blablaland.<br /><strong style="color:#BC6BD6;">(Tu auras 2 skins supporter fille. Un avec un drapeau aux lignes horizontales, et un avec des lignes verticales)</strong>',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;43;89;65;65;59;52;59;73;63',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 9,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            64 =>
                array (
                    'id' => 67,
                    'name' => 'Fille Plongeuse',
                    'description' => 'Équipée de ses palmes et de son tuba, la fille plongeuse vous étonnera par sa rapidité de nage.<br>
Tel un poisson dans l\'eau, arpentez les eaux avec efficacité.',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;42;88;65;65;58;47;47;65;82',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 3,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            65 =>
                array (
                    'id' => 68,
                    'name' => 'Fille Plongeuse Pro',
                    'description' => 'Des palmes de compétition et des bouteilles d\'oxygène haute capacité : voici l\'équipement d\'une exploratrice en eaux profondes.<br>Ses capacités hors normes en terme de vitesse dans les fluides démultiplieront votre plaisir à explorer les mondes sous-marins !',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;66;88;37;37;58;58;58;65;37',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 3,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            66 =>
                array (
                    'id' => 70,
                    'name' => 'Karaté',
                    'description' => 'Enfile ton kimono et deviens l\'un des plus grands combattants de l\'histoire. Maîtrise les arts martiaux et défie tes adversaires.<br /><strong style="color:#BC6BD6;">Donne des coups de pied et fais voler tes ennemis !</strong>',
                    'price' => 1100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '83;1;88;75;58;2;58;58;65;37',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 9,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            67 =>
                array (
                    'id' => 71,
                    'name' => 'Karaté fille',
                    'description' => 'Enfile ton kimono et deviens l\'une des plus grandes combattantes de l\'histoire. Maîtrise les arts martiaux et défie tes adversaires.<br /><strong style="color:#BC6BD6;">Donne des coups de pied et fais voler tes ennemis !</strong>',
                    'price' => 1100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '84;1;88;75;58;2;58;58;65;37',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 9,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            68 =>
                array (
                    'id' => 72,
                    'name' => 'Nageur Olympique',
                    'description' => 'Toujours plus rapide, le nageur olympique est une vraie fusée dans l\'eau. Avec sa tenue stylée et sa maîtrise des fluides, il ne lui manque que la médaille d\'or ! Et en plus de ça, une action particulière te permettra de nager encore plus vite pendant un moment (Alors si en plus tu prends une potion de nage rapide....)',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '75;3;88;75;72;58;58;58;65;37',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 9,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            69 =>
                array (
                    'id' => 73,
                    'name' => 'Nageuse Olympique',
                    'description' => 'Toujours plus rapide, la nageuse olympique est une vraie fusée dans l\'eau. Avec sa tenue stylée et sa maîtrise des fluides, il ne lui manque que la médaille d\'or ! Et en plus de ça, une action particulière te permettra de nager encore plus vite pendant un moment (Alors si en plus tu prends une potion de nage rapide....)',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;1;88;75;42;58;42;2;65;37',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 9,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            70 =>
                array (
                    'id' => 74,
                    'name' => 'Escrime',
                    'description' => 'L\'escrime est tout un art, que tu maîtrises maintenant !! Prends ton épée et va défier Blablaland !<br /><strong style="color:#BC6BD6;">Plante ton épée et fais valser tes adversaires !</strong> ',
                    'price' => 1100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '83;2;57;57;5;5;42;2;72;37',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 9,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            71 =>
                array (
                    'id' => 75,
                    'name' => 'Escrime Fille',
                    'description' => 'L\'escrime est tout un art, que tu maîtrises maintenant !! Prends ton épée et va défier Blablaland !<br /><strong style="color:#BC6BD6;">Plante ton épée et fais valser tes adversaires !</strong> ',
                    'price' => 1100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;52;57;57;5;5;63;2;64;37',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 9,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            72 =>
                array (
                    'id' => 76,
                    'name' => 'Street\'Grapheuse',
                    'description' => 'Retour en force des filles avec ce skin ultra-stylé, taggueuses en puissance : BBL représente !<br>
Tag un maximun les blablas de ton environnement et exprime l\'Art qui est en toi. Grâce à toi, Blablaland sera encore plus haut en couleurs, alors fais profiter tout ton clan de ton talent !<br /><strong style="color:#BC6BD6;">Tag les autres Blablas ;)</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;43;88;77;46;37;12;62;58;37',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 4,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            73 =>
                array (
                    'id' => 77,
                    'name' => 'Sorcière',
                    'description' => 'Emblème incontesté d\'Halloween, deviens une citrouille effrayante au charisme incontestablement.. terrorisant !!
Incarne une sorcière, aussi méchante que possible !! Reconnue et surtout mal-aimée à cause de ses grands pouvoirs magiques, cette sorcière donne des coups de balai à quiconque oserait l\'approcher de trop près !',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '75;71;88;2;75;75;17;2;84;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            74 =>
                array (
                    'id' => 78,
                    'name' => 'Citrouille',
                    'description' => 'Emblème incontesté d\'Halloween, deviens une citrouille effrayante au charisme incontestablement.. terrorisant !!',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '31;21;75;27;75;27;63;60;76;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            75 =>
                array (
                    'id' => 79,
                    'name' => 'Fantôme',
                    'description' => 'Halloween est le meilleur moment pour se déguiser en fantôme pour faire peur à tout le monde !! Mouahahahaaa... BOUUUUH !!',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '31;81;88;27;58;27;63;60;76;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            76 =>
                array (
                    'id' => 80,
                    'name' => 'Policier',
                    'description' => 'Skin réservé aux modérateurs ! Faites vous remarquer grâce à ce skin !',
                    'price' => 0,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '42;11;68;42;42;60;60;77;1;1',
                    'unavailable' => 0,
                    'hidden' => 1,
                    'group_id' => NULL,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            77 =>
                array (
                    'id' => 81,
                    'name' => 'Le Jardinier',
                    'description' => 'Deviens le meilleur apprenti jardinier de Blablaland. Et si sur ton chemin tu croises un p\'tit skin fruit ou légume, sors ton arrosoir pour le faire grandir ! C\'est ça d\'avoir la main verte ;)',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '27;81;88;69;27;84;76;76;81;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 6,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            78 =>
                array (
                    'id' => 82,
                    'name' => 'La Jardinière',
                    'description' => 'Deviens la meilleure apprentie jardinière de Blablaland. Et si sur ton chemin tu croises un p\'tit skin fruit ou légume, sors ton arrosoir pour le faire grandir ! C\'est ça d\'avoir la main verte ;)',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '76;81;88;27;27;27;63;60;76;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 6,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            79 =>
                array (
                    'id' => 83,
                    'name' => 'La Super Tomate Fraise Cerise !!',
                    'description' => 'Ce skin a la particularité d\'être plein de choses à la fois. Il peut faire la tomate, la fraise voire la cerise, à toi de choisir ^^<br><strong style="color:#BC6BD6;">Les jardiniers peuvent arroser ce petit skin pour le faire grandir !</strong>',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '34;21;73;27;75;27;63;60;76;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 12,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            80 =>
                array (
                    'id' => 84,
                    'name' => 'Le p\'tit Citron !',
                    'description' => 'Deviens un petit citron trognon, ... et peut-être pressé !<br><strong style="color:#BC6BD6;">Les jardiniers peuvent arroser ce petit skin pour le faire grandir !</strong>',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '34;81;76;27;27;27;63;60;76;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 12,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            81 =>
                array (
                    'id' => 85,
                    'name' => 'La Pomme',
                    'description' => 'Un belle pomme, verte pour les gentils, et bien rouge pour les sorcières qui en donnent aux princesses... oki je crois bien que je m\'égare un peu là !<br><strong style="color:#BC6BD6;">Les jardiniers peuvent arroser ce petit skin pour le faire grandir !</strong>',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '34;31;36;27;27;27;63;60;76;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 12,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            82 =>
                array (
                    'id' => 86,
                    'name' => 'La Salade Chou-fleur :)',
                    'description' => 'Gare aux tortues, elles en raffolent. Heureusement pour toi il n\'y en a pas dans Blablaland... mais qui sait, un jour peut-être !<br><strong style="color:#BC6BD6;">Les jardiniers peuvent arroser ce petit skin pour le faire grandir !</strong>',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '39;22;28;27;27;27;63;60;76;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 12,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            83 =>
                array (
                    'id' => 87,
                    'name' => 'Mangue-moi !',
                    'description' => 'La mangue, le fruit mystère peu apprécié des gens vient prendre sa revanche sur Blablaland grâce à toi !<br><strong style="color:#BC6BD6;">Les jardiniers peuvent arroser ce petit skin pour le faire grandir !</strong>',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '35;81;73;27;27;27;63;60;76;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 12,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            84 =>
                array (
                    'id' => 88,
                    'name' => 'La Poire',
                    'description' => 'Incarner une poire, rien à redire, tout simplement la classe !<br><strong style="color:#BC6BD6;">Les jardiniers peuvent arroser ce petit skin pour le faire grandir !</strong>',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '35;21;27;27;75;27;63;60;76;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 12,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            85 =>
                array (
                    'id' => 89,
                    'name' => 'L\'Ananas, miam !',
                    'description' => 'Sous cette petite carapace se cache un fruit vraiment bon, un peu acide mais délicieux, non ?<br><strong style="color:#BC6BD6;">Les jardiniers peuvent arroser ce petit skin pour le faire grandir !</strong>',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '34;21;76;27;75;27;63;60;76;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 12,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            86 =>
                array (
                    'id' => 90,
                    'name' => 'Chef Loup-Garou',
                    'description' => 'Deviens un Prince Loup-Garou... Une fois la nuit tombée, crée ta meute en mordant de petits êtres de chair bien fraiche, qui porteront le nom de leur chef jusqu\'au petit matin !<br><strong style="color:#FF5001;">Contamine les membres avec le virus Loup-Garou</strong>
<br /><br />
<a href="/site/jeu_monstres_nuit.php" target="_blank" style="color:#bd0000;">Ce skin permet de jouer au mini-jeu "Invasion des Monstres de la Nuit"</a>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '1;73;13;2;1;73;35;2;84;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            87 =>
                array (
                    'id' => 92,
                    'name' => 'Prince Vampire',
                    'description' => 'Deviens un Prince Vampire... Une fois la nuit tombée, fais-toi une armée de goules en mordant de pauvres innocents, qui deviendront vampires et porteront ton nom, celui de leur Prince Vampire, jusqu\'au petit matin !!<br><strong style="color:#FF5001;">Contamine les membres avec le virus Vampire</strong>
<br /><br />
<a href="/site/jeu_monstres_nuit.php" target="_blank" style="color:#bd0000;">Ce skin permet de jouer au mini-jeu "Invasion des Monstres de la Nuit"</a>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '1;1;89;2;73;77;35;2;84;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            88 =>
                array (
                    'id' => 94,
                    'name' => 'Sorcier',
                    'description' => 'Incarne un sorcier, aussi méchant que possible !! Reconnu et surtout mal-aimé à cause de ses grands pouvoirs magiques, ce sorcier donne des coups de bâton magique à quiconque oserait l\'approcher de trop près !',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '1;73;2;2;81;81;35;2;84;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            89 =>
                array (
                    'id' => 95,
                    'name' => 'Le Crâne de la Mort',
                    'description' => 'Emblème incontesté d\'Halloween, deviens une citrouille effrayante au charisme incontestablement.. terrorisant !!Deviens un squelette effrayant, le Crâne de la Mort, et fais claquer tes dents, ou celles des autres tellement ils auront peur de toi !',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '1;73;18;2;81;81;35;2;84;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            90 =>
                array (
                    'id' => 98,
                    'name' => 'La Banane',
                    'description' => 'T\'as la pêche ou plutôt la banane ? Moi je dis que la banane, c\'est carrément mieux :)<br><strong style="color:#BC6BD6;">Les jardiniers peuvent arroser ce petit skin pour le faire grandir !</strong>',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '33;81;77;83;42;77;73;19;76;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 12,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            91 =>
                array (
                    'id' => 99,
                    'name' => 'La Cerise',
                    'description' => 'Un nouveau skin chez les petits fruits, c\'est la cerise sur la gâteau !!<br><strong style="color:#BC6BD6;">Les jardiniers peuvent arroser ce petit skin pour le faire grandir !</strong>',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '34;81;73;83;42;77;73;19;76;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 12,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            92 =>
                array (
                    'id' => 100,
                    'name' => 'La Framboise',
                    'description' => 'La framboise est un fruit fragile qui nécessite d\'être manipulé avec précaution. En revanche il se congèle très bien, ce qui lui vaut de pouvoir être utilisé en pâtisserie tout au long de l\'année. (Merci Wikipedia)<br><strong style="color:#BC6BD6;">Les jardiniers peuvent arroser ce petit skin pour le faire grandir !</strong>',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '34;81;61;83;42;77;73;19;76;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 12,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            93 =>
                array (
                    'id' => 101,
                    'name' => 'Blabla\'ToyZ Triste ',
                    'description' => 'Faussement triste mais vraisemblablement coquin, ce Blablatoyz vous fera craquer avec sa p’tite larme et son cœur innocent sur sa poitrine.<br><strong style="color:#BC6BD6;">Skins Collector<br>Accumule de l\'énergie et accède à différents pouvoirs puissants !</strong>',
                    'price' => 2009,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '12;11;85;77;73;60;58;58;60;58',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 16,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            94 =>
                array (
                    'id' => 102,
                    'name' => 'Blabla\'ToyZ Colérique',
                    'description' => 'Colérique comme 100 Blablatoyz, ce charmant petit monstre vous séduira par son look méga-rebelle.
Sa grande bouche et ses dents énormes imposeront le respect à la plupart des blablateurs qui oseraient revendiquer le contraire ^^.<br/><br/><strong style="color:#BC6BD6;">Skin Collector<br>Accumule de l\'énergie et accède à différents pouvoirs puissants !</strong>',
                    'price' => 2009,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '73;1;77;77;77;73;77;73;73;58',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 16,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            95 =>
                array (
                    'id' => 103,
                    'name' => 'Blabla\'ToyZ Kawai',
                    'description' => 'Super attachant avec sa petite bouille et sa tête de nounours sur son T-shirt, ce Blablatoyz en fera craquer plus d’un !<br><br><strong style="color:#BC6BD6;">Skin Collector<br>Accumule de l\'énergie et accède à différents pouvoirs puissants !</strong>',
                    'price' => 2009,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '58;1;63;63;77;11;63;63;58;58',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 16,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            96 =>
                array (
                    'id' => 104,
                    'name' => 'Blabla\'ToyZ Énigmatique',
                    'description' => 'Effrayant pour les uns, anecdotique pour les autres, ce Blablatoyz réduit son Art pictural au strict minimum sans néanmoins conserver son efficacité visuelle !<br><br><strong style="color:#BC6BD6;">Skin Collector<br>Accumule de l\'énergie et accède à différents pouvoirs puissants !</strong>',
                    'price' => 2009,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '73;1;58;58;58;58;58;58;58;58',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 16,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            97 =>
                array (
                    'id' => 105,
                    'name' => 'La Blagicienne',
                    'description' => 'Deviens une Magicienne aux pouvoirs immenses !! D\'un coup de baguette magique, deviens la copie exacte du blablateur que tu auras visé. Tu auras son skin et les pouvoirs du skin durant quelques instants...<br>Attention toutefois, le pouvoir de la magie peut-être dangereux... Même pour la plus grande des magiciennes... !!',
                    'price' => 1900,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;41;89;41;41;77;65;46;58;65',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 35,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            98 =>
                array (
                    'id' => 106,
                    'name' => 'Renne de Noël',
                    'description' => 'L\'Animal mythique des fêtes de fin d\'année, celui sans qui le père Noël ne pourrait venir nous donner nos cadeaux... ! Vive le Renne de Noël :)',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '81;81;83;81;60;73;84;60;77;64',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 15,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            99 =>
                array (
                    'id' => 107,
                    'name' => 'Blabla Noël Fille',
                    'description' => 'Joyeux Noël et bonnes fêtes de fin d\'année, avec ce magnifique skin de Noël... !!',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;43;89;73;73;58;84;60;77;64',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 15,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            100 =>
                array (
                    'id' => 108,
                    'name' => 'Blabla Noël Garçon',
                    'description' => 'Joyeux Noël et bonnes fêtes de fin d\'année, avec ce magnifique skin de Noël... !!',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '84;81;89;73;73;58;58;60;77;64',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 15,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            101 =>
                array (
                    'id' => 109,
                    'name' => 'P\'tite Lutine',
                    'description' => 'Deviens une p\'tite Lutine du Père Noël pour l\'aider à préparer les cadeaux. Joyeux Noël ! ',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '82;43;89;34;34;58;77;11;77;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 15,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            102 =>
                array (
                    'id' => 110,
                    'name' => 'P\'tit Lutin',
                    'description' => 'Deviens un p\'tit Lutin du Père Noël pour l\'aider à préparer les cadeaux. Joyeux Noël ! ',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '82;81;89;34;34;58;77;34;58;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 15,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            103 =>
                array (
                    'id' => 111,
                    'name' => 'Mon Beau Sapin !',
                    'description' => '"Mon beau sapin, roi des forêts, que j\'aime ta fourrureee !!" Ha non c\'est pas ça. Zut je sais plus ;)<br>
Deviens le roi de la forêt et porte fièrement sur toi la décoration de Noël !',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;31;33;83;73;46;77;60;77;64',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 15,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            104 =>
                array (
                    'id' => 112,
                    'name' => 'Boule de Noël',
                    'description' => 'Que serait un sapin de noël sans décoration sur lui ... ? Deviens une belle boule de Noël, la plus belle de toutes :)',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;1;73;73;67;63;58;60;77;64',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 15,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            105 =>
                array (
                    'id' => 113,
                    'name' => 'Etoile',
                    'description' => 'La décoration Ultime pour un Sapin de Noël parfait... L\'étoile !! Celle grâce à qui Mario est invincible, celle qui rend magique toute baguette, l\'étoile est l\'élément le plus important. A toi de l\'incarner :)',
                    'price' => 900,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;42;77;83;73;46;77;60;77;64',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 15,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            106 =>
                array (
                    'id' => 114,
                    'name' => 'Cadeau',
                    'description' => 'Un Cadeau, ça fait toujours plaisir. Qu\'il soit super ou pas très bien ce n\'est pas grave. C\'est l\'intention qui compte. Imagine que tu sois un cadeau, tout le monde serait toujours heureux de te voir... Alors, tu attends quoi pour te déguiser en cadeau ?',
                    'price' => 900,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '73;11;57;57;73;46;77;60;77;64',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 15,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            107 =>
                array (
                    'id' => 115,
                    'name' => 'Bonhomme de Neige',
                    'description' => 'L\'emblème de l\'hiver, le maître incontesté de tout terrain enneigé... Je vous présente le Bonhomme de Neige !! Là, c\'est la classe assurée ;)',
                    'price' => 900,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '12;81;57;57;75;73;84;60;77;64',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 15,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            108 =>
                array (
                    'id' => 116,
                    'name' => 'Campeuse',
                    'description' => 'Pars à l\'aventure dans le monde de Blablaland avec ton sac à dos et plante ta tente dès que tu souhaites faire une pause :)<br>
La nature est ta maison, tu vis au rythme des papillons !',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;42;88;67;67;63;58;60;77;64',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            109 =>
                array (
                    'id' => 117,
                    'name' => 'Emo Boy 1',
                    'description' => 'Un look réussi, une allure complètement décontractée : la synthèse idéale ! Des mèches assorties et une paire de shoes à carreaux complètement déjantée, il ne lui en fallait pas moins pour se hisser dans le top skin !',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '1;11;89;46;46;1;52;57;57;63',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 4,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            110 =>
                array (
                    'id' => 118,
                    'name' => 'Emo Girl 1',
                    'description' => 'Une chevelure complètement “in” dont le niveau de détail au niveau de l’animation surclasse tout ce qui a déjà été fait. Des chaussures complètement tendances et un maquillage à la pointe : voilà la combinaison gagnante pour un skin exceptionnel !',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '41;11;89;66;77;57;52;57;12;63',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 4,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            111 =>
                array (
                    'id' => 119,
                    'name' => 'Emo Girl 2',
                    'description' => 'Un charme incontestable et un design carrément magnifique, cette Emo Girl fera craquer toutes les personnes que vous croiserez, effet garanti !',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '65;42;89;67;77;13;58;65;13;46',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 4,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            112 =>
                array (
                    'id' => 120,
                    'name' => 'Emo Boy 2',
                    'description' => 'Top classe, avec en plus la possibilité d\'avoir des mèches de couleur dans les cheveux, ce skin vous propulsera sans aucun doute directement au Top Emo !',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '83;81;89;15;83;47;73;82;27;23',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 4,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            113 =>
                array (
                    'id' => 121,
                    'name' => 'Emo Boy 3',
                    'description' => 'Un pur style et des shoes qui en jettent grave, la possibilité de colorer les mèches de cheveux... Avec ce skin vous ferez craquer bon nombre de filles !!',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '81;81;89;13;81;58;37;73;58;81',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 4,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            114 =>
                array (
                    'id' => 122,
                    'name' => 'Emo Girl 3',
                    'description' => 'Une allure incontestablement pleine de style, de ce skin émane un véritable mode de vie qui ne laissera personne indifférent ! Un must, sans parler de sa danse qui claque :)',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '11;11;89;64;73;47;52;60;11;47',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 4,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            115 =>
                array (
                    'id' => 123,
                    'name' => 'La Maman',
                    'description' => 'Dynamique, entreprenante la maman est parée pour s’occuper de la petite famille notamment de ses deux petites bombes prêtes à tout pour mettre l’ambiance.',
                    'price' => 700,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '76;51;89;63;34;1;46;75;65;42',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 14,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            116 =>
                array (
                    'id' => 124,
                    'name' => 'Le Papa',
                    'description' => 'Sage, posé et travailleur le papa saura résoudre tous les petits conflits et mener à bien le petit bateau familial.',
                    'price' => 700,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '84;81;89;84;58;84;46;75;65;42',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 14,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            117 =>
                array (
                    'id' => 125,
                    'name' => 'Le Petit Frère',
                    'description' => 'Il est celui qui donne du fil à retordre à toute la petite famille.
Espiègle, intrépide et farceur, c\'est le cauchemar de sa grande sœur !',
                    'price' => 700,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '36;81;89;36;57;46;57;75;65;42',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 14,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            118 =>
                array (
                    'id' => 126,
                    'name' => 'La Grande Soeur',
                    'description' => 'Super coquette, bonne écolière et créative, la grande sœur fera une bonne deuxième maman pour un petit frère très chenapan !',
                    'price' => 700,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;42;89;66;66;58;57;75;65;42',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 14,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            119 =>
                array (
                    'id' => 127,
                    'name' => 'Le dessinateur',
                    'description' => 'Toujours prêt à croquer une scène rurale ou un paysage urbain, le dessinateur sera toujours à l’affût d’un nouveau sujet intéressant afin de le partager à travers sa vision des choses.',
                    'price' => 590,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '58;1;89;34;34;89;13;64;58;58',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            120 =>
                array (
                    'id' => 128,
                    'name' => 'Le diplômé',
                    'description' => 'Enfin son diplôme en poche, le jeune diplômé commence une vie nouvelle cherchant un métier à la hauteur de ses fraîches connaissances durement acquises.',
                    'price' => 590,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '15;1;89;15;73;89;13;64;58;58',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            121 =>
                array (
                    'id' => 129,
                    'name' => 'Chef de chantier',
                    'description' => 'Toujours à son poste de commandement, le chef de chantier saura diriger ses troupes d’ouvriers afin de bâtir les futures métropoles de Blablaland.',
                    'price' => 590,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;1;89;42;73;89;13;64;58;58',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            122 =>
                array (
                    'id' => 130,
                    'name' => 'L’infirmière',
                    'description' => 'Coiffée de son mignon calot blanc, l’infirmière vous fera craquer par son air innocent, ainsi que par son regard tout doux et espiègle !',
                    'price' => 590,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '84;1;89;59;59;73;13;64;58;58',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            123 =>
                array (
                    'id' => 131,
                    'name' => 'Chinois',
                    'description' => 'Ses vêtements traditionnels au corps, le chinois véhicule le savoir de ses ancêtres, ne dérogeant pas à ses coutumes pour le moins du monde.',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '81;81;89;84;84;73;13;71;71;71',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 18,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            124 =>
                array (
                    'id' => 132,
                    'name' => 'Chinoise',
                    'description' => 'Superbement maquillée et soigneusement vêtue, la chinoise a le don de faire craquer tout blabla qui se dresserait devant elle. Son look typique est un must pour ce nouvel an chinois exceptionnel !',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '12;12;59;12;73;58;73;58;12;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 18,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            125 =>
                array (
                    'id' => 133,
                    'name' => 'Dragon Chinois - module',
                    'description' => 'Regroupe-toi avec tes semblables et formez tous ensemble le plus gros dragon chinois jamais vu !
Ce skin est idéal pour faire un travail d’équipe hors du commun. Seul il est quand même super fun, mais à plusieurs il prend sa véritable dimension collé à une tête de Dragon !',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '74;12;34;12;77;58;73;58;12;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 18,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            126 =>
                array (
                    'id' => 134,
                    'name' => 'Dragon Chinois',
                    'description' => 'Mène la danse avec cette magnifique tête de dragon chinois.
Ce skin est le plus complexe jamais conçu dans la boutique : son niveau de détails surclasse tout ce qui a été vu jusqu’à présent. Un skin à posséder d\'urgence, d\'une beauté rarissime !!<br>
<em>(Demande à tes amis qui possèdent le module de se mettre près de toi pour faire un grand dragon, terriblement magnifique ^^)</em>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;57;34;73;73;1;46;75;65;42',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 18,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            127 =>
                array (
                    'id' => 135,
                    'name' => 'Cupidon garçon',
                    'description' => 'Entrez dans la peau d’un personnage mythique aux pouvoirs extraordinaires : Cupidon !! Grâce à son arc magique, il répandra l\'amour sur les terres de Blablaland :)<br><strong style="color:#BC6BD6;">Ce skin flotte dans les airs, sort un arc magique et tire des flèches emplies d\'amour blablatien !</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '79;46;89;66;57;77;75;73;73;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 20,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            128 =>
                array (
                    'id' => 136,
                    'name' => 'Cupidon fille',
                    'description' => 'Dotée d’une magnifique apparence, nul ne peut résister au charme incontestable du cupidon fille.
Ses rubans soigneusement attachés aux cheveux et armée de son fantastique arc, elle parsèmera l’amour au rythme chantonnant de la St Valentin !<br><strong style="color:#BC6BD6;">Ce skin flotte dans les airs, sort un arc magique et tire des flèches emplies d\'amour blablatien !</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;43;89;65;57;65;57;65;7;64',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 20,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            129 =>
                array (
                    'id' => 137,
                    'name' => 'Le Coeur',
                    'description' => 'Insolite personnage né de l’amour d’une fête exceptionnelle, ce skin emplira de joie et d\'amour les nombreuses maps de Blablaland.
Suspendu dans les airs telle la goutte d’eau, ce petit skin fera le bonheur de tous !<br><strong style="color:#BC6BD6;">Ce skin flotte dans les airs.</strong>',
                    'price' => 600,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '79;60;73;66;57;77;75;73;73;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 20,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            130 =>
                array (
                    'id' => 138,
                    'name' => 'La Super Mamie',
                    'description' => 'La Super Mamie, le skin ultime à avoir !! Sous ses apparences de petite vieille, qui marche lentement et saute moins bien, se cache la Super Mamie !<br>
<strong style="color:#BC6BD6;">Elle est livrée avec 50 potions de rapidité, 20 Bombes et 10 minutes de JetPack !!! De quoi s\'éclater sur Blablaland :D</strong>',
                    'price' => 300,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '18;42;89;27;17;59;58;65;13;46',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 14,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            131 =>
                array (
                    'id' => 139,
                    'name' => 'BBL-Solid Tech n100',
                    'description' => '<img src="/images/blablaland/news_limite.gif"> Le Solid Tech n100, l\'un des plus grands guerriers de l\'ancien temps de Blablaland, l\'époque des machines de guerre. Ce skin est une merveille de technologie, grâce à ses réacteurs dans les pieds il est capable de sauter 3 fois de suite, de planer dans les airs, de se propulser sur les côtés, sous l\'eau une hélice lui permet d\'aller plus vite... et son design, haaa un pur bijou de technologie !!<br>
<strong style="color:#BC6BD6;">ÉDITION LIMITÉE, seulement du 14 au 21 Mars 2009... trop tard !!</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '11;73;17;1;1;17;17;73;73;46',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 22,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            132 =>
                array (
                    'id' => 140,
                    'name' => 'La Poule',
                    'description' => 'Tout le monde parle d\'œuf pour Pâques... mais personne ne pense à la Poule, celle sans qui il n\'y aurait pas d\'œuf. Ce skin est devenu culte !! Elle est trop chouette et en plus elle fait *cot cot* :D<br>
<strong style="color:#BC6BD6;">ULTIME : saute en l\'air et pond des œufs sur les autres blablas, et s\'il se le prend en pleine tête... paf le blabla !! L\'œuf s\'écrase sur lui et le repeint jaune d\'œuf !</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '73;1;59;76;76;11;36;84;84;46',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 23,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            133 =>
                array (
                    'id' => 141,
                    'name' => 'L\'oeuf de Pâques emballé',
                    'description' => 'Des œufs en chocolat, miam miam, en plus, celui là est tellement bien présenté avec son superbe nœud cadeau qu\'on a envie de mordre dedans, ou de sauter partout sur le tchat !',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;11;73;51;38;11;36;84;84;46',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 23,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            134 =>
                array (
                    'id' => 142,
                    'name' => 'L\'oeuf de Pâques rayé',
                    'description' => 'Des œufs en chocolat, miam miam !! Se balader tout en chocolat sur Blablaland, c\'est carrément la classe, attention toutefois à ne pas te faire manger par les autres :P',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '65;11;64;64;77;77;82;84;84;46',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 23,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            135 =>
                array (
                    'id' => 143,
                    'name' => 'L\'oeuf de Pâques méchant',
                    'description' => 'Des œufs en chocolat, miam miam !! Se balader tout en chocolat sur Blablaland, c\'est carrément la classe, attention toutefois à ne pas te faire manger par les autres :P',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '11;11;36;36;11;11;36;84;84;46',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 23,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            136 =>
                array (
                    'id' => 144,
                    'name' => 'L\'oeuf de Pâques tâché',
                    'description' => 'Des œufs en chocolat, miam miam !! Se balader tout en chocolat sur Blablaland, c\'est carrément la classe, attention toutefois à ne pas te faire manger par les autres :P',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '46;11;84;84;11;11;36;84;84;46',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 23,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            137 =>
                array (
                    'id' => 145,
                    'name' => 'L\'oeuf de Pâques à pois',
                    'description' => 'Des œufs en chocolat, miam miam !! Se balader tout en chocolat sur Blablaland, c\'est carrément la classe, attention toutefois à ne pas te faire manger par les autres :P',
                    'price' => 400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '46;11;51;51;38;11;36;84;84;46',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 23,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            138 =>
                array (
                    'id' => 146,
                    'name' => 'Emo/Punk Girl 1',
                    'description' => 'Attention là c\'est du top !! Voilà le style qui déchaine grave, si tu en rêves et que tu n\'oses pas dans la vraie vie, alors lâche-toi et possède l\'ultime look !! Et... un plus avec l\'étoile, trop beau :)',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '51;43;89;7;64;35;11;63;11;47',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 4,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            139 =>
                array (
                    'id' => 147,
                    'name' => 'Emo/Punk Boy 1',
                    'description' => 'L\'ultime style, une coupe de cheveux vraiment hallucinante jusqu\'à la dernière mèche, des shoes pleines de détails, c\'est incontestablement THE skin qui fera de toi THE blabla !! Un must XD',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '76;52;89;57;35;73;1;74;1;53',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 4,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            140 =>
                array (
                    'id' => 148,
                    'name' => 'Cameraman',
                    'description' => 'Deviens un véritable cameraman sur Blablaland. Équipé de ta caméra, fais de petits films que tu pourras ensuite visionner. Un pur plaisir, tant pour les amateurs que pour les pros de Blablaland !<br>
<strong style="color:#BC6BD6;">Sors ta caméra et filme pour de vrai sur Blablaland, tu pourras ensuite enregistrer ces films sur ton ordinateur !!</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '76;11;89;43;43;58;76;12;58;12',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 6,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            141 =>
                array (
                    'id' => 149,
                    'name' => 'Preneur de son',
                    'description' => 'Parce que pour faire un vrai film, il faut un bon son... Ce skin est là pour compléter parfaitement l\'équipe de tournage. Super équipé, avec un look vraiment excellent, ce skin est aussi parfait pour les interviews !',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '83;11;89;23;12;13;73;58;13;12',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 6,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            142 =>
                array (
                    'id' => 150,
                    'name' => 'Photographe',
                    'description' => 'Tu as l\'âme d\'un photographe et tu adores prendre plein de photos, alors ce skin est parfait pour toi !! Équipé d\'un super appareil photo dernière génération, prends des tas de clichés sur Blablaland, recouvre le monde de flashs et enregistre ensuite tes photos !!<br>
<strong style="color:#BC6BD6;">Prends de vraies photos sur Blablaland et enregistre-les ensuite !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '36;11;89;77;12;12;73;36;73;57',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 6,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            143 =>
                array (
                    'id' => 151,
                    'name' => '3, 2, 1, Action !',
                    'description' => 'Donne le départ pour l\'enregistrement des films sur Blablaland... plus aucun tournage ne pourra se faire sans toi tellement tu es essentiel pour donner le Top départ.<br>
3, 2, 1, Action !!',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '75;82;89;77;11;58;44;58;58;60',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 6,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            144 =>
                array (
                    'id' => 152,
                    'name' => 'Journaliste Fille',
                    'description' => 'Tu adores faire des interviews sur Blablaland ?! Alors ce skin est exactement ce qu\'il te faut. Parfait pour être la représentante people sur Blablaland, et encore plus ultime si tu es accompagnée d\'un photographe pour immortaliser tes interviews !',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;42;89;11;65;65;11;11;73;58',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 6,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            145 =>
                array (
                    'id' => 153,
                    'name' => 'Camera Girl',
                    'description' => 'Deviens une véritable camera girl sur Blablaland. Équipée de ta caméra, fais de petits films que tu pourras ensuite visionner. Un pur plaisir, tant pour les amateurs que pour les pros de Blablaland !<br>
<strong style="color:#BC6BD6;">Sors ta caméra et filme pour de vrai sur Blablaland, tu pourras ensuite enregistrer ces films sur ton ordinateur !!</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '11;42;89;11;11;12;65;27;68;12',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 6,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            146 =>
                array (
                    'id' => 154,
                    'name' => 'Photographe Fille',
                    'description' => 'Tu as l\'âme d\'une photographe et tu adores prendre plein de photos, alors ce skin est parfait pour toi !! Équipée d\'un super appareil photo dernière génération, prends des tas de clichés sur Blablaland, recouvre le monde de flashs et enregistre ensuite tes photos !!<br>
<strong style="color:#BC6BD6;">Prends de vraies photos sur Blablaland et enregistre-les ensuite !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;42;89;65;12;12;65;11;77;58',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 6,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            147 =>
                array (
                    'id' => 155,
                    'name' => 'Journaliste',
                    'description' => 'Tu adores faire des interviews sur Blablaland ?! Alors ce skin est exactement ce qu\'il te faut. Parfait pour être le représentant people sur Blablaland, et encore plus ultime si tu es accompagné d\'un photographe pour immortaliser tes interviews !',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '1;11;89;3;77;12;12;11;77;45',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 6,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            148 =>
                array (
                    'id' => 156,
                    'name' => 'Body Guard 001',
                    'description' => 'Le skin indispensable à tout événement, discret, il est indispensable pour assurer la protection des autres. Prêt à donner ta vie pour sauver d\'autres blablas ? Deviens un Body Guard.<br>
<strong style="color:#BC6BD6;">Protège un blabla sur le tchat, il ne craindra plus rien à tes côté, mais veille à bien rester près de lui !</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '81;11;89;73;11;58;11;11;77;45',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 6,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            149 =>
                array (
                    'id' => 157,
                    'name' => 'Body Guard 002',
                    'description' => 'Le skin indispensable à tout événement, discret, il est indispensable pour assurer la protection des autres. Prêt à donner ta vie pour sauver d\'autres blablas ? Deviens un Body Guard.<br>
<strong style="color:#BC6BD6;">Protège un blabla sur le tchat, il ne craindra plus rien à tes côté, mais veille à bien rester près de lui !</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '11;11;82;73;11;58;11;11;73;45',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 6,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            150 =>
                array (
                    'id' => 158,
                    'name' => 'Hollywood  Boy',
                    'description' => 'Tu as toujours rêvé d\'être une Super Star d\'Hollywood, d\'être le centre d\'intérêt et sous le feu des projecteurs ?! Réalise ton rêve avec ce skin Hollywood !!<br>Star attitude oblige, tu es prêt à arpenter le tapis rouge avec toute la classe qu\'il requiert !!',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '78;42;89;59;59;4;11;11;73;45',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 6,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            151 =>
                array (
                    'id' => 159,
                    'name' => 'Hollywood Girl 1',
                    'description' => 'Tu as toujours rêvé d\'être une Super Star d\'Hollywood, d\'être le centre d\'intérêt et sous le feu des projecteurs ?! Réalise ton rêve avec ce skin Hollywood !!<br>Star attitude oblige, tu es prête à arpenter le tapis rouge avec toute la classe qu\'il requiert !!',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '71;42;89;58;11;58;11;11;73;45',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 6,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            152 =>
                array (
                    'id' => 160,
                    'name' => 'Hollywood 2',
                    'description' => 'Tu as toujours rêvé d\'être une Super Star d\'Hollywood, d\'être le centre d\'intérêt et sous le feu des projecteurs ?! Réalise ton rêve avec ce skin Hollywood !!<br>Star attitude oblige, tu es prêt à arpenter le tapis rouge avec toute la classe qu\'il requiert !!',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;42;89;73;70;84;11;46;77;45',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 6,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            153 =>
                array (
                    'id' => 161,
                    'name' => 'Chat',
                    'description' => 'Deviens un irrésistible petit chat trop mignon et balade toi dans Blablaland. Et si l\'envie t\'en prend, tu peux aussi aller chasser les souris... :P<br>
<strong style="color:#BC6BD6;">Tu peux faire des petits miaulements, et jouer avec une pelote de laine posée devant toi ;)<br>Et en plus, le chat saute super haut !</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '85;11;13;59;85;11;85;66;73;45',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            154 =>
                array (
                    'id' => 162,
                    'name' => 'Chien',
                    'description' => 'Gambade tout fièrement dans les plaines de Blablaland !! Tu es le meilleur ami de l\'homme, mais surtout le meilleur ami des Blablas :) Whouaf Whouaf !!<br>
<strong style="color:#BC6BD6;">Tu peux aboyer, et jouer avec un os posé devant toi ;)</strong></span>
',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '85;11;84;59;11;11;12;88;73;45',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            155 =>
                array (
                    'id' => 163,
                    'name' => 'Souris',
                    'description' => 'Deviens une petite souris trop mimi et cours dans les champs de Blablaland !! Ce skin est ultra craquant et attachant... mais attention quand même aux chats, on ne sait jamais !!<br>
<strong style="color:#BC6BD6;">Tu peux couiner, et ronger un morceau de fromage posé devant toi ;)<br>Et en plus... la souris cours super vite !!</strong>',
                    'price' => 1100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '67;11;17;59;11;11;12;88;73;45',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            156 =>
                array (
                    'id' => 164,
                    'name' => 'Blabla\'ToyZ Militaire',
                    'description' => 'Ce Blablatoyz combattant est une véritable machine de destruction !<br>Idéal pour se dissimuler, son camouflage typique de l’Armée fera de lui un efficace guerrier !<br>
<strong style="color:#BC6BD6;">Skin Collector<br>
Accumule de l\'énergie plus rapidement et accède à différents pouvoirs encore plus puissants - comme l\'énorme colonne de feu !</strong>',
                    'price' => 2009,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '27;81;90;59;11;11;12;88;73;45',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 16,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            157 =>
                array (
                    'id' => 165,
                    'name' => 'Blabla\'ToyZ Abeille',
                    'description' => 'Qui a dit que les abeilles ne piquaient pas ?<br>
Ce Blablatoyz au cachet graphique osé et unique vous en dira bien long sur sa manière de procéder !<br>
<strong style="color:#BC6BD6;">Skin Collector<br>
Accumule de l\'énergie plus rapidement et accède à différents pouvoirs encore plus puissants - comme l\'énorme colonne de feu !</strong>',
                    'price' => 2009,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;1;90;59;11;11;12;88;73;45',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 16,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            158 =>
                array (
                    'id' => 166,
                    'name' => 'Blabla\'ToyZ Kokeshi',
                    'description' => 'Il vous fera tout simplement craquer !!<br>
Avec son air innocent et malicieux ce petit bijou cache admirablement son jeu quant à ce qu’il est capable de faire comme dégâts !!<br>
<strong style="color:#BC6BD6;">Skin Collector<br>
Accumule de l\'énergie plus rapidement et accède à différents pouvoirs encore plus puissants - comme l\'énorme colonne de feu !</strong>',
                    'price' => 2009,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '12;12;88;59;47;66;12;66;51;57',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 16,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            159 =>
                array (
                    'id' => 167,
                    'name' => 'Blabla\'ToyZ Funny',
                    'description' => 'Fun, cool avec énormément d’humour, ce Blablatoyz ne se prend pas au sérieux et démontre que l’on peut allier humour, classe et puissance. Il est donc conseillé de ne pas trop le chatouiller !<br>
<strong style="color:#BC6BD6;">Skin Collector<br>
Accumule de l\'énergie plus rapidement et accède à différents pouvoirs encore plus puissants - comme l\'énorme colonne de feu !</strong>',
                    'price' => 2009,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '12;12;37;12;12;73;57;12;73;12',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 16,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            160 =>
                array (
                    'id' => 168,
                    'name' => 'Smileys :D',
                    'description' => '<img src="/images/shop/skins/168b.jpg"><br>3 délirants skins smileys dans un seul skin qui n\'attend plus que toi pour animer Blablaland !! Balade toi sur le tchat et change ton visage en direct selon ton humeur avec les 3 versions proposées dans ce terrible skin smiley !!<br>
<strong style="color:#BC6BD6;">3 skins en 1, trop trop fort !</strong>',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '81;11;77;11;58;73;56;33;37;11',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 25,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            161 =>
                array (
                    'id' => 169,
                    'name' => 'Smileys :)',
                    'description' => '<img src="/images/shop/skins/169b.jpg"><br>3 délirants skins smileys dans un seul skin qui n\'attend plus que toi pour animer Blablaland !! Balade toi sur le tchat et change ton visage en direct selon ton humeur avec les 3 versions proposées dans ce terrible skin smiley !!<br>
<strong style="color:#BC6BD6;">3 skins en 1, trop trop fort !</strong>',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '81;11;77;11;58;73;56;33;37;11',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 25,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            162 =>
                array (
                    'id' => 170,
                    'name' => 'Smileys ;)',
                    'description' => '<img src="/images/shop/skins/170b.jpg"><br>3 délirants skins smileys dans un seul skin qui n\'attend plus que toi pour animer Blablaland !! Balade toi sur le tchat et change ton visage en direct selon ton humeur avec les 3 versions proposées dans ce terrible skin smiley !!<br>
<strong style="color:#BC6BD6;">3 skins en 1, trop trop fort !</strong>',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '74;11;77;11;58;73;56;33;37;11',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 25,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            163 =>
                array (
                    'id' => 171,
                    'name' => 'Smileys 8)',
                    'description' => '<img src="/images/shop/skins/171b.jpg"><br>3 délirants skins smileys dans un seul skin qui n\'attend plus que toi pour animer Blablaland !! Balade toi sur le tchat et change ton visage en direct selon ton humeur avec les 3 versions proposées dans ce terrible skin smiley !!<br>
<strong style="color:#BC6BD6;">3 skins en 1, trop trop fort !</strong>',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '74;11;77;11;58;73;11;33;37;11',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 25,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            164 =>
                array (
                    'id' => 172,
                    'name' => 'Smileys :P',
                    'description' => '<img src="/images/shop/skins/172b.jpg"><br>3 délirants skins smileys dans un seul skin qui n\'attend plus que toi pour animer Blablaland !! Balade toi sur le tchat et change ton visage en direct selon ton humeur avec les 3 versions proposées dans ce terrible skin smiley !!<br>
<strong style="color:#BC6BD6;">3 skins en 1, trop trop fort !</strong>',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '35;11;77;11;58;73;44;33;37;11',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 25,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            165 =>
                array (
                    'id' => 173,
                    'name' => 'Smileys XD',
                    'description' => '<img src="/images/shop/skins/173b.jpg"><br>3 délirants skins smileys dans un seul skin qui n\'attend plus que toi pour animer Blablaland !! Balade toi sur le tchat et change ton visage en direct selon ton humeur avec les 3 versions proposées dans ce terrible skin smiley !!<br>
<strong style="color:#BC6BD6;">3 skins en 1, trop trop fort !</strong>',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '73;11;64;11;58;73;44;33;37;11',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 25,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            166 =>
                array (
                    'id' => 174,
                    'name' => 'Onigiri',
                    'description' => 'Itadakimasu !!! Deviens un mythique Onigiri, la boule de riz la plus célèbre de tout l\'univers Manga... et aussi la plus délicieuse du monde !! Alors, qui te mangera ?!',
                    'price' => 900,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '12;11;59;66;12;66;59;66;59;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 12,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            167 =>
                array (
                    'id' => 175,
                    'name' => 'Flanc',
                    'description' => 'Après une bonne boule de riz, l\'idéal c\'est de manger un flan, ça glisse tout seul !! Ce skin trop mignon avec sa petite fraise sur la tête est tout simplement irrésistible !',
                    'price' => 900,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '81;81;80;66;73;34;59;66;59;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 12,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            168 =>
                array (
                    'id' => 176,
                    'name' => 'Maki',
                    'description' => 'Sûrement le plat le plus populaire et le plus connu du monde du Manga, le maki est tout simplement une merveille, et celui-là fera craquer toutes vos rencontres, sans aucun doute !!',
                    'price' => 900,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '59;59;12;66;66;26;77;74;73;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 12,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            169 =>
                array (
                    'id' => 177,
                    'name' => 'Geisha',
                    'description' => 'Plein de grâce et de volupté, ce skin Geisha envoûtant vous fait fondre sur place. Avec son ombrelle, elle plane dans les airs... tout en douceur, calme et sérénité.<br><b>Ce skin est une merveille, tout simplement.</b>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '12;11;89;66;59;66;59;66;59;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 18,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            170 =>
                array (
                    'id' => 178,
                    'name' => 'Maki royal',
                    'description' => 'Le Maki royal est peu connu, bien malheureusement car il n\'y a qu\'une seule chose à dire : Itadakimasu (signifie "bon appétit" en Japonais) !!',
                    'price' => 900,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '59;12;75;66;59;77;77;74;73;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 12,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            171 =>
                array (
                    'id' => 179,
                    'name' => 'Gâteau',
                    'description' => 'Mmmmh le bon gâteau !! Faites craquer tout le monde en vous baladant dans les plaines de Blablaland avec cette bonne odeur de gâteau !! Et, "cerise sur le gâteau" comme on dit ;) ',
                    'price' => 900,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '73;12;59;73;77;73;34;74;73;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 12,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            172 =>
                array (
                    'id' => 180,
                    'name' => 'Sushi',
                    'description' => 'Et voilà le fameux Sushi !! Contrairement aux croyances, il est rectangulaire et non rond (ce sont les makis). Mais il est tout aussi bon, mignon mais un peu grognon :P',
                    'price' => 900,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '29;12;85;59;12;59;34;74;73;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 12,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            173 =>
                array (
                    'id' => 181,
                    'name' => 'Takémi',
                    'description' => 'Du bon riz, de l\'algue, des légumes, un plat parfaitement typique du Japon, et mon dieu que c\'est bon !! Comme on dit là-bas : Itadakimasu !!!',
                    'price' => 900,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '59;44;12;59;75;35;34;74;73;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 12,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            174 =>
                array (
                    'id' => 182,
                    'name' => 'Sportive',
                    'description' => 'Un look racé et branché d\'une grande simplicité, un petit air craquant : voilà la recette pour un skin traditionnel et efficace.',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;43;89;73;62;60;58;77;75;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 14,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            175 =>
                array (
                    'id' => 183,
                    'name' => 'Fille au Coeur',
                    'description' => 'Romantique à souhait, la fille au cœur dégage un charme fou via son brushing élancé et son petit cœur tout mimi telle une cerise sur le gâteau !',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '83;43;89;26;26;83;58;77;75;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 14,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            176 =>
                array (
                    'id' => 184,
                    'name' => 'Garçon en uniforme',
                    'description' => 'Vêtu de son uniforme classique et ravissant, ce skin dépourvu de surenchère graphique saura vous séduire par sa simplicité et son innocence.',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;81;89;44;44;73;58;58;77;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 14,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            177 =>
                array (
                    'id' => 185,
                    'name' => 'Blabla Timide',
                    'description' => 'Timide, réservé mais tellement mignon, on croquerait ce skin tellement il est choux !',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '73;43;89;73;58;58;58;58;77;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 14,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            178 =>
                array (
                    'id' => 186,
                    'name' => 'Rasta Boy',
                    'description' => '100% Rasta, le skin super "cool" haut en couleurs qui ne demande pas plus que de se balader dans Blablaland afin de répandre sa bonne humeur et sa "cool" attitude !!',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '81;81;84;34;34;77;73;73;77;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 3,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            179 =>
                array (
                    'id' => 187,
                    'name' => 'Rasta Pépé',
                    'description' => 'Le plus vieux loup parmi la communauté Rasta, "coool" !! Avec plus d’un tour dans son sac, Rasta pépé émane par son look un charme fou dans le plus pur esprit Rasta !',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '81;81;84;73;34;77;73;77;77;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 3,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            180 =>
                array (
                    'id' => 188,
                    'name' => 'Rasta Sportive',
                    'description' => 'Une coupe de cheveux légendaire habillée d’une coiffe Rasta Powa, la Rasta sportive vous séduira par son look ravageur !!',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '81;41;84;73;34;77;73;1;57;34',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 3,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            181 =>
                array (
                    'id' => 189,
                    'name' => 'Rasta Fille',
                    'description' => 'Une petite blabla en touriste qui s’est immergée dans la communauté Rasta et qui n’a pas à envier les autres Rasta grâce à sa superbe coiffe et ses superbes baskets !!',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '83;41;89;73;34;77;73;1;77;34',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 3,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            182 =>
                array (
                    'id' => 190,
                    'name' => 'Summer Blablaboy',
                    'description' => 'Un look ultime pour passer l’été ! Équipé de sa casquette Blablaland® et de ses chaussures BBL, voici un skin qui ne manque pas de marques !! Le premier skin dont les vêtements sont à l’effigie de la marque Blablaland® !',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;1;89;77;1;73;64;1;51;44',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 3,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            183 =>
                array (
                    'id' => 191,
                    'name' => 'Summer Bogoss',
                    'description' => 'Sans doute le skin le plus charmeur, dont le caractère méditerranéen en fera craquer plus d’une !
Une ligne de vêtement purement assortie et une coupe de cheveux à l’italienne, voici les ingrédients pour un skin réussi !',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '1;1;88;11;88;88;88;88;51;44',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 3,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            184 =>
                array (
                    'id' => 192,
                    'name' => 'Summer Girl 1',
                    'description' => 'Une coiffure super sophistiquée, des lunettes complètement tendances, des chaussures Blablaland® Énormes !! Que dire de plus devant cette combinaison d’éléments aussi frais ?',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '1;1;68;47;47;63;66;51;73;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 3,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            185 =>
                array (
                    'id' => 193,
                    'name' => 'Summer Girl 2',
                    'description' => 'Ce skin talons aiguilles au brushing ravageur et aux lunettes Ultra Mode en fera craquer plus d’un tellement son charme est grand !',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;1;89;63;63;57;63;51;73;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 3,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            186 =>
                array (
                    'id' => 194,
                    'name' => 'Panda',
                    'description' => 'Blablaland se rallie à la cause du <a href="http://www.wwf.fr" target="_blank" class="fofo_link_extern">WWF-France (World Wide Fondation)</a> pour prendre soin de notre belle planète. Ensemble, nous t’offrons ce merveilleux skin PANDA, symbole de la nature, du WWF, et de l’implication de Blablaland dans la sauvegarde de notre planète.',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '12;57;57;63;12;57;63;51;73;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            187 =>
                array (
                    'id' => 195,
                    'name' => 'BlablaBalls 1',
                    'description' => 'Fais des méga-jumps hallucinants sur Blablaland grâce à ces skins étirables qui rebondissent comme des ressorts !! Saute et maintiens la flèche du bas enfoncée pour t\'envoler de plus en plus haut dans les airs, ou saute du point le plus élevé possible pour faire des rebonds surnaturels !!<br>
<strong style="color:#BC6BD6;">Tout simplement excellent, on ne peut plus arrêter de rebondir tellement c\'est marrant !</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '74;1;77;64;36;46;63;52;77;37',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 1,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            188 =>
                array (
                    'id' => 196,
                    'name' => 'BlablaBalls 2',
                    'description' => 'Fais des méga-jumps hallucinants sur Blablaland grâce à ces skins étirables qui rebondissent comme des ressorts !! Saute et maintiens la flèche du bas enfoncée pour t\'envoler de plus en plus haut dans les airs, ou saute du point le plus élevé possible pour faire des rebonds surnaturels !!<br>
<strong style="color:#BC6BD6;">Tout simplement excellent, on ne peut plus arrêter de rebondir tellement c\'est marrant !</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '67;1;66;64;65;53;63;52;77;37',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 1,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            189 =>
                array (
                    'id' => 197,
                    'name' => 'BlablaBalls 3',
                    'description' => 'Fais des méga-jumps hallucinants sur Blablaland grâce à ces skins étirables qui rebondissent comme des ressorts !! Saute et maintiens la flèche du bas enfoncée pour t\'envoler de plus en plus haut dans les airs, ou saute du point le plus élevé possible pour faire des rebonds surnaturels !!<br>
<strong style="color:#BC6BD6;">Tout simplement excellent, on ne peut plus arrêter de rebondir tellement c\'est marrant !</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '67;1;77;64;65;53;63;52;77;37',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 1,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            190 =>
                array (
                    'id' => 200,
                    'name' => 'Mousse',
                    'description' => 'Apprenti dans le corps de la Marine, le mousse arpente les mers du monde pour monter en grade et devenir un grand aventurier des mers. Minutieux et discret il fait doucement son petit bout de chemin.',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;81;89;57;44;73;57;45;45;57',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 28,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            191 =>
                array (
                    'id' => 201,
                    'name' => 'Matelot Fille 1',
                    'description' => 'Craquante, mignonne à souhait, la très très charmante matelot aux couettes fera chavirer tous les coeurs de Blablaland !!',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;43;89;57;42;57;73;45;57;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 28,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            192 =>
                array (
                    'id' => 204,
                    'name' => 'Alien Tentacules',
                    'description' => 'Sans doute l’alien blabla le plus étrange qui soit : notamment avec son mode de déplacement carrément unique où les rebonds lui permettent d’aller et de venir !! Trop fort !',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '58;2;46;63;12;57;63;51;73;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 1,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            193 =>
                array (
                    'id' => 205,
                    'name' => 'Alien Cyclope 1',
                    'description' => 'Étrange, mignon, mystérieux, effrayant ? Autant de qualificatifs réunis dans un seul et même skin ! Avec cet Alien Cyclope, tu ne passeras pas inaperçu dans la communauté de Blablaland ! E.T peut retourner au lit...',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;2;64;63;58;57;63;51;73;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 1,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            194 =>
                array (
                    'id' => 206,
                    'name' => 'L\'Alien',
                    'description' => 'On le nomme “petit gris” dans la communauté U.F.O : un grand classique enfin parmi nous ! Certainement le skin phare de cette sortie pour le moins originale !!<br>Un énorme "Must Have" sur le skin le plus mystérieux de Blablaland !',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;2;58;63;58;57;63;51;73;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 1,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            195 =>
                array (
                    'id' => 207,
                    'name' => 'Alien Cyclope 2',
                    'description' => 'Pas moins efficace que son confrère sur le plan de l’étrange, ce skin attirera les regards sur vous - et il saura le rendre !! Ses oreilles pointues et son œil globuleux en font un phénomène super particulier !!',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;2;35;57;58;73;63;51;73;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 1,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            196 =>
                array (
                    'id' => 210,
                    'name' => 'Le Capitaine',
                    'description' => 'Aux commandes de son fier navire des hautes mers, le Capitaine vous charmera par son uniforme flambant et par son puissant charisme de commandement. Face à au capitaine : “Garde à vous !!”',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '2;44;89;57;58;77;77;73;42;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 28,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            197 =>
                array (
                    'id' => 211,
                    'name' => 'Matelot Fille 2',
                    'description' => 'Très active et très commandante, la matelot première classe saura donner les ordres qu’il faut pour mener à bien la mission générale !',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '83;43;89;57;42;57;73;45;57;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 28,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            198 =>
                array (
                    'id' => 213,
                    'name' => 'Lion',
                    'description' => 'Le roi de la jungle arrive sur Blablaland !! Tout simplement le plus grand, le plus charismatique et le plus majestueux blablanimal de tous les temps !! Mais aussi celui avec le plus grand coeur... il protège son petit sur l\'action de danse.<br>
<strong style="color:#BC6BD6;">Un MUST !! Incarne le Roi de la Jungle, ça impose le respect !</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '71;81;75;2;71;71;73;2;31;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            199 =>
                array (
                    'id' => 214,
                    'name' => 'Éléphant',
                    'description' => 'L\'éléphant joue plusieurs rôles à la fois !! Il est super mignon, mais aussi un peu grognon... et oui, un éléphant, ça trompe énormément (ok, je sors ^^)<br>
<strong style="color:#BC6BD6;">L\'éléphant se lave dans son action de danse, plus besoin de lingette ultra !! Trop puissant l\'éléphant !!!</strong>',
                    'price' => 1100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '67;43;17;57;57;71;73;2;31;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            200 =>
                array (
                    'id' => 215,
                    'name' => 'Zèbre',
                    'description' => 'Le zèbre, l\'animal obligatoire pour tout safari réussi !! Trop joli, stylé même on peut dire, avec ses belles rayures et son charisme mystérieux. Deviens l\'un des animaux les plus célèbres de toute la savane ! Et au fait, pourquoi il a des rayures le zèbre ?
<strong style="color:#BC6BD6;">Le Zèbre court plus vite et saute plus haut !</strong>',
                    'price' => 1100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '11;11;57;11;11;71;73;2;31;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            201 =>
                array (
                    'id' => 216,
                    'name' => 'Rhino féroce !',
                    'description' => 'Respect Powa pour le Rhino... sous son apparence féroce se cache un animal tout gentil, mais qui n\'hésitera pas à te foncer dessus !! Il ne faut pas trop l\'embêter lui.
<strong style="color:#BC6BD6;">Lorsque le rhino est énervé (danse), clique sur l\'action de charge pour attaquer et tout défoncer sur ton passage !! Ben ouep, un rhino ça ne fait pas semblant !</strong>',
                    'price' => 1100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '71;1;25;11;18;83;65;77;46;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            202 =>
                array (
                    'id' => 217,
                    'name' => 'Footballeur américain',
                    'description' => 'Attention, le Footballeur américain n\'est pas là pour rigoler, ce skin est tout simplement surpuissant ! Il balance son ballon pour shooter à distance, et peut faire un Drive Block pour pousser tout le monde devant lui (Se mettre en danse et cliquer sur le ballon)<br>
<strong style="color:#BC6BD6;">Il attaque à distance en lançant son ballon, et peut faire un Drive block pour pousser les blabla devant ! Énorme !!</strong>',
                    'price' => 1100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '73;1;89;73;43;57;76;57;1;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 9,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            203 =>
                array (
                    'id' => 218,
                    'name' => 'Baseballeur',
                    'description' => 'Magnifique Skin de Baseballeur qui peut donner un coup de batte pour balancer une balle et toucher un blabla à distance !! C\'est tout simplement énorme, et en plus ce skin a vraiment la classe des pros ^^<br>
<strong style="color:#BC6BD6;">Il attaque à distance en balançant une balle à coup de batte !! HOME RUN !!</strong>',
                    'price' => 1100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '42;1;89;57;57;73;42;73;1;57',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 9,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            204 =>
                array (
                    'id' => 219,
                    'name' => 'PomPom Girl 1',
                    'description' => 'Encourage tous tes blablas préférés avec ce magnifique skin de PomPom Girl ! Agite tes pompons dans ta grande danse et redonne du boost et du moral à tout le monde !! Pour Blabla Hip Hip Hip !!!',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;43;89;65;77;65;64;73;1;57',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 9,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            205 =>
                array (
                    'id' => 220,
                    'name' => 'PomPom Girl 2',
                    'description' => 'Encourage tous tes blablas préférés avec ce magnifique skin de PomPom Girl ! Agite tes pompons dans ta grande danse et redonne du boost et du moral à tout le monde !! Pour Blabla Hip Hip Hip !!!',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '12;1;89;64;64;42;77;57;77;37',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 9,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            206 =>
                array (
                    'id' => 221,
                    'name' => 'La Faucheuse',
                    'description' => 'Incarne le personnage mythique de la Faucheuse... Deviens l\'incarnation même de la mort, et prends son contrôle. Transforme les blablas en tombe d\'un coup de faux, ici bas, c\'est toi le roi de la mort.<br>
<strong style="color:#BC6BD6;">Transforme les blablas en pierres tombales !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '1;73;24;71;47;24;18;57;82;37',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            207 =>
                array (
                    'id' => 222,
                    'name' => 'Squelette',
                    'description' => 'Déguise-toi en blabla squelette pour Halloween, enfile ton costume et pars faire peur à tout le monde !! Mouahahaaa, des friandises ou un maléfice !!',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '1;73;11;71;59;24;18;57;82;37',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            208 =>
                array (
                    'id' => 223,
                    'name' => 'Momie',
                    'description' => 'Quoi de plus effrayant qu\'un blabla momifié... de la chair morte sous les bandages... haaaaaaaaa !!! Sous ses apparences de monstre, ce skin a vraiment la classe et ses mouvements sont super stylés !!',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '1;36;57;71;11;24;18;57;82;37',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            209 =>
                array (
                    'id' => 224,
                    'name' => 'Fille Vampirique',
                    'description' => 'Faufile-toi dans la nuit noire d\'Halloween à la recherche d\'une proie a effrayer !! Stylée, gothique, vampirique et maléfique... un magnifique skin qui en fera craquer plus d\'un !! ',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '1;1;89;71;1;75;73;73;82;37',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            210 =>
                array (
                    'id' => 225,
                    'name' => 'Diablesse',
                    'description' => 'Incarne la Diablesse, Reine maléfique de Blablaland, et pars à la conquête de la peur. Avec ses magnifiques petites cornes, ce skin a vraiment du style ;)',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '74;43;89;74;73;73;1;73;82;37',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            211 =>
                array (
                    'id' => 226,
                    'name' => 'Chauve Souris CitrouilleParty09',
                    'description' => '<img src="/images/blablaland/news_limite.gif"> La Chauve Souris, ce skin est UNIQUE et une seule personne dans tout Blablaland le possède, à savoir le grand vainqueur de la Citrouille Party 2009 qui n\'est autre que MaRy_MaRy !!',
                    'price' => 3500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '34;11;92;114;15;15;59;15;73;82',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            212 =>
                array (
                    'id' => 228,
                    'name' => 'Frankenstein',
                    'description' => 'Rien que le nom donne des frissons dans le dos. <strong>C\'est LE SKIN à posséder impérativement</strong> pour un Halloween ultra réussi !! Frankenstein... sûrement l\'un des monstres les plus populaires, que tu peux incarner !! Mouahahaaaaaa !! Avec ce skin, Halloween sera tien ^^',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '2;11;36;84;10;73;82;88;82;37',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            213 =>
                array (
                    'id' => 229,
                    'name' => 'Savant fou',
                    'description' => 'Le Savant fou, créateur de machines démoniaques et dangereuses, mais surtout, créateur du Frankenstein... Il est certes très intelligent, mais avant tout, il est complètement fou !!<br>
<strong style="color:#BC6BD6;">Verse des cocktails chimiques et colorie les blablas !</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '58;58;89;57;19;73;58;64;82;37',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            214 =>
                array (
                    'id' => 230,
                    'name' => 'Zombie',
                    'description' => 'On ne peut pas parler d\'Halloween sans un Zombie qui traine dans le coin. Crée ton clan de zombies, regroupez-vous et envahissez tout Blablaland !! Moitié mort, moitié vivant... ce qui compte c\'est de faire peur !! Hahahaaaaa',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '58;58;26;57;19;73;58;64;82;37',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            215 =>
                array (
                    'id' => 231,
                    'name' => 'Fille Démoniaque',
                    'description' => 'Fête Halloween avec classe grâce à ce superbe skin complétement démoniaque !! Avec un magnifique maquillage Halloween et une tenue qui en jette, tu seras incontestablement la Reine du soir, et tous les zombies seront à tes pieds !! A toi le pouvoir démoniaque !!',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '74;42;89;74;73;73;57;64;82;37',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            216 =>
                array (
                    'id' => 232,
                    'name' => 'CitrouilleParty09',
                    'description' => '<img src="/images/blablaland/news_limite.gif"> Skin collector en 9 exemplaires uniquement... remportés par les 9 gagnants de la Citrouille Party 2009 (du 2ème au 10ème) !! Super skin de Citrouille qui peut se faire exploser ou briller !!',
                    'price' => 3000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '34;11;75;15;15;59;15;73;82;37',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            217 =>
                array (
                    'id' => 235,
                    'name' => 'v1 Boy',
                    'description' => 'Un des premiers Skin qui avait été dessiné pour la supposée première v2 qui n\'a jamais vue le jour (surnommée la 1.5 fantôme) !! Aujourd\'hui, son heure de Gloire est arrivée, car même avec son vieux design "Old school", il a trop la classe !!',
                    'price' => 590,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;17;89;77;73;59;15;73;82;37',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            218 =>
                array (
                    'id' => 236,
                    'name' => 'Gentil Bourreau',
                    'description' => 'Bourreau ou Ninja, ce skin a un design assez passe-partout qui lui confère plein de rôles !! Enfin, à la base c\'est quand même un gentil bourreau "Killer de Boulets" !!',
                    'price' => 590,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '40;11;88;15;15;59;15;73;82;37',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            219 =>
                array (
                    'id' => 237,
                    'name' => 'Meringue',
                    'description' => 'Vous vous souvenez de la tomate/fraise/cerise ? Voici un nouveau dans le genre encore plus fort, la Meringe/Caca/Mousse au Chocolat/Glace/Chantilly !!! Ce qui compte, c\'est que ce skin est vraiment trop trop mignon et en fera craquer plus d\'un !',
                    'price' => 590,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;11;67;77;60;59;15;73;82;37',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            220 =>
                array (
                    'id' => 238,
                    'name' => 'Gangster',
                    'description' => 'La classe "Old School" pour ce skin Gangster, avec une p\'tite touche de CowBoy qui lui donne vraiment un look superbe !! Qui sait, y\'a peut-être des tas de trésors cachés dans Blabla ?',
                    'price' => 590,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '84;20;89;89;73;84;84;73;82;37',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            221 =>
                array (
                    'id' => 239,
                    'name' => 'BBL-Solid Tech n200',
                    'description' => '<img src="/images/blablaland/news_limite.gif"><em> Au cœur de Blablaland, sommeille l\'un des plus grands guerriers des temps anciens. Maintenant, il est l\'heure pour lui de refaire surface !</em><br>
<b>Le Solid Tech n200</b>, l\'époque des machines de guerre.<br>
Des pouvoirs incroyables, un design à couper le souffle, une pure merveille... le N200 !! Avec ses réacteurs surpuissants basés sous ses ailes métaliques, le n200 est ultra-rapide, ultra-maniable. Il se propulse dans les airs et peux générer un tremblement de terre incroyable, repoussant les blablas autour de lui. Le n200 surpasse tout ce que vous pouviez imaginer... laissez vous emporter dans un monde de puissance !! BBL SOLID TECH N200<br>
<strong style="color:#BC6BD6;">ÉDITION LIMITÉE à l\'achat, seulement du 30 Janv au 7 Fév 2010... si tu ne prends pas le n200 avant cette date, tu ne pourras plus jamais l\'avoir !! Alors n\'hésite pas une seconde et fonce ^^</strong><br><br>
<a href="/site/goodies.php?gid=33" class="fofo_link_extern">Clique ici pour voir la Vidéo</a>',
                    'price' => 2000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '73;73;2;2;2;57;2;73;57;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 22,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            222 =>
                array (
                    'id' => 240,
                    'name' => 'Blabla\'ToyZ - Spécial Noël !!',
                    'description' => '<img src="/images/blablaland/news_limite.gif" />  <strong style="color:#F11;">JOYEUX NOËL !!</strong>
<br /><br />
Découvre l\'ultime ToyZ de Noël uniquement disponible pendant les fêtes de Noël... alors n\'attends pas une seconde de plus sinon tu ne pourras plus l\'avoir, à ne rater sous aucun prétexte !!
<br><br>
Ce ToyZ est peint aux motifs de Noël, avec une allure et un charisme très marqué, ce skin est une vraie perle rare, à posséder obligatoirement pour en imposer grave !!<br>
Ce skin possède les derniers pouvoirs des ToyZ avec la colonne de feu !! Joyeux Noël :P
<br><br>
<strong style="color:#ef4400;">Ce skin exclusif n\'est disponible que pendant les fêtes de fin d\'année !!!</color></strong>',
                    'price' => 3000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '73;12;88;12;57;57;57;66;88;66',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'group_id' => 15,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            223 =>
                array (
                    'id' => 241,
                    'name' => 'Abeille Noël',
                    'description' => 'Redécouvre la magnifique Abeille de Blablaland, toute relookée par les lutins du père Noël pour les fêtes de fin d\'année. Et en cadeau, ils lui ont en plus offert le pouvoir de faire des étoiles !! WHouaaaa<br><br><strong style="color:#BC6BD6;">Redécouvrez l\'Abeille aux couleurs de Noël avec en plus un pouvoir d\'étoiles magiques !!</strong><br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Abeille" !! Trop cool !!</b>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;1;76;73;16;59;57;73;73;57',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            224 =>
                array (
                    'id' => 242,
                    'name' => 'Poussin Noël',
                    'description' => 'Redécouvre le plus mignon de tous les Poussins, tout relooké par les lutins du père Noël pour les fêtes de fin d\'année. Et en cadeau, ils lui ont en plus offert le pouvoir de faire des étoiles !! WHouaaaa<br><br><strong style="color:#BC6BD6;">Redécouvrez le Poussin aux couleurs de Noël avec en plus un pouvoir d\'étoiles magiques !!</strong><br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Poussin" !! Trop cool !!</b>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;43;76;75;75;73;57;73;73;57',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            225 =>
                array (
                    'id' => 243,
                    'name' => 'Blagicien Noël ',
                    'description' => 'Le Remix Noël du Blagicien, avec des pouvoirs encore plus extraordinaires, encore plus magiques !! Donne un coup de baguette et transforme toi et ta cible en confiserie de Noël, Excellent !!!<br>
Mais ce n\'est pas tout, un mystère plane sur l\'origine de ta baguette magique, qui d\'après les légendes, serait faite avec des morçeaux du N200... !! A toi de découvrir de quoi est capable la magie de Noël ^^
<br><br><strong style="color:#BC6BD6;">Transforme toi et ta cible en confiserie de Noël, et découvre les mystères du N200... mais attention, la magie peut être capricieuse, et avoir des effets...petits et marrons :P</strong>',
                    'price' => 1800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '57;1;89;73;73;57;73;84;34;57',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 15,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            226 =>
                array (
                    'id' => 244,
                    'name' => 'Mouton Noël',
                    'description' => 'Redécouvre le plus adorable Mouton, tout relooké par les lutins du père Noël pour les fêtes de fin d\'année. Et en cadeau, ils lui ont en plus offert le pouvoir de faire des étoiles !! WHouaaaa<br><br><strong style="color:#BC6BD6;">Redécouvrez le Mouton aux couleurs de Noël avec en plus un pouvoir d\'étoiles magiques !!</strong><br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Mouton" !! Trop cool !!</b>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;43;59;75;73;73;57;73;73;57',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            227 =>
                array (
                    'id' => 246,
                    'name' => 'Fée magique',
                    'description' => 'Ce skin est tout simplement l\'un des plus beaux skins de tout Blablaland. Deviens une merveilleuse petite fée qui volette dans les airs, et répands tout autour de toi la Magie d\'un coup de baguette !!!<br>
<strong style="color:#BC6BD6;">D\'un coup de Baguette magique, tu peux faire des étoiles bonheur à quelqu\'un près de toi.</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '78;42;89;59;66;59;66;59;54;66',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 15,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            228 =>
                array (
                    'id' => 247,
                    'name' => 'Nounours de Noël',
                    'description' => 'Voilà LE SKIN à posséder pour Noël... super mignon, craquant, magnifique... on ne peut que tomber sous le charme de cet irrésistible Nounours de Noël auquel on n\'a qu\'une envie : lui faire un calin !!<br><b>Garçon ou Fille peu importe, ce skin est fait pour toi !!</b>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '73;81;84;73;81;57;57;59;88;66',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 15,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            229 =>
                array (
                    'id' => 248,
                    'name' => 'Blabla Sapin',
                    'description' => 'ÉNORME !!! Déguise-toi en Blabla Sapin de Noël, ce skin est super chouette et se cache dans son déguisement de sapin en mode assis !! Un Must pour s\'éclater dans les délires des fêtes XD',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '33;81;88;83;73;77;57;59;88;66',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 15,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            230 =>
                array (
                    'id' => 249,
                    'name' => 'Ange de Noël',
                    'description' => 'Ce skin est une pure merveille, il plane dans les airs grâce à ses petites ailes... tout simplement magnifique, simple et tellement "Ange" !!<br>
<b>Plane dans les airs avec tes petites ailes</b>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '79;42;89;57;57;57;57;59;88;66',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 15,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            231 =>
                array (
                    'id' => 250,
                    'name' => 'Papi Champi',
                    'description' => '<strong style="color:#BC6BD6;">SKIN REBONDISSANT !!</strong><br>
Deviens un Papi Champi, ce skin est vraiment beau, travaillé, il est tout petit et réserve des tas de surprises ! Si quelqu\'un te saute dessus et que tu ne bouges pas, alors il va rebondir !! <em>Et... c\'est miam un champi, mais ça a besoin d\'eau pour pousser</em> :)<br>
<strong style="color:#BC6BD6;">Skin rebondissant. Et voici un petit jeu : Demande à un ami de te sauter dessus et qu\'il lâche son clavier : à toi maintenant de le récupérer au sol pour le faire rebondir autant de fois que possible sur ta tête !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '23;81;84;12;57;23;57;90;4;66',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 31,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            232 =>
                array (
                    'id' => 251,
                    'name' => 'Champi',
                    'description' => '<strong style="color:#BC6BD6;">SKIN REBONDISSANT !!</strong><br>
Deviens un Champi Blabla, ce skin est super classe et beau, il est tout petit et réserve des tas de surprises ! Si quelqu\'un te saute dessus et que tu ne bouges pas, alors il va rebondir !! <em>Et... c\'est miam un champi, mais ça a besoin d\'eau pour pousser</em> :)<br>
<strong style="color:#BC6BD6;">Skin rebondissant. Et voici un petit jeu : Demande à un ami de te sauter dessus et qu\'il lâche son clavier : à toi maintenant de le récupérer au sol pour le faire rebondir autant de fois que possible sur ta tête !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '73;11;57;12;57;88;57;90;4;66',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 31,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            233 =>
                array (
                    'id' => 252,
                    'name' => 'Champi Girly ',
                    'description' => '<strong style="color:#BC6BD6;">SKIN REBONDISSANT !!</strong><br>
Deviens une Girly Champi, elle est trop craquante, toute petite mais te réserve des tas de surprises !! Si quelqu\'un te saute dessus et que tu ne bouges pas, alors il va rebondir !! <em>Et... c\'est miam un champi, mais ça à besoin d\'eau pour pousser</em> :)<br>
<strong style="color:#BC6BD6;">Skin rebondissant. Et voici un petit jeu : Demande à un ami de te sauter dessus et qu\'il lâche son clavier : à toi maintenant de le récupérer au sol pour le faire rebondir autant de fois que possible sur ta tête !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '66;42;57;12;67;67;77;57;4;66',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 31,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            234 =>
                array (
                    'id' => 253,
                    'name' => 'Blabla Spies 1',
                    'description' => 'Ces skins issus d\'une grande série animée bien connue et vraiment excellente ne sont désormais plus disponibles à l\'achat ;)
<!--
<strong style="color:#BC6BD6;">Viens Tchatter avec les Totally Spies! sur Blablaland !!</strong><br>
Deviens Sam, super espionne du WHOOP et pars à l\'aventure sur le tchat !! Super équipée, tu peux téléporter tes amis à tes côtés, sortir ton JetPack intégré et t\'envoler dans les airs... Le Pouvoir des Totally Spies! est avec toi !! Tu peux même te transformer en version "simple", tenue de ville, quand tu n\'es pas en mission ultra secrète ^^<br>
<br><strong style="color:#BC6BD6;">Deviens Sam des Totally Spies!, trop trop fort !!</strong><br>
<em>TOTALLY SPIES! © 2010 MARATHON – MYSTERY ANIMATION INC.</em>
-->',
                    'price' => 3000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '74;33;89;34;45;57;2;73;65;57',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 30,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            235 =>
                array (
                    'id' => 254,
                    'name' => 'Blabla Spies 2',
                    'description' => 'Ces skins issus d\'une grande série animée bien connue et vraiment excellente ne sont désormais plus disponibles à l\'achat ;)
<!--
<strong style="color:#BC6BD6;">Viens Tchatter avec les Totally Spies! sur Blablaland !!</strong><br>
Deviens Clover, super espionne du WHOOP et pars à l\'aventure sur le tchat !! Super équipée, tu peux téléporter tes amis à tes côtés, sortir ton JetPack intégré et t\'envoler dans les airs... Le Pouvoir des Totally Spies! est avec toi !! Tu peux même te transformer en version "simple", tenue de ville, quand tu n\'es pas en mission ultra secrète ^^<br>
<br><strong style="color:#BC6BD6;">Deviens Sam des Totally Spies!, trop trop fort !!</strong><br>
<em>TOTALLY SPIES! © 2010 MARATHON – MYSTERY ANIMATION INC.</em>
-->',
                    'price' => 3000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;43;89;73;45;57;2;73;65;57',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 30,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            236 =>
                array (
                    'id' => 255,
                    'name' => 'Blabla Spies 3',
                    'description' => 'Ces skins issus d\'une grande série animée bien connue et vraiment excellente ne sont désormais plus disponibles à l\'achat ;)
<!--
<strong style="color:#BC6BD6;">Viens Tchatter avec les Totally Spies! sur Blablaland !!</strong><br>
Deviens Alex, super espionne du WHOOP et pars à l\'aventure sur le tchat !! Super équipée, tu peux téléporter tes amis à tes côtés, sortir ton JetPack intégré et t\'envoler dans les airs... Le Pouvoir des Totally Spies! est avec toi !! Tu peux même te transformer en version "simple", tenue de ville, quand tu n\'es pas en mission ultra secrète ^^<br>
<br><strong style="color:#BC6BD6;">Deviens Sam des Totally Spies!, trop trop fort !!</strong><br>
<em>TOTALLY SPIES! © 2010 MARATHON – MYSTERY ANIMATION INC.</em>
-->',
                    'price' => 3000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '2;81;88;77;45;57;2;73;65;57',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 30,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            237 =>
                array (
                    'id' => 259,
                    'name' => 'Blabla Spies 1  (simple)',
                    'description' => 'Ces skins issus d\'une grande série animée bien connue et vraiment excellente ne sont désormais plus disponibles ;)
<!--
<strong style="color:#BC6BD6;">VERSION SIMPLE non transformée et sans pouvoir - Viens Tchatter avec les Totally Spies! sur Blablaland !!</strong><br>
Deviens Sam, super espionne du WHOOP dans sa tenue simple de ville. Elle n\'a aucune pouvoir mais un charme Totally ravageur !!<br>
<br><strong style="color:#BC6BD6;"><a href="/site/totally_spies.php">Tu peux gagner GRATUITEMENT un des 3 skins Totally Spies! en tenue "simple" sur cette page, Clique ici !!</a><br><br>
Sinon, en prenant le skin Sam complet, tu auras plus de pouvoirs et la possibilité d\'être aussi en tenue simple, vachement plus avantageux !! !</strong><br>
<em>TOTALLY SPIES! © 2010 MARATHON – MYSTERY ANIMATION INC.</em>
-->',
                    'price' => 3000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '74;33;89;29;29;57;57;78;65;57',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 30,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            238 =>
                array (
                    'id' => 260,
                    'name' => 'Blabla Spies 2 (simple)',
                    'description' => 'Ces skins issus d\'une grande série animée bien connue et vraiment excellente ne sont désormais plus disponibles ;)
<!--
<strong style="color:#BC6BD6;">VERSION SIMPLE non transformée et sans pouvoir - Viens Tchatter avec les Totally Spies! sur Blablaland !!</strong><br>
Deviens Clover, super espionne du WHOOP dans sa tenue simple de ville. Elle n\'a aucune pouvoir mais un charme Totally ravageur !!<br>
<br><strong style="color:#BC6BD6;"><a href="/site/totally_spies.php">Tu peux gagner GRATUITEMENT un des 3 skins Totally Spies! en tenue "simple" sur cette page, Clique ici !!</a><br><br>
Sinon, en prenant le skin Sam complet, tu auras plus de pouvoirs et la possibilité d\'être aussi en tenue simple, vachement plus avantageux !! !</strong><br>
<em>TOTALLY SPIES! © 2010 MARATHON – MYSTERY ANIMATION INC.</em>
-->',
                    'price' => 3000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;43;89;48;48;63;63;57;65;57',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 30,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            239 =>
                array (
                    'id' => 261,
                    'name' => 'Blabla Spies 3 (simple)',
                    'description' => 'Ces skins issus d\'une grande série animée bien connue et vraiment excellente ne sont désormais plus disponibles ;)
<!--
<strong style="color:#BC6BD6;">VERSION SIMPLE non transformée et sans pouvoir - Viens Tchatter avec les Totally Spies! sur Blablaland !!</strong><br>
Deviens Alex, super espionne du WHOOP dans sa tenue simple de ville. Elle n\'a aucun pouvoir mais un charme Totally ravageur !!<br>
<br><strong style="color:#BC6BD6;"><a href="/site/totally_spies.php">Tu peux gagner GRATUITEMENT un des 3 skins Totally Spies! en tenue "simple" sur cette page, Clique ici !!</a><br><br>
Sinon, en prenant le skin Sam complet, tu auras plus de pouvoirs et la possibilité d\'être aussi en tenue simple, vachement plus avantageux !! !</strong><br>
<em>TOTALLY SPIES! © 2010 MARATHON – MYSTERY ANIMATION INC.</em>
-->',
                    'price' => 3000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '2;81;88;77;48;77;57;57;65;57',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 30,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            240 =>
                array (
                    'id' => 262,
                    'name' => 'Blabla Spies 4',
                    'description' => 'Ces skins issus d\'une grande série animée bien connue et vraiment excellente ne sont désormais plus disponibles à l\'achat ;)
<!--
<strong style="color:#BC6BD6;">Viens Tchatter avec les Totally Spies! sur Blablaland !!</strong><br>
Deviens Jerry, le grand Chef du WHOOP et des Totally Spies!<br>
Jerry peut se camoufler en statue de pierre ou en arbre afin de passer "incognito" pour les missions. Il est aussi capable de téléporter ses amis à ses côtés s\'il a besoin de soutien !!
<br><strong style="color:#BC6BD6;">Deviens Jerry des Totally Spies!, trop trop fort !!</strong><br>
<em>TOTALLY SPIES! © 2010 MARATHON – MYSTERY ANIMATION INC.</em>
-->',
                    'price' => 3000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '17;12;89;12;12;57;12;78;65;57',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 30,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            241 =>
                array (
                    'id' => 263,
                    'name' => 'Tigre Chinois',
                    'description' => '2010 est l\'année du Tigre !! Deviens un de ces magnifiques tigres, un des animaux les plus impressionnants du monde, malheureusement en voie de disparition... mais pas sur Blablaland XD !<br>
Vive 2010, vive l\'année du Tigre, à toi de jouer !',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '74;11;75;34;11;83;60;78;65;57',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            242 =>
                array (
                    'id' => 264,
                    'name' => 'CowBoy',
                    'description' => 'Attention les p\'tits indiens, le CowBoy v1 débarque sur les plaines de Blablaland !! Super stylé au design oldschool et ravageur typique de la v1, le CowBoy saura faire sa loi dans le monde des Blablas !',
                    'price' => 590,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '84;1;89;84;77;57;73;57;1;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            243 =>
                array (
                    'id' => 265,
                    'name' => 'Princesse',
                    'description' => 'Magnifique Princesse aux jolis traits caractéristiques de l\'époque de la v1. Symbole ornée de cœurs, avec cette merveilleuse princesse vous allez en conquérir justement des cœurs !!<br>
A vous de jouer les princes charmants !!',
                    'price' => 590,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '90;1;89;59;67;66;67;59;67;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            244 =>
                array (
                    'id' => 266,
                    'name' => 'Leprechaun Garçon',
                    'description' => 'Deviens un Leprechaun, ces êtres surchargés d\'énergie toujours prêts à faire la fête, à s\'amuser et à danser comme des fous !<br>
Ils sont aussi très proches de la nature... mais par dessus tout, ils sont très très chanceux !!
<strong style="color:#BC6BD6;">En Leprechaun, tu as beaucoup plus de chance de trouver des trèfles dans les plantes de Blablaland ;)</strong>',
                    'price' => 1100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '75;43;89;35;35;84;1;77;77;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 31,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            245 =>
                array (
                    'id' => 267,
                    'name' => 'Vieux Leprechaun',
                    'description' => 'Un Leprechaun, même vieux, est une grosse boule de vitamines, ils sont là en premier pour faire la fête et sont d\'excellents danseurs !! Ce skin a une danse à couper le souffle, une des plus belles de tout Blablaland !! Incarne le Vieux Leprechaun et met l\'ambiance partout où tu iras !!<br>
<strong style="color:#BC6BD6;">En Leprechaun, tu as beaucoup plus de chance de trouver des trèfles dans les plantes de Blablaland ;)<br>
Danse et met l\'ambiance de fête dans tout Blablaland !!</strong>',
                    'price' => 1100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '57;43;89;35;35;38;1;77;82;38',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 31,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            246 =>
                array (
                    'id' => 268,
                    'name' => 'Leprechaun Fille',
                    'description' => 'La fille Leprechaun est pleine de vie et d\'énergie ! Elle n\'attend qu\'une chose, c\'est faire la fête et danser, danser, danser, jeter son chapeau au sol puis le faire vriller dans les airs de façon magnifique !! Cette fille est une pure merveille qui mettra l\'ambiance partout autour d\'elle... et en tant que Leprechaun, elle est pleine de chance !!<br>
<br><strong style="color:#BC6BD6;">En Leprechaun, tu as beaucoup plus de chance de trouver des trèfles dans les plantes de Blablaland ;)<br>
Danse et met l\'ambiance de fête dans tout Blablaland !!</strong>',
                    'price' => 1100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '75;43;89;37;37;67;67;34;37;38',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 31,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            247 =>
                array (
                    'id' => 269,
                    'name' => 'Fleur du Printemps',
                    'description' => 'Deviens une magnifique Fleur pour ouvrir le Printemps sur Blablaland !! Tes pétales feront fureur sur le tchat et illumineront les cœurs !!<br>
<b>Vive le printemps :)</b>',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '57;81;77;77;37;67;67;34;37;38',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 31,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            248 =>
                array (
                    'id' => 270,
                    'name' => 'Poisson',
                    'description' => 'Poisson du célèbre évènement... POISSON D\'AVRIL !!',
                    'price' => 100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '75;11;1;1;1;1;1;1;1;1',
                    'unavailable' => 0,
                    'hidden' => 1,
                    'group_id' => NULL,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            249 =>
                array (
                    'id' => 271,
                    'name' => 'Lapin',
                    'description' => '<b>TROP MIGNON !!!</b><br>
Que dire d\'autre de ce magnifique Lapin... il est tout simplement hyper craquant, avec son petit noeud rouge dans le dos, ses mouvements tout mimi, sa super belle danse et il saute super haut !! En clair, il faut l\'avoir ^__^<br>
<strong style="color:#BC6BD6;">TROP MIGNON !! Le Lapin saute super haut dans les airs et il est hypra craquant !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '67;43;59;36;67;73;1;77;84;38',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 23,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            250 =>
                array (
                    'id' => 273,
                    'name' => 'Nucléaire A.01',
                    'description' => '<strong style="color:#FF3333;">ALERTE ROUGE !!
</strong><br />Ceci n\'est pas un exercice !! Enfile ta combinaison anti-nucléaire super épaisse et ultra résistante, elle te permet d\'ailleurs de résister aux nuages de Potions !! Attention par contre, évite de lâcher une caisse en combinaison intégrale, c\'est mortel ^^<br><br>
<img src="/images/shop/objects/113.jpg" align="left" style="margin:0 5px 5px 0;" width="35" height="35"><strong style="color:#BC6BD6;">OFFERT AVEC LE SKIN :</strong><b> Pour l\'achat de ce skin, on t\'offre le pouvoir du lance potions ainsi que 60 potions en tout genre !!</b><br>
Avec son look ravageur, c\'est l\'ultime skin pour partir à la guerre des potions !!
<br><br>
<strong style="color:#BC6BD6;">Enfile ta combinaison et pars à la guerre des Potions !! Incroyable, le lance potion est offert pour l\'achat de ce skin ainsi que 60 potions !!!!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '12;48;77;13;17;14;15;17;76;18',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 6,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            251 =>
                array (
                    'id' => 274,
                    'name' => 'Vache',
                    'description' => '<strong>MEEUUUUUUHHHH !!</strong><br>
Voilà un des skins à posséder ABSOLUMENT !! La vache est tout simplement trop trop énorme, oui oui, une boite à mmmeuuuh vivante qui va brouter toute l\'herbe du tchat, et faire résonner les sons de cloches de vaches partout dans les collines de Blablaland XD',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '18;60;59;18;66;66;2;77;84;38',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            252 =>
                array (
                    'id' => 275,
                    'name' => 'Canard',
                    'description' => '<strong>COIN COIN !!</strong><br>
Vous savez ce qui fait NIOC NIOC ?? .... ben un Canard qui marche à l\'envers (*rires*) !! Hahaha... deviens un canard sur Blablaland et fais des *CoinCoin* un peu partout !<br>
<strong style="color:#BC6BD6;">Le Canard nage plus vite dans l\'eau, normal non ?</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '75;42;79;75;67;67;1;77;84;38',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            253 =>
                array (
                    'id' => 276,
                    'name' => 'Être de Lumière I',
                    'description' => 'Depuis que les Portes Ancestrales de Blablaland ont été ressorties de terres, des êtres des temps anciens refont surface !! C\'est le cas des Êtres de Lumières, des skins au design redoutable, autrefois très connus pour leur efficacité en tant qu\'Allier dans les batailles grâce à leur pouvoir suprême qui permet aux autres Blablas de défier les lois de la Gravité !! Hallucinant !!<br>
<strong style="color:#BC6BD6;">Être de Lumière, grâce à leur pouvoir tu peux faire voler les autres Blablas !</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '43;47;43;74;66;66;2;77;84;38',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 1,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            254 =>
                array (
                    'id' => 277,
                    'name' => 'Être de Lumière II',
                    'description' => 'Depuis que les Portes Ancestrales de Blablaland ont été ressorties de terres, des êtres des temps anciens refont surface !! C\'est le cas des Êtres de Lumières, des skins au design redoutable, autrefois très connus pour leur efficacité en tant qu\'Allier dans les batailles grâce à leur pouvoir suprême qui permet aux autres Blablas de défier les lois de la Gravité !! Hallucinant !!<br>
<strong style="color:#BC6BD6;">Être de Lumière, grâce à leur pouvoir tu peux faire voler les autres Blablas !</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '43;47;43;74;66;66;2;77;84;38',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 1,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            255 =>
                array (
                    'id' => 278,
                    'name' => 'Boarder Sport',
                    'description' => 'Ce skin au design déchainé est livré avec une BBL Board Sport pour se livrer à des sessions de glisse ultime dans le jeu !! Maitrise la gravité et déchaine les passions sans limite !!
<br><br><strong style="color:#BC6BD6;">OFFERT AVEC CE SKIN: "OVERBOARD Sport" !</strong>
',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '11;11;89;57;57;73;77;73;57;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 9,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            256 =>
                array (
                    'id' => 279,
                    'name' => 'Boarder Shark !',
                    'description' => 'Attention : Sensations Extrêmes assurées !! Ce skin au design des plus ravageurs est livré avec la "BBL Board SHARK !" : Un max de puissance, plus aucune limite... Les sensations de vitesse et de puissance seront au rendez-vous mais... sauras-tu les maitriser ?!<br>
A posséder ABSOLUMENT !!!
<br><br><strong style="color:#BC6BD6;">OFFERT AVEC CE SKIN: "Overboard Shark" !</strong><br>
Un MUST HAVE à posséder d\'urgence !!
',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '57;11;35;57;57;73;35;73;73;11',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 9,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            257 =>
                array (
                    'id' => 280,
                    'name' => 'FURY-Solid Tech RED',
                    'description' => '<strong>Les skins BBL Tournament Fury !!</strong><br>
L\'ère des grandes guerres est de retour sur Blablaland, et les plus grands combattants reviennent !! Les FURY-Solid Tech étaient les alliés de combat des n100 et ils bénéficient des même boosts impressionnants ! Il sont rapides, super stylés, ils ont des réacteurs à fusion qui leur permet de planer et peuvent se téléporter sur les côtés grâce à leurs hyper boosts !!
<br><br><strong style="color:#BC6BD6;">Les FURY-Solid Tech sont des Hyper-Skins qui bénéficient des même pouvoirs ultimes que le n100. A posséder impérativement !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '73;73;4;4;1;73;1;73;73;11',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 22,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            258 =>
                array (
                    'id' => 281,
                    'name' => 'FURY-Solid Tech GREEN',
                    'description' => '<strong>Les skins BBL Tournament Fury !!</strong><br>
L\'ère des grandes guerres est de retour sur Blablaland, et les plus grands combattants reviennent !! Les FURY-Solid Tech étaient les alliés de combat des n100 et ils bénéficient des même boosts impressionnants ! Il sont rapides, super stylés, ils ont des réacteurs à fusion qui leur permet de planer et peuvent se téléporter sur les côtés grâce à leurs hyper boosts !!
<br><br><strong style="color:#BC6BD6;">Les FURY-Solid Tech sont des Hyper-Skins qui bénéficient des même pouvoirs ultimes que le n100. A posséder impérativement !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '35;35;4;4;1;35;4;35;35;35',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 22,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            259 =>
                array (
                    'id' => 282,
                    'name' => 'FURY-Solid Tech PINK',
                    'description' => '<strong>Les skins BBL Tournament Fury !!</strong><br>
L\'ère des grandes guerres est de retour sur Blablaland, et les plus grands combattants reviennent !! Les FURY-Solid Tech étaient les alliés de combat des n100 et ils bénéficient des même boosts impressionnants ! Il sont rapides, super stylés, ils ont des réacteurs à fusion qui leur permet de planer et peuvent se téléporter sur les côtés grâce à leurs hyper boosts !!
<br><br><strong style="color:#BC6BD6;">Les FURY-Solid Tech sont des Hyper-Skins qui bénéficient des même pouvoirs ultimes que le n100. A posséder impérativement !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;63;4;4;4;63;1;63;63;63',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 22,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            260 =>
                array (
                    'id' => 283,
                    'name' => 'Pot de Glace Collector !',
                    'description' => '<strong>Skin Carte Collector #02!!</strong><br>
Un skin Hyper MIAM MIAM et carrément Collector !! Rencontrez un créateur, et repartez avec le Pot de Glace XD !! Skin collector disponible uniquement en obtenant une carte cadeau collector #02 !!
<br><br><strong style="color:#BC6BD6;">Le Pot de Glace est un skin Collector qui ne peut s\'obtenir qu\'en ayant une Carte Cadeau #02</strong><br>
<br>
<a href="http://www.blablaland.com/site/blabillons.php?m=cadeau">Si tu as reçu une carte, clique ici pour entrer le code et avoir le skin</a><br><br>
La Carte Cadeau #02 n\'est plus disponible... elle est désormais considérée comme RARE !!<br><br>
Plus d\'information sur : <a href="http://www.niveau99-shop.com" target="_blank">NIVEAU99-SHOP</a>',
                    'price' => 3000,
                    'token' => 0,
                    'special' => 'CARD',
                    'promo' => 0,
                    'color' => '59;57;45;83;83;73;35;73;83;57',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 39,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            261 =>
                array (
                    'id' => 284,
                    'name' => 'Bâtonnet Kawai',
                    'description' => '<strong>Skin JAPAN EXPO 2010 !!</strong><br>
Le soleil tape fort, rien de plus rafraichissant qu\'un bon Bâtonnet de Glace tout Kawai !! Un skin super Miam qui donne envie de le croquer ^^',
                    'price' => 900,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '57;1;73;83;57;73;35;73;83;57',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 12,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            262 =>
                array (
                    'id' => 285,
                    'name' => 'Mini-Cornet',
                    'description' => '<strong>Skin JAPAN EXPO 2010 !!</strong><br>
Le soleil tape fort, rien de plus rafraichissant qu\'un bon Mini-Cornet de glace bien appétissant !! Un skin super Miam qui donne envie de le dévorer ^^',
                    'price' => 900,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '57;43;64;77;57;73;35;73;83;57',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 12,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            263 =>
                array (
                    'id' => 286,
                    'name' => 'Biscuit Glacé',
                    'description' => '<strong>Skin JAPAN EXPO 2010 !!</strong><br>
Le soleil tape fort, rien de plus rafraichissant qu\'un bon Biscuit Glacé, avec son chocolat et son bon biscuit !! Un skin super Miam qui donne envie de le croquer d\'une bouchée ^^',
                    'price' => 900,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '57;57;82;76;57;80;35;73;83;57',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 12,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            264 =>
                array (
                    'id' => 288,
                    'name' => 'Nucléaire B.02',
                    'description' => '<strong style="color:#FF3333;">ALERTE ROUGE !!
</strong><br />Ceci n\'est pas un excercice !! Enfile ta combinaison anti-nucléaire super épaisse et ultra résistante, elle te permet d\'ailleurs de résister aux nuages de Potions !! Attention par contre, évite de lâcher une caisse en combinaison intégrale, c\'est mortel ^^<br><br>
<img src="/images/shop/objects/113.jpg" align="left" style="margin:0 5px 5px 0;" width="35" height="35"><strong style="color:#BC6BD6;">OFFERT AVEC LE SKIN :</strong><b> Pour l\'achat de ce skin, on t\'offre le pouvoir du lance potions ainsi que 60 potions en tout genre !!</b><br>
Avec son look ravageur, c\'est l\'ultime skin pour partir à la guerre des potions !!
<br><br>
<strong style="color:#BC6BD6;">Enfile ta combinaison et pars à la guerre des Potions !! Incroyable, le lance potion est offert pour l\'achat de ce skin ainsi que 60 potions !!!!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '73;1;77;73;57;57;1;73;1;1',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 6,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            265 =>
                array (
                    'id' => 289,
                    'name' => 'Princesse au Dragon',
                    'description' => 'Deviens une vraie Princesse de contes de fée, à la recherche du véritable amour... Où se cache-t-il ?! Si tu le trouves, offre lui un doux baisé et gagne son coeur !!
<br><br>
<strong style="color:#BC6BD6;">La Princesse peut faire des bisous, et si elle embrasse un Prince Crapaud, elle lui retire sa malédiction durant quelques instants magiques !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;43;89;83;65;67;47;65;57;65',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 35,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            266 =>
                array (
                    'id' => 291,
                    'name' => 'Chevalier',
                    'description' => 'Deviens un grand Chevalier, fièrement armé de la légendaire épée du Dragon grâce à laquelle tu peux terrasser les pires adversaires !!<br>
L\'heure est à l\'affrontement, et les Chevaliers sont les plus redoutables combattants ^^<br><br>
<strong style="color:#BC6BD6;">Frappe tes adversaires et repousse les avec ton épée légendaire du Dragon.<br>
ASTUCE : Deviens encore plus fort avec le Blibli Dragonnet et la monture Cheval !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '73;1;17;3;57;76;73;76;57;65',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 35,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            267 =>
                array (
                    'id' => 292,
                    'name' => 'Prince Crapaud',
                    'description' => 'Derrière ce délirant Crapaud se cache en réalité un Prince Charmant, prisonnier d\'une horrible malédiction qui lui donne cette apparence de Prince Crapaud !!<br>
Trouve l\'amour de ta vie, et de ce premier baisé, ta véritable identité tu retrouveras pendant quelques instants...
<br /><br />
<strong style="color:#BC6BD6;">Le Prince Crapaud nage vite, et saute haut en plus d\'être super délirant ! Tu peux rompre la malédiction quelques instant grâce au baiser d\'une princesse ou d\'un Blibli fée !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;1;34;3;57;57;77;57;57;65',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 35,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            268 =>
                array (
                    'id' => 293,
                    'name' => 'Prince',
                    'description' => 'Le Prince, à la recherche d\'une princesse !! Si tu ne souhaites pas être un Prince enchanté par le maléfice du Crapaud (mais y gagner une couronne) !!<br>
Pars à la recherche d\'aventures, de Dragons... espérons qu\'au bout de tes périples se trouvera la Princesse de tes rêves !',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '3;41;89;3;77;75;75;77;57;65',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 35,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            269 =>
                array (
                    'id' => 295,
                    'name' => 'Lolita Girl 1',
                    'description' => 'Kawaii :love: !! Trop mignonne Lolita avec ses petits poupons dans les cheveux et sa belle robe en dentelle !! Deviens une vraie poupée au look trop adorable et mimi !!<br>
Un skin d\'une magnifique beauté toute Kawaii ^^
<strong style="color:#BC6BD6;">Lolita Kawaii :)</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;43;89;73;73;59;59;59;73;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 4,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            270 =>
                array (
                    'id' => 296,
                    'name' => 'Lolita Girl 2',
                    'description' => 'Kawaii :love: !! Trop mignonne Lolita avec son petit chapeau dans les cheveux, sa belle robe et ses petites chaussures de rêve !! Deviens une vraie poupée au look trop adorable et mimi !!<br>
Un skin d\'une magnifique beauté toute Kawaii ^^
<strong style="color:#BC6BD6;">Lolita Kawaii :)</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '81;44;89;67;48;59;67;59;48;67',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 4,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            271 =>
                array (
                    'id' => 297,
                    'name' => 'Style Boy',
                    'description' => 'Pur Style !! Un design à la fois rétro et en même temps hyper stylé, inspiré des tenues Fashion mais aussi Kawaii, un pur mélange de styles qui donne un skin au look ravageur !!
<strong style="color:#BC6BD6;">Pur mélange de style pour un look unique !</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '83;81;89;1;1;27;78;1;27;47',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 4,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            272 =>
                array (
                    'id' => 298,
                    'name' => 'Rétro Style Boy',
                    'description' => 'Pur Style Rétro !! Un look super rétro qui sait traverser les époques avec classe et raffinement ! Une pure merveille qui se passe aisément de commentaires tellement le look fait tout !!<br>
<strong style="color:#BC6BD6;">Rétro... hyper Classe !</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '70;81;89;81;84;69;1;70;84;1',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 4,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            273 =>
                array (
                    'id' => 299,
                    'name' => 'Vache Kiwi',
                    'description' => '"Qu\'est ce qui est vert, et qui fait Meuuuh ??"... Une Vache Kiwi !! <br>
<a href="/site/bd_blabla.php" target="_blank">Retrouvez la BD qui présente la Vache Kiwi !!</a><br>
Le skin ultime et décalé d\'un croisement inattendu entre une vache, et un kiwi ^___^<br>
<strong style="color:#BC6BD6;">Comme cette vache est croisée avec un Kiwi, les jardiniers peuvent l\'arroser pour la faire grandir !!</strong>',
                    'price' => 600,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '18;81;24;65;18;13;59;45;20;45',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 12,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            274 =>
                array (
                    'id' => 301,
                    'name' => 'Monster 1',
                    'description' => 'Deviens un délirant monstre pour un Halloween de Folie sur Blablaland !! Un excellent skin pour délirer toute la nuit ^^<br>
<strong style="color:#BC6BD6;">Halloween Powa !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '27;59;73;71;1;59;77;11;71;76',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            275 =>
                array (
                    'id' => 302,
                    'name' => 'Monster 2',
                    'description' => 'Deviens un super monstre de l\'espace pour un Halloween de Folie sur Blablaland !! Un excellent skin pour délirer toute la nuit ^^<br>
<strong style="color:#BC6BD6;">Halloween Powa !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '27;59;73;71;1;59;77;11;71;76',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            276 =>
                array (
                    'id' => 303,
                    'name' => 'Cavalier sans tête',
                    'description' => 'Deviens le "Roi des Citrouilles", le "Jack aux Lanternes" de Blablaland !! Deviens le grand Cavalier sans tête et impose le respect dans la noirceur d\'Halloween ! Propulse  ta tête qui, en explosant au sol, repeindra tous les blablas aux alentours et promène-toi, sans tête sur le tchat !!<br>
Un skin au design sombre et charismatique, c\'est LE Roi d\'Halloween, à posséder d\'urgence !!<br><br>
<strong style="color:#BC6BD6;">Le Cavalier sans tête peut projeter sa citrouille et la faire exploser pour repeindre les Blablas ! C\'est le Roi d\'Halloween !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '21;81;75;81;81;13;77;18;20;45',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            277 =>
                array (
                    'id' => 305,
                    'name' => 'Bébé Tigre',
                    'description' => 'Deviens un bébé Tigre, tout petit et trop mignon, on dirait une peluche qu\'on a envie de câliner ! Parce qu\'il faut protéger les tigres afin qu\'il ne disparaissent pas de notre planète !!
<br>
<br>
<a href="http://3200tigres.wwf.fr" target="_blank"><b>Engage tes parents pour qu\'ils signent la pétition du WWF pour protéger les Tigres.<br>
Clique ici : http://3200tigres.wwf.fr</b></a>
<br>
<br>
<strong style="color:#BC6BD6;">Jusqu\'au 25 Novembre 2010 inclus, ce skin est offert pour l’achat d\'un tigre chinois... doublons la population des tigres ^^</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '83;1;75;2;20;13;77;18;20;45',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            278 =>
                array (
                    'id' => 309,
                    'name' => 'Pilote Solid-Tech',
                    'description' => '<b>Deviens un pilote SolidTech !!</b><br>
Le pilote du puissant robot BBL-Solid-Tech, merveille de technologie des anciens temps de guerre que l\'on peut voir à la map "Robot immergé", furent considérés comme de véritables héros de l\'antiquité.<br>
Il paraîtrait qu\'il possède le pouvoir de réveiller ce puissant robot enfoui au fond des eaux ? Le mystère reste total...<br>
<br>
<strong style="color:#BC6BD6;">Seras-tu digne d\'être un Solid-Tech ?!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '53;73;58;73;73;73;58;53;77;38',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 22,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            279 =>
                array (
                    'id' => 310,
                    'name' => 'Blablarchers Fille',
                    'description' => 'Deviens une Archère mystérieuse aux pouvoirs redoutables et inédits. C\'est toi la nouvelle "<em>Robin des Bois</em>" de Blablaland !!<br>
Sors ton arc et tire des flèches, tu peux aussi poser des cibles au sol pour combattre avec d\'autres Blablachers !! Et lorsqu\'un de tes puissants tirstouche un blabla, il se transforme en une belle petite pomme et cours plus vite !!<br>
<br>
<strong style="color:#BC6BD6;">Avec un look hypra stylé et mystérieux, des animations à couper le souffle, ce skin est tout simplement une merveille !!<br><br>
Rejoins le clan des Archers !</strong>',
                    'price' => 1800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '73;46;89;23;81;76;46;33;73;88',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            280 =>
                array (
                    'id' => 311,
                    'name' => 'Blablarchers Garçon',
                    'description' => 'Deviens un Archer mystérieux aux pouvoirs redoutables et inédits. C\'est toi le nouveau "<em>Robin des Bois</em>" de Blablaland !!<br>
Sors ton arc et tire des flèches, tu peux aussi poser des cibles au sol pour combattre avec d\'autres Blablachers !! Et lorsque qu\'un de tes puissants tirs touche un blabla, il se transforme en une belle petite pomme et cours plus vite !!<br>
<br>
<strong style="color:#BC6BD6;">Avec un look hypra stylé et mystérieux, des animations à couper le souffle, ce skin est tout simplement une merveille !!<br><br>
Rejoins le clan des Archers !</strong>',
                    'price' => 1800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '84;46;89;23;81;70;28;59;73;88',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            281 =>
                array (
                    'id' => 314,
                    'name' => 'P\'tit Robot',
                    'description' => 'Souvenez-vous ! Le robot spécial v1 le plus mignon de tout Blablaland que vous attendiez tous est enfin disponible !! Youhouuu, à toi le plus Kawaii des Robots ^^',
                    'price' => 590,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '17;46;17;17;81;76;46;33;73;88',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            282 =>
                array (
                    'id' => 315,
                    'name' => 'Mineur',
                    'description' => 'Le skin Mineur vous sera d\'une aide très précieuse pour explorer les profondeurs terrestres du monde de Blablaland. Son look purement v1 fera le bonheur des plus nostalgiques !!',
                    'price' => 590,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;46;89;77;57;76;46;33;73;88',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            283 =>
                array (
                    'id' => 316,
                    'name' => 'Touriste de Noël',
                    'description' => 'Un des premiers skins de Blablaland. Ce skin de noël provient de la toute première planche de dessin de Blablaland, réalisée par Yovasystem en 2005, que vous pouvez admirer pour le plaisir des yeux dans le musée !!<br>
<b>Joyeux Noël spécial V1 !!</b>',
                    'price' => 590,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '73;59;89;73;59;76;46;33;73;88',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            284 =>
                array (
                    'id' => 317,
                    'name' => 'Bicolor Girl',
                    'description' => 'Un authentique skin issu des profondeurs des dossiers de la v1 de Blablaland. Ce skin datant de plus de 5 ans est resté secret jusqu\'à maintenant.',
                    'price' => 590,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;1;66;73;86;76;46;33;73;88',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 17,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            285 =>
                array (
                    'id' => 328,
                    'name' => 'THE Pingouin !!',
                    'description' => '<img src="/images/blablaland/skin_mythique.png" /> <strong style="color:#F11;">JOYEUX NOËL !!</strong>
<br /><br />
Qui dit Fête Mythique dit Skin Mythique !! L\'ultime Pingouin de Blablaland fait surface en cette période glaciale qu\'il adore tant. Capable de se mettre en mode glissade en appuyant simplement sur la flèche du bas (et pareil pour le désactiver), il file à vitesse grand V en glissant à plat ventre !!
<br /><br />
Mais le Pingouin ne se laisse pas adopter comme ça... Heureusement il est très gourmand, et le seul moyen de l\'avoir est d\'acheter une Glace Pingouin auprès des stands de l\'Hiver en jeu... et là il craque, c\'est obligé... et vous voilà en Pingouin !!
<br />
<br />
<a href="/site/shop_objet.php?giveme=214" class="fofo_link3_extern"><img src="/images/shop/objects/214.jpg" width="30" border="0"> Clique ici pour découvrir la Glace Pingouin !!</a>
<br><br>
<strong style="color:#F11;">Important : Les Glaces Pingouin ne sont en vente que pendant la Fête de l\'Hiver... Après quoi il ne sera plus possible de s\'en procurer !!</strong>
<br />
<br />
<strong style="color:#BC6BD6;">Le Mythique Pingouin de Blablaland... must have !!</strong>',
                    'price' => 2000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '59;4;5;76;76;1;1;1;1;1',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'group_id' => 15,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            286 =>
                array (
                    'id' => 331,
                    'name' => 'Blagicienne Noël',
                    'description' => 'Le Remix Noël de la Blagicienne, avec des pouvoirs encore plus extraordinaires, encore plus magiques !! Donne un coup de baguette et transforme toi et ta cible en confiserie de Noël, Excellent !!!<br>
Mais ce n\'est pas tout, un mystère plane sur l\'origine de ta baguette magique, qui d\'après les légendes, serait faite avec des morçeaux du N200... !! A toi de découvrir de quoi est capable la magie de Noël ^^
<br><br><strong style="color:#BC6BD6;">Transforme toi et ta cible en confiserie de Noël, et découvre les mystères du N200... mais attention, la magie peut être capricieuse, et avoir des effets...petits et marrons :P</strong>',
                    'price' => 1800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;43;89;73;57;57;73;57;73;57',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 15,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            287 =>
                array (
                    'id' => 332,
                    'name' => 'N200 Noel',
                    'description' => 'N200 NOEL !!!',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '1;1;1;1;1;1;1;1;1;1',
                    'unavailable' => 0,
                    'hidden' => 1,
                    'group_id' => 22,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            288 =>
                array (
                    'id' => 338,
                    'name' => 'Soldat en Bois Casse-Noisette',
                    'description' => 'Garde à Vous !! Pour les Fêtes de Noël, deviens un magnifique jouet "Soldat en Bois" sculpté par Yovasystem en personne !! Trop la Classe avec ton look super stylé et ton arme à la main !!
<br><br>
<strong style="color:#BC6BD6;">Joyeux Noël Soldat !!</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '1;1;88;1;73;76;73;76;1;76',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 15,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            289 =>
                array (
                    'id' => 339,
                    'name' => 'Bonhomme en Bois Casse-Noisette',
                    'description' => 'Pour les Fêtes de Noël, deviens un magnifique Bonhomme en Bois sculpté par Yovasystem en personne !! Trop la Classe !!
<br><br>
<strong style="color:#BC6BD6;">Joyeux Noël !!</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '73;1;88;1;75;66;73;75;1;75',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 15,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            290 =>
                array (
                    'id' => 340,
                    'name' => 'Fille en Bois Casse-Noisette',
                    'description' => 'Pour les Fêtes de Noël, deviens une merveilleuse Danseuse en Bois sculptée par Yovasystem en personne !! Trop mimi avec son tutu en feuille de chène !!
<br><br>
<strong style="color:#BC6BD6;">Joyeux Noël dansant !!</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '81;43;88;66;66;66;73;76;1;76',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 15,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            291 =>
                array (
                    'id' => 342,
                    'name' => 'Esquimau Garçon',
                    'description' => 'Deviens un Esquimau prêt à affronter les plus grandes vagues de froid sur Blablaland, et détiens son remarquable talent pour créer de magnifiques bonhommes de neige sur le tchat. Une fois construit, tout le monde pourra venir piocher des boules de neige pour des batailles de folie, tout ça grâce à toi !! Hahaha, trop excellent !!<br><br>
<strong style="color:#BC6BD6;">Hallucinant !! Crée des bonhommes de neige seul ou avec tes amis esquimaux sur le tchat !! Vous pourrez ensuite faire des batailles de boules de neige avant qu\'ils ne fondent.</strong>
<br><em>Une fois sur le tchat avec le skin, clique sur le pouvoir plein de fois pour voir le bonhomme se construire lentement, si plusieurs esquimaux le font ensemble, ça ira plus vite ;)</em>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '13;81;89;82;17;90;90;82;90;76',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 37,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            292 =>
                array (
                    'id' => 343,
                    'name' => 'Esquimau Fille',
                    'description' => 'Deviens un Esquimau prêt à affronter les plus grandes vagues de froid sur Blablaland, et détient son remarquable talent pour créer de magnifiques bonhommes de neige sur le tchat. Une fois construit, tout le monde pourra venir piocher des boules de neige pour des batailles de folie, tout ça grâce à toi !! Hahaha, trop excellent !!<br><br>
<strong style="color:#BC6BD6;">Hallucinant !! Crée des bonhommes de neige seul ou avec tes amis esquimaux sur le tchat !! Vous pourrez ensuite faire des batailles de boules de neige avant qu\'ils ne fondent.</strong>
<br><em>Une fois sur le tchat avec le skin, clique sur le pouvoir plein de fois pour voir le bonhomme se construire lentement, si plusieurs esquimaux le fond ensemble, ça ira plus vite ;)</em>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '2;2;89;80;54;59;59;80;54;54',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 37,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            293 =>
                array (
                    'id' => 344,
                    'name' => 'Esquimau Mystérieux',
                    'description' => 'Deviens un Esquimau prêt à affronter les plus grandes vagues de froid sur Blablaland, et détient son remarquable talent pour créer de magnifiques bonhommes de neige sur le tchat. Une fois construit, tout le monde pourra venir piocher des boules de neige pour des batailles de folie, tout ça grâce à toi !! Hahaha, trop excellent !!<br><br>
<strong style="color:#BC6BD6;">Hallucinant !! Crée des bonhommes de neige seul ou avec tes amis esquimaux sur le tchat !! Vous pourrez ensuite faire des batailles de boules de neige avant qu\'ils ne fondent.</strong>
<br><em>Une fois sur le tchat avec le skin, clique sur le pouvoir plein de fois pour voir le bonhomme se construire lentement, si plusieurs esquimaux le fond ensemble, ça ira plus vite ;)</em>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '84;43;88;82;59;90;90;82;73;76',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 37,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            294 =>
                array (
                    'id' => 348,
                    'name' => 'Lapin Kawaii',
                    'description' => 'Deviens un super Lapin tout mignon qui fait la danse de la téléportation !! Il saute super haut et te permettra d\'atteindre des plateformes inaccessibles pour un blabla normal ;)<br>
<br>
<strong style="color:#BC6BD6;">Le Lapin Kawaii saute super haut et fait la danse de la téléportation !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '66;42;77;83;83;57;66;66;54;1',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 36,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            295 =>
                array (
                    'id' => 349,
                    'name' => 'Fille Kawaii',
                    'description' => 'Trop mignonne fille super Kawaii avec son joli bonnet de p\'tit ours sur la tête !! Un magnifique skin tout mimi et plein de charme !!<br>
<br>
<strong style="color:#BC6BD6;">Elle se cache dans son bonnet sur son action de danse !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '66;52;89;83;83;57;66;66;54;1',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 36,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            296 =>
                array (
                    'id' => 350,
                    'name' => 'Bébé Kawaii',
                    'description' => 'Trop mignon petit bébé ultra Kawaii !! Il se cache dans son p\'tit bonnet quand il danse, trop choupi !!<br>
<br>
<strong style="color:#BC6BD6;">Un Bébé Kawaii avec son joli p\'tit bonnet !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '57;43;89;57;57;77;65;1;54;1',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 36,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            297 =>
                array (
                    'id' => 353,
                    'name' => 'Chinois 2011',
                    'description' => 'La puissance et l\'âme du dragon sont imprégnés au plus profond de ce magnifique skin Chinois aux lignes pures et au design remarquable !!!!<br>
<strong style="color:#BC6BD6;">La marque du Dragon surgit lorsqu\'il danse !</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '1;1;89;59;1;3;71;76;76;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 18,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            298 =>
                array (
                    'id' => 354,
                    'name' => 'Chinoise 2011',
                    'description' => 'La beauté et le coeur du dragon sont imprégnés au plus profond de cette magnifique Chinoise pleine d\'élégance et au design remarquable !!<br>
<strong style="color:#BC6BD6;">La marque du Dragon surgit lorsqu\'elle danse !</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '1;1;68;58;65;73;58;65;58;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 18,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            299 =>
                array (
                    'id' => 360,
                    'name' => 'Pirate Mousse Fille',
                    'description' => '<b>A l\'abordage moussaillon !!</b> Rejoins l\'ordre des Pirates et traverse le monde de Blablaland en quête d\'aventures !! Armée de ton sabre tu ne crains personne et tu fais régner la voix des Pirates !!<br>
En tant que Mousse, tu es aux ordres des Pirates et du Capitaine !! A toi la Piraterie !!<br>
(Et avec une Bouée Pirate, c\'est excellent !!)<br><br>
<strong style="color:#BC6BD6;">A l\'abordaaaage !!! Entre dans la Piraterie armée de ton sabre et cherche l\'aventure !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '74;35;89;17;58;10;2;58;84;68',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            300 =>
                array (
                    'id' => 361,
                    'name' => 'Pirate Mousse Garçon',
                    'description' => '<b>A l\'abordage moussaillon !!</b> Rejoins l\'ordre des Pirates et traverse le monde de Blablaland en quête d\'aventures !! Armé de ton pistolet tu ne crains personne et tu fais régner la voix des Pirates !!<br>
En tant que Mousse, tu es aux ordres des Pirates et du Capitaine !! A toi la Piraterie !!<br>
(Et avec une Bouée Pirate, c\'est excellent !!)<br><br>
<strong style="color:#BC6BD6;">A l\'abordaaaage !!! Entre dans la Piraterie armé de ton pistolet et cherche l\'aventure !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '14;82;89;17;58;2;84;15;83;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            301 =>
                array (
                    'id' => 362,
                    'name' => 'Pirate Fille',
                    'description' => '<b>A l\'abordage !!</b> Rejoins l\'ordre des Pirates et traverse le monde de Blablaland en quête d\'aventures !! Armée de ton pistolet tu ne crains personne et tu es la fierté du monde des Pirates !! Expérimentée et motivée, tu fais partie des plus grands Pirates et tu es aux ordres du Capitaine !!<br>
(Et avec une Bouée Pirate, c\'est excellent !!)<br><br>
<strong style="color:#BC6BD6;">A l\'abordaaaage !!! Montre aux Blablas ce que c\'est qu\'être un vrai Pirate avec ton pistolet !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;46;89;2;2;66;18;84;59;66',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            302 =>
                array (
                    'id' => 363,
                    'name' => 'Pirate Garçon',
                    'description' => '<b>A l\'abordage !!</b> Rejoins l\'ordre des Pirates et traverse le monde de Blablaland en quête d\'aventures !! Armé de ton sabre tu ne crains personne et tu es la fierté du monde des Pirates !! Expérimenté et motivé, tu fais partie des plus grands Pirates et tu es aux ordres du Capitaine !!<br>
(Et avec une Bouée Pirate, c\'est excellent !!)<br><br>
<strong style="color:#BC6BD6;">A l\'abordaaaage !!! Montre aux Blablas ce que c\'est qu\'être un vrai Pirate avec ton sabre !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '82;82;89;84;81;73;14;76;81;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            303 =>
                array (
                    'id' => 364,
                    'name' => 'Capitaine Pirate',
                    'description' => '<b>Deviens le Capitaine des Pirates !!</b><br>
Monte ton équipage et pars à l\'aventure dans Blablaland !! La Piraterie est dans ton sang. Équipé d\'un sabre tranchant et d\'un pistolet, les gens te craignent et t\'admirent !! Un skin plus que parfait, à posséder impérativement !!<br>
(Et avec un Blibli Perroquet, c\'est excellent !!)<br><br>
<strong style="color:#BC6BD6;">Capitaine, tu marques le retour des Pirates sur Blablaland, et tu es armé jusqu\'aux dents !! A l\'Abordage !!</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '14;82;89;82;84;2;72;79;1;68',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            304 =>
                array (
                    'id' => 365,
                    'name' => 'Faune',
                    'description' => 'Deviens un Faune, toujours de bonne humeur et plein de joie !! Le Faune est un esprit de la Forêt qui danse et fait de la musique avec sa flûte taillée dans le bois de l\'arbre ancestral !!<br>
Un skin plein de joie, à posséder impérativement !!<br><br>
<strong style="color:#BC6BD6;">Lorsqu\'il danse, le Faune joue un petit morçeau de Flûte enchantée !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '84;31;88;84;14;90;84;84;81;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 31,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            305 =>
                array (
                    'id' => 366,
                    'name' => 'Nymphe',
                    'description' => 'Incarne une magnifique Nymphe, esprit de la Nature !! Son corps ne fait qu\'un avec la nature et sa chevelure est faite de Fleurs !! Un skin tout en beauté et finesse pour les amoureux des esprits de la nature !!<br>
<strong style="color:#BC6BD6;">Deviens une Nymphe esprit de la Nature et charme tous les Blablas !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '27;49;29;67;78;78;62;58;81;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 31,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            306 =>
                array (
                    'id' => 367,
                    'name' => 'Fée des Bois',
                    'description' => 'Deviens une magnifique Fée des Bois aux pouvoirs incroyables !! Sème de la mystèrieuse poudre de Fée pour créer un puit de lumière et faire planer les Blablas !! En plus d\'être très belle, elle plane et flotte dans les airs grâce à ses jolies petites ailes !!<br>
Un skin tout en beauté et plein de magie, pour maîtriser l\'art de dame Nature !!!<br><br>
<strong style="color:#BC6BD6;">La Fée flotte dans les airs et peut semer de la poudre de Fée magique qui créera un Puits de Lumière !! Magnifique !!</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '75;38;89;27;23;84;84;47;67;78',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 31,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            307 =>
                array (
                    'id' => 369,
                    'name' => 'Dryade',
                    'description' => 'Deviens une resplendissante Dryade pleine de bonne humeur et amoureuse des fleurs !! Avec ses magnifiques Bois fleuris et sa Danse de la nature pour invoquer un tapis de Fleurs à ses pieds, elle saura charmer tous les Blablas de son entourage !!
<br><br>
<strong style="color:#BC6BD6;">Deviens une resplendissante Dryade et danse pour invoquer un tapis de Fleur !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '24;81;89;84;23;84;27;67;67;78',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 31,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            308 =>
                array (
                    'id' => 370,
                    'name' => 'Lapin d\'Or',
                    'description' => '<b>WHOUAAAAA !!</b><br>
Magnifique variante en OR du skin Lapin !! Un best de Blablaland en version spéciale Pâques tout en Or !! Voici une sublime variante à posséder impérativement !!<br><br>
<i>Note : Les variantes ont les même actions, donc il saute aussi super haut, a les même jolies danses etc !!</i><br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Lapin" !! Trop cool !!</b>',
                    'price' => 340,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '14;82;89;82;84;2;72;79;1;68',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 23,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            309 =>
                array (
                    'id' => 371,
                    'name' => 'La Poule d\'Or',
                    'description' => '<b>UNE MERVEILLE !!</b><br>
Magnifique variante en OR du skin de la Poule !! Un best de Blablaland en version spéciale Pâques tout en Or !! Voici une sublime variante à posséder impérativement !!<br><br>
<i>Note : Les variantes ont les même actions, donc elle pond aussi des oeufs etc..., trop la classe, en Or !!!</i><br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "La Poule" !! Trop cool !!</b>',
                    'price' => 340,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '14;82;89;82;84;2;72;79;1;68',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 23,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            310 =>
                array (
                    'id' => 374,
                    'name' => 'Japan Boy',
                    'description' => '<b>Japan Powa !!</b><br>
Incarne ce magnifique skin japonais et maîtrise les arts martiaux !! Un design très clean pour un skin vraiment classe et plein de Puissance, très charismatique et surtout hyper Japonisant !!<br><br>
<strong style="color:#BC6BD6;">Japan Powa !! Et trop la classe avec le blibli Nikuman Hoïru ^^</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '2;1;88;1;73;57;2;57;1;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 18,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            311 =>
                array (
                    'id' => 375,
                    'name' => 'Japan Girl',
                    'description' => '<b>Japan Powa !!</b><br>
Incarne ce magnifique skin de japonaise et maîtrise les arts martiaux !! Un design très clean pour un skin vraiment classe et plein de Puissance, très charismatique et surtout hyper Japonisant !!<br><br>
<strong style="color:#BC6BD6;">Japan Powa !! Et trop la classe avec le blibli Nikuman Hoïru ^^</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '2;11;88;73;73;57;73;57;57;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 18,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            312 =>
                array (
                    'id' => 376,
                    'name' => 'Lapin Plage',
                    'description' => '<strong style="color:#FF00FF;">LAPIN PLAGE COLLECTOR !!</strong><br>
Un lapin extraordinaire sur Blablaland !! D\'incroyables détails et un travail remarquable en font un skin ultra complet avec plein d\'actions supplémentaires :<br />
- Plongeur, une fois dans l\'eau, le lapin enfile son masque et son tuba !<br />
- Amphibie, il peut sortir sa propre bouée tout en buvant un cocktail les pieds dans l\'eau, <br />
- Gourmand, il mange une délicieuse glace,<br />
- Bâtisseur, il peut créer des châteaux de sable qui lui servent de munitions pour des batailles de boules de sable affolantes entre potes !<br />
- Sans oublier sa danse ultime, allongé sur un transat à siroter un cocktail !!<br /><br />
Indispensable pour frimer un maximum !<br />
<br />
<strong style="color:#FF00FF;">CADEAU : </strong>Ce n\'est pas tout, avec ce skin sont offerts ses 2 Bliblis Collector :<br />
<img src="/images/shop/objects/201.jpg" width="30" /> <img src="/images/shop/objects/200.jpg" width="30" />
<br><br>
<strong style="color:#BC6BD6;">Un skin incroyablement complet, tout simplement indispensable !!</strong>
<br /><br />
<a href="http://www.niveau99-shop.com" target="_blank" class="fofo_link_extern">Découvre le Porte-Clés du Lapin Plage sur notre Boutique Niveau99-Shop :)</a>',
                    'price' => 1800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '2;41;77;73;45;35;65;58;73;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 3,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            313 =>
                array (
                    'id' => 377,
                    'name' => 'Princesse',
                    'description' => '<strong style="color:#FF00FF;">Deviens une Princesse</strong><br>
La Princesse arrive sur Blablaland !! Avec sa baguette magique, elle a le pouvoir de créer une bulle pour s\'élancer dans les airs, et peut dessiner un coeur lorsqu\'elle danse.<br />
Remarquablement détaillée avec une finesse digne d\'une Princesse, elle envoûtera par sa beauté et son charisme.
<br />
<br />
<strong style="color:#FF00FF;">CADEAU : </strong>Magique, avec ce skin est offert le Blibli Papillon :<br />
<img src="/images/shop/objects/206.jpg" width="30" />
<br><br>
<strong style="color:#BC6BD6;">La magie peut enfin s\'exprimer au travers de cette magnifique Princesse.</strong>
<br /><br />
<a href="http://www.niveau99-shop.com" target="_blank" class="fofo_link_extern">Découvre le Porte-Clés de la Princesse sur notre Boutique Niveau99-Shop :)</a>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;42;89;58;67;73;47;65;73;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 35,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            314 =>
                array (
                    'id' => 378,
                    'name' => 'Guerrier Secret',
                    'description' => '<img src="/images/blablaland/skin_mythique.png" /><br /><br />
<em>Dans des temps très reculés, des guerriers d\'une puissance redoutable pénétrèrent dans L\'Antre de Feu afin d\'y défier des créatures légendaires...</em><br /><br />
Incarnez enfin l\'un de ces mythiques guerriers, armé d\'une puissante hache flamboyante, ce skin possède 2 actions guerrières : <br />
- Coup de Hache : Emflamme ta hache et inflige un redoutable coup brûlant et percutant !<br />
- Uppercut : Un puissant coup de hache par le bas qui propulse tes ennemis dans les airs !
<br />
<br />
Un skin tout en puissance, un design précieux, il n\'en fallait pas moins pour un mythique Guerrier Secret !
<br />
<br />
<strong style="color:#FF00FF;">CADEAU : </strong>Un Blibli compagnon collector offert pour l\'achat du Guerrier.<br />
<img src="/images/shop/objects/211.jpg" width="30" />
<br><br>
<strong style="color:#BC6BD6;">La puissance et la brutalité d\'une hache à deux mains... Incarnez un Mythique Guerrier Secret !!</strong>
<br /><br />
<a href="http://www.niveau99-shop.com" target="_blank" class="fofo_link_extern">Découvre le Porte-Clés du Guerrier Secret sur notre Boutique Niveau99-Shop :)</a>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '84;81;88;72;17;76;17;72;84;45',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            315 =>
                array (
                    'id' => 379,
                    'name' => 'Ninja Collector !',
                    'description' => '<strong>Skin Carte Collector #03 !!</strong><br>
Un skin super Ninja et carrément Collector !! Rencontrez un créateur, et repartez avec le super Ninja qui se transforme en tronc d\'arbre XD !! Skin collector disponible uniquement en obtenant une carte cadeau collector #03 !!
<br><br><strong style="color:#BC6BD6;">Le Ninja est un skin Collector qui ne peut s\'obtenir qu\'en ayant une Carte Cadeau #03</strong><br>
<br>
<a href="http://www.blablaland.com/site/blabillons.php?m=cadeau">Si tu as reçu une carte, clique ici pour entrer le code et avoir le skin</a><br><br>
La Carte Cadeau #03 n\'est plus disponible... elle est désormais considérée comme RARE !!<br><br>
Plus d\'information sur : <a href="http://www.niveau99-shop.com" target="_blank">NIVEAU99-SHOP</a>',
                    'price' => 3000,
                    'token' => 0,
                    'special' => 'CARD',
                    'promo' => 0,
                    'color' => '82;2;88;2;58;2;58;15;59;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 39,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            316 =>
                array (
                    'id' => 380,
                    'name' => 'Poussin Casque',
                    'description' => '<strong style="color:#FF00FF;">POUSSIN SCOOTER</strong><br>
Whouaaa !! Découvrez une nouvelle variante délirante du mythique Poussin, avec un super casque prêt pour affronter les cascades les plus extrêmes imaginables !!<br />
Un must sur son <a href="/site/shop_objet.php?giveme=185" target="_blank">Scooter Vesbla</a> !! Juste trop la classe !!
<br /><br />
<strong style="color:#BC6BD6;">Découvrez une variante au style 100% classe et fun !!</strong><br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Poussin" !! Trop cool !!</b>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '73;43;76;75;75;60;4;12;72;12',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            317 =>
                array (
                    'id' => 381,
                    'name' => 'Fille Chic',
                    'description' => 'Une allure réussie et un look super chic !! Des p\'tits nœuds assortis et une frange qui a trop la classe, il ne manquait que les petites lunettes pour rendre ce skin magnifique et super craquant !! Un skin à croquer !!
<br><strong style="color:#BC6BD6;">Belle Frange, jolis p\'tits nœuds, lunettes assorties, un skin juste super chic !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '1;81;88;14;63;63;17;81;73;57',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 4,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            318 =>
                array (
                    'id' => 382,
                    'name' => 'Fille Stylée',
                    'description' => 'Une chevelure complètement “in”, décolorée et teintée, un tonus d\'enfer et un look super re-belle version "style" !! Aucune fausse note pour cette petite merveille qui fera craquer tous les blablas !! Au Top, à posséder sans plus attendre !!<br><br>
<strong style="color:#BC6BD6;">Rebelle, aucune fausse note pour cette merveille !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '78;46;89;63;80;13;77;84;67;57',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 4,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            319 =>
                array (
                    'id' => 383,
                    'name' => 'Garçon Chic',
                    'description' => 'Un look super décontract\' et une coiffure qui en jette grave !! Le top du style pour ce skin qui ne se prend pas la tête, mais qui en fera tourner plus d\'une !!<br>
Ce skin deviendra sans aucun doute une référence pour son look juste trop cool !
<br><br>
<strong style="color:#BC6BD6;">Décontract, cool et très stylé, ce skin en fera tomber plus d\'une !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '84;81;89;82;58;16;84;18;67;57',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 4,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            320 =>
                array (
                    'id' => 384,
                    'name' => 'Le Marié',
                    'description' => 'Le plus beau jour de ta vie t\'attend !! Pars à la conquête de la femme de ta vie dans ce magnifique costume de Marié très stylé avec un super beau chapeau haut de forme, pour le meilleur et pas forcément pour le pire vu qu\'on est sur Blablaland ;)<br>
Oui, je le veux !!<br><br>
<strong style="color:#BC6BD6;">Cadeau : Pour l\'achat du skin Marié, on t\'offre le Pouvoir de l\'Anneau d\'union (Alliance) pour demander ta future en mariage !! Whouaaaaa !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '78;45;89;14;17;12;12;59;71;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 20,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            321 =>
                array (
                    'id' => 385,
                    'name' => 'Monsieur le Maire',
                    'description' => 'Faites place au Maire, avec son costume très classe et surtout sa banderole ornée d\'une magnifique médaille en Or !!<br>Tu peux marier les gens, ou juste être le Maire qui dirige sa merveilleuse ville !! Dans tous les cas, c\'est toi le Maire, et t\'as trop la classe !!
<br><br>
<strong style="color:#BC6BD6;">Oyé Oyé mes braves citoyens !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '18;81;89;81;12;44;59;73;76;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 20,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            322 =>
                array (
                    'id' => 386,
                    'name' => 'La belle Mariée',
                    'description' => 'Whouaaaa, ce skin est juste une pure beauté !! On dirait un ange tellement elle est ravissante, belle, et pleine d\'amour !! Enfile cette magnifique robe de mariée et pars à la conquête de l\'homme de ta vie !! En plus, tu peux jeter ton bouquet dans les airs et porter bonheur à celui ou celle qui l’attrapera !!<br>
Ce skin est tout simplement merveilleux et de toute beauté pour le plus beau jour de sa vie !!
<br><br>
<strong style="color:#BC6BD6;">Le plus beau jour de ta vie t\'attend avec cette magnifique robe de mariée !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '12;81;89;59;59;58;58;15;59;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 20,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            323 =>
                array (
                    'id' => 387,
                    'name' => 'BBL-Solid Tech n300',
                    'description' => '<img src="/images/blablaland/news_limite.gif"><em> Le N300 est là !!</em><br><br>
<strong style="color:#DD0000;">Uniquement jusqu\'au 9 Octobre 2011 !!</strong><br><br>
Une brèche des temps anciens s’ouvre à nouveau sur Blablaland : des temps anciens où les guerriers étaient légendaires.<br>
Voici en exclusivité le BBL Solid-Tech N300, une machine de guerre. <br>Taillé dans les plus nobles matériaux, pourvu d’une intelligence et d’un savoir-faire exceptionnel : tout simplement une merveille de la technologie et cela enfin disponible sur Blablaland !!<br><br>
<b>Découvre les pouvoirs ultimes du n300 :</b><br><br>
&#9642; Tremblement de terre lorsqu\'en vol tu appuies 2 fois sur la flèche du bas<br>
&#9642; Déplacement latéral éclair lorsque tu appuies 2 fois sur la flèche de droite ou de gauche.<br>
&#9642; Attaque au Sabre SolidTech pour des combats exceptionnels, qui peut être boosté en déferlante d\'énergie grâce au Blibli du Sabre Sonic<br>
&#9642; le n300 vole en illimité grâce à ses puissants réacteurs et son mode JetPack<br>
&#9642; Il détient une énergie capable de maintenir 3 Bliblis en même temps, ce qui peut décupler sa puissance s\'il s\'agit des 3 bliblis SolidTech spécialement conçus pour le n300.<br>
&#9642; Le n300 est un être unique, et peut à tout moment matérialiser une plateforme de lancement pour rejoindre sa planète d\'origine et retrouver son serviteur qui lui en apprendra plus sur ses capacités hors-normes et surpuissantes.<br>
&#9642; le N300 possède 2 balises de Téléportation : Placez vos balises dans vos maps favorites afin de vous y téléporter à volonté.
<br><br>
<b>Boostez encore plus le N300 grâce à ses Bliblis spéciaux :</b><br><br>
&#9642; Blibli Stabilisateur, qui lui permet de stationner dans les airs<br>
&#9642; Blibli Sabre Sonic pour décupler la puissance de son Sabre et créer des ondes de choc.<br>
&#9642; Blibli Ultra-Speed pour se téléporter d\'un point à un autre dans une même map.<br><br>
<strong style="color:#DD0000;">Uniquement jusqu\'au 9 Octobre 2011 !!</strong><br><br>
<strong style="color:#BC6BD6;">ÉDITION LIMITÉE à l\'achat, seulement du 30 Septembre au 9 Octobre 2011... En clair, si tu ne le prends pas avant cette date, tu n\'auras plus jamais l\'occasion d\'avoir ce skin Collector surpuissant !<br>
C\'est maintenant, ou jamais !</strong><br><br>
<a href="http://www.youtube.com/watch?v=f3Lg5g-KdCk" class="fofo_link_extern" target="_blank">Clique ici pour voir la Vidéo</a>',
                    'price' => 3000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '73;73;2;2;2;73;73;73;2;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 22,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            324 =>
                array (
                    'id' => 388,
                    'name' => 'Ninja spécialité Arts Martiaux',
                    'description' => 'Incroyable !! Deviens un Ninja spécialiste des Arts Martiaux !! Avec un design ultra classe, ce skin est doté de pouvoirs hallucinants !! <b>Maîtrise la force</b> et envoie valser les Blablas avec ton <b>coup de poing fury</b>, contrôle la puissance de l\'énergie autour de toi et propulse une <b>boule d\'énergie</b> qui traversera le tchat, et montre toute <b>ta puissance</b> avec une dance... "whouaaaa" !!<br><br><b>Skin incroyablement puissant !!</b><br><br>
<strong style="color:#BC6BD6;">Incontestable Maître en Arts Martiaux, maîtrise la force et la puissance énergétique autour de toi !! Un skin exceptionnel !</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '2;1;88;1;17;2;58;17;77;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            325 =>
                array (
                    'id' => 389,
                    'name' => 'Kunoichi (Ninja) spécialité Arme',
                    'description' => 'Incroyable !! Deviens une Kunoichi (Ninja) spécialiste des Armes !! Avec un design ultra classe, ce skin est doté d\'une <b>maîtrise redoutable</b> !! Dégaine ton <b>incroyable sabre</b> et tranche les Blablas, <b>lance des shurikens</b> à travers le tchat pour cisailler les Blablas, et <b>impose le respect</b> avec une danse qui démontre ton incontestable maîtrise du sabre !!<br><br><b>Skin incroyablement puissant !!</b><br><br>
<strong style="color:#BC6BD6;">Incontestable Maître en Armes, Impose le respect du maniement des armes autour de toi !! Un skin exceptionnel !</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '2;1;88;2;58;73;73;1;58;58',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            326 =>
                array (
                    'id' => 390,
                    'name' => 'Ninja spécialité Camouflage',
                    'description' => 'Incroyable !! Deviens un super Ninja spécialiste dans l\'Art du Camouflage !! Avec un <b>design ultra sombre</b>, ce skin saura passer inaperçu au yeux de tous !! Avec ses diverses techniques de camouflage, il pourra <b>se faire passer pour un rocher</b>, ou plus perfide encore, il saura d\'un simple clic se transformer en table romantique, ou bien se cacher dans un carton, ou <b>mieux encore, devenir quasiment invisible</b> !!<br><br><b>Skin incroyablement puissant... si vous le voyez !!</b><br><br>
<strong style="color:#BC6BD6;">Incontestable Maître en Camouflage, "Ne pas être vu" est sa règle d\'or !! Un skin exceptionnel... si vous arrivez à le voir ;)</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '18;71;89;58;2;90;1;11;17;20',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            327 =>
                array (
                    'id' => 391,
                    'name' => 'Kunoichi (Ninja) spé Agilité',
                    'description' => 'Incroyable !! Deviens une Kunoichi (Ninja) spécialiste en Agilité !! Avec un design ultra classe, ce skin est doté d\'une souplesse inimaginable !!<br>Capable de <b>courir ultra vite</b> lorsqu\'on appuie 2 fois sur une touche de déplacement, elle maîtrise aussi l\'art du <b>Double saut</b> : Une fois en l\'air, rappuyez sur la touche du haut pour déclencher un second saut !!Impressionnant, mais il y a encore mieux, en maintenant la flèche du bas appuyée, <b>elle charge</b>, après quelques instant, sautez et vous la verrez <b>partir dans les airs</b>... et cumulez à ça un double... incroyable maîtrise !!<br><br><b>Skin incroyablement puissant !!</b><br><br>
<strong style="color:#BC6BD6;">Incontestable Maître en Agilité, ce skin court et saute à une vitesse inimaginable !! Un skin exceptionnel !</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '2;81;89;72;14;72;58;27;72;58',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            328 =>
                array (
                    'id' => 392,
                    'name' => 'Ô Grand Maître Ninja',
                    'description' => '<b>La Puissance par Excellence !!</b><br>Incarne le Maître Ninja, capable de maîtriser les différents arts de ses quatre disciples !!<br>Avec un <b>design très sombre</b> et très <b>charismatique</b>, le Maître maîtrise parfaitement <b>l\'art du Sabre</b>, très tranchant !! Il maîtrise aussi l\'agilité et la vitesse, capable de <b>courir ultra rapidement</b> et de faire des <b>double-sauts</b> !! Il excelle aussi dans l\'art de l\'énergie et est capable de la maîtriser au point de <b>projeter des boules d\'énergie</b> !! Mais ce n\'est pas tout, il est aussi Maître dans <b>l\'art du Camouflage</b> et saura se rendre plus discret que l\'air... afin de mieux trancher ses ennemis !!<br><br><b>La puissance Ultime !!</b><br><br>
<strong style="color:#BC6BD6;">Incontestable Maître Ninja, sa puissance est exceptionnelle et quasi sans limite !! Un skin à posséder impérativement !!</strong>',
                    'price' => 2200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '81;46;88;1;1;2;1;1;1;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            329 =>
                array (
                    'id' => 393,
                    'name' => 'Poussin Pur Style !',
                    'description' => '<b>Piouuuuuu Powa !!</b><br>
Version Ultime du Poussin remasterisé et avec des superbes lunettes de soleil trop classe !!<br>
Un design ultra branché pour un poussin d\'une célébrité sans précédent !!<br><br>
Une pure merveille à posséder sans hésiter !!<br>
Soyez Branché Pur Style Piou Piou !!<br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Poussin" !! Trop cool !!</b>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;43;76;75;75;1;57;73;73;57',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            330 =>
                array (
                    'id' => 394,
                    'name' => 'Mouton avec Casquette',
                    'description' => '<b>Bééééééé Powa !!</b><br>
Redécouvrez le Mouton dans une version super cool avec sa Casquette Fraise hyper classe !! Cette nouvelle version vraiment cool aporte un max de fraîcheur et de fun au mouton déjà tellement "Bééé" !!<br>
A posséder impérativement !!!<br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Mouton" !! Trop cool !!</b>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;43;59;57;73;77;35;35;73;57',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            331 =>
                array (
                    'id' => 395,
                    'name' => 'Abeille Rasta',
                    'description' => '<b>Bzzzzz Rasta Powa !!</b><br>
Ca y est !! L\'Abeille Rasta tant convoitée depuis la sortie du Artbook est là !! Avec son look super Rasta elle est tout simplement trop trop top !! Un skin à posséder d\'urgence, impérativement, et sans la moindre hésitation, c\'est juste trop le Rasta Powa version Bzzzzzzzz !!
<br>
L\'Abeille Rasta du Artbook, en vraie !!<br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Abeille" !! Trop cool !!</b>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '81;1;76;76;16;59;73;77;35;57',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            332 =>
                array (
                    'id' => 396,
                    'name' => 'Lion Couronne',
                    'description' => '<b>Le Roi de la Jungle !</b><br>
Découvre cette majestueuse version du Lion, le roi de la jungle, avec sa magnifique et imposante couronne !!<br>
Ce skin se transforme en une variante vraiment majestueuse, un must-have !!<br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Lion" !! Trop cool !!</b>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '71;81;75;76;71;71;73;18;73;57',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            333 =>
                array (
                    'id' => 397,
                    'name' => 'Cochon Baskets',
                    'description' => '<b>Grouuiiiic POWA !!</b><br>
Découvrez la nouvelle version du cochon trop sportif avec des super baskets hyper design !! Grâce à celle-ci, il court plus vite et saute un peu plus haut !!<br>
Le cochon sportif... une variante pleine d\'énergie à posséder d\'urgence !!<br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Cochon" !! Trop cool !!</b>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '70;54;67;77;73;17;58;12;1;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            334 =>
                array (
                    'id' => 398,
                    'name' => 'Poussin HD :)',
                    'description' => '<b>Piouuuuuu !!</b><br>
Découvre magnifique et trop mimi skin du Poussin "Remasterisé" full HD version trop trop classe et vachement plus joli !!<br>
Notre Piou Piou favori revient sur le devant de la scène dans une version vraiment super belle !!<br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Poussin" !! Trop cool !!</b>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;43;76;75;75;73;57;73;73;57',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            335 =>
                array (
                    'id' => 399,
                    'name' => 'Abeille HD :)',
                    'description' => '<b>Bzzzzz !</b><br>
Découvre l\'emblématique Abeille de Blablaland, Remasterisée en version Full HD trop trop belle pour le plus grand plaisir de tout le monde !!<br>
<br>Un skin à posséder sans hésitation, avec des couleurs et des contours vraiment plus beaux pour cette magnifique Abeille !<br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Abeille" !! Trop cool !!</b>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;1;76;76;16;59;57;73;73;57',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            336 =>
                array (
                    'id' => 400,
                    'name' => 'Mouton HD :)',
                    'description' => '<b>Béééééé !!</b><br>
Découvrez le Mouton dans sa nouvelle version Remasterisée Full HD trop classe !! Déjà qu\'il fait partie des grand classiques incontournables de Blablaland, désormais dans sa nouvelle version c\'est juste un <b>Indispensable</b> skin à posséder impérativement !!<br><br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Mouton" !! Trop cool !!</b>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;43;59;75;73;73;57;73;73;57',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            337 =>
                array (
                    'id' => 401,
                    'name' => 'Cochon HD :)',
                    'description' => '<b>Grouuiiiic !</b><br>
Découvrez le cochon dans sa toute nouvelle version Full HD de la balle qui déchire tout !! Le design entier et revu, une vraie HD de porc... hahaaa !!<br>
Un skin qui va mettre plein de boue dans les yeux des gens tellement il est beau, à posséder trop trop trop !!<br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Cochon" !! Trop cool !!</b>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '70;53;67;75;75;67;83;89;1;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            338 =>
                array (
                    'id' => 402,
                    'name' => 'Chasseuse de Fantômes',
                    'description' => 'Pars à la chasse des Fantômes sur Blablaland et aspire les avec ton arme ultime au laser électromagnétique !! Si tu y arrives, le Fantôme sera aspiré dans ton sac et hop là !!<br>
<b>Tout simplement énorme !!</b><br><br>
- Les fantômes sont : les blablas qui sont en fantôme après le paradis, ceux qui ont subi les effets de la potion fantôme (oui oui, avec le lance potions tu peux te faire plein de proies), et le skin fantômas !!<br><br>
- Une fois aspiré, les skins se retrouvent dans 3 nouvelles maps, l\'intérieur du sac des Chasseurs de Fantômes. On ne peut rester que 3 min dans ces maps après quoi on est expulsé automatiquement par le mécanisme du sac.<br><br>
<strong style="color:#BC6BD6;">Hallucinant !! Pars à la Chasse aux Fantômes sur Blablaland !!</strong>',
                    'price' => 1800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '78;45;89;14;17;84;34;76;19;4',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            339 =>
                array (
                    'id' => 403,
                    'name' => 'Chasseur de Fantômes',
                    'description' => 'Pars à la chasse des Fantômes sur Blablaland et aspire les avec ton arme ultime au laser électromagnétique !! Si tu y arrives, le Fantôme sera aspiré dans ton sac et hoplà !!<br>
<b>Tout simplement énorme !!</b><br><br>
- Les fantômes sont : les blablas qui sont en fantôme après le paradis, ceux qui ont subi les effets de la potion fantôme (oui oui, avec le lance potions tu peux te faire pleins de proies), et le skin fantômas !!<br><br>
- Une fois aspiré, les skins se retrouvent dans 3 nouvelles maps, l\'intérieur du sac des Chasseurs de Fantômes. On ne peut rester que 3 min dans ces maps après quoi on est expulsé automatiquement par le mécanisme du sac.<br><br>
<strong style="color:#BC6BD6;">Hallucinant !! Pars à la Chasse aux Fantômes sur Blablaland !!</strong>',
                    'price' => 1800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '75;73;89;73;17;1;57;73;36;15',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            340 =>
                array (
                    'id' => 404,
                    'name' => 'Fantôme Paradis Fille',
                    'description' => '<strong>Ce skin ne peut pas être acheté</strong><br>On le possède au cours du jeu lorsqu\'on se retrouve au Paradis une fois qu\'on a été tué. Pour aller au Paradis tout(e) seul(e), tape "/paradis" sur le tchat, sinon, utilise une Potion Fantôme ;)
<br><br><em>"je vous avais dit qu\'il y avait une bombe pas loin!" - seal3 ;)</em>',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '20;39;6;20;5;1;1;1',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'group_id' => 1,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            341 =>
                array (
                    'id' => 405,
                    'name' => 'Fantôme Paradis Garcon',
                    'description' => '<strong>Ce skin ne peut pas être acheté</strong><br>On le possède au cours du jeu lorsqu\'on se retrouve au Paradis une fois qu\'on a été tué. Pour aller au Paradis tout(e) seul(e), tape "/paradis" sur le tchat, sinon, utilise une Potion Fantôme ;)
<br><br><em>"je vous avais dit qu\'il y avait une bombe pas loin!" - seal3 ;)</em>',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '20;39;6;20;5;1;1;1',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'group_id' => 1,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            342 =>
                array (
                    'id' => 406,
                    'name' => 'Solid Tech n301 Forces spéciales',
                    'description' => '<strong style="color:#EE0000;">Deviens membre des Forces Spéciales du n300 !</strong><br>
Le n301 est le technicien des Forces spéciales du n300. Il aide à élaborer des stratégies avec son général. En grand stratège, il a permis à cette équipe d\'élites d\'atteindre le top niveau de ce qu\'on peut attendre d\'un groupement de guerriers. Ses lunettes très hautement technologiques intègrent une banque de données faramineuse lui permettant de l\'assister dans ses choix sur le terrain.
<br><br>
<strong style="color:#BC6BD6;">Le n301 est capable de générer des hologrammes pendant sa danse !</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '57;1;88;1;73;57;1;73;1;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 22,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            343 =>
                array (
                    'id' => 407,
                    'name' => 'Solid Tech n302 Forces spéciales',
                    'description' => '<strong style="color:#EE0000;">Deviens membre des Forces Spéciales du n300 !</strong><br>
Le n302 est le guerrier le plus puissant des Forces spéciales du n300. Il exécute avec férocité les ordres de la tête pensante de l\'équipe. Certains disent que sa puissance est même quasiment similaire à celle du n200. Il est issu de la famille guerrière des orogandas dont peu connaissent les origines. Cette famille très puissante et sous-jacente au système dissémine ses membres dans les organisations les plus puissantes de l\'univers. Le secret des orogandas résiderait dans des transformations permettant à ses membres les plus puissants d\'atteindre un niveau encore jamais égalé.
<br><br>
<strong style="color:#BC6BD6;">Si tu appuies rapidement 2 fois sur la droite ou sur la gauche, tu peux attaquer tes adversaires avec une puissance incroyable !</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '73;73;1;73;57;57;83;89;1;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 22,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            344 =>
                array (
                    'id' => 408,
                    'name' => 'Solid Tech n303 Forces spéciales',
                    'description' => '<strong style="color:#EE0000;">Deviens membre des Forces Spéciales du n300 !</strong><br>
Le n303 est l\'être le plus rapide des Forces spéciales : il est utilisé pour agir en territoire ennemi pour piéger des zones précises. Sa vitesse est son atout principal.
Ninja moderne de formation, ses capacités résident dans les déplacements rapides, discrets et intrusifs.
<br><br>
<strong style="color:#BC6BD6;">Le n303 est doté d\'une rapidité incroyable !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '73;73;88;57;57;1;73;89;1;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 22,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            345 =>
                array (
                    'id' => 409,
                    'name' => 'Solid Tech n304 Forces spéciales',
                    'description' => '<strong style="color:#EE0000;">Deviens membre des Forces Spéciales du n300 !</strong><br>
Tout comme son homologue n303, le n304 est également douée d\'une vitesse hors de la normale pour exécuter au mieux sa tâche. Issu de la même école des ninjas modernes, ce binôme est rodé aux tâches les plus exigeantes.
<br><br>
<strong style="color:#BC6BD6;">Le n304 est doté d\'une rapidité incroyable !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;73;88;57;75;1;73;89;1;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 22,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            346 =>
                array (
                    'id' => 410,
                    'name' => 'Solid Tech n305 Forces spéciales',
                    'description' => '<strong style="color:#EE0000;">Deviens membre des Forces Spéciales du n300 !</strong><br>
Le n305 est le Général en Chef des Forces spéciales du n300. Il rend directement compte des résultats de son équipe au n300 lui-même. Avant de devenir Général, il fut pendant longtemps un guerrier d\'élite très puissant.
Nul ne sait exactement jusqu\'où peut aller sa puissance mais il est difficile d\'établir une comparaison précise avec le n302 car son potentiel n\'est pas vraiment dévoilé.
<br><br>
<strong style="color:#BC6BD6;">Le n305 plane un peu et saute plus haut. Si tu appuies 2 fois vers le haut lorsque tu es en l\'air, tu feras une incroyable charge au sol !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '73;1;88;57;73;73;57;73;1;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 22,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            347 =>
                array (
                    'id' => 411,
                    'name' => 'Solid Tech n306 Forces spéciales',
                    'description' => '<strong style="color:#EE0000;">Deviens membre des Forces Spéciales du n300 !</strong><br>
le n306 est un robot-espion chargé d\'aller recueillir des informations en territoire ennemi. Son rôle est également d\'inspecter le terrain afin de faire le compte rendu le plus précis des lieux au Général. Ses lunettes spéciales lui permettent de filmer et photographier à volonté, cela afin d\'établir un dossier fourni au n301.
<br><br>
<strong style="color:#BC6BD6;">Le n306 saute haut et offre une grande souplesse dans les airs !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '1;73;57;73;1;73;73;89;1;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 22,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            348 =>
                array (
                    'id' => 414,
                    'name' => 'Fille Kawaii 2',
                    'description' => 'Un charme incontestable, délicat et plein de Kawaii, ce skin tout en finesse fera craquer toutes les personnes que vous croiserez.<br>
Effet garanti, et Kawaii !!<br><br>
<strong style="color:#BC6BD6;">Charme 100% Kawaii !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '67;48;68;59;73;67;26;67;67;26',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 36,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            349 =>
                array (
                    'id' => 415,
                    'name' => 'Fille Charleston',
                    'description' => 'Un charme très retro et plein de délicatesse pour un skin tout en beauté au look un peu rétro vraiment magnifique. Ce skin tout en finesse fera craquer toutes les personnes que vous croiserez.<br>
Effet garanti avec ce Retro Kawaii !!<br><br>
<strong style="color:#BC6BD6;">Charme 100% Retro Kawaii !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '75;23;68;84;72;84;72;67;19;4',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 36,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            350 =>
                array (
                    'id' => 416,
                    'name' => 'Fille Cyber-Goth',
                    'description' => 'La Cyber-Goth, au look déchainé et plein de vitalité en imposera grâce à son énergie 100% Kawaii !! Un skin super Cyber-Goth très électrisant qui ne passera pas inaperçu !!<br>
Effet garanti !!<br><br>
<strong style="color:#BC6BD6;">Charme 100% Cyber-Goth Kawaii !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '29;54;68;53;1;67;54;29;54;18',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 36,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            351 =>
                array (
                    'id' => 417,
                    'name' => 'Fille Goth',
                    'description' => 'Sous ses airs Goth se cache une fille hors du commun avec un tas de qualités. Un skin plein de mystères et en même temps plein de vie et d\'amour !!<br>
La Fille Goth laissera une image très poétique à toutes les personnes que vous croiserez !!<br><br>
<strong style="color:#BC6BD6;">Charme 100% poétique, Goth et super joli !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '3;51;68;13;72;69;3;17;69;4',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 36,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            352 =>
                array (
                    'id' => 418,
                    'name' => 'Vampire Femme 2011',
                    'description' => 'Entrez dans la peau froide des nouveaux Vampires au look hypra charismatique !! Comme tout bon vampire, ils peuvent mordre et contaminer des goules qui prendront leur apparence durant la nuit sombre !! Et petit plus non négligeable, vous pouvez retirer vos lunettes :)<br>
Incarnez l\'ultime symbole des ténèbres avec ce magnifique skin Vampire !! Un must-have !!<br><strong style="color:#FF5001;">Que le sang coule à flot, et que vos goules se comptent par milliers !!</strong>
<br /><br />
<a href="/site/jeu_monstres_nuit.php" target="_blank" style="color:#bd0000;">Ce skin permet de jouer au mini-jeu "Invasion des Monstres de la Nuit"</a>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '75;48;59;14;14;11;59;76;73;83',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            353 =>
                array (
                    'id' => 420,
                    'name' => 'Démon des Ténèbres ',
                    'description' => 'Les ténèbres vont envahir le jeu grâce à cet effroyable skin Démon !! Avec son charisme sombre et son aura maléfique, il fera régner la terreur !!<br>
Grâce à ses ailes il est capable de planer, et peut infliger des coups puissants pour imposer son règne suprême !!
<br><strong style="color:#FF5001;">Répandez les ténèbres autour de vous avec l\'effroyable Démon !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '72;73;1;1;58;73;73;72;1;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            354 =>
                array (
                    'id' => 421,
                    'name' => 'Blabla\'ToyZ - Spécial Halloween ',
                    'description' => '<img src="/images/blablaland/news_limite.gif" /> <strong style="color:#FF5001;">SPECIAL HALLOWEEN !!</strong><br>
Découvrez le TOYZ Collector d\'Halloween, en édition limitée pour Halloween seulement !! Surpuissant et hypra stylé Halloween, Il possède les mêmes pouvoirs que les derniers Toyz, mais sa colonne de feu à lui, c\'est une énorme colonne de Citrouilles qui transformera les Blablas en sucettes géantes !! MOUAHAHAHAAA !!<br/>
Notez d\'ailleurs que vous pouvez activer ou désactiver sa sucette !! Et faire de jolis rêves en dormant...<br><br>
<b>Un Toyz spécial Halloween redoutable, limité, à posséder impérativement !!</b><br>
<br><strong style="color:#FF5001;">Le TOYZ D\'HALLOWEEN n\'est disponible à l\'achat que pendant Halloween...</strong>',
                    'price' => 2011,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '75;73;75;75;1;75;64;77;59;69',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            355 =>
                array (
                    'id' => 424,
                    'name' => 'Zombie 2011',
                    'description' => 'Découvrez la nouvelle classe de "monstres" des ténèbres !! Après le Loup-Garou, les Vampires, incarnez désormais les ZOMBIES et faites un max de goules en mordant les gens la nuit !! Ils se transformeront alors en goules.<br><strong style="color:#FF5001;">Créez la plus grande horde de Zombies, MOUAHAHAHAAA !!</strong>
<br /><br />
<a href="/site/jeu_monstres_nuit.php" target="_blank" style="color:#bd0000;">Ce skin permet de jouer au mini-jeu "Invasion des Monstres de la Nuit"</a>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '23;59;90;82;19;12;17;12;19;4',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            356 =>
                array (
                    'id' => 426,
                    'name' => 'La Super Mamie d\'Halloween',
                    'description' => 'La Super Mamie, cette petite vieille qui cache bien son jeu, se déguise pour l\'occasion d\'Halloween avec une PROMO encore plus incroyable !! Déjà que ce skin est un MUST HAVE, alors là, c\'est horriblement mieux !!
<br><strong style="color:#FF5001;">La Super Mamie d\'Halloween est livrée avec : 10 Citrouilles + 10 potions fantôme + 10 potions caca + 10 faux cadeaux + 10 bombes + 1 min de bouclier + 1 min de jetpack !!! JUSTE INCROYABLE !!<br>
<br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "La Super Mamie" !! Trop cool !!</b>',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '90;41;89;14;17;57;82;17;75;81',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 14,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            357 =>
                array (
                    'id' => 427,
                    'name' => 'Poussin Garou',
                    'description' => 'Découvrez une effroyable et ultra stylée variante du Ô mythique Poussin de Blablaland, incroyablement relooké pour la fête d\'Halloween !!<br>
Un design époustouflant et "mortel" à posséder impérativement !!
<br><strong style="color:#FF5001;">Découvrez une variante 100% pur Halloween hyper stylée !!</strong><br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Poussin" !! Trop cool !!</b>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '58;73;76;75;75;67;83;89;1;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            358 =>
                array (
                    'id' => 428,
                    'name' => 'Emo Boy 1 Halloween',
                    'description' => 'Découvrez une effroyable et ultra stylée variante du garçon Emo, incroyablement relooké pour l\'énorme fête d\'Halloween !!<br>
Un design époustouflant et "mortel" à posséder impérativement !!
<br><strong style="color:#FF5001;">Découvrez une variante 100% pur Halloween hyper stylée !!</strong><br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Emo Boy 1" !! Trop cool !!</b>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '1;14;59;54;76;1;76;58;1;76',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 4,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            359 =>
                array (
                    'id' => 429,
                    'name' => 'Emo Girl 2 Halloween',
                    'description' => 'Découvrez une effroyable et ultra stylée variante de la fille Emo, incroyablement relookée pour l\'énorme fête d\'Halloween !!<br>
Un design époustouflant et "mortel" à posséder impérativement !!
<br><strong style="color:#FF5001;">Découvrez une variante 100% pur Halloween hyper stylée !!</strong><br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Emo Girl 2" !! Trop cool !!</b>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '27;14;59;54;76;14;76;57;14;14',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 4,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            360 =>
                array (
                    'id' => 432,
                    'name' => 'Sucette',
                    'description' => '',
                    'price' => 0,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '57;64;66;1;1;1;1;57;1;1',
                    'unavailable' => 0,
                    'hidden' => 1,
                    'group_id' => NULL,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            361 =>
                array (
                    'id' => 436,
                    'name' => 'Vampire Homme 2011',
                    'description' => 'Entrez dans la peau froide des nouveaux Vampires au look hypra charismatique !! Comme tout bon vampire, ils peuvent mordre et contaminer des goules qui prendront leur apparence durant la nuit sombre !! Et petit plus non négligeable, vous pouvez retirer vos lunettes :)<br>
Incarnez l\'ultime symbole des ténèbres avec ce magnifique skin Vampire !! Un must-have !!<br><strong style="color:#FF5001;">Que le sang coule à flot, et que vos goules se comptent par milliers !!</strong>
<br /><br />
<a href="/site/jeu_monstres_nuit.php" target="_blank" style="color:#bd0000;">Ce skin permet de jouer au mini-jeu "Invasion des Monstres de la Nuit"</a>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '14;48;59;14;11;83;84;73;73;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            362 =>
                array (
                    'id' => 440,
                    'name' => 'Blabla\'ToyZ Cristal',
                    'description' => '<strong style="color:#BC6BD6;">TOYZ NOUVELLE GENERATION !!</strong><br>
Un Toyz énigmatique, étrange et certainement le plus transparent : voici le Toyz Cristal ! Transformez les blablas en petits cristaux à votre image ! Des pouvoirs et sa colonne deux fois plus rapide à charger que les anciens Toyz !!
<br>
<br><strong style="color:#BC6BD6;">ToyZ Nouvelle génération : La colonne se charge 2 fois plus vite qu\'avant !!</strong>',
                    'price' => 2011,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '75;73;43;75;1;75;64;77;59;69',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 16,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            363 =>
                array (
                    'id' => 441,
                    'name' => 'Blabla\'ToyZ Poussin',
                    'description' => '<strong style="color:#BC6BD6;">TOYZ NOUVELLE GENERATION !!</strong><br>
Le plus mignon des Toyz débarque sur Blablaland ! Inondez les maps de sa magnifique colonne de poussins kawaii qui transformera les blablas en d\'adorables petits poussins, excellent !! Les Toyz troisième génération voient leurs pouvoirs s\'activer deux fois plus rapidement que les Toyz ancienne génération ! A posséder impérativement !!
<br>
<br><strong style="color:#BC6BD6;">ToyZ Nouvelle génération : La colonne se charge 2 fois plus vite qu\'avant !!</strong>',
                    'price' => 2011,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '76;43;77;77;1;75;64;77;59;69',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 16,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            364 =>
                array (
                    'id' => 442,
                    'name' => 'Blabla\'ToyZ Pingouin ',
                    'description' => '<strong style="color:#BC6BD6;">TOYZ NOUVELLE GENERATION !!</strong><br>
Plus rapide, plus fun! Voici le Toyz Pingouin prêt à dégainer sa colonne de glace qui transformera en glaçon quiconque osera s\'interposer ! Ses pouvoirs se déclenchent deux fois plus rapidement que les anciens Toyz ! A posséder d\'urgence !!
<br>
<br><strong style="color:#BC6BD6;">ToyZ Nouvelle génération : La colonne se charge 2 fois plus vite qu\'avant !!</strong>',
                    'price' => 2011,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;57;3;75;59;3;64;77;59;69',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 16,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            365 =>
                array (
                    'id' => 443,
                    'name' => 'Blabla\'ToyZ Électrique',
                    'description' => '<strong style="color:#BC6BD6;">TOYZ NOUVELLE GENERATION !!</strong><br>
Attention ! Voici le Toyz le plus dangereux jusqu\'à présent : le Toyz Électrique prêt à vous électrocuter à volonté ! Une colonne d\'électricité surpuissante et surtout deux fois plus rapide à charger, qui génère en plus un tremblement de terre terrifiant !!
<br>
<br><strong style="color:#BC6BD6;">ToyZ Nouvelle génération : La colonne se charge 2 fois plus vite qu\'avant !!</strong>',
                    'price' => 2011,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '46;46;13;14;1;75;64;77;59;69',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 16,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            366 =>
                array (
                    'id' => 449,
                    'name' => 'Emo Boy 2 de Noël',
                    'description' => 'Découvrez l\'incroyable variante spéciale Noël de l\'Emo Boy 2. Tout relooké en fourrure chaude pour affronter sans souci le plus glacial des hivers !! Avec un bonnet de Noël et une fausse barbe (vous avez la possibilité de l\'afficher ou non) !!<br>
<strong style="color:#BC6BD6;">Une Variante pleine de magie de Noël !! Joyeuses Fêtes à tous !!</strong><br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Emo Boy 2" !! Trop cool !!</b>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '83;81;89;59;83;46;72;72;77;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 4,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            367 =>
                array (
                    'id' => 450,
                    'name' => 'Fille Stylée de Noël',
                    'description' => 'Découvrez l\'incroyable variante spéciale Noël de la magnifique Fille Stylée. Toute relookée en fourrure chaude pour affronter sans souci le plus glacial des hivers !! Son superbe bonnet avec des petites oreilles d\'ours, trop craquante !! Un skin à posséder impérativement !!<br>
<strong style="color:#BC6BD6;">Une Variante pleine de magie de Noël !! Joyeuses Fêtes à tous !!</strong><br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Fille Stylée" !! Trop cool !!</b>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '78;46;68;72;59;59;72;72;67;1',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 4,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            368 =>
                array (
                    'id' => 451,
                    'name' => 'Blablarchers Noël Fille',
                    'description' => 'Découvrez l\'incroyable variante spéciale Noël du Blablarcher Fille. Toute relookée en fourrure chaude pour affronter sans souci le plus glacial des hivers !! Ses flèches sont remplacées par des étoiles filantes qui transforment en Bonhomme de Neige, leur cible aussi est remplacée par un superbe Sapin de Noël !!<br>
<br>
Une Variante spéciale pour bien débuter les magiques fêtes de fin d\'année !! Joyeux Noël à tous !!<br><br>
<strong style="color:#FF1111;">Avec un look hypra stylé, des animations à couper le souffle, cette variante de Noël est tout simplement parfaite !!<br>
Rejoins le clan des Archers !</strong><br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Blablarchers Fille" !! Trop cool !!</b>',
                    'price' => 2000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '36;46;89;72;81;59;77;72;48;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            369 =>
                array (
                    'id' => 452,
                    'name' => 'Blablarchers Noël Garcon',
                    'description' => 'Découvrez l\'incroyable variante spéciale Noël du Blablarcher Garçon. Tout relooké en fourrure chaude pour affronter sans souci le plus glacial des hivers !! Ses flèches sont remplacées par des étoiles filantes qui transforment en Bonhomme de Neige, leur cible aussi est remplacée par un superbe Sapin de Noël !!<br>
<br>
Une Variante spéciale pour bien débuter les magiques fêtes de fin d\'année !! Joyeux Noël à tous !!<br><br>
<strong style="color:#FF1111;">Avec un look hypra stylé, des animations à couper le souffle, cette variante de Noël est tout simplement parfaite !!<br>
Rejoins le clan des Archers !</strong><br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Blablarchers Garçon" !! Trop cool !!</b>',
                    'price' => 2000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '84;46;89;72;81;59;72;59;48;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            370 =>
                array (
                    'id' => 453,
                    'name' => 'Ourson de Noël',
                    'description' => 'Trop trop mimi ce petit Ourson de Noël, tout petit et trop chou, on n\'a qu\'une seule envie, c\'est de le câliner des heures durant. Un skin qui fera craquer tout votre entourage, parfait pour les fêtes de Noël et la belle neige blanche qui nous entoure !!<br>
<br>
<strong style="color:#BC6BD6;">Ce skin est tout simplement une merveille !! Joyeux Noël !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '59;1;2;23;81;70;28;59;73;88',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 15,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            371 =>
                array (
                    'id' => 454,
                    'name' => 'Loup de Noël',
                    'description' => 'Parcourez les plaines enneigées de Blablaland avec ce merveilleux skin du Loup de Noël !! Un design remarquable pour cette bête au charme redoutable, à posséder d\'urgence !! <br>
<br>
<strong style="color:#BC6BD6;">Le charisme du Loup de Noël ne passera pas inaperçu !! Joyeux Noël !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '90;48;70;13;81;70;28;59;73;88',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 15,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            372 =>
                array (
                    'id' => 455,
                    'name' => 'Lutin de Noël',
                    'description' => 'Découvrez les nouveaux skins Lutins de Noël, superbement stylés et plein de charme !! Et surtout, grâce à leur sucre d\'orge magique ils peuvent transformer les Blablas en Cadeaux de Noël !! Un skin remarquable qui mettra de la magie de Noël dans tout le jeu !!<br>
<strong style="color:#BC6BD6;">Que Noël soit magique grâce à ce skin Lutin qui transforme en cadeaux les Blablas</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '84;27;68;72;59;77;72;59;72;27',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 15,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            373 =>
                array (
                    'id' => 456,
                    'name' => 'Lutine de Noël',
                    'description' => 'Découvrez les nouveaux skins Lutins de Noël, superbement stylés et plein de charme !! Et surtout, grâce à leur sucre d\'orge magique ils peuvent transformer les Blablas en Cadeaux de Noël !! Un skin remarquable qui mettra de la magie de Noël dans tout le jeu !!<br>
<strong style="color:#BC6BD6;">Que Noël soit magique grâce à ce skin Lutine qui transforme en cadeaux les Blablas</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '84;27;68;72;59;27;72;77;72;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 15,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            374 =>
                array (
                    'id' => 457,
                    'name' => 'Fée des Bois de Noël',
                    'description' => 'Découvrez l\'incroyable et magique variante de Noël de la Fée des Bois !! Elle conserve bien entendu tous ses pouvoirs, mais en plus de cela elle respire la magie de Noël avec son relook aux couleurs d\'une des plus belles fêtes !! Une merveilleuse variante à posséder impérativement !!<br>
<strong style="color:#BC6BD6;">Joyeux Noël !! Ho Ho Ho !!</strong><br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Fée des Bois" !! Trop cool !!</b>',
                    'price' => 1600,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '75;30;88;73;58;53;58;47;76;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 31,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            375 =>
                array (
                    'id' => 458,
                    'name' => 'Faune de Noël',
                    'description' => 'Découvrez l\'incroyable et magique variante de Noël du Faune !! Il conserve bien entendu tous ses pouvoirs, mais en plus de cela il respire la magie de Noël avec son relook aux couleurs d\'une des plus belles fêtes !! Une merveilleuse variante à posséder impérativement !!<br>
<strong style="color:#BC6BD6;">Joyeux Noël !! Ho Ho Ho !!</strong><br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Faune" !! Trop cool !!</b>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '73;22;88;84;13;90;84;81;58;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 31,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            376 =>
                array (
                    'id' => 460,
                    'name' => 'Pépé Noël (édition Limitée)',
                    'description' => '<img src="/images/blablaland/news_limite.gif"> <strong style="color:#FF1111;">JOYEUX NOËL !!</strong><br><br>
Pépé Noël débarque sur Blablaland !! Le skin absolument obligatoire pour les fêtes ! Il a le pouvoir de se transformer en cadeau géant à volonté ! Ne laissez pas Pépé Noël à pied et offrez lui son traineau de Noël spatial, il vous en sera très très reconnaissant, et il aura la grande classe dedans : effet garanti !<br>
<br>
<strong style="color:#BC6BD6;">CADEAU : le Pépé Noël est livré avec 20 faux cadeaux, en cadeau ^^ (d\'une valeur de 500 BBL, ça vaut grave le coup !!)</strong>
<br><br>
<strong style="color:#BC6BD6;">Un skin édition limitée spécial Yovasystem à posséder d\'urgence !!</strong>
<br><br>
<strong style="color:#ef4400;">Ce skin exclusif n\'est disponible que pendant les fêtes de fin d\'année </color>!</strong>',
                    'price' => 3000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '57;57;89;73;57;2;73;77;73;57',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'group_id' => 15,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            377 =>
                array (
                    'id' => 463,
                    'name' => 'PapertoyZ Poule',
                    'description' => '<strong style="color:#ff00cc;">PAPERTOYZ !!</strong><br>
Transforme-toi en skin PapertoyZ Poule !! Ultra-délire et petit prix pour ce skin directement inspiré des jouets à monter soi-même "PapertoyZ" de Blablaland :)<br>
Lorsque tu cliques sur un joueur en PapertoyZ, tu peux aller sur le site télécharger le guide de montage du jouet ^^<br>
<br>
Découvre le site <a href="http://papertoyz.blablaland.com/" target="_blank">Papertoyz.Blablaland.com</a> :)<br><br>
<strong style="color:#BC6BD6;">Transforme-toi en skin PapertoyZ !</strong>',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '73;1;58;75;76;59;72;72;67;1',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 40,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            378 =>
                array (
                    'id' => 464,
                    'name' => 'PapertoyZ Poussin',
                    'description' => '<strong style="color:#ff00cc;">PAPERTOYZ !!</strong><br>
Transforme-toi en skin PapertoyZ Poussin !! Ultra-délire et petit prix pour ce skin directement inspiré des jouets à monter soi-même "PapertoyZ" de Blablaland :)<br>
Lorsque tu cliques sur un joueur en PapertoyZ, tu peux aller sur le site télécharger le guide de montage du jouet ^^<br>
<br>
Découvre le site <a href="http://papertoyz.blablaland.com/" target="_blank">Papertoyz.Blablaland.com</a> :)<br><br>
<strong style="color:#BC6BD6;">Transforme-toi en skin PapertoyZ !</strong>',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '76;46;77;75;59;59;72;72;67;1',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 40,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            379 =>
                array (
                    'id' => 465,
                    'name' => 'PapertoyZ Chat',
                    'description' => '<strong style="color:#ff00cc;">PAPERTOYZ !!</strong><br>
Transforme-toi en skin PapertoyZ Chat !! Ultra-délire et petit prix pour ce skin directement inspiré des jouets à monter soi-même "PapertoyZ" de Blablaland :)<br>
Lorsque tu cliques sur un joueur en PapertoyZ, tu peux aller sur le site télécharger le guide de montage du jouet ^^<br>
<br>
Découvre le site <a href="http://papertoyz.blablaland.com/" target="_blank">Papertoyz.Blablaland.com</a> :)<br><br>
<strong style="color:#BC6BD6;">Transforme-toi en skin PapertoyZ !</strong>',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '86;1;15;72;86;59;72;72;67;1',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 40,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            380 =>
                array (
                    'id' => 466,
                    'name' => 'PapertoyZ Sorcier',
                    'description' => '<strong style="color:#ff00cc;">PAPERTOYZ !!</strong><br>
Transforme-toi en skin PapertoyZ Sorcier!! Ultra-délire et petit prix pour ce skin directement inspiré des jouets à monter soi-même "PapertoyZ" de Blablaland :)<br>
Lorsque tu cliques sur un joueur en PapertoyZ, tu peux aller sur le site télécharger le guide de montage du jouet ^^<br>
<br>
Découvre le site <a href="http://papertoyz.blablaland.com/" target="_blank">Papertoyz.Blablaland.com</a> :)<br><br>
<strong style="color:#BC6BD6;">Transforme-toi en skin PapertoyZ !</strong>',
                    'price' => 800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '81;73;1;72;59;59;72;72;67;1',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 40,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            381 =>
                array (
                    'id' => 472,
                    'name' => 'Moine Shaolin Homme',
                    'description' => 'Deviens un Moine Shaolin, redoutable guerrier de la paix maitrisant les plus anciens arts martiaux de ses ancêtres.<br>
- Maîtrise la vitesse en appuyant deux fois vers l\'avant pour courrir très rapidement !<br>
- Maîtrise l\'air, lorsque tu sautes, rappuies sur la flèche du haut pour doubler ton saut !<br>
- Maîtrise la force et attaque tes adversaires avec ta redoutable lance<br>
<br>
<b>Le pouvoir des mythiques Moines Shaolin est en toi !</b>
<br>
<br>
<strong style="color:#BC6BD6;">Incarne un puissant Moine Shaolin qui maîtrise parfaitement les Arts Martiaux... Redoutable !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '90;11;89;76;11;84;76;90;72;1',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 18,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            382 =>
                array (
                    'id' => 473,
                    'name' => 'Moine Shaolin Femme',
                    'description' => 'Deviens une Moine Shaolin, redoutable guerrière de la paix maitrisant les plus anciens arts martiaux de ses ancêtres.<br>
- Maîtrise la vitesse en appuyant deux fois vers l\'avant pour courrir très rapidement !<br>
- Maîtrise l\'air, lorsque tu sautes, rappuies sur la flèche du haut pour doubler ton saut !<br>
- Maîtrise la force et attaque tes adversaires avec ta redoutable lance<br>
<br>
<b>Le pouvoir des mythiques Moines Shaolin est en toi !</b>
<br>
<br>
<strong style="color:#BC6BD6;">Incarne une puissante Moine Shaolin qui maîtrise parfaitement les Arts Martiaux... Redoutable !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '14;11;89;72;1;67;72;90;90;72',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 18,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            383 =>
                array (
                    'id' => 474,
                    'name' => 'Démon Chinois',
                    'description' => 'Deviens un puissant Démon Chinois, mystérieux et charismatique, au design incroyablement maléfique !!<br>
- Le Démon peut se téléporter lorsque tu appuies deux fois dans une direction (haut, droite ou gauche) ce qui lui permet de se déplacer rapidement pour te prendre par suprise !!<br>
<br>
Un look très fort, à posséder impérativement !!
<br><br>
<strong style="color:#BC6BD6;">Transforme-toi en Démon Chinois et maîtrise l\'art obscur de la téléportation !</strong>',
                    'price' => 1800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '80;58;73;15;15;84;80;73;67;1',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 18,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            384 =>
                array (
                    'id' => 478,
                    'name' => 'Pilote Boy',
                    'description' => '<strong style="color:#ff0000;">BBL-Solid SPORT !!</strong><br>
Deviens le pro du pilotage avec ce skin 100% stylé ! Un look ravageur et ultra sportif avec un accessoire indispensable pour accomplir sa tâche : un casque sport !<br>
Tu peux enlever et remettre ton casque à volonté directement dans le tchat afin de montrer qui c\'est le pilote !
Il ne te manque plus que ta voiture de sport pour faire fureur !
<br>
<br>
<strong style="color:#BC6BD6;">Ce skin augmente la vitesse des voitures Tuning BBL-Solid SPORT !<strong>


',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '84;11;88;77;11;11;77;11;57;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 41,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            385 =>
                array (
                    'id' => 479,
                    'name' => 'Pilote Girl',
                    'description' => '<strong style="color:#ff0000;">BBL-Solid SPORT !!</strong><br>
Ultra mignonne, hyper sportive et super équipée avec son casque sport, la pilote te surprendra par le charisme qu\'elle dégage. Montre aux garçons que les filles savent aussi piloter !<br>
Également équipée d\'un casque sport que tu peux enlever et remettre à tout moment, ce skin est le must du moment ! Fonce te procurer la voiture de tes rêves et montre-nous de quoi tu es capable !
<br>
<br>
<strong style="color:#BC6BD6;">Ce skin augmente la vitesse des voitures Tuning BBL-Solid SPORT !<strong>



',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;11;89;64;64;11;64;11;11;57',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 41,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            386 =>
                array (
                    'id' => 480,
                    'name' => 'Fraise Powa',
                    'description' => '<strong style="color:#ff39e4;">KAWAII FIGHT !!</strong><br>
Trop mimi, trop craquant, ce skin ne jure que par le pouvoir de la fraise ! Avec son attaque de missiles aux fraises, il transformera tout skin alentour en une adorable petite fraise ^^.<br>
Ses petites étoiles qui gravitent autour de lui le rendent encore plus croquant...heu craquant !
<br>
<br>
<strong style="color:#BC6BD6;">Super Kawaii Fight !! Il est trop mignon, et il tape méga fort avec son Armageddon de Fraises !! A posséder d\'urgence !!</strong>


',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '65;11;37;65;73;65;65;65;65;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 36,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            387 =>
                array (
                    'id' => 481,
                    'name' => 'Fille 3T Powa',
                    'description' => '<strong style="color:#ff39e4;">KAWAII FIGHT !!</strong><br>
Toute mimi, toute joli, et pourtant armée jusqu\'aux dents avec son énorme marteau de 3 Tonnes !! Un caractère bien trempé qui laissera des bleus à celui qui la cherchera de trop près !!<br>Un skin Kawaii Fight, super mignonne, mais surtout super Powa qui peut donner d\'incroyables coups de méga Marteau 3T !!<br>
<br>
<strong style="color:#BC6BD6;">Super Kawaii Fight !! Elle est trop mimi, et elle tape méga fort !! A posséder d\'urgence !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '81;84;68;67;55;78;66;84;59;72',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 36,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            388 =>
                array (
                    'id' => 484,
                    'name' => 'Lapin Content',
                    'description' => 'Lapin Content',
                    'price' => 5000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '1;1;1;1;1;1;1;1;1;1',
                    'unavailable' => 0,
                    'hidden' => 1,
                    'group_id' => NULL,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            389 =>
                array (
                    'id' => 485,
                    'name' => 'Blabla\'ToyZ St Valentin',
                    'description' => '<img src="/images/blablaland/news_limite.gif" /> <strong style="color:#FF0000;">Saint Valentin</strong><br>
Découvre le skin ToyZ édition spéciale St Valentin !! Avec un super beau look Cupidon, ce ToyZ lance une incroyable colonne de Coeurs qui transformera tous les blablas touchés en petit coeur de Saint Valentin !!<br>
Un nouveau Toyz très "Love" à posséder impérativemement pour la St Valentin.<br><br>
<strong style="color:#FF0000;">Attention, c\'est une édition Limitée en vente seulement pendant le week-end de la Saint Valentin, après quoi il faudra attendre ... l\'an prochain !!</strong>
<br>
<em>Le ToyZ St Valentin possède bien entendu tous les pouvoirs des ToyZ ^^</em><br>
<br><strong style="color:#BC6BD6;">Un ToyZ spécial Saint Valentin Cupidon avec une colonne de Coeurs !!</strong>',
                    'price' => 0,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '79;46;89;59;59;59;79;73;59;69',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'group_id' => 20,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            390 =>
                array (
                    'id' => 487,
                    'name' => 'Amoureuse St Valentin',
                    'description' => '<strong>Aiiiiime-moi !!</strong> Incarne la pure amoureuse de la Saint Valentin, électrique, déjantée et débordante d\'amour !! D\'un coup de baguette magique elle pourra rendre amoureux n\'importe quel Blabla !!<br>L\'amour fou de la Saint Valentin est avec toi !!
<br>
<br><strong style="color:#BC6BD6;">Rends amoureux tous les blablas autour de toi d\'un coup de baguette magique !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '84;73;89;67;73;73;73;73;59;72',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 20,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            391 =>
                array (
                    'id' => 488,
                    'name' => 'Chat domestique 1',
                    'description' => 'Ultra craquant et vraiment trop mignon, deviens un adorable Chat domestique plein de tendresse et de ronrons !!<br />
Avec un petit miaulement tout mimi, il ronronne lorsqu\'il est en mode danse !!<br />
Un skin top choupi à ne pas rater !
<br>
<br><strong style="color:#BC6BD6;">Deviens un adorable petit chat plein de tendresse !</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '17;76;68;59;68;27;76;73;59;72',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            392 =>
                array (
                    'id' => 490,
                    'name' => 'Commando Boy',
                    'description' => '<strong style="color:#BC6BD6;">NOUVELLE GÉNÉRATION !!</strong><br>
Imaginez un skin au look ravageur, guerrier, massif avec en prime un lance-roquette à retardement, capable de tuer les Blablas imprudents !! Votre rêve devient alors réalité avec ce skin Commando "Nouvelle Génération" ultra-looké !<br>
Un skin indispensable pour faire la guerre sur Blablaland !
<br><br>
<strong>Ce skin active les pouvoirs secrets du <a href="/site/shop_objet.php?giveme=161" target="_blank" class="fofo_link_extern">Blibli Hélico Collector #04</a></strong>
<br><br>
<strong style="color:#BC6BD6;">Prenez le contrôle des armées avec votre Lance-Roquette surpuissant !!</strong>',
                    'price' => 1800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '27;1;88;27;73;81;81;70;1;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 2,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            393 =>
                array (
                    'id' => 491,
                    'name' => 'Commando Girl',
                    'description' => '<strong style="color:#BC6BD6;">NOUVELLE GÉNÉRATION !!</strong><br>
Imaginez un skin au look ravageur, charmante guerrière, très stylée... avec en prime un lance-roquette à retardement, capable de tuer les Blablas imprudents !! Votre rêve devient alors réalité avec ce skin Commando "Nouvelle Génération" ultra-looké !<br>
Un skin indispensable pour faire la guerre sur Blablaland ! À posséder absolument !
<br><br>
<strong>Ce skin active les pouvoirs secrets du <a href="/site/shop_objet.php?giveme=161" target="_blank" class="fofo_link_extern">Blibli Hélico Collector #04</a></strong>
<br><br>
<strong style="color:#BC6BD6;">Prenez le contrôle des armées avec votre Lance-Roquette surpuissant !!</strong>',
                    'price' => 1800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '71;1;88;22;22;27;77;23;11;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 2,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            394 =>
                array (
                    'id' => 493,
                    'name' => 'Écureuil',
                    'description' => 'Ultra craquant, ultra rapide, ultra agile, l\'écureuil va vous émerveiller avec sa magnifique petite bouille trop belle !<br>
Le petit animal que l\'on attendait tous : Un must-have à posséder absolument tellement il est mignon !!
<br>
<br><strong style="color:#BC6BD6;">Deviens un craquant petit écureuil rapide et agile !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '81;84;75;70;13;73;73;73;59;72',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            395 =>
                array (
                    'id' => 494,
                    'name' => 'Porc-épic',
                    'description' => 'Avec son adorable petite frimousse, le Porc-épic a plus d\'un tour dans son sac. En effet, il est capable de se mettre en boule afin de se protéger, et quiconque sautera dessus aura une drôle de surprise... piquante !! Mouarf !<br>
Adorable petit animal :)
<br>
<br><strong style="color:#BC6BD6;">Deviens un piquant petit Porc-épic, et mets-toi en boule !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '90;81;13;14;67;12;15;73;59;72',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            396 =>
                array (
                    'id' => 495,
                    'name' => 'Raton Laveur',
                    'description' => 'Trop mignon, so cuuuute ! Le raton laveur va vous faire craquer immédiatement, tellement il est chou ! Vous ne le regretterez pas, effet garanti !!<br>
Tout le monde s\'arrêtera à côté de vous pour contempler votre pelage et votre beauté !
<br>
<br><strong style="color:#BC6BD6;">Deviens un magnifique petit Raton Laveur, so cuuuute !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '67;81;90;70;14;15;60;73;59;72',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            397 =>
                array (
                    'id' => 496,
                    'name' => 'Chat domestique 2',
                    'description' => 'Ultra craquant et vraiment trop mignon, deviens un adorable Chat domestique plein de tendresse et de ronrons !!<br />
Avec un petit miaulement tout mimi, il ronronne lorsqu\'il est en mode danse !!<br />
Un skin top choupi à ne pas rater !
<br>
<br><strong style="color:#BC6BD6;">Deviens un adorable petit chat plein de tendresse !</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '14;27;68;59;68;72;73;73;59;72',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            398 =>
                array (
                    'id' => 497,
                    'name' => 'Chat domestique 3',
                    'description' => 'Ultra craquant et vraiment trop mignon, deviens un adorable Chat domestique plein de tendresse et de ronrons !!<br />
Avec un petit miaulement tout mimi, il ronronne lorsqu\'il est en mode danse !!<br />
Un skin top choupi à ne pas rater !
<br>
<br><strong style="color:#BC6BD6;">Deviens un adorable petit chat plein de tendresse !</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '59;45;68;59;67;67;73;73;59;72',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            399 =>
                array (
                    'id' => 498,
                    'name' => 'Chat Sauvage 1',
                    'description' => 'Ultra craquant mais vraiment sauvage, apprivoise cette petite boule de poils !!<br />
Les chats sauvages miaulent sur un ton de "grrrr" lorsqu\'ils sont en danse !!<br />
Un skin top choupi, mais surtout top sauvage à ne pas rater pour faire peur aux petits chats gentils !
<br>
<br><strong style="color:#BC6BD6;">Deviens un petit chat sauvage et monte ton clan contre les petits chats tout gentils !</strong>
',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '88;76;27;68;86;68;59;73;59;72',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            400 =>
                array (
                    'id' => 499,
                    'name' => 'Chat Sauvage 2',
                    'description' => 'Ultra craquant mais vraiment sauvage, apprivoise cette petite boule de poils !!<br />
Les chats sauvages miaulent sur un ton de "grrrr" lorsqu\'ils sont en danse !!<br />
Un skin top choupi, mais surtout top sauvage à ne pas rater pour faire peur aux petits chats gentils !
<br>
<br><strong style="color:#BC6BD6;">Deviens un petit chat sauvage et monte ton clan contre les petits chats tout gentils !</strong>
',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '75;27;68;76;67;59;73;73;59;72',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            401 =>
                array (
                    'id' => 500,
                    'name' => 'Chat Sauvage 3',
                    'description' => 'Ultra craquant mais vraiment sauvage, apprivoise cette petite boule de poils !!<br />
Les chats sauvages miaulent sur un ton de "grrrr" lorsqu\'ils sont en danse !!<br />
Un skin top choupi, mais surtout top sauvage à ne pas rater pour faire peur aux petits chats gentils !
<br>
<br><strong style="color:#BC6BD6;">Deviens un petit chat sauvage et monte ton clan contre les petits chats tout gentils !</strong>
',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '14;45;68;17;68;59;73;73;59;72',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            402 =>
                array (
                    'id' => 501,
                    'name' => 'Chenille Papillon',
                    'description' => 'Incarne une jolie petite chenille : ta destinée est de devenir un magnifique Papillon qui peut voler dans le ciel de Blablaland. Pour cela, il te suffit de te mettre en chrysalide pendant quelques secondes et "hop", te voilà tranformé en un merveilleux Papillon le temps d\'un envol au milieu des nuages !!
<br />
En soi, c\'est un peu un double skin avec l\'ultime pouvoir de voler dans le ciel !! A posséder !!
<br>
<br><strong style="color:#BC6BD6;">Cette merveilleuse petite chenille peut se transformer en un incroyable Papillon et s\'envoler dans les airs !!</strong>',
                    'price' => 1300,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '30;82;11;75;14;15;60;73;59;72',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            403 =>
                array (
                    'id' => 503,
                    'name' => 'Reine des Abeilles',
                    'description' => 'La Reine des Abeilles arrive sur Blablaland pour y faire sa petite ruche d\'amour !! Toujours aussi belle et légère, la Reine des Abeilles peut voler un instant en maintenant la flèche du haut appuyée une fois dans les airs.<br>
<br />
Pleine de grâce, et surtout, couronnée et reconnue comme la Reine, ce skin emmenera haut dans le ciel de Blablaland !!<br />
<br><strong style="color:#BC6BD6;">Incarnez la Reine des Abeilles et envolez-vous dans le ciel !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;14;14;48;80;77;73;73;59;72',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            404 =>
                array (
                    'id' => 504,
                    'name' => 'Alchimiste Garçon',
                    'description' => '<strong style="color:#ff00ff;">Deviens Alchimiste et crée des potions inédites !!</strong><br />
Incarne un puissant Alchimiste et maîtrise l\'art des Potions !! Avec un look à la fois classe et mystérieux, ce skin te permettra de faire de l\'alchimie en jeu et de créer des Potions inédites :<br />
<br />
A tout moment en jeu avec ce skin, tu pourras ouvrir l\'interface d\'Alchimie (dans la liste des pouvoirs). Il te suffira de choisir 3 potions parmi tes potions disponibles et de cliquer sur "Créer" pour obtenir le résultat de ton mélange !! Tu peux obtenir :
<br>
<br>
- Si ta recette n\'existe pas, tu obtiendras 1 à 5 potions aléatoires. Dans tous les cas, c\'est donc génial pour recycler les potions que tu n\'utilises pas !<br /><br />
- Il existe des recettes secrètes pour obtenir par exemple la "Potion étoile", ultime potion... mais ces recettes-là, c\'est à toi de les découvrir !!
<br /><br />
<strong style="color:#ff3397;">Ton grimoire magique inclut les recettes que tu as découvertes ! C\'est plus simple et plus pratique !<br /> A chaque nouvelle recette découverte, ton grimoire se mettra à jour :)</strong>
<br>
<br>
<strong style="color:#BC6BD6;">CADEAU : Avec ce skin on t\'offre 10 potions de chaque type (hormis les spéciales) Whouaaouuu !!</strong><br /><br />
<strong style="color:#BC6BD6;">Deviens un puissant Alchimiste et crée tes propres Potions magiques !!</strong>',
                    'price' => 1800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;82;89;4;77;35;81;18;70;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 6,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            405 =>
                array (
                    'id' => 505,
                    'name' => 'Alchimiste Fille',
                    'description' => '<strong style="color:#ff00ff;">Deviens Alchimiste et crée des potions inédites !!</strong><br />
Incarne une puissante Alchimiste et maîtrise l\'art des Potions !! Avec un look à la fois classe et mystérieux, ce skin te permettra de faire de l\'alchimie en jeu et de créer des Potions inédites :<br />
<br />
A tout moment en jeu avec ce skin, tu pourras ouvrir l\'interface d\'Alchimie (dans la liste des pouvoirs). Il te suffira de choisir 3 potions parmi tes potions disponibles et de cliquer sur "Créer" pour obtenir le résultat de ton mélange !! Tu peux obtenir :
<br>
<br>
- Si ta recette n\'existe pas, tu obtiendras 1 à 5 potions aléatoires. Dans tous les cas, c\'est donc génial pour recycler les potions que tu n\'utilises pas !<br /><br />
- Il existe des recettes secrètes pour obtenir par exemple la "Potion étoile", ultime potion... mais ces recettes-là, c\'est à toi de les découvrir !!
<br /><br />
<strong style="color:#ff3397;">Ton grimoire magique inclut les recettes que tu as découvertes ! C\'est plus simple et plus pratique !<br /> A chaque nouvelle recette découverte, ton grimoire se mettra à jour :)</strong>
<br>
<br>
<strong style="color:#BC6BD6;">CADEAU : Avec ce skin on t\'offre 10 potions de chaque type (hormis les spéciales) Whouaaouuu !!</strong><br /><br />
<strong style="color:#BC6BD6;">Deviens une puissante Alchimiste et crée tes propres Potions magiques !!</strong>',
                    'price' => 1800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '79;46;89;51;77;65;81;18;69;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 6,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            406 =>
                array (
                    'id' => 506,
                    'name' => 'Pharaon Fille',
                    'description' => 'Incarne un Pharaon aux traits minutieusement travaillés !! Illustre symbole de puissance, maîtresse des secrets des Pyramides... ce skin en impose de part son charisme et son incontestable puissance.<br>
Un skin royal, plein de charme et d\'une beauté inégalée !
<br /><br />
<strong style="color:#BC6BD6;">Deviens la grande et respectée Gardienne du secret des Pyramides !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '13;13;88;77;77;46;73;18;69;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            407 =>
                array (
                    'id' => 507,
                    'name' => 'Pharaon Garçon',
                    'description' => 'Incarne un Pharaon aux traits minutieusement travaillés !! Illustre symbole de puissance, maître des secrets des Pyramides... ce skin en impose de part son charisme et son incontestable puissance.<br>
Un skin royal, stylé, et vraiment classe !
<br /><br />
<strong style="color:#BC6BD6;">Deviens le grand et respecté Gardien du secret des Pyramides !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;14;88;43;77;73;43;18;69;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            408 =>
                array (
                    'id' => 509,
                    'name' => 'Geisha Papillon',
                    'description' => 'Découvrez une variante de l\'emblématique Geisha de Blablaland !! Arborant un magnifique kimono fleuri, un éventail et un papillon dans les cheveux. Cette variante vous permettra de vous distinguer parmi tous !!<br />
Un must-have :)
<br />
<br />
<strong style="color:#BC6BD6;">Découvrez une variante de l\'emblématique Geisha !!</strong><br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Geisha" !! Trop cool !!</b>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '11;11;89;73;77;12;59;73;65;74',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 18,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            409 =>
                array (
                    'id' => 511,
                    'name' => 'Poussin N99',
                    'description' => '<strong style="color:#FF00FF;">POUSSIN N99</strong><br>
Découvrez une hallucinante et ultra stylée variante du mythique Poussin de Blablaland, aux couleurs de NIVEAU99 !!<br>
Un pur Design qui le propulse au Top des variantes à posséder d\'urgence !!
<br><strong style="color:#BC6BD6;">Découvrez une variante 100% NIVEAU99 du Poussin !!</strong><br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Poussin" !! Trop cool !!</b>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '1;1;76;75;75;46;1;77;46;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            410 =>
                array (
                    'id' => 512,
                    'name' => 'Astronaute BASA #01',
                    'description' => '<strong style="color:#FF00FF;">Pars à la conquête de l\'espace !!</strong><br>
Deviens un Astronaute formé par la BASA "Blabla Aeronautics & Space Adventure", et pars à la conquête de l\'espace grâce à ta mini-fusée qui te permet de voyager de planète en planète !!<br />
<br />
<strong">Grâce à ce skin, tu vas pouvoir décoller en direction des planètes sans avoir besoin d\'aller à la Station BASA !!</strong>
<br />
<br /><strong style="color:#BC6BD6;">Un must-have, qui te permettra d\'avoir l\'exclusivité de la Conquête de l\'espace dans l\'univers de Blablaland !! A toi les étoiles !!</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '20;11;20;17;17;20;73;11;1;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 6,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            411 =>
                array (
                    'id' => 513,
                    'name' => 'Astronaute BASA #02',
                    'description' => '<strong style="color:#FF00FF;">Pars à la conquête de l\'espace !!</strong><br>
Deviens un Astronaute formé par la BASA "Blabla Aeronautics & Space Adventure", et pars à la conquête de l\'espace grâce à ta mini-fusée qui te permet de voyager de planète en planète !!<br />
<br />
<strong">Grâce à ce skin, tu vas pouvoir décoller en direction des planètes sans avoir besoin d\'aller à la Station BASA !!</strong>
<br />
<br /><strong style="color:#BC6BD6;">Un must-have, qui te permettra d\'avoir l\'exclusivité de la Conquête de l\'espace dans l\'univers de Blablaland !! A toi les étoiles !!</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '1;73;1;58;58;1;73;77;73;75',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 6,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            412 =>
                array (
                    'id' => 516,
                    'name' => 'Bomber Boy',
                    'description' => '<strong style="color:#00ae00;">MOTOR SPRING !!</strong><br>
"The" skin à l\'allure sportive/agressive par excellence ! Un soin tout particulier y a été apporté en terme d\'esthétique, le look idéal pour conduire le Motor Spring Bomber ! Ne passez pas à côté de sa coiffure électrique en mode danse, redoutablement efficace !!<br />
Il ne te manque plus que ta voiture pour faire fureur !
<br>
<br>
<strong style="color:#BC6BD6;">Du haut niveau pour ce skin ultra stylé Motor Spring !</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;1;88;1;75;1;58;73;77;58',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 41,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            413 =>
                array (
                    'id' => 517,
                    'name' => 'Bomber Girl',
                    'description' => '<strong style="color:#00ae00;">MOTOR SPRING !!</strong><br>
Un look ravageur et hyper décontracté ! Une allure parfaite pour parader au volant de la magnifique Motor Spring Coupé !! Voilà un skin fille qui va marquer fortement les esprits, à posséder impérativement !!<br />
Il ne te manque plus que ta voiture pour faire fureur !
<br>
<br>
<strong style="color:#BC6BD6;">Du haut niveau pour ce skin ultra stylé Motor Spring !</strong>
',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '65;42;89;58;77;1;53;77;70;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 41,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            414 =>
                array (
                    'id' => 518,
                    'name' => 'Druide',
                    'description' => '<strong style="color:#ff00ff;">Deviens Druide et maîtrise l\'art de l\'Herboristerie sur Blablaland !!</strong><br />
Incarne un Druide, grand maître Herboriste superbement réalisé capable de cueillir les fleurs de Blablaland afin d\'apporter un lot de nouveaux ingrédients pour l\'Alchimie et de se transformer en Loup pour gagner en vitesse !!<br />
Le Druide apporte de nouveaux pouvoirs au jeu, le "sac d\'herboriste", afin de stocker les ingrédients ramassés sur les fleurs grâce à sa serpe, et les "Fioles Vides" pour créer de nouvelles potions.
<br />
Pour cueillir, il vous suffit de faire flèche du bas devant une fleur et d\'attendre quelques secondes !<br />
<br />
<b>Les Druides apportent :</b><br /><br />
- De nouveaux ingrédients pour créer des recettes avec les Alchimistes !<br />
- De nouvelles recettes à découvrir avec les Alchimistes !<br />
- Un sac d\'Herboriste et des fioles vides pour plus de recettes !<br />
- <b>Transformation Loup</b> : Le druide est capable de se transformer en Loup afin de se déplacer plus rapidement pour aller trouver de nouvelles fleurs ! Ahhouuu
<br />
<br />
A noter que pour créer des potions avec l\'Aclhimiste à partir de ces nouveaux ingrédients, vous devez utiliser une fiole vide et 2 ingrédients !! Du coup, on vous offre le secret d\'une recette :<br />
<b>Mélangez 1 potion et 2 lingettes pour obtenir 5 fioles vides :)</b>
<br />
<br />
<strong style="color:#FF00FF">CADEAU : </strong><strong>Avec ce skin on t\'offre 5 graines de Rose, Lys et Tulipe !! Whouaaouuu !!</strong>
<br />
<br />
<strong style="color:#BC6BD6;">Deviens un Grand Maître Herboriste avec les Druides. Cueille des fleurs pour créer de nouvelles potions en Alchimie et transforme-toi en Loup !!</strong>',
                    'price' => 1800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '18;81;18;89;29;88;63;27;17;82',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 6,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            415 =>
                array (
                    'id' => 520,
                    'name' => 'Druidesse',
                    'description' => '<strong style="color:#ff00ff;">Deviens Druidesse et maîtrise l\'art de l\'Herboristerie sur Blablaland !!</strong><br />
Incarne une Druidesse, grande prêtresse Herboriste superbement réalisée capable de cueillir les fleurs de Blablaland afin d\'apporter un lot de nouveaux ingrédients pour l\'Alchimie et de se transformer en Louve pour gagner en vitesse !!<br />
La Druidesse apporte de nouveaux pouvoirs au jeu, le "sac d\'herboriste", afin de stocker les ingrédients ramassés sur les fleurs grâce à sa serpe, et les "Fioles Vides" pour créer de nouvelles potions.
<br />
Pour cueillir, il vous suffit de faire flèche du bas devant une fleur et d\'attendre quelques secondes !<br />
<br />
<b>Les Druidesses apportent :</b><br /><br />
- De nouveaux ingrédients pour créer des recettes avec les Alchimistes !<br />
- De nouvelles recettes à découvrir avec les Alchimistes !<br />
- Un sac d\'Herboriste et des fioles vides pour plus de recettes !<br />
- <b>Transformation Louve</b> : La druidesse est capable de se transformer en Louve afin de se déplacer plus rapidement pour aller trouver de nouvelles fleurs ! Ahhouuu
<br />
<br />
A noter que pour créer des potions avec l\'Aclhimiste à partir de ces nouveaux ingrédients, vous devez utiliser une fiole vide et 2 ingrédients !! Du coup, on vous offre le secret d\'une recette :<br />
<b>Mélangez 1 potion et 2 lingettes pour obtenir 5 fioles vides :)</b>
<br />
<br />
<strong style="color:#FF00FF">CADEAU : </strong><strong>Avec ce skin on t\'offre 5 graines de Rose, Lys et Tulipe !! Whouaaouuu !!</strong>
<br />
<br />
<strong style="color:#BC6BD6;">Deviens une Grande Prêtresse Herboriste avec les Druides. Cueille des fleurs pour créer de nouvelles potions en Alchimie et transforme-toi en Louve !!</strong>',
                    'price' => 1800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '76;37;53;89;29;88;63;27;47;81',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 6,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            416 =>
                array (
                    'id' => 522,
                    'name' => 'METALTECH Engin de chantier',
                    'description' => '<strong>Les MetalTech : Révolution Technologique !</strong><br />
Voici le tout premier des Metaltech !! Ce robot imposant a la capacité de se métamorphoser en un magnifique engin de chantier communément appelé "tombereau et est équipé d\'énormes roues qui vous emmèneront où bon vous semble !!
<br /><br />
<em>Une fois en jeu avec ce skin, dans ta liste des pouvoirs apparait une icône qui permet de déclencher la Transformation à tout moment, même en se déplaçant !! Une nouvelle génération de skins capables de se métamorphoser !!</em>
<br /><br />
<strong style="color:#BC6BD6;">Rejoins les rangs des METALTECH, une révolution Technologique qui offre le pouvoir de se métamorphoser !!</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '1;48;77;1;77;1;44;18;69;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 22,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            417 =>
                array (
                    'id' => 523,
                    'name' => 'METALTECH Foreuse',
                    'description' => '<strong>Les MetalTech : Révolution Technologique !</strong><br />
Le Metaltech de la v1 par excellence ! Imaginez un robot se métamorphoser en LA foreuse de la v1 ! Ce rêve est désormais possible, vous pourrez arpenter le monde de Blablaland au bord de la mythique foreuse qui représente tout un symbole sur Blablaland !!
<br /><br />
<em>Une fois en jeu avec ce skin, dans ta liste des pouvoirs apparait une icône qui permet de déclencher la Transformation à tout moment, même en se déplaçant !! Une nouvelle génération de skins capables de se métamorphoser !!</em>
<br /><br />
<strong style="color:#BC6BD6;">Rejoins les rangs des METALTECH, une révolution Technologique qui offre le pouvoir de se métamorphoser !!</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '78;45;77;17;17;77;44;18;69;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 22,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            418 =>
                array (
                    'id' => 524,
                    'name' => 'METALTECH Dirigeable',
                    'description' => '<strong>Les MetalTech : Révolution Technologique !</strong><br />
Quoi de mieux pour se camoufler dans les plaines de Blablaland ? Ce Metaltech possède une métamorphose quelque peu originale puisque vous pourrez imiter le célèbre Blablarigeable que tout le monde connait ! De plus, son pouvoir de se déplacer en flottant dans les airs en fait un skin ultra performant et efficace !!
<br /><br />
<em>Une fois en jeu avec ce skin, dans ta liste des pouvoirs apparait une icône qui permet de déclencher la Transformation à tout moment, même en se déplaçant !! Une nouvelle génération de skins capables de se métamorphoser !!</em>
<br /><br />
<strong style="color:#BC6BD6;">Rejoins les rangs des METALTECH, une révolution Technologique qui offre le pouvoir de se métamorphoser !!</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;42;65;2;59;58;2;58;65;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 22,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            419 =>
                array (
                    'id' => 525,
                    'name' => 'Bulbo Boy',
                    'description' => 'Comment ne pas craquer devant un Bulbo aussi mignon ? Son petit air taquin lui offre une danse supplémentaire dans laquelle il sourit, à l\'inverse de sa danse normale où il pleure, trop Kawaii !! Son pouvoir de se gonfler comme un ballon vous permettra de voler dans le ciel !! Youhou !!<br /> Attention toutefois à ne pas rester gonflé trop longtemps... sinon il éclate et se dégonfle dans tous les sens comme un ballon, top délire !!
<br>
<br>
<strong style="color:#BC6BD6;">Incarne un Bulbo, petit être trop choupi qui peut se gonfler pour voler dans le ciel !! Fun assuré !!</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '58;2;34;77;58;2;73;18;70;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 36,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            420 =>
                array (
                    'id' => 526,
                    'name' => 'Bulbo Girl',
                    'description' => 'Comment ne pas craquer devant une Bulbo aussi mignonne ? Son petit air taquin lui offre une danse supplémentaire dans laquelle elle  est amoureuse, à l\'inverse de sa danse normale où elle pleure, trop Kawaii !! Son pouvoir de se gonfler comme un ballon vous permettra de voler dans le ciel !! Youhou !!<br /> Attention toutefois à ne pas rester gonflé trop longtemps... sinon elle éclate et se dégonfle dans tous les sens comme un ballon, top délire !!
<br>
<br>
<strong style="color:#BC6BD6;">Incarne une Bulbo, petit être trop choupi qui peut se gonfler pour voler dans le ciel !! Fun assuré !!</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '58;2;65;77;58;2;72;77;72;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 36,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            421 =>
                array (
                    'id' => 527,
                    'name' => 'Surf Boy',
                    'description' => 'THE skin indispensable de l\'été ! Surfez sur Blablaland grâce à une super planche qui fait grave des vagues !<br />
Ce skin très esthétique a la possibilité d\'enlever et de mettre à volonté ses lunettes de soleil et possède une autre coiffure quand il surfe, sans oublier sa danse hyper claaasse !!<br /><br />
<em>Pour faire apparaitre une vague et surfer plus vite, appuie une deuxième fois dans la direction de ton choix !</em><br /><br />
<strong style="color:#BC6BD6;">Le skin ultime pour surfer avec classe sur la vague de l\'été !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;42;88;2;73;73;2;2;73;46',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 3,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            422 =>
                array (
                    'id' => 528,
                    'name' => 'Surf Girl',
                    'description' => 'THE skin indispensable de l\'été ! Surfez sur Blablaland grâce à une super planche qui fait grave des vagues !<br />
Super mignonne, la surfeuse a la possibilité d\'enlever et de mettre à volonté ses lunettes de soleil et possède une autre coiffure quand elle surfe, sans oublier sa danse hyper claaasse !!<br /><br />
<em>Pour faire apparaitre une vague et surfer plus vite, appuie une deuxième fois dans la direction de ton choix !</em><br /><br />
<strong style="color:#BC6BD6;">Le skin ultime pour surfer avec classe sur la vague de l\'été !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '77;42;88;2;58;65;2;35;46;53',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 3,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            423 =>
                array (
                    'id' => 529,
                    'name' => 'Citoyen Céleste',
                    'description' => 'Incarne un Céleste, noble citoyen du Royaume des Gardiens, descendu sur les plaines de Blablaland à la demande du Grand Sage pour surveiller qu\'aucun Mal ne s\'échappe de l\'Antre de feu.<br />
<br />
Ces êtres ont la faculté de déployer de grandes Ailes Célestes qui demandent une certaine maîtrise, mais qui, une fois acquise, leur permettent de se déplacer de manière majestueuse, rapide et fluide :<br />
<br />
<em>Une fois vos Ailes déployées : lorsque vous sautez, gardez la flèche du haut appuyée, le Céleste se mettra à planer. Après une seconde, ses Ailes s\'orientent vers le haut vous indiquant que vous pouvez relâcher la touche et appuyer de nouveau vers le haut pour faire un battement d\'Ailes et reprendre de l\'élan. Maintenez de nouveau la touche, et ainsi de suite. Conservez le rythme pour devenir digne du Pouvoir des Célestes !</em>
<br /><br />
<strong style="color:#BC6BD6;">C\'est un honneur de devenir un Céleste, noble Citoyen du Royaume des Gardiens !! Prouve-nous ta valeur !!</strong>',
                    'price' => 1800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '78;48;68;81;76;81;59;44;69;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 1,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            424 =>
                array (
                    'id' => 530,
                    'name' => 'Citoyenne Céleste',
                    'description' => 'Incarne un Céleste, noble citoyen du Royaume des Gardiens, descendu sur les plaines de Blablaland à la demande du Grand Sage pour surveiller qu\'aucun Mal ne s\'échappe de l\'Antre de feu.<br />
<br />
Ces êtres ont la faculté de déployer de grandes Ailes Célestes qui demandent une certaine maîtrise, mais qui, une fois acquise, leur permettent de se déplacer de manière majestueuse, rapide et fluide :<br />
<br />
<em>Une fois vos Ailes déployées : lorsque vous sautez, gardez la flèche du haut appuyée, le Céleste se mettra à planer. Après une seconde, ses Ailes s\'orientent vers le haut vous indiquant que vous pouvez relâcher la touche et appuyer de nouveau vers le haut pour faire un battement d\'Ailes et reprendre de l\'élan. Maintenez de nouveau la touche, et ainsi de suite. Conservez le rythme pour devenir digne du Pouvoir des Célestes !</em>
<br /><br />
<strong style="color:#BC6BD6;">C\'est un honneur de devenir un Céleste, noble Citoyen du Royaume des Gardiens !! Prouve-nous ta valeur !!</strong>',
                    'price' => 1800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '78;48;68;81;59;44;44;18;69;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 1,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            425 =>
                array (
                    'id' => 531,
                    'name' => 'Aviateur',
                    'description' => 'Pars à la conquête des nuages de Blablaland avec ce magnifique skin Aviateur !! N\'oublie pas de mettre tes lunettes avant le décollage, et c\'est parti pour l\'aventure :)<br />
L\'Aviateur est encore plus classe à bord de son super <a href="/site/shop_objet.php?giveme=186" target="_blank" class="fofo_link_extern">Avion Biplan</a> !!
<br>
<br>
<strong style="color:#BC6BD6;">Pars à l\'aventure du ciel de Blablaland avec ce super skin Aviateur !! Trop la classe, la tête dans les nuages !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '47;81;89;82;70;82;18;82;13;12',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            426 =>
                array (
                    'id' => 532,
                    'name' => 'Aviatrice',
                    'description' => 'Pars à la conquête des nuages de Blablaland avec ce magnifique skin Aviatrice !! N\'oublie pas de mettre tes lunettes avant le décollage, et c\'est parti pour l\'aventure :)<br />
L\'Aviatrice est encore plus classe à bord de son super <a href="/site/shop_objet.php?giveme=186" target="_blank" class="fofo_link_extern">Avion Biplan</a> !!
<br>
<br>
<strong style="color:#BC6BD6;">Pars à l\'aventure du ciel de Blablaland avec ce super skin Aviatrice !! Trop la classe, la tête dans les nuages !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '47;47;89;82;70;79;18;82;13;12',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            427 =>
                array (
                    'id' => 533,
                    'name' => 'Damné',
                    'description' => 'Rejoins le clan des Damnés, chassés de Blablaland depuis les temps anciens par les Célestes qui ne les trouvaient pas à leur goût. Suite à l\'apparition récente des Célestes, descendus de leur nuage, le Conseil des Damnés caché depuis tout ce temps dans l\'Antre de Feu, décide de revenir et de faire face.
<br /><br />Eux aussi, ils ont la faculté de déployer de grandes Ailes pour s\'envoler, avec quelques nuances. Leur impulsion est plus forte mais ils retombent plus vite.
<br />
<em>Une fois vos Ailes déployées : lorsque vous sautez, gardez la flèche du haut appuyée, le Damné se mettra à planer. Après une seconde, ses Ailes s\'orientent vers le haut vous indiquant que vous pouvez relâcher la touche et appuyer de nouveau vers le haut pour faire un battement d\'Ailes et reprendre de l\'élan. Maintenez de nouveau la touche, et ainsi de suite. Conservez le rythme pour devenir digne du Pouvoir des Damnés !</em>
<br /><br />
Gagnez encore plus de puissance grâce à l\'Aura de Célérité des Flammes donnée par la Sentinelle des Damnés dans l\'Antre de Feu.
<br /><br />
<strong style="color:#BC6BD6;">Il est temps de choisir son camp - Rejoignez les Damnés pour maitriser les pouvoirs des Flammes et vous envoler dans Blablaland !!</strong>',
                    'price' => 1800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '50;61;89;72;72;18;81;12;72;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 1,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            428 =>
                array (
                    'id' => 534,
                    'name' => 'Damnée',
                    'description' => 'Rejoins le clan des Damnés, chassés de Blablaland depuis les temps anciens par les Célestes qui ne les trouvaient pas à leur goût. Suite à l\'apparition récente des Célestes, descendus de leur nuage, le Conseil des Damnés caché depuis tout ce temps dans l\'Antre de Feu, décide de revenir et de faire face.
<br /><br />Eux aussi, ils ont la faculté de déployer de grandes Ailes pour s\'envoler, avec quelques nuances. Leur impulsion est plus forte mais ils retombent plus vite.
<br />
<em>Une fois vos Ailes déployées : lorsque vous sautez, gardez la flèche du haut appuyée, le Damné se mettra à planer. Après une seconde, ses Ailes s\'orientent vers le haut vous indiquant que vous pouvez relâcher la touche et appuyer de nouveau vers le haut pour faire un battement d\'Ailes et reprendre de l\'élan. Maintenez de nouveau la touche, et ainsi de suite. Conservez le rythme pour devenir digne du Pouvoir des Damnés !</em>
<br /><br />
Gagnez encore plus de puissance grâce à l\'Aura de Célérité des Flammes donnée par la Sentinelle des Damnés dans l\'Antre de Feu.
<br /><br />
<strong style="color:#BC6BD6;">Il est temps de choisir son camp - Rejoignez les Damnés pour maitriser les pouvoirs des Flammes et vous envoler dans Blablaland !!</strong>',
                    'price' => 1800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '13;62;89;12;61;18;18;12;72;12',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 1,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            429 =>
                array (
                    'id' => 538,
                    'name' => 'Pharaon Fille Momie',
                    'description' => 'Découvrez une version des plus réalistes des Pharaons... tous momifiés !! Un style dark, presque méchant, mais tellement classe sous tous ces bandages millénaires !!<br />
Un must-have hautement stylé !!
<br /><br />
<strong style="color:#BC6BD6;">Une variante Momifiée à posséder d\'urgence !!</strong><br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Pharaon Fille" !! Trop cool !!</b>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '80;73;77;77;11;18;18;12;72;12',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            430 =>
                array (
                    'id' => 539,
                    'name' => 'Pharaon Garçon Momie',
                    'description' => 'Découvrez une version des plus réalistes des Pharaons... tous momifiés !! Un style dark, presque méchant, mais tellement classe sous tous ces bandages millénaires !!<br />
Un must-have hautement stylé !!
<br /><br />
<strong style="color:#BC6BD6;">Une variante Momifiée à posséder d\'urgence !!</strong><br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Pharaon Garçon" !! Trop cool !!</b>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '80;73;77;43;11;18;18;12;72;12',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            431 =>
                array (
                    'id' => 543,
                    'name' => 'Monkey Garçon',
                    'description' => 'Indispensable pour cet été : le Singe du Coco Center enfin disponible en Boutique !<br />
Un des animaux les plus convoités débarque sur Blablaland. Ce petit être espiègle comme pas deux saute super haut et court vraiment vite !! C\'est le skin parfait pour aller avec la monture <a href="/site/shop_objet.php?giveme=189" class="fofo_link_extern" target="_blank">Nuage Monkey</a>
<br /><br />
<strong style="color:#BC6BD6;">Le Singe du Coco Center à posséder d\'urgence !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '83;81;88;12;61;18;18;12;72;12',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            432 =>
                array (
                    'id' => 544,
                    'name' => 'Monkey Fille',
                    'description' => 'Indispensable pour cet été : le Singe du Coco Center enfin disponible en Boutique !<br />
Un des animaux les plus convoités débarque sur Blablaland. Avec son noeud papillon, la petite monkey saura vous faire craquer, en plus elle saute super haut et court vraiment vite !! C\'est le skin parfait pour aller avec la monture <a href="/site/shop_objet.php?giveme=189" class="fofo_link_extern" target="_blank">Nuage Monkey</a>
<br /><br />
<strong style="color:#BC6BD6;">Le Singe du Coco Center à posséder d\'urgence !!</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '83;81;88;63;61;18;18;12;72;12',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            433 =>
                array (
                    'id' => 546,
                    'name' => 'Pharaon fille Pixel Huybit III',
                    'description' => '<strong style="color:#fa9a00;">RECOMPENSE PYRAMIDE HUYBIT III</strong><br />
Yes !! Continuez l\'expérience de la Pyramide Huybit III en incarnant le skin rétro du jeu !! Un must have pour avoir la classe tout en pixel, le grand Huybit III en personne sera fier de vous :)
<br /><br />
<strong style="color:#BC6BD6;">Se promener en Pharaon Pixel dans Blablaland... c\'est juste trop la classe Pyramidale (trop cool ce mot) !!</strong>
<br /><br />
<a href="/site/jeu_pyramide.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/1.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Pyramide Huybit III</a>',
                    'price' => 10,
                    'token' => 450,
                    'special' => 'PYRAMID',
                    'promo' => 0,
                    'color' => '88;11;11;77;77;46;18;12;72;12',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            434 =>
                array (
                    'id' => 547,
                    'name' => 'Pharaon garçon Pixel Huybit III',
                    'description' => '<strong style="color:#fa9a00;">RECOMPENSE PYRAMIDE HUYBIT III</strong><br />
Yes !! Continuez l\'expérience de la Pyramide Huybit III en incarnant le skin rétro du jeu !! Un must have pour avoir la classe tout en pixel, le grand Huybit III en personne sera fier de vous :)
<br /><br />
<strong style="color:#BC6BD6;">Se promener en Pharaon Pixel dans Blablaland... c\'est juste trop la classe Pyramidale (trop cool ce mot) !!</strong>
<br /><br />
<a href="/site/jeu_pyramide.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/1.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Pyramide Huybit III</a>',
                    'price' => 10,
                    'token' => 450,
                    'special' => 'PYRAMID',
                    'promo' => 0,
                    'color' => '88;11;43;77;77;18;18;12;72;12',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            435 =>
                array (
                    'id' => 548,
                    'name' => 'Monkey Pirate Garçon',
                    'description' => '<strong style="color:#FF00FF;">VARIANTE PIRATE spécial Nuage Monkey !!</strong>
Découvrez l\'excellentissime Variante Pirate du Monkey !! Celle-ci apporte en plus l\'exclusivité de transformer la Monture <a href="/site/shop_objet.php?giveme=189" class="fofo_link_extern" target="_blank">Nuage Monkey</a> en une incroyable version Galion Pirate !!<br />
Un pur Must-have !!
<br /><br />
<strong style="color:#BC6BD6;">50 Bananes offertes avec cette Variante XD</strong>
<br /><br />
<strong style="color:#BC6BD6;">Une variante Pirate qui transforme le Nuage Monkey en Galion !!</strong><br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Monkey Garçon" !! Trop cool !!</b>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '83;81;88;1;57;57;73;76;34;76',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            436 =>
                array (
                    'id' => 549,
                    'name' => 'Monkey Pirate Fille',
                    'description' => '<strong style="color:#FF00FF;">VARIANTE PIRATE spécial Nuage Monkey !!</strong>
Découvrez l\'excellentissime Variante Pirate du Monkey !! Celle-ci apporte en plus l\'exclusivité de transformer la Monture <a href="/site/shop_objet.php?giveme=189" class="fofo_link_extern" target="_blank">Nuage Monkey</a> en une incroyable version Galion Pirate !!<br />
Un pur Must-have !!
<br /><br />
<strong style="color:#BC6BD6;">50 Bananes offertes avec cette Variante XD</strong>
<br /><br />
<strong style="color:#BC6BD6;">Une variante Pirate qui transforme le Nuage Monkey en Galion !!</strong><br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Monkey Fille" !! Trop cool !!</b>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '83;81;88;63;57;57;57;76;34;76',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            437 =>
                array (
                    'id' => 550,
                    'name' => 'Amiral : Blablataille Navale',
                    'description' => '<strong style="color:#53a2ff;">RECOMPENSE BLABLATAILLE NAVALE</strong><br />
Devenez un grand Amiral, aux commandes d\'une incroyable flotte de guerre. Porte-Avion et lance-missile seront votre quotidien pour couler les flottes adverses à la Blablataille Navale !! Armez vos Canons, l\'Amiral est là !!
<br /><br />
<strong style="color:#BC6BD6;">L\'Amiral dirige une flotte entière et mène ses troupes à la victoire !! Une exclusivité Blablataille Navale !!</strong>
<br /><br />
<a href="/site/jeu_blablataille_navale.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/2.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Blablataille Navale</a>',
                    'price' => 10,
                    'token' => 450,
                    'special' => 'NAVAL_BATTLE',
                    'promo' => 0,
                    'color' => '58;81;89;3;15;76;73;3;15;76',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 28,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            438 =>
                array (
                    'id' => 552,
                    'name' => 'Hipster Garçon 2',
                    'description' => 'Un superbe look retro & jazzy pour ce magnifique skin Hipster Garçon, cool et décontracté !! Avec un design ultra soigné, c\'est le nouveau look à adopter sur Blablaland :)<br /><br />
<em>Action : Il est possible d\'afficher ou de masquer ses lunettes.</em>
<br>
<br>
<strong style="color:#BC6BD6;">Le look Hipster Jazzy arrive sur Blablaland !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '82;81;89;73;24;59;15;82;13;12',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 4,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            439 =>
                array (
                    'id' => 553,
                    'name' => 'Madame Pipi',
                    'description' => '<strong style="color:#FF00FF;">Récompense Madame Pipi !!</strong><br />
Gagne le Skin exclusif de Madame Pipi (1er de la série). Simplement excellent et ultra fun avec son Balai lorsqu\'elle danse. Un must-have à looter en donnant des pièces à Madame Pipi !!
<br />
<br />
<strong>Ce skin peut être gagné dans les Toilettes de l\'Irwish !</strong>
<br />
<a href="" class="fofo_link3_extern" target="_blank">Clique ici pour savoir comment le gagner</a>
<br>
<br>
<strong style="color:#BC6BD6;">Le premier skin qui se gagne avec Madame Pipi dans les Toilettes de l\'Irwish !!</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => 'IRWISH_TOILET',
                    'promo' => 0,
                    'color' => '90;83;88;45;52;59;43;18;45;50',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 6,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            440 =>
                array (
                    'id' => 554,
                    'name' => '"Racing" Madame Pipi',
                    'description' => '<strong style="color:#FF00FF;">Récompense Madame Pipi !!</strong><br />
Gagne le Skin exclusif de Madame Pipi version "Racing" (2ème de la série). Son balai est remplacé par un aspirateur. Un must-have parfait pour aller avec la Monture laveuse de supermarché !! A looter en donnant des pièces à Madame Pipi !!
<br />
<br />
<strong>Ce skin peut être gagné dans les Toilettes de l\'Irwish !</strong>
<br />
<a href="" class="fofo_link3_extern" target="_blank">Clique ici pour savoir comment le gagner</a>
<br>
<br>
<strong style="color:#BC6BD6;">Le deuxième skin qui se gagne avec Madame Pipi dans les Toilettes de l\'Irwish !!</strong>',
                    'price' => 1600,
                    'token' => 0,
                    'special' => 'IRWISH_TOILET',
                    'promo' => 0,
                    'color' => '90;1;88;45;52;59;81;18;45;50',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 6,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            441 =>
                array (
                    'id' => 555,
                    'name' => '"Ultimate" Madame Pipi',
                    'description' => '<strong style="color:#FF00FF;">Récompense Madame Pipi !!</strong><br />
Gagne le Skin exclusif de Madame Pipi version "Ultimate" (3ème et dernier de la série).<br />
C\'est la version ultime de Madame Pipi, et... comme tout super-héros, elle VOLE !! Inutile donc de dire que c\'est THE BIG ULTIMATE VERSION du nettoyage !!
<br />A looter en donnant des pièces à Madame Pipi !!
<br />
<br />
<strong>Ce skin peut être gagné dans les Toilettes de l\'Irwish !</strong>
<br />
<a href="" class="fofo_link3_extern" target="_blank">Clique ici pour savoir comment le gagner</a>
<br>
<br>
<strong style="color:#BC6BD6;">Le troisième (et dernier) skin qui se gagne avec Madame Pipi dans les Toilettes de l\'Irwish !! VERSION ULTIMATE !!</strong>',
                    'price' => 2000,
                    'token' => 0,
                    'special' => 'IRWISH_TOILET',
                    'promo' => 0,
                    'color' => '90;83;88;73;73;42;73;77;73;12',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 6,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            442 =>
                array (
                    'id' => 556,
                    'name' => 'Hipster Fille 2',
                    'description' => 'Un superbe look rétro & jazzy pour ce magnifique skin Hipster fille, cool et décontracté !! Avec un design ultra soigné, c\'est le nouveau look à adopter sur Blablaland :)<br /><br />
<em>Action : Il est possible d\'afficher ou de masquer son chapeau.</em>
<br>
<br>
<strong style="color:#BC6BD6;">Le look Hipster Jazzy arrive sur Blablaland !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '12;15;89;71;84;71;18;82;13;12',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 4,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            443 =>
                array (
                    'id' => 557,
                    'name' => 'Hipster Garçon 1',
                    'description' => 'Un superbe look rétro & Punk pour ce magnifique skin Hipster Garçon, cool, décontracté, et tendance !! Avec un design ultra soigné, c\'est le nouveau look à adopter sur Blablaland :)<br /><br />
<em>Action : Il est possible d\'afficher ou de masquer son casque.</em>
<br>
<br>
<strong style="color:#BC6BD6;">Le look Hipster Punk arrive sur Blablaland !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '12;48;89;81;34;59;38;15;46;46',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 4,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            444 =>
                array (
                    'id' => 558,
                    'name' => 'Hipster Fille 1',
                    'description' => 'Un superbe look rétro & Punk pour ce magnifique skin Hipster Fille, cool, décontractée, et tendance !! Avec un design ultra soigné, c\'est le nouveau look à adopter sur Blablaland :)<br /><br />
<em>Action : Il est possible d\'afficher ou de masquer ses lunettes.</em>
<br>
<br>
<strong style="color:#BC6BD6;">Le look Hipster Punk arrive sur Blablaland !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '79;15;68;13;18;73;15;84;1;12',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 4,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            445 =>
                array (
                    'id' => 561,
                    'name' => 'Exo Armure FireFox',
                    'description' => 'Le tant attendu Firefox débarque enfin, équipé de son exo-armure et d\'un redoutable lance-flamme.<br /><br />
Il possède 2 pouvoirs :<br />
<strong>- Mode canon :</strong> Une fois le pouvoir activé, il peut se propulser en flamme dans la direction choisie.<br />
<strong>- Son arme lance-flamme</strong> peut tirer des obus enflammés et brûler les Blablas autour de lui (limité à 3 flammes par joueur).
<br /><br />
<b>Bonus Tournament Fury :</b><br />
Toutes les heures, il gagne une recharge pour son arme en Tournament Fury !!
<br>
<br>
<strong style="color:#BC6BD6;">Un redoutable skin guerrier, ça va chauffer !</strong>',
                    'price' => 1800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '79;36;75;18;77;59;18;12;77;12',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 22,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            446 =>
                array (
                    'id' => 562,
                    'name' => 'Poupée Vaudou',
                    'description' => 'Transforme-toi en une redoutable Poupée Vaudou et inflige des maléfices aux autres Blablas. Clique sur un joueur, puis actions. Tu peux ainsi :<br />
- Te piquer avec une aiguille pour lui faire mal,<br />
- Te suspendre pour le faire léviter,<br />
- T\'immoler (et mourir) pour le faire brûler.<br />
<br />
<strong><img src="/images/shop/objects/209.jpg" align="absmiddle" style="width:45px;" /><br />Cadeau : Avec ce skin est offert la <a href="/site/shop_objet.php?giveme=209" target="_blank" class="fofo_link_extern">Peluche Doudou Vaudou</a> !!</strong>
<br /><br />
<strong style="color:#FF5001;">Inflige des maléfices aux autres Blablas avec la Poupée Vaudou !!</strong>',
                    'price' => 1800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '70;14;88;89;72;80;18;72;14;12',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            447 =>
                array (
                    'id' => 563,
                    'name' => 'Monster Girl',
                    'description' => 'Passe inaperçu sous la forme d\'une innocente petite fille et transforme-toi en un effroyable loup-garou pour surprendre ta proie ! Une fois la nuit tombée (et en Loup), crée ta meute en mordant de petits êtres de chair bien fraiche, qui porteront le nom de leur chef jusqu\'au petit matin !<br />
Le loup-garou nouvelle génération possède les mêmes pouvoirs que l\'ancien ; il est cependant plus rapide et saute plus haut.
<br />
<br />
Aperçu Transformation en Ultra Loup-Garou :<br /><br />
<img src="/images/shop/skin_563_more.png" />
<br /><br />
<strong style="color:#FF5001;">Contamine les blablas en les mordant une fois transformé en Loup-Garou</strong>
<br /><br />
<a href="/site/jeu_monstres_nuit.php" target="_blank" style="color:#bd0000;">Ce skin permet de jouer au mini-jeu "Invasion des Monstres de la Nuit" une fois transformé en loup.</a>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '1;73;13;58;77;89;43;58;67;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            448 =>
                array (
                    'id' => 565,
                    'name' => 'Nécromancien',
                    'description' => 'Deviens un puissant Nécromancien sur Blablaland et défie la mort !! Ce skin possède 3 grands pouvoirs :<br /><br />
- <b>Porte Blanche</b> : Devant une pierre tombale (une fois qu\'un blabla est mort), il peut invoquer une "Porte Blanche", téléport pour se rendre directement au Paradis sans mourir.<br />
- <b>Réveiller les morts</b> : Toujours devant une pierre tombale, le nécromant peut réveiller les morts (Attention, délire assuré !)<br />
- <b>Bouclier des Ténèbres</b> : Et son ultime pouvoir, le Nécromant peut à tout instant invoquer un "Bouclier des Ténèbres". Une fois posé, ce Bouclier protégera de la mort tous les Blablas qui se trouvent dedans. (A noter que le Nécromant doit rester dans le bouclier sans quoi il sera détruit). <br />Le Bouclier des Ténèbres protège de la mort, mais en contrepartie, il transformera les Blablas touchés en ombre ténébreuse !!
<br /><br />
Un skin redoutable qui défie la Mort !
<br /><br />
<strong style="color:#FF5001;">Crée des Portes Blanches, réveille les morts, et invoque des Boucliers des Ténèbres pour défier la Mort avec le Nécromant...<br />Redoutablement efficace !!</strong>',
                    'price' => 1800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '2;81;70;2;17;81;4;12;2;12',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            449 =>
                array (
                    'id' => 566,
                    'name' => 'Nécromancienne',
                    'description' => 'Deviens une puissante Nécromancienne sur Blablaland et défie la mort !! Ce skin possède 3 grands pouvoirs :<br /><br />
- <b>Porte Blanche</b> : Devant une pierre tombale (une fois qu\'un blabla est mort), elle peut invoquer une "Porte Blanche", téléport pour se rendre directement au Paradis sans mourir.<br />
- <b>Réveiller les morts</b> : Toujours devant une pierre tombale, la nécromancienne peut réveiller les morts (Attention, délire assuré !)<br />
- <b>Bouclier des Ténèbres</b> : Et son ultime pouvoir, la Nécromancienne peut à tout instant invoquer un "Bouclier des Ténèbres". Une fois posé, ce Bouclier protégera de la mort tous les Blablas qui se trouvent dedans. (A noter que la Nécromancienne doit rester dans le bouclier sans quoi il sera détruit). <br />Le Bouclier des Ténèbres protège de la mort, mais en contrepartie, il transformera les Blablas touchés en ombre ténébreuse !!
<br /><br />
Un skin redoutable qui défie la Mort !
<br /><br />
<strong style="color:#FF5001;">Crée des Portes Blanches, réveille les morts, et invoque des Boucliers des Ténèbres pour défier la Mort avec la Nécromancienne...<br />Redoutablement efficace !!</strong>',
                    'price' => 1800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '80;46;70;2;17;76;36;12;2;12',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            450 =>
                array (
                    'id' => 567,
                    'name' => 'Skateur',
                    'description' => 'Un super look très énergétique, au style parfait pour grinder les plaines de Blablaland. Cool et décontracté tout en étant très classe, c\'est le skin parfait pour squatter et faire du skate avec ton groupe d\'amis !!
<br /><br />
<strong>3 Designs possibles :</strong><br />
Vous pouvez choisir de porter soit le Bonnet (par défaut), soit les écouteurs Casque, soit une Casquette design. Ce qui fait 3 looks en un, à choisir via l\'interface de jeu selon vos envies et votre humeur !!
<br>
<br>
<strong style="color:#BC6BD6;">Un look énergique et customisable, un must pour skater & grinder les plaines de Blablaland !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '78;81;88;73;57;46;1;75;78;46',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 4,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            451 =>
                array (
                    'id' => 568,
                    'name' => 'Skateuse',
                    'description' => 'Un super look très énergétique, au style parfait pour grinder les plaines de Blablaland. Cool et décontracté tout en étant très classe, c\'est le skin parfait pour squatter et faire du skate en groupe d\'amis !!
<br /><br />
<strong>3 Designs possibles :</strong><br />
Vous pouvez choisir de porter soit le Bonnet (par défaut), soit les écouteurs Casque, soit une Casquette design. Ce qui fait 3 looks en un, à choisir via l\'interface de jeu selon vos envies et votre humeur !!
<br>
<br>
<strong style="color:#BC6BD6;">Un look énergique et customisable, un must pour skater & grinder les plaines de Blablaland !!</strong>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '76;42;88;46;36;53;57;1;53;36',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 4,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            452 =>
                array (
                    'id' => 569,
                    'name' => 'BBL-Solid Tech n400',
                    'description' => 'Découvrez le dernier robot de l\'incroyable série des N Solid Tech : Le N400 !! Héritier de toute la puissance de ses prédécesseurs, le N400 est de loin le plus abouti des NX. Doté de pouvoirs surpuissants, d\'une armure impressionante, d\'une arme redoutable, et d\'un vaisseau spatial privé, le N400 est sans faille, le plus redoutable.
<br /><br />
<strong>Ses pouvoirs :</strong>
<br /><br />
• Tremblement de terre : Une fois en l\'air (hors jetpack), appuie 2 fois sur la flèche du bas pour retomber en tornade et faire trembler le sol !
<br />
• Déplacements latéraux infinis (Dash) : En l\'air, appuie 2 fois sur la droite (ou la gauche) pour  un déplacement ultra rapide. Maintiens la touche enfoncée pour garder la vitesse ultra !
<br />
• Ultra Jump : Appuie 2 fois vers le haut pour te propulser dans les airs d\'un coup de réacteur !
<br />
• Réacteur JetPack stabilisé : Active le mode JetPack, le N400 pourra voler à l\'infini et rester stable dans les airs.
<br />
• Super Speed : Active ce pouvoir et clique sur un endroit de la map pour t\'y téléporter à la vitesse de la lumière.
<br />
• Sabre Sonic 2 : LE N400 possède une arme redoutable, bien connue des N300, et voici la version 2 !
<br /><br />
<strong>Le N400 est équipé d\'un vaisseau privé : </strong>
<br /><br />
Le N400 possède son propre vaisseau dont il peut prendre le contrôle en le pilotant et partir à la conquête de Blablaland !! De plus, il est possible d\'inviter du monde à bord (fonctionne comme une maison). Ses pouvoirs :
<br /><br />
• Se téléporter dans son vaisseau : D\'un simple clic, vous pouvez vous téléporter à l\'intérieur de votre vaisseau, où que vous soyez. Ceci vous permet d\'avoir votre propre base.
<br />
• Téléporter votre vaisseau : D\'un simple clic, vous pouvez faire apparaître votre vaisseau pile devant vous. Il sera téléporté là où vous êtes.
<br />
• Mode Pilotage : Une fois dans votre vaisseau, passez aux commandes. Vous serez alors en vue extérieure en pilotant votre vaisseau comme un skin.
<br />
• Intercom : En mode pilotage, utilisez l\'intercom pour discuter avec les personnes à bord de votre vaisseau.
<br />
• PNJ Professeur Orogandas : Son hologramme est présent dans le vaisseau, pour en apprendre plus sur les Solid Tech et sur le N400. Il ne sera vraiment bavard qu\'avec les N400.
<br /><br /><br />
Le N400 achève donc la série des N Solid Tech. De loin le plus redoutable, le plus complet et le plus puissant. Un skin mythique, légendaire... mais surtout collector !
<br /><br />
<strong style="color:#DD0000;">Uniquement jusqu\'au 22 Avril 2013 !!</strong><br /><br />
<strong style="color:#BC6BD6;">ÉDITION LIMITÉE à l\'achat, seulement du 11 au 22 Avril 2013... Après ces dates, le N400 ne sera plus jamais en vente !!</strong><br><br>
<a href="http://www.youtube.com/watch?v=oPEp8cxpKas&hd=1" class="fofo_link_extern" target="_blank">Clique ici pour voir la Vidéo N400 sur Youtube</a>',
                    'price' => 4000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '58;73;1;1;73;58;58;58;1;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 22,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            453 =>
                array (
                    'id' => 570,
                    'name' => 'Esprit de l\'hiver Fille',
                    'description' => 'Incarne un Esprit de l\'Hiver au look glacial. Capable de créer des plateformes de glace et de faire chuter la température, ces skins ont le pouvoir d\'invoquer en groupe l\'hiver et la neige.<br />
<br />
<strong>Plateforme de Glace : </strong>Ce pouvoir permet d\'invoquer une plateforme de glace dans les airs sur laquelle il est possible de marcher, la plateforme reste en place 20 secondes, ce qui permet d\'atteindre des lieux jusqu\'à présent inaccessibles.<br />
<a href="/images/blablaland/amelio/esprit_hiver.jpg" class="fofo_link_extern" style="font-size:10px;color:#AAAAAA;" target="_blank">(voir un aperçu de la plateforme de glace)</a>
<br />
<br />
<strong>Faire baisser la température : </strong>Lorsqu\'il danse, l\'Esprit de l\'Hiver fait baisser la température en jeu de plusieurs degrés : Si plusieurs Esprits dansent ensemble sur la même map, il est donc possible d\'invoquer l\'hiver, et s\'il pleut à ce moment, la pluie sera alors aussi transformée en neige !
<br>
<br>
<strong style="color:#BC6BD6;">Les Esprits de l\'Hiver peuvent créer des plateformes de glace sur lesquelles on peut marcher, et invoquer en groupe l\'hiver et la neige.</strong>',
                    'price' => 1800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '50;58;48;76;18;47;58;1;53;36',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 31,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            454 =>
                array (
                    'id' => 571,
                    'name' => 'Esprit de l\'hiver Garçon',
                    'description' => 'Incarne un Esprit de l\'Hiver au look glacial. Capable de créer des plateformes de glace et de faire chuter la température, ces skins ont le pouvoir d\'invoquer en groupe l\'hiver et la neige.<br />
<br />
<strong>Plateforme de Glace : </strong>Ce pouvoir permet d\'invoquer une plateforme de glace dans les airs sur laquelle il est possible de marcher, la plateforme reste en place 20 secondes, ce qui permet d\'atteindre des lieux jusqu\'à présent inaccessibles.<br />
<a href="/images/blablaland/amelio/esprit_hiver.jpg" class="fofo_link_extern" style="font-size:10px;color:#AAAAAA;" target="_blank">(voir un aperçu de la plateforme de glace)</a>
<br />
<br />
<strong>Faire baisser la température : </strong>Lorsqu\'il danse, l\'Esprit de l\'Hiver fait baisser la température en jeu de plusieurs degrés : Si plusieurs Esprits dansent ensemble sur la même map, il est donc possible d\'invoquer l\'hiver, et s\'il pleut à ce moment, la pluie sera alors aussi transformée en neige !
<br>
<br>
<strong style="color:#BC6BD6;">Les Esprits de l\'Hiver peuvent créer des plateformes de glace sur lesquelles on peut marcher, et invoquer en groupe l\'hiver et la neige.</strong>',
                    'price' => 1800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '59;58;48;48;76;53;57;1;53;36',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 31,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            455 =>
                array (
                    'id' => 574,
                    'name' => 'Sage Chinois [Collector]',
                    'description' => '<strong style="color:#ffa800;">SKIN COLLECTOR !!<br />Spécial Fête du Soleil Levant !!</strong><br />
Entre en lévitation avec le skin Sage d\'Asie, qui n\'est autre que le Marchand de la Fête du Soleil Levant qui prend place sur Blablaland pour fêter la nouvelle année Chinoise !!
<br />
<br />
<span><strong>COLLECTOR RARE du Fortune Cookie :</strong> Ce skin se gagne exclusivement en mangeant des <a href="/site/shop_objet.php?giveme=217" target="_blank" class="fofo_link_extern">Fortune Cookies</a> que l\'on ne trouve que pendant la Fête du Soleil Levant !! Il est donc très difficile à trouver !</span>
<br />
<br />
<strong style="color:#BC6BD6;">La sagesse et la rareté sont entre tes mains !! Manger des Fortune Cookies tu dois pour le posséder :)</strong>',
                    'price' => 3000,
                    'token' => 0,
                    'special' => 'COOKIE',
                    'promo' => 0,
                    'color' => '19;1;89;57;53;77;2;57;53;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 18,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            456 =>
                array (
                    'id' => 575,
                    'name' => 'Maître Samouraï [Collector]',
                    'description' => '<strong style="color:#ffa800;">SKIN COLLECTOR !!<br />Spécial Fête du Soleil Levant !!</strong><br />
Incarne un redoutable Maître Samouraï avec les mêmes pouvoirs que son confrère le <a href="/site/shop_skin.php?giveme=392&gr=10" target="_blank" class="fofo_link_extern">Grand Maître Ninja</a> !!
<br />
<br />
<span><strong>COLLECTOR RARE du Fortune Cookie :</strong> Ce skin se gagne exclusivement en mangeant des <a href="/site/shop_objet.php?giveme=217" target="_blank" class="fofo_link_extern">Fortune Cookies</a> que l\'on ne trouve que pendant la Fête du Soleil Levant !! Il est donc très difficile à trouver !</span>
<br />
<br />
<strong style="color:#BC6BD6;">Incarne un grand Maître Samouraï Collector ! Manger des Fortune Cookies tu dois pour le posséder :)</strong>',
                    'price' => 3000,
                    'token' => 0,
                    'special' => 'COOKIE',
                    'promo' => 0,
                    'color' => '77;57;88;1;1;73;1;77;73;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 18,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            457 =>
                array (
                    'id' => 576,
                    'name' => 'Moufette',
                    'description' => 'Deviens une trop jolie petite Moufette !! Derrière cette petite boule de poils toute douce et pleine d\'amour se cache quand même un être plein de farces qui peut lâcher un joli petit nuage de... beuuurk !! Mais les Moufettes en raffollent et aiment le traverser, les blablas eux... un peu moins !!<br />Un skin plein d\'amour, de poils doux, et d\'autre chose de derrière :)
<br>
<br>
<strong style="color:#BC6BD6;">Sous cette magnifique boule de poils d\'amour se cache une farçeuse qui sent la rose... !</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '59;82;16;15;68;53;57;1;53;36',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            458 =>
                array (
                    'id' => 577,
                    'name' => 'Lapin Bélier',
                    'description' => '
Deviens un petit Lapin Bélier, le plus mignon de tous les lapins !! Avec ses belles longues oreilles qui tombent et sa petite bouille trop mimi, il fera craquer tout le monde !! Le Lapin saute haut, et se déplace en enchaînant de jolis petits bonds, trop craquant !!
<br>
<br>
<strong style="color:#BC6BD6;">Incarne le plus mignon de tous les lapins !</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '67;82;69;48;76;53;57;1;53;36',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            459 =>
                array (
                    'id' => 578,
                    'name' => 'Hibou',
                    'description' => 'Houuuuu !! Incarne l\'animal de la sagesse. Le hibou adore se caler en hauteur dans un coin et regarder ce qui se trame autour de lui. Avec ses petites ailes, il plane dans les airs pour rendre ses mouvements plus fluides !! Hoou-Hooouuuuu !!
<br>
<br>
<strong style="color:#BC6BD6;">Un joli Hibou plein de sagesse et de calme !</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '70;75;82;15;14;53;57;1;53;36',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            460 =>
                array (
                    'id' => 579,
                    'name' => 'Fauconnier Garçon',
                    'description' => 'Devenez un maître Fauconnier, et maîtrisez cet incroyable animal volant. Si vous avez un <a href="/site/shop_objet.php?giveme=230" class="fofo_link_extern">Blibli Faucon</a>, celui-ci viendra se poser régulièrement sur votre tête lorsque vous ne bougez plus ou que vous dansez.
<br />
<br />
<strong style="color:#BC6BD6;">L\'art des Fauconniers se transmet de génération en génération, et désormais, il est à vous !</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '18;1;88;77;77;81;83;84;18;18',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 6,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            461 =>
                array (
                    'id' => 580,
                    'name' => 'Fauconnier Fille',
                    'description' => 'Devenez un maître Fauconnier, et maîtrisez cet incroyable animal volant. Si vous avez un <a href="/site/shop_objet.php?giveme=230" class="fofo_link_extern">Blibli Faucon</a>, celui-ci viendra se poser régulièrement sur votre tête lorsque vous ne bougez plus ou que vous dansez.
<br />
<br />
<strong style="color:#BC6BD6;">L\'art des Fauconniers se transmet de génération en génération, et désormais, il est à vous !</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '78;43;88;83;84;81;83;83;18;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 6,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            462 =>
                array (
                    'id' => 582,
                    'name' => 'Exo Armure ThunderBolt',
                    'description' => 'Le guerrier ThunderBolt débarque enfin, équipé de son exo-armure et d\'une arme éclair foudroyante.<br /><br />
Il possède 2 pouvoirs :<br />
<strong>- Mode éclair :</strong> En appuyant 2 fois de suite dans une direction (haut, droite ou gauche), le ThunderBolt se téléportera en éclair dans la direction choisie. Esquive imparable pour gagner en vitesse ou surprendre ses ennemis.<br />
<strong>- Son arme éclair</strong> déclenche une attaque foudroyante. Parfait pour paralyser et ralentir les joueurs en mode Tournament Fury, cette arme électrocutera tous les Blablas touchés !!
<br /><br />
<b>Bonus Tournament Fury :</b><br />
Toutes les heures, il gagne une recharge pour son arme en Tournament Fury !!
<br>
<br>
<strong style="color:#BC6BD6;">Avec ce redoutable guerrier, vous allez leur faire manger la Foudre !!</strong>',
                    'price' => 1800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '18;46;58;12;15;14;83;83;18;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 22,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            463 =>
                array (
                    'id' => 588,
                    'name' => 'Mysthoriä : Robot Vapeur',
                    'description' => '<strong style="color:#BC6BD6;">SKIN EXCLUSIF MYSTHORIÄ</strong><br />
Entrez dans la carcasse d\'un Robot Vapeur boosté à la Mysthoriä, capable de créer des nuages de charbon tout noir. Ce robot exclusif se fabrique dans la mine avec les déchets de la pioche et les catalyseurs.
<br /><br />
<strong style="color:#BC6BD6;">Fabriquez-vous ce Robot Vapeur en recyclant les objets piochés et les Catalyseurs !!</strong>
<br /><br />
<em>Cet objet se crée avec les déchets trouvés en piochant, et les Catalyseurs créés à partir de Mysthoriä. Rendez-vous sur la page du mini-jeu ou dans les mines de Blablaland pour en savoir plus.</em>
<br /><br />
<a href="/site/jeu_mysthoria.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/3.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Mysthoriä</a>',
                    'price' => 3000,
                    'token' => 0,
                    'special' => 'MYSTHORIA',
                    'promo' => 0,
                    'color' => '17;1;17;17;83;83;17;76;16;16',
                    'unavailable' => 1,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            464 =>
                array (
                    'id' => 589,
                    'name' => 'Chasseur de Mysthoriä',
                    'description' => 'Pars à la chasse de fragments de Mysthoriä et perce ses secrets. Crafte des skins et objets exclusifs, et atteins l\'ultime Drapeau !! Lorsqu\'ils piochent, les chasseurs de Mysthoriä ont une chance d\'avoir un coup de pioche supplémentaire offert !! Leurs pouvoirs de chasseur :
<br />
• <b>Poche de gaz :</b> Plante une pioche au sol et perce une poche de gaz qui te propulse dans les airs. Pratique pour aller en hauteur rapidement et efficacement !
<br />
• <b>Nuage de Charbon :</b> Plante une pioche au sol pour libérer un nuage de charbon qui teintera tous les blablas aux alentours en noir ! héhé !!
<br />
• <b>Bonus Pioche :</b> Comme indiqué plus haut, lorsqu\'il piochent, ils ont une chance d\'avoir un coup de pioche offert en plus !
<br /><br />
<strong style="color:#BC6BD6;">CADEAU : Pour l\'achat de ce skin, 30 Pioches offertes !! Pars à la chasse des fragments de Mysthoriä !!</strong>
<br /><br />
<a href="/site/jeu_mysthoria.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/3.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Mysthoriä</a>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '12;82;88;82;53;19;77;82;16;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            465 =>
                array (
                    'id' => 590,
                    'name' => 'Chasseuse de Mysthoriä',
                    'description' => 'Pars à la chasse de fragments de Mysthoriä et perce ses secrets. Crafte des skins et objets exclusifs, et atteins l\'ultime Drapeau !! Lorsqu\'ils piochent, les chasseurs de Mysthoriä ont une chance d\'avoir un coup de pioche supplémentaire offert !! Leurs pouvoirs de chasseur :
<br />
• <b>Poche de gaz :</b> Plante une pioche au sol et perce une poche de gaz qui te propulse dans les airs. Pratique pour aller en hauteur rapidement et efficacement !
<br />
• <b>Nuage de Charbon :</b> Plante une pioche au sol pour libérer un nuage de charbon qui teintera tous les blablas aux alentours en noir ! héhé !!
<br />
• <b>Bonus Pioche :</b> Comme indiqué plus haut, lorsqu\'il piochent, ils ont une chance d\'avoir un coup de pioche offert en plus !
<br /><br />
<strong style="color:#BC6BD6;">CADEAU : Pour l\'achat de ce skin, 30 Pioches offertes !! Pars à la chasse des fragments de Mysthoriä !!</strong>
<br /><br />
<a href="/site/jeu_mysthoria.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/3.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Mysthoriä</a>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '1;43;88;82;53;84;77;82;19;16',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            466 =>
                array (
                    'id' => 591,
                    'name' => 'Indien',
                    'description' => 'Entre dans la peau des nouveaux Indiens de Blablaland ! Avec un design super cool, l\'Indien possède de nombreux pouvoirs et capacités :<br />
<strong>• Tam-Tam :</strong> Il peut jouer du Tam-Tam, et se synchroniser avec les autres Indiens qui en jouent aussi pour une parfaite harmonie !
<br />
<strong>• Danse de la Pluie :</strong> Lorsqu\'il danse, l\'Indien invoque le dieu de l\'eau dans sa map, plus il y aura d\'Indiens qui dansent, plus il y a de chance pour qu\'il pleuve !
<br />
<strong>• Message Fumée :</strong> L\'Indien peut écrire un message secret avec du feu que seuls les Indiens 2 (garçon ou fille) ou le Chaman Indien peuvent voir et comprendre ! <em>(Pour écrire un message secret en Indien, vous pouvez soit utiliser le pouvoir, soit taper "/fumee votre message" en jeu)</em>
<br /><br />
<strong style="color:#BC6BD6;">Incarne un Indien nouvelle Génération, en plus, il est encore plus fun dans la map Tipi !!</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '2;81;88;84;71;69;69;12;19;16',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            467 =>
                array (
                    'id' => 592,
                    'name' => 'Indienne',
                    'description' => 'Entre dans la peau des nouveaux Indiens de Blablaland ! Avec un design super cool, l\'Indienne possède de nombreux pouvoirs et capacités :<br />
<strong>• Tam-Tam :</strong> Elle peut jouer du Tam-Tam, et se synchroniser avec les autres Indiens qui en jouent aussi pour une parfaite harmonie !
<br />
<strong>• Danse de la Pluie :</strong> Lorsqu\'elle danse, l\'Indienne invoque le dieu de l\'eau dans sa map, plus il y aura d\'Indiens qui dansent, plus il y a de chance pour qu\'il pleuve !
<br />
<strong>• Message Fumée :</strong> L\'Indienne peut écrire un message secret avec du feu que seuls les Indiens 2 (garçon ou fille) ou le Chaman Indien peuvent voir et comprendre ! <em>(Pour écrire un message secret en Indien, vous pouvez soit utiliser le pouvoir, soit taper "/fumee votre message" en jeu)</em>
<br /><br />
<strong style="color:#BC6BD6;">Incarne une Indienne nouvelle Génération, en plus, elle est encore plus fun dans la map Tipi !!</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '2;81;88;84;71;69;69;12;19;16',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            468 =>
                array (
                    'id' => 593,
                    'name' => 'Chaman Indien ',
                    'description' => 'Entre dans la peau d\'un Chaman Indien ! Avec un design mysthérieux et charismatique, le Chaman Indien possède de nombreux pouvoirs et capacités :<br />
<strong>• Invocation de Totem :</strong> Le Chaman Indien peut invoquer des Totems en jeu sur lesquels il est possible de monter ! Parfait pour s\'imposer et montrer à tous qui est le plus grand des Chamans !
<br />
<strong>• Danse de la Pluie :</strong> Lorsqu\'il danse, le Chaman invoque le dieu de l\'eau dans sa map, plus il y aura d\'Indiens qui dansent, plus il y a de chance pour qu\'il pleuve !
<br />
<strong>• Message Fumée :</strong> L\'Indien Chaman peut écrire un message secret avec du feu que seuls les Indiens 2 (garçon ou fille) ou le Chaman Indien peuvent voir et comprendre ! <em>(Pour écrire un message secret en Indien, vous pouvez soit utiliser le pouvoir, soit taper "/fumee votre message" en jeu)</em>
<br /><br />
<strong style="color:#BC6BD6;">Incarne un Chaman Indien et pose des Totems, il est encore plus fun dans la map Tipi !!</strong>',
                    'price' => 1600,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '45;71;88;71;69;84;69;14;70;12',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            469 =>
                array (
                    'id' => 595,
                    'name' => 'Ondine',
                    'description' => 'Entre dans la peau d\'une Ondine, magnifique Sirène qui ne se trouve que dans les fins fonds de l\'océan de Blablaland, en échange de Perles de la quête du Pirate. Ce skin possède 2 états :
<br />
<br />
<strong>• Dans l\'eau :</strong> ce skin se transforme en une merveilleuse Sirène, capable de rendre amoureux les personnages marins grâce à son chant. Et en allant voir la Sirène des Perles, il est aussi possible de récupérer un pouvoir pour sauter très haut hors de l\'eau ! (avec ce pouvoir et assez d\'élan, tu peux sauter par-dessus le phare pour rejoindre l\'autre côté)
<br />
<br />
<strong>• Sur Terre : L\'Ondine redevient une fille pour pouvoir se déplacer normalement</strong>
<br /><br />
<strong style="color:#BC6BD6;">Ondine est un skin qu\'il faut gagner avec la quête du Pirate, rendez-vous à la Sirène (dans l\'océan sous la map Tortue). <a href="/site/jeu_pirate.php" target="_blank">Cliquez ici pour en savoir plus</a></strong>',
                    'price' => 2000,
                    'token' => 0,
                    'special' => 'PIRATE_QUEST',
                    'promo' => 0,
                    'color' => '75;27;89;48;77;27;69;14;70;12',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 3,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            470 =>
                array (
                    'id' => 596,
                    'name' => 'Ondin',
                    'description' => 'Entre dans la peau d\'un Ondin, magnifique Sirène qui ne se trouve que dans les fins fonds de l\'océan de Blablaland, en échange de Perles de la quête du Pirate. Ce skin possède 2 états :
<br />
<br />
<strong>• Dans l\'eau :</strong> ce skin se transforme en une merveilleuse Sirène, capable de rendre amoureux les personnages marins grâce à son chant. Et en allant voir la Sirène des Perles, il est aussi possible de récupérer un pouvoir pour sauter très haut hors de l\'eau ! (avec ce pouvoir et assez d\'élan, tu peux sauter par-dessus le phare pour rejoindre l\'autre côté)
<br />
<br />
<strong>• Sur Terre : L\'Ondin redevient un garçon pour pouvoir se déplacer normalement</strong>
<br /><br />
<strong style="color:#BC6BD6;">Ondin est un skin qu\'il faut gagner avec la quête du Pirate, rendez-vous à la Sirène (dans l\'océan sous la map Tortue). <a href="/site/jeu_pirate.php" target="_blank">Cliquez ici pour en savoir plus</a></strong>',
                    'price' => 2000,
                    'token' => 0,
                    'special' => 'PIRATE_QUEST',
                    'promo' => 0,
                    'color' => '81;81;89;40;40;84;69;14;70;12',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 3,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            471 =>
                array (
                    'id' => 597,
                    'name' => 'BlablaCool Garçon',
                    'description' => 'Retour dans les années 60 avec ce skin à l\'allure douce et décontractée. Rassemble tes amis autour d\'un feu et partage un moment agréable avec eux grâce au petit morceau joué à la guitare lorsque tu danses.
<br /><br />
<strong style="color:#BC6BD6;">Un skin Peace and love qui plaira à tous ceux qui s\'unissent pour la non-violence !</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '81;81;89;16;73;81;81;84;19;16',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 4,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            472 =>
                array (
                    'id' => 598,
                    'name' => 'BlablaCool Fille',
                    'description' => 'Retour dans les années 60 avec ce skin à l\'allure douce et décontractée. Rassemble tes amis autour d\'un feu et partage un moment agréable avec eux grâce au petit morceau joué à la guitare lorsque tu danses.
<br /><br />
<strong style="color:#BC6BD6;">Un skin Peace and love qui plaira à tous ceux qui s\'unissent pour la non-violence !</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '82;26;89;84;84;59;16;84;19;16',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 4,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            473 =>
                array (
                    'id' => 601,
                    'name' => 'Gardien du Savoir Céleste',
                    'description' => 'Deviens un Gardien du Savoir Céleste, détenteur de l\'histoire et des prophéties du Royaume des Gardiens. <br />
<br />
Ces êtres ont la faculté de déployer de grandes Ailes Célestes qui demandent une certaine maîtrise, mais qui, une fois acquise, leur permettent de se déplacer de manière majestueuse, rapide et fluide :<br />
<br />
<em>Une fois vos Ailes déployées : lorsque vous sautez, gardez la flèche du haut appuyée, le Céleste se mettra à planer. Après une seconde, ses Ailes s\'orientent vers le haut vous indiquant que vous pouvez relâcher la touche et appuyer de nouveau vers le haut pour faire un battement d\'Ailes et reprendre de l\'élan. Maintenez de nouveau la touche, et ainsi de suite. Conservez le rythme pour devenir digne du Pouvoir des Célestes !</em>
<br /><br />
<strong style="color:#BC6BD6;">Les Gardiens du Savoir Célestes sont précieux. Acclamons leur venue !</strong>',
                    'price' => 1800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '48;46;68;81;44;80;74;77;59;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 1,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            474 =>
                array (
                    'id' => 602,
                    'name' => 'Gardienne du Savoir Céleste',
                    'description' => 'Deviens un Gardien du Savoir Céleste, détenteur de l\'histoire et des prophéties du Royaume des Gardiens. <br />
<br />
Ces êtres ont la faculté de déployer de grandes Ailes Célestes qui demandent une certaine maîtrise, mais qui, une fois acquise, leur permettent de se déplacer de manière majestueuse, rapide et fluide :<br />
<br />
<em>Une fois vos Ailes déployées : lorsque vous sautez, gardez la flèche du haut appuyée, le Céleste se mettra à planer. Après une seconde, ses Ailes s\'orientent vers le haut vous indiquant que vous pouvez relâcher la touche et appuyer de nouveau vers le haut pour faire un battement d\'Ailes et reprendre de l\'élan. Maintenez de nouveau la touche, et ainsi de suite. Conservez le rythme pour devenir digne du Pouvoir des Célestes !</em>
<br /><br />
<strong style="color:#BC6BD6;">Les Gardiens du Savoir Célestes sont précieux. Acclamons leur venue !</strong>',
                    'price' => 1800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '48;46;68;81;44;80;74;77;59;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 1,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            475 =>
                array (
                    'id' => 603,
                    'name' => 'Clown Diabolique du Manoir Hanté',
                    'description' => '<strong style="color:#a50b00;">RECOMPENSE MANOIR HANTE</strong><br />
Entre dans la peau de ce Clown Diabolique et fais vivre leur pire cauchemar à tes amis !! Avec ses dents pointues et sa fleur fanée, on se demande bien de quel cirque il a pu être éjecté... Brrrr... <br /><br />
Ses pouvoirs :
<br /><br />
<strong>• Tronçonner: </strong>S\'il s\'approche de vous, méfiez-vous qu\'il ne dégaine pas son abominable tronçonneuse pour vous transformer en zombie dégoulinant.
<br /><br>
<strong>• Boost :</strong> Appuie sur le boost pour que le Clown Diabolique devienne incontrôlable en enfourchant sa tronçonneuse !! Il devient super rapide !! <br>
Le skin est vendu avec un pack de <a href="/site/shop_objet.php?giveme=152" target="_blank" class="fofo_link_extern">10 Nitro,</a> qui te permettent d\'utiliser le Boost.
<br /><br />
<strong style="color:#a50b00;">Approche-toi gentiment d\'un blabla et dégaine ton arme fatale !!</strong>
<br /><br />
<a href="/site/jeu_manoir.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/4.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Manoir Hanté</a>',
                    'price' => 0,
                    'token' => 450,
                    'special' => 'HAUNTED_MANOR',
                    'promo' => 0,
                    'color' => '76;1;59;73;45;84;78;44;59;15',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            476 =>
                array (
                    'id' => 604,
                    'name' => 'Spectre Garcon',
                    'description' => 'Prends possession du Spectre, fantôme mystérieux et funèbre et reviens sur Blablaland pour hanter les vivants !<br /><br />
<strong>• Pose ta tombe où tu le souhaites. </strong>Lorsque tu actives ta tombe, une carte du monde de Blablaland s\'ouvre et des maps encadrées de rouge clignotent. Ce sont toutes les maps où des tombes ont été posées et où tu peux te téléporter !! Tout un réseau de pierres tombales à ta disposition !<br /><br />
• Si un Blabla non spectre active ta tombe, <strong>un fantôme à ton image et à ton nom vient le hanter pendant 30 secondes !!!</strong><em> (dans la limite de 3 fantômes maximum par blabla hanté)</em><br /><br />
<strong>• Si tu meurs, tu es téléporté directement à l\'endroit où tu as posé ta tombe,</strong> sans passer par le Paradis !
<br /><br />
<strong style="color:#a50b00;">Incarne le côté sombre des fantômes sur Blablaland !</strong>',
                    'price' => 1800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '47;47;59;85;44;80;74;77;59;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            477 =>
                array (
                    'id' => 605,
                    'name' => 'Spectre Fille',
                    'description' => 'Prends possession du Spectre, fantôme mystérieux et funèbre et reviens sur Blablaland pour hanter les vivants !<br /><br />
<strong>• Pose ta tombe où tu le souhaites. </strong>Lorsque tu actives ta tombe, une carte du monde de Blablaland s\'ouvre et des maps encadrées de rouge clignotent. Ce sont toutes les maps où des tombes ont été posées et où tu peux te téléporter !! Tout un réseau de pierres tombales à ta disposition !<br /><br />
• Si un Blabla non spectre active ta tombe, <strong>un fantôme à ton image et à ton nom vient le hanter pendant 30 secondes !!!</strong><em> (dans la limite de 3 fantômes maximum par blabla hanté)</em><br /><br />
<strong>• Si tu meurs, tu es téléporté directement à l\'endroit où tu as posé ta tombe,</strong> sans passer par le Paradis !
<br /><br />
<strong style="color:#a50b00;">Incarne le côté sombre des fantômes sur Blablaland !</strong>',
                    'price' => 1800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '59;47;59;47;85;40;59;77;59;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            478 =>
                array (
                    'id' => 606,
                    'name' => 'Chasseur',
                    'description' => 'Protège Blablaland en incarnant un Chasseur de Monstres ! <br />
<br />
Les Chasseurs ont la formidable capacité de traquer les Monstres de la Nuit et de soigner les Blablas contaminés par les Monstres.<br />
<br />
Leurs pouvoirs :
<br /><br />
<strong>• Traquer: </strong>Camoufle-toi sous une bâche pour passer en mode tir. Une cible remplace ton curseur. Tu peux maintenant tirer des carreaux avec ton arbalète :
<br />Si tu touches un monstre, tu le neutralises pendant quelques secondes,
<br />Si tu touches un Blabla contaminé, tu le soignes et il reprend son apparence originelle.
<br /><br />
<strong>• Vision améliorée : </strong>Les Monstres apparaissent entourés d\'un halo bleu.
<br /><br />
<strong style="color:#a50b00;">Grâce à ces redoutables Chasseurs, repousse les hordes monstrueuses.</strong>
<br /><br />
<a href="/site/jeu_monstres_nuit.php" target="_blank" style="color:#bd0000;">Ce skin permet de jouer au mini-jeu "Invasion des Monstres de la Nuit"</a>',
                    'price' => 1700,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '1;82;89;12;71;18;14;71;82;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            479 =>
                array (
                    'id' => 607,
                    'name' => 'Chasseuse',
                    'description' => 'Protège Blablaland en incarnant un Chasseur de Monstres ! <br />
<br />
Les Chasseurs ont la formidable capacité de traquer les Monstres de la Nuit et de soigner les Blablas contaminés par les Monstres.<br />
<br />
Leurs pouvoirs :
<br /><br />
<strong>• Traquer: </strong>Camoufle-toi sous une bâche pour passer en mode tir. Une cible remplace ton curseur. Tu peux maintenant tirer des carreaux avec ton arbalète :
<br />Si tu touches un monstre, tu le neutralises pendant quelques secondes,
<br />Si tu touches un Blabla contaminé, tu le soignes et il reprend son apparence originelle.
<br /><br />
<strong>• Vision améliorée : </strong>Les Monstres apparaissent entourés d\'un halo bleu.
<br /><br />
<strong style="color:#a50b00;">Grâce à ces redoutables Chasseurs, repousse les hordes monstrueuses.</strong>
<br /><br />
<a href="/site/jeu_monstres_nuit.php" target="_blank" style="color:#bd0000;">Ce skin permet de jouer au mini-jeu "Invasion des Monstres de la Nuit"</a>',
                    'price' => 1700,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '12;46;89;70;14;18;82;12;71;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            480 =>
                array (
                    'id' => 608,
                    'name' => 'Renard',
                    'description' => 'Voici un joli renard qui saura vous apprivoiser par son regard doux et son pelage qu\'on a envie de caresser.<br /><br /> Adopte cette frimousse trop mignonne pour te balader sur Blablaland !!! <br> <br> <strong style="color:#BC6BD6;">Incarne le plus malin de tous les animaux de la forêt !</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '12;76;75;12;59;12;68;12;71;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            481 =>
                array (
                    'id' => 609,
                    'name' => 'Castor',
                    'description' => 'Deviens cet adorable rongeur, le castor aux longues dents !
<br><br>
Son look tout en rondeur avec ses petites oreilles donne envie de le cajoler.<br>
Grâce à ses pieds palmés et son épais pelage, il nage plus vite que les autres animaux.
<br>
<br>
<strong style="color:#BC6BD6;">A toi d\'explorer les eaux de Blablaland avec cette mignonne boule de poils !</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '82;12;12;15;16;80;82;12;71;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            482 =>
                array (
                    'id' => 610,
                    'name' => 'Daim',
                    'description' => 'Ce gracieux animal est fait pour toi !
<br><br>
Avec ses bois palmés et ses petites taches, il est parfait pour courir dans les plaines de Blablaland.<br>
Agile, il saute plus haut que les autres animaux.
<br>
<br>
<strong style="color:#BC6BD6;">Charme les autres animaux avec ce ravissant Daim :)</strong>',
                    'price' => 1000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '88;14;84;70;70;14;82;12;71;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            483 =>
                array (
                    'id' => 612,
                    'name' => 'Fille du Froid',
                    'description' => 'Parcours les plaines enneigées de Blablaland, bien au chaud avec la Fille du Froid ! Elle s\'est emmitouflée chaudement pour affronter cet hiver rude et elle détient le magnifique pouvoir de faire tomber la pluie où bon lui semble !!!<br />
<br />
<br />
<strong>Faire baisser la température et faire pleuvoir : </strong>Lorsqu\'elle danse, la Fille du Froid fait baisser la température en jeu de plusieurs degrés et fait pleuvoir sur la map ! Si plusieurs skins du Froid dansent ensemble sur la même map, il est donc possible d\'invoquer l\'hiver, et s\'il pleut à ce moment, la pluie sera alors aussi transformée en neige !
<br>
<br>
<strong style="color:#BC6BD6;">Un skin adorable et puissant pour incarner le peuple des étendues glacées !</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '68;44;81;58;7;82;73;76;71;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 37,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            484 =>
                array (
                    'id' => 613,
                    'name' => 'Garçon du Froid',
                    'description' => 'Découvre le garçon du froid et sa chapka ! Il est prêt à affronter le grand froid et il n\'a peur de rien ! Pars vite explorer les coins enneigés de Blablaland en sa compagnie et fais tomber la neige où tu veux grâce à son pouvoir !
<br />
<br />
<strong>Faire baisser la température et faire pleuvoir : </strong>Lorsqu\'il danse, le Garçon du Froid fait baisser la température en jeu de plusieurs degrés et fait pleuvoir sur la map ! Si plusieurs skins du Froid dansent ensemble sur la même map, il est donc possible d\'invoquer l\'hiver, et s\'il pleut à ce moment, la pluie sera alors aussi transformée en neige !
<br>
<br>
<strong style="color:#BC6BD6;">Un skin d\'aventurier du pays des glaciers, puissant et indispensable !</strong>

',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '68;44;81;58;7;82;14;12;71;59',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 37,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            485 =>
                array (
                    'id' => 615,
                    'name' => 'Fille Viking',
                    'description' => 'Remonte le temps et pars à l\'aventure avec les Vikings ! Incarne cette grande guerrière et montre à tout le monde que tu n\'as peur de rien !!!
<br />
<br />
<strong>Armée de ta puissante hache, que tu peux choisir d\'afficher ou non, parcours les contrées sauvages de Blablaland à la recherche de terres à conquérir !</strong>
<br><br>
<strong style="color:#BC6BD6;">Un skin plein de charme pour une plongée dans les temps les plus anciens ! A posséder absolument !!</strong>

',
                    'price' => 1600,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '76;46;68;25;46;84;90;88;84;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            486 =>
                array (
                    'id' => 616,
                    'name' => 'Garcon Viking',
                    'description' => 'Remonte le temps et pars à l\'aventure avec les Vikings! Deviens un puissant et valeureux Viking sur Blablaland et combats tes ennemis avec férocité !
<br />
<br />
<strong>Armé de ta puissante hache, que tu peux choisir d\'afficher ou non, parcours les contrées sauvages de Blablaland à la recherche de terres à conquérir !</strong>
<br><br>
<strong style="color:#BC6BD6;">Un skin ultime pour une plongée dans les temps les plus anciens ! A posséder absolument !!</strong>

',
                    'price' => 1600,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '75;84;89;90;82;73;70;17;14;90',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            487 =>
                array (
                    'id' => 618,
                    'name' => 'Kitsune',
                    'description' => 'Ce petit renard à plusieurs queues, à l\'allure douce et vaporeuse est un Kitsune. C\'est un esprit magique capable de prendre plusieurs formes.
<br /><br />
Découvre ses formidables pouvoirs :<br /><br />
<strong>• Changement d\'apparence :</strong> le Kitsune peut se transformer en humain fille ou garçon, selon votre envie et de façon illimitée !!!
<br /><br />
<strong>• Création d\'illusion :</strong> le Kitsune est capable de copier un skin de la map où vous vous trouvez et de parler à votre place.
<br /><br />
<strong style="color:#BC6BD6;">Un esprit fantastique redoutable dont vous ne pourrez plus vous passer !! Adoptez-le sans plus tarder !</strong>',
                    'price' => 2100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '59;82;68;73;75;45;48;88;84;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 18,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            488 =>
                array (
                    'id' => 619,
                    'name' => 'Tanuki',
                    'description' => 'Ne vous fiez pas à l\'allure inoffensive de cet espèce de raton-laveur affublé d\'un chapeau de paille et accompagné de sa gourde de Saké <em>(attention, l\'abus d\'alcool est dangereux pour la santé !)</em>
<br /><br />
Ce yokai <em>(esprit)</em> de la forêt est symbole de paix et de prospérité ...<br /><br />MAIS il est aussi et surtout capable de <strong>courber l\'espace et le temps en produisant une bulle qui ralentit les déplacements !! </strong> <br /><br />
<strong style="color:#BC6BD6;">Un skin fun et furieusement décalé pour les amoureux du genre, mémorable !</strong>


',
                    'price' => 1800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '18;81;90;84;14;70;73;58;84;27',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 18,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            489 =>
                array (
                    'id' => 623,
                    'name' => 'Chevalier Horia',
                    'description' => '<strong style="color:#BC6BD6;">SKIN EXCLUSIF HORIA</strong><br /><br />
Marque ta différence en incarnant le légendaire Chevalier de Horia et utilise ton épée pour corriger tous les manants qui te houspillent !
<br /><br />
<strong style="color:#BC6BD6;">Débloque ce skin en jouant à Horia, the Mystic Battle !!</strong>
<br /><br />
<em>Tue 1000 ennemis sur Horia pour gagner ce skin.</em>
<br /><br />
<a href="http://horia.niveau99.com" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/pitigemme.png" align="absmiddle" border="0" /> En savoir plus sur Horia, the Mystic Battle.</a>',
                    'price' => 2500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '90;73;16;73;17;17;73;84;76;58',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 43,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            490 =>
                array (
                    'id' => 624,
                    'name' => 'Dragon Horia',
                    'description' => '<strong style="color:#BC6BD6;">SKIN EXCLUSIF HORIA</strong><br /><br />
Marque ta différence en incarnant le Dragon vert de Horia ! Méfie-toi des Chevaliers qui traquent les Dragons !!
<br /><br />
<strong style="color:#BC6BD6;">Débloque ce skin en jouant à Horia, the Mystic Battle !!</strong>
<br /><br />
<em>Tue 500 dragons sur Horia pour gagner ce skin.</em>
<br /><br />
<a href="http://horia.niveau99.com" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/pitigemme.png" align="absmiddle" border="0" /> En savoir plus sur Horia, the Mystic Battle.</a>',
                    'price' => 2000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '81;59;27;81;70;73;73;58;84;27',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 43,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            491 =>
                array (
                    'id' => 625,
                    'name' => 'Boss Horia',
                    'description' => '<strong style="color:#BC6BD6;">SKIN EXCLUSIF HORIA</strong><br /><br />
Marque ta férocité en incarnant le Boss Dragon de Horia et brûle les Chevaliers qui veulent te voler ton trésor !!
<br /><br />
<strong style="color:#BC6BD6;">Débloque ce skin en jouant à Horia, the Mystic Battle !!</strong>
<br /><br />
<em>Tue 100 Boss Dragon Rouge sur Horia pour gagner ce skin.</em>
<br /><br />
<a href="http://horia.niveau99.com" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/pitigemme.png" align="absmiddle" border="0" /> En savoir plus sur Horia, the Mystic Battle.</a>',
                    'price' => 2000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '81;77;73;81;90;73;73;58;84;27',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 43,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            492 =>
                array (
                    'id' => 627,
                    'name' => 'Mage Garçon',
                    'description' => 'Tu as assez étudié, place à l\'action !!!
<br /><br />
<strong>Avec son bâton et son grand chapeau, le Mage utilise son intelligence et les éléments pour carboniser les aberrations du Donjon !!!</strong>
<br><br>
Sur Blablaland, le Mage repousse les blablas avec son bâton.<br /><br />
<strong style="color:#BC6BD6;">Montre ton savoir en utilisant tes puissants sorts !! </strong>
<br /><br /><br />
<strong style="font-size:14px">Ce skin est utilisable dans le Donjon :</strong><br /><br />
• <strong style="font-size:14px">Vie : <img src="/images/donjon/vie_mage.png" align="absmiddle" border="0" /> </strong><br /><br />
• <strong style="font-size:14px">Force : <img src="/images/donjon/force_mage.png" align="absmiddle" border="0" /></strong><br /><br />
• <strong style="font-size:14px">Agilité : <img src="/images/donjon/vitesse_mage.png" align="absmiddle" border="0" /></strong><br /><br />
• <strong style="font-size:14px">Spécial :</strong> <br />
- Ton attaque projette une boule de feu pendant 10 secondes,<br />
- Les alliés proches peuvent réutiliser leur coup spécial s\'ils s\'en sont déjà servi sur la map.
<br /><br />
<a href="/site/jeu_donjon.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/5.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Donjon</a>',
                    'price' => 1950,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '17;47;89;77;73;81;2;4;18;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 33,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            493 =>
                array (
                    'id' => 628,
                    'name' => 'Mage Fille',
                    'description' => 'Tu as assez étudié, place à l\'action !!!
<br /><br />
<strong>Avec son bâton et son grand chapeau, le Mage utilise son intelligence et les éléments pour carboniser les aberrations du Donjon !!!</strong>
<br><br>
Sur Blablaland, le Mage repousse les blablas avec son bâton.<br /><br />
<strong style="color:#BC6BD6;">Montre ton savoir en utilisant tes puissants sorts !! </strong>
<br /><br /><br />
<strong style="font-size:14px">Ce skin est utilisable dans le Donjon :</strong><br /><br />
• <strong style="font-size:14px">Vie : <img src="/images/donjon/vie_mage.png" align="absmiddle" border="0" /> </strong><br /><br />
• <strong style="font-size:14px">Force : <img src="/images/donjon/force_mage.png" align="absmiddle" border="0" /></strong><br /><br />
• <strong style="font-size:14px">Agilité : <img src="/images/donjon/vitesse_mage.png" align="absmiddle" border="0" /></strong><br /><br />
• <strong style="font-size:14px">Spécial :</strong> <br />
- Ton attaque projette une boule de feu pendant 10 secondes,<br />
- Les alliés proches peuvent réutiliser leur coup spécial s\'ils s\'en sont déjà servi sur la map.
<br /><br />
<a href="/site/jeu_donjon.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/5.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Donjon</a>',
                    'price' => 1950,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '76;47;89;77;73;82;2;4;18;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 33,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            494 =>
                array (
                    'id' => 629,
                    'name' => 'Aventurier débutant',
                    'description' => '<strong style="color:#303030;">RECOMPENSE DONJON</strong><br /><br />
Pars à l\'aventure sur Blablaland armé de ton épée en bois et de ton bouclier !
<br /> <br />
<strong> Utilise ton épée pour t\'entrainer sur les autres blablas à repousser les monstres !!!</strong>
<br><br>
<strong style="color:#BC6BD6;">Ce skin est le skin garçon de base du mini-jeu du Donjon !! </strong><br /><br />
<a href="/site/jeu_donjon.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/5.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Donjon</a>
',
                    'price' => 10,
                    'token' => 450,
                    'special' => 'DUNGEON',
                    'promo' => 0,
                    'color' => '81;82;88;82;84;84;78;88;84;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 33,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            495 =>
                array (
                    'id' => 630,
                    'name' => 'Aventurière débutante',
                    'description' => '<strong style="color:#303030;">RECOMPENSE DONJON</strong><br /><br />
Pars à l\'aventure sur Blablaland armée de ton épée en bois et de ton bouclier !
<br /> <br />
<strong> Utilise ton épée pour t\'entrainer sur les autres blablas à repousser les monstres !!!</strong>
<br><br>
<strong style="color:#BC6BD6;">Ce skin est le skin fille de base du mini-jeu du Donjon !! </strong><br /><br />
<a href="/site/jeu_donjon.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/5.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Donjon</a>
',
                    'price' => 10,
                    'token' => 450,
                    'special' => 'DUNGEON',
                    'promo' => 0,
                    'color' => '81;82;88;82;84;84;77;88;84;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 33,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            496 =>
                array (
                    'id' => 631,
                    'name' => 'Elfe Garcon',
                    'description' => 'Que serait l\'Elfe sans son arc ?!
<br /><br />
<strong>Equipé de son fidèle arc et de son glaive elfique, l\'Elfe utilise son agilité dans le Donjon pour terrasser les monstres qui y ont élu domicile !</strong>
<br><br>
Sur Blablaland, l\'Elfe repousse les blablas avec son glaive.<br /><br />
<strong style="color:#BC6BD6;">Vitesse et Dextérité sont tes plus grandes alliées ! </strong>
<br /><br />
<br /><br /><br />
<strong style="font-size:14px">Ce skin est utilisable dans le Donjon :</strong><br /><br />
• <strong style="font-size:14px">Vie : <img src="/images/donjon/vie_elfe.png" align="absmiddle" border="0" /> </strong><br /><br />
• <strong style="font-size:14px">Force : <img src="/images/donjon/force_elfe.png" align="absmiddle" border="0" /></strong><br /><br />
• <strong style="font-size:14px">Agilité : <img src="/images/donjon/vitesse_elfe.png" align="absmiddle" border="0" /></strong><br /><br />
• <strong style="font-size:14px">Spécial :</strong> <br />
- Tant que tu es immobile, passe en mode tir <em>(clique sur le monstre pour décocher une flèche).</em> Si tu bouges, tu ne peux plus tirer à l\'arc !<br />
- Les joueurs proches gagnent un bonus d\'un point à la puissance pendant 20 secondes.
<br /><br />
<a href="/site/jeu_donjon.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/5.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Donjon</a>
',
                    'price' => 1950,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '80;46;68;27;76;82;84;88;48;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 33,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            497 =>
                array (
                    'id' => 632,
                    'name' => 'Elfe Fille',
                    'description' => 'Que serait l\'Elfe sans son arc ?!
<br /><br />
<strong>Equipée de son fidèle arc et de son glaive elfique, l\'Elfe utilise son agilité dans le Donjon pour terrasser les monstres qui y ont élu domicile !</strong>
<br><br>
Sur Blablaland, l\'Elfe repousse les blablas avec son glaive.<br /><br />
<strong style="color:#BC6BD6;">Vitesse et Dextérité sont tes plus grandes alliées ! </strong>
<br /><br /><br />
<strong style="font-size:14px">Ce skin est utilisable dans le Donjon :</strong><br /><br />
• <strong style="font-size:14px">Vie : <img src="/images/donjon/vie_elfe.png" align="absmiddle" border="0" /> </strong><br /><br />
• <strong style="font-size:14px">Force : <img src="/images/donjon/force_elfe.png" align="absmiddle" border="0" /></strong><br /><br />
• <strong style="font-size:14px">Agilité : <img src="/images/donjon/vitesse_elfe.png" align="absmiddle" border="0" /></strong><br /><br />
• <strong style="font-size:14px">Spécial :</strong> <br />
- Tant que tu es immobile, passe en mode tir <em>(clique sur le monstre pour décocher une flèche).</em> Si tu bouges, tu ne peux plus tirer à l\'arc !<br />
- Les joueurs proches gagnent un bonus d\'un point à la puissance pendant 20 secondes.
<br /><br />
<a href="/site/jeu_donjon.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/5.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Donjon</a>',
                    'price' => 1950,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '76;46;68;27;76;82;84;77;48;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 33,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            498 =>
                array (
                    'id' => 633,
                    'name' => 'Paladin',
                    'description' => 'Si j\'avais un marteau, je taperais les zombies et les squelettes >:)
<br /><br />
<strong>Equipé d\'un bouclier, d\'une super masse et d\'une belle armure qui brille, le Paladin utilise sa force dans le Donjon pour venir à bout des monstres les plus horribles !</strong>
<br /><br />
Sur Blablaland, le Paladin repousse les blablas avec sa masse.<br /><br />
<strong style="color:#BC6BD6;">Bats-toi pour la Justice et défends la veuve et l\'orphelin !! </strong><br /><br /><br />
<strong style="font-size:14px">Ce skin est utilisable dans le Donjon :</strong><br /><br />
• <strong style="font-size:14px">Vie : <img src="/images/donjon/vie_paladin.png" align="absmiddle" border="0" /> </strong><br /><br />
• <strong style="font-size:14px">Force : <img src="/images/donjon/force_3.png" align="absmiddle" border="0" /></strong><br /><br />
• <strong style="font-size:14px">Agilité : <img src="/images/donjon/vitesse_paladin.png" align="absmiddle" border="0" /></strong><br /><br />
• <strong style="font-size:14px">Spécial :</strong> <br />
- Deviens invincible pendant 4 secondes,<br />
- Toi et tes alliés proches au moment de l\'activation recevez un bouclier qui absorbe 1 point de dégât.
<br /><br />
<a href="/site/jeu_donjon.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/5.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Donjon</a>',
                    'price' => 1950,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '78;82;89;18;76;73;73;58;84;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 33,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            499 =>
                array (
                    'id' => 634,
                    'name' => 'Paladine',
                    'description' => 'Si j\'avais un marteau, je taperais les zombies et les squelettes >:)
<br /><br />
<strong>Equipée d\'un bouclier, d\'une super masse et d\'une belle armure qui brille, la Paladine utilise sa force dans le Donjon pour venir à bout des monstres les plus horribles !</strong>
<br><br>
Sur Blablaland, la Paladine repousse les blablas avec sa masse.<br /><br />
<strong style="color:#BC6BD6;">Bats-toi pour la Justice et défends la veuve et l\'orphelin !! </strong>
<br /><br /><br />
<strong style="font-size:14px">Ce skin est utilisable dans le Donjon :</strong><br /><br />
• <strong style="font-size:14px">Vie : <img src="/images/donjon/vie_paladin.png" align="absmiddle" border="0" /> </strong><br /><br />
• <strong style="font-size:14px">Force : <img src="/images/donjon/force_3.png" align="absmiddle" border="0" /></strong><br /><br />
• <strong style="font-size:14px">Agilité : <img src="/images/donjon/vitesse_paladin.png" align="absmiddle" border="0" /></strong><br /><br />
• <strong style="font-size:14px">Spécial:</strong> <br />
- Deviens invincible pendant 4 secondes,<br />
- Toi et tes alliés proches au moment de l\'activation recevez un bouclier qui absorbe 1 point de dégât.
<br /><br />
<a href="/site/jeu_donjon.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/5.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Donjon</a>

',
                    'price' => 1950,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '79;48;68;18;76;73;73;88;84;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 33,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
        ));
        \DB::table('skins')->insert(array (
            0 =>
                array (
                    'id' => 635,
                    'name' => 'Donjon : Gobelin Collector',
                    'description' => '<strong>Skin Carte Collector #07 !!</strong><br>
Go ! Go ! Go ! Gobelin !! Vous ne pourrez plus vous passer de ce Gobelin espiègle !
<br /><br />
<strong>Armé d\'un lance-pierre, il envoie toute sorte de projectiles sur ses ennemis niark.</strong>
<br><br>
Sur Blablaland, il assomme les Blablas et leur fait voir 1000 chandelles <em>(ceci est une expression ndlr)</em><br /><br />
<strong style="color:#BC6BD6;">Délires garantis !!! </strong>
<br /><br /><br />
<strong style="font-size:14px">Ce skin est utilisable dans le Donjon :</strong><br /><br />
• <strong style="font-size:14px">Vie : <img src="/images/donjon/vie_mage.png" align="absmiddle" border="0" /> </strong><br /><br />
• <strong style="font-size:14px">Force : <img src="/images/donjon/force_1.5.png" align="absmiddle" border="0" /></strong><br /><br />
• <strong style="font-size:14px">Agilité : <img src="/images/donjon/vitesse_mage.png" align="absmiddle" border="0" /></strong><br /><br />
• <strong style="font-size:14px">Spécial:</strong> <br />
- Avoir un Gobelin dans son équipe augmente les récompenses du coffre.<br />
<br /><br />
<a href="/site/jeu_donjon.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/5.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Donjon</a><br />
<br><br><strong style="color:#BC6BD6;">Le Gobelin est un skin Collector qui ne peut s\'obtenir qu\'en grattant une Carte Cadeau #07</strong><br>
<br>
<a href="http://www.blablaland.com/site/blabillons.php?m=cadeau">Si tu as reçu une carte, clique ici pour entrer le code et obtenir le skin.</a><br><br>
Plus d\'information sur : <a href="http://www.niveau99-shop.com" target="_blank">NIVEAU99-SHOP</a>',
                    'price' => 3000,
                    'token' => 0,
                    'special' => 'CARD',
                    'promo' => 0,
                    'color' => '23;78;84;88;82;83;73;88;84;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 39,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            1 =>
                array (
                    'id' => 636,
                    'name' => 'Maraudeur Damné',
                    'description' => 'Incarnez un puissant Maraudeur et battez-vous pour le clan des Damnés !! Votre énorme épée viendra à bout de tous les monstres du Donjon !
<br /><br />Comme les Célestes, ils ont la faculté de déployer de grandes Ailes pour s\'envoler, avec quelques nuances. Leur impulsion est plus forte mais ils retombent plus vite.
<br />
<em>Une fois vos Ailes déployées : lorsque vous sautez, gardez la flèche du haut appuyée, le Damné se mettra à planer. Après une seconde, ses Ailes s\'orientent vers le haut vous indiquant que vous pouvez relâcher la touche et appuyer de nouveau vers le haut pour faire un battement d\'Ailes et reprendre de l\'élan. Maintenez de nouveau la touche, et ainsi de suite. Conservez le rythme pour devenir digne du Pouvoir des Damnés !</em>
<br /><br />
Gagnez encore plus de puissance grâce à l\'Aura de Célérité des Flammes donnée par la Sentinelle des Damnés dans l\'Antre de Feu.
<br /><br />
<strong style="font-size:14px">Ce skin est utilisable dans le Donjon :</strong><br /><br />
• <strong style="font-size:14px">Vie : <img src="/images/donjon/vie_elfe.png" align="absmiddle" border="0" /> </strong><br /><br />
• <strong style="font-size:14px">Force : <img src="/images/donjon/force_3.png" align="absmiddle" border="0" /></strong><br /><br />
• <strong style="font-size:14px">Agilité : <img src="/images/donjon/vitesse_paladin.png" align="absmiddle" border="0" /></strong><br /><br />
• <strong style="font-size:14px">Spécial :</strong> <br />
- Deux coups dans une direction permet de charger et de passer à travers les ennemis,<br />
- Les joueurs proches gagnent un bonus à la puissance pendant 20 secondes.
<br /><br />
<strong style="color:#BC6BD6;">Aux armes, défendez l\'honneur de votre clan !!!</strong>
<br /><br />
<a href="/site/jeu_donjon.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/5.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Donjon</a>',
                    'price' => 2100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '19;71;89;17;73;82;15;18;73;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 33,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            2 =>
                array (
                    'id' => 637,
                    'name' => 'Maraudeuse Damnée',
                    'description' => 'Incarnez un puissant Maraudeur et battez-vous pour le clan des Damnés !! Votre énorme épée viendra à bout de tous les monstres du Donjon !
<br /><br />Comme les Célestes, ils ont la faculté de déployer de grandes Ailes pour s\'envoler, avec quelques nuances. Leur impulsion est plus forte mais ils retombent plus vite.
<br />
<em>Une fois vos Ailes déployées : lorsque vous sautez, gardez la flèche du haut appuyée, le Damné se mettra à planer. Après une seconde, ses Ailes s\'orientent vers le haut vous indiquant que vous pouvez relâcher la touche et appuyer de nouveau vers le haut pour faire un battement d\'Ailes et reprendre de l\'élan. Maintenez de nouveau la touche, et ainsi de suite. Conservez le rythme pour devenir digne du Pouvoir des Damnés !</em>
<br /><br />
Gagnez encore plus de puissance grâce à l\'Aura de Célérité des Flammes donnée par la Sentinelle des Damnés dans l\'Antre de Feu.
<br /><br />
<strong style="font-size:14px">Ce skin est utilisable dans le Donjon :</strong><br /><br />
• <strong style="font-size:14px">Vie : <img src="/images/donjon/vie_elfe.png" align="absmiddle" border="0" /> </strong><br /><br />
• <strong style="font-size:14px">Force : <img src="/images/donjon/force_3.png" align="absmiddle" border="0" /></strong><br /><br />
• <strong style="font-size:14px">Agilité : <img src="/images/donjon/vitesse_paladin.png" align="absmiddle" border="0" /></strong><br /><br />
• <strong style="font-size:14px">Spécial :</strong> <br />
- Deux coups dans une direction permet de charger et de passer à travers les ennemis,<br />
- Les joueurs proches gagnent un bonus à la puissance pendant 20 secondes.
<br /><br />
<strong style="color:#BC6BD6;">Aux armes, défendez l\'honneur de votre clan !!!</strong>
<br /><br />
<a href="/site/jeu_donjon.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/5.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Donjon</a>',
                    'price' => 2100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '62;71;88;17;73;82;15;18;73;81',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 33,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            3 =>
                array (
                    'id' => 641,
                    'name' => 'Esprit du Printemps Garçon',
                    'description' => 'Incarne un Esprit du Printemps ! Ce joli petit être coloré aux ailes de papillon flotte dans les airs avec grâce et élégance.<br />
<br />
<strong>Sors tes ailes et plane au-dessus du sol !</strong> Tu pourras ainsi traverser les étendues d\'eau sans même te mouiller :D
<br /><br />
Si tu préfères rester au sol, il suffit que tu désactives tes ailes et tu pourras te déplacer normalement.<br /><br />

<strong style="color:#BC6BD6;">Léger, plein de couleurs et de gaieté, l\'Esprit du Printemps est toujours de bonne humeur !</strong>
',
                    'price' => 1600,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '27;39;43;53;78;75;53;12;73;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 31,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            4 =>
                array (
                    'id' => 642,
                    'name' => 'Esprit du Printemps Fille',
                    'description' => 'Incarne un Esprit du Printemps ! Ce joli petit être coloré aux ailes de papillon flotte dans les airs avec grâce et élégance.<br />
<br />
<strong>Sors tes ailes et plane au-dessus du sol !</strong> Tu pourras ainsi traverser les étendues d\'eau sans même te mouiller :D
<br /><br />
Si tu préfères rester au sol, il suffit que tu désactives tes ailes et tu pourras te déplacer normalement.<br /><br />

<strong style="color:#BC6BD6;">Léger, plein de couleurs et de gaieté, l\'Esprit du Printemps est toujours de bonne humeur !</strong>

',
                    'price' => 1600,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '27;39;75;78;44;53;12;18;73;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 31,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            5 =>
                array (
                    'id' => 643,
                    'name' => 'Troll-Arbre',
                    'description' => 'Cet hêtre, aux allures de monstre des bois, a quitté sa forêt mystérieuse en quête d\'aventure sur Blablaland !
<br /><br />
<strong>Capable de changer de style en fonction des saisons, il dispose de 4 parures différentes (une pour chaque saison) que vous pouvez changer selon vos envies !!</strong>
<br><br>
<strong style="color:#BC6BD6;">Le Troll-Arbre est le meilleur ami des aventuriers dans le Donjon, il peut les soigner !!!</strong>
<br /><br /><br />
<strong style="font-size:14px">Ce skin est utilisable dans le Donjon :</strong><br /><br />
• <strong style="font-size:14px">Vie : <img src="/images/donjon/vie_mage.png" align="absmiddle" border="0" /> </strong><br /><br />
• <strong style="font-size:14px">Force : <img src="/images/donjon/force_elfe.png" align="absmiddle" border="0" /></strong><br /><br />
• <strong style="font-size:14px">Agilité : <img src="/images/donjon/vitesse_paladin.png" align="absmiddle" border="0" /></strong><br /><br />
• <strong style="font-size:14px">Spécial:</strong> <br />
- Permet de récupérer un coeur perdu pour lui et ses alliés proches.<br />
<br /><br />
<a href="/site/jeu_donjon.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/5.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Donjon</a>

',
                    'price' => 1950,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '84;46;27;67;83;20;1;88;84;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 33,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            6 =>
                array (
                    'id' => 645,
                    'name' => 'Rockeuse',
                    'description' => 'Rock\'n\'Roll !!! Look glam et sexy pour cette fan de Rock ! Balance-toi au rythme de la musique !
<br />
<br />
<strong>Maquillage, barrette tête de mort et résille au pied sont les accessoires indispensables de cette jolie rockeuse !!</strong>
<br><br>
<strong style="color:#BC6BD6;">LE skin obligatoire pour toutes les fanas de Rock !!! </strong>
',
                    'price' => 1300,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '12;47;68;73;58;41;1;1;14;90',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 4,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            7 =>
                array (
                    'id' => 646,
                    'name' => 'Rockeur',
                    'description' => 'Rock\'n\'Roll !!! Look destroy pour ce fan de Rock ! Balance-toi au rythme de la musique !
<br />
<br />
<strong>Bracelet à clous et boucle d\'oreille sont les accessoires indispensables de ce jeune rockeur !!</strong>
<br><br>
<strong style="color:#BC6BD6;">LE skin obligatoire pour tous les fanas de Rock !!! </strong>

',
                    'price' => 1300,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '12;81;68;73;18;83;90;12;14;90',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 4,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            8 =>
                array (
                    'id' => 647,
                    'name' => 'Pacific Boy',
                    'description' => 'Ce Blabla aux allures de Maori va déchaîner les foules sur la Plage !
<br />
<br />
<strong>Ses tatouages exotiques te feront voyager dans les îles du Pacifique !!</strong>
<br><br>
<strong style="color:#BC6BD6;">Un skin parfait pour l\'été !!! </strong>

',
                    'price' => 1300,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '81;82;89;4;74;28;90;12;14;90',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 3,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            9 =>
                array (
                    'id' => 648,
                    'name' => 'Pacific Girl',
                    'description' => 'Ce Blabla aux allures de Vahiné va déchainer les foules sur la Plage !
<br />
<br />
<strong>Son collier de fleurs et son joli pagne te feront voyager dans les îles du Pacifique !!</strong>
<br><br>
<strong style="color:#BC6BD6;">Un skin parfait pour l\'été !!! </strong>

',
                    'price' => 1300,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '81;46;89;74;58;78;28;67;54;90',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 3,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            10 =>
                array (
                    'id' => 650,
                    'name' => 'Tropical Boy',
                    'description' => 'Eté, soleil, chaleur : rien ne fait peur à ce skin !!
<br />
<br />
<strong> Avec ses dreads et son bandeau, il est prêt à affronter les chaudes conditions de l\'été !!</strong>
<br><br>
<strong style="color:#BC6BD6;">A toi le soleil sur Blablaland !!! </strong>

',
                    'price' => 1300,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '81;81;84;73;15;73;28;67;54;90',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 3,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            11 =>
                array (
                    'id' => 651,
                    'name' => 'Tropical Girl',
                    'description' => 'Eté, soleil, chaleur : rien ne fait peur à ce skin !!
<br />
<br />
<strong> Avec ses cheveux frisés et ses belles tongs, la voilà prête à affronter les chaudes conditions de l\'été !!</strong>
<br><br>
<strong style="color:#BC6BD6;">A toi le soleil sur Blablaland !!! </strong>',
                    'price' => 1300,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '81;81;84;45;48;76;28;67;54;90',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 3,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            12 =>
                array (
                    'id' => 653,
                    'name' => 'Shérif Garcon',
                    'description' => 'Le Shérif fait son entrée en ville ! Gare à ceux qui ne respectent pas les lois qu\'il dicte !!
<br /><br />
<strong> Le Shérif peut capturer des Blablas en leur mettant un boulet au pied !</strong> Pour ça, il suffit de s\'approcher très près du Blabla et de cliquer sur l\'icone du boulet !!
<br /><br />
<strong style="color:#BC6BD6;">La Loi, c\'est lui !</strong>',
                    'price' => 1500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '83;89;48;84;76;82;82;17;54;90',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            13 =>
                array (
                    'id' => 654,
                    'name' => 'Shérif Fille',
                    'description' => 'Le Shérif fait son entrée en ville ! Gare à ceux qui ne respectent pas les lois qu\'il dicte !!
<br /><br />
<strong> Le Shérif peut capturer des Blablas en leur mettant un boulet au pied !</strong> Pour ça, il suffit de s\'approcher très près du Blabla et de cliquer sur l\'icone du boulet !!
<br /><br />
<strong style="color:#BC6BD6;">La Loi, c\'est elle !</strong>',
                    'price' => 1500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '76;89;82;84;76;82;81;17;54;90',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            14 =>
                array (
                    'id' => 655,
                    'name' => 'Bandit Garcon',
                    'description' => 'Qui n\'a jamais rêvé de se prendre pour Billy the Kid ? Les Bandits attaquent !!
<br /><br />
<strong> Visage camouflé sous son bandana, chapeau vissé sur la tête et éperons aux pieds, ce bandit est prêt à commettre les pires des méfaits !!</strong>
<br /><br />
Il dégaine son pistolet plus vite que son ombre pour repousser les Blablas qui lui barrent la route !
<br /><br />
<strong style="color:#BC6BD6;">LE skin sans foi ni Loi !!</strong>',
                    'price' => 1500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '78;89;82;14;72;12;76;18;81;90',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            15 =>
                array (
                    'id' => 656,
                    'name' => 'Bandit Fille',
                    'description' => 'Qui n\'a jamais rêvé de se prendre pour Calamity Jane ? Les Bandits attaquent !!
<br /><br />
<strong> Visage camouflé sous son bandana, chapeau vissé sur la tête et éperons aux pieds, ce bandit est prêt à commettre les pires des méfaits !!</strong>
<br /><br />
Elle dégaine son pistolet plus vite que son ombre pour repousser les Blablas qui lui barrent la route !
<br /><br />
<strong style="color:#BC6BD6;">LE skin sans foi ni Loi !!</strong>',
                    'price' => 1500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '84;89;27;14;23;12;76;72;18;90',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 10,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            16 =>
                array (
                    'id' => 659,
                    'name' => 'Rôdeur',
                    'description' => 'Incarne un assassin discret qui attaque les monstres avec ses dagues !
<br /><br />
<strong>Le Rôdeur se fond dans les ombres pour frapper ses ennemis rapidement et par surprise. Lorsqu\'il agresse un monstre de dos, le Rôdeur inflige plus de dégâts.</strong>
<br /><br />
Sur Blablaland, le Rôdeur repousse les blablas avec ses dagues.<br /><br />
<strong style="color:#BC6BD6;">Personne ne peut se confronter aux attaques furtives du Rôdeur !! </strong><br /><br /><br />
<strong style="font-size:14px">Ce skin est utilisable dans le Donjon :</strong><br /><br />
• <strong style="font-size:14px">Vie : <img src="/images/donjon/vie_mage.png" align="absmiddle" border="0" /> </strong><br /><br />
• <strong style="font-size:14px">Force : <img src="/images/donjon/force_elfe.png" align="absmiddle" border="0" /></strong><br /><br />
• <strong style="font-size:14px">Agilité : <img src="/images/donjon/vitesse_elfe.png" align="absmiddle" border="0" /></strong><br /><br />
• <strong style="font-size:14px">Spécial :</strong> <br />
- Augmente de 15% les chances de faire un coup critique,<br />
- Toi et tes alliés proches au moment de l\'activation vous déplacez plus vite pendant quelques secondes.
<br /><br />
<a href="/site/jeu_donjon.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/5.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Donjon</a>',
                    'price' => 1950,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '83;81;89;14;46;76;14;12;90;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 33,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            17 =>
                array (
                    'id' => 660,
                    'name' => 'Rôdeuse',
                    'description' => 'Incarne un assassin discret qui attaque les monstres avec ses dagues !
<br /><br />
<strong>La Rôdeuse se fond dans les ombres pour frapper ses ennemis rapidement et par surprise. Lorsqu\'elle agresse un monstre de dos, la Rôdeuse inflige plus de dégâts.</strong>
<br /><br />
Sur Blablaland, la Rôdeuse repousse les blablas avec ses dagues.<br /><br />
<strong style="color:#BC6BD6;">Personne ne peut se confronter aux attaques furtives de la Rôdeuse !! </strong><br /><br /><br />
<strong style="font-size:14px">Ce skin est utilisable dans le Donjon :</strong><br /><br />
• <strong style="font-size:14px">Vie : <img src="/images/donjon/vie_mage.png" align="absmiddle" border="0" /> </strong><br /><br />
• <strong style="font-size:14px">Force : <img src="/images/donjon/force_elfe.png" align="absmiddle" border="0" /></strong><br /><br />
• <strong style="font-size:14px">Agilité : <img src="/images/donjon/vitesse_elfe.png" align="absmiddle" border="0" /></strong><br /><br />
• <strong style="font-size:14px">Spécial :</strong> <br />
- Augmente de 15% les chances de faire un coup critique,<br />
- Toi et tes alliés proches au moment de l\'activation vous déplacez plus vite pendant quelques secondes.
<br /><br />
<a href="/site/jeu_donjon.php" class="fofo_link_extern" target="_blank"><img src="/images/shop/jetons/5.png" align="absmiddle" border="0" /> En savoir plus sur le mini-jeu Donjon</a>',
                    'price' => 1950,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '71;81;89;14;46;76;14;12;90;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 33,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            18 =>
                array (
                    'id' => 661,
                    'name' => 'Lutin Automne',
                    'description' => 'L\'Automne est là ! Les Lutins sortent des bois pour célébrer cet événement !<br />
<br />
En plus d\'être trop mignon et de les protéger de la pluie, leur parapluie feuille les fait planer lorsqu\'ils tombent <em>(comme l\'objet parapluie)</em>. Il est aussi possible de le ranger lorsqu\'il fait beau.
<br /><br />
<strong> Lorsqu\'ils dansent avec leur parapluie au-dessus de la tête, les Lutins deviennent invincibles !!!</strong><br /><br />
TROP COOL : Grâce à eux, tu auras beaucoup plus de chance de trouver des trèfles dans les plantes de Blablaland ;)<br>
<br />
<strong style="color:#BC6BD6;">Mets-toi aux couleurs de l\'Automne !!</strong>
',
                    'price' => 1700,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '45;12;68;84;72;77;28;83;18;90',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 31,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            19 =>
                array (
                    'id' => 662,
                    'name' => 'Lutine Automne',
                    'description' => 'L\'Automne est là ! Les Lutins sortent des bois pour célébrer cet événement !<br />
<br />
En plus d\'être trop mignon et de les protéger de la pluie, leur parapluie feuille les fait planer lorsqu\'ils tombent <em>(comme l\'objet parapluie)</em>. Il est aussi possible de le ranger lorsqu\'il fait beau.
<br /><br />
<strong> Lorsqu\'ils dansent avec leur parapluie au-dessus de la tête, les Lutins deviennent invincibles !!!<br /><br />
TROP COOL : Grâce à eux, tu auras beaucoup plus de chance de trouver des trèfles dans les plantes de Blablaland ;)<br>
<br />
<strong style="color:#BC6BD6;">Mets-toi aux couleurs de l\'Automne !!</strong>',
                    'price' => 1700,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '56;12;68;59;72;59;28;84;75;90',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 31,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            20 =>
                array (
                    'id' => 663,
                    'name' => 'Esprit Halloween Garcon',
                    'description' => 'Le gentil et mignon petit Papillon a été touché par l\'horreur d\'Halloween et a muté !<br /><br />
Tête de citrouille, cornes, griffes et ailes déchiquetées : une variante trop BRrrrrrRRRr!
<br /><br />
<strong>Sors tes ailes et plane au-dessus du sol à la recherche d\'une proie à terrifier !</strong>
<br /><br />
Si tu préfères rester au sol, il suffit que tu désactives tes ailes et tu pourras te déplacer normalement.<br /><br />
<strong style="color:#BC6BD6;">Un skin mortel à posséder absolument pour Halloween !</strong><br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Esprit du Printemps Garçon" !! Trop cool !!</b>',
                    'price' => 1800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '27;72;75;53;12;75;12;18;73;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 31,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            21 =>
                array (
                    'id' => 664,
                    'name' => 'Esprit Halloween Fille',
                    'description' => 'Le gentil et mignon petit Papillon a été touché par l\'horreur d\'Halloween et a muté !<br /><br />
Tête de citrouille, cornes, griffes et ailes déchiquetées : une variante trop BRrrrrrRRRr!
<br /><br />
<strong>Sors tes ailes et plane au-dessus du sol à la recherche d\'une proie à terrifier !</strong>
<br /><br />
Si tu préfères rester au sol, il suffit que tu désactives tes ailes et tu pourras te déplacer normalement.<br /><br />
<strong style="color:#BC6BD6;">Un skin mortel à posséder absolument pour Halloween !</strong>
<br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Esprit du Printemps Fille" !! Trop cool !!</b>',
                    'price' => 1800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '27;72;44;53;12;75;12;18;73;17',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 31,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            22 =>
                array (
                    'id' => 674,
                    'name' => 'Epouvantail',
                    'description' => 'Ne vous fiez pas aux apparences, ce petit épouvantail tout mignon cache bien son jeu !
<br /><br />
Approchez-vous, regardez de plus près sa tête de citrouille illuminée et faites-vous piéger !!!
<br /><br />
<strong>L\'épouvantail vient de vous effrayer ! Hahahaha !! Vous êtes devenus tout blanc et courez dans tous les sens, pauvres petits blablas apeurés !!!</strong>
<br /><br />
<strong style="color:#a50b00;">Il faut toujours se méfier des épouvantails !!</strong>
<em>Parce que les épouvantails sont tous de la même famille, ils ne peuvent pas se faire peur entre eux !</em>',
                    'price' => 1850,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '90;76;14;82;78;76;17;16;77;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            23 =>
                array (
                    'id' => 675,
                    'name' => 'Blob',
                    'description' => 'Mais qu\'est-ce que c\'est que cette chose ?! Ca ne ressemble à rien de connu !
<br /><br />
<strong>Le Blob est un être visqueux et flasque aux capacités surprenantes.</strong>
<br /><br />
• Le Blob a la capacité de <strong>se téléporter horizontalement </strong>lorsque tu appuies deux fois dans une direction (droite ou gauche) ce qui lui permet de se déplacer rapidement  !!
<br /><br />
• Le Blob <strong>peut se transformer en cube gélatineux</strong> et permettre aux Blablas de rebondir sur lui encore et encore !
<br /><br />
<strong style="color:#a50b00;">Un skin pouah et berk à réserver aux accros de la gélatine !</strong>
',
                    'price' => 1850,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '34;76;14;82;78;76;17;16;77;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 29,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            24 =>
                array (
                    'id' => 676,
                    'name' => 'Damné Costumé',
                    'description' => 'Variante Halloween ! Découvrez les Damnés sous un autre angle !
<br /><br />
<strong>Ces petits malins se déguisent en célestes et essaient de se faire passer pour les gentils !!</strong>
<br /><br />
Eux aussi, ils ont la faculté de déployer de grandes Ailes pour s\'envoler, avec quelques nuances. Leur impulsion est plus forte mais ils retombent plus vite.
<br />
<em>Une fois vos Ailes déployées : lorsque vous sautez, gardez la flèche du haut appuyée, le Damné se mettra à planer. Après une seconde, ses Ailes s\'orientent vers le haut vous indiquant que vous pouvez relâcher la touche et appuyer de nouveau vers le haut pour faire un battement d\'Ailes et reprendre de l\'élan. Maintenez de nouveau la touche, et ainsi de suite. Conservez le rythme pour devenir digne du Pouvoir des Damnés !</em>
<br /><br />
Gagnez encore plus de puissance grâce à l\'Aura de Célérité des Flammes donnée par la Sentinelle des Damnés dans l\'Antre de Feu.
<br /><br />
<strong style="color:#BC6BD6;">Trompez tout le monde avec ces déguisements inattendus dans l\'ambiance déjantée d\'Halloween!</strong>
<br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Damné" !! Trop cool !!</b>',
                    'price' => 2000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '50;61;89;72;59;18;81;44;72;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 1,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            25 =>
                array (
                    'id' => 677,
                    'name' => 'Damnée Costumée',
                    'description' => 'Variante Halloween ! Découvrez les Damnés sous un autre angle !
<br /><br />
<strong>Ces petits malins se déguisent en célestes et essaient de se faire passer pour les gentils !!</strong>
<br /><br />
Eux aussi, ils ont la faculté de déployer de grandes Ailes pour s\'envoler, avec quelques nuances. Leur impulsion est plus forte mais ils retombent plus vite.
<br />
<em>Une fois vos Ailes déployées : lorsque vous sautez, gardez la flèche du haut appuyée, le Damné se mettra à planer. Après une seconde, ses Ailes s\'orientent vers le haut vous indiquant que vous pouvez relâcher la touche et appuyer de nouveau vers le haut pour faire un battement d\'Ailes et reprendre de l\'élan. Maintenez de nouveau la touche, et ainsi de suite. Conservez le rythme pour devenir digne du Pouvoir des Damnés !</em>
<br /><br />
Gagnez encore plus de puissance grâce à l\'Aura de Célérité des Flammes donnée par la Sentinelle des Damnés dans l\'Antre de Feu.
<br /><br />
<strong style="color:#BC6BD6;">Trompez tout le monde avec ces déguisements inattendus dans l\'ambiance déjantée d\'Halloween!</strong><br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Damnée" !! Trop cool !!</b>',
                    'price' => 2000,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '13;62;89;81;61;18;77;59;72;44',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 1,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            26 =>
                array (
                    'id' => 679,
                    'name' => 'R-1BO',
                    'description' => 'Cet être métallique aux allures de boite de conserve vient d\'être délogé de sa comète !
<br /><br />
Après étude de son cas, il apparaît que ce petit robot :<br /><br />
• <strong>parle une langue inconnue :</strong> impossible pour les Blablas de déchiffrer ce qu\'il dit ! Seuls les skins Extraterrestres Robots (M-4IP, K-8RU, R-1BO) peuvent se comprendre. <br /> S\'il souhaite communiquer, cet Extraterrestre <strong>peut activer son transcodeur et ainsi permettre aux Blablas de le comprendre et de parler avec lui.</strong>
<br /><br />
• <strong>est armé d\'un laser étrange :</strong> Lorsqu\'il tire sur les Blablas, <strong>cet Extraterrestre les transforme... en vaches !</strong> <br />C\'est bien connu, depuis la nuit des temps les Extraterrestres raffolent des vaches !!
<br /><br />
<strong style="color:#BC6BD6;">{! ("§  [=  _.µ^¤!;`"`)^* ²=  %)²" {&^^,{</strong>
',
                    'price' => 1700,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '49;73;77;72;17;72;49;54;77;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 1,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            27 =>
                array (
                    'id' => 680,
                    'name' => 'K-8RU',
                    'description' => 'Cet être métallique aux allures de boite de conserve vient d\'être délogé de sa comète !
<br /><br />
Après étude de son cas, il apparaît que ce petit robot :<br /><br />
• <strong>parle une langue inconnue :</strong> impossible pour les Blablas de déchiffrer ce qu\'il dit ! Seuls les skins Extraterrestres Robots (M-4IP, K-8RU, R-1BO) peuvent se comprendre. <br /> S\'il souhaite communiquer, cet Extraterrestre <strong>peut activer son transcodeur et ainsi permettre aux Blablas de le comprendre et de parler avec lui.</strong>
<br /><br />
• <strong>est armé d\'un laser étrange :</strong> Lorsqu\'il tire sur les Blablas, <strong>cet Extraterrestre les transforme... en vaches !</strong> <br />C\'est bien connu, depuis la nuit des temps les Extraterrestres raffolent des vaches !!
<br /><br />
<strong style="color:#BC6BD6;">{! ("§  [=  _.µ^¤!;`"`)^* ²=  %)²" {&^^,{</strong>
',
                    'price' => 1700,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '17;73;36;77;17;17;17;54;77;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 1,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            28 =>
                array (
                    'id' => 681,
                    'name' => 'M-4IP',
                    'description' => 'Cet être métallique aux allures de boite de conserve vient d\'être délogé de sa comète !
<br /><br />
Après étude de son cas, il apparaît que ce petit robot :<br /><br />
• <strong>parle une langue inconnue :</strong> impossible pour les Blablas de déchiffrer ce qu\'il dit ! Seuls les skins Extraterrestres Robots (M-4IP, K-8RU, R-1BO) peuvent se comprendre. <br /> S\'il souhaite communiquer, cet Extraterrestre <strong>peut activer son transcodeur et ainsi permettre aux Blablas de le comprendre et de parler avec lui.</strong>
<br /><br />
• <strong>est armé d\'un laser étrange :</strong> Lorsqu\'il tire sur les Blablas, <strong>cet Extraterrestre les transforme... en vaches !</strong> <br />C\'est bien connu, depuis la nuit des temps les Extraterrestres raffolent des vaches !!
<br /><br />
<strong style="color:#BC6BD6;">{! ("§  [=  _.µ^¤!;`"`)^* ²=  %)²" {&^^,{</strong>
',
                    'price' => 1700,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '90;73;77;77;90;73;17;54;77;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 1,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            29 =>
                array (
                    'id' => 683,
                    'name' => 'Chat domestique Noël',
                    'description' => '<strong style="color:#063B17;"> >>Variante Spéciale pour Noël !</strong>
<br /><br />
Redécouvrez le petit Chat domestique 3 tout mignon sous son gros bonnet de Noël !<br /><br />
Il est prêt à affronter le froid glacial de Blablaland et à fêter Noël comme il se doit !
<br /><br />
<strong style="color:#BC6BD6;">Joyeux Noël ! :)</strong>

<br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Chat domestique 3" !! Trop cool !!</b>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '59;45;68;59;67;27;72;59;77;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            30 =>
                array (
                    'id' => 684,
                    'name' => 'Chat sauvage Noël',
                    'description' => '<strong style="color:#063B17;"> >>Variante Spéciale pour Noël !</strong>
<br /><br />
Le Chat Sauvage 3 cache bien son jeu ! Sous ses apparences de voyou, il est attaché à l\'esprit de Noël et ne manquera pas de le fêter avec espièglerie !<br />
<br />
Il est prêt à affronter le froid glacial de Blablaland et à fêter Noël comme il se doit !
<br /><br />
<strong style="color:#BC6BD6;">Montrez votre coeur tendre, c\'est Noël !</strong><br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Chat Sauvage 3" !! Trop cool !!</b>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '14;45;68;17;68;59;72;59;72;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            31 =>
                array (
                    'id' => 685,
                    'name' => 'Lapin Bélier Noël',
                    'description' => '<strong style="color:#063B17;"> >>Variante Spéciale pour Noël !</strong>
<br /><br />
Le petit Lapin Bélier avait froid, tellement les plaines de Blablaland s\'étaient refroidies ! <br>
Il a alors revêtu son plus beau bonnet de Noël pour fêter avec vous tous cette période si spéciale !<br>
Passez les fêtes avec cette variante pleine de douceur !<br /><br />
<strong style="color:#BC6BD6;">Joyeux Noël ! :)</strong><br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Lapin Bélier" !! Trop cool !!</b>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '67;82;69;72;59;73;17;54;77;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            32 =>
                array (
                    'id' => 686,
                    'name' => 'Hibou Noël',
                    'description' => '<strong style="color:#063B17;"> >>Variante Spéciale pour Noël !</strong>
<br /><br />
Hou Hou ! Le Hibou avait froid aux aigrettes ! Il s\'est alors habillé de circonstance pour fêter les fêtes de fin d\'année avec élégance !<br /><br />
Vivez avec lui la magie de Noël dans la nature enchantée par l\'hiver et la neige !<br /><br />
<strong style="color:#BC6BD6;">Joyeux Noël ! :)</strong><br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Hibou" !! Trop cool !!</b>',
                    'price' => 1200,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '70;75;82;15;14;72;59;72;77;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            33 =>
                array (
                    'id' => 687,
                    'name' => 'Dryade des Glaces',
                    'description' => 'Cette jolie Dryade sort timidement de l\'énorme Boule de Glace qui s\'est abattue sur Blablaland.
<br><br>
Ses cornes de glace et sa longue chevelure ne peut laisser aucun Blabla indifférent ! Quelle beauté !! <br><br>
<strong>La Dryade est si légère qu\'elle flotte quand elle marche et qu\'elle retombe très doucement !</strong><br><br>
<strong style="color:#BC6BD6;">Une Dryade glacée pleine de charme !</strong>',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '69;58;48;82;69;73;17;54;77;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 37,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            34 =>
                array (
                    'id' => 688,
                    'name' => 'Bellion des Glaces',
                    'description' => 'Tout droit sorti de la Boule de Glace énoooooorme qui s\'est abattue sur Blablaland, cet être tout poilu part à la découverte du Monde de Blablaland !!!
<br /><br />
On ne sait pas pourquoi le Bellion possède deux cornes, mais par contre, <strong>on l\'a vu courir vite et pousser un monstrueux GROOOAAARRR </strong>pour intimider ses congénères !!<br /><br />
On peut aussi vous dire qu\'il possède des dents impressionnantes !!
<br /><br />
<strong style="color:#BC6BD6;">Ne vous fiez pas à l\'allure toute moumouteuse du Bellion ! Gare à ses dents !!</strong>
',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '58;82;48;82;90;59;17;54;77;73',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 37,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            35 =>
                array (
                    'id' => 689,
                    'name' => 'Magicien des Glaces',
                    'description' => 'Vêtus de leur cape en col de fourrure, les Magiciens des Glaces ne craignent pas le froid !!! Mieux encore, ils le maîtrisent !!!
<br><br>
<strong> Les Magiciens des Glaces ont le pouvoir de givrer le sol de Blablaland !</strong> <br>
Il leur suffit de viser un endroit précis. En percutant la terre, un flocon magique la transformera ... en étendue glacée ! <br><br>
Attention, ça gliiiiiiiiisse !!!
<br><br>
<strong style="color:#BC6BD6;">Arriverez-vous à glacer tout Blablaland ?!</strong>',
                    'price' => 2100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '59;45;68;46;59;77;48;44;59;48',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 37,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            36 =>
                array (
                    'id' => 690,
                    'name' => 'Magicienne des Glaces',
                    'description' => 'Vêtus de leur cape en col de fourrure, les Magiciens des Glaces ne craignent pas le froid !!! Mieux encore, ils le maîtrisent !!!
<br><br>
<strong> Les Magiciens des Glaces ont le pouvoir de givrer le sol de Blablaland !</strong> <br>
Il leur suffit de viser un endroit précis. En percutant la terre, un flocon magique la transformera ... en étendue glacée ! <br><br>
Attention, ça gliiiiiiiiisse !!!
<br><br>
<strong style="color:#BC6BD6;">Arriverez-vous à glacer tout Blablaland ?!</strong>',
                    'price' => 2100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '59;45;68;46;59;77;48;44;59;48',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 37,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            37 =>
                array (
                    'id' => 691,
                    'name' => 'Exo Armure FrostWolf',
                    'description' => 'Voici le terrible guerrier FrostWolf, armé de son rayon Freezer (piou piouuu).
<br /><br />
Il possède 2 pouvoirs :<br /><br />
<strong>- Surf de Glace :</strong> En appuyant 2 fois de suite dans une direction (droite ou gauche), FrostWolf invoque un surf en glace pour se déplacer plus vite et même sur l\'eau !!! <br /><br />
<strong>- Son rayon Freezer </strong> déclenche une attaque gelée qui peut paralyser et glacer les blablas qui restent trop longtemps dans son rayon. Il peut aussi ralentir les joueurs en mode Tournament Fury !!
<br /><br />
<b>Bonus Tournament Fury :</b><br />
Toutes les heures, il gagne une recharge pour son arme en Tournament Fury !!
<br><br>
<em>La boisson Chocolat Chaud te protège des effets du rayon Freezer en dehors du Tournament Fury.</em><br><br>
<strong style="color:#BC6BD6;">Refroidis tes adversaires !!!</strong>

',
                    'price' => 2100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '58;77;55;58;17;76;45;15;59;48',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 22,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            38 =>
                array (
                    'id' => 692,
                    'name' => 'FrostWolf MK.II',
                    'description' => 'Voici le terrible guerrier FrostWolf MK.II, version améliorée du FrrostWolf classique. Son armure améliorée permet de faire baisser la température autour de lui jusqu\'à geler le sol !!!!!
<br /><br />
Il possède 3 pouvoirs :<br /><br />
<strong>- Surf de Glace :</strong> En appuyant 2 fois de suite dans une direction (droite ou gauche), FrostWolf invoque un surf en glace pour se déplacer plus vite et même sur l\'eau !!! <br /><br />
<strong>- Son rayon Freezer </strong> déclenche une attaque gelée qui peut paralyser et glacer les blablas qui restent trop longtemps dans son rayon.
Il peut aussi ralentir les joueurs en mode Tournament Fury !!
<br /><br />
<strong>- Sa 2ème "danse" </strong> permet de geler le sol autour de lui.
<br /><br />
<b>Bonus Tournament Fury :</b><br />
Toutes les heures, il gagne une recharge pour son arme en Tournament Fury !!
<br><br>
<em>La boisson Chocolat Chaud te protège des effets du rayon Freezer en dehors du Tournament Fury.</em><br><br>
<strong style="color:#BC6BD6;">Refroidis tes adversaires !!!</strong><br><br><span style="background:#e95ce4;font-weight:bold;color:#FFFFFF;"><b>&nbsp;CADEAU !! </span>&nbsp;Avec ce skin, on t\'offre en plus le skin "Exo Armure FrostWolf" !! Trop cool !!</b>',
                    'price' => 2400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '58;77;55;58;17;76;45;15;59;48',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 22,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            39 =>
                array (
                    'id' => 693,
                    'name' => 'Chinois 2015',
                    'description' => 'Venez fêter dignement le nouvel an Chinois et participez à son défilé avec ce skin richement costumé !
<br><br>
<strong> Paradez avec votre couronne ornée de pierres précieuses et dansez avec joie pour célébrer cette nouvelle année sous le signe de la Chèvre de Bois !</strong>
<br><br>
<strong style="color:#BC6BD6;">Entrez dans la Parade du Nouvel An Chinois !</strong>


',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '12;14;89;77;72;70;28;72;79;12',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 18,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            40 =>
                array (
                    'id' => 694,
                    'name' => 'Chinoise 2015',
                    'description' => 'Venez fêter dignement le nouvel an Chinois et participez à son défilé avec ce skin richement costumé !
<br><br>
<strong> Paradez avec votre couronne ornée de pierres précieuses et dansez avec joie pour célébrer cette nouvelle année sous le signe de la Chèvre de Bois !</strong>
<br><br>
<strong style="color:#BC6BD6;">Entrez dans la Parade du Nouvel An Chinois !</strong>

',
                    'price' => 1400,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '12;14;89;77;72;70;72;66;79;12',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 18,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            41 =>
                array (
                    'id' => 696,
                    'name' => 'Chèvre d\'Asie',
                    'description' => 'Promenez-vous innocemment dans les collines de Blablaland avec cette petite chèvre toute choupi ! Mêêêêêêh !!
<br><br>
Revêtez alors votre apparence magique ! <strong>Transformez-vous en une Chimère tout droit sortie des mythes et légendes d\'Asie !</strong>
<br><br>
<strong style="color:#BC6BD6;">Bienvenue dans le monde des rêveurs :)</strong>


',
                    'price' => 1800,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '59;81;70;90;72;70;81;77;84;12',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 18,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            42 =>
                array (
                    'id' => 698,
                    'name' => 'Roi Singe',
                    'description' => 'L\'Esprit du Roi Singe s\'invite à la Fête du Soleil Levant !!! Vif et colérique, il aime taquiner tous les Blablas qu\'il rencontre !
<br /><br />
Il possède 2 pouvoirs :<br /><br />
<strong>- Coup de bâton :</strong> Il repousse les Blablas. <br /><br />
<strong>- Mode enragé : </strong> Sa fourrure s\'embrase, il devient alors plus agile et son coup de bâton repousse plus loin et enflamme les Blablas !!!
<br /><br />
<strong style="color:#BC6BD6;">Attention, singe énervé droit devant !!!</strong>',
                    'price' => 2100,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '71;76;88;73;76;14;17;81;73;77',
                    'unavailable' => 0,
                    'hidden' => 0,
                    'group_id' => 18,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            43 =>
                array (
                    'id' => 699,
                    'name' => 'Gardien des limites',
                    'description' => 'Le seul et l\'unique gardien des limites de Blablaland !',
                    'price' => 500,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '65;72;60;60;65;1;1;1;1;1',
                    'unavailable' => 0,
                    'hidden' => 1,
                    'group_id' => NULL,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
            44 =>
                array (
                    'id' => 701,
                    'name' => 'Rusty',
                    'description' => 'Incarne Rusty, un chat tout droit sorti de l\'univers de la Guerre des Clans. Simple chat domestique, il est devenu chef de clan !<br> Lorsqu\'il danse, il feule pour exprimer son mécontentement.<br><br> Skin pensé par Maléna, redessiné et vectorisé par HeroySake.<br><br> <strong style=\'color:#BC6BD6;\'>Rejoins un des clans faisant du RP sur les maps !!</strong>',
                    'price' => 1600,
                    'token' => 0,
                    'special' => NULL,
                    'promo' => 0,
                    'color' => '13;11;85;85;85;11;13;1;1;1',
                    'unavailable' => 1,
                    'hidden' => 1,
                    'group_id' => 7,
                    'created_at' => '2024-02-24 16:40:43',
                    'updated_at' => '2024-02-24 16:40:43',
                ),
        ));

        \DB::table('skins')->update(['created_at' => now(), 'updated_at' => now()]);
    }
}
