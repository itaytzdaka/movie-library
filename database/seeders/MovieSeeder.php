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
        ]);

        $genres = Genre::whereIn('name', ['Adventure','Family','Fantasy'])->get();
        $movie->genres()->attach($genres);



        
        $movie = Movie::create([

            'title' => 'The Wolf of Wall Street',
            'release_date' => date('Y-m-d', strtotime('25 Dec 2013')),
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BMjIxMjgxNTk0MF5BMl5BanBnXkFtZTgwNjIyOTg2MDE@._V1_SX300.jpg',
            'director' => 'Martin Scorsese',
            'runtime_minutes' => 180,
            'actors' => 'Leonardo DiCaprio, Jonah Hill, Margot Robbie',
        ]);

        $genres = Genre::whereIn('name', ['Biography','Comedy','Crime'])->get();
        $movie->genres()->attach($genres);



        
        $movie = Movie::create([

            'title' => 'Spider-Man: No Way Home',
            'release_date' => date('Y-m-d', strtotime('17 Dec 2021')),
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BMmFiZGZjMmEtMTA0Ni00MzA2LTljMTYtZGI2MGJmZWYzZTQ2XkEyXkFqcGc@._V1_SX300.jpg',
            'director' => 'Jon Watts',
            'runtime_minutes' => 148,
            'actors' => 'Tom Holland, Zendaya, Benedict Cumberbatch',
        ]);

        $genres = Genre::whereIn('name', ['Biography','Comedy','Crime'])->get();
        $movie->genres()->attach($genres);




        $movie = Movie::create([

            'title' => 'Joker',
            'release_date' => date('Y-m-d', strtotime('04 Oct 2019')),
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BNzY3OWQ5NDktNWQ2OC00ZjdlLThkMmItMDhhNDk3NTFiZGU4XkEyXkFqcGc@._V1_SX300.jpg',
            'director' => 'Todd Phillips',
            'runtime_minutes' => 122,
            'actors' => 'Joaquin Phoenix, Robert De Niro, Zazie Beetz',
        ]);

        $genres = Genre::whereIn('name', ['Crime','Drama','Thriller'])->get();
        $movie->genres()->attach($genres);

    


        $movie = Movie::create([

            'title' => 'Deadpool',
            'release_date' => date('Y-m-d', strtotime('12 Feb 2016')),
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BNzY3ZWU5NGQtOTViNC00ZWVmLTliNjAtNzViNzlkZWQ4YzQ4XkEyXkFqcGc@._V1_SX300.jpg',
            'director' => 'Tim Miller',
            'runtime_minutes' => 108,
            'actors' => 'Ryan Reynolds, Morena Baccarin, T.J. Miller',
        ]);

        $genres = Genre::whereIn('name', ['Action','Comedy','Sci-Fi'])->get();
        $movie->genres()->attach($genres);




        $movie = Movie::create([

            'title' => 'Parasite',
            'release_date' => date('Y-m-d', strtotime('08 Nov 2019')),
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BYjk1Y2U4MjQtY2ZiNS00OWQyLWI3MmYtZWUwNmRjYWRiNWNhXkEyXkFqcGc@._V1_SX300.jpg',
            'director' => 'Bong Joon Ho',
            'runtime_minutes' => 132,
            'actors' => 'Song Kang-ho, Lee Sun-kyun, Cho Yeo-jeong',
        ]);

        $genres = Genre::whereIn('name', ['Action','Comedy','Sci-Fi'])->get();
        $movie->genres()->attach($genres);




        $movie = Movie::create([

            'title' => 'The Social Network',
            'release_date' => date('Y-m-d', strtotime('01 Oct 2010')),
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BMjlkNTE5ZTUtNGEwNy00MGVhLThmZjMtZjU1NDE5Zjk1NDZkXkEyXkFqcGc@._V1_SX300.jpg',
            'director' => 'David Fincher',
            'runtime_minutes' => 120,
            'actors' => 'Jesse Eisenberg, Andrew Garfield, Justin Timberlake',
        ]);

        $genres = Genre::whereIn('name', ['Biography','Drama'])->get();
        $movie->genres()->attach($genres);




        $movie = Movie::create([

            'title' => 'The Revenant',
            'release_date' => date('Y-m-d', strtotime('08 Jan 2016')),
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BYTgwNmQzZDctMjNmOS00OTExLTkwM2UtNzJmOTJhODFjOTdlXkEyXkFqcGc@._V1_SX300.jpg',
            'director' => 'Alejandro G. Iñárritu',
            'runtime_minutes' => 156,
            'actors' => 'Leonardo DiCaprio, Tom Hardy, Will Poulter',
        ]);

        $genres = Genre::whereIn('name', ['Adventure','Drama','Western'])->get();
        $movie->genres()->attach($genres);




        $movie = Movie::create([

            'title' => 'La La Land',
            'release_date' => date('Y-m-d', strtotime('25 Dec 2016')),
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BMzUzNDM2NzM2MV5BMl5BanBnXkFtZTgwNTM3NTg4OTE@._V1_SX300.jpg',
            'director' => 'Damien Chazelle',
            'runtime_minutes' => 128,
            'actors' => 'Ryan Gosling, Emma Stone, Rosemarie DeWitt',
        ]);

        $genres = Genre::whereIn('name', ['Comedy','Drama','Music'])->get();
        $movie->genres()->attach($genres);




        $movie = Movie::create([

            'title' => 'Black Panther',
            'release_date' => date('Y-m-d', strtotime('16 Feb 2018')),
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BMTg1MTY2MjYzNV5BMl5BanBnXkFtZTgwMTc4NTMwNDI@._V1_SX300.jpg',
            'director' => 'Ryan Coogler',
            'runtime_minutes' => 134,
            'actors' => "Chadwick Boseman, Michael B. Jordan, Lupita Nyong'o",
        ]);

        $genres = Genre::whereIn('name', ['Action','Adventure','Sci-Fi'])->get();
        $movie->genres()->attach($genres);




        $movie = Movie::create([

            'title' => 'Dune',
            'release_date' => date('Y-m-d', strtotime('14 Dec 1984')),
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BMGJlMGM3NDAtOWNhMy00MWExLWI2MzEtMDQ0ZDIzZDY5ZmQ2XkEyXkFqcGc@._V1_SX300.jpg',
            'director' => 'David Lynch',
            'runtime_minutes' => 137,
            'actors' => 'Kyle MacLachlan, Virginia Madsen, Francesca Annis',
        ]);

        $genres = Genre::whereIn('name', ['Action','Adventure','Sci-Fi'])->get();
        $movie->genres()->attach($genres);




        $movie = Movie::create([

            'title' => 'The Hunger Games',
            'release_date' => date('Y-m-d', strtotime('23 Mar 2012')),
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BMWI1OGM4YjQtNmIxNi00YmE2LWJkNTAtY2Q0YjU4NTI5NWQyXkEyXkFqcGc@._V1_SX300.jpg',
            'director' => 'Gary Ross',
            'runtime_minutes' => 142,
            'actors' => 'Jennifer Lawrence, Josh Hutcherson, Liam Hemsworth',
        ]);

        $genres = Genre::whereIn('name', ['Action','Adventure','Sci-Fi'])->get();
        $movie->genres()->attach($genres);




        $movie = Movie::create([

            'title' => 'The Truman Show',
            'release_date' => date('Y-m-d', strtotime('05 Jun 1998')),
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BNzA3ZjZlNzYtMTdjMy00NjMzLTk5ZGYtMTkyYzNiOGM1YmM3XkEyXkFqcGc@._V1_SX300.jpg',
            'director' => 'Peter Weir',
            'runtime_minutes' => 103,
            'actors' => 'Jim Carrey, Ed Harris, Laura Linney',
        ]);

        $genres = Genre::whereIn('name', ['Comedy','Drama'])->get();
        $movie->genres()->attach($genres);




        $movie = Movie::create([

            'title' => 'The Grand Budapest Hotel',
            'release_date' => date('Y-m-d', strtotime('28 Mar 2014')),
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BMzM5NjUxOTEyMl5BMl5BanBnXkFtZTgwNjEyMDM0MDE@._V1_SX300.jpg',
            'director' => 'Wes Anderson',
            'runtime_minutes' => 99,
            'actors' => 'Ralph Fiennes, F. Murray Abraham, Mathieu Amalric',
        ]);

        $genres = Genre::whereIn('name', ['Comedy','Drama'])->get();
        $movie->genres()->attach($genres);




        $movie = Movie::create([

            'title' => 'The Pursuit of Happyness',
            'release_date' => date('Y-m-d', strtotime('15 Dec 2006')),
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BMTQ5NjQ0NDI3NF5BMl5BanBnXkFtZTcwNDI0MjEzMw@@._V1_SX300.jpg',
            'director' => 'Gabriele Muccino',
            'runtime_minutes' => 117,
            'actors' => 'Will Smith, Thandiwe Newton, Jaden Smith',
        ]);

        $genres = Genre::whereIn('name', ['Biography','Drama'])->get();
        $movie->genres()->attach($genres);




        $movie = Movie::create([

            'title' => 'The Batman',
            'release_date' => date('Y-m-d', strtotime('04 Mar 2022')),
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BMmU5NGJlMzAtMGNmOC00YjJjLTgyMzUtNjAyYmE4Njg5YWMyXkEyXkFqcGc@._V1_SX300.jpg',
            'director' => 'Matt Reeves',
            'runtime_minutes' => 176,
            'actors' => 'Robert Pattinson, Zoë Kravitz, Jeffrey Wright',
        ]);

        $genres = Genre::whereIn('name', ['Action','Crime','Drama'])->get();
        $movie->genres()->attach($genres);




        $movie = Movie::create([

            'title' => 'Guardians of the Galaxy',
            'release_date' => date('Y-m-d', strtotime('01 Aug 2014')),
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BM2ZmNjQ2MzAtNDlhNi00MmQyLWJhZDMtNmJiMjFlOWY4MzcxXkEyXkFqcGc@._V1_SX300.jpg',
            'director' => 'James Gunn',
            'runtime_minutes' => 121,
            'actors' => 'Chris Pratt, Vin Diesel, Bradley Cooper',
        ]);

        $genres = Genre::whereIn('name', ['Action','Adventure','Comedy'])->get();
        $movie->genres()->attach($genres);


    }
}
