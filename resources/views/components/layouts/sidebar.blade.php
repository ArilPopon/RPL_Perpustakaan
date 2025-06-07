<div>
    <!-- Sidebar -->
    <nav class="col-md-2 bg-dark sidebar">
        <div class="sidebar-sticky">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        <span data-feather="home"></span>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('member*') ? 'active' : '' }}"
                        href="{{ route('member') }}">
                        <span data-feather="users"></span>
                        Kelola Anggota
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('buku*') ? 'active' : '' }}" href="{{ route('buku') }}">
                        <span data-feather="book"></span>
                        Kelola Buku
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('pinjam*') ? 'active' : '' }}"
                        href="{{ route('pinjam') }}">
                        <span data-feather="file"></span>
                        Kelola Peminjaman
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('kembali*') ? 'active' : '' }}"
                        href="{{ route('kembali') }}">
                        <span data-feather="check-circle"></span>
                        Kelola Pengembalian
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('kategori*') ? 'active' : '' }}"
                        href="{{ route('kategori') }}">
                        <span data-feather="tag"></span>
                        Kelola Kategori
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('user*') ? 'active' : '' }}" href="{{ route('user') }}">
                        <span data-feather="user"></span>
                        Kelola Staf
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>