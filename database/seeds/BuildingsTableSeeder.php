<?php

use Illuminate\Database\Seeder;

class BuildingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Building::create([
            'name' => 'CCS',
        ]);

        Building::create([
            'name' => 'CBAA',
        ]);

        Building::create([
            'name' => 'CASS',
        ]);

        Building::create([
            'name' => 'SET',
        ]);

        Building::create([
            'name' => 'CED',
        ]);

        Building::create([
            'name' => 'COE',
        ]);

        Building::create([
            'name' => 'CSM',
        ]);

        Building::create([
            'name' => 'Gymnasium',
        ]);
    }
}
