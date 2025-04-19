@extends('layouts.app')
@section('title') About @parent @endsection

@section('content')
    <div class="container mx-auto px-4 py-8">
        <!-- Hero section -->
        <div class="bg-gradient-to-r from-blue-500 to-indigo-600 rounded-lg shadow-lg p-8 mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-4">About Us</h1>
            <p class="text-blue-100 text-lg max-w-2xl">Discover our story, our mission, and the team behind our success.</p>
        </div>
        
        <!-- Content section -->
        <div class="grid md:grid-cols-2 gap-8 mb-8">
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition duration-300 transform hover:-translate-y-1">
                <div class="flex items-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <h2 class="text-2xl font-semibold text-gray-800">Our Mission</h2>
                </div>
                <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis non dicta aperiam quae dolorem velit laborum et eaque similique quibusdam voluptates.</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition duration-300 transform hover:-translate-y-1">
                <div class="flex items-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                    </svg>
                    <h2 class="text-2xl font-semibold text-gray-800">Our Values</h2>
                </div>
                <p class="text-gray-600">Possimus minus quaerat illo labore officiis dolor ipsa minima? We believe in creating exceptional experiences that drive growth.</p>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-md p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Our Story</h2>
            <div class="border-l-4 border-blue-500 pl-4 mb-6">
                <p class="text-gray-600 italic">
                    "We started with a simple idea: to build something meaningful that makes a difference."
                </p>
            </div>
            <p class="text-gray-700 mb-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis non dicta aperiam quae dolorem velit laborum et eaque similique quibusdam voluptates, possimus minus quaerat illo labore officiis dolor ipsa minima?
            </p>
            <div class="mt-6 text-right">
                <a href="#" class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition duration-300">
                    Learn More
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
@endsection
