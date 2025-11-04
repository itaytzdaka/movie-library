<x-layout>

    <h2>{{$movie->title}}</h2>    
    <img src="{{ $movie->poster_url }}" alt="{{ $movie->title }}">
    <p>directore: {{ $movie->director }}</p>
    <p>minutes: {{ $movie->runtime_minutes }}</p>
    <p>actores: {{ $movie->actors }}</p>
    <p>genre: {{ $movie->genre }}</p>

    <form action="{{ route('movies.delete', $movie) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">Delete movie</button>
    </form>
        
</x-layout>