
@push('styles')
  @vite('resources/css/card.css')
@endpush


@props(['movie'])

<a href="{{ route('movies.show', $movie) }}" class="card">
    <div class="image">
        <img src="{{ $movie->poster_url ?: asset('images/fallback.jpg') }}" alt="{{ $movie->title }}" />
    </div>
    <div class="name">
        <span>{{$movie->title}}</span>
    </div>
</a>