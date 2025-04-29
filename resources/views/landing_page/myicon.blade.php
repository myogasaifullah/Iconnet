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
    <style>
        .feature-text h2 {
            color: rgb(0, 128, 128);
            /* Tosca */
        }

        .feature-text b {
            color: rgb(0, 128, 128);
            /* Tosca untuk teks bold */
        }
    </style>

</head>

<body class="bg-gray-100 text-gray-800">
    @include('layouts.navbar')

    <main>
        <section class="py-5 bg-white">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <h1 class="display-4 fw-bold mb-4">Download Aplikasi <span class="text-primary">PLN Mobile</span></h1>
                        <p class="lead mb-4">Nikmati kemudahan layanan PLN hanya dalam satu genggaman. Mulai dari pembelian token, pembayaran listrik, pengaduan, hingga pengajuan pasang baru atau tambah daya.</h6>
                        <div class="d-flex flex-column flex-md-row">
                            <a class="btn btn-primary btn-lg me-md-3 mb-3 mb-md-0" href="https://play.google.com/store/apps/details?id=com.iconpln.apps.customerapp" target="_blank">
                                <i class="bi bi-google-play"></i> Google Play
                            </a>
                            <a class="btn btn-dark btn-lg" href="https://apps.apple.com/id/app/pln-mobile/id1546278038" target="_blank">
                                <i class="bi bi-apple"></i> App Store
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center mt-5 mt-lg-0">
                        <img class="img-fluid rounded" src="https://layanan.pln.co.id/_nuxt/img/img-new-section1.1dd0f97.png" alt="PLN Mobile" style="max-width: 80%;">
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 bg-white">
            <div class="container py-5">

                <!-- Title -->
                <div class="text-center feature-text mb-5">
                    <h2 class="section-title">#SemuaMakinMudah</h2>
                    <h1>Dengan Fitur Terbaik PLN Mobile</h1>
                    <h5>Tempat seluruh kebutuhan kelistrikan Anda menjadi lebih mudah dan cepat</h5>
                </div>

                <!-- Feature 1 -->
                <div class="row align-items-center feature-block">
                    <div class="col-md-6 text-center">
                        <img src="assets/12pro.png" alt="Kelistrikan">
                    </div>
                </div>
                <div class="row align-items-center feature-block">
                    <div class="col-md-6 text-center">
                        <img src="assets/15pro.png" alt="Kelistrikan">
                    </div>
                </div>

                 </div>
        </section>
    </main>

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
    <script>
        // Track current page visit
        fetch("{{ route('track.visit') }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                page: window.location.pathname
            })
        });
    </script>
</body>

</html>