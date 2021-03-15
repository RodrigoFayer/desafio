<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planets extends Model
{

    protected $guarded = [];

    protected $fillable = ['name', 'rotation_period', 'orbital_period','diameter','climate','gravity','terrain','surface_water','population','url','user_id'];
    public function people()
    {
        return $this->belongsToMany('App\People', 'planets_people');
    }
    public function films()
    {
        return $this->belongsToMany('App\Films', 'planets_films');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
