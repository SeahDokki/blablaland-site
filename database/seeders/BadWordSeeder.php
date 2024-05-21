<?php

namespace Database\Seeders;

use App\Models\Blablaland\BadWord;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BadWordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('bad_words')->delete();

        BadWord::create([
            'query'             => 'ntm',
            'replace'           => 'ntm',
            'point'             => 100,
            'public'            => true,
            'private'           => true,
            'extra_char'        => false,
            'censorship'        => false,
            'censorship_all'    => false
        ]);

        BadWord::create([
            'query'             => 'fdp',
            'replace'           => 'fdp',
            'point'             => 120,
            'public'            => true,
            'private'           => true,
            'extra_char'        => false,
            'censorship'        => false,
            'censorship_all'    => false
        ]);

        BadWord::create([
            'query'             => 'slp',
            'replace'           => 'slp',
            'point'             => 70,
            'public'            => true,
            'private'           => true,
            'extra_char'        => false,
            'censorship'        => false,
            'censorship_all'    => false
        ]);

        BadWord::create([
            'query'             => 'salope',
            'replace'           => 'salope',
            'point'             => 150,
            'public'            => true,
            'private'           => true,
            'extra_char'        => false,
            'censorship'        => false,
            'censorship_all'    => false
        ]);

        BadWord::create([
            'query'             => 'pute',
            'replace'           => 'pute',
            'point'             => 150,
            'public'            => true,
            'private'           => true,
            'extra_char'        => false,
            'censorship'        => false,
            'censorship_all'    => false
        ]);

        BadWord::create([
            'query'             => 'petasse',
            'replace'           => 'petasse',
            'point'             => 70,
            'public'            => true,
            'private'           => false,
            'extra_char'        => false,
            'censorship'        => false,
            'censorship_all'    => false
        ]);

        BadWord::create([
            'query'             => 'nique',
            'replace'           => 'nique',
            'point'             => 70,
            'public'            => true,
            'private'           => false,
            'extra_char'        => false,
            'censorship'        => false,
            'censorship_all'    => false
        ]);

        BadWord::create([
            'query'             => 'teub',
            'replace'           => 'teub',
            'point'             => 70,
            'public'            => true,
            'private'           => true,
            'extra_char'        => false,
            'censorship'        => false,
            'censorship_all'    => false
        ]);

        BadWord::create([
            'query'             => 'connard',
            'replace'           => 'connard',
            'point'             => 70,
            'public'            => true,
            'private'           => true,
            'extra_char'        => false,
            'censorship'        => false,
            'censorship_all'    => false
        ]);

        BadWord::create([
            'query'             => 'connasse',
            'replace'           => 'connasse',
            'point'             => 70,
            'public'            => true,
            'private'           => true,
            'extra_char'        => false,
            'censorship'        => false,
            'censorship_all'    => false
        ]);

        BadWord::create([
            'query'             => 'penis',
            'replace'           => 'penis',
            'point'             => 70,
            'public'            => true,
            'private'           => true,
            'extra_char'        => false,
            'censorship'        => false,
            'censorship_all'    => false
        ]);

        BadWord::create([
            'query'             => 'vagin',
            'replace'           => 'vagin',
            'point'             => 70,
            'public'            => true,
            'private'           => true,
            'extra_char'        => false,
            'censorship'        => false,
            'censorship_all'    => false
        ]);

        BadWord::create([
            'query'             => 'pd',
            'replace'           => 'pd',
            'point'             => 70,
            'public'            => true,
            'private'           => false,
            'extra_char'        => false,
            'censorship'        => false,
            'censorship_all'    => false
        ]);

        BadWord::create([
            'query'             => 'negre',
            'replace'           => 'negre',
            'point'             => 70,
            'public'            => true,
            'private'           => true,
            'extra_char'        => false,
            'censorship'        => false,
            'censorship_all'    => false
        ]);

        BadWord::create([
            'query'             => 'encul',
            'replace'           => 'encul',
            'point'             => 70,
            'public'            => true,
            'private'           => false,
            'extra_char'        => false,
            'censorship'        => false,
            'censorship_all'    => false
        ]);

        BadWord::create([
            'query'             => 'chatte',
            'replace'           => 'chatte',
            'point'             => 70,
            'public'            => true,
            'private'           => true,
            'extra_char'        => false,
            'censorship'        => false,
            'censorship_all'    => false
        ]);

        BadWord::create([
            'query'             => 'facial',
            'replace'           => 'facial',
            'point'             => 70,
            'public'            => true,
            'private'           => true,
            'extra_char'        => false,
            'censorship'        => false,
            'censorship_all'    => false
        ]);

        BadWord::create([
            'query'             => 'porn',
            'replace'           => 'porn',
            'point'             => 70,
            'public'            => true,
            'private'           => true,
            'extra_char'        => false,
            'censorship'        => false,
            'censorship_all'    => false
        ]);

        BadWord::create([
            'query'             => 'baiser',
            'replace'           => 'baiser',
            'point'             => 70,
            'public'            => true,
            'private'           => true,
            'extra_char'        => false,
            'censorship'        => false,
            'censorship_all'    => false
        ]);

        BadWord::create([
            'query'             => 'fellation',
            'replace'           => 'fellation',
            'point'             => 70,
            'public'            => true,
            'private'           => true,
            'extra_char'        => false,
            'censorship'        => false,
            'censorship_all'    => false
        ]);
    }
}
