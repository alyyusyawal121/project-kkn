<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    // Method untuk menampilkan dashboard beserta data komentar
    public function index()
    {
        $comments = Comment::orderBy('created_at', 'desc')->get();
        return view('dashboard', compact('comments'));
    }


    public function store(Request $request)
    {
        Log::info('Data received:', ['comment' => $request->comment]);

        $request->validate([
            'comment' => 'required|string',
        ]);

        Comment::create([
            'comment' => $request->comment,
        ]);

        return redirect()->route('index')->with('success', 'Your comment has been sent. Thank you!');
    }
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

}
