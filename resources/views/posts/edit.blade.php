<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" >
                    <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" value="{{ $post->title }}" required class="border rounded-md p-2 w-full" style="color: black;">
                        </div>
                        <div>
                            <label for="content">Content</label>
                            <textarea id="content" name="content" required class="border rounded-md p-2 w-full" style="color: black;>{{ $post->content }}</textarea>
                        </div>
                        <div>
                            <label for="image">Image</label>
                            <input type="file" id="image" name="image" class="border rounded-md p-2 w-full">
                        </div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
