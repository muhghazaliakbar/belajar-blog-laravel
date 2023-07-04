<nav class="bg-base-100 shadow-lg">
    <div class="navbar max-w-5xl mx-auto">
        <div class="flex-none">
            <a href="/" class="btn btn-ghost normal-case text-xl">Blog</a>
        </div>

        <div class="grow">
            <ul class="menu menu-horizontal px-1">
                @auth
                    <li><a href="{{ url('/artikel/create') }}">Tambah Artikel</a></li>
                @endauth
                <li><a href="{{ url('/artikel') }}">Artikel</a></li>
                <li><a href="{{ url('kategori') }}">Kategori</a></li>
            </ul>
        </div>

        <div class="flex-none">
            @if(auth()->check())
                <span>Halo, {{ auth()->user()->name }}</span>
            @else
                <a href="/login" class="btn btn-outline">Login</a>
            @endif
        </div>
    </div>
</nav>
