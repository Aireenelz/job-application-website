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
                    <h4 class="mb-4">Saved Jobs</h4>
                    <!-- Include content for Saved Jobs here -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                        <!-- Dummy data for saved jobs -->
                        @for ($i = 1; $i <= 6; $i++)
                            <div class="bg-gray-100 p-4 rounded-lg shadow">
                                <h5 class="font-semibold">Job Title {{ $i }}</h5>
                                <p>Company {{ $i }}</p>
                                <p>Location {{ $i }}</p>
                            </div>
                        @endfor
                    </div>
                </div>

                <!-- Applied Jobs content -->
                <div x-show="tab === 'applied'">
                    <h4 class="mb-4">Applied Jobs</h4>
                    <!-- Include content for Applied Jobs here -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                        <!-- Dummy data for applied jobs -->
                        @for ($i = 1; $i <= 6; $i++)
                            <div class="bg-gray-100 p-4 rounded-lg shadow">
                                <h5 class="font-semibold">Job Title {{ $i }}</h5>
                                <p>Company {{ $i }}</p>
                                <p>Location {{ $i }}</p>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>