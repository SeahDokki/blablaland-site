<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('statuts')->insert([
            'experience' => '0',
            'name' => "Ex-Touriste"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '300',
            'name' => "Blabl'Anonyme"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '505',
            'name' => "Blabla Novice"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '800',
            'name' => "Blabla Timide"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '1032',
            'name' => "Blabla Hésitant"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '3020',
            'name' => "Blabla Padawan"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '4045',
            'name' => "Blabl'Apprenti"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '5040',
            'name' => "Blabla Dynamique"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '6500',
            'name' => "P'tit Blabla"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '7700',
            'name' => "Blabla Disciple"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '12900',
            'name' => "Blabla Certifié"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '15500',
            'name' => "Blabl'Acharné"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '17400',
            'name' => "Blabla Perfectionnable"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '19800',
            'name' => "Blabla Scotché"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '22000',
            'name' => "Blabla Toxic"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '33333',
            'name' => "Blabl'Accompli"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '37000',
            'name' => "Blabla Déchaîné"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '41380',
            'name' => "Blabla Perfectionné"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '45400',
            'name' => "Blabla Respectable"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '49390',
            'name' => "Blabla Bourrin"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '68040',
            'name' => "Blabla Vaillant"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '74240',
            'name' => " Blabla Costaud"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '80670',
            'name' => "Blabla Champion"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '86940',
            'name' => "Blabla Star"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '93240',
            'name' => "Blabla Incontournable"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '120960',
            'name' => "Blabla de Luxe"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '130060',
            'name' => "Blabla Infernal"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '139000',
            'name' => "Blabla Geek"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '148170',
            'name' => "BBL Addicted"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '157240',
            'name' => "Blablator"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '195800',
            'name' => "Blabla Virtuose"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '208200',
            'name' => "Blabla Vénérable"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '220400',
            'name' => "Blabla Zen"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '232800',
            'name' => "Blabla Noble"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '245200',
            'name' => "Blabla Glorieux"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '296000',
            'name' => "Sage Blabla"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '313300',
            'name' => "Blabla Céleste"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '330360',
            'name' => "Blabla Héroïque"
        ]);


        \DB::table('statuts')->insert([
            'experience' => '340500',
            'name' => "Maître Blabla"
        ]);


        \DB::table('statuts')->insert([
            'experience' => '352500',
            'name' => "Blabla Grandiose"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '370010',
            'name' => "Blabla Mythique"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '400100',
            'name' => "Blabla Légendaire"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '500560',
            'name' => "Blabla Titan"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '850000',
            'name' => "Blabla Divin"
        ]);

        \DB::table('statuts')->insert([
            'experience' => '1000000',
            'name' => "Blabla Suprême"
        ]);

        \DB::table('statuts')->update(['created_at' => now(), 'updated_at' => now()]);
    }
}
