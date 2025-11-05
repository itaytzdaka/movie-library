<?php

namespace App\Services;

use App\Models\Movie;

class MovieService
{


    /**
     * Get movies filtered by one or more genres.
     *
     * @param  array|string|null  $genresSelected
     * @param  bool  $matchAll  Whether to match all selected genres (true) or any (false)
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getMoviesByGenres(array|string|null $genresSelected = null, bool $matchAll = false)
    {
        $query = Movie::with('genres');

        if (!empty($genresSelected)) {
            $genresSelected = (array) $genresSelected;

            if ($matchAll) {
                // Match all selected genres
                foreach ($genresSelected as $genre) {
                    $query->whereHas('genres', function ($q) use ($genre) {
                        $q->where('name', $genre);
                    });
                }
            } else {
                // Match any selected genre
                $query->whereHas('genres', function ($q) use ($genresSelected) {
                    $q->whereIn('name', $genresSelected);
                });
            }
        }

        return $query;
    }

}
