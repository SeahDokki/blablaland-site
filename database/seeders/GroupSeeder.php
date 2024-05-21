<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('groups')->insert([
            'id' => 1,
            'name' => 'Mystérieux',
        ]);

        \DB::table('groups')->insert([
            'id' => 2,
            'name' => 'Commandos',
        ]);

        \DB::table('groups')->insert([
            'id' => 3,
            'name' => 'Plage',
        ]);

        \DB::table('groups')->insert([
            'id' => 4,
            'name' => 'Mode',
        ]);

        \DB::table('groups')->insert([
            'id' => 6,
            'name' => 'Métiers',
        ]);

        \DB::table('groups')->insert([
            'id' => 7,
            'name' => 'Blablanimaux',
        ]);

        \DB::table('groups')->insert([
            'id' => 9,
            'name' => 'Sports',
        ]);

        \DB::table('groups')->insert([
            'id' => 10,
            'name' => 'Aventuriers',
        ]);

        \DB::table('groups')->insert([
            'id' => 12,
            'name' => 'Gourmandise',
        ]);

        \DB::table('groups')->insert([
            'id' => 14,
            'name' => 'Blablas',
        ]);

        \DB::table('groups')->insert([
            'id' => 15,
            'name' => 'Noël',
        ]);

        \DB::table('groups')->insert([
            'id' => 16,
            'name' => 'Blabla\'Toyz',
        ]);

        \DB::table('groups')->insert([
            'id' => 17,
            'name' => 'Skins V1',
        ]);

        \DB::table('groups')->insert([
            'id' => 18,
            'name' => 'Asie',
        ]);

        \DB::table('groups')->insert([
            'id' => 20,
            'name' => 'St Valentin',
        ]);

        \DB::table('groups')->insert([
            'id' => 22,
            'name' => 'Robots',
        ]);

        \DB::table('groups')->insert([
            'id' => 23,
            'name' => 'Pâques',
        ]);

        \DB::table('groups')->insert([
            'id' => 25,
            'name' => 'Smileys',
        ]);

        \DB::table('groups')->insert([
            'id' => 28,
            'name' => 'Blablataille Navale',
        ]);

        \DB::table('groups')->insert([
            'id' => 29,
            'name' => 'Halloween',
        ]);

        \DB::table('groups')->insert([
            'id' => 30,
            'name' => 'Blabla Spies',
        ]);

        \DB::table('groups')->insert([
            'id' => 31,
            'name' => 'Saisons',
        ]);

        \DB::table('groups')->insert([
            'id' => 33,
            'name' => 'Héros',
        ]);

        \DB::table('groups')->insert([
            'id' => 35,
            'name' => 'Medieval Blablastic',
        ]);

        \DB::table('groups')->insert([
            'id' => 36,
            'name' => 'Kawaii',
        ]);

        \DB::table('groups')->insert([
            'id' => 37,
            'name' => 'Neige',
        ]);

        \DB::table('groups')->insert([
            'id' => 39,
            'name' => 'Carte cadeau',
        ]);

        \DB::table('groups')->insert([
            'id' => 40,
            'name' => 'PaperToyz',
        ]);

        \DB::table('groups')->insert([
            'id' => 41,
            'name' => 'BBL-Solid Sport',
        ]);

        \DB::table('groups')->insert([
            'id' => 43,
            'name' => 'Horia',
        ]);

        \DB::table('groups')->update(['created_at' => now(), 'updated_at' => now()]);
    }
}
