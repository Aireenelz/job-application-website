<script src="https://cdn.tailwindcss.com"></script>
<script src="//unpkg.com/alpinejs" defer></script>
<div class="container-fluid">
    <section class="space-y-6">
        <header>
            <h2 class="text-lg font-medium text-gray-900">
                {{ __('All Applied Jobs') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('All the best in your application! ') }}
            </p>
        </header>
        
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 gap-6">
        
            <!-- Dummy data for applied jobs -->
            @foreach($applications as $application)
            
                <div class="bg-gray-100 p-4 rounded-lg shadow relative">
                    <h5 class="font-semibold text-lg">{{ $application->job->position}}</h5>
                    <p class="mt-2 text-gray-600">{{ $application->job->company }}</p>
                    <p class="mt-2 text-gray-600">{{ $application->job->location }}</p>
                    <p class="mt-2 text-gray-600">{{ $application->job->description }}</p>

                    <div class="flex justify-end">
                        <x-danger-button
                            x-data=""
                            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">{{ __('Delete Application') }}
                        </x-danger-button>
                    </div>  
                </div>
            @endforeach
            
            <!-- modal -->
            <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                <form method="post" action="#" class="p-6">
                    @csrf
                    @method('delete')

                    <h2 class="text-lg font-medium text-gray-900">
                        {{ __('Are you sure you want to delete this application?') }}
                    </h2>

                    <p class="mt-1 text-sm text-gray-600">
                        {{ __('Once your application is deleted, you may apply again') }}
                    </p>

                    <div class="mt-6 flex justify-end">
                        <x-secondary-button x-on:click="$dispatch('close')">
                            {{ __('Cancel') }}
                        </x-secondary-button>

                        <x-danger-button class="ms-3">
                            {{ __('Delete Application') }}
                        </x-danger-button>
                    </div>
                </form>
            </x-modal>
        </div>
    </section>
</div>
