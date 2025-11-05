<x-layout>
    <div class="container">
        <h2>Movies</h2>

        <x-genres :genres="$genres" :selected="$genresSelected"/>
        <div class="movies">
            @foreach($movies as $movie)
                <x-card :movie="$movie" />
            @endforeach
        </div>
    </div>
</x-layout>