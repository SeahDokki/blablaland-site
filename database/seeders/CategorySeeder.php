<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->insert([
            'name' => 'BBL Officiel',
            'grade_id' => 0
        ]);

        \DB::table('categories')->insert([
            'name' => 'Blablaland Powa',
            'grade_id' => 0
        ]);

        \DB::table('categories')->insert([
            'name' => 'Et Patati et Patata',
            'grade_id' => 0,
        ]);

        \DB::table('categories')->insert([
            'name' => 'No man\'s Land',
            'grade_id' => 90
        ]);

        \DB::table('categories')->update(['created_at' => now(), 'updated_at' => now()]);
    }
}
