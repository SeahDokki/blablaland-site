<?php

namespace Database\Seeders;

use App\Models\TipMessage;
use App\Models\TipSecuMessage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountrySeeder::class);
        $this->call(GroupSeeder::class);
        $this->call(SkinSeeder::class);
        $this->call(PowerSeeder::class);
        $this->call(SmileySeeder::class);
        $this->call(SkinSkinSeeder::class);
        $this->call(PowerPowerSeeder::class);
        $this->call(PowerSkinSeeder::class);
        $this->call(GradeSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(RightSeeder::class);
        $this->call(StatutSeeder::class);
        $this->call(MapSeeder::class);
        $this->call(TipMessageSeeder::class);
        $this->call(TipSecuMessageSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SectionSeeder::class);
        $this->call(PenaltySeeder::class);
        $this->call(BadWordSeeder::class);
        $this->call(RecipeSeeder::class);
        $this->call(BadStringSeeder::class);
    }
}
