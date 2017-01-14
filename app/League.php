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
    public static function Information()
    {
        $league = League::Where('active', 1)->get();
        for ($i = 0; $i < count($league); $i++) {
            $league[$i]->FormatLeague = FormatLeague::find($league[$i]->format_id)->first();
            $league[$i]->CategoryLeague= CategoryLeague::Where('league_id',$league[$i]->id)->OrderBy('order','asc')->get();
        }
        return $league;
    }
}
