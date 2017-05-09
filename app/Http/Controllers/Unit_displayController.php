<?php

namespace App\Http\Controllers;

use App\Unit;


class Unit_displayController extends Controller
{
    public function show()
    {
        $units= Unit::all();
        return view('project.units_display', compact('units'));
    }
}
