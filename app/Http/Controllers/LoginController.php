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
        $user_name=$request->input('user');
        $password=$request->input('password');
        $messages = [
            'user.required' => 'Debes ingresar tu nombre de usuario',
            'password.required'=>'Debes ingresar tu contraseña'
        ];
        $validator = Validator::make($request->all(), [
            'user' => 'required',
            'password' => 'required',
        ],$messages);
        if ($validator->fails()) {
            return redirect('/')
                ->withErrors($validator)
                ->withInput();
        }else{
            $user=DB::table('users')->Where('name_user',$user_name)->first();
            if($user)
            {
                $userConfirm=User::Where('name_user',$user_name)->Where('password',md5($password))->first();
                if($userConfirm)
                {
                    $this->init_session($userConfirm);
                    return redirect()->to('/dashboard');
                }else{
                    Session::put('error','La contraseña ingresada es incorrecta');
                    return redirect('/');
                }
            }else{
                Session::put('error','El nombre de usuario ingresado no existe');
                return redirect('/');
            }
        }


    }

    public function init_session($user)
    {
        $role=User::find($user->id)->role()->first();
        Session::put('login',true);
        Session::put('iduser',$user->id);
        Session::put('facebook_id',$user->facebook_id);
        Session::put('name',$user->name);
        Session::put('lastname',$user->lastname);
        Session::put('rut',$user->rut);
        Session::put('email',$user->email);
        Session::put('cellphone',$user->cellphone);
        Session::put('role',$role->name);
        Session::put('role_id',$role->id);
        Session::put('image',$user->image);
    }

    public function logout()
    {
        Session::flush();

        return redirect('/');
    }
}
