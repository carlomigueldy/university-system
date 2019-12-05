<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;

class ETLController extends Controller
{
    public function subject($subject_id, $year)
    {
        $subjects = Subject::find($subject_id)->enrolled_subjects;
        $count = 0;
        foreach ($subjects as $subject) {
            if ($subject->certificate_of_registration->year == $year) {
                $count++;
            }
        }

        return response()->json([
            'count' => $count,
        ]);
    }
}
