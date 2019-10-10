<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create([
            'name' => 'Computer Science',
            'college_id' => 1,
        ]); 

        Department::create([
            'name' => 'Information Technology',
            'college_id' => 1,
        ]);

        Department::create([
            'name' => 'Electronics Engineering Technology',
            'college_id' => 1,
        ]);

        Department::create([
            'name' => 'Accountancy',
            'college_id' => 2,
        ]);

        Department::create([
            'name' => 'Economics',
            'college_id' => 2,
        ]);

        Department::create([
            'name' => 'Marketing',
            'college_id' => 2,
        ]);

        Department::create([
            'name' => 'Hotel and Restaurant Management',
            'college_id' => 2,
        ]);

        Department::create([
            'name' => 'Psychology',
            'college_id' => 3,
        ]);

        Department::create([
            'name' => 'English',
            'college_id' => 3,
        ]);

        Department::create([
            'name' => 'Filipino and Other Languages',
            'college_id' => 3,
        ]);

        Department::create([
            'name' => 'History',
            'college_id' => 3,
        ]);

        Department::create([
            'name' => 'Political Science',
            'college_id' => 3,
        ]);

        Department::create([
            'name' => 'Sociology',
            'college_id' => 3,
        ]);

        Department::create([
            'name' => 'Nursing',
            'college_id' => 4,
        ]);

        Department::create([
            'name' => 'Graduate Progams',
            'college_id' => 5,
        ]);

        Department::create([
            'name' => 'Science and Mathematics',
            'college_id' => 5,
        ]);

        Department::create([
            'name' => 'Physical Education',
            'college_id' => 5,
        ]);

        Department::create([
            'name' => 'Technology Teacher Education',
            'college_id' => 5,
        ]);

        Department::create([
            'name' => 'Materials and Resources Engineering and Technology',
            'college_id' => 6,
        ]);

        Department::create([
            'name' => 'Chemical Engineering and Technology',
            'college_id' => 6,
        ]);

        Department::create([
            'name' => 'Civil Engineering',
            'college_id' => 6,
        ]);

        Department::create([
            'name' => 'Electrical and Electronics Engineering Technology',
            'college_id' => 6,
        ]);

        Department::create([
            'name' => 'Mechnical Engineering and Technology',
            'college_id' => 6,
        ]);

        Department::create([
            'name' => 'Biological Sciences',
            'college_id' => 7,
        ]);

        Department::create([
            'name' => 'Chemistry',
            'college_id' => 7,
        ]);

        Department::create([
            'name' => 'Mathematics and Statistics',
            'college_id' => 7,
        ]);

        Department::create([
            'name' => 'Physics',
            'college_id' => 7,
        ]);
    }
}
