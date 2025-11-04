<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{


    public function index(){

        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }



    public function show(Movie $movie){

        return view('movies.show', compact('movie'));
    }



    public function edit(Movie $movie){

        return view('movies.edit', compact('movie'));
    }



    public function update(Request $request, Movie $movie){

        $validated = $request-> validate([
            'title' => ['required', 'string', 'max:255'],
            'release_date' => ['nullable', 'date'],
            'poster_url' => ['nullable', 'url', 'max:500'],
            'director' => ['nullable', 'string', 'max:100'],
            'runtime_minutes' => ['nullable', 'integer', 'min:0'],
            'actors' => ['nullable', 'string'],
            'genre' => ['nullable', 'string', 'max:255'],
        ]);

        $movie->update($validated);

        return redirect()->route('movies.index')->with('success', 'Movie Updated successfully!');
    }



    public function store(Request $request){

        $validated = $request-> validate([
            'title' => ['required', 'string', 'max:255'],
            'release_date' => ['nullable', 'date'],
            'poster_url' => ['nullable', 'url', 'max:500'],
            'director' => ['nullable', 'string', 'max:100'],
            'runtime_minutes' => ['nullable', 'integer', 'min:0'],
            'actors' => ['nullable', 'string'],
            'genre' => ['nullable', 'string', 'max:255'],
        ]);

        Movie::create($validated);

        return redirect()->route('movies.index')->with('success', 'Movie Created!');
    }

    

    public function destroy(Movie $movie){
        
        $movie->delete();

        return redirect()->route('movies.index')->with('success', 'Movie deleted!');;
    }
}
