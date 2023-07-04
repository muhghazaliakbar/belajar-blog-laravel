@extends('template')

@section('title')
    Welcome Page
@endsection

@section('content')
    <div class="flex flex-col space-y-6">
        @foreach($artikel as $artikelItem)
            @include('komponen.artikel-item', ['artikelItem' => $artikelItem])
        @endforeach
    </div>
@endsection
