<?php

use App\Department;
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
        // 1
        Department::create([
            'name' => 'Computer Science',
            'college_id' => 1,
        ]); 

        // 2
        Department::create([
            'name' => 'Information Technology',
            'college_id' => 1,
        ]);

        // 3
        Department::create([
            'name' => 'Electronics Engineering Technology',
            'college_id' => 1,
        ]);

        // 4
        Department::create([
            'name' => 'Accountancy',
            'college_id' => 2,
        ]);

        // 5
        Department::create([
            'name' => 'Economics',
            'college_id' => 2,
        ]);

        // 6
        Department::create([
            'name' => 'Marketing',
            'college_id' => 2,
        ]);

        // 7
        Department::create([
            'name' => 'Hotel and Restaurant Management',
            'college_id' => 2,
        ]);

        // 8
        Department::create([
            'name' => 'Psychology',
            'college_id' => 3,
        ]);

        // 9
        Department::create([
            'name' => 'English',
            'college_id' => 3,
        ]);

        // 10
        Department::create([
            'name' => 'Filipino and Other Languages',
            'college_id' => 3,
        ]);

        // 11
        Department::create([
            'name' => 'History',
            'college_id' => 3,
        ]);

        // 12
        Department::create([
            'name' => 'Political Science',
            'college_id' => 3,
        ]);

        // 13
        Department::create([
            'name' => 'Sociology',
            'college_id' => 3,
        ]);

        // 14
        Department::create([
            'name' => 'Nursing',
            'college_id' => 4,
        ]);

        // 15
        Department::create([
            'name' => 'Biological Sciences Department',
            'college_id' => 7,
        ]);

        // 16
        Department::create([
            'name' => 'Chemistry Department',
            'college_id' => 7,
        ]);

        // 17
        Department::create([
            'name' => 'Mathematics & Statistics Department',
            'college_id' => 7,
        ]);

        // 18
        Department::create([
            'name' => 'Physics Department',
            'college_id' => 7,
        ]);

        // 19
        Department::create([
            'name' => 'Science and Mathematics Education',
            'college_id' => 7,
        ]);
        
        // 20
        Department::create([
            'name' => 'Professional Education',
            'college_id' => 5,
        ]);

        // 21
        Department::create([
            'name' => 'Physical Education',
            'college_id' => 5,
        ]);

        // 22
        Department::create([
            'name' => 'Technology Teacher Education',
            'college_id' => 5,
        ]);

        // 23
        Department::create([
            'name' => 'Electrical and Electronics Engineering Technology',
            'college_id' => 6,
        ]);

        // 24
        Department::create([
            'name' => 'Materials and Resources Engineering and Technology',
            'college_id' => 6,
        ]);

        // 25
        Department::create([
            'name' => 'Civil Engineering',
            'college_id' => 6,
        ]);

        // 26
        Department::create([
            'name' => 'Chemical Engineering and Technology',
            'college_id' => 6,
        ]);

        // 27
        Department::create([
            'name' => 'Mechnical Engineering and Technology',
            'college_id' => 6,
        ]);
    }
}
