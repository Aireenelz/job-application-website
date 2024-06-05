<script src="https://cdn.tailwindcss.com"></script>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Job') }}
        </h2>
    </x-slot>

    <div class="py-10 px-4">
        <div class="container mx-auto max-w-xl shadow py-4 px-10 bg-white rounded-md mt-4 ">
            @if (session()->has('error'))
                <div class="bg-red-500 text-white px-4 py-2 rounded-md mb-4">
                    {{session('error')}}
                </div>
            @endif    

            <a href="{{ route('home') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 mb-4 ml-4">Back</a>
            <div class="px-6 py-10">
                <h1 class="text-center text-3xl font-bold mb-6">Update Job</h1>
                <form action="{{ route('jobs.update', ['id' => $jobs->id]) }}" method="POST">
                        @csrf
                    <div class="mb-4 ">
                        <label for="position" class="text-md font-bold">Job Position</label>
                        <input type="text" value="{{ $jobs->position}}" name="position" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-emerald-500 focus:ring focus:ring-emerald-200 focus:ring-opacity-50" id="position">
                        @error('position')
                            <span class="text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="company" class="text-md font-bold">Company</label>
                        <input type="text" value="{{ $jobs->company}}" name="company" class="mt-1 block w-full border-gray-300 rounded-md my-2 shadow-sm focus:border-emerald-500 focus:ring focus:ring-emerald-200 focus:ring-opacity-50" id="company">
                        @error('company')
                            <span class="text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-4 ">
                        <label for="location" class="text-md font-bold">Location</label>
                        <input type="text" value="{{ $jobs->location}}" name="location" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-emerald-500 focus:ring focus:ring-emerald-200 focus:ring-opacity-50" id="location">
                        @error('location')
                            <span class="text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="description" class="text-md font-bold">Description</label>
                        <textarea id="description" name="description" class="mt-1 text-left block w-full border-gray-300 rounded-md shadow-sm focus:border-emerald-500 focus:ring focus:ring-emerald-200 focus:ring-opacity-50" style="height: 150px;">
                            {{ trim($jobs->description) }}
                        </textarea>
                        @error('description')
                            <span class="text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="flex justify-end">
                        <button class="px-4 py-2 rounded-md text-black text-sm font-medium shadow-md mb-4 ml-4" style="background-color: #10b981;">Save</button>
                    </div>
                    
                </form>
            </div>
        
        </div>
    </div>

</x-app-layout>