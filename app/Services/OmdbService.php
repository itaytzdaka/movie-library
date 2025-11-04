<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class OmdbService
{


    public function fetchByTitleOrId(string $query): ?array
    {
        $apiKey = config('services.omdb.key');

        if (!$apiKey) return null;

        // Decide whether it's an IMDb ID (starts with "tt") or a title
        $param = str_starts_with(strtolower($query), 'tt') ? ['i' => $query] : ['t' => $query];

        $response = Http::get('http://www.omdbapi.com/', array_merge($param, [
            'apikey' => $apiKey,
        ]));

        if (!$response->ok()) return null;

        $data = $response->json();

        if (!isset($data['Response']) || $data['Response'] !== 'True') return null;

        return $this->mapOmdbToMovie($data);
    }



    private function mapOmdbToMovie(array $d): array
    {

        // Runtime like "123 min"
        $runtime = null;

        if (!empty($d['Runtime']) && preg_match('/(\d+)\s*min/i', $d['Runtime'], $m)) {
            $runtime = (int)$m[1];
        }


        // Released like "14 Nov 2014"
        $releaseDate = null;

        if (!empty($d['Released']) && $d['Released'] !== 'N/A') {
            $releaseDate = date('Y-m-d', strtotime($d['Released']));
        }


        $genres = [];

        if (!empty($d['Genre']) && $d['Genre'] !== 'N/A') {
            $parts = array_values(array_filter(array_map('trim', explode(',', $d['Genre']))));
            $genres = implode(', ', $parts);
        }


        return [
            'title' => $d['Title'] ?? null,
            'release_date' => $releaseDate,
            'poster_url' => ($d['Poster'] ?? '') !== 'N/A' ? $d['Poster'] : null,
            'director' => $d['Director'] ?? null,
            'runtime_minutes' => $runtime,
            'actors' => $d['Actors'] ?? null,
            'imdb_id' => $d['imdbID'] ?? null,
            'genre' => $genres,
        ];
    }
}
