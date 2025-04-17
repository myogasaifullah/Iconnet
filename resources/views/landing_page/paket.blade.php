<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Iconnet</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
    <!-- Bootstrap icons-->
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>

<body class="bg-gray-100 text-gray-800">
    @include('layouts.navbar')

    <section class="bg-light py-5 border-bottom">
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h6 class="text-primary">Layanan Internet Broadband Super Cepat</h6>
                <h2 class="fw-bolder">Paket Internet Broadband Iconnet
                </h2>
                <p class="lead mb-0">ICONNET adalah penyedia layanan terkemuka dalam solusi konektivitas dan jaringan, menawarkan beragam produk dan layanan berkualitas tinggi untuk memenuhi kebutuhan komunikasi dan konektivitas bisnis Anda.</p>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 gx-5 justify-content-center">
                <!-- Card 1 -->
                @foreach($pakets as $paket)
                <div class="col mb-4">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <h2>{{ $paket->kecepatan }}</h2>
                            <h1>{{ number_format($paket->harga, 0, ',', '.') }}</h1>
                            <p>Per bulan</p>
                        </div>
                        <div class="pricing-body">
                            <ul>
                                <li>Full Fiber To The Home</li>
                                <li>Speed Up To {{ $paket->kecepatan }}</li>
                                <li>Unlimited Quota</li>
                                <li>{{ $paket->deskripsi }}</li>
                                <li>Harga Belum Termasuk PPN 11%</li>
                            </ul>
                            <div class="text-center">
                                <a href="#" class="btn btn-outline-primary btn-daftar">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


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