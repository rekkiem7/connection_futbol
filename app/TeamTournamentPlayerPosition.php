<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamTournamentPlayerPosition extends Model
{
     protected $table ="team_tournament_player_positions";

    protected $fillable=['id','player_id','position_id','active'];
}
