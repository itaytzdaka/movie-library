<?php

namespace Database\Seeders;

use App\Models\Movie;
use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {

        $movie = Movie::create([

            'title' => 'The Shawshank Redemption',
            'release_date' => date('Y-m-d', strtotime('14 Oct 1994')),
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BMDAyY2FhYjctNDc5OS00MDNlLThiMGUtY2UxYWVkNGY2ZjljXkEyXkFqcGc@._V1_SX300.jpg',
            'director' => 'Frank Darabont',
            'runtime_minutes' => 142,
            'actors' => 'Tim Robbins, Morgan Freeman, Bob Gunton',
            'genre' => 'Drama',
        ]);

        $genres = Genre::whereIn('name', ['Drama'])->get();
        $movie->genres()->attach($genres);



        $movie = Movie::create([

            'title' => 'The Godfather',
            'release_date' => date('Y-m-d', strtotime('24 Mar 1972')),
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BNGEwYjgwOGQtYjg5ZS00Njc1LTk2ZGEtM2QwZWQ2NjdhZTE5XkEyXkFqcGc@._V1_SX300.jpg',
            'director' => 'Francis Ford Coppola',
            'runtime_minutes' => 175,
            'actors' => 'Marlon Brando, Al Pacino, James Caan',
            'genre' => 'Crime, Drama',
        ]);

        $genres = Genre::whereIn('name', ['Crime','Drama'])->get();
        $movie->genres()->attach($genres);


        
        $movie = Movie::create([

            'title' => 'Inception',
            'release_date' => date('Y-m-d', strtotime('16 Jul 2010')),
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BMjAxMzY3NjcxNF5BMl5BanBnXkFtZTcwNTI5OTM0Mw@@._V1_SX300.jpg',
            'director' => 'Christopher Nolan',
            'runtime_minutes' => 148,
            'actors' => 'Leonardo DiCaprio, Joseph Gordon-Levitt, Elliot Page',
            'genre' => 'Action, Adventure, Sci-Fi',
        ]);

        $genres = Genre::whereIn('name', ['Action','Adventure','Sci-Fi'])->get();
        $movie->genres()->attach($genres);




        $movie = Movie::create([

            'title' => 'Titanic',
            'release_date' => date('Y-m-d', strtotime('19 Dec 1997')),
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BYzYyN2FiZmUtYWYzMy00MzViLWJkZTMtOGY1ZjgzNWMwN2YxXkEyXkFqcGc@._V1_SX300.jpg',
            'director' => 'James Cameron',
            'runtime_minutes' => 194,
            'actors' => 'Leonardo DiCaprio, Kate Winslet, Billy Zane',
            'genre' => 'Drama, Romance',
        ]);

        $genres = Genre::whereIn('name', ['Drama','Romance'])->get();
        $movie->genres()->attach($genres);




        $movie = Movie::create([

            'title' => 'Avatar',
            'release_date' => date('Y-m-d', strtotime('18 Dec 2009')),
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BMDEzMmQwZjctZWU2My00MWNlLWE0NjItMDJlYTRlNGJiZjcyXkEyXkFqcGc@._V1_SX300.jpg',
            'director' => 'James Cameron',
            'runtime_minutes' => 162,
            'actors' => 'Sam Worthington, Zoe Saldaña, Sigourney Weaver',
            'genre' => 'Action, Adventure, Fantasy',
        ]);

        $genres = Genre::whereIn('name', ['Action','Adventure','Fantasy'])->get();
        $movie->genres()->attach($genres);




        $movie = Movie::create([

            'title' => 'Forrest Gump',
            'release_date' => date('Y-m-d', strtotime('06 Jul 1994')),
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BNDYwNzVjMTItZmU5YS00YjQ5LTljYjgtMjY2NDVmYWMyNWFmXkEyXkFqcGc@._V1_SX300.jpg',
            'director' => 'Robert Zemeckis',
            'runtime_minutes' => 142,
            'actors' => 'Tom Hanks, Robin Wright, Gary Sinise',
            'genre' => 'Drama, Romance',
        ]);

        $genres = Genre::whereIn('name', ['Drama', 'Romance'])->get();
        $movie->genres()->attach($genres);




        $movie = Movie::create([

            'title' => 'The Matrix',
            'release_date' => date('Y-m-d', strtotime('31 Mar 1999')),
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BN2NmN2VhMTQtMDNiOS00NDlhLTliMjgtODE2ZTY0ODQyNDRhXkEyXkFqcGc@._V1_SX300.jpg',
            'director' => 'Lana Wachowski, Lilly Wachowski',
            'runtime_minutes' => 136,
            'actors' => 'Keanu Reeves, Laurence Fishburne, Carrie-Anne Moss',
            'genre' => 'Action, Sci-Fi',
        ]);

        $genres = Genre::whereIn('name', ['Action','Sci-Fi'])->get();
        $movie->genres()->attach($genres);




        $movie = Movie::create([

            'title' => 'Pulp Fiction',
            'release_date' => date('Y-m-d', strtotime('14 Oct 1994')),
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BYTViYTE3ZGQtNDBlMC00ZTAyLTkyODMtZGRiZDg0MjA2YThkXkEyXkFqcGc@._V1_SX300.jpg',
            'director' => 'Quentin Tarantino',
            'runtime_minutes' => 154,
            'actors' => 'John Travolta, Uma Thurman, Samuel L. Jackson',
            'genre' => 'Crime, Drama',
        ]);

        $genres = Genre::whereIn('name', ['Crime','Drama'])->get();
        $movie->genres()->attach($genres);




        $movie = Movie::create([

            'title' => 'Gladiator',
            'release_date' => date('Y-m-d', strtotime('05 May 2000')),
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BYWQ4YmNjYjEtOWE1Zi00Y2U4LWI4NTAtMTU0MjkxNWQ1ZmJiXkEyXkFqcGc@._V1_SX300.jpg',
            'director' => 'Ridley Scott',
            'runtime_minutes' => 155,
            'actors' => 'Russell Crowe, Joaquin Phoenix, Connie Nielsen',
            'genre' => 'Action, Adventure, Drama',
        ]);

        $genres = Genre::whereIn('name', ['Action','Adventure','Drama'])->get();
        $movie->genres()->attach($genres);




        $movie = Movie::create([

            'title' => 'Jurassic Park',
            'release_date' => date('Y-m-d', strtotime('11 Jun 1993')),
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BMjM2MDgxMDg0Nl5BMl5BanBnXkFtZTgwNTM2OTM5NDE@._V1_SX300.jpg',
            'director' => 'Steven Spielberg',
            'runtime_minutes' => 127,
            'actors' => 'Sam Neill, Laura Dern, Jeff Goldblum',
            'genre' => 'Action, Adventure, Sci-Fi',
        ]);

        $genres = Genre::whereIn('name', ['Action','Adventure','Sci-Fi'])->get();
        $movie->genres()->attach($genres);




        $movie = Movie::create([

            'title' => 'Interstellar',
            'release_date' => date('Y-m-d', strtotime('07 Nov 2014')),
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BYzdjMDAxZGItMjI2My00ODA1LTlkNzItOWFjMDU5ZDJlYWY3XkEyXkFqcGc@._V1_SX300.jpg',
            'director' => 'Christopher Nolan',
            'runtime_minutes' => 169,
            'actors' => 'Matthew McConaughey, Anne Hathaway, Jessica Chastain',
            'genre' => 'Adventure, Drama, Sci-Fi',
        ]);

        $genres = Genre::whereIn('name', ['Adventure','Drama','Sci-Fi'])->get();
        $movie->genres()->attach($genres);




        $movie = Movie::create([

            'title' => 'The Lion King',
            'release_date' => date('Y-m-d', strtotime('24 Jun 1994')),
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BZGRiZDZhZjItM2M3ZC00Y2IyLTk3Y2MtMWY5YjliNDFkZTJlXkEyXkFqcGc@._V1_SX300.jpg',
            'director' => 'Roger Allers, Rob Minkoff',
            'runtime_minutes' => 88,
            'actors' => 'Matthew Broderick, Jeremy Irons, James Earl Jones',
            'genre' => 'Animation, Adventure, Drama',
        ]);

        $genres = Genre::whereIn('name', ['Animation','Adventure','Drama'])->get();
        $movie->genres()->attach($genres);




        $movie = Movie::create([

            'title' => 'Avengers: Endgame',
            'release_date' => date('Y-m-d', strtotime('26 Apr 2019')),
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SX300.jpg',
            'director' => 'Anthony Russo, Joe Russo',
            'runtime_minutes' => 181,
            'actors' => 'Robert Downey Jr., Chris Evans, Mark Ruffalo',
            'genre' => 'Action, Adventure, Sci-Fi',
        ]);

        $genres = Genre::whereIn('name', ['Action','Adventure','Sci-Fi'])->get();
        $movie->genres()->attach($genres);




        $movie = Movie::create([

            'title' => 'The Lord of the Rings: The Return of the King',
            'release_date' => date('Y-m-d', strtotime('17 Dec 2003')),
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BMTZkMjBjNWMtZGI5OC00MGU0LTk4ZTItODg2NWM3NTVmNWQ4XkEyXkFqcGc@._V1_SX300.jpg',
            'director' => 'Peter Jackson',
            'runtime_minutes' => 201,
            'actors' => 'Elijah Wood, Viggo Mortensen, Ian McKellen',
            'genre' => 'Adventure, Drama, Fantasy',
        ]);

        $genres = Genre::whereIn('name', ['Adventure','Drama','Fantasy'])->get();
        $movie->genres()->attach($genres);




        $movie = Movie::create([

            'title' => 'Maclunkey Treasure Island: A Live Staged Reading of Star Wars - A New Hope',
            'release_date' => date('Y-m-d', strtotime('15 Mar 2025')),
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BY2YwYmUwNjQtMzRmYy00OTJhLTkyYTgtYzg0MzQ1Yjk3NTNiXkEyXkFqcGc@._V1_SX300.jpg',
            'director' => 'Patrick Cotnoir',
            'runtime_minutes' => 123,
            'actors' => 'Ralph D. Apel, Stevi Apel, Cal Bonavita',
            'genre' => 'Comedy',
        ]);

        $genres = Genre::whereIn('name', ['Comedy'])->get();
        $movie->genres()->attach($genres);




        $movie = Movie::create([

            'title' => 'Frozen',
            'release_date' => date('Y-m-d', strtotime('27 Nov 2013')),
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BMTQ1MjQwMTE5OF5BMl5BanBnXkFtZTgwNjk3MTcyMDE@._V1_SX300.jpg',
            'director' => 'Chris Buck, Jennifer Lee',
            'runtime_minutes' => 102,
            'actors' => 'Kristen Bell, Idina Menzel, Jonathan Groff',
            'genre' => 'Animation, Adventure, Comedy',
        ]);

        $genres = Genre::whereIn('name', ['Animation','Adventure','Comedy'])->get();
        $movie->genres()->attach($genres);




        $movie = Movie::create([

            'title' => "Harry Potter and the Sorcerer's Stone",
            'release_date' => date('Y-m-d', strtotime('16 Nov 2001')),
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BNTU1MzgyMDMtMzBlZS00YzczLThmYWEtMjU3YmFlOWEyMjE1XkEyXkFqcGc@._V1_SX300.jpg',
            'director' => 'Chris Columbus',
            'runtime_minutes' => 152,
            'actors' => 'Daniel Radcliffe, Rupert Grint, Emma Watson',
            'genre' => 'Adventure, Family, Fantasy',
        ]);

        $genres = Genre::whereIn('name', ['Adventure','Family','Fantasy'])->get();
        $movie->genres()->attach($genres);


    }
}
