<x-layout>

    <div class="create">
        <div class="container">

            <h2>add Movie</h2>

            <div class="column">
                
                <form class="form-grid" action="{{ route('movies.import') }}" method="POST">
                    @csrf

                    <div class="form-grid">
                        <label>Search OMDb:</label>

                        <div class="row">
                            <input type="text" name="search" value="{{ old('search') }}">
                            <button class="button primary" type="submit">Search</button>
                        </div>
                    </div>
                
                </form>


                <form action="{{ Route('movies.store')}}" method="POST">

                    @csrf

                    <div class="form-grid" >

                        <label for="title">Title:</label>
                        <input 
                            type="text"
                            id="title"
                            name="title"
                            value="{{ old('title', $movie['title'] ?? '') }}"
                            require
                        >


                        <label for="poster_url">Poster url:</label>
                        <input 
                            type="text"
                            id="poster_url"
                            name="poster_url"
                            value="{{ old('poster_url', $movie['poster_url'] ?? '') }}"
                        >


                        <label for="director">Director:</label>
                        <input 
                            type="text"
                            id="director"
                            name="director"
                            value="{{ old('director', $movie['director'] ?? '') }}"
                        >


                        <label for="runtime_minutes">Runtime minutes:</label>
                        <input 
                            type="number"
                            id="runtime_minutes"
                            name="runtime_minutes"
                            value="{{ old('runtime_minutes', $movie['runtime_minutes'] ?? '') }}"
                        >


                        <label for="actors">Actors:</label>
                        <input 
                            type="text"
                            id="actors"
                            name="actors"
                            value="{{ old('actors', $movie['actors'] ?? '') }}"
                        >

                        <label for="actors">Release Date:</label>
                        <input 
                            type="Date"
                            id="release_date"
                            name="release_date"
                            value="{{ old('release_date', $movie['release_date'] ?? '') }}"
                        >


                        <label for="genre">Genre:</label>
                        <select name="genre[]" id="genre" multiple size="6">
                            @foreach($allGenres as $genre)
                                <option value="{{ $genre->name }}"
                                    @selected(in_array($genre->name, $movie['genre'] ?? []))>
                                    {{ $genre->name }}
                                </option>
                            @endforeach
                        </select>


                    </div>
                    
                    <div class="section">
                        <button type="submit" class="button primary">Create movie</button>
                    </div>


                    @if ($errors->any())
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                </form>
            </div>

            
        </div>
    </div>

</x-layout>