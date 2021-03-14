<?php

namespace App\Http\Controllers;

use App\Starships;
use App\Films;
use App\People;
use Illuminate\Http\Request;
use GuzzleHttp\Client;



class StarshipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $starships = [];
        $client = new Client();
        for($i=1;$i<5;$i++){

            $url = "https://swapi.dev/api/starships/?page={$i}";
            $responseJson = $client->request('GET', $url)->getBody();
            $responseObj = json_decode($responseJson);
            foreach($responseObj->results as $starship){
                array_push($starships,$starship);
            }

        }


        return view('admin.starships.index', compact('starships'));
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
    public function store(Request $request)
    {
        $films = [];
        $pilots = [];
        if($request->films!=null){
            foreach(Films::whereIn('url',$request->films)->get() as $urlFilm){
                array_push($films,$urlFilm->id);
            }
        }
        if($request->pilots!=null){
            foreach(People::whereIn('url',$request->pilots)->get() as $urlPeople){
                array_push($pilots,$urlPeople->id);
            }
        }
        $starship = Starships::create($request->except('films','pilots'));
        $starship->films()->attach($films);
        $starship->people()->attach($pilots);

        return redirect()->route('starship.index')->with('success', true);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Starships  $starships
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = new Client();
        $url = "https://swapi.dev/api/starships/{$id}";
        $responseJson = $client->request('GET', $url)->getBody();
        $responseObj = json_decode($responseJson);
        $starship = $responseObj;
        return view('admin.starships.show', compact('starship'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Starships  $starships
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Starships  $starships
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Starships  $starships
     * @return \Illuminate\Http\Response
     */

}
