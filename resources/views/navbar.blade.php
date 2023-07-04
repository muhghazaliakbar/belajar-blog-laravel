<nav class="bg-base-100 shadow-lg">
    <div class="navbar max-w-5xl mx-auto">
        <div class="flex-1">
            <a class="btn btn-ghost normal-case text-xl">Blog</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
                <li><a href="{{ url('/artikel') }}">Artikel</a></li>
                <li><a href="{{ url('kategori') }}">Kategori</a></li>
            </ul>
        </div>
    </div>
</nav>
