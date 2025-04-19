@extends('layouts.auth')
@section('title')
    Login @parent
@endsection

@section('content')
    <div class="min-h-screen flex">
        <!-- Left Column - Image/Banner -->
        <div class="hidden lg:flex lg:w-1/2 bg-blue-600 relative">
            <!-- Back to Home Link -->
            <div class="absolute top-4 left-4">
                <a href="{{ route('home') }}" class="inline-flex items-center text-sm text-white hover:text-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Back to Home
                </a>
            </div>
            <div class="flex items-center justify-center w-full h-full">
                <div class="text-center text-white">
                    <h1 class="text-4xl font-bold mb-4">Welcome Back!</h1>
                    <p class="text-xl">Login to access your account</p>
                </div>
            </div>
        </div>

        <!-- Right Column - Login Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center px-8 py-12 sm:px-12 lg:px-16">
            <div class="w-full max-w-md">
                <h2 class="text-3xl font-bold text-gray-900 mb-8">Sign In</h2>

                @if (session('success'))
                    <div class="mb-4 p-4 rounded-lg bg-green-100 text-green-700">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-4 p-4 rounded-lg bg-red-100 text-red-700">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('login') }}" method="POST" class="space-y-6">
                    @csrf

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                        <input type="text" name="email" id="email"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 @error('email') border-red-500 @enderror"
                            placeholder="Enter your email" value="{{ old('email') }}">
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                        <input type="password" name="password" id="password"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            @error('password') border-red-500 @enderror placeholder="Enter your password">
                        @error('password')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit"
                        class="w-full py-3 px-4 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition duration-200">
                        Sign In
                    </button>
                </form>

                <p class="mt-8 text-center text-sm text-gray-600">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="font-medium text-blue-600 hover:text-blue-500">
                        Register here
                    </a>
                </p>
            </div>
        </div>
    </div>
@endsection
