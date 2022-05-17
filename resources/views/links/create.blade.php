<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a Link') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="flex flex-col sm:justify-center items-center max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-col sm:justify-center items-center p-6 bg-white border-b border-gray-200">
                    {{-- You're logged in! --}}
                    <form method="POST" action="{{ route('links.store') }}">
                        @csrf

                        <!-- Link Name -->
                        <div>
                            <x-label for="name" :value="__('Link Name')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" placeholder="My Github Link" required autofocus />
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Link URL -->
                        <div class="mt-4">
                            <x-label for="body" :value="__('Link URL')" />

                            <x-input id="body" class="block mt-1 w-full" type="url" name="body" :value="old('body')" placeholder="https://github.com/yamlems" required autofocus />
                            @error('body')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="pt-4">
                            <x-button class="ml-4">
                                {{ __('Save Link') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
