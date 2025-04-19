@extends('layouts.auth')
@section('title')
    Register @parent
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
                    <h1 class="text-4xl font-bold mb-4">Create Account</h1>
                    <p class="text-xl">Join us today!</p>
                </div>
            </div>
        </div>

        <!-- Right Column - Register Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center px-8 py-12 sm:px-12 lg:px-16">
            <div class="w-full max-w-md">
                <h2 class="text-3xl font-bold text-gray-900 mb-8">Sign Up</h2>

                @if ($errors->any())
                    <div class="mb-4 p-4 rounded-lg bg-red-100 text-red-700">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('register') }}" method="POST" class="space-y-4">
                    @csrf

                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                        <input type="text" name="name" id="name" maxlength="64"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 @error('name') border-red-500 @enderror"
                            placeholder="Enter your name" value="{{ old('name') }}">
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                        <input type="text" name="email" id="email" maxlength="64"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 @error('email') border-red-500 @enderror"
                            placeholder="Enter your email" value="{{ old('email') }}">
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                        <input type="text" name="phone" id="phone" maxlength="16"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 @error('phone') border-red-500 @enderror"
                            placeholder="Enter your phone number" value="{{ old('phone') }}">
                        @error('phone')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="address" class="block text-sm font-medium text-gray-700 mb-2">Address</label>
                        <textarea name="address" id="address" rows="3"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 @error('address') border-red-500 @enderror"
                            placeholder="Enter your address">{{ old('address') }}</textarea>
                        @error('address')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                        <input type="password" name="password" id="password" maxlength="64"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 @error('password') border-red-500 @enderror"
                            placeholder="Create a password">
                        @error('password')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">Confirm
                            Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" maxlength="64"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 @error('password_confirmation') border-red-500 @enderror"
                            placeholder="Confirm your password">
                        @error('password_confirmation')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit"
                        class="w-full py-3 px-4 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition duration-200 mt-6">
                        Create Account
                    </button>
                </form>

                <p class="mt-8 text-center text-sm text-gray-600">
                    Already have an account?
                    <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:text-blue-500">
                        Login here
                    </a>
                </p>
            </div>
        </div>
    </div>
@endsection
