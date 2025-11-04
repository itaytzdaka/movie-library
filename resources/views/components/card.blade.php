@props(['movie'])

<a href="{{ route('movies.show', $movie) }}" class="card">
    <img
        src="{{$movie->poster_url}}"
        alt="{{ $movie->title }}"
    />
    <div>
        <span>{{$movie->title}}</span>
    </div>
</a>