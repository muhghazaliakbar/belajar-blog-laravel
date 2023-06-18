@extends('template')

@section('title')
    Welcome Page
@endsection

@section('content')
<div class="container p-5">
    <!-- Ini untuk menampilkan data yang banyak -->
    @foreach($semuaArtikel as $artikel)
        <div class="card w-full mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $artikel->judul }}</h5>
                
                <p class="card-text">Jumlah like: {{ $artikel->jumlah_like }}</p>
                
                <p class="card-text">{{ $artikel->konten }}</p>
                
                <a href="#" class="btn btn-primary">Detail</a>
            </div>
        </div>
    @endforeach

    <!-- Ini untuk menampilkan 1 data -->
    <div class="card-body">
        <h5 class="card-title">{{ $semuaArtikel->judul }}</h5>
        
        <p class="card-text">Jumlah like: {{ $semuaArtikel->jumlah_like }}</p>
        
        <p class="card-text">{{ $semuaArtikel->konten }}</p>
        
        <a href="#" class="btn btn-primary">Detail</a>
    </div>
    
    
    <!-- Bisa juga menggunakan @include dengan mengirim data yang diterima dari router -->
    @include('blog-card', ['artikel' => $artikel])
</div>
@endsection
