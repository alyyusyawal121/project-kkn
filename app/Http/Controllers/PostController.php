<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function publicShow(Post $post)
    {
        return view('posts.public_show', compact('post')); 
    }


    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

        public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public'); // Store the image
            $post->image = $imagePath; // Save the path in the database
        }

        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    

    public function show($id)
    {
        $post = Post::findOrFail($id);
        
        // Check if created_at is null and set formatted date
        $formattedDate = $post->created_at ? $post->created_at->format('Y-m-d') : 'No Date';
    
        return view('posts.show', compact('post', 'formattedDate'));
    }
    


    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $post->title = $request->title;
        $post->content = $request->content;
    
        // Jika ada gambar baru diupload, hapus gambar lama dan simpan yang baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }
            $imagePath = $request->file('image')->store('images', 'public');
            $post->image = $imagePath;
        }
    
        $post->save();
    
        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }
    

    public function destroy(Post $post)
    {
        // Delete the image from storage
        if ($post->image) {
            Storage::delete($post->image);
        }

        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}


