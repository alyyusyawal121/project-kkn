@extends('layouts.app') <!-- Menggunakan layout dasar dari aplikasi -->

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h2>{{ $post->title }}</h2> <!-- Menampilkan judul postingan -->
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->title }}"> <!-- Menampilkan gambar postingan -->
                    </div>
                    <div>
                        {!! $post->content !!} <!-- Menampilkan konten postingan dengan mengizinkan HTML -->
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <small>Ditulis oleh {{ $post->author->name }} pada {{ $post->created_at->format('d M Y') }}</small> <!-- Informasi penulis dan tanggal -->
                </div>
            </div>
            <a href="{{ route('posts.index') }}" class="btn btn-primary mt-3">Kembali ke Daftar Blog</a> 
        </div>
    </div>
</div>
@endsection
