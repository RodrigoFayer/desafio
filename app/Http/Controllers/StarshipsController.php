<?php

namespace App\Http\Controllers;

use App\Starships;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use App\DataTables\UsersDataTable;


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

    public function paginate($items, $perPage = 5, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
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
