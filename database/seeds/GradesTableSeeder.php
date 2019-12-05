<?php

use App\Grade;
use Illuminate\Database\Seeder;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grade::create([
            'grade' => '1.0',
        ]);

        Grade::create([
            'grade' => '1.25',
        ]);

        Grade::create([
            'grade' => '1.50',
        ]);
        
        Grade::create([
            'grade' => '1.75',
        ]);

        Grade::create([
            'grade' => '2.0',
        ]);

        Grade::create([
            'grade' => '2.25',
        ]);

        Grade::create([
            'grade' => '2.50',
        ]);

        Grade::create([
            'grade' => '2.75',
        ]);

        Grade::create([
            'grade' => '3.0',
        ]);

        Grade::create([
            'grade' => '5.0',
        ]);

        Grade::create([
            'grade' => 'INC',
        ]);

        // Grade::create([
        //     'grade' => 'IN PROGRESS',
        // ]);

        // Grade::create([
        //     'grade' => 'PASSED',
        // ]);

        Grade::create([
            'grade' => 'DROP',
        ]);
    }
}
