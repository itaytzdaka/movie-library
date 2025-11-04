<x-layout>

    <form action="{{ Route('movies.store') }}" method="POST">

        @csrf

        <h2>add Movie</h2>


        <label>title:</label>
        <input 
            type="text"
            id="title"
            name="title"
            value="{{ old('title') }}"
            require
        >


        <label>poster_url:</label>
        <input 
            type="text"
            id="poster_url"
            name="poster_url"
            value="{{ old('poster_url') }}"
        >


        <label>director:</label>
        <input 
            type="text"
            id="director"
            name="director"
            value="{{ old('director') }}"
        >


        <label>runtime_minutes:</label>
        <input 
            type="number"
            id="runtime_minutes"
            name="runtime_minutes"
            value="{{ old('runtime_minutes') }}"
        >


        <label>actors:</label>
        <input 
            type="text"
            id="actors"
            name="actors"
            value="{{ old('actors') }}"
        >


        <label>genre:</label>
        <input 
            type="text"
            id="genre"
            name="genre"
            value="{{ old('genre') }}"
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