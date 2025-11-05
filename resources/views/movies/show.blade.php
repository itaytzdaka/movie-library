<x-layout>
    <div class="show">
        <div class="container">
            
            <h2>{{$movie->title}}</h2>    
            <div class="row">

                <img src="{{ $movie->poster_url }}" alt="{{ $movie->title }}">

                <div class="details column">
                    <table>
                        <tr>
                            <td>directore:</td>
                            <td>{{ $movie->director }}</td>
                        </tr>
                        <tr>
                            <td>minutes:</td>
                            <td>{{ $movie->runtime_minutes }}</td>
                        </tr>
                        <tr>
                            <td>actores:</td>
                            <td>{{ $movie->actors }}</td>
                        </tr>
                        <tr>
                            <td>genre:</td>
                            <td>
                                @foreach($movie->genres as $genre)
                                    <div class="genre">
                                        {{$genre->name}}
                                    </div>
                                    
                                @endforeach
                            </td>
                        </tr>
                    </table>



                    @if(auth()->check())
                        <form action="{{ route('movies.destroy', $movie) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <div class="row">
                                <a href="{{ route('movies.edit', $movie) }}">
                                    <button type="button" class="alert">Edit movie</button>
                                </a>
                                <button type="submit" class="danger">Delete movie</button>
                            </div>
                        </form>


                    @endif
                </div>
                
            </div>
        </div>
    </div>
        
</x-layout>