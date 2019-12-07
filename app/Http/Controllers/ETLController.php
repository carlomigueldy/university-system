<?php

namespace App\Http\Controllers;

use App\Subject;
use App\CertificateOfRegistration as COR;
use Illuminate\Http\Request;

class ETLController extends Controller
{
    /**
     * Gets the total number of students with specific grade
     * of a specific subject with a specific year.
     * 
     * @param Integer $subject_id
     * @param Integer $year
     * @param Numeric $grade
     */
    public function getSubjectGradePerYear($year, $subject_id, $grade)
    {
        $subjects = Subject::find($subject_id)->enrolled_subjects;
        $count = 0;
        foreach ($subjects as $subject) {
            if ($subject->certificate_of_registration->year == $year && $subject->grade->grade == $grade) {
                $count++;
            }
        }

        $alt_count = 0;
        foreach ($subjects as $subject) {
            if ($subject->certificate_of_registration->year == $year) {
                $alt_count++;
            }
        }

        return response()->json([
            'subject' => Subject::find($subject_id)->name,
            'year' => $year,
            'grade' => $grade, 
            'count' => $count,
            'alt_count' => $alt_count,
        ]);
    }

    /**
     * Gets the number of a specific gender of a specific year.
     * 
     * @param String $gender
     * @param Integer $year
     * To be added specific subject
     */
    public function getGenderPerYear($year, $gender)
    {
        $students = COR::where('year', $year)->distinct()->get('student_id');
        $count = 0;
        foreach ($students as $student) {
            if ($student->student->gender == $gender) {
                $count++;
            }
        }

        return response()->json([
            'gender' => $gender,
            'year' => $year,
            'count' => $count, 
        ]);
    }

    /**
     * Gets the number of students of a specific year.
     * 
     * @param Integer $year
     */
    public function getStudentPerYear($year)
    {
        $students = COR::where('year', $year)->distinct()->count('student_id');

        return response()->json([
            'year' => $year,
            'count' => $students,
        ]);
    }

    /**
     * Gets the number of students of a specific curriculum 
     * in a specific year.
     * 
     * @param Integer $curriculum_id
     * @param Integer $year
     */
    public function getCurriculumPerYear($year, $curriculum_id)
    {
        try {
            $students = COR::where('curriculum_id', $curriculum_id)->where('year', $year)->distinct()->get('student_id');
            $count = count($students);
        } catch (Exception $error) {
            return response()->json([
                'error_message' => $error,
                'message' => 'Error.',
            ]);
        }

        return response()->json([
            'count' => $count,
        ]);
    }

    /**
     * Gets the number of students of a specific curriculum 
     * of a specific year level of a specific year.
     * 
     * @param Integer $curriculum_id
     * @param Integer $year
     * @param Integer $standing
     */
    public function getCurriculumStandingPerYear($year, $curriculum_id, $standing)
    {
        try {
            $students = COR::where('curriculum_id', $curriculum_id)
            ->where('year', $year)->where('standing', $standing)
            ->distinct()->get('student_id');

            $count = count($students);
        } catch (Exception $error) {
            return response()->json([
                'error_message' => $error,
                'message' => 'Error.',
            ]);
        }

        return response()->json([
            'count' => $count,
        ]);
    }
    
    /**
     * Gets the number of students that took a specific subject
     * in a specific semester with a specific year.
     * 
     * @param Integer $subject_id
     * @param Integer $semester
     * @param Integer $year
     */
    public function getSubjectSemesterYear($year, $semester, $subject_id)
    {
        $students = COR::where('year', $year)->where('semester', $semester == 1 ? '1st Semester' : $semester == 2 ? '2nd Semester' : null)->distinct()->get('student_id');
        $count = 0;
        foreach ($students as $student) {
            foreach ($student->enrolled_subjects as $subject) {
                if ($subject->subject_id == $subject_id) {
                    $count++;
                }
            }
        }

        return response()->json([
            'subject_id' => $subject_id,
            'semester' => $semester,
            'year' => $year,
            'count' => $count,
        ]);
    }

    public function getScholarship() 
    {
        // 
    }

    /**
     * Gets all the number of students of a specific gender 
     * in a specific college in a specific year.
     * 
     * @param Integer $year
     * @param Integer $college_id
     * @param String $gender
     */
    public function getCollegeGenderYear($year, $college_id, $gender)
    {
        $students = COR::where('year', $year)->distinct()->get();
        $count = 0;

        foreach ($students as $student) {
            if ($student->curriculum->department->college_id == $college_id && $student->student->gender == $gender) {
                $count++;
            }
        }

        return response()->json([
            'count' => $count,
        ]);      
    }
}
