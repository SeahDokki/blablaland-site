<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('countries')->insert([
            'iso'   => 'DE',
            'name'  => 'Allemagne',
        ]);

        \DB::table('countries')->insert([
            'iso'   => 'AU',
            'name'  => 'Australie',
        ]);

        \DB::table('countries')->insert([
            'iso'   => 'AT',
            'name'  => 'Autriche',
        ]);

        \DB::table('countries')->insert([
            'iso'   => 'BE',
            'name'  => 'Belgique',
        ]);

        \DB::table('countries')->insert([
            'iso'   => 'CA',
            'name'  => 'Canada',
        ]);

        \DB::table('countries')->insert([
            'iso'   => 'DK',
            'name'  => 'Danemark',
        ]);

        \DB::table('countries')->insert([
            'iso'   => 'ES',
            'name'  => 'Espagne',
        ]);

        \DB::table('countries')->insert([
            'iso'   => 'US',
            'name'  => 'Etats-Unis',
        ]);

        \DB::table('countries')->insert([
            'iso'   => 'FI',
            'name'  => 'Finlande',
        ]);

        \DB::table('countries')->insert([
            'iso'   => 'FR',
            'name'  => 'France',
        ]);

        \DB::table('countries')->insert([
            'iso'   => 'ZZ',
            'name'  => 'France d\'outre-mer',
            ]);

        \DB::table('countries')->insert([
            'iso'   => 'IE',
            'name'  => 'Irlande',
        ]);

        \DB::table('countries')->insert([
            'iso'   => 'IT',
            'name'  => 'Italie',
        ]);

        \DB::table('countries')->insert([
            'iso'   => 'LU',
            'name'  => 'Luxembourg',
        ]);

        \DB::table('countries')->insert([
            'iso'   => 'MA',
            'name'  => 'Maroc',
        ]);

        \DB::table('countries')->insert([
            'iso'   => 'NO',
            'name'  => 'Norvège',
        ]);

        \DB::table('countries')->insert([
            'iso'   => 'NL',
            'name'  => 'Pays-Bas',
        ]);

        \DB::table('countries')->insert([
            'iso'   => 'PT',
            'name'  => 'Portugal',
        ]);

        \DB::table('countries')->insert([
            'iso'   => 'UK',
            'name'  => 'Royaume-Uni',
        ]);

        \DB::table('countries')->insert([
            'iso'   => 'RU',
            'name'  => 'Russie',
        ]);

        \DB::table('countries')->insert([
            'iso'   => 'SE',
            'name'  => 'Suède',
        ]);

        \DB::table('countries')->insert([
            'iso'   => 'CH',
            'name'  => 'Suisse',
        ]);

        \DB::table('countries')->insert([
            'iso'   => 'XX',
            'name'  => 'Autres... (International)',
        ]);

        \DB::table('countries')->update(['created_at' => now(), 'updated_at' => now()]);
    }
}
