@extends('template')

@section('title')
    Login
@endsection

@section('content')
    <h1 class="text-5xl text-center font-semibold">Login</h1>

    <form action="/login" method="POST" class="max-w-md mx-auto flex flex-col space-y-4 mt-10">
        @csrf

        {{-- Cek jika ada session yang dikirim dari controller dengan key `error` --}}
        @if(session()->has('error'))
            <div class="alert alert-error">
                {{-- Tampilkan session yang dikirim dari controller dengan key `error` --}}
                <span>{{ session()->get('error') }}</span>
            </div>
        @endif

        <input type="text" name="email" placeholder="Email" class="input input-bordered w-full text-center" />

        <input type="password" name="password" placeholder="Password" class="input input-bordered w-full text-center" />

        <button type="submit" class="btn btn-outline w-full">Login</button>
    </form>
@endsection
