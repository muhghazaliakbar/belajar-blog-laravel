<div class="card w-full bg-base-100 shadow-xl border">
    <div class="card-body">
        <h2 class="card-title text-3xl">{{ $artikelItem->judul }}</h2>

        {{-- Tampilkan isi konten terbatas maksimal 200 karakter menggunakan fungsi `Str::limit()` --}}
        {{-- Sumber: https://laravel.com/docs/10.x/helpers#method-str-limit --}}
        <p>{{ \Illuminate\Support\Str::limit($artikelItem->konten, 200) }}</p>

        <div class="card-actions mt-4">
            <a href="{{ url("/artikel/$artikelItem->id") }}" class="btn btn-outline btn-sm">Baca lengkap</a>
        </div>
    </div>
</div>
