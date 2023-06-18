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
    $semuaArtikel = App\Models\Blog::where('judul', 'judul blog 1')
        ->where('jumlah_like', 10)
        ->first();
    
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
