
@push('styles')
  @vite('resources/css/card.css')
@endpush


@props(['movie'])

<a href="{{ route('movies.show', $movie) }}" class="card">
    <div class="image">
        <img src="{{$movie->poster_url}}" alt="{{ $movie->title }}" />
    </div>
    <div>
        <span>{{$movie->title}}</span>
    </div>
</a>