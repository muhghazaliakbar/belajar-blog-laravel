@extends('template')

@section('title')
    {{ $artikel->judul }}
@endsection

@section('content')
    <h1 class="text-5xl font-bold">{{ $artikel->judul }}</h1>

    <article class="text-lg mt-10">
        <p>{{ $artikel->konten }}</p>
    </article>
@endsection
