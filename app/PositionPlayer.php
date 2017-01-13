<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PositionPlayer extends Model
{
    protected $table ="position_player";

    protected $fillable=['id','name','active'];
}
