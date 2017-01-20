<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Team;
use App\League;
use App\CategoryLeague;
use App\TeamTournament;
use App\TeamTournamentPlayer;
use App\PlayerUser;

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
        try{
            $user= new User();
            $user->name=$request->input('name');
            $user->lastname=$request->input('lastname');
            $user->rut=$request->input('rut');
            $user->cellphone=$request->input('cellphone');
            $user->email=$request->input('email');
            $user->name_user=$request->input('name_user');
            $user->password=md5($request->input('password'));
            if($request->input('type')==1){
               $team=Team::Where('id',$request->input('team_id'))->get(); 
               $role=2; $captain=1;$avatar=$team[0]->escude;
            }else if($request->input('type')==2){
               $team=Team::Where('id',$request->input('team_id'))->get(); 
               $role=3; $captain=0;$avatar=$team[0]->escude;
            }else{
                $role=1;
            }  
            $user->image=$avatar;
            $user->role_id=$role;        
            $user->save();

            if($request->input('type')==1 || $request->input('type')==2)    
            {
                $tournament=TeamTournament::Where('team_id',$request->input('team_id'))->Where('active',1)->get();
                if($tournament)
                {
                    $player=new TeamTournamentPlayer();
                    $player->teamTournament_id=$tournament[0]->id;
                    $player->name=$request->input('name');
                    $player->lastname=$request->input('lastname');
                    $player->captain=$captain;
                    $player->save();

                    $playerUser=new PlayerUser();
                    $playerUser->player_id=$player->id;
                    $playerUser->user_id=$user->id;
                    $playerUser->active=1;
                    $playerUser->save();
                }
            }
            return view('success');
        }catch(Exception $e){
            redirect()->to('/');
        }   
    }
}
