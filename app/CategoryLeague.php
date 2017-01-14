<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryLeague extends Model
{
    protected $table ="category_league";

    protected $fillable=['id','name','league_id','order','active'];

    public function League()
    {
        return $this->hasMany('App\League');
    }
}
