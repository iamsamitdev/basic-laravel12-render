@extends('layouts.backend')
@section('title') My Profile @parent @endsection

@section('content')
<div class="container mx-auto py-6">

    <!-- Profile Header -->
    <div class="relative mb-8">

        <!-- Cover Image -->
        <div class="h-64 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg"></div>

        <!-- Profile Picture & Name -->
        <div class="absolute bottom-[20px] transform left-8 flex items-end space-x-6">
            <div class="relative">
                <img class="h-32 w-32 rounded-full border-4 border-white shadow-lg object-cover" 
                    src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&size=128&background=random" 
                    alt="{{  Auth::user()->name }}">
                <button class="absolute bottom-2 right-2 bg-gray-100 p-1.5 rounded-full shadow-lg hover:bg-gray-200">
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </button>
            </div>
            <div class="pb-4">
                <h1 class="text-4xl font-bold text-gray-200">{{  Auth::user()->name }}</h1>
                <p class="text-gray-100">{{  Auth::user()->position ?? 'Full Stack Developer' }}</p>
            </div>
        </div>

        
    </div>

    <!-- Main Content Grid -->
    <div class="mt-16 grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Left Column: Basic Info -->
        <div class="lg:col-span-1 space-y-6">
            <div class="bg-white rounded-lg shadow p-6 border border-gray-200">
                <h2 class="text-lg font-semibold text-gray-900 mb-4">Basic Information</h2>
                <div class="space-y-4 text-gray-600">
                    <p><span class="font-semibold text-gray-800">📧 Email:</span> {{  Auth::user()->email }}</p>
                    <p><span class="font-semibold text-gray-800">📞 Phone:</span> {{  Auth::user()->phone ?? '+66 98 765 4321' }}</p>
                    <p><span class="font-semibold text-gray-800">📍 Location:</span> Bangkok, Thailand</p>
                    <p><span class="font-semibold text-gray-800">📅 Joined:</span> {{  Auth::user()->created_at->format('F d, Y') }}</p>
                </div>
                <button class="mt-6 w-full bg-gray-100 text-gray-700 py-2 px-4 rounded-lg hover:bg-gray-200 transition duration-200 flex items-center justify-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                    </svg>
                    Edit Profile
                </button>
            </div>

            <!-- Account Status -->
            <div class="bg-white rounded-lg shadow p-6 border border-gray-200">
                <h2 class="text-lg font-semibold text-gray-900 mb-4">Account Status</h2>
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between text-sm mb-2">
                            <span class="text-gray-500">Profile Completion</span>
                            <span class="text-blue-600 font-medium">85%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-blue-600 h-2 rounded-full" style="width: 85%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm mb-2">
                            <span class="text-gray-500">Email Verification</span>
                            <span class="text-green-600 font-medium">Verified</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-green-500 h-2 rounded-full w-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column: Recent Activity -->
        <div class="lg:col-span-2 space-y-6">
            <div class="bg-white rounded-lg shadow border border-gray-200">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h2 class="text-lg font-semibold text-gray-900">Recent Activity</h2>
                </div>
                <div class="p-6 space-y-4">
                    @foreach(range(1, 4) as $index)
                        <div class="flex items-start space-x-3">
                            <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center">
                                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-900">Created new order #{{ rand(1000, 9999) }}</p>
                                <p class="text-sm text-gray-500">{{ now()->subHours(rand(1, 24))->diffForHumans() }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
