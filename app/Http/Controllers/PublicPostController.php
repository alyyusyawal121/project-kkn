<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PublicPostController extends Controller
{
    // Method untuk menampilkan daftar post di halaman blog
    public function index()
    {
        $posts = Post::latest()->paginate(10); // Mengambil semua post dengan pagination
        return view('blog', compact('posts')); // Mengarahkan ke halaman 'blog' dengan daftar posts
    }

    // Method untuk menampilkan detail satu post dan 5 post terbaru lainnya
    public function show(Post $post)
    {
        $recentPosts = Post::latest()->where('id', '!=', $post->id)->take(5)->get(); // Mengambil 5 post terbaru kecuali yang sedang ditampilkan

        return view('blog-detail', compact('post', 'recentPosts')); // Mengirim data post dan recentPosts ke view 'blog-detail'
    }
}
