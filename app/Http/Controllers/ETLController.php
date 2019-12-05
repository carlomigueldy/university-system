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

        return response()->json([
            'subject' => Subject::find($subject_id)->name,
            'year' => $year,
            'grade' => $grade, 
            'count' => $count,
        ]);
    }

    /**
     * Gets the number of a specific gender of a specific year.
     * 
     * @param String $gender
     * @param Integer $year
     */
    public function getGenderPerYear($year, $gender)
    {
        $students = COR::where('year', $year)->get();
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
        $students = COR::where('year', $year)->get();
        $count = count($students);

        return response()->json([
            'year' => $year,
            'count' => $count,
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
            $students = COR::where('curriculum_id', $curriculum_id)->where('year', $year)->get();
            $count = count($students);
        } catch (Exception $error) {
            return response()->json([
                'error_message' => $error,
                'message' => 'Error.',
            ]);
        }

        return response()->json([
            'curriculum' => $students[0]->curriculum->name,
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
        $students = COR::where('year', $year)->where('semester', $semester == 1 ? '1st Semester' : $semester == 2 ? '2nd Semester' : null)->get();
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
}
