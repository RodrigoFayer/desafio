<?php

namespace App\Http\Controllers;

use App\Planets;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PlanetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new Client();
        $url = "https://swapi.dev/api/planets/";
        $responseJson = $client->request('GET', $url)->getBody();
        $responseObj = json_decode($responseJson);
        $planets = $responseObj->results;

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
    public function store(Request $request)
    {
        //
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


        return view('admin.planets.show',compact('planet'));
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
