<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Program') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" >
                    <!-- The form action uses 'update' and method 'PUT' -->
                    <form action="{{ route('programs.update', $program->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') <!-- This is crucial for the update request -->

                        <!-- Title Field (Pre-filled with existing data) -->
                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <input type="text" id="title" name="title" required class="border rounded-md p-2 w-full" value="{{ old('title', $program->title) }}" style="color: black;">
                            @if ($errors->has('title'))
                                <span class="text-red-500 text-sm">{{ $errors->first('title') }}</span>
                            @endif
                        </div>

                        <!-- Content Field (Pre-filled with existing data) -->
                        <div class="mb-4">
                            <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                            <textarea id="content" name="content" required class="border rounded-md p-2 w-full" style="color: black;">{{ old('content', $program->content) }}</textarea>
                            @if ($errors->has('content'))
                                <span class="text-red-500 text-sm">{{ $errors->first('content') }}</span>
                            @endif
                        </div>

                        <!-- Image Upload Field (For adding new images) -->
                        <div class="mb-4">
                            <label for="images" class="block text-sm font-medium text-gray-700">Upload New Images</label>
                            <input type="file" id="images" name="images[]" class="border rounded-md p-2 w-full" accept="image/*" onchange="previewImages(event)" multiple>
                            <div id="imagePreview" class="mt-2 hidden">
                                <!-- Preview of newly uploaded images -->
                            </div>
                            @if ($errors->has('images'))
                                <span class="text-red-500 text-sm">{{ $errors->first('images') }}</span>
                            @endif
                        </div>

                        <!-- Existing Images (Display current images with option to remove) -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Current Images</label>
                            <div class="flex space-x-2">
                                @if (!empty($program->images) && is_array($program->images))
                                    @foreach($program->images as $image)
                                        <div>
                                            <img src="{{ asset('storage/' . $image) }}" alt="Current Image" class="w-24 h-24 object-cover rounded-md">
                                            <input type="checkbox" name="remove_images[]" value="{{ $image }}"> Remove
                                        </div>
                                    @endforeach
                                @else
                                    <p>No images available.</p>
                                @endif
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="category_id">Category</label>
                            <select name="category_id" id="category_id" class="form-control" required>
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ isset($program) && $program->category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Submit and Cancel Buttons -->
                        <div class="flex justify-end mt-4">
                            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Update</button>
                            <a href="{{ route('programs.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-2">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Same previewImages function for new uploads
        function previewImages(event) {
            const imagePreview = document.getElementById('imagePreview');
            imagePreview.innerHTML = ''; // Clear previous images
            const files = event.target.files;

            if (files.length > 1) {
                for (let i = 0; i < files.length; i++) {
                    const img = document.createElement('img');
                    img.src = URL.createObjectURL(files[i]);
                    img.classList.add('rounded-md', 'm-2', 'max-w-[150px]', 'max-h-[150px]');
                    imagePreview.appendChild(img);
                }
                imagePreview.classList.remove('hidden');
            } else if (files.length === 1) {
                const img = document.createElement('img');
                img.src = URL.createObjectURL(files[0]);
                img.classList.add('rounded-md', 'm-2', 'max-w-[200px]', 'max-h-[200px]');
                imagePreview.appendChild(img);
                imagePreview.classList.remove('hidden');
            } else {
                imagePreview.classList.add('hidden');
            }
        }
    </script>
</x-app-layout>
