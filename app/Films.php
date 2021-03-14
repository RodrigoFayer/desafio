<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Films extends Model
{
    public function planets()
    {
        return $this->belongsToMany('App\Planets', 'planets_films');
    }
}
