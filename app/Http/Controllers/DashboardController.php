<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Starships;
use App\Planets;
use App\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $planets = Auth::user()->planets;
        $starships = Auth::user()->starship;
        $planets = count($planets);
        $starships = count($starships);

        return view('admin.dashboard',compact('planets','starships'));
    }
}
