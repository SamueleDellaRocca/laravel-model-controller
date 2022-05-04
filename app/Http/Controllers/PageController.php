<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $myMovies = Movie::all();

        $data = [
            'movies' => $myMovies,
        ];

        return view('MoviesList', $data);
    }
}
