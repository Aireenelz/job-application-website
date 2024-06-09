<script src="https://cdn.tailwindcss.com"></script>
<script src="//unpkg.com/alpinejs" defer></script>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Jobs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- view applied jobs -->
            <div class="bg-white shadow sm:rounded-lg p-6">
                <div class="flex justify-start mb-4 border-b border-gray-200">
                    
                    @include('profile.view-applied-jobs', ['applications' => $applications]) 
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>