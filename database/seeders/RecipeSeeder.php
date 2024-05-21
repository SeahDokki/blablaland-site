<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('recipes')->delete();

        \DB::table('recipes')->insert(array (
            0 =>
                array (
                    'give' => 179,
                    'id' => 1,
                    'ingredient_a' => 4,
                    'ingredient_b' => -1,
                    'ingredient_c' => 177,
                    'name' => 'Fioles vides',
                    'range_max' => 10,
                    'range_min' => 10,
                ),
            1 =>
                array (
                    'give' => 179,
                    'id' => 2,
                    'ingredient_a' => 4,
                    'ingredient_b' => 4,
                    'ingredient_c' => -1,
                    'name' => 'Fioles vides',
                    'range_max' => 5,
                    'range_min' => 5,
                ),
            2 =>
                array (
                    'give' => 2,
                    'id' => 3,
                    'ingredient_a' => -2,
                    'ingredient_b' => -2,
                    'ingredient_c' => 177,
                    'name' => 'Dilution',
                    'range_max' => 3,
                    'range_min' => 3,
                ),
            3 =>
                array (
                    'give' => 116,
                    'id' => 4,
                    'ingredient_a' => 175,
                    'ingredient_b' => 175,
                    'ingredient_c' => 179,
                    'name' => 'Potion Fantôme',
                    'range_max' => 1,
                    'range_min' => 1,
                ),
            4 =>
                array (
                    'give' => 18,
                    'id' => 5,
                    'ingredient_a' => 174,
                    'ingredient_b' => 176,
                    'ingredient_c' => 179,
                    'name' => 'Potion Multicolore',
                    'range_max' => 1,
                    'range_min' => 1,
                ),
            5 =>
                array (
                    'give' => 14,
                    'id' => 6,
                    'ingredient_a' => 174,
                    'ingredient_b' => 174,
                    'ingredient_c' => 179,
                    'name' => 'Potion de Rapidité',
                    'range_max' => 1,
                    'range_min' => 1,
                ),
            6 =>
                array (
                    'give' => 15,
                    'id' => 7,
                    'ingredient_a' => 174,
                    'ingredient_b' => 175,
                    'ingredient_c' => 179,
                    'name' => 'Potion de Saut',
                    'range_max' => 1,
                    'range_min' => 1,
                ),
            7 =>
                array (
                    'give' => 163,
                    'id' => 8,
                    'ingredient_a' => 14,
                    'ingredient_b' => 15,
                    'ingredient_c' => 18,
                    'name' => 'Potion Étoile',
                    'range_max' => 3,
                    'range_min' => 3,
                ),
            8 =>
                array (
                    'give' => 165,
                    'id' => 9,
                    'ingredient_a' => 14,
                    'ingredient_b' => 16,
                    'ingredient_c' => 164,
                    'name' => 'Potion Foudre',
                    'range_max' => 4,
                    'range_min' => 4,
                ),
            9 =>
                array (
                    'give' => 164,
                    'id' => 10,
                    'ingredient_a' => 15,
                    'ingredient_b' => 17,
                    'ingredient_c' => 116,
                    'name' => 'Potion Plume',
                    'range_max' => 3,
                    'range_min' => 3,
                ),
            10 =>
                array (
                    'give' => 166,
                    'id' => 11,
                    'ingredient_a' => 80,
                    'ingredient_b' => 80,
                    'ingredient_c' => 80,
                    'name' => 'Potion Gros Caca',
                    'range_max' => 6,
                    'range_min' => 2,
                ),
            11 =>
                array (
                    'give' => NULL,
                    'id' => 12,
                    'ingredient_a' => 116,
                    'ingredient_b' => 116,
                    'ingredient_c' => 116,
                    'name' => 'Mort Subite',
                    'range_max' => NULL,
                    'range_min' => NULL,
                ),
            12 =>
                array (
                    'give' => 0,
                    'id' => 13,
                    'ingredient_a' => -1,
                    'ingredient_b' => -1,
                    'ingredient_c' => -1,
                    'name' => 'Mélange hasardeux',
                    'range_max' => 5,
                    'range_min' => 1,
                ),
        ));

        \DB::table('recipes')->update(['created_at' => now(), 'updated_at' => now()]);
    }
}
