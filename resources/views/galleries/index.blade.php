<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Blog galleries') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('galleries.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Post</a>
                    <table class="min-w-full mt-4">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Title</th>
                                <th class="px-4 py-2">Images</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($galleries as $gallery)
                            <tr>
                                <td class="border px-4 py-2">{{ $gallery->title }}</td>
                                <td class='border px-4 py-2'>
                                    @if($gallery->image)
                                        <img src="{{ Storage::url($gallery->image) }}" alt="{{ $gallery->title }}" class="w-20 h-20 object-cover"> <!-- Display the image -->
                                    @else
                                        No Image
                                    @endif
                                </td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('galleries.edit', $gallery) }}" class="text-blue-600 hover:text-blue-900">Edit</a>
                                    <form action="{{ route('galleries.destroy', $gallery) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
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
</x-app-layout>
