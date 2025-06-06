@php
    if (!request()->is('admin*')) {
        \App\Models\Visit::updateOrCreate([
            'page' => request()->path(),
            'visited_at' => now()->format('Y-m-d H:00:00')
        ], [
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent()
        ]);
    }
@endphp
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top border-bottom">
    <div class="container px-4 px-md-5">
        <!-- Logo dan Nama Brand -->
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="assets/logo.png" alt="Logo" width="120" class="me-2">
            <!-- <span class="fw-bold text-primary fs-5">ICONNET</span> -->
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse mt-2 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center gap-2">
                <li class="nav-item">
                    <a class="nav-link fw-semibold px-3 py-2 rounded {{ Request::is('/') ? 'active-nav' : '' }}" href="/">Beranda</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link fw-semibold px-3 py-2 rounded {{ Request::is('keunggulan') ? 'active-nav' : '' }}" href="/keunggulan">Keunggulan</a>
                </li> -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-semibold px-3 py-2 rounded {{ Request::is('promo') || Request::is('paket') ? 'active-nav' : '' }}" href="#" id="navbarDropdownProduk" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Produk
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="navbarDropdownProduk">
                        <li><a class="dropdown-item {{ Request::is('promo') ? 'fw-bold text-primary' : '' }}" href="/promo">Promo</a></li>
                        <li><a class="dropdown-item {{ Request::is('paket') ? 'fw-bold text-primary' : '' }}" href="/paket">Paket</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold px-3 py-2 rounded {{ Request::is('syarat') ? 'active-nav' : '' }}" href="/syarat">Syarat & Ketentuan</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-semibold px-3 py-2 rounded {{ Request::is('kontak') || Request::is('myicon') ? 'active-nav' : '' }}" href="#" id="navbarDropdownProduk" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Informasi
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="navbarDropdownProduk">
                        <li><a class="dropdown-item {{ Request::is('kontak') ? 'fw-bold text-primary' : '' }}" href="/kontak">Kontak</a></li>
                        <li><a class="dropdown-item {{ Request::is('myicon') ? 'fw-bold text-primary' : '' }}" href="/myicon">MyIcon+</a></li>
                    </ul>
                </li>
               
                {{-- Tombol Login dan Daftar --}}
                <li class="nav-item ms-3">
                    <a href="{{ route('login') }}" class="btn btn-outline-primary fw-semibold px-3 py-1">Login</a>
                </li>
                <!-- <li class="nav-item ms-2">
                    <a href="https://api.whatsapp.com/send?phone=628117381899" class="btn btn-primary fw-semibold px-3 py-1 text-white">Daftar</a>
                </li> -->
            </ul>
        </div>
    </div>
</nav>