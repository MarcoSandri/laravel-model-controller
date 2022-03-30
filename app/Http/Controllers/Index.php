<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;


class Index extends Controller
{
    
    public function home() {

        $movies = Movie::all();


        return view('home', ['movies' => $movies]);
    }
}
