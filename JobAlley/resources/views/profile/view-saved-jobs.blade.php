<script src="https://cdn.tailwindcss.com"></script>
<script src="//unpkg.com/alpinejs" defer></script>
<div class="container-fluid">
    <section class="space-y-6">
        <header>
            <h2 class="text-lg font-medium text-gray-900">
                {{ __('All Saved Jobs') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Hurry and apply them! You may the employeer they are looking for! ') }}
            </p>
        </header>

        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 gap-6">
            <!-- Dummy data for applied jobs -->
            @for ($i = 1; $i <= 6; $i++)
                <div class="bg-gray-100 p-4 rounded-lg shadow relative">
                    <h5 class="font-semibold">Job Title {{ $i }}</h5>
                    <p>Company {{ $i }}</p>
                    <p>Location {{ $i }}</p>
                    
                    <div class="flex justify-end absolute top-0 right-0 mt-4 mr-4">
                        <button
                            x-data="{ filled: true }"
                            @click="filled = !filled"
                            class="flex items-center focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" :class="{ 'text-green-500': filled }" viewBox="0 0 16 16">
                                <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2"/>
                            </svg>
                        </button>
                    </div>
                    
                </div>
            @endfor
            
            
        </div>
    </section>
</div>