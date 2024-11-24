<?php
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PublicGalleryController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicPostController;
use App\Http\Controllers\PublicPotensiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// ADMIN ROUTE
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Group route untuk akses dashboard dengan middleware auth dan admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard'); // Menampilkan dashboard dan tabel komentar
});
Route::post('/dashboard/comments', [AdminController::class, 'store'])->name('comments.store'); // Menyimpan komentar dari form

Route::resource('galleries', GalleryController::class)->middleware(['auth', 'admin']);

Route::resource('programs', ProgramController::class)->middleware(['auth', 'admin']);

Route::resource('posts', PostController::class)->middleware(['auth', 'admin']);



// PUBLIC ROUTE
Route::get('/blog', [PublicPostController::class, 'index'])->name('blog');
Route::get('blog/{post}', [PublicPostController::class, 'show'])->name('blog-detail');
Route::get('/galeri', [PublicGalleryController::class, 'index'])->name('galeri');
Route::get('/program', [PublicPotensiController::class, 'index'])->name('potensi');


Route::get('/', [HomeController::class, 'index'])->name('index');


Route::get('/galeri-detail', function () {
    return view('galeri-detail'); // Adjust as necessary
})->name('galeri-detail');
Route::get('/kegiatan', function () {
    return view('kegiatan'); // Adjust as necessary
})->name('kegiatan');
// Route::get('/potensi', function () {
//     return view('potensi'); // Adjust as necessary
// })->name('potensi');
Route::get('/potensi-detail', function () {
    return view('potensi-detail'); // Adjust as necessary
})->name('potensi-detail');
Route::get('/contact', function () {
    return view('contact'); // Adjust as necessary
})->name('contact');

// Route::middleware('auth')->group(function () {
//     Route::get('/dashboard', function () {
//         if (!Auth::user()->hasVerifiedEmail()) {
//             Auth::logout();
//             return redirect()->route('login')->with('error', 'Please verify your email first.');
//         }

//         if (Auth::user()->email != 'admin@example.com') {
//             Auth::logout();
//             return redirect()->route('login')->with('error', 'Access denied');
//         }

//         return view('dashboard');
//     })->name('dashboard');
// });

// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

// Route::get('/programs', [ProgramController::class, 'index'])->name('potensi');

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/blog', function () {
//     return view('blog'); // Adjust as necessary
// })->name('blog');
// Route::get('/blog-detail', function () {
//     return view('blog-detail'); // Adjust as necessary
// })->name('blog-detail');
// Route::get('/galeri', function () {
//     return view('galeri'); // Adjust as necessary
// })->name('galeri');


Auth::routes(['verify' => false]);
// Auth::routes([])
require __DIR__.'/auth.php';
