@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Blog</h1>
    <form action="{{ route('blogs.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" class="form-control">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
</div>
@endsection
