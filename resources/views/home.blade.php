@extends('layouts.app')
@section('title') Home @parent @endsection

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="bg-gradient-to-r from-blue-500 to-purple-600 text-white rounded-lg shadow-xl p-10 mb-8">
            <h1 class="text-4xl font-bold mb-4">ยินดีต้อนรับสู่ Laravel 12</h1>
            <p class="text-xl mb-6 max-w-2xl">Experience the power and elegance of Laravel's latest version with enhanced features and improved performance.</p>
            <a href="{{ route('employees.employeelist') }}" class="bg-white text-blue-600 hover:bg-blue-100 transition duration-300 font-medium py-2 px-6 rounded-full inline-block">View Employees &rarr;</a>
        </div>
        
        <div class="grid md:grid-cols-2 gap-8 mb-8">
            <div class="bg-white p-6 rounded-lg shadow-md border border-gray-100">
                <div class="text-blue-500 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h2 class="text-xl font-bold mb-3">Lightning Fast Performance</h2>
                <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis non dicta aperiam quae dolorem velit laborum.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md border border-gray-100">
                <div class="text-purple-500 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <h2 class="text-xl font-bold mb-3">Enhanced Security</h2>
                <p class="text-gray-600">Et eaque similique quibusdam voluptates, possimus minus quaerat illo labore officiis dolor ipsa minima.</p>
            </div>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md border border-gray-100">
                <div class="text-green-500 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h2 class="text-xl font-bold mb-3">Easy to Use</h2>
                <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis non dicta aperiam quae dolorem velit laborum.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md border border-gray-100">
                <div class="text-yellow-500 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <h2 class="text-xl font-bold mb-3">Scalable</h2>
                <p class="text-gray-600">Et eaque similique quibusdam voluptates, possimus minus quaerat illo labore officiis dolor ipsa minima.</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md border border-gray-100">
                <div class="text-red-500
                mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h2 class="text-xl font-bold mb-3">Open Source</h2>
                <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis non dicta aperiam quae dolorem velit laborum.</p>
            </div>
        </div>
    </div>
@endsection
