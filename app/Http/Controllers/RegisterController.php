<?php

namespace App\Http\Controllers;

use App\Register_unit;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view("project.register_units");
    }
    public function store(Request $request)
    {
        $registernew = new Register_unit($request->all());
        $registernew->save();

        return redirect()->action('RegisterController@index');
    }
}
