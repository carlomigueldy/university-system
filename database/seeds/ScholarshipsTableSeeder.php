<?php

use App\Scholarship;
use Illuminate\Database\Seeder;

class ScholarshipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Scholarship::create([
            'name' => 'None',
        ]);
        
        Scholarship::create([
            'name' => 'DOST'
        ]);

        Scholarship::create([
            'name' => 'DOST-JLSS'
        ]);
        
        Scholarship::create([
            'name' => 'CHED' 
        ]);
        
        Scholarship::create([
            'name' => 'Government'
        ]);
        
        Scholarship::create([
            'name' => 'Cherry Mobile'
        ]);

        Scholarship::create([
            'name' => 'Shell'
        ]);
    }
}
