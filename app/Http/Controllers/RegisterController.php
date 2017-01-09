<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function registerUser(Request $request)
    {
        $user= new User();
        $user->name=$request->input('name');
        $user->lastname=$request->input('lastname');
        $user->rut=$request->input('rut');
        $user->cellphone=$request->input('cellphone');
        $user->email=$request->input('email');
        $user->password=md5($request->input('password'));
        $user->save();
    }
}
