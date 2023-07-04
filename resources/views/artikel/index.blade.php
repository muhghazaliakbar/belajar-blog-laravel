@extends('template')

@section('title')
    Welcome Page
@endsection

@section('content')
    <h1 class="text-5xl font-bold">Artikel</h1>

    <div class="flex flex-col space-y-6 mt-10">
        @foreach($artikel as $artikelItem)
            @include('komponen.artikel-item', ['artikelItem' => $artikelItem])
        @endforeach
    </div>
@endsection
