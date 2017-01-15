<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class League extends Model
{
    protected $table ="league";

    protected $fillable=['id','name','address','format_id','escude','active'];

    public function FormatLeague()
    {
        return $this->belongsTo('App\FormatLeague');
    }

    public function CategoryLeague()
    {
        return $this->belongsTo('App\CategoryLeague');
    }
    

    public static function Information()
    {
        $league = League::Where('active', 1)->get();
        for ($i = 0; $i < count($league); $i++) {
            $league[$i]->FormatLeague = FormatLeague::Where('id',$league[$i]->format_id)->first();
            $league[$i]->CategoryLeague= CategoryLeague::Where('league_id',$league[$i]->id)->OrderBy('order','asc')->get();
            for($t=0;$t<count($league[$i]->CategoryLeague);$t++)
            {
                $league[$i]->CategoryLeague[$t]->Tournament=Tournament::Where('league_id',$league[$i]->id)->Where('category_id',$league[$i]->CategoryLeague[$t]->id)->Where('active',1)->first();
                if($league[$i]->CategoryLeague[$t]->Tournament)
                {
                    $format=$league[$i]->CategoryLeague[$t]->Tournament->formatTournament_id;
                    $league[$i]->CategoryLeague[$t]->Tournament->FormatTournament=FormatTournament::where('id',$format)->first();
                    $teams=TeamTournament::Where('tournament_id',$league[$i]->CategoryLeague[$t]->Tournament->id)->Where('active',1)->get();
                    if($teams)
                    {
                        $team_aux=array();
                        $teams_final=array();
                        for($z=0;$z<count($teams);$z++)
                        {
                            $team_aux=Team::Where('id',$teams[$z]->team_id)->Where('active',1)->first();
                            array_push($teams_final,$team_aux);
                        }
                        $league[$i]->CategoryLeague[$t]->Tournament->Teams=$teams_final;
                    }
                }
            }
        }
        return $league;
    }
}
