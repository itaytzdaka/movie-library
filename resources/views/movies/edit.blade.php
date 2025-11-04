<x-layout>

    <form action="{{ Route('movies.update', $movie) }}" method="POST">

        @csrf
        @method('PUT')

        <h2>Edit Movie</h2>


        <label>Title:</label>
        <input 
            type="text"
            id="title"
            name="title"
            value="{{ old('title', $movie->title) }}"
            require
        >


        <label>Poster_url:</label>
        <input 
            type="text"
            id="poster_url"
            name="poster_url"
            value="{{ old('poster_url', $movie->poster_url) }}"
        >


        <label>Director:</label>
        <input 
            type="text"
            id="director"
            name="director"
            value="{{ old('director', $movie->director) }}"
        >


        <label>Runtime_minutes:</label>
        <input 
            type="number"
            id="runtime_minutes"
            name="runtime_minutes"
            value="{{ old('runtime_minutes', $movie->runtime_minutes) }}"
        >


        <label>Actors:</label>
        <input 
            type="text"
            id="actors"
            name="actors"
            value="{{ old('actors', $movie->actors) }}"
        >


        <label>Genre:</label>
        <input 
            type="text"
            id="genre"
            name="genre"
            value="{{ old('genre', $movie->genre) }}"
        >

        <button type="submit">Update movie</button>

        @if ($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        
    </form>

</x-layout>