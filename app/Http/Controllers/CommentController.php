<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    // Method untuk menyimpan komentar
    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required|string',
        ]);

        Comment::create([
            'comment' => $request->comment,
        ]);

        return response()->json(['status' => 'success', 'message' => 'Comment added successfully.']);
    }

    // Method untuk mengambil semua komentar
    public function index()
    {
        $comments = Comment::orderBy('created_at', 'desc')->get();
        return view('dashboard', compact('comments'));
    }
    
    
}
