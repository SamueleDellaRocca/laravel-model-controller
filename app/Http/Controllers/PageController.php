<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $myMovies = Movie::all();

        dd($myMovies);
        return view('MoviesList', $myMovies);
    }
}
