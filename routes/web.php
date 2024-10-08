<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\BlogController;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/potensi', [HomeController::class, 'potensi'])->name('potensi');

Route::get('/about', function () {
    return view('about'); // Adjust as necessary
})->name('about');
Route::get('/blog', function () {
    return view('blog'); // Adjust as necessary
})->name('blog');
Route::get('/blog-detail', function () {
    return view('blog-detail'); // Adjust as necessary
})->name('blog-detail');
Route::get('/galeri', function () {
    return view('galeri'); // Adjust as necessary
})->name('galeri');
Route::get('/galeri-detail', function () {
    return view('galeri-detail'); // Adjust as necessary
})->name('galeri-detail');
Route::get('/kegiatan', function () {
    return view('kegiatan'); // Adjust as necessary
})->name('kegiatan');
Route::get('/potensi', function () {
    return view('potensi'); // Adjust as necessary
})->name('potensi');
Route::get('/potensi-detail', function () {
    return view('potensi-detail'); // Adjust as necessary
})->name('potensi-detail');
Route::get('/contact', function () {
    return view('contact'); // Adjust as necessary
})->name('contact');



Route::resource('blogs', BlogController::class);
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
