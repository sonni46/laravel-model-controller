<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{
    public function home() {
        $dbMovies = Movie::all();
        return view('home', compact('dbMovies'));
    }

    public function movie($id) {
        $dbMovie = Movie::find($id);
        return view('movie', compact('dbMovie'));
    }
}


