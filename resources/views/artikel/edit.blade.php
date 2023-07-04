@extends('template')

@section('title')
    {{ 'Edit' . $artikel->judul }}
@endsection

@section('content')
    <h1 class="text-5xl font-bold">Edit artikel: {{ $artikel->judul }}</h1>

    <form action="{{ url("/artikel/$artikel->id") }}" method="POST" class="text-lg mt-10 flex flex-col space-y-4">
        @csrf
        @method('PUT')

        <input type="text" name="judul" placeholder="Judul artikel" class="input input-bordered w-full border-black" value="{{ $artikel->judul }}" />

        <textarea name="konten" class="textarea textarea-bordered border-black" placeholder="Bio" rows="10">{{ $artikel->konten }}</textarea>

        <button type="submit" class="btn btn-outline">Perbarui</button>
    </form>
@endsection
