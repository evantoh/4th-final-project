<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GradeController extends Controller
{
    public function index()
    {
    return view('project.grade_student');
    }
    public function store(Request $request){
        if(Grade::where('unit_id', $request->unit_id)->where('reg_number', $request->reg_number)->exists()){
            Grade::where('unit_id', $request->unit_id)
                ->where('reg_number', $request->reg_number)
                ->update(['grade'=>$request->grade]);
        }else{
            $savegrade= new Grade($request->all());
            $savegrade->save();
        }


        return redirect()->action('StudentController@showGradeForm' , [Auth::user()->id])
            ->with('status', 'Grade Added successfully');
    }
}

