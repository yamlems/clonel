<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- You're logged in! --}}
                    <div class="p-2">
                        <x-button class="ml-4">
                            <a href="{{ route('links.create') }}">{{ __('Add a New Link') }}</a>
                        </x-button>
                    </div>
                    <div class="pt-4 relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Url
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Visits
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Last Visit
                                    </th>
                                    {{-- <th scope="col" class="px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <span class="sr-only">Delete</span>
                                    </th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($links as $link)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            {{ $link->name }}
                                        </th>
                                        <td class="px-6 py-4">
                                            <a href="{{ $link->body }}">
                                                {{ $link->body }}
                                            </a>
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $link->visits_count }}
                                        </td>
                                        <td class="px-6 py-4">
                                            Aug 4, 2022 - 12:30pm
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <a href="{{ route('links.edit', ['link' => $link['id']]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <form method="POST" action="{{ route('links.destroy', ['link' => $link['id']]) }}">
                                                @csrf
                                                @method('DELETE')

                                                <button class="text-sm text-blue font-medium">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
