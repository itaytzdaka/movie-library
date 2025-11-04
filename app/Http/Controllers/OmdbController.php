<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\OmdbService;

class OmdbController extends Controller
{

    public function search(Request $request, OmdbService $omdb)
    {
        $request->validate(['search' => ['required','string','max:255']]);

        $movie = $omdb->fetchByTitleOrId($request->string('search'));

        if (!$movie) {
            return back()->withErrors(['q' => 'No results from OMDb for that query.'])->withInput();
        }

        return redirect()->route('movies.create')->with('movie', $movie);
    }

}
