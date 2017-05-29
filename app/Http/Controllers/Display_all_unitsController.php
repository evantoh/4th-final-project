<?php

namespace App\Http\Controllers;

use App\Display_all_units;
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
}

