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
                    {{ __("You're logged in!") }}
                </div>
            </div>
            @if(session('success'))
                <div class="bg-green-200 text-green-800 px-4 py-2 mb-4" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Sample job card 1 -->
                 @foreach($jobs as $job)
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6">
                            <h5 class="font-semibold text-lg">{{ $job->position}}</h5>
                            <p class="mt-2 text-gray-600">{{ $job->company }}</p>
                            <p class="mt-2 text-gray-600">{{ $job->location }}</p>
                            <p class="mt-2 text-gray-600">{{ $job->description }}</p>

                            <a href="{{ route('applications.create', $job->id) }}">
                                <x-secondary-button>{{ __('Apply Now') }}</x-secondary-button>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
