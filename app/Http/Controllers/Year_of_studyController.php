<?php

namespace App\Http\Controllers;

use App\Year_of_study;
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

        

        return redirect()->action('Year_of_studyController@index');
    }
}
