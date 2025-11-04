<x-layout>

    <h2>add Movie</h2>


    <form action="{{ route('movies.import') }}" method="POST">
        @csrf

        <label>Search OMDb:</label>
        <input type="text" name="search" value="{{ old('search') }}">

        <button type="submit">Search</button>

    </form>


    <form action="{{ Route('movies.store')}}" method="POST">

        @csrf

        <label>title:</label>
        <input 
            type="text"
            id="title"
            name="title"
            value="{{ old('title', $movie['title'] ?? '') }}"
            require
        >


        <label>poster_url:</label>
        <input 
            type="text"
            id="poster_url"
            name="poster_url"
            value="{{ old('poster_url', $movie['poster_url'] ?? '') }}"
        >


        <label>director:</label>
        <input 
            type="text"
            id="director"
            name="director"
            value="{{ old('director', $movie['director'] ?? '') }}"
        >


        <label>runtime_minutes:</label>
        <input 
            type="number"
            id="runtime_minutes"
            name="runtime_minutes"
            value="{{ old('runtime_minutes', $movie['runtime_minutes'] ?? '') }}"
        >


        <label>actors:</label>
        <input 
            type="text"
            id="actors"
            name="actors"
            value="{{ old('actors', $movie['actors'] ?? '') }}"
        >


        <label>genre:</label>
        <input 
            type="text"
            id="genre"
            name="genre"
            value="{{ old('genre', $movie['genre'] ?? '') }}"
        >

        <button type="submit">Create movie</button>

        @if ($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        
    </form>

</x-layout>