<script src="https://cdn.tailwindcss.com"></script>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Applications') }}
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

            <h4 class="mb-4">Applicants list</h4>

            <!---list all applicants - READ--->
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200 table-fixed bg-white">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Job ID</th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Name</th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Email</th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Contact</th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Resume</th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">CV</th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Status</th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200 ">
                                    @forelse ($applications as $application)
                                    <tr class="hover:bg-blue-200 hover:text-white dark:hover:bg-blue-700 ">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium ">
                                            {{$application->job->id}}
                                        </td>
                                        <td class="text-sm px-6 py-6 whitespace-nowrap">
                                            {{$application->user->name}}
                                        </td>
                                        <td class="text-sm px-6 py-6 whitespace-nowrap">
                                            {{$application->user->email}}
                                        </td>
                                        <td class="text-sm px-6 py-6">
                                            {{$application->contact}}
                                        </td>
                                        <td class="text-sm px-6 py-6 whitespace-nowrap">
                                            <a href="{{ asset('storage/' . $application->resume) }}" target="_blank" class="px-5 py-2 bg-blue-500 rounded-md text-white text-base shadow-md">View Resume</a>
                                        </td>
                                        <td>
                                            @if ($application->coverletter)
                                                <a href="{{ asset('storage/' . $application->coverletter) }}" target="_blank" class="px-5 py-2 bg-blue-500 rounded-md text-white text-base shadow-md">View CV</a>
                                            @else
                                                <p class="text-sm">No CV attached</p>
                                            @endif
                                        </td>
                                        <td>
                                            {{ ucfirst($application->status) }}
                                        </td>
                                        <td>
                                            @if ($application->status == 'pending')
                                            <form action="{{ route('application.forward', $application->id) }}" method="POST">
                                                @csrf
                                                <button type="submit">Forward</button>
                                            </form>
                                            @endif
                                        </td>
                                        
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="7" class="px-6 py-4 text-sm font-medium text-gray-900">No applicants found</td>
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