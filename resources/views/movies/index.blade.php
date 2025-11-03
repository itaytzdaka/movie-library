<x-layout>
    <h2>Movies</h2>

    <ul>
        @foreach($movies as $movie)
            <x-card :movie="$movie" />
        @endforeach
    </ul>
</x-layout>