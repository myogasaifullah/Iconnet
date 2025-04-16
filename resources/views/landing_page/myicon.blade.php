<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Laporkan Gangguan Jaringan PLN IconPlus dengan Aplikasi MyIcon+" />
    <meta name="author" content="PLN IconPlus" />
    <title>MyIcon+ | PLN IconPlus</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
    <!-- Bootstrap icons-->
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        :root {
            --primary: #2C5F9E;
            --primary-light: #E1F0FF;
            --secondary: #FFC107;
            --accent: #4CAF50;
            --light: #F5F7FA;
            --dark: #263238;
            --gray: #6C757D;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--dark);
            background-color: var(--light);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
        }

        /* Flat Design Elements */
        .hero-section {
            background: var(--primary);
            color: white;
            padding: 4rem 0;
        }

        .section-title {
            color: var(--primary);
            font-weight: 700;
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
        }

        .section-title:after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 50px;
            height: 4px;
            background: var(--secondary);
        }

        .card-flat {
            border: none;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            background: white;
            margin-bottom: 1.5rem;
        }

        .card-flat:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.12);
        }

        .btn-flat {
            border-radius: 6px;
            font-weight: 600;
            padding: 0.75rem 1.5rem;
            border: none;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-primary-flat {
            background: var(--primary);
            color: white;
        }

        .btn-primary-flat:hover {
            background: #1E4B8B;
            color: white;
        }

        .btn-light-flat {
            background: white;
            color: var(--primary);
        }

        .btn-light-flat:hover {
            background: #f8f9fa;
        }

        .icon-box {
            width: 80px;
            height: 80px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2rem;
        }

        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--primary);
        }

        .poster-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 1.5rem;
            margin: 2rem 0;
        }

        .poster-card {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            background: white;
        }

        .poster-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.12);
        }

        .poster-img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .download-card {
            background: white;
            border-radius: 8px;
            padding: 2rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .alert-flat {
            border-radius: 8px;
            padding: 1rem;
            border-left: 4px solid var(--secondary);
            background: #FFF9E6;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .poster-grid {
                grid-template-columns: 1fr;
            }

            .hero-title {
                font-size: 1.8rem;
            }

            .icon-box {
                width: 60px;
                height: 60px;
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body>
    @include('layouts.navbar')

    <main>
        <!-- Hero Section -->
        <section class="hero-section py-5">
            <div class="container px-4 my-5 text-center">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h1 class="display-5 fw-bold mb-4">⚡ Mudah & Cepat! Laporkan Gangguan Jaringan PLN IconPlus dengan Aplikasi MyIcon+ ⚡</h1>
                        <p class="lead mb-4 text-white">Kini tidak perlu khawatir atau bingung lagi! Laporkan gangguan jaringan secara cepat dan praktis langsung dari ponsel Anda.</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                            <a href="#download" class="btn btn-primary btn-lg px-4 me-sm-3">Download Sekarang</a>
                            <a href="#posters" class="btn btn-light btn-lg px-4">Lihat Panduan</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content Section -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="text-center mb-5">
                            <h2 class="section-title">Halo, Sahabat PLN IconPlus!</h2>
                            <p class="lead text-muted">Apakah kamu pernah mengalami gangguan Jaringan Wifi Kantor atau masalah jaringan server? MyIcon+ solusinya!</p>
                        </div>

                        <!-- What is MyIcon+ Section -->
                        <div class="card-flat p-4 mb-5">
                            <div class="card-body text-center">
                                <div class="icon-box bg-primary text-white">
                                    <i class="bi bi-info-circle"></i>
                                </div>
                                <h3 class="h4 mb-3">💡 Apa Itu MyIcon+?</h3>
                                <p>MyIcon+ adalah aplikasi resmi dari PLN IconPlus yang memungkinkan kamu melaporkan gangguan jaringan atau masalah jaringan dengan mudah, langsung dari ponselmu.</p>
                            </div>
                        </div>

                        <!-- Features Section -->
                        <!-- Features Section -->
                        <h3 class="section-title">✨ Keunggulan MyIcon+</h3>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="card-flat h-100 p-4">
                                    <div class="card-body text-center">
                                        <div class="icon-box bg-success bg-opacity-10 text-success mb-3">
                                            <i class="bi bi-check-circle-fill fs-3"></i>
                                        </div>
                                        <h4 class="h5 mb-2">Lapor Gangguan dengan Mudah</h4>
                                        <p class="text-muted mb-0">Kirim laporan gangguan hanya dalam beberapa langkah.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-flat h-100 p-4">
                                    <div class="card-body text-center">
                                        <div class="icon-box bg-primary bg-opacity-10 text-primary mb-3">
                                            <i class="bi bi-graph-up fs-3"></i>
                                        </div>
                                        <h4 class="h5 mb-2">Pantau Status Laporan</h4>
                                        <p class="text-muted mb-0">Cek progres laporan secara real-time, tanpa harus menunggu lama.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-flat h-100 p-4">
                                    <div class="card-body text-center">
                                        <div class="icon-box bg-warning bg-opacity-10 text-warning mb-3">
                                            <i class="bi bi-megaphone fs-3"></i>
                                        </div>
                                        <h4 class="h5 mb-2">Informasi Terupdate</h4>
                                        <p class="text-muted mb-0">Dapatkan berita terbaru dan pengumuman langsung dari PLN IconPlus.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-flat h-100 p-4">
                                    <div class="card-body text-center">
                                        <div class="icon-box bg-danger bg-opacity-10 text-danger mb-3">
                                            <i class="bi bi-lightning-charge-fill fs-3"></i>
                                        </div>
                                        <h4 class="h5 mb-2">Layanan Cepat & Akurat</h4>
                                        <p class="text-muted mb-0">PLN IconPlus akan segera menangani gangguan yang kamu laporkan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Why Use Section -->
                        <h3 class="h4 mb-1 section-title my-5">💬 Mengapa Harus Pakai MyIcon+?</h3>
                        <div class="card-flat p-4 my-4 bg-primary">
                            <div class="card-body">
                                <p class="text-white">Dengan MyIcon+, kamu bisa mendapatkan respon cepat dari PLN IconPlus tanpa harus menghubungi call center atau mengunjungi kantor PLN IconPlus. Semuanya bisa dilakukan dari rumah, kapan saja dan di mana saja!</p>
                            </div>
                        </div>


                        <!-- Poster Collection -->
                        <div id="posters" class="my-5">
                            <h3 class="section-title">📌 Panduan Visual MyIcon+</h3>
                            <p class="text-muted">Berikut koleksi poster informasi tentang MyIcon+:</p>

                            <div class="poster-grid">
                                <div class="poster-card">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJ0vxv9A1hnWQWsNgRXlCz9zBZ9Wp2u3mM6g&s" alt="Tutorial MyIcon+" class="poster-img">
                                    <div class="p-4">
                                        <h5 class="fw-bold">Tutorial Penggunaan My ICON+</h5>
                                        <p class="text-muted small">TUTORIAL PENGGUNAAN MY ICON+ Pelanggan Korporat</p>
                                        <a href="https://drive.google.com/file/d/1JZsFfE-euBQrNlyYEMqhEJYD0L41zImE/view?usp=sharing" class="btn btn-sm btn-primary-flat">Download PDF</a>
                                    </div>
                                </div>
                                <div class="poster-card">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1OatUfTGOxwXvZL7VjSSq4dmfIxaR1KxhHA&s" alt="Flow Eskalasi" class="poster-img">
                                    <div class="p-4">
                                        <h5 class="fw-bold">Flow Eskalasi ganggaun</h5>
                                        <p class="text-muted small">FLOW ESKALASI GANGGUAN PELANGGAN</p>
                                        <a href="https://drive.google.com/file/d/1hmBY0mvztNDJwvme-Uvb-mAvInC4i1WS/view?usp=drive_link" class="btn btn-sm btn-primary-flat">Download PDF</a>
                                    </div>
                                </div>
                                <div class="poster-card">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShcl39wneaXUltqtT-ytVSpmW3qsz9hsgSHQ&s" alt="Basic Pengecekan" class="poster-img">
                                    <div class="p-4">
                                        <h5 class="fw-bold">Basic Pengecekan Service</h5>
                                        <p class="text-muted small">IPVPN , Metronet , Internet Corporate , IBBC , I-win</p>
                                        <a href="#" class="btn btn-sm btn-primary-flat">Download PDF</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Download Section -->
                        <div id="download" class="download-card my-5">
                            <h3 class="section-title text-center">🚀 Download MyIcon+ Sekarang!</h3>
                            <p class="text-center text-muted mb-4">Klik link berikut untuk download aplikasi:</p>

                            <div class="row g-4 text-center">
                                <div class="col-md-6">
                                    <div class="p-4">
                                        <i class="bi bi-phone text-primary" style="font-size: 3rem;"></i>
                                        <h4 class="h5 mt-3">Android</h4>
                                        <a href="https://play.google.com/store/apps/details?id=id.co.iconpln.icrm.customer&pcampaignid=web_share" class="btn btn-primary-flat mt-2" target="_blank">Download</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4">
                                        <i class="bi bi-phone text-primary" style="font-size: 3rem;"></i>
                                        <h4 class="h5 mt-3">IOS/iPhone</h4>
                                        <a href="https://apps.apple.com/id/app/myicon/id1662266337" class="btn btn-primary-flat mt-2" target="_blank">Download</a>
                                    </div>
                                </div>
                            </div>

                            <div class="alert-flat mt-4">
                                <p class="mb-0"><strong>Note:</strong> Bagi pelanggan yang sudah login menggunakan email mohon dibantu agar di isi Form berikut agar tim PLN IconPlus akan membuka akses nya: <a href="https://forms.gle/fnboeQ9fCw4E1xHr5" target="_blank" class="text-primary">https://forms.gle/fnboeQ9fCw4E1xHr5</a></p>
                            </div>

                            <div class="text-center mt-4">
                                <p class="fw-bold">Jangan biarkan gangguan Jaringan menghambat aktivitasmu. Laporkan dengan mudah melalui MyIcon+ dan rasakan kenyamanan layanan PLN IconPlus!</p>
                                <p class="text-muted">Terima kasih telah menggunakan layanan PLN IconPlus. 🌟</p>
                            </div>
                        </div>
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
</body>

</html>