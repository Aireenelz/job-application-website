<script src="https://cdn.tailwindcss.com"></script>
<script src="//unpkg.com/alpinejs" defer></script>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-xl mb-4">Welcome back, {{ Auth::user()->name }}!</h1>
                </div>

                <section class="p-5 " id="jobs">
                    <div class="container py-5">
                        <h2 class="text-2xl  mb-5">Explore Jobs</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                            <!-- Job Intro 1 -->
                            <div x-data="{ open: false }" class="col-span-1 sm:col-span-2 lg:col-span-1">
                                <div @click="open = !open" class="cursor-pointer bg-white border border-gray-200 rounded-md shadow-md p-6">
                                    <h3 class="text-lg font-semibold mb-2">Search for jobs</h3>
                                    <p class="text-gray-700">Find the perfect match for your skills and expertise effortlessly.</p>
                                </div>
                                <div x-show="open" class="mt-3 p-6 bg-white border border-gray-200 rounded-md shadow-md">
                                    <p class="text-gray-700">Additional content or action related to searching for jobs...</p>
                                </div>
                            </div>
                            <!-- Job Intro 2 -->
                            <div class="col-span-1 sm:col-span-2 lg:col-span-1">
                                <div class="bg-white border border-gray-200 rounded-md shadow-md p-6">
                                    <h3 class="text-lg font-semibold mb-2">View job details</h3>
                                    <p class="text-gray-700">Dive deep into job descriptions to make informed decisions about your next career move.</p>
                                </div>
                            </div>
                            <!-- Job Intro 3 -->
                            <div class="col-span-1 sm:col-span-2 lg:col-span-1">
                                <div class="bg-white border border-gray-200 rounded-md shadow-md p-6">
                                    <h3 class="text-lg font-semibold mb-2">Apply and submit job application</h3>
                                    <p class="text-gray-700">Streamline your application process and connect with potential employers seamlessly.</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center mt-6">
                            <a href="{{ route('jobsearch') }}" class="text-blue-500 font-semibold hover:underline">More Jobs &rarr;</a>
                        </div>
                    </div>
                </section>

            </div>
            
        </div>
    </div>
</x-app-layout>
