<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class ListMovieController extends Controller
{
    public function __invoke()
    {
        // Get all the Movie from the Database using Model
        // Return a response
        return response()->json(Movie::query()->paginate());
    }
}
