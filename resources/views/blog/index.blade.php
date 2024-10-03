@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('blogs.create') }}" class="btn btn-primary">Create New Blog</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Published</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blogs as $blog)
            <tr>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->author }}</td>
                <td>{{ $blog->published_at }}</td>
                <td>
                    <a href="{{ route('blogs.show', $blog) }}" class="btn btn-info">View</a>
                    <a href="{{ route('blogs.edit', $blog) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('blogs.destroy', $blog) }}" method="POST" style="display:inline;">
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
@endsection
