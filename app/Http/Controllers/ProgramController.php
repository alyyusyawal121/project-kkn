<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Category;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::with('category')->get();
        return view('programs.index', compact('programs'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('programs.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|max:1000',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        // Handle images
        if ($request->hasFile('images')) {
            $data['images'] = $this->handleImages($request->file('images'));
        } else {
            $data['images'] = json_encode([]); // Ensure there's an empty array if no images
        }

        Program::create($data);
        return redirect()->route('programs.index')->with('success', 'Program created successfully.');
    }

    public function edit(Program $program)
    {
        $categories = Category::all();
        // Decode images to an array for easier handling in the view
        $program->images = json_decode($program->images, true);
        return view('programs.edit', compact('program', 'categories'));
    }

    public function update(Request $request, Program $program)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|max:1000',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        // Handle images
        if ($request->hasFile('images')) {
            $images = $this->handleImages($request->file('images'));
            $data['images'] = json_encode($images);
        } else {
            $data['images'] = $program->images; // Keep existing images if none are uploaded
        }

        $program->update($data);
        return redirect()->route('programs.index')->with('success', 'Program updated successfully.');
    }

    public function destroy(Program $program)
    {
        $program->delete();
        return redirect()->route('programs.index')->with('success', 'Program deleted successfully.');
    }

    // Helper method to handle image uploads
    private function handleImages($files)
    {
        $images = [];
        foreach ($files as $file) {
            $filename = time() . '-' . $file->getClientOriginalName();
            $file->storeAs('public/uploads', $filename);
            $images[] = 'storage/uploads/' . $filename; // Store the relative path
        }
        return $images;
    }
}
