<x-layout>
    <div class="container column">

        <x-genres :genres="$genres" :selected="$genresSelected"/>
        <div class="movies">
            @foreach($movies as $movie)
                <x-card :movie="$movie" />
            @endforeach
        </div>

        {{ $movies->links() }}

    </div>            
</x-layout>

