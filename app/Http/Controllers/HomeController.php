<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
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
