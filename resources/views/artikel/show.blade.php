@extends('template')

@section('title')
    {{ $artikel->judul }}
@endsection

@section('content')
    <h1 class="text-5xl font-bold">{{ $artikel->judul }}</h1>

    <div class="space-y-6 mt-10">
        @auth
            <a href="{{ url("/artikel/$artikel->id/edit") }}" class="btn btn-outline btn-sm">Edit</a>
            <a href="{{ url("/artikel/$artikel->id/delete") }}" class="btn btn-outline btn-error btn-sm">Hapus</a>
        @endauth

        <article class="text-lg">
            <p>{{ $artikel->konten }}</p>
        </article>
    </div>
@endsection
