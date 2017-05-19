<?php

namespace App\Http\Controllers;

use App\Studentunit;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class Unit_displayController extends Controller
{
    public function show()
    {

        $student_id = Auth::user()->id;
        $student_year = Auth::user()->year_of_study;
        $displayunits= Studentunit::all();

        $units= DB::select("select * from units where unit_year like 'Y$student_year%' and id not in (select unit_id from student_units where student_id = ?)", [ $student_id]);
        //dd($units);
        return view('project.units_display', compact('displayunits','units'));
    }

    public function studentUnit($unit_id){
        $student_id = Auth::user()->id;
        $registernew = new Studentunit(array('student_id'=>$student_id, 'unit_id'=>$unit_id));
        $registernew->save();
        return redirect()->action('Unit_displayController@show');

    }
}
