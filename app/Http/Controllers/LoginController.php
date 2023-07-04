<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function login(Request $request)
    {
        /**
         * Fungsi `Auth::attempt` berguna untuk mengecek email dan password ke database user
         * sekaligus login di saat yang sama jika data email dan password benar.
         *
         * Dan akan mengembalikan nilai `true` jika cook. Jadi kita bisa menggunakannya di dalam logika `if`
         */
        if (Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')])) {
            /**
             * Jika user berhasil login, maka kembalikan ke kalaman dengan rute `/` yang ada di web.php
             * dengan menggunakan helper `redirect()`.
             */
            return redirect('/');
        }

        /**
         * Jika user tidak berhasil login, kembalikan ke halaman login dengan `redirect()`
         * dan buat pesan error sementara dengan menggunakan
         * helper `session()->flash('key_error', 'pesan_error')` yang akan ditampilkan di view.
         */
        session()->flash('error', 'Email atau password anda salah');

        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
