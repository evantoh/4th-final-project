<?php

namespace App\Http\Controllers;

use App\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index()
    {
        return view("project.results");
    }
    public function show()
    {
        $results= Result::all();
        return view('project.results', compact('results'));
    }
}
