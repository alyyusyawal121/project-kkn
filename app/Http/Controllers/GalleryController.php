<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function publicShow(Gallery $gallery)
    {
        return view('galleries.public_show', compact('Gallery')); 
    }


    public function index()
    {
        $galleries = Gallery::all();
        return view('galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('galleries.create');
    }

        public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $gallery = new Gallery();
        $gallery->title = $request->title;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public'); // Store the image
            $gallery->image = $imagePath; // Save the path in the database
        }

        $gallery->save();

        return redirect()->route('galleries.index')->with('success', 'Gallery created successfully.');
    }

    

    public function show($id)
    {
        $gallery = Gallery::findOrFail($id);
        
        // Check if created_at is null and set formatted date
        $formattedDate = $gallery->created_at ? $gallery->created_at->format('Y-m-d') : 'No Date';
    
        return view('galleries.show', compact('gallery', 'formattedDate'));
    }
    


    public function edit(Gallery $gallery)
    {
        return view('galleries.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $gallery->title = $request->title;
    
        // Jika ada gambar baru diupload, hapus gambar lama dan simpan yang baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($gallery->image) {
                Storage::disk('public')->delete($gallery->image);
            }
            $imagePath = $request->file('image')->store('images', 'public');
            $gallery->image = $imagePath;
        }
    
        $gallery->save();
    
        return redirect()->route('galleries.index')->with('success', 'Gallery updated successfully.');
    }
    

    public function destroy(Gallery $gallery)
    {
        // Delete the image from storage
        if ($gallery->image) {
            \Storage::delete($gallery->image);
        }

        $gallery->delete();
        return redirect()->route('galleries.index')->with('success', 'Gallery deleted successfully.');
    }
}
