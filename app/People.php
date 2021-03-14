<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    public function planets()
    {
        return $this->belongsToMany('App\Planets', 'planets_people');
    }
    public function starships()
    {
        return $this->belongsToMany('App\Starships','starships_people');
    }
}
