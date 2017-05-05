<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
       return view("project.course");

    }
public function store(Request$request)
{
    $newcourse = new Course($request->all());
    $newcourse->save();

    return redirect()->action('CourseController@index');
}
}
