<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Planets;
use App\Films;
use App\People;

class PlanetSaveController extends Controller
{
    public function index()
    {
        $planets = Planets::all();
        return view('admin.save.planets.index',compact('planets'));
    }
    public function show(Planets $planet){
        $films = [];
        $auxfilms = [];
        $residents = [];
        $auxpeople = [];
        foreach($planet->films as $film){
            array_push($auxfilms,$film->id);
        }

        foreach(Films::whereIn('id',$auxfilms)->get() as $urlFilm){
            array_push($films,$urlFilm->url);
        }
        foreach($planet->people as $resident){
            array_push($auxpeople,$resident->id);
        }

        foreach(People::whereIn('id',$auxpeople)->get() as $urlPeople){
            array_push($residents,$urlPeople->url);
        }
        return view('admin.save.planets.show',compact('planet','films','residents'));
    }
}
