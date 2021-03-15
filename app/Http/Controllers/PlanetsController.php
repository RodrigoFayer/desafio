<?php

namespace App\Http\Controllers;

use App\Planets;
use App\Films;
use App\People;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Http\Requests\PlanetRequest;
use Illuminate\Support\Facades\Auth;
use App\User;

class PlanetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planets =[];
        $client = new Client();
        for($i=1;$i<5;$i++){

            $url = "https://swapi.dev/api/planets/?page={$i}";
            $responseJson = $client->request('GET', $url)->getBody();
            $responseObj = json_decode($responseJson);
            foreach($responseObj->results as $planet){
                array_push($planets,$planet);
            }

        }

        return view('admin.planets.index',compact('planets'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlanetRequest $request)
    {
        $films = [];
        $residents = [];
        if($request->films!=null){
            foreach(Films::whereIn('url',$request->films)->get() as $urlFilm){
                array_push($films,$urlFilm->id);
            }
        }
        if($request->residents!=null){
            foreach(People::whereIn('url',$request->residents)->get() as $urlPeople){
                array_push($residents,$urlPeople->id);
            }
        }
        $planet = $request->except('films','residents');
        $planet = Planets::create($planet);
        $planet->films()->attach($films);
        $planet->people()->attach($residents);


        return redirect()->route('savesPlanets.index')->with('success', true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\planets  $planets
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = new Client();
        $url = "https://swapi.dev/api/planets/{$id}/";
        $responseJson = $client->request('GET', $url)->getBody();
        $responseObj = json_decode($responseJson);
        $planet = $responseObj;
        $user_id = Auth::user()->id;



        return view('admin.planets.show',compact('planet','user_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\planets  $planets
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\planets  $planets
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\planets  $planets
     * @return \Illuminate\Http\Response
     */


}
