<x-layout>

    <div class="edit">
        <div class="container">

            <h2>Edit Movie</h2>

            <form action="{{ Route('movies.update', $movie) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="form-grid">

                    <label for="title">Title:</label>
                    <input 
                        type="text"
                        id="title"
                        name="title"
                        value="{{ old('title', $movie->title) }}"
                        require
                    >


                    <label for="poster_url">Poster url:</label>
                    <input 
                        type="text"
                        id="poster_url"
                        name="poster_url"
                        value="{{ old('poster_url', $movie->poster_url) }}"
                    >


                    <label for="director">Director:</label>
                    <input 
                        type="text"
                        id="director"
                        name="director"
                        value="{{ old('director', $movie->director) }}"
                    >


                    <label for="runtime_minutes">Runtime minutes:</label>
                    <input 
                        type="number"
                        id="runtime_minutes"
                        name="runtime_minutes"
                        value="{{ old('runtime_minutes', $movie->runtime_minutes) }}"
                    >


                    <label for="actors">Actors:</label>
                    <input 
                        type="text"
                        id="actors"
                        name="actors"
                        value="{{ old('actors', $movie->actors) }}"
                    >


                    <label for="actors">Release Date:</label>
                    <input 
                        type="Date"
                        id="release_date"
                        name="release_date"
                        value="{{ old('release_date', $movie->release_date->format('Y-m-d')) }}"
                    >


                    <label for="genres">Genre load:</label>
                    <select name="genre[]" id="genres" multiple size="6">
                        @foreach($allGenres as $genre)
                            <option value="{{ $genre->name }}"
                                @selected(in_array($genre->id, $selectedGenres ?? []))>
                                {{ $genre->name }}
                            </option>
                        @endforeach
                    </select>

                    
                </div>

                <div class="section">
                    <button type="submit" class="button primary">Update movie</button>
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

</x-layout>