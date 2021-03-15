<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Starships;
use App\Planets;

class DashboardController extends Controller
{
    public function index()
    {
        $planets = Planets::all();
        $starships = Starships::all();
        $planets = count($planets);
        $starships = count($starships);

        return view('admin.dashboard',compact('planets','starships'));
    }
}
