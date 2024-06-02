<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Job') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="container mx-auto max-w-xl shadow py-4 px-10">
        @if (session()->has('error'))
            <div class="bg-red-500 text-black px-4 py-2">
                {{session('error')}}
            </div>
        @endif    

        <a href="{{ route('home') }}" class="px-5 py-2 bg-red-500 rounded-md text-white text-lg shadow-md">Back</a>
            <div class="my-3">
            <h1 class="text-center text-3xl font-bold">Create Job</h1>
                <form action="{{ route('jobs.save') }}" method="POST">
                    @csrf
                    <div class="my-2 ">
                        <label for="" class="text-md font-bold">Job Position</label>
                        <input type="text" name="position" class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                        @error('position')
                        <span class="text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="my-2 ">
                        <label for="" class="text-md font-bold">Company</label>
                        <input type="text" name="company" class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                        @error('company')
                        <span class="text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="my-2 ">
                        <label for="" class="text-md font-bold">Location</label>
                        <input type="text" name="location" class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                        @error('location')
                        <span class="text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="my-2 ">
                        <label for="" class="text-md font-bold">Description</label>
                        <input type="text" name="description" class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                        @error('description')
                        <span class="text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                    <button class="px-5 py-1 bg-emerald-500 rounded-md text-black text-lg shadow-md">Save</button>
                </form>
            </div>
        
        </div>
    </div>
</x-app-layout>