<nav id="main-navbar" class="fixed top-0 left-0 right-0 z-50 bg-gray-800 text-white shadow-lg transition-all duration-300">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
                <span class="text-xl font-bold">Laravel <span class="text-blue-500">12</span></span>
            </a>

            <!-- Desktop Navigation -->
            <ul class="hidden md:flex items-center space-x-1">
                <li>
                    <a href="{{ route('home') }}" class="px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('home') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} transition-colors duration-200">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}" class="px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('about') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} transition-colors duration-200">
                        About
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" class="px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('contact') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} transition-colors duration-200">
                        Contact
                    </a>
                </li>
                <li>
                    <a href="{{ route('employees.employeelist') }}" class="px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('employees.employeelist') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} transition-colors duration-200">
                        Employees
                    </a>
                </li>
                
                @auth
                    <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors duration-200 flex items-center">Dashboard</a>
                @else
                    <li class="ml-3">
                        <a href="{{ route('login') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors duration-200 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            Login
                        </a>
                    </li>
                @endauth

            </ul>

            <!-- Mobile menu button -->
            <button id="menu-toggle" class="md:hidden inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                <svg id="menu-icon-open" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg id="menu-icon-close" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="hidden md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 border-t border-gray-700">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('home') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                Home
            </a>
            <a href="{{ route('about') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('about') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                About
            </a>
            <a href="{{ route('contact') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('contact') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                Contact
            </a>
            <a href="{{ route('employees.employeelist') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('employees.employeelist') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                Employees
            </a>
            <div class="pt-4 pb-3 border-t border-gray-700">

                @auth
                    <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors duration-200 flex items-center">Dashboard</a>
                @else
                    <a href="#" class="flex items-center px-3 py-2 rounded-md text-base font-medium text-white bg-blue-600 hover:bg-blue-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Login
                    </a>
                @endauth

            </div>
        </div>
    </div>
</nav>

<!-- Spacer to prevent content from hiding behind fixed navbar -->
<div class="h-16 md:h-16"></div>

<script>
    // Toggle mobile menu
    document.getElementById('menu-toggle').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
        document.getElementById('menu-icon-open').classList.toggle('hidden');
        document.getElementById('menu-icon-close').classList.toggle('hidden');
    });

    // Change navbar background on scroll
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('main-navbar');
        if (window.scrollY > 10) {
            navbar.classList.add('bg-gray-900');
            navbar.classList.add('py-1');
            navbar.classList.remove('py-2');
        } else {
            navbar.classList.remove('bg-gray-900');
            navbar.classList.remove('py-1');
            navbar.classList.add('py-2');
        }
    });

    // Close mobile menu when clicking on a link
    const menuLinks = document.querySelectorAll('#mobile-menu a');
    menuLinks.forEach(link => {
        link.addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.add('hidden');
            document.getElementById('menu-icon-open').classList.remove('hidden');
            document.getElementById('menu-icon-close').classList.add('hidden');
        });
    });
</script>
