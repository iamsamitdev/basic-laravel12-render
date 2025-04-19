<nav class="bg-white shadow-sm fixed top-0 left-0 w-full z-50">
    <div class="mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 justify-between">
            <div class="flex">
                <!-- Mobile menu button -->
                <button id="mobile-menu-button" class="lg:hidden inline-flex items-center justify-center p-2 rounded-md text-gray-600 hover:text-gray-900 hover:bg-gray-100 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center ml-4 lg:ml-0">
                    <a href="#" class="text-xl font-bold text-blue-600">
                        Backend
                    </a>
                </div>
            </div>

            <!-- Right Navigation -->
            <div class="flex items-center">
                <div class="relative ml-3 flex items-center">
                    <div class="flex items-center">
                        <button type="button" class="flex items-center text-sm rounded-full focus:outline-none" id="user-menu-button">
                            <span class="mr-3 text-gray-700">John Sena</span>
                            <img class="h-8 w-8 rounded-full border-2 border-gray-100" src="https://ui-avatars.com/api/?name=johnsena&background=random" alt="John Sena">
                        </button>
                    </div>

                    <form action="{{ route('logout') }}" method="POST" class="ml-4">
                        @csrf
                        <button type="submit" class="text-gray-600 hover:text-gray-900 hover:bg-gray-100 px-4 py-2 rounded-md text-sm font-medium transition-colors duration-200 cursor-pointer">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>
