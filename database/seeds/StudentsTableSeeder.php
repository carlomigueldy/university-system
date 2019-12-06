<?php

use App\EnrolledSubject;
use App\Subject;
use App\Student;
use App\Curriculum;
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
        $years = [];
        foreach (range(0, 37) as $i) {
            array_push($years, 1980 + $i);
        }
        
        // 500+600+700 ... 30 times increment by 100
        foreach (range(1, 58500) as $i) {
            $year = $faker->numberBetween($min = 0, $max = count($years) - 4);
            $genders = ['Male', 'Female'];
            $hasScholarship = [true, false];
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
            
            $scholarship_id = 1;
            if ($hasScholarship[array_rand($hasScholarship)] == true) {
                $scolarship_id = $faker->numberBetween($min = 1, $max = App\Scholarship::count());
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
                'year' => $years[$year],
            ]);
                
            foreach (range(1, 8) as $s) {
                $subject = array_rand($subjects);
                EnrolledSubject::create([
                    'certificate_of_registration_id' => $cor->id,
                    'grade_id' => $faker->numberBetween($min = 1, $max = App\Grade::count()),
                    'subject_id' => $subjects[$subject]['subject_id'],
                ]);
                
                // Remove the element once it was consumed
                unset($subjects[$subject]);
            }

            $cor = COR::create([
                'student_id' => $student->id,
                'scholarship_id' => $scholarship_id,
                'curriculum_id' => $curriculum_id,
                'standing' => '1st Year',
                'semester' => '2nd Semester',
                'year' => $years[$year],
            ]);

            foreach (range(1, 8) as $s) {
                $subject = array_rand($subjects);
                EnrolledSubject::create([
                    'certificate_of_registration_id' => $cor->id,
                    'grade_id' => $faker->numberBetween($min = 1, $max = App\Grade::count()),
                    'subject_id' => $subjects[$subject]['subject_id'],
                ]);
                
                // Remove the element once it was consumed
                unset($subjects[$subject]);
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
                'year' => $years[$year + 1],
            ]);

            foreach (range(1, 8) as $s) {
                $subject = array_rand($subjects);
                EnrolledSubject::create([
                    'certificate_of_registration_id' => $cor->id,
                    'grade_id' => $faker->numberBetween($min = 1, $max = App\Grade::count()),
                    'subject_id' => $subjects[$subject]['subject_id'],
                ]);
                
                // Remove the element once it was consumed
                unset($subjects[$subject]);
            }

            $cor = COR::create([
                'student_id' => $student->id,
                'scholarship_id' => $scholarship_id,
                'curriculum_id' => $curriculum_id,
                'standing' => '2nd Year',
                'semester' => '2nd Semester',
                'year' => $years[$year + 1],
            ]);

            foreach (range(1, 8) as $s) {
                $subject = array_rand($subjects);
                EnrolledSubject::create([
                    'certificate_of_registration_id' => $cor->id,
                    'grade_id' => $faker->numberBetween($min = 1, $max = App\Grade::count()),
                    'subject_id' => $subjects[$subject]['subject_id'],
                ]);
                
                // Remove the element once it was consumed
                unset($subjects[$subject]);
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
                'year' => $years[$year + 2],
            ]);

            foreach (range(1, 8) as $s) {
                $subject = array_rand($subjects);
                EnrolledSubject::create([
                    'certificate_of_registration_id' => $cor->id,
                    'grade_id' => $faker->numberBetween($min = 1, $max = App\Grade::count()),
                    'subject_id' => $subjects[$subject]['subject_id'],
                ]);
                
                // Remove the element once it was consumed
                unset($subjects[$subject]);
            }

            $cor = COR::create([
                'student_id' => $student->id,
                'scholarship_id' => $scholarship_id,
                'curriculum_id' => $curriculum_id,
                'standing' => '3rd Year',
                'semester' => '2nd Semester',
                'year' => $years[$year + 2],
            ]);

            foreach (range(1, 8) as $s) {
                $subject = array_rand($subjects);
                EnrolledSubject::create([
                    'certificate_of_registration_id' => $cor->id,
                    'grade_id' => $faker->numberBetween($min = 1, $max = App\Grade::count()),
                    'subject_id' => $subjects[$subject]['subject_id'],
                ]);
                
                // Remove the element once it was consumed
                unset($subjects[$subject]);
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
                'year' => $years[$year + 3],
            ]);
            
            foreach (range(1, 8) as $s) {
                $subject = array_rand($subjects);
                EnrolledSubject::create([
                    'certificate_of_registration_id' => $cor->id,
                    'grade_id' => $faker->numberBetween($min = 1, $max = App\Grade::count()),
                    'subject_id' => $subjects[$subject]['subject_id'],
                ]);
                
                // Remove the element once it was consumed
                unset($subjects[$subject]);
            }

            $cor = COR::create([
                'student_id' => $student->id,
                'scholarship_id' => $scholarship_id,
                'curriculum_id' => $curriculum_id,
                'standing' => '4th Year',
                'semester' => '2nd Semester',
                'year' => $years[$year + 3],
            ]);

            foreach (range(1, 8) as $s) {
                $subject = array_rand($subjects);
                EnrolledSubject::create([
                    'certificate_of_registration_id' => $cor->id,
                    'grade_id' => $faker->numberBetween($min = 1, $max = App\Grade::count()),
                    'subject_id' => $subjects[$subject]['subject_id'],
                ]);
                
                // Remove the element once it was consumed
                unset($subjects[$subject]);
            }
        }
    }
}
