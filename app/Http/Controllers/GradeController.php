<?php

namespace App\Http\Controllers;

use App\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
    return view('project.grade_student');
    }
    public function store(Request $request)
    {
        $savegrade= new Grade($request->all());
        $savegrade->save();


    }
}

