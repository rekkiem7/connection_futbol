<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $table ="tournament";

    protected $fillable=['id','league_id','category_id','formatTournament_id','year','active'];

    public function format(){
        return $this->belongsTo('App\FormatTournament');
    }
}
