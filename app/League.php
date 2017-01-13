<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
     protected $table ="league";

    protected $fillable=['id','name','address','format_id','active'];
}
