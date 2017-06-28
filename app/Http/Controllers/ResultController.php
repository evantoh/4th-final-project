<?php

namespace App\Http\Controllers;

use App\Grade;
use App\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{
    public function index()
    {
        return view("project.results");
    }
    public function show()
    {

        $results= Grade::where('reg_number', Auth::user()->reg_number)->get();
        //dd($results);
        return view('project.results', compact('results'));
    }
}
