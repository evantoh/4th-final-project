<?php

namespace App\Http\Controllers;
use App\User;
use App\Student;
use Illuminate\Http\Request;
use App\Studentunit;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        $students= User::where('user_type', 'student')->get();
        //dd($students);
        return view("project.student_display", compact('students'));
    }
public function show()
{
    $students= Student::all();
    return view('project.student_display', compact('students'));
}

public function showGradeForm($student_id){
    $student = User::findorFail($student_id);
    $units = DB::table('student_units')
        ->join('units', 'student_units.unit_id', '=', 'units.id')
        ->select('student_units.*', 'units.unit_name')
        ->where('student_units.student_id', $student_id)
        ->get();
    return view('project.grade_student', compact('student', 'units'));
}
}
