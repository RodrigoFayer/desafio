<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Starships extends Model
{
    protected $guarded = [];

    protected $fillable = ['name', 'model', 'manufacturer','cost_in_credits','length',
        'max_atmosphering_speed','crew','passengers','cargo_capacity','consumables',
        'hyperdrive_rating','MGLT','starship_class','url'
    ];

    public function people()
    {
        return $this->belongsToMany('App\People', 'starships_people');
    }
    public function films()
    {
        return $this->belongsToMany('App\Films', 'starships_films');
    }
}
