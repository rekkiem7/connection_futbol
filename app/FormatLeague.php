<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormatLeague extends Model
{
    protected $table ="format_league";

    protected $fillable=['id','name','numberPlayers','places','active'];

    public function League()
    {
        return $this->hasMany('App\League');
    }
}
