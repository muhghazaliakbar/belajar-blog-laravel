<div class="card w-full mb-3">
    <div class="card-body">
        <h5 class="card-title">{{ $artikel->judul }}</h5>
        
        <p class="card-text">Jumlah like: {{ $artikel->jumlah_like }}</p>
        
        <p class="card-text">{{ $artikel->konten }}</p>
        
        <a href="#" class="btn btn-primary">Detail</a>
    </div>
</div>
