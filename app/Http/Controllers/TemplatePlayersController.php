<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\PlayerUser;
use DB;
class TemplatePlayersController extends Controller
{
    public function index(){
        try{
            if(Session::get('login')==true)
            {
                $players=PlayerUser::Where("user_id",Session::get('iduser'))->Where('active',1)->get();
                $datos=array();
                if($players){
                    for($i=0;$i<count($players);$i++)
                    {
                        $resultado=DB::table("team_tournament_player")->select("team.id as teamId","team.name as teamName","league.id as leagueId","league.name as leagueName","category_league.id as categoryId","category_league.name as categoryName","team_tournament.id as teamTournamentId","format_tournament.name as formatName","tournament.year","team.escude","format_league.name as formatLeagueName","format_league.places")
                                     ->join("team_tournament","team_tournament_player.teamTournament_id","=","team_tournament.id")
                                     ->join("team","team_tournament.team_id","=","team.id")
                                     ->join("tournament","team_tournament.tournament_id","=","tournament.id")
                                     ->join("league","tournament.league_id","=","league.id")
                                     ->join("format_league","league.format_id","=","format_league.id")
                                     ->join("category_league","tournament.category_id","=","category_league.id")
                                     ->join("format_tournament","tournament.formatTournament_id","=","format_tournament.id")
                                     ->where("team_tournament_player.id",$players[$i]->player_id)
                                     ->where("tournament.active",1)
                                     ->where("team_tournament.active",1)
                                     ->where("team.active",1)
                                     ->where("team_tournament_player.active",1)
                                     ->orderBy("team_tournament.id","desc")
                                     ->get();
                        if($resultado) {
                            $playersTeam=DB::table("team_tournament_player")->select("team_tournament_player.*","users.rut","users.email","users.cellphone")
                                            ->join("team_tournament","team_tournament_player.teamTournament_id","=","team_tournament.id")
                                            ->join("players_user","team_tournament_player.id","=","players_user.player_id")
                                            ->join("users","players_user.user_id","=","users.id")
                                            ->where("team_tournament.id",$resultado[0]->teamTournamentId)->get();
                            if($playersTeam)
                            {
                                for($y=0;$y<count($playersTeam);$y++)
                                {
                                    $positions=DB::table("team_tournament_player_positions")->select("position_player.id","position_player.name")
                                                ->join("position_player","team_tournament_player_positions.position_id","=","position_player.id")
                                                ->where("team_tournament_player_positions.player_id",$playersTeam[$y]->id)->get();

                                    $playersTeam[$y]->positions=$positions;
                                }
                            }
                            $resultado[0]->players=$playersTeam;
                            array_push($datos, $resultado[0]);
                        }
                    }
                }
                //dd($datos);
                return view('templatePlayers.index',array('teams_actives'=>$datos));
            }else{
                return redirect('/');
            }
        }catch(Exception $e)
        {

        }
    }
}
