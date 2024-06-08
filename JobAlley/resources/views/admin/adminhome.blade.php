<script src="https://cdn.tailwindcss.com"></script>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    
    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            @if (session()->has('success'))
                <div class="flex items-center justify-between bg-green-500 text-white px-4 py-2 rounded-md">
                    <div class="flex items-center">
                        <svg class="h-6 w-6 mr-2 text-green-100" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>{{ session('success') }}</span>
                    </div>
                    <button onclick="this.parentElement.style.display='none'" class="text-white">&times;</button>
                </div>
            @endif
            @if (session()->has('error'))
                <div class="flex items-center justify-between bg-red-500 text-white px-4 py-2 rounded-md">
                    <div class="flex items-center">
                        <svg class="h-6 w-6 mr-2 text-red-100" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                        <span>{{ session('error') }}</span>
                    </div>
                    <button onclick="this.parentElement.style.display='none'" class="text-white">&times;</button>
                </div>
            @endif
            <div class="flex justify-between items-center mb-4">
                <h4 class="mb-4">All Active Jobs</h4>
                
                <a href="{{ route('create') }}" class="px-5 py-2 bg-blue-500 rounded-md text-white text-lg shadow-md">Add New</a>
            
            </div>
            
            <!---read all jobs and display--->
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200 table-fixed bg-white">
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
                                <tbody class="bg-white divide-y divide-gray-200 ">
                                    @forelse ($jobs as $job)
                                    <tr class="hover:bg-blue-200 hover:text-white dark:hover:bg-blue-700 " >
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            {{$job->id}}
                                        </td>
                                        <td class="text-sm text-gray-900 px-6 py-6 whitespace-nowrap">
                                            {{$job->position}}
                                        </td>
                                        <td class="text-sm text-gray-900 px-6 py-6 whitespace-nowrap">
                                            {{$job->company}}
                                        </td>
                                        <td class="text-sm text-gray-900 px-6 py-6">
                                            {{$job->location}}
                                        </td>
                                        <td class="text-sm text-gray-900 px-6 py-6">
                                            {{$job->description}}
                                        </td>
                                        <td class="text-sm text-gray-900 px-6 py-6 whitespace-nowrap">
                                            <a href="{{ route('jobs.edit', ['id'=>$job->id]) }}" class="px-5 py-2 bg-blue-500 rounded-md text-white text-base shadow-md">Edit</a>
                                        </td>
                                        <td class="text-sm text-gray-900 px-6 py-6 whitespace-nowrap">
                                            <a id="deleteButton" data-job-id="{{ $job->id }}" class="px-5 py-2 bg-red-500 rounded-md text-white text-base shadow-md">Delete</a>
                                        </td>
                                        <!-- confirm delete modal -->
                                        <div id="deleteModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
                                            <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                                                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                                </div>
                                            
                                                <!-- This element is to trick the browser into centering the modal contents. -->
                                                <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>&#8203;
                                            
                                                <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                        <div class="sm:flex sm:items-start">
                                                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                                                    Confirm Deletion
                                                                </h3>
                                                                <div class="mt-2">
                                                                    <p class="text-sm text-gray-500">
                                                                        Are you sure you want to delete this job?
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                                        <button id="confirmDeleteButton" class="w-full inline-flex justify-center rounded-md border border-transparent px-4 py-2 bg-red-500 text-base leading-6 font-medium text-white shadow-sm hover:bg-red-600 focus:outline-none focus:border-red-700 focus:shadow-outline-red transition ease-in-out duration-150 sm:ml-3 sm:w-auto sm:text-sm">
                                                            Yes, Delete
                                                        </button>
                                                        <button id="cancelDeleteButton" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:mt-0 sm:w-auto sm:text-sm">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="7" class="px-6 py-4 text-sm font-medium text-gray-900">No jobs found</td>
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

    <script>
        var modal = document.getElementById('deleteModal');
        var deleteButton = document.getElementById('deleteButton');
        var confirmDeleteButton = document.getElementById('confirmDeleteButton');
        var cancelDeleteButton = document.getElementById('cancelDeleteButton');

        deleteButton.addEventListener('click', function() {
            modal.classList.remove('hidden');
        });

        confirmDeleteButton.addEventListener('click', function() {
            // delete job from database
            var jobId = deleteButton.getAttribute('data-job-id');
        
            // Send AJAX request to delete route
            fetch('/delete/' + jobId, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
            })
            .then(response => {
                if (response.ok) {
                    // If deletion is successful, close the modal and refresh the page
                    modal.classList.add('hidden');
                    location.reload();
                } else {
                    // If deletion fails, display an error message
                    alert('Failed to delete job');
                }
            });
        });

        cancelDeleteButton.addEventListener('click', function() {
            modal.classList.add('hidden');
        });
    </script>

    
</x-app-layout>