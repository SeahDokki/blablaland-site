<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('grades')->insert([
            'id' => '0',
            'name' => 'Blablateur',
            'color' => '#000000'
        ]);

        \DB::unprepared("UPDATE grades SET id = 0");

        \DB::table('grades')->insert([
            'id' => '90',
            'name' => 'P\'tit Modo Forum',
            'color' => '#43C403'
        ]);

        \DB::table('grades')->insert([
            'id' => '91',
            'name' => 'P\'tit Anim',
            'color' => '#9b7dd0'
        ]);

        \DB::table('grades')->insert([
            'id' => '92',
            'name' => 'P\'tit Modo',
            'color' => '#f1c40f'
        ]);

        \DB::table('grades')->insert([
            'id' => '93',
            'name' => 'Modo Forum',
            'color' => '#20c997'
        ]);

        \DB::table('grades')->insert([
            'id' => '94',
            'name' => 'Animateur',
            'color' => '#815095'
        ]);

        \DB::table('grades')->insert([
            'id' => '95',
            'name' => 'Modo',
            'color' => '#EFA700',
        ]);

        \DB::table('grades')->insert([
            'id' => '300',
            'name' => 'Super Modo',
            'color' => '#ef7e22',
        ]);

        \DB::table('grades')->insert([
            'id'    => '800',
            'name'  => 'Graphiste',
            'color' => '#04bede',
        ]);

        \DB::table('grades')->insert([
            'id' => '950',
            'name' => 'Créateur d\'Univers',
            'color' => '#CA0000'
        ]);

        \DB::table('grades')->update(['created_at' => now(), 'updated_at' => now()]);
    }
}
