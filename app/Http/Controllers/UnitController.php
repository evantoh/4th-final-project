<?php

namespace App\Http\Controllers;

use App\Unit;
use App\User;
use Illuminate\Http\Request;


class UnitController extends Controller
{
    public function index()
    {
        $academic_advisors = User::where('user_type', 'academic_advisor')->get();
        return view("project.data_entry_operator", compact('academic_advisors'));
    }
    public function store(Request $request)
    {
        $newunit = new Unit($request->all());
        $newunit->save();

        return redirect()->action('UnitController@index');
    }
}
