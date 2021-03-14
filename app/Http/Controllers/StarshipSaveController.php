<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Starships;
use App\Films;
use App\People;

class StarshipSaveController extends Controller
{
    public function index()
    {
        $starships = Starships::all();
        return view('admin.save.starships.index',compact('starships'));
    }

    public function show(Starships $starship)
    {
        $films = [];
        $auxfilms = [];
        $pilots = [];
        $auxpeople = [];
        foreach($starship->films as $film){
            array_push($auxfilms,$film->id);
        }
        foreach(Films::whereIn('id',$auxfilms)->get() as $urlFilm){
            array_push($films,$urlFilm->url);
        }
        foreach($starship->people as $pilot){
            array_push($auxpeople,$pilot->id);
        }
        foreach(People::whereIn('id',$auxpeople)->get() as $urlPeople){
            array_push($pilots,$urlPeople->url);
        }
        return view('admin.save.starships.show',compact('starship','films','pilots'));
    }
}
