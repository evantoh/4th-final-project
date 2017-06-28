<?php

namespace App\Http\Controllers;

use App\Register_unit;
use App\User;
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
    public function delete($user_id){
        $user = User::findorFail($user_id);
        $user->delete();
        return redirect('manageusers')  ->with('status', 'user deleted successfully');

    }
}
