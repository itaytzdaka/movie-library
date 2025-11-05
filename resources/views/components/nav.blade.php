<nav class="nav">
    <div class="container">
        <div>
            <a class="button" href="{{ route('movies.index') }}">home</a>
    
            @if(auth()->check())
                <a class="button" href="{{ route('movies.create') }}">add movie</a>
            @endif
        </div>
        <div class="success">
            {{ session('success') }}
        </div>
        <div>
            <x-user-menu />
        </div>       
    </div>
</nav>