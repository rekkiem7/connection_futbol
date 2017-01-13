<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormatTournament extends Model
{
    protected $table ="format_tournament";

    protected $fillable=['id','name','months','active'];
}
