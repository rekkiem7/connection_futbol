<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table ="role";

    protected $fillable=['id','name','active'];

    public function user()
    {
        return $this->hasMany('App\User');
    }
}
