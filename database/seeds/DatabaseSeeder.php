<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ReligionsTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
        $this->call(BuildingsTableSeeder::class);
        $this->call(ScholarshipsTableSeeder::class);
        $this->call(GradesTableSeeder::class);
        $this->call(CollegesTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        factory('App\Student', 50)->create();
        factory('App\Faculty', 50)->create();
        factory('App\Room', 140)->create();
        $this->call(CurriculaTableSeeder::class);
        $this->call(CurriculumSubjectsTableSeeder::class);
    }
}
