<?php

namespace App\Http\Controllers;

use App\Grade;
use App\Lecturer_teach;
use App\Studentunit;
use App\Unit;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comment;
class Lecturer_teachController extends Controller

{
    public function index($user_id, $unit_id)
    {
        $detail = User::findorFail($user_id);
        $unitdetails = Grade::where('reg_number', $detail['reg_number'])->where('unit_id', $unit_id)->get();
        $comment = Comment::where('grade_id', $unitdetails[0]->id)->first();
        //dd($comment);
        return view('project.comment_student', compact('detail', 'unitdetails', 'comment'));
    }
    public  function show()
    {
        $units= Lecturer_teach::where('lecturer_id', Auth::user()->id)->get();;
        //dd($units[0]->unit->id);
        return view('project.lecturer_teach', compact('units'));

    }

    public function students($unit_id){
        $units = Studentunit::where('unit_id', $unit_id)->get();
        $data = array();
        /*dd($units[0]);*/
        foreach ($units as $unit)
        {
            if (Grade::where('reg_number',$unit->student->reg_number)
                ->where('unit_id', $unit->unit_id)
                ->exists()){
                array_push($data, $unit);
            }
        }
            return view("project.stdents_registered",compact('data'));
    }
    public function commentstudent(Request$request)
    {
       //dd($request->all());
        if(Comment::where('user_id', $request->user_id)->where('grade_id', $request->grade_id)->exists()){
          Comment::where('user_id', $request->user_id)
                ->where('grade_id', $request->grade_id)
                ->update(['comment'=>$request->comment]);
        }else
            {
                $grade = new Comment($request->all());
                $grade->save();
                return redirect('teaches');
             }
    }
}
