<?php

namespace App\Http\Controllers;

use App\Display_all_units;
use App\Unit;
use App\User;
use Illuminate\Http\Request;

class Display_all_unitsController extends Controller
{
    public function index()
    {
       return view('project.display_all_units');
    }
    public  function show()
    {
        $units= Display_all_units::all();
        //dd($units);
        return view('project.display_all_units', compact('units'));

    }
    public function assignunit($unit_id)

{
    $units = Unit::findorFail($unit_id);
    $lecturers= User::Where('user_type','academic_advisor')->get();

     return view('project.lecturer_unit',compact('units','lecturers'));
}
public function store()
{

}
}

