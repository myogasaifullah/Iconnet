<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Aplikasi MyIcon+ dari PLN IconPlus - solusi layanan digital terintegrasi." />
    <meta name="author" content="PLN IconPlus" />
    <title>Iconnet</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

    <style>
        .feature-text h2 {
            color: rgb(0, 128, 128);
        }

        .feature-text b {
            color: rgb(0, 128, 128);
        }

        .section-title {
            color: #007b8a;
        }

        .btn {
            transition: transform 0.3s ease;
        }

        .btn:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-800">
    @include('layouts.navbar')

    <main>
        <!-- Hero Section -->
        <section class="py-5 bg-white">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6" data-aos="fade-right">
                        <h1 class="display-4 fw-bold mb-4">Download Aplikasi <span class="text-primary">MyIcon+</span></h1>
                        <p class="lead mb-4">Nikmati layanan digital dari PLN IconPlus dalam satu aplikasi. Monitoring layanan, pengajuan layanan baru, hingga notifikasi status kini semakin mudah.</p>
                        <div class="d-flex flex-column flex-md-row">
                            <a class="btn btn-primary btn-lg me-md-3 mb-3 mb-md-0" href="#" target="_blank">
                                <i class="bi bi-google-play"></i> Google Play
                            </a>
                            <a class="btn btn-dark btn-lg" href="#" target="_blank">
                                <i class="bi bi-apple"></i> App Store
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center mt-5 mt-lg-0" data-aos="fade-left">
                        <img class="img-fluid rounded" src="https://play-lh.googleusercontent.com/3J7h7oUyqSqkB-NTrBXiRmV-4LNlA18ayh3zxIt7mjFfbMpfteBRxm2W3kZim-ys9Fkf" alt="MyIcon+ App" style="max-width: 80%;">
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="py-5 bg-white">
            <div class="container py-5">
                <div class="text-center feature-text mb-5" data-aos="zoom-in">
                    <h2 class="section-title">#SemuaMakinTerkoneksi</h2>
                    <h1>Fitur Unggulan MyIcon+</h1>
                    <h5>Satu aplikasi untuk seluruh kebutuhan layanan internet dan digital dari Icon+</h5>
                </div>

                <!-- Feature 1 -->
                <div class="row align-items-center feature-block mb-5">
                    <div class="col-md-6 text-center" data-aos="fade-up-right">
                        <img src="assets/12pro.png" alt="Layanan MyIcon+" class="img-fluid">
                    </div>
                    <div class="col-md-6" data-aos="fade-up-left">
                        <div class="feature-text">
                            <h2>01. Layanan Digital</h2>
                            <h6>Kamu dapat mengakses <b>monitoring jaringan</b>, mengajukan <b>layanan baru</b>, dan melihat <b>status langganan</b> hanya lewat aplikasi MyIcon+.</h6>
                        </div>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="row align-items-center feature-block">
                    <div class="col-md-6 order-md-2 text-center" data-aos="fade-up-left">
                        <img src="assets/15pro.png" alt="Monitoring" class="img-fluid">
                    </div>
                    <div class="col-md-6 order-md-1" data-aos="fade-up-right">
                        <div class="feature-text">
                            <h2>02. Monitoring Real-time</h2>
                            <h6>Pantau performa jaringan dan layananmu secara <b>real-time</b> langsung dari smartphone.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('layouts.footer')

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });

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
