<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/potensi', [HomeController::class, 'potensi'])->name('potensi');

Route::get('/about', function () {
    return view('about'); // Adjust as necessary
})->name('about');
Route::get('/blog', function () {
    return view('blog'); // Adjust as necessary
})->name('blog');
Route::get('/galeri', function () {
    return view('galeri'); // Adjust as necessary
})->name('galeri');
Route::get('/kegiatan', function () {
    return view('kegiatan'); // Adjust as necessary
})->name('kegiatan');
Route::get('/potensi', function () {
    return view('potensi'); // Adjust as necessary
})->name('potensi');
Route::get('/contact', function () {
    return view('contact'); // Adjust as necessary
})->name('contact');