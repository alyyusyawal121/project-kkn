<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class PublicPotensiController extends Controller
{
    public function index()
    {
        $programs = Program::all(); // Ambil semua program tanpa eager loading
        return view('potensi', compact('programs')); // Kirim ke view
    }
    

}
