<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SmileySeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('smileys')->delete();

        \DB::table('smileys')->insert(array(
                0 => array(
                    'id' => 2,
                    'name' => 'Pink Kawaii',
                    'description' => 'Le pack parfait pour exprimer ses émotions à la façon Manga Kawaii. 20 smileys super classe et mignons sur ton rose. Du blasé au surexcité, en passant par les mignons et les grognons. Tout y est pour un pack réussi et Kawaii !',
                    'price' => 390,
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-10-18 23:47:13',
                    'updated_at' => '2022-10-18 23:47:13',
                ) ,
                1 => array(
                    'id' => 3,
                    'name' => 'Pack Foot',
                    'description' => '<span class="box_stitle_gris">GOAAAL !! Vivez l\'ambiance du foot avec ce Pack de Smiley spécial Foot 08 !<br><strong style="color:#FF2222;">PACK EVENEMENTIEL - Il sera supprimé à la fin du mois - le 30 Juin 08 - de Blablaland ainsi que de ton profil</strong>',
                    'price' => 390,
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-10-18 23:47:13',
                    'updated_at' => '2022-10-18 23:47:13',
                ) ,
                2 => array(
                    'id' => 5,
                    'name' => 'Pack Emotions',
                    'description' => 'T\'es mort de rire, tu `loool` entre potes, t\'as froid, tu trouves ça dégeux ou t\'es amoureux ? Voilà le Pack de smileys qu\'il te faut avec tout plein d\'émotions animées et colorées !! Fais des `LOL`, `MDR`, `GRRRR`, `MIAM` un peu partout XD',
                    'price' => 390,
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-10-18 23:47:13',
                    'updated_at' => '2022-10-18 23:47:13',
                ) ,
                3 => array(
                    'id' => 6,
                    'name' => 'Pack Onomatopées !',
                    'description' => '`Plouf !`, `Vroooom`, `Crack !`, `BOOOOM !` et bien d\'autres sont au rendez-vous de ce Pack Onomatopées. Très cartoon, ce pack est parfait pour illustrer les bruits quotidiens de Blablaland :)
Un pack qui fait `Glou Glou !`',
                    'price' => 390,
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-10-18 23:47:13',
                    'updated_at' => '2022-10-18 23:47:13',
                ) ,
                4 => array(
                    'id' => 7,
                    'name' => 'Saint Valentin',
                    'description' => 'Déclare ta flamme grâce à ce superbe Pack de Smileys `Amour` :love:
Des cœurs, des bouquets de fleurs, des `je t\'aime` et `I love you`... tout ce qu\'il faut pour laisser parler son cœur à la personne désirée !!
Toi aussi, répands l\'amour sur le Tchat ;)',
                    'price' => 390,
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-10-18 23:47:13',
                    'updated_at' => '2022-10-18 23:47:13',
                ) ,
                5 => array(
                    'id' => 8,
                    'name' => 'Meuh Pack !!',
                    'description' => 'Voilà LE pack trop parfait pour délirer !! Finis les smileys jaunes ou roses, c\'est enfin au tour de nos super Blablanimaux de prendre place avec des grimaces délirantes !!
Le Meuh Pack, un must have :)',
                    'price' => 390,
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-10-18 23:47:13',
                    'updated_at' => '2022-10-18 23:47:13',
                ) ,
                6 => array(
                    'id' => 9,
                    'name' => 'Extra Blabla Pack',
                    'description' => 'Un super Pack de smileys tout droit venu d\'une autre galaxie, de quoi délirer en mode Extra-Blabla des heures interstellaires durant :Alien: !!',
                    'price' => 390,
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-10-18 23:47:13',
                    'updated_at' => '2022-10-18 23:47:13',
                ) ,
                7 => array(
                    'id' => 10,
                    'name' => 'Pack Halloween',
                    'description' => 'Pack de Smileys spécial Halloween pour des discussions Maléfiques !! Des citrouilles, des chauves souris, des éclairs !! Du pur Halloween en Pack ^^<br>
<strong style=`color:#BC6BD6;`>Halloween Powa !!</strong>',
                    'price' => 390,
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-10-18 23:47:13',
                    'updated_at' => '2022-10-18 23:47:13',
                ) ,
                8 => array(
                    'id' => 11,
                    'name' => 'Pack Kawaii',
                    'description' => 'Youhouu !! Découvre ce délirant nouveau Pack de smileys très Kawaii !! C\'est LE pack ultime pour changer le look des discussions et mettre du neuf au-dessus de ta tête !! Ils sont supers, mignons et délirants !! Le Pack Kawaii a de l\'avenir dans tes délir',
                    'price' => 390,
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-10-18 23:47:13',
                    'updated_at' => '2022-10-18 23:47:13',
                ) ,
                9 => array(
                    'id' => 12,
                    'name' => 'Pack Vampire',
                    'description' => 'Voici un pack de smileys à l\'honneur de nos amis à canines pointues: les vampires !<br>
Ils sont parfaits pour l\'ambiance Halloween et pour illustrer des discussions terrifiantes !
Alors prépare-toi et sors tes crocs !!<br><b>Trop classe :)</b><br><br>',
                    'price' => 390,
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-10-18 23:47:13',
                    'updated_at' => '2022-10-18 23:47:13',
                ) ,
                10 => array(
                    'id' => 13,
                    'name' => 'Pack Squelette',
                    'description' => 'Kling kling ! Entends-tu claquer les dents du squelette d\'Halloween?!<br>
Le sac d\'os débarque dans tes discussions! Il est là dans tes smileys pour effrayer tes amis ! <br>
C\'est le pack parfait pour la fête des sorcières et des monstres et pour toute ',
                    'price' => 390,
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-10-18 23:47:13',
                    'updated_at' => '2022-10-18 23:47:13',
                ) ,
                11 => array(
                    'id' => 14,
                    'name' => 'Pack Noël',
                    'description' => '<span class="box_stitle_gris">Ho ho ho ! Voici un pack tout plein de magie pour exprimer l\'esprit de Noël !<br><br>
Père Noël, renne, bonhomme de neige et autres décorations sont là pour illustrer vos discussions les plus bienveillantes en cette période ',
                    'price' => 390,
                    'unavailable' => 0,
                    'hidden' => 0,
                    'created_at' => '2022-10-18 23:47:13',
                    'updated_at' => '2022-10-18 23:47:13',
                ) ,
                12 => array(
                    'id' => 4,
                    'name' => 'Pack Feux d\'Artifice',
                    'description' => 'Feux d\'artifices !!',
                    'price' => 390,
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ) ,
                13 => array(
                    'id' => 1,
                    'name' => 'Pack Admin',
                    'description' => 'Admin',
                    'price' => 390,
                    'unavailable' => 1,
                    'hidden' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ) ,
            ));

        \DB::table('smileys')->update(['created_at' => now() , 'updated_at' => now()]);
    }
}

