<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="{{ route('dashboard') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Banner</div>
                    <a class="nav-link" href="{{ route('banner.index') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Banner
                    </a>
                    <!-- <div class="sb-sidenav-menu-heading">Produk</div>
                    <a class="nav-link" href="{{ route('promo.index') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Promo
                    </a>
                    <a class="nav-link" href="{{ route('produk_paket.index') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Paket
                    </a> -->
                    <!-- Menu Produk -->
                    <div class="sb-sidenav-menu-heading">Produk</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProduk" aria-expanded="false" aria-controls="collapseProduk">
                        <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                        Produk
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseProduk" aria-labelledby="headingProduk" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ route('produk_paket.index') }}">Paket</a>
                            <a class="nav-link" href="{{ route('promo.index') }}">Promo</a>
                        </nav>
                    </div>
                    <!-- <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Pages
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                Authentication
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                    <a class="nav-link" href="{{ route('password') }}">Forgot Password</a>
                                </nav>
                            </div>
                        </nav>
                    </div>
                    <div class="sb-sidenav-menu-heading">Addons</div>
                    <a class="nav-link" href="{{ route('charts') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Charts
                    </a>
                    <a class="nav-link" href="{{ route('tables') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Tables
                    </a> -->
                    <div class="sb-sidenav-menu-heading">Users</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseUsers" aria-expanded="false" aria-controls="collapseVerifikasi">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Users
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseUsers" aria-labelledby="headingUsers" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ route('users') }}">Users</a>
                            <a class="nav-link" href="{{ route('verifikasi.index') }}">Verifikasi</a>
                        </nav>
                    </div>
                    <!-- <div class="sb-sidenav-menu-heading">Users</div>
                    <a class="nav-link" href="{{ route('users') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Users
                    </a> -->
                </div>
            </div>
            <div class="sb-sidenav-footer d-flex align-items-center justify-content-between p-2">
                <div class="d-flex align-items-center">
                    <img src="assets/favicon.png" alt="Profile Photo"
                        class="rounded-circle me-2" width="40" height="40">
                    <div>
                        <div class="small">Logged in as:</div>
                        Iconnet
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>