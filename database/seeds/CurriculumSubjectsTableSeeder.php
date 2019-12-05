<?php

use App\Offering;
use App\Subject;
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
        
        /**
         * On each curriculum, it has at least 60 subjects in it.
         * And course offerings is added as well just according
         * to what the subjects are.
         */
        foreach ($curriculums as $curriculum) {
            $subjects = Subject::all()->toArray();
            $subjectKeys = array_keys($subjects);
            $numberOfSubjects = 64;
            
            /**
             * Each Curriculum will have 64 subjects.
             */
            for ($i = 0; $i < $numberOfSubjects; $i++) {
                $index = null;
                while (!$index) {
                    $index = array_rand($subjects); 
                }
                
                $subject_id = $subjects[$index]['id'];
                unset($subjects[$index]);
                
                $curr_subj = CurriculumSubject::create([
                    'curriculum_id' => $curriculum->id,
                    'subject_id' => $subject_id,
                ]);

                $department = App\Curriculum::where('id', $curr_subj->curriculum_id)->first();
                $faculties = App\Faculty::where('department_id', $department->id)->select('id')->get()->toArray();

                if(count($faculties) > 0) {
                    Offering::create([
                        'room_id' => $faker->numberBetween($min = 1, $max = App\Room::count()),
                        'faculty_id' => $faculties[array_rand($faculties)]['id'],
                        'subject_id' => $subject_id,
                    ]);
                }
            }

        }
    }
}
