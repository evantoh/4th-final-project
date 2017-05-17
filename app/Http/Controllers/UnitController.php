<?php

namespace App\Http\Controllers;

use App\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
   public function index()
   {
     return view('project.add_new_unit') ;
   }
   public  function store(Request $request)
   {
       $grade= new Unit($request->all());
       $grade->save();

       return redirect()->action('UnitController@index');
   }
}
