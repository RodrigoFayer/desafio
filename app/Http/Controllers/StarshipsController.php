<?php

namespace App\Http\Controllers;

use App\Starships;
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
        $client = new Client();
        $url = "https://swapi.dev/api/starships/";
        $responseJson = $client->request('GET', $url)->getBody();
        $responseObj = json_decode($responseJson);
        $starships = $responseObj->results;
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
        //
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
