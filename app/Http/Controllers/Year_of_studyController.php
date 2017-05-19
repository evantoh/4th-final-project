<?php

namespace App\Http\Controllers;

use App\Year_of_study;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Year_of_studyController extends Controller
{
    public function index()
    {
        return view('project.year_of_study') ;
    }
    public  function store(Request $request)
    {
        DB::table('year_study')
            ->where('year', $request->year)
            ->update(['stroke'=>$request->stroke]);

        $students = User::where('user_type', 'student')
            ->where('reg_number', 'like', '%'.$request->stroke)
            ->get();
        foreach ($students as $student){
            DB::table('users')
            ->where('id', $student->id)
            ->update(['year_of_study'=>$request->year]);
        }
        return redirect()->action('Year_of_studyController@index');
    }
}
