<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [];

        User::create([
            'username' => 'Hulk',
            'email'    => 'hulk@blablaland.eu',
            'grade_id' => '950',
            'gender'   => 0,
            'password' => Hash::make('viveblablaland')
        ])->createPlayer($params);

        User::create([
            'username' => 'GrandSage',
            'email'    => 'grandsage@blablaland.eu',
            'grade_id' => '950',
            'gender'   => 0,
            'password' => Hash::make('viveblablaland')
        ])->createPlayer($params);
    }
}
