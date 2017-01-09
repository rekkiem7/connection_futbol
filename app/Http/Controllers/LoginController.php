<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use DB;
use Session;

class LoginController extends Controller
{
    public function index(){
        if(Session::get('login'))
        {
            return redirect()->to('/dashboard');
        }else{
            return view('welcome');
        }
    }

    public function logear(Request $request)
    {
        Session::put('error',false);
        $email=$request->input('email');
        $password=$request->input('password');
        $messages = [
            'email.required' => 'Debes ingresar tu correo electrónico',
            'password.required'=>'Debes ingresar tu contraseña'
        ];
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ],$messages);
        if ($validator->fails()) {
            return redirect('/')
                ->withErrors($validator)
                ->withInput();
        }else{
            $user=DB::table('users')->Where('email',$email)->first();
            if($user)
            {
                $userConfirm=DB::table('users')->Where('email',$email)->Where('password',md5($password))->first();
                if($userConfirm)
                {
                    $this->init_session($userConfirm);
                    return redirect()->to('/dashboard');
                }else{
                    Session::put('error','La contraseña ingresada es incorrecta');
                    return redirect('/');
                }
            }else{
                Session::put('error','El correo electrónico ingresado no existe');
                return redirect('/');
            }
        }


    }

    public function init_session($user)
    {
        Session::put('login',true);
        Session::put('id',$user->id);
        Session::put('facebook_id',$user->facebook_id);
        Session::put('name',$user->name);
        Session::put('lastname',$user->lastname);
        Session::put('rut',$user->rut);
        Session::put('email',$user->email);
        Session::put('cellphone',$user->cellphone);
    }

    public function logout()
    {
        Session::flush();

        return redirect('/');
    }
}