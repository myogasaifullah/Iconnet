<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm sticky-top">
    <div class="container px-5">
        <!-- Logo dan Nama Brand -->
        <a class="navbar-brand d-flex align-items-center" href="#!">
            <img src="https://iconnetjabar.com/wp-content/uploads/2023/09/cropped-Iconnet.png" alt="Logo" width="100" class="me-2">
            <span class="fw-bold text-primary"></span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link menu-link fw-bold {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link fw-bold {{ Request::is('keunggulan') ? 'active' : '' }}" href="/keunggulan">Keunggulan</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-bold {{ Request::is('promo') || Request::is('paket') ? 'active' : '' }}" href="#" id="navbarDropdownProduk" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Produk
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownProduk">
                        <li><a class="dropdown-item {{ Request::is('promo') ? 'fw-bold' : '' }}" href="/promo">Promo</a></li>
                        <li><a class="dropdown-item {{ Request::is('paket') ? 'fw-bold' : '' }}" href="/paket">Paket</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link fw-bold {{ Request::is('syarat') ? 'active' : '' }}" href="/syarat">Syarat & Ketentuan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link fw-bold {{ Request::is('kontak') ? 'active' : '' }}" href="/kontak">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>