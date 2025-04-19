@extends('layouts.app')
@section('title') Add New Employee @parent @endsection

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="px-6 py-4 bg-gray-50 border-b border-gray-200">
            <h2 class="text-2xl font-bold text-gray-800">Add New Employee</h2>
        </div>

        <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data" class="p-6">
            
            @csrf
            
            @if ($errors->any())
            <div class="mb-4 p-4 bg-red-50 border border-red-200 rounded-md">
                <ul class="list-disc list-inside text-red-600">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="col-span-2">
                    <label for="avatar" class="block text-sm font-medium text-gray-700 mb-2">Profile Picture</label>
                    <input type="file" name="avatar" id="avatar" accept="image/*"
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <p class="mt-1 text-sm text-gray-500">JPG, PNG, GIF up to 2MB</p>
                </div>

                <div class="col-span-2">
                    <label for="fullname" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                    <input type="text" name="fullname" id="fullname" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                           value="{{ old('fullname') }}">
                </div>

                <div>
                    <label for="gender" class="block text-sm font-medium text-gray-700 mb-2">Gender</label>
                    <select name="gender" id="gender" 
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">Select Gender</option>
                        <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                        <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                    </select>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                    <input type="text" name="email" id="email" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                           value="{{ old('email') }}">
                </div>

                <div>
                    <label for="tel" class="block text-sm font-medium text-gray-700 mb-2">Telephone</label>
                    <input type="tel" name="tel" id="tel" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                           value="{{ old('tel') }}">
                </div>

                <div>
                    <label for="age" class="block text-sm font-medium text-gray-700 mb-2">Age</label>
                    <input type="number" name="age" id="age" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                           value="{{ old('age') }}">
                </div>

                <div class="col-span-2">
                    <label for="address" class="block text-sm font-medium text-gray-700 mb-2">Address</label>
                    <textarea name="address" id="address" rows="3" 
                              class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('address') }}</textarea>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end space-x-3">
                <a href="{{ route('employees.index') }}" 
                   class="px-4 py-2 bg-gray-100 text-gray-700 rounded-md hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-400">
                    Cancel
                </a>
                <button type="submit" 
                        class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Save Employee
                </button>
            </div>
        </form>
    </div>
</div>
@endsection