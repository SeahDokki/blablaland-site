<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipMessageSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tip_messages')->delete();

        \DB::table('tip_messages')->insert(array (
            0 =>
            array (
                'id' => 1,
                'message' => 'Attention aux sites de fans et forums de membres : les créateurs peuvent voir ton email et ton mot de passe d\'inscription, alors choisis un mot de passe différent de celui de Blablaland :)',
            ),
            1 =>
            array (
                'id' => 2,
                'message' => '"On tue un Blabla, on est un Toyz. On tue des millions de Blablas, on est un Bombardeur. On les tue tous, on est un Créateur."',
            ),
            2 =>
            array (
                'id' => 3,
                'message' => 'La team modo vous souhaite un agréable séjour sur Blablaland !',
            ),
            3 =>
            array (
                'id' => 4,
            'message' => 'L\'aide du chat peut te faciliter la vie, n\'oublie pas de la consulter ;)',
            ),
            4 =>
            array (
                'id' => 5,
                'message' => 'Si quelqu\'un te propose des BBL en échange de ton mot de passe c\'est une ARNAQUE. Alors n\'hésite pas à le mettre dans tes boulets et à le signaler à un modo.',
            ),
            5 =>
            array (
                'id' => 6,
                'message' => '"Si un boulet se cogne la tête contre un mur et que tu entends un son creux , ce n\'est pas forcément le mur qui est vide."',
            ),
            6 =>
            array (
                'id' => 7,
                'message' => 'Blablaland, le jeu où dans n\'importe quel crapaud se cache un prince charmant ^^',
            ),
            7 =>
            array (
                'id' => 8,
                'message' => 'C\'est une petite connexion pour les Blablas, mais une grande victoire pour Blablaland ^^',
            ),
            8 =>
            array (
                'id' => 9,
            'message' => 'Pour te déplacer, appuie sur les flèches de ton clavier :)',
            ),
            9 =>
            array (
            'id' => 10,
            'message' => 'Se renseigner dans l\'Aide avant de poser une question c\'est pas un crime, c\'est même recommandé ! Le lien : http://www.blablaland.com/site/faq.php',
            ),
            10 =>
            array (
            'id' => 11,
            'message' => 'Une personne reste une personne, même toute petite !!',
            ),
            11 =>
            array (
            'id' => 12,
            'message' => 'Attention aux pièges sur Internet ! Si un site te demande ton mot de passe contre des blabillons ou un accès modo, y\'a pas de doute, c\'est une arnaque ;)',
            ),
            12 =>
            array (
            'id' => 13,
            'message' => 'BLABLA POWA !',
            ),
            13 =>
            array (
            'id' => 14,
            'message' => 'T\'es doué en dessin ou en montages ? Alors rejoins et affronte la communauté des BBL\'Artistes ^^',
            ),
            14 =>
            array (
            'id' => 15,
            'message' => 'A chaque problème sa solution, à chaque boulet sa punition !',
            ),
            15 =>
            array (
            'id' => 16,
            'message' => 'Jamais un modérateur ou un créateur ne te demandera ton mot de passe.',
            ),
            16 =>
            array (
            'id' => 17,
            'message' => 'Un membre te provoque ou t\'insulte? Plutôt que l\'insulter en retour et risquer de te faire kicker, met le dans ta blacklist, t\'auras la paix ;)',
            ),
            17 =>
            array (
            'id' => 18,
            'message' => 'Accroche toi, tu es bien sur Blablaland.com ;)',
            ),
            18 =>
            array (
            'id' => 19,
            'message' => 'Les modérateurs sont nos amis, il faut les aimer aussi ! ^_^',
            ),
            19 =>
            array (
            'id' => 20,
            'message' => 'Partager ton compte avec un ami, un membre de ta famille, ou même ton poisson rouge accentue les risques de piratage.',
            ),
            20 =>
            array (
            'id' => 21,
            'message' => 'Bonne visite sur Blablaland !',
            ),
            21 =>
            array (
            'id' => 22,
            'message' => 'Pour faire une visite de la prison, tape /prison sur le T\'chat ;)',
            ),
            22 =>
            array (
            'id' => 23,
            'message' => 'Jamais le staff Blablaland ne te proposera un poste de modérateur par email.',
            ),
            23 =>
            array (
            'id' => 24,
            'message' => 'Quand tu rencontres quelqu\'un dans la rue, tu lui donnes ton numéro de téléphone? Non, alors fais de même sur le Tchat pour tes infos persos, elles pourraient tomber entre de mauvaises mains :)',
            ),
            24 =>
            array (
            'id' => 25,
            'message' => 'Si t\'as pas d\'amis, prends un Blibli !!',
            ),
            25 =>
            array (
            'id' => 26,
            'message' => 'Une question, un doute à propos de Blablaland? N\'hésite pas à consulter la FAQ: http://www.blablaland.com/site/faq.php',
            ),
            26 =>
            array (
            'id' => 27,
            'message' => 'Sur Blablaland, on a quelque chose à te dire :)',
            ),
            27 =>
            array (
            'id' => 28,
            'message' => 'La plupart des gens qui te proposent d\'échanger ton compte contre des blabillons cherchent à t\'arnaquer, alors fais attention.',
            ),
            28 =>
            array (
            'id' => 29,
            'message' => 'Sur le tchat, si tu veux donner ton adresse msn à quelqu\'un donne la en MP à la personne, ça t\'évitera beaucoup d\'autres problèmes.',
            ),
            29 =>
            array (
            'id' => 30,
            'message' => 'Ce n\'est pas le blablateur qui demande à aller sur la map privée. C\'est le modo qui choisit.',
            ),
            30 =>
            array (
            'id' => 31,
            'message' => 'Attention, il est difficile de savoir qui peut se cacher derrière un pseudo ! Si tu dois rencontrer un membre en vrai, assure toi de le connaitre, informe ton entourage, et essaye de venir accompagné, question de sécurité élémentaire :)',
            ),
            31 =>
            array (
            'id' => 32,
            'message' => 'Même si ça te parait amusant, exploiter ou diffuser des bugs du tchat tels que nager ailleurs que dans l\'eau ou escalader dans le ciel est passible d\'un bannissement voire d\'un blocage définitif de ton compte. Alors penses y avant de faire quelque chose que tu pourrais regretter :)',
            ),
            32 =>
            array (
            'id' => 33,
            'message' => 'Gare aux pièges ! Vérifie toujours quand tu cliques sur un lien pour aller sur Blablaland que l\'adresse est bien http://www.blablaland.com. Si ce n\'est pas le cas, tu es sur un site frauduleux qui tente de récupérer ton mot de passe ! Alors sois vigilant !',
            ),
            33 =>
            array (
            'id' => 34,
            'message' => 'Si quelqu\'un a ton mot de passe il pourra faire ce qu\'il veut de ton compte et ça risque de te causer des ennuis.',
            ),
            34 =>
            array (
            'id' => 35,
            'message' => 'Sécuriser son compte, c\'est avant tout sécuriser son email.',
            ),
            35 =>
            array (
            'id' => 36,
            'message' => 'Blablaland, c\'est meilleur que le café!',
            ),
            36 =>
            array (
            'id' => 37,
            'message' => 'Pour envoyer un message privé, écris /mp pseudo message. Exemple : /mp Psyche salut !',
            ),
            37 =>
            array (
            'id' => 38,
            'message' => 'Les flageolets magiques te permettent de te propulser dans les airs et dans l\'eau en pétant, fortiche non ?!',
            ),
            38 =>
            array (
            'id' => 39,
            'message' => 'Méfie toi de ceux qui prétendent donner des codes, la plupart du temps ils essayent juste d\'avoir ton mot de passe,ou ton adresse msn.',
            ),
            39 =>
            array (
            'id' => 40,
            'message' => 'AVIS A LA POPULATION : Nous recherchons les clefs de l\'Irwish !',
            ),
            40 =>
            array (
            'id' => 41,
            'message' => 'Ne donne jamais ton mot de passe, pas même à un modo ou à un créateur.',
            ),
            41 =>
            array (
            'id' => 42,
            'message' => 'BBL un jour, BBL toujours :D',
            ),
            42 =>
            array (
            'id' => 43,
            'message' => 'Faites un tour sur la miniville de Blablaland pour la faire grandir et fleurir :)http://bbl-town.miniville.fr/',
            ),
            43 =>
            array (
            'id' => 44,
            'message' => 'Pour te déplacer plus rapidement pour aller d\'un point éloigné à un autre, passe par le paradis ;)',
            ),
            44 =>
            array (
            'id' => 45,
            'message' => 'Bon blabla !  ^^',
            ),
            45 =>
            array (
            'id' => 46,
            'message' => '"9 personnes sur 10 aiment Blablaland, la 10ème ment."  yumi',
            ),
            46 =>
            array (
            'id' => 47,
            'message' => 'Blablaland, LE chat de qualité !',
            ),
            47 =>
            array (
            'id' => 48,
            'message' => 'L\'aide du Tchat peut te faciliter la vie, n\'oublie pas de la consulter ;)',
            ),
            48 =>
            array (
            'id' => 49,
            'message' => 'Chaque phrase parlée en langage f4Sh[ii]0n tue 3 chatons (ou 1 poney)',
            ),
            49 =>
            array (
            'id' => 50,
            'message' => 'Blablaland, le jeu avec des poules dedans.',
            ),
            50 =>
            array (
            'id' => 51,
            'message' => 'Posséder un drapeau est signe de prestige.',
            ),
            51 =>
            array (
            'id' => 52,
            'message' => 'Tous les jours, tu peux récupérer un cadeau caché dans l\'Irwish.',
            ),
            52 =>
            array (
            'id' => 53,
            'message' => 'Tu peux changer les réglages du jeu depuis le bouton "Menu > Réglages" en jeu',
            ),
            53 =>
            array (
            'id' => 54,
            'message' => ':) rien à sert ne moonwalk un Acheter',
            ),
            54 =>
            array (
            'id' => 55,
            'message' => 'Pour crier, tape /cri suivit de ton message. Exemple : "/cri coucou !". Tu peux aussi terminer ta phrase par "!!!"',
            ),
            55 =>
            array (
            'id' => 56,
            'message' => 'La catapulte de la zone 52 peut t\'éjecter plus loin si tu gardes la flèche du bas enfoncée avant d\'être éjecté',
            ),
            56 =>
            array (
            'id' => 57,
            'message' => 'Le pouvoir du Téléporteur est très pratique pour changer de map rapidement.',
            ),
            57 =>
            array (
            'id' => 58,
            'message' => 'Les Jardiniers peuvent arroser les plantes pour les faire pousser plus vite, ou faire grandir les skins Fruits & Légumes',
            ),
            58 =>
            array (
            'id' => 59,
            'message' => 'Si tu trouves un Trèfle en cueillant des fleurs, tu gagnes des Blabillons. A noter que les Leprechauns ont plus de chances de trouver un Trèfle !',
            ),
            59 =>
            array (
            'id' => 60,
            'message' => 'Un membre te provoque ou t\'insulte, clique dessus et passe le dans ta blacklist (ou en boulet) pour l\'ignorer. Tu auras la paix.',
            ),
            60 =>
            array (
            'id' => 61,
            'message' => 'Le tam-tam à Blahiti permet de jouer la musique de Georges de la Jungle :)',
            ),
            61 =>
            array (
            'id' => 62,
            'message' => 'Lorsque tu te déplaces, maintiens la touche SHIFT (MAJ) enfoncée pour marcher lentement et sauter moins haut.',
            ),
            62 =>
            array (
            'id' => 63,
            'message' => 'Pour penser, tape /pense suivi de ton message. Exemple : "/pense Que c\'est beau ici !". Tu peux aussi commencer ta phrase par "..."',
            ),
            63 =>
            array (
            'id' => 64,
            'message' => 'Une question, un doute, consulte l\'Aide de Blablaland.',
            ),
            64 =>
            array (
            'id' => 65,
            'message' => 'Acheter la Super Mamie tu dois, c\'est une promo ultime !',
            ),
            65 =>
            array (
            'id' => 66,
            'message' => 'Tu peux gagner jusqu\'à 700 BBL en invitant un(e) ami(e) sur Blablaland !!',
            ),
            66 =>
            array (
            'id' => 67,
            'message' => 'Tu peux gagner des récompenses en jouant aux Mini-Jeux',
            ),
            67 =>
            array (
            'id' => 68,
            'message' => 'Toutes les nuits, l\'XP que tu as gagné dans la journée est convertie en Blabillons.',
            ),
            68 =>
            array (
            'id' => 69,
            'message' => 'Le Blalgicien te permet de copier un skin pour le tester et d\'avoir ainsi ses pouvoirs pendant quelques instants.',
            ),
            69 =>
            array (
            'id' => 70,
            'message' => 'Tu es créatif, rejoins et affronte la communauté du BBL\'Art Club.',
            ),
            70 =>
            array (
            'id' => 71,
            'message' => 'Si tu as des problèmes de performance, tu peux baisser la qualité du jeu depuis "Menu > Réglages"',
            ),
            71 =>
            array (
            'id' => 72,
            'message' => 'Les Blablas qui ont un contour lumineux sont des modérateurs.',
            ),
            72 =>
            array (
            'id' => 73,
            'message' => 'Avant d\'inviter quelqu\'un à jouer aux mini-Jeux, il est préférable et surtout nettement plus poli de lui parler un peu :)',
            ),
            73 =>
            array (
            'id' => 74,
            'message' => 'Si tu passes au travers de l\'anneau à la Tour Céleste, tu gagnes un bonus de vitesse pendant quelques instants',
            ),
            74 =>
            array (
            'id' => 75,
            'message' => 'Pour chuchotter un message à quelqu\'un, écris "/mp  suivi de ton message". Par exemple "/mp mX salut !"',
            ),
            75 =>
            array (
            'id' => 76,
            'message' => 'Les Trous noirs permettent de téléporter un nombre illimité de joueurs dans une autre map.',
            ),
            76 =>
            array (
            'id' => 77,
            'message' => 'Pour crier, tape /cri suivi de ton message. Exemple : "/cri coucou !". Tu peux aussi terminer ta phrase par "!!!"',
            ),
            77 =>
            array (
            'id' => 78,
            'message' => 'Les skins Loup-Garou, Vampire et Zombie peuvent contaminer les autres joueurs pour se créer une horde.',
            ),
            78 =>
            array (
            'id' => 79,
            'message' => 'Le Lance Potion te permet de partager l\'effet de tes potions avec les autres joueurs !',
            ),
            79 =>
            array (
            'id' => 80,
            'message' => 'Utilise une lingette ou saute dans l\'eau pour te nettoyer et reprendre ta couleur d\'origine (après t\'être pris une tomate par exemple)',
            ),
            80 =>
            array (
            'id' => 81,
            'message' => 'Le n400 est le 400ème skin de la Boutique (les variantes ne sont pas comptées).',
            ),
            81 =>
            array (
            'id' => 82,
            'message' => 'La catapulte de la zone 52 peut t\'éjecter plus loin si tu gardes la flèche du bas enfoncée avant d\'être éjecté.',
            ),
            82 =>
            array (
            'id' => 83,
            'message' => 'Tu peux créer des Potions exclusives avec les Alchimistes, et récolter des ingrédients sur les fleurs avec les Druides',
            ),
            83 =>
            array (
            'id' => 84,
            'message' => 'Les montures te permettent d\'aller plus vite ou d\'avoir des actions spéciales.',
            ),
            84 =>
            array (
            'id' => 85,
            'message' => 'Le skin du Panda WWF est gratuit. Tu peux le récupérer depuis les Mini-Jeux.',
            ),
            85 =>
            array (
            'id' => 86,
            'message' => 'Tu devrais essayer les flageolets magiques avec un skin nucléaire :)',
            ),
            86 =>
            array (
            'id' => 87,
            'message' => 'Pour visiter la prison pendant 1 minute, tape /prison en jeu.',
            ),
        ));

        \DB::table('tip_messages')->update(['created_at' => now(), 'updated_at' => now()]);
    }
}
