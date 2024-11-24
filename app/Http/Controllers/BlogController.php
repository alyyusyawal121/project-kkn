<?php

namespace App\Http\Controllers;

use App\Models\Blog; // Assuming you have a Blog model
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show($id)
    {
        $blog = Blog::findOrFail($id); // Fetch blog post by id
        return view('blog-details', compact('blog'));
    }

    public function index() {
        return view('blog.index');
    }
}

