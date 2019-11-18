<?php

use App\Offering;
use App\Curriculum;
use App\CurriculumSubject;
use Illuminate\Database\Seeder;

class CurriculumSubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $curriculums = Curriculum::select('id')->get();
        foreach ($curriculums as $curriculum) {
            for ($i = 0; $i < 60; $i++) {
                $curr_subj = CurriculumSubject::create([
                    'curriculum_id' => $curriculum->id,
                    'subject_id' => $faker->numberBetween($min = 1, $max= App\Subject::count()),
                ]);

                $department_id = App\Curriculum::where('id', $curr_subj->curriculum_id)->select('department_id')->first();
                $faculties = App\Faculty::where('department_id', $department_id)->select('id')->get()->toArray();

                if(count($faculties) > 0) 
                    Offering::create([
                        'room_id' => $faker->numberBetween($min = 1, $max = App\Room::count()),
                        'faculty_id' => $faculties[array_rand($faculties)]['id'],
                        'subject_id' => $curr_subj->subject_id,
                    ]);
            }
        }
    }
}
