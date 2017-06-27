<?php

namespace App\Http\Controllers;
use App\Grade;
use App\User;
use App\Student;
use Illuminate\Http\Request;
use App\Studentunit;
use Illuminate\Support\Facades\Auth;
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
        ->select('student_units.*', 'units.unit_name', 'units.id as unit_id')
        ->where('student_units.student_id', $student_id)
        ->get();
    return view('project.grade_student', compact('student', 'units'));
}

public function cf(){
    $units = Studentunit::where('student_id', Auth::user()->id)->get();
    //dd($unit->atherere);
    $cf1= 0; $cf1count = 0;
    $cf2= 0; $cf2count = 0;
    $cf3= 0; $cf3count = 0;
    $cf4= 0; $cf4count = 0;
    $credit1 = 'not Applicable';
    $credit2 = 'not Applicable';
    $credit3 = 'not Applicable';
    $credit4 = 'not Applicable';
    foreach ($units as $unit){
        if ($unit->atherere->unit_year == 'Y4S2' || $unit->atherere->unit_year == 'Y4S1'){
            if ($grade = Grade::where('reg_number', Auth::user()->reg_number)->where('unit_id', $unit->unit_id)->exists()){
                $grade = Grade::where('reg_number', Auth::user()->reg_number)->where('unit_id', $unit->unit_id)->first();
                $cf4 = $cf4+$grade->marks;
                $cf4count++;
                $credit4 = $cf4/$cf4count;
            }
        }elseif ($unit->atherere->unit_year == 'Y3S2' || $unit->atherere->unit_year == 'Y3S1'){
            if ($grade = Grade::where('reg_number', Auth::user()->reg_number)->where('unit_id', $unit->unit_id)->exists()){
                $grade = Grade::where('reg_number', Auth::user()->reg_number)->where('unit_id', $unit->unit_id)->first();
                $cf3 = $cf3+$grade->marks;
                $cf3count++;
                $credit3 = $cf3/$cf3count;
            }
        }elseif ($unit->atherere->unit_year == 'Y2S2' || $unit->atherere->unit_year == 'Y2S1'){
            if ($grade = Grade::where('reg_number', Auth::user()->reg_number)->where('unit_id', $unit->unit_id)->exists()){
                $grade = Grade::where('reg_number', Auth::user()->reg_number)->where('unit_id', $unit->unit_id)->first();
                $cf2 = $cf2+$grade->marks;
                $cf2count++;
                $credit2 = $cf2/$cf2count;
            }
        }elseif ($unit->atherere->unit_year == 'Y1S2' || $unit->atherere->unit_year == 'Y1S1'){
            if ($grade = Grade::where('reg_number', Auth::user()->reg_number)->where('unit_id', $unit->unit_id)->exists()){
                $grade = Grade::where('reg_number', Auth::user()->reg_number)->where('unit_id', $unit->unit_id)->first();
                $cf1 = $cf1+$grade->marks;
                $cf1count++;
                $credit1 = $cf1/$cf1count;
            }
        }
    }
    return view('credit', compact('credit3', 'credit4', 'credit1', 'credit2'));
}
}
