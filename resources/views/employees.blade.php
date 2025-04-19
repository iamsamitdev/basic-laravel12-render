@extends('layouts.app')
@section('title') Employees @parent @endsection

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Page header with stats -->
    <div class="bg-white shadow rounded-lg p-6 mb-8">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Employee Management</h1>
                <p class="text-gray-500 mt-1">Manage your organization's workforce</p>
            </div>
            <div class="mt-4 md:mt-0 flex items-center">
                <div class="bg-blue-100 text-blue-800 py-2 px-4 rounded-lg mr-3 text-sm">
                    <span class="font-semibold">Total:</span> {{ count($employees) }} employees
                </div>
                <a href="{{ route('employees.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    Add New Employee
                </a>
            </div>
        </div>
    </div>
    
    <!-- Search and filter bar -->
    <div class="bg-white shadow rounded-lg p-4 mb-6">
        <div class="flex flex-col md:flex-row gap-4">
            <div class="flex-grow">
                <div class="relative">
                    <input type="text" placeholder="Search employees..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 absolute left-3 top-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>
            <div class="flex gap-3">
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                    <option value="">All Genders</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                    <option value="">Sort By</option>
                    <option value="name_asc">Name (A-Z)</option>
                    <option value="name_desc">Name (Z-A)</option>
                    <option value="id_asc">ID (Low-High)</option>
                    <option value="id_desc">ID (High-Low)</option>
                </select>
            </div>
        </div>
    </div>
    
    <!-- Employees Table -->
    <div class="bg-white shadow rounded-lg overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead>
                    <tr class="bg-gradient-to-r from-gray-800 to-gray-700 text-white">
                        <th class="px-6 py-4 font-medium">ID</th>
                        <th class="px-6 py-4 font-medium">Fullname</th>
                        <th class="px-6 py-4 font-medium">Gender</th>
                        <th class="px-6 py-4 font-medium">Email</th>
                        <th class="px-6 py-4 font-medium">Tel</th>
                        <th class="px-6 py-4 font-medium">Age</th>
                        <th class="px-6 py-4 font-medium">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($employees as $key => $emp)
                        <tr class="{{ $key % 2 === 0 ? 'bg-white' : 'bg-gray-50' }} hover:bg-gray-100 transition-colors duration-200">
                            <td class="px-6 py-4 font-medium text-gray-800">{{ $emp->id }}</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="h-10 w-10 flex-shrink-0 mr-3 bg-blue-100 rounded-full flex items-center justify-center">
                                        <span class="text-blue-800 font-semibold">{{ substr($emp->fullname, 0, 1) }}</span>
                                    </div>
                                    <div>
                                        <div class="font-medium text-gray-800">{{ $emp->fullname }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 rounded-full text-xs font-medium {{ $emp->gender == 'Male' ? 'bg-blue-100 text-blue-800' : ($emp->gender == 'Female' ? 'bg-pink-100 text-pink-800' : 'bg-purple-100 text-purple-800') }}">
                                    {{ $emp->gender }}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <a href="mailto:{{ $emp->email }}" class="text-blue-600 hover:underline">{{ $emp->email }}</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="tel:{{ $emp->tel }}" class="text-blue-600 hover:underline">{{ $emp->tel }}</a>
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 rounded-full text-xs font-medium {{ $emp->age < 30 ? 'bg-green-100 text-green-800' : ($emp->age > 50 ? 'bg-orange-100 text-orange-800' : 'bg-blue-100 text-blue-800') }}">
                                    {{ $emp->age }} years
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex space-x-3">
                                    <a href="#" class="text-blue-600 hover:text-blue-800 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </a>
                                    <a href="#" class="text-red-600 hover:text-red-800 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </a>
                                    <a href="#" class="text-gray-600 hover:text-gray-800 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        <div class="bg-gray-50 px-6 py-3 border-t border-gray-200">
            <div class="flex justify-between items-center">
                <div class="text-sm text-gray-700">
                    Showing <span class="font-medium">1</span> to <span class="font-medium">{{ count($employees) }}</span> of <span class="font-medium">{{ count($employees) }}</span> employees
                </div>
                <div class="flex space-x-1">
                    <span class="px-3 py-1 border border-gray-300 rounded-md bg-blue-500 text-white">1</span>
                    <span class="px-3 py-1 border border-gray-300 rounded-md bg-white text-gray-700 hover:bg-gray-100 cursor-pointer">2</span>
                    <span class="px-3 py-1 border border-gray-300 rounded-md bg-white text-gray-700 hover:bg-gray-100 cursor-pointer">3</span>
                    <span class="px-3 py-1 border border-gray-300 rounded-md bg-white text-gray-700 hover:bg-gray-100 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Back to home button -->
    <div class="mt-6">
        <a href="{{ route('home') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-lg text-gray-700 bg-white hover:bg-gray-50 transition duration-150">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Back to Home
        </a>
    </div>
</div>
@endsection
