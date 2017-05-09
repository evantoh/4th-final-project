<?php

namespace App\Http\Controllers;
use App\User;
use App\Student;
use Illuminate\Http\Request;

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
    dd($student);
}
}
