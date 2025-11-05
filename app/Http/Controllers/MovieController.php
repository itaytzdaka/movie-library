<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Genre;
use App\Services\MovieService;
use Illuminate\Http\Request;

class MovieController extends Controller
{


    public function index(Request $request, MovieService $movieService){

        $genres = Genre::orderBy('name')->get();
        $genresSelected = $request->query('genre');

        $movies = Movie::with('genres')->get();

        $movies = $movieService
            ->getMoviesByGenres($genresSelected, matchAll: true)
            ->orderBy('title')
            ->paginate(12)
            ->withQueryString();


        return view('movies.index', compact('movies', 'genresSelected', 'genres'));
    }



    public function show(Movie $movie){

        return view('movies.show', compact('movie'));
    }



    public function edit(Movie $movie){

        $allGenres = Genre::orderBy('name')->get();
        $selectedGenres = $movie->genres->pluck('id')->toArray();

        return view('movies.edit', compact('movie', 'allGenres', 'selectedGenres'));
    }



    public function update(Request $request, Movie $movie){

        $validated = $request-> validate([
            'title' => ['required', 'string', 'max:255'],
            'release_date' => ['nullable', 'date'],
            'poster_url' => ['nullable', 'url', 'max:500'],
            'director' => ['nullable', 'string', 'max:100'],
            'runtime_minutes' => ['nullable', 'integer', 'min:0'],
            'actors' => ['nullable', 'string'],
            // 'genre' => ['nullable', 'string', 'max:255'],
        ]);

        $movie->update($validated);

        $genres = $request->input('genre', []);
        $genreIds = collect($genres)->map(fn($name) => Genre::where('name', $name)->first()?->id)->all();
        $movie->genres()->sync($genreIds);

        return redirect()->route('movies.index')->with('success', 'Movie Updated successfully!');
    }



    public function create(){

        $movie = session('movie', null);
        $allGenres = Genre::orderBy('name')->get();

        return view('movies.create', compact('movie', 'allGenres'));
    }


    public function store(Request $request){

        $validated = $request-> validate([
            'title' => ['required', 'string', 'max:255'],
            'release_date' => ['nullable', 'date'],
            'poster_url' => ['nullable', 'url', 'max:500'],
            'director' => ['nullable', 'string', 'max:100'],
            'runtime_minutes' => ['nullable', 'integer', 'min:0'],
            'actors' => ['nullable', 'string'],
            // 'genre' => ['nullable', 'string', 'max:255'],
        ]);

        $movie = Movie::create($validated);

        $genres = $request->input('genre', []);
        $genreIds = collect($genres)->map(fn($name) => Genre::where('name', $name)->first()?->id)->all();
        $movie->genres()->sync($genreIds);

        return redirect()->route('movies.index')->with('success', 'Movie Created!');
    }

    

    public function destroy(Movie $movie){
        
        $movie->delete();

        return redirect()->route('movies.index')->with('success', 'Movie deleted!');;
    }
}
