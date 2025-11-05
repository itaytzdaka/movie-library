<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Movies Library') }}</title>
    
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @stack('styles')

    @endif
</head>
<body>
    @stack('scripts')
    <header>
        <x-nav />
    </header>
    <main>
        {{ $slot }}
    </main>
</body>
</html>