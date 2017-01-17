<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class DashboardController extends Controller
{
    public function index(){
       
        if(Session::get('login'))
        {
        	 return view('dashboard');  
        }else{
            return redirect()->to('/');
        }
    }
}
