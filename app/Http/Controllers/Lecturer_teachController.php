<?php

namespace App\Http\Controllers;

use App\Lecturer_teach;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Lecturer_teachController extends Controller
{
    public  function show()
    {
        $units= Lecturer_teach::where('lecturer_id', Auth::user()->id)->get();;
        //dd($units[0]->unit->id);
        return view('project.lecturer_teach', compact('units'));

    }
}
