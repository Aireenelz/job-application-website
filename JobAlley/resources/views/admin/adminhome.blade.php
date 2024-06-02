<script src="https://cdn.tailwindcss.com"></script>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="flex justify-between items-center mb-4">
                <h4 class="mb-4">All Active Jobs</h4>
                
                <a href="{{ route('create') }}" class="px-5 py-2 bg-blue-500 rounded-md text-white text-lg shadow-md">Add New</a>
            
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-2 gap-6">
                @for ($i = 1; $i <= 6; $i++)
                <div class="bg-gray-100 p-4 rounded-lg border transition duration-300 ease-in-out transform hover:shadow-lg">
                    <h5 class="font-semibold">Job Title {{ $i }}</h5>
                    <p>Company {{ $i }}</p>
                    <p>Location {{ $i }}</p>
                    <p>Description {{ $i }}</p>
                </div>
                @endfor
            </div>
                
        </div>
    </div>

    
</x-app-layout>