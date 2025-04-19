<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@section('title') | Laravel @show</title>

    {{-- @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))) --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- @endif --}}
</head>
<body>
    <main>
        @yield('content')
    </main>
</body>
</html>