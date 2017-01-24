<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\League;
use App\CategoryLeague;
use DB;

class InformationController extends Controller
{
    public function index(){
        try {
            if (Session::get('login') == true) {
                $leagues=League::all();
                for($i=0;$i<count($leagues);$i++)
                {
                 $leagues[$i]->Category=CategoryLeague::Where("league_id",$leagues[$i]->id)->orderBy("order","asc")->get();
                }
                return view('information.index',array('leagues'=>$leagues));
            }else{
                return redirect('/');
            }
        }
        catch(Exception $e){
        }
    }
}
