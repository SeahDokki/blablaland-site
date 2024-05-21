<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkinSkinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('skin_skin')->delete();

        \DB::table('skin_skin')->insert([
            'skin_id' => '241',
            'gift_skin_id' => '33',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '242',
            'gift_skin_id' => '56',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '244',
            'gift_skin_id' => '58',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '393',
            'gift_skin_id' => '56',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '394',
            'gift_skin_id' => '58',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '395',
            'gift_skin_id' => '33',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '396',
            'gift_skin_id' => '213',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '397',
            'gift_skin_id' => '57',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '398',
            'gift_skin_id' => '56',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '399',
            'gift_skin_id' => '33',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '400',
            'gift_skin_id' => '58',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '401',
            'gift_skin_id' => '57',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '427',
            'gift_skin_id' => '56',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '511',
            'gift_skin_id' => '56',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '509',
            'gift_skin_id' => '177',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '692',
            'gift_skin_id' => '691',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '676',
            'gift_skin_id' => '533',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '677',
            'gift_skin_id' => '534',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '663',
            'gift_skin_id' => '641',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '664',
            'gift_skin_id' => '642',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '457',
            'gift_skin_id' => '367',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '458',
            'gift_skin_id' => '365',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '538',
            'gift_skin_id' => '506',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '539',
            'gift_skin_id' => '507',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '451',
            'gift_skin_id' => '310',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '452',
            'gift_skin_id' => '311',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '428',
            'gift_skin_id' => '117',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '429',
            'gift_skin_id' => '119',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '449',
            'gift_skin_id' => '120',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '450',
            'gift_skin_id' => '382',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '426',
            'gift_skin_id' => '138',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '370',
            'gift_skin_id' => '271',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '371',
            'gift_skin_id' => '140',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '548',
            'gift_skin_id' => '543',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '549',
            'gift_skin_id' => '544',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '683',
            'gift_skin_id' => '500',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '684',
            'gift_skin_id' => '497',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '685',
            'gift_skin_id' => '577',
        ]);

        \DB::table('skin_skin')->insert([
            'skin_id' => '686',
            'gift_skin_id' => '578',
        ]);

        \DB::table('skin_skin')->update(['created_at' => now(), 'updated_at' => now()]);
    }
}
