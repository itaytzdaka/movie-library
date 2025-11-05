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
            'Crime',
            'Adventure',
            'Sci-Fi',
            'Drama',
            'Romance',
            'Fantasy',
            'Animation',
            'Comedy',
            'Family',
            'Horror',
        ]);
        
        foreach ($genres as $g) {
            Genre::firstOrCreate(['name' => $g]);
        }
    }
}
