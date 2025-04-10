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

<body class="bg-gray-100 text-gray-800">
    <!-- Navbar -->
    @include('layouts.navbar')

    <section class="py-5 border-bottom">
        <div class="container mt-5">
            <div class="card p-5 mb-4">
                <div class="container px-5 my-5 px-5">
                    <div class="row align-items-center">
                        <!-- Bagian Gambar -->
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
                                <div class="text-left p-4 bg-white rounded-3 shadow">
                                    <h2 class="fw-bold text-center mb-4">Keunggulan Iconnet</h2>
                                    <ul class="list-unstyled">
                                        <li class="mb-3"><i class="bi bi-check-circle text-primary me-2"></i> <strong>Kecepatan tinggi:</strong> Jaringan fiber optic yang canggih.</li>
                                        <li class="mb-3"><i class="bi bi-check-circle text-primary me-2"></i> <strong>Koneksi stabil:</strong> Dapat diandalkan kapan saja.</li>
                                        <li class="mb-3"><i class="bi bi-check-circle text-primary me-2"></i> <strong>Kapasitas besar:</strong> Cocok untuk streaming dan multimedia.</li>
                                        <li class="mb-3"><i class="bi bi-check-circle text-primary me-2"></i> <strong>Keamanan:</strong> Enkripsi data tingkat tinggi.</li>
                                        <li class="mb-3"><i class="bi bi-check-circle text-primary me-2"></i> <strong>Terjangkau:</strong> Harga yang bersahabat.</li>
                                        <li class="mb-3"><i class="bi bi-check-circle text-primary me-2"></i> <strong>Cakupan luas:</strong> Menjangkau berbagai wilayah Indonesia.</li>
                                        <li class="mb-3"><i class="bi bi-check-circle text-primary me-2"></i> <strong>Akses dual layanan:</strong> Internet dan listrik dalam satu aplikasi.</li>
                                    </ul>
                                </div>

                                <!-- Garis horizontal warna biru -->
                                <hr class="mt-4" style="border: 2px solid #007bff; width: 100%;">
                            </div>
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