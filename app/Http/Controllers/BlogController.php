<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $artikel = Blog::latest()->get();

        return view('artikel.index', [
            'artikel' => $artikel,
        ]);
    }

    public function create()
    {
        return view('artikel.create');
    }

    public function store(Request $request)
    {
        /**
         * Buat artikel berdasarkan data yang diterima dari form request.
         */
        $artikel = Blog::create([
            'judul' => $request->get('judul'),
            'konten' => $request->get('konten'),
        ]);

        /**
         * Tampilkan halaman detail artikel.
         */
        return redirect("/artikel/$artikel->id");
    }

    public function show(string $id)
    {
        /**
         * `findOrFail` adalah fungsi untuk mencari berdasarkan ID.
         * Jika tidak ditemukan, akan menampilkan halaman 404.
         */
        $artikel = Blog::findOrFail($id);

        return view('artikel.show', [
            'artikel' => $artikel
        ]);
    }

    public function edit(string $id)
    {
        if (auth()->guest()) {
            abort(404);
        }

        /**
         * `findOrFail` adalah fungsi untuk mencari berdasarkan ID.
         * Jika tidak ditemukan, akan menampilkan halaman 404.
         */
        $artikel = Blog::findOrFail($id);

        return view('artikel.edit', [
            'artikel' => $artikel
        ]);
    }

    public function update(Request $request, string $id)
    {
        /**
         * Cek jika user yang mengakses adalah guest/tamu/belum login, tampilkan halaman 404
         */
        if (auth()->guest()) {
            abort(404);
        }

        /**
         * Seperti biasa, cari blog berdasarkan ID dan tampilkan 404 jika tidak ditemukan.
         */
        $artikel = Blog::findOrFail($id);

        /**
         * Update artikel berdasarkan data yang diterima dari form request
         */
        $artikel->update([
            'judul' => $request->judul,
            'konten' => $request->konten,
        ]);

        /**
         * Kemudian kembali ke halaman detail artikel
         */
        return redirect("/artikel/$artikel->id");
    }

    public function delete(string $id)
    {
        /**
         * Seperti biasa, cari blog berdasarkan ID dan tampilkan 404 jika tidak ditemukan.
         */
        $artikel = Blog::findOrFail($id);

        /**
         * Hapus artikel dengan menggunakan fungsi `delete()`
         */
        $artikel->delete();

        /**
         * Kemudia kembali ke halaman artikel
         */
        return redirect('/artikel');
    }
}
