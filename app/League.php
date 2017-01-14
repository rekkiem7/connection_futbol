<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    protected $table ="league";

    protected $fillable=['id','name','address','format_id','escude','active'];

    public function FormatLeague()
    {
        return $this->belongsTo('App\FormatLeague');
    }

    public function CategoryLeague()
    {
        return $this->belongsTo('App\CategoryLeague');
    }

}
