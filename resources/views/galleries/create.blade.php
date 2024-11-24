<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" >
                    <form action="{{ route('galleries.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" required class="border rounded-md p-2 w-full" placeholder="Enter gallery title" style="color: black;">
                            @if ($errors->has('title'))
                                <span class="text-red-500 text-sm">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                        <div>
                            <label for="image">Image</label>
                            <input type="file" id="image" name="image" class="border rounded-md p-2 w-full" onchange="previewImage(event)">
                            <img id="imagePreview" src="#" alt="Image Preview" class="mt-2 hidden" style="max-width: 200px;">
                            @if ($errors->has('image'))
                                <span class="text-red-500 text-sm">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create</button>
                        <a href="{{ route('galleries.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: '#content',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar_mode: 'floating',
            toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat',
            height: 300
        });

        function previewImage(event) {
            const imagePreview = document.getElementById('imagePreview');
            imagePreview.src = URL.createObjectURL(event.target.files[0]);
            imagePreview.classList.remove('hidden');
        }
    </script>
</x-app-layout>
