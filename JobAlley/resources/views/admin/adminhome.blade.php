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
            
            <!---read all jobs and display--->
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">#</th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Position</th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Company</th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Location</th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Description</th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">EDIT</th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">DELETE</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                    @forelse ($jobs as $job)
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            {{$job->id}}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$job->position}}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$job->company}}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$job->location}}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$job->description}}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <a href="#" class="px-5 py-2 bg-blue-500 rounded-md text-white text-lg shadow-md">Edit</a>
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <a href="#" class="px-5 py-2 bg-red-500 rounded-md text-white text-lg shadow-md">Delete</a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td><h2>Job Not Found</h2></td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                
        </div>
    </div>

    
</x-app-layout>