<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::with('genre')->get(); 
        return view('movies.index', compact('movies')); 
    }

    public function create()
    {
        $genres = Genre::all(); 
        return view('movies.create', compact('genres')); 
    }
}
