<x-layout>
    <div class="show">
        <div class="container">
            
            <h2>{{$movie->title}}</h2>    
            <div class="row">

                <img src="{{ $movie->poster_url ?: asset('images/fallback.jpg')  }}" alt="{{ $movie->title }}">

                <div class="details column">
                    <table>
                        <tr>
                            <td>Directore:</td>
                            <td>{{ $movie->director }}</td>
                        </tr>
                        <tr>
                            <td>Time:</td>
                            <td>{{ $movie->runtime_formatted }}</td>
                        </tr>
                        <tr>
                            <td>Actores:</td>
                            <td>{{ $movie->actors }}</td>
                        </tr>
                        <tr>
                            <td>Release date:</td>
                            <td>{{ $movie->release_date?->format('d/m/Y')}}</td>
                        </tr>
                        <tr>
                            <td>Genre:</td>
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