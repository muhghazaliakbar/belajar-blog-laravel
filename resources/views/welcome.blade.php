@extends('template')

@section('title')
    Welcome Page
@endsection

@section('content')
    <div class="flex flex-col space-y-4">
        @if(auth()->check())
            <h1 class="text-2xl text-center">Halo, {{ auth()->user()->name }}</h1>
            <a href="{{ url('/logout') }}" class="btn btn-outline btn-sm">Logout</a>
        @endif

        <h1 class="text-4xl text-center font-semibold">Selamat datang di pembelajaran blog</h1>
    </div>
@endsection
