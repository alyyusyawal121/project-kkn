<?php

// app/Http/Controllers/PublicPostController.php

namespace App\Http\Controllers;

use App\Models\Post; // Pastikan model Post ada
use Illuminate\Http\Request;

class PublicDetailController extends Controller
{
    // Method untuk menampilkan daftar post
    public function index()
    {
        $posts = Post::latest()->paginate(5);// Mengambil semua post dari database
        return view('blog-detail', compact('posts'));
    }
}
