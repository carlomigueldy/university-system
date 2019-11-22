<?php

use App\Subject;
use App\Student;
use App\CertificateOfRegistration as COR;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $genders = ['Male', 'Female'];
        $hasScolhaship = [true, false];

        foreach (range(1, 500) as $i) {
            $student = Student::create([
                'department_id' => $faker->numberBetween($min = 1, $max = App\Department::count()),
                'religion_id' => $faker->numberBetween($min = 1, $max = App\Religion::count()),
                'first_name' => $faker->firstName,
                'middle_name' => $faker->lastName,
                'last_name' => $faker->lastName,
                'gender' => $genders[array_rand($genders)],
                'date_of_birth' => $faker->date($format = 'Y-m-d', $max = '2000-01-30'),
            ]);

            $curriculum_id = $faker->numberBetween($min = 1, $max = App\Curriculum::count());

            if ($hasScolhaship[array_rand($hasScolhaship)] == true) {
                $scolarship_id = $faker->numberBetween($min = 1, $max = App\Scholarship::count());
            } else {
                $scholarship_id = 1;
            }

            $curr_subjects = Curriculum::find($curriculum_id);
            $subjects = $curr_subjects->curriculum_subjects->toArray();
            
            /**
             * First Year standing
             */
            $cor = COR::create([
                'student_id' => $student->id,
                'scholarship_id' => $scholarship_id,
                'curriculum_id' => $curriculum_id,
                'standing' => '1st Year',
                'semester' => '1st Semester',
            ]);
                
            foreach (range(1, 8) as $s) {
                $key = array_keys($subjects);
                $subject_id = array_rand($subjects[$key]);
                EnrolledSubject::create([
                    'certificate_of_registration_id' => $cor->id,
                    'grade_id' => $faker->numberBetween($min = 0, $max = App\Grade::count()),
                    'subject_id' => $subject_id,
                ]);
                
                // Remove the element once it was consumed
                unset($subject_id);
            }

            $cor = COR::create([
                'student_id' => $student->id,
                'scholarship_id' => $scholarship_id,
                'curriculum_id' => $curriculum_id,
                'standing' => '1st Year',
                'semester' => '2nd Semester',
            ]);

            foreach (range(1, 8) as $s) {
                $key = array_keys($subjects);
                $subject_id = array_rand($subjects[$key]);
                EnrolledSubject::create([
                    'certificate_of_registration_id' => $cor->id,
                    'grade_id' => $faker->numberBetween($min = 0, $max = App\Grade::count()),
                    'subject_id' => $subject_id,
                ]);
                
                // Remove the element once it was consumed
                unset($subject_id);
            }

            /**
             * Second Year standing
             */
            $cor = COR::create([
                'student_id' => $student->id,
                'scholarship_id' => $scholarship_id,
                'curriculum_id' => $curriculum_id,
                'standing' => '2nd Year',
                'semester' => '1st Semester',
            ]);

            foreach (range(1, 8) as $s) {
                $key = array_keys($subjects);
                $subject_id = array_rand($subjects[$key]);
                EnrolledSubject::create([
                    'certificate_of_registration_id' => $cor->id,
                    'grade_id' => $faker->numberBetween($min = 0, $max = App\Grade::count()),
                    'subject_id' => $subject_id,
                ]);
                
                // Remove the element once it was consumed
                unset($subject_id);
            }

            $cor = COR::create([
                'student_id' => $student->id,
                'scholarship_id' => $scholarship_id,
                'curriculum_id' => $curriculum_id,
                'standing' => '2nd Year',
                'semester' => '2nd Semester',
            ]);

            foreach (range(1, 8) as $s) {
                $key = array_keys($subjects);
                $subject_id = array_rand($subjects[$key]);
                EnrolledSubject::create([
                    'certificate_of_registration_id' => $cor->id,
                    'grade_id' => $faker->numberBetween($min = 0, $max = App\Grade::count()),
                    'subject_id' => $subject_id,
                ]);
                
                // Remove the element once it was consumed
                unset($subject_id);
            }

            /**
             * Third Year standing
             */
            $cor = COR::create([
                'student_id' => $student->id,
                'scholarship_id' => $scholarship_id,
                'curriculum_id' => $curriculum_id,
                'standing' => '3rd Year',
                'semester' => '1st Semester',
            ]);

            foreach (range(1, 8) as $s) {
                $key = array_keys($subjects);
                $subject_id = array_rand($subjects[$key]);
                EnrolledSubject::create([
                    'certificate_of_registration_id' => $cor->id,
                    'grade_id' => $faker->numberBetween($min = 0, $max = App\Grade::count()),
                    'subject_id' => $subject_id,
                ]);
                
                // Remove the element once it was consumed
                unset($subject_id);
            }

            $cor = COR::create([
                'student_id' => $student->id,
                'scholarship_id' => $scholarship_id,
                'curriculum_id' => $curriculum_id,
                'standing' => '3rd Year',
                'semester' => '2nd Semester',
            ]);

            foreach (range(1, 8) as $s) {
                $key = array_keys($subjects);
                $subject_id = array_rand($subjects[$key]);
                EnrolledSubject::create([
                    'certificate_of_registration_id' => $cor->id,
                    'grade_id' => $faker->numberBetween($min = 0, $max = App\Grade::count()),
                    'subject_id' => $subject_id,
                ]);
                
                // Remove the element once it was consumed
                unset($subject_id);
            }

            /**
             * Fourth Year standing
             */
            $cor = COR::create([
                'student_id' => $student->id,
                'scholarship_id' => $scholarship_id,
                'curriculum_id' => $curriculum_id,
                'standing' => '4th Year',
                'semester' => '1st Semester',
            ]);
            
            foreach (range(1, 8) as $s) {
                $key = array_keys($subjects);
                $subject_id = array_rand($subjects[$key]);
                EnrolledSubject::create([
                    'certificate_of_registration_id' => $cor->id,
                    'grade_id' => $faker->numberBetween($min = 0, $max = App\Grade::count()),
                    'subject_id' => $subject_id,
                ]);
                
                // Remove the element once it was consumed
                unset($subject_id);
            }

            $cor = COR::create([
                'student_id' => $student->id,
                'scholarship_id' => $scholarship_id,
                'curriculum_id' => $curriculum_id,
                'standing' => '4th Year',
                'semester' => '2nd Semester',
            ]);

            foreach (range(1, 8) as $s) {
                $key = array_keys($subjects);
                $subject_id = array_rand($subjects[$key]);
                EnrolledSubject::create([
                    'certificate_of_registration_id' => $cor->id,
                    'grade_id' => $faker->numberBetween($min = 0, $max = App\Grade::count()),
                    'subject_id' => $subject_id,
                ]);
                
                // Remove the element once it was consumed
                unset($subject_id);
            }
        }
    }
}
