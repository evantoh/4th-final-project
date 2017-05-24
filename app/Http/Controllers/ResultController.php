<?php

namespace App\Http\Controllers;

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
        //dd(Auth::user()->reg_number);
        $results= Result::where('reg_number', Auth::user()->reg_number)->get();
        //dd($results[0]->unit);
        return view('project.results', compact('results'));
    }
}
