<?php

use App\Religion;
use Illuminate\Database\Seeder;

class ReligionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Religion::create([
            'name' => 'Roman Catholic'
        ]);

        Religion::create([
            'name' => 'Protestant'
        ]);

        Religion::create([
            'name' => 'Islam'
        ]);

        Religion::create([
            'name' => 'Iglesia ni Cristo'
        ]);

        Religion::create([
            'name' => 'Born Again'
        ]);

        Religion::create([
            'name' => 'None'
        ]);

    }
}
