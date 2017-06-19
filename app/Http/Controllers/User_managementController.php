<?php

namespace App\Http\Controllers;

use App\User_management;
use Illuminate\Http\Request;

class User_managementController extends Controller
{
    public  function show()
    {
        $units= User_management::all();
        //dd($units);
        return view('project.display_all_users', compact('units'));

    }
}
