<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Programs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('programs.create') }}" class="btn btn-primary mb-4">Add New Program</a>
                    
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <table class="min-w-full mt-4 border border-collapse">
                        <thead class="border border-collapse">
                            <tr>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Images</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($programs as $program)
                                <tr class="border">
                                    <td class="border">{{ $program->title }}</td>
                                    <td class="border">{{ $program->content }}</td>
                                    <td class="border">
                                        @if(isset($program->images[0])) <!-- Cek jika ada gambar -->
                                            <img src="{{ asset('storage/' . json_decode($program->images)[0]) }}" 
                                                class="img-fluid" 
                                                alt="{{ $program->title }}" 
                                                style="width: 50%; height: auto; object-fit: contain; margin: 0 auto;">
                                        @else
                                            <img src="URL_GAMBAR_DEFAULT" alt="Gambar Default" 
                                                class="img-fluid" 
                                                style="width: 50%; height: auto; object-fit: contain; margin: 0 auto;">
                                        @endif
                                    </td>
                                    
                                    <td class="border">
                                        <a href="{{ route('programs.edit', $program) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('programs.destroy', $program) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
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
