<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PowerSkinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('power_skin')->delete();

        // La Super Mamie
        \DB::table('power_skin')->insert([
            'power_id' => '14',
            'skin_id' => '138',
            'quantity' => '50',
        ]);

        \DB::table('power_skin')->insert([
            'power_id' => '5',
            'skin_id' => '138',
            'quantity' => '20',
        ]);

        \DB::table('power_skin')->insert([
            'power_id' => '11',
            'skin_id' => '138',
            'quantity' => '600',
        ]);

        \DB::table('power_skin')->insert([
            'power_id' => '42',
            'skin_id' => '278',
            'quantity' => '42',
        ]);

        \DB::table('power_skin')->insert([
            'power_id' => '43',
            'skin_id' => '279',
            'quantity' => '1',
        ]);

        // La Super Mamie d'Halloween
        \DB::table('power_skin')->insert([
            'power_id' => '20',
            'skin_id' => '426',
            'quantity' => '10',
        ]);

        \DB::table('power_skin')->insert([
            'power_id' => '116',
            'skin_id' => '426',
            'quantity' => '10',
        ]);

        \DB::table('power_skin')->insert([
            'power_id' => '80',
            'skin_id' => '426',
            'quantity' => '10',
        ]);

        \DB::table('power_skin')->insert([
            'power_id' => '82',
            'skin_id' => '426',
            'quantity' => '10',
        ]);

        \DB::table('power_skin')->insert([
        'power_id' => '5',
        'skin_id' => '426',
        'quantity' => '10',
        ]);

        \DB::table('power_skin')->insert([
            'power_id' => '8',
            'skin_id' => '426',
            'quantity' => '60',
        ]);

        \DB::table('power_skin')->insert([
            'power_id' => '11',
            'skin_id' => '426',
            'quantity' => '60',
        ]);

        // Nucléaire A.01
        \DB::table('power_skin')->insert([
            'power_id' => '113',
            'skin_id' => '273',
            'quantity' => '1',
        ]);


        // Nucléaire B.02
        \DB::table('power_skin')->insert([
            'power_id' => '113',
            'skin_id' => '288',
            'quantity' => '1',
        ]);

        // Lapin Plage
        \DB::table('power_skin')->insert([
            'power_id' => '201',
            'skin_id' => '376',
            'quantity' => '1',
        ]);

        \DB::table('power_skin')->insert([
            'power_id' => '200',
            'skin_id' => '376',
            'quantity' => '1',
        ]);

        // Princesse
        \DB::table('power_skin')->insert([
            'power_id' => '206',
            'skin_id' => '377',
            'quantity' => '1',
        ]);

        // Guerrier Secret
        \DB::table('power_skin')->insert([
            'power_id' => '211',
            'skin_id' => '378',
            'quantity' => '1',
        ]);

        // Pépé Noël (édition Limitée)
        \DB::table('power_skin')->insert([
            'power_id' => '82',
            'skin_id' => '460',
            'quantity' => '20',
        ]);

        // Alchimiste Garçon
        \DB::table('power_skin')->insert([
            'power_id' => '14',
            'skin_id' => '504',
            'quantity' => '10',
        ]);

        \DB::table('power_skin')->insert([
            'power_id' => '15',
            'skin_id' => '504',
            'quantity' => '10',
        ]);

        \DB::table('power_skin')->insert([
            'power_id' => '16',
            'skin_id' => '504',
            'quantity' => '10',
        ]);

        \DB::table('power_skin')->insert([
            'power_id' => '17',
            'skin_id' => '504',
            'quantity' => '10',
        ]);

        \DB::table('power_skin')->insert([
            'power_id' => '18',
            'skin_id' => '504',
            'quantity' => '10',
        ]);

        \DB::table('power_skin')->insert([
            'power_id' => '80',
            'skin_id' => '504',
            'quantity' => '10',
        ]);

        // Alchimiste Fille
        \DB::table('power_skin')->insert([
            'power_id' => '14',
            'skin_id' => '504',
            'quantity' => '10',
        ]);

        \DB::table('power_skin')->insert([
            'power_id' => '15',
            'skin_id' => '505',
            'quantity' => '10',
        ]);

        \DB::table('power_skin')->insert([
            'power_id' => '16',
            'skin_id' => '505',
            'quantity' => '10',
        ]);

        \DB::table('power_skin')->insert([
            'power_id' => '17',
            'skin_id' => '505',
            'quantity' => '10',
        ]);

        \DB::table('power_skin')->insert([
            'power_id' => '18',
            'skin_id' => '505',
            'quantity' => '10',
        ]);

        \DB::table('power_skin')->insert([
            'power_id' => '80',
            'skin_id' => '505',
            'quantity' => '10',
        ]);

        // Druide
        \DB::table('power_skin')->insert([
            'power_id' => '173',
            'skin_id' => '518',
            'quantity' => '5',
        ]);

        \DB::table('power_skin')->insert([
            'power_id' => '183',
            'skin_id' => '518',
            'quantity' => '5',
        ]);

        \DB::table('power_skin')->insert([
            'power_id' => '182',
            'skin_id' => '518',
            'quantity' => '5',
        ]);

        \DB::table('power_skin')->insert([
            'power_id' => '184',
            'skin_id' => '518',
            'quantity' => '5',
        ]);

        // Druidesse
        \DB::table('power_skin')->insert([
            'power_id' => '173',
            'skin_id' => '520',
            'quantity' => '5',
        ]);

        \DB::table('power_skin')->insert([
            'power_id' => '183',
            'skin_id' => '520',
            'quantity' => '5',
        ]);

        \DB::table('power_skin')->insert([
            'power_id' => '182',
            'skin_id' => '520',
            'quantity' => '5',
        ]);

        \DB::table('power_skin')->insert([
            'power_id' => '184',
            'skin_id' => '520',
            'quantity' => '5',
        ]);

        // Monkey Pirate Garçon
        \DB::table('power_skin')->insert([
            'power_id' => '89',
            'skin_id' => '548',
            'quantity' => '50',
        ]);

        // Monkey Pirate Fille
        \DB::table('power_skin')->insert([
            'power_id' => '89',
            'skin_id' => '549',
            'quantity' => '50',
        ]);

        // Poupée Vaudou
        \DB::table('power_skin')->insert([
            'power_id' => '209',
            'skin_id' => '562',
            'quantity' => '1',
        ]);

        \DB::table('power_skin')->insert([
            'power_id' => '245',
            'skin_id' => '589',
            'quantity' => '10',
        ]);

        \DB::table('power_skin')->insert([
            'power_id' => '245',
            'skin_id' => '590',
            'quantity' => '10',
        ]);


        \DB::table('power_skin')->update(['created_at' => now(), 'updated_at' => now()]);
    }
}
