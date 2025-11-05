<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $genres = array_unique([
            'Action',
            'Adventure',
            'Animation',
            'Biography',
            'Comedy',
            'Crime',
            'Drama',
            'Family',
            'Fantasy',
            'Horror',
            'Music',
            'Romance',
            'Sci-Fi',
            'Thriller',
            'Western',
        ]);
        
        foreach ($genres as $g) {
            Genre::firstOrCreate(['name' => $g]);
        }
    }
}
