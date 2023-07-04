<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        $artikel = Blog::latest()->get();

        return view('welcome', [
            'artikel' => $artikel,
        ]);
    }
}
