@extends('template')

@section('title')
    Tambah Artikel
@endsection

@section('content')
    <h1 class="text-5xl font-bold">Tambah Artikel</h1>

    <form action="{{ url('/artikel') }}" method="POST" class="text-lg mt-10 flex flex-col space-y-4">
        @csrf

        <input type="text" name="judul" placeholder="Judul artikel" class="input input-bordered w-full border-black" />

        <textarea name="konten" class="textarea textarea-bordered border-black" placeholder="Bio" rows="10"></textarea>

        <button type="submit" class="btn btn-outline">Simpan</button>
    </form>
@endsection
