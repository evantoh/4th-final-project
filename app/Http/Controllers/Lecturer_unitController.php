<?php

namespace App\Http\Controllers;

use App\Lecturer_unit;
use Illuminate\Http\Request;

class Lecturer_unitController extends Controller
{
    public function index()
    {
        return view('project.display_all_units');
    }
   public function store(Request $request)
   {
       $assignunit = new Lecturer_unit($request->all());
       $assignunit->save();

       return redirect()->action('Lecturer_unitController@index');
   }
}
