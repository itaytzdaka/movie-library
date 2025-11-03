@props(['movie'])

<a href="{{ route('movies.show', $movie) }}">
    <div class="card">
        <p>{{$movie->title}}</p>
        <img
            src="{{$movie->poster_url}}"
            alt="{{ $movie->title }}"
        />
    </div>
</a>