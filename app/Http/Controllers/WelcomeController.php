<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class WelcomeController extends Controller
{
    /**
     * Kita bisa menggunakan method `__invoke()` jika dalam satu controller cuma menggunakan satu fungsi
     */
    public function __invoke()
    {
        return view('welcome');
    }
}
