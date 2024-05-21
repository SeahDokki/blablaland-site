<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('rights')->insert([
            'name' => 'AKBCHANGE',
            'grade_id' => 92,
        ]);

        \DB::table('rights')->insert([
            'name' => 'DROITSCHANGE',
            'grade_id' => 300,
        ]);

        \DB::table('rights')->insert([
            'name' => 'MSGMAP',
            'grade_id' => 91,
        ]);

        \DB::table('rights')->insert([
            'name' => 'MSGALLMAP',
            'grade_id' => 91,
        ]);

        \DB::table('rights')->insert([
            'name' => 'MSGALLUNI',
            'grade_id' => 94,
        ]);

        \DB::table('rights')->insert([
            'name' => 'USERCASIER',
            'grade_id' => 92,
        ]);

        \DB::table('rights')->insert([
            'name' => 'GRADESCHANGE',
            'grade_id' => 300,
        ]);

        \DB::table('rights')->insert([
            'name' => 'INSULTRONCHANGE',
            'grade_id' => 300,
        ]);

        \DB::table('rights')->insert([
            'name' => 'DROITSTELEPORTS',
            'grade_id' => 91,
        ]);

        \DB::table('rights')->insert([
            'name' => 'MODOFORUM',
            'grade_id' => 90,
        ]);

        \DB::table('rights')->insert([
            'name' => 'ADVACCESS',
            'grade_id' => 300,
        ]);

        \DB::table('rights')->insert([
            'name' => 'DAILYMSGCHANGE',
            'grade_id' => 950,
        ]);

        \DB::table('rights')->insert([
            'name' => 'FREEPRISON',
            'grade_id' => 95,
        ]);

        \DB::table('rights')->insert([
            'name' => 'TRACKMP',
            'grade_id' => 92,
        ]);

        \DB::table('rights')->insert([
            'name' => 'LIGHTEFFECT',
            'grade_id' => 90,
        ]);

        \DB::table('rights')->insert([
            'name' => 'USERCASIERADV',
            'grade_id' => 95,
        ]);

        \DB::table('rights')->insert([
            'name' => 'AKBMANAGER',
            'grade_id' => 300,
        ]);

        \DB::table('rights')->insert([
            'name' => 'DROITSTELEPORTO',
            'grade_id' => 90,
        ]);

        \DB::table('rights')->insert([
            'name' => 'DROITSVINSULTRON',
            'grade_id' => 92,
        ]);

        \DB::table('rights')->insert([
            'name' => 'LVLNAMECHANGE',
            'grade_id' => 950,
        ]);

        \DB::table('rights')->insert([
            'name' => 'SECRETALLOW',
            'grade_id' => 300,
        ]);

        \DB::table('rights')->insert([
            'name' => 'IPLOGDB',
            'grade_id' => 950,
        ]);

        \DB::table('rights')->insert([
            'name' => 'KICKCONSOLE',
            'grade_id' => 300,
        ]);

        \DB::table('rights')->insert([
            'name' => 'UPDATEPSEUDO',
            'grade_id' => 95,
        ]);

        \DB::table('rights')->insert([
            'name' => 'MASSBAN',
            'grade_id' => 300,
        ]);

        \DB::table('rights')->insert([
            'name' => 'VIEWIP',
            'grade_id' => 300,
        ]);

        \DB::table('rights')->update(['created_at' => now(), 'updated_at' => now()]);
    }
}
