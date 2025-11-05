<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Movies Library') }}</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')

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