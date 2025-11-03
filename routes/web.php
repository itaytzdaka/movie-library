<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MovieController;



Route::get('/', [MovieController::class, 'index'])->name('movies.index');
Route::get('/{movie}', [MovieController::class, 'show'])->name('movies.show');


/**
 * 
 *  / -> movies
 *  /{id} -> movie details
 *  /login -> login page fo admin
 *  /{id}/edit -> admin page for edit
 *  /add -> admin page for add a movie
 * 
 */