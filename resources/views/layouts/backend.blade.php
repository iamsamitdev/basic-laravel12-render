<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@section('title') | Backend Laravel @show</title>

    {{-- @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))) --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- @endif --}}

    @yield('styles')
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col">
        
        @include('includes.navbar')
        
        <div class="flex flex-1">
            @include('includes.sidebar')
            
            <main class="flex-1 overflow-x-hidden overflow-y-auto mt-8 bg-gray-100 lg:ml-64">
                <div class="container mx-auto px-6 py-8">
                    
                    @if(session('success'))
                        <div class="mb-4 p-4 rounded-lg bg-green-100 text-green-700">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    <script>
        // Toggle mobile menu
        document.getElementById('mobile-menu-button')?.addEventListener('click', function() {
            document.getElementById('sidebar')?.classList.toggle('-translate-x-full');
        });
    </script>

    @yield('scripts')
</body>
</html>