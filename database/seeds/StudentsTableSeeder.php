<?php

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

        foreach (range(0, 500) as $i) {
            $student = Student::create([
                'department_id' => $faker->numberBetween($min = 1, $max = App\Department::count()),
                'religion_id' => $faker->numberBetween($min = 1, $max = App\Religion::count()),
                'first_name' => $faker->firstName,
                'middle_name' => $faker->lastName,
                'last_name' => $faker->lastName,
                'gender' => $genders[array_rand($genders)],
                'date_of_birth' => $faker->date($format = 'Y-m-d', $max = '2000-01-30'),
            ]);

            COR::create([
                'student_id' => $student->id,
                'scholarship_id' => $faker->numberBetween($min = 1, $max = App\Scholarship::count()),
                'curriculum_id' => $faker->numberBetween($min = 1, $max = App\Curriculum::count()),
            ]);
        }
    }
}
