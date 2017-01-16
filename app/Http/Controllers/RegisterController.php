<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Team;
use App\League;
use App\CategoryLeague;

class RegisterController extends Controller
{
    public function index($params)
    {
        $aux=explode('|',$params);
        if(base64_decode($aux[0])==1 || base64_decode($aux[0])==2)
        {
            $team=Team::find(base64_decode($aux[3]));
            $league=League::find(base64_decode($aux[1]));
            $category=CategoryLeague::find(base64_decode($aux[2]));
            return view('auth.register',array('league'=>$league,'team'=>$team,'category'=>$category,'type'=>base64_decode($aux[0])));
        }
    }
    public function registerUser(Request $request)
    {
        $user= new User();
        $user->name=$request->input('name');
        $user->lastname=$request->input('lastname');
        $user->rut=$request->input('rut');
        $user->cellphone=$request->input('cellphone');
        $user->email=$request->input('email');
        $user->name_user=$request->input('name_user');
        $user->password=md5($request->input('password'));
        if($request->input('type')==1){
           $user->role_id=2; 
        }else if($request->input('type')==2){
            $user->role_id=3; 
        }
        
        $user->save();
    }
}
