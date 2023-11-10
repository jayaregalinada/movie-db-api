<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class ShowMovieController extends Controller
{
    public function __invoke(Movie $movie)
    {
        return response()->json($movie);
    }
}
