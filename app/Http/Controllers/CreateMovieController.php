<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMovieFormRequest;
use App\Models\Movie;
use Illuminate\Http\Request;

class CreateMovieController extends Controller
{
    public function __invoke(CreateMovieFormRequest $request)
    {
        // Validate the information from request
        
        // Add the request to the database
        $movie = Movie::create($request->validated());
        
        // Return the created Movie
        return response()->json([
            'message' => 'Successfully created movie',
            'data' => $movie,
        ]);
    }
}
