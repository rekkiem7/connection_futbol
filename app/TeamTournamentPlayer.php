<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamTournamentPlayer extends Model
{
    protected $table ="team_tournament_player";

    protected $fillable=['id','teamTournament_id','name','lastname','number','captain','active'];
}
