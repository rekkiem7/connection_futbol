<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerUser extends Model
{
    protected $table ="players_user";

    protected $fillable=['id','player_id','user_id','active'];
}
