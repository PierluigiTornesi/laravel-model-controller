<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $movies = Movie::all();
        //debug dati ricevuti
        //dd($movies);

        return view('welcome', compact('movies'));
    }
}
