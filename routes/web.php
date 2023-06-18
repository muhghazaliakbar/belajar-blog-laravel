<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    // Cara menampilkan semua data di model `Blog`
    $semuaArtikel = App\Models\Blog::all();
    // Cara menampilkan data di model `Blog` berdasakan ID
    $blogBwedasarkanId = App\Models\Blog::find(1);
    // Cara menampilkan data di model `Blog` berdasakan kolom tertentu
    $blogBwedasarkanId = App\Models\Blog::where('judul', 'Judul blog 1')->first();
    // Cara menampilkan data di model `Blog` berdasakan kolom `jumlah_like` di bawah 10
    $blogBwedasarkanId = App\Models\Blog::where('jumlah_like', '<', 10)->get();

    
    return view('welcome', ['semuaArtikel' => $semuaArtikel]);
});

/**
 * Kalau di laravel selalu memanggilannya diawali dengan class `Route`
 */
Route::get('/profile', function () {
    // fungsi view laravel adalah menampilkan halaman dari direktori `resources/views`
    return view('profil');
});

Route::get('/blog', function () {
    return view('blog');
});

/**
 * <?php $name = 'Irvan' ?>
 */
Route::get('/blog/cara-membuat-blog', function () {
    $username = 'Muh Ghazali Akbar';
    $email = 'johndoe@example.com';

    return view('blog.cara-membuat-blog')
        ->with('username', $username)
        ->with('email', $email);
});

Route::get('/blog/cara-membuat-website', function () {
    return view('blog.cara-membuat-website');
});

/**
 * Route::get(parameter1, parametr2, ...)
 */
