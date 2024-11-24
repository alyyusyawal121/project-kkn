<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class HomeController extends Controller
{
    public function index()
    {
        // Mendapatkan 4 post terbaru
        $posts = Post::orderBy('created_at', 'desc')->take(4)->get();
        
        return view('index', compact('posts')); // Ganti 'your_view_name' dengan nama view Anda
    }
    public function potensi()
    {
        return view('potensi');
    }
    public function galeridetail()
    {
        return view('galeri-detail');
    }
    public function galeri()
    {
        return view('galeri');
    }
    public function blog()
    {
        return view('blog');
    }
}
