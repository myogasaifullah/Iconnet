<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Iconnet</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>

<body>
    <!-- Navbar -->
    @include('layouts.navbar')
    <!-- Carousel Gambar-->
    <div id="headerCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://api.stroom.id/v1/file/asset/load/jpg/fonj7zzggz" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="https://api.stroom.id/v1/file/asset/load/png/dc5ic3iauj" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="https://api.stroom.id/v1/file/asset/load/png/nh83voulxh" class="d-block w-100" alt="Slide 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#headerCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#headerCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- lampung -->
    <section class="bg-white py-5 border-bottom">
        <div class="container px-5 my-5 px-5">
            <div class="row align-items-center">
                <!-- Bagian Gambar -->
                <div class="col-lg-6 d-flex">
                    <!-- Gambar 1 (Vertikal) -->
                    <div class="container mt-5 p-5 mb-4">
                        <div class="me-3">
                            <img src="https://iconnetjabar.com/wp-content/uploads/2023/09/pexels-ketut-subiyanto-4473892.jpg" class="img-fluid rounded mb-4" alt="Gambar 1">
                        </div>
                    </div>

                    <!-- Gambar 2 dan 3 (Vertikal atas-bawah) -->
                    <div>
                        <img src="https://iconnetjabar.com/wp-content/uploads/2023/09/pexels-pavel-danilyuk-8640288.jpg" class="img-fluid rounded mb-4" alt="Gambar 2">
                        <img src="https://iconnetjabar.com/wp-content/uploads/2023/09/rizki-yulian-jdqVf-HdF3Y-unsplash.jpg" class="img-fluid rounded" alt="Gambar 3">
                    </div>
                </div>

                <!-- Bagian Konten -->
                <div class="col-lg-6">
                    <h6 class="text-primary">Layanan Internet Broadband Super Cepat</h6>
                    <h2 class="fw-bold">Selamat datang di Iconnet</h2>
                    <p>Layanan Internet Broadband dengan jaringan full fiber optic. Dengan berbagai paket yang dapat sesuai dengan layanan kebutuhan internet dan multimedia. Sehingga anda bisa menikmati layanan internet PLN terbaik dari kami.</p>
                    <p>ICONNET merupakan metamorfosis atau Rebranding dari Stroomnet dengan produk layanan internet broadband full fiber optic yang diberikan oleh PLN ICON PLUS, salah satu Sub-Holding dari PT PLN (Persero).</p>
                    <a class="btn btn-primary mt-3" href="{{ route('tentang') }}">Info Lengkap →</a>
                </div>
            </div>
        </div>
    </section>
    <!-- keunggulan -->
    <div class="bg-light row gx-5 justify-content-center">
        <div class="col-lg-6">
            <div class="text-center my-5">
                <h1 class="display-5 fw-bolder mb-2">KEUNGGULAN ICONNET</h1>
                <p class="lead text-black-50 mb-4">Dengan pesatnya perkembangan teknologi mempengaruhi berbagai aspek kehidupan kita yang semakin bergantung pada Internet.
                    Kualitas dan kecepatan yang terus bertambah menjadi kebutuhan baik di rumah, kantor, dan banyak tempat lainnya membuat kami memberikan layanan terbaik untuk anda.
                </p>
                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                    <!-- <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Get Started</a>
                <a class="btn btn-outline-light btn-lg px-4" href="#!">Learn More</a> -->
                </div>
            </div>
            <!-- Garis horizontal warna biru -->
            <hr class="mt-4" style="border: 2px solid #007bff; width: 100%;">
        </div>
    </div>

    <!-- Features section-->
    <section class="bg-white py-5 border-bottom" id="features">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0 card">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                    <h2 class="h4 fw-bolder">Reliable</h2>
                    <p>ICONNET memiliki kecepatan internet yang tinggi dan stabil karena menggunakan jaringan Fiber.</p>
                    <a class="text-decoration-none" href="#!">
                        Call to action
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0 card">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                    <h2 class="h4 fw-bolder">Affordable</h2>
                    <p>Koneksi ICONNET sangat stabil karena menggunakan jaringan fiber optic yang tercanggih.</p>
                    <a class="text-decoration-none" href="#!">
                        Call to action
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="col-lg-4 card">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                    <h2 class="h4 fw-bolder">Unlimited</h2>
                    <p>ICONNET saat ini mempunyai coverage area yang paling luas jangkauannya.</p>
                    <a class="text-decoration-none" href="#!">
                        Call to action
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Promo -->
    <section id="promo" class="bg-light py-5 border-bottom">
        <div class="container mx-auto px-4">
            <div class="text-center mb-6">
                <h2 class="text-3xl font-bold mb-2">Promo Spesial!</h2>
                <p class="text-gray-600">Dapatkan produk terbaik kami dengan harga spesial.</p>
            </div>
            <!-- Bagian Gambar -->
            <div class="card mb-5 mb-xl-0">
                <div class="me-3 ">
                    <img src="https://iconnetjabar.com/wp-content/uploads/2024/01/4izqkzbnea.png" class="img-fluid rounded mb-4 border-2 border-grey-500 shadow-lg" alt="Gambar 1">
                </div>
            </div>
    </section>

    <!-- Pricing section-->
    <section class="bg-white py-5 border-bottom">
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h2 class="fw-bolder">PAKET ICONNET</h2>
                <p class="lead mb-0">Berbagai paket yang dapat sesuai dengan layanan kebutuhan internet dan multimedia anda.</p>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 gx-5 justify-content-center">
                <!-- Pricing card 1 -->
                <div class="col mb-4">
                    <div class="card h-100 border-primary">
                        <div class="card-body p-5">
                            <div class="mb-3">
                                <span class="display-7 fw-bold">Rp.259.000</span>
                                <span class="text-muted">/ bulan.</span>
                            </div>
                            <ul class="list-unstyled mb-4">
                                <li><i class="bi bi-check text-primary"></i> Up to 20 Mbps</li>
                                <li><i class="bi bi-check text-primary"></i> Download/Upload</li>
                                <li><i class="bi bi-check text-primary"></i> Unlimited Quota</li>
                            </ul>
                            <div class="mb-3">
                                <span class="text-muted">Full Fiber To Home.</span>
                            </div>
                            <div class="d-grid"><a class="btn btn-outline-primary" href="#!">Pesan</a></div>
                        </div>
                    </div>
                </div>

                <!-- Pricing card 2 -->
                <div class="col mb-4">
                    <div class="card h-100 border-primary">
                        <div class="card-body p-5">
                            <div class="mb-3">
                                <span class="display-7 fw-bold">Rp.269.000</span>
                                <span class="text-muted">/ bulan.</span>
                            </div>
                            <ul class="list-unstyled mb-4">
                                <li><i class="bi bi-check text-primary"></i> Up to 35 Mbps</li>
                                <li><i class="bi bi-check text-primary"></i> Download/Upload</li>
                                <li><i class="bi bi-check text-primary"></i> Unlimited Quota</li>
                            </ul>
                            <div class="mb-3">
                                <span class="text-muted">Full Fiber To Home.</span>
                            </div>
                            <div class="d-grid"><a class="btn btn-outline-primary" href="#!">Pesan</a></div>
                        </div>
                    </div>
                </div>

                <!-- Pricing card 3 -->
                <div class="col mb-4">
                    <div class="card h-100 border-primary">
                        <div class="card-body p-5">
                            <div class="mb-3">
                                <span class="display-7 fw-bold">Rp.319.000</span>
                                <span class="text-muted">/ bulan.</span>
                            </div>
                            <ul class="list-unstyled mb-4">
                                <li><i class="bi bi-check text-primary"></i> Up to 50 Mbps</li>
                                <li><i class="bi bi-check text-primary"></i> Download/Upload</li>
                                <li><i class="bi bi-check text-primary"></i> Unlimited Quota</li>
                            </ul>
                            <div class="mb-3">
                                <span class="text-muted">Full Fiber To Home.</span>
                            </div>
                            <div class="d-grid"><a class="btn btn-outline-primary" href="#!">Pesan</a></div>
                        </div>
                    </div>
                </div>

                <!-- Pricing card 4 -->
                <div class="col mb-4">
                    <div class="card h-100 border-primary">
                        <div class="card-body p-5">
                            <div class="mb-3">
                                <span class="display-7 fw-bold">Rp.499.000</span>
                                <span class="text-muted">/ bulan.</span>
                            </div>
                            <ul class="list-unstyled mb-4">
                                <li><i class="bi bi-check text-primary"></i> Up to 100 Mbps</li>
                                <li><i class="bi bi-check text-primary"></i> Download/Upload</li>
                                <li><i class="bi bi-check text-primary"></i> Unlimited Quota</li>
                            </ul>
                            <div class="mb-3">
                                <span class="text-muted">Full Fiber To Home.</span>
                            </div>
                            <div class="d-grid"><a class="btn btn-outline-primary" href="#!">Pesan</a></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- why -->
    <section class="bg-light  py-5 border-bottom">
        <div class="container text-center my-5">
            <h2 class="fw-bold">Mengapa Memilih Iconnet</h2>
            <div class="row mt-4">
                <div class="col-md-3">
                    <div class="card-custom card">
                        <div class="icon"><img src="https://static.thenounproject.com/png/3574480-200.png" alt="Home Broadband"></div>
                        <h5>Home Broadband</h5>
                        <p>Internet broadband menyediakan kecepatan internet yang jauh lebih tinggi dibandingkan dengan teknologi akses internet lainnya.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-custom card">
                        <div class="icon"><img src="assets/roket.png" alt="Koneksi Stabil"></div>
                        <h5>Koneksi Stabil</h5>
                        <p>Koneksi broadband Iconnet cenderung lebih stabil dan dapat diandalkan serta meminimalkan gangguan dan pemutusan koneksi yang ada.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-custom card">
                        <div class="icon"><img src="https://static.vecteezy.com/system/resources/previews/009/408/713/large_2x/computer-icon-transparent-free-png.png" alt="Multimedia"></div>
                        <h5>Multimedia</h5>
                        <p>Iconnet memiliki kapasitas yang besar untuk mengakomodasi penggunaan data yang intensif, seperti streaming video berkualitas tinggi.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-custom card">
                        <div class="icon"><img src="assets/gembok.png" alt="Keamanan"></div>
                        <h5>Keamanan</h5>
                        <p>Internet broadband Iconnet menggunakan enkripsi data untuk melindungi informasi pribadi dan sensitif yang dikirimkan melalui jaringan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- peta -->
    <section class="bg-white  py-5 border-bottom">
        <div class="container my-5">
            <div class="row align-items-center">
                <!-- Bagian Kiri -->
                <div class="col-md-6">
                    <h5 class="text-primary">Internet Untuk Semua</h5>
                    <h2 class="fw-bold">Jangkauan Internet Wifi Iconnet</h2>
                    <p class="text-muted">
                        Bandar Lampung,
                        Lampung Barat,
                        Lampung Selatan,
                        Lampung Tengah,
                        Lampung Timur,
                        Lampung Utara,
                        Metro,
                        Pesawaran,
                        Pringsewu,
                        Tanggamus,
                        Tulang Bawang
                    </p>
                    <a href="#" class="btn btn-primary px-4 py-2">Daftar Segera -></a>
                </div>

                <!-- Bagian Kanan (Peta) -->
                <div class="col-md-6 text-center">
                    <img src="/assets/lampung.png" alt="Jangkauan Iconnet" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials section-->
    <section class="bg-light py-5 border-bottom">
        <div class="container px-5 my-5 px-5">
            <div class="text-center mb-5">
                <h2 class="fw-bolder">TESTIMONI</h2>
                <p class="lead mb-0">Our customers love working with us</p>
            </div>

            <!-- Wrapper untuk membuat card menjadi horizontal -->
            <div class="d-flex flex-nowrap overflow-auto">
                <!-- Testimonial 1 -->
                <div class="card mb-4 me-3" style="min-width: 300px;">
                    <div class="card-body p-4">
                        <div class="d-flex">
                            <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                            <div class="ms-4">
                                <p class="mb-1">Iconnet menjawab kebutuhan internet untuk bisnis saya</p>
                                <div class="small text-muted">- Wiyadi, Wirausahawan</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="card mb-4 me-3" style="min-width: 300px;">
                    <div class="card-body p-4">
                        <div class="d-flex">
                            <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                            <div class="ms-4">
                                <p class="mb-1">Iconnet harganya relatif murah dan terjangkau</p>
                                <div class="small text-muted">- Murni, Carik Sindumartani</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="card mb-4 me-3" style="min-width: 300px;">
                    <div class="card-body p-4">
                        <div class="d-flex">
                            <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                            <div class="ms-4">
                                <p class="mb-1">Iconnet menjawab kebutuhan internet untuk bisnis saya</p>
                                <div class="small text-muted">- Wiyadi, Wirausahawan</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 me-3" style="min-width: 300px;">
                    <div class="card-body p-4">
                        <div class="d-flex">
                            <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                            <div class="ms-4">
                                <p class="mb-1">Iconnet menjawab kebutuhan internet untuk bisnis saya</p>
                                <div class="small text-muted">- Wiyadi, Wirausahawan</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="card mb-4 me-3" style="min-width: 300px;">
                    <div class="card-body p-4">
                        <div class="d-flex">
                            <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                            <div class="ms-4">
                                <p class="mb-1">Iconnet harganya relatif murah dan terjangkau</p>
                                <div class="small text-muted">- Murni, Carik Sindumartani</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="card mb-4 me-3" style="min-width: 300px;">
                    <div class="card-body p-4">
                        <div class="d-flex">
                            <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                            <div class="ms-4">
                                <p class="mb-1">Iconnet menjawab kebutuhan internet untuk bisnis saya</p>
                                <div class="small text-muted">- Wiyadi, Wirausahawan</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('layouts.footer')


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>

</html>