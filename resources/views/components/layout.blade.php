<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies Library</title>
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('movies.index') }}">home</a>
            @if(auth()->check())
                <a href="{{ route('movies.create') }}">add movie</a>
            @endif

            <x-user-menu />
            
        </nav>
    </header>
    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>