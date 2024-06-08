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
            <!-- Tab navigation -->
            <div x-data="{ tab: 'saved' }" class="bg-white shadow sm:rounded-lg p-6">
                <div class="flex justify-start mb-4 border-b border-gray-200">
                    <button @click="tab = 'saved'" 
                            :class="{ 'border-b-2 border-blue-500': tab === 'saved', 'border-b-2 border-transparent': tab !== 'saved' }" 
                            class="focus:outline-none pb-2 mr-8">
                        Saved Jobs
                    </button>
                    <button @click="tab = 'applied'" 
                            :class="{ 'border-b-2 border-blue-500': tab === 'applied', 'border-b-2 border-transparent': tab !== 'applied' }" 
                            class="focus:outline-none pb-2">
                        Applied Jobs
                    </button>
                </div>

                <!-- Saved Jobs content -->
                <div x-show="tab === 'saved'">
                    @include('profile.view-saved-jobs') 
                </div>

                <!-- Applied Jobs content -->
                <div x-show="tab === 'applied'">
                    @include('profile.view-applied-jobs', ['applications' => $applications]) 
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>