<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Apply Job') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('applications.store', $job->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Error Banner -->
                        @if ($errors->any())
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                                <strong class="font-bold">Oops!</strong>
                                <span class="block sm:inline">{{ $errors->first() }}</span>
                            </div>
                        @endif
                        

                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus autocomplete="name" />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>
                        
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"/>
                            <x-input-error class="mt-2" :messages="$errors->get('email')" />
                        </div>
                        
                        <div class="mt-4">
                            <x-input-label for="contact" :value="__('Contact')" />
                            <x-text-input id="contact" class="block mt-1 w-full" type="text" name="contact" required />
                            <x-input-error class="mt-2" :messages="$errors->get('contact')" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="resume" :value="__('Resume')" />
                            <input id="resume" class="block mt-1 w-full" type="file" name="resume" required />
                            <p>File type: pdf, docs</p>
                            <x-input-error class="mt-2" :messages="$errors->get('resume')" />
                        </div>
                        
                        <div class="mt-4">
                            <x-input-label for="cover_letter" :value="__('Cover Letter')" />
                            <textarea id="cover_letter" class="block mt-1 w-full" name="cover_letter"></textarea>
                            
                        </div>
                        
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Submit Application') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
