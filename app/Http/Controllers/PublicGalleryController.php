<?php

// app/Http/Controllers/PublicPostController.php

namespace App\Http\Controllers;

use App\Models\Gallery; 
use Illuminate\Http\Request;

class PublicGalleryController extends Controller
{
    // Method untuk menampilkan daftar post
    public function index()
    {
        $galleries = Gallery::all(); // Ambil semua data dari tabel galleries
        return view('galeri', compact('galleries')); // Ganti 'your-view-name' dengan nama view yang sesuai
    }

    // Method untuk menampilkan detail satu post
}
