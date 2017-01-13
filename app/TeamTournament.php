<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamTournament extends Model
{
    protected $table ="team_tournament";

    protected $fillable=['id','team_id','tournament_id','active'];
}
