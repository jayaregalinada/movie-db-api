<?php

use App\Http\Controllers\CreateMovieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListMovieController;
use App\Http\Controllers\ShowMovieController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/movie', ListMovieController::class);
Route::post('/movie', CreateMovieController::class);
Route::get('/movie/{movie}', ShowMovieController::class)
    ->whereNumber('movie');
