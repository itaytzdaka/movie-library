<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MovieController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OmdbController;


// admin routes

Route::middleware('auth')->group(function () {

    Route::get('/add', [MovieController::class, 'create'])->name('movies.create');

    Route::post('/add', [MovieController::class, 'store'])->name('movies.store');

    Route::delete('/{movie}', [MovieController::class, 'destroy'])->name('movies.destroy');

    Route::get('/{movie}/edit', [MovieController::class, 'edit'])->name('movies.edit');

    Route::put('/{movie}', [MovieController::class, 'update'])->name('movies.update');

    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

});



//guest routes

Route::get('/', [MovieController::class, 'index'])->name('movies.index');


Route::get('/login', function (){
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

Route::get('/{movie}', [MovieController::class, 'show'])->name('movies.show');

Route::post('/import', [OmdbController::class, 'search'])->name('movies.import');
