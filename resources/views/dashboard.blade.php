<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-4xl mx-auto dark:bg-gray-800 bg-white shadow-sm sm:rounded-lg rounded-lg overflow-hidden sm:px-6">
        <table class="min-w-full text-gray-900 dark:text-gray-100">
            <thead>
                <tr>
                    <th class="py-2 px-4 text-center">No</th>
                    <th class="py-2 px-4 text-center">Comment</th>
                    <th class="py-2 px-4 text-center">Created Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach($comments as $index => $comment)
                    <tr class="">
                        <td class="py-2 px-4 text-center text-white">{{ $index + 1 }}</td>
                        <td class="py-2 px-4 text-white text-center">{{ $comment->comment }}</td>
                        <td class="py-2 px-4 text-white text-center">{{ $comment->created_at->format('Y-m-d H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
