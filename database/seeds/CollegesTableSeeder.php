<?php

use App\College;
use Illuminate\Database\Seeder;

class CollegesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        College::create([
            'name' => 'College of Computer Studies',
            'building_id' => 1,
        ]);

        College::create([
            'name' => 'College of Business Administration and Accountancy',
            'building_id' => 2,
        ]); 

        College::create([
            'name' => 'College of Social Arts and Sciences',
            'building_id' => 3,
        ]); 

        College::create([
            'name' => 'College of Nursing',
            'building_id' => 4,
        ]); 

        College::create([
            'name' => 'College of Education',
            'building_id' => 5,
        ]); 

        College::create([
            'name' => 'College of Engineering and Technology',
            'building_id' => 6,
        ]); 

        College::create([
            'name' => 'College of Science and Mathematics',
            'building_id' => 7,
        ]); 
    }
}
