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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-800">
    @include('layouts.navbar')

    <section class="py-5 bg-light border-bottom">
        <div class="container px-5">
            <div class="row align-items-center g-5">

                <!-- Bagian Gambar -->
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="d-flex flex-lg-row flex-column align-items-center justify-content-center gap-3">

                        <!-- Gambar 1 -->
                        <div class="flex-shrink-0" data-aos="zoom-in" data-aos-delay="100">
                            <img src="assets/ketut.jpg"
                                class="img-fluid rounded-4 shadow-sm hover-shadow mb-3"
                                alt="Gambar 1" style="max-height: 400px;">
                        </div>

                        <!-- Gambar 2 dan 3 -->
                        <div class="d-flex flex-column gap-3">
                            <img src="assets/pavel.jpg"
                                class="img-fluid rounded-4 shadow-sm hover-shadow"
                                alt="Gambar 2" style="max-height: 190px;" data-aos="zoom-in" data-aos-delay="200">
                            <img src="assets/rizky.jpg"
                                class="img-fluid rounded-4 shadow-sm hover-shadow"
                                alt="Gambar 3" style="max-height: 190px;" data-aos="zoom-in" data-aos-delay="300">
                        </div>
                    </div>
                </div>

                <!-- Bagian Konten -->
                <div class="col-lg-6" data-aos="fade-left">
                    <h6 class="text-primary fw-semibold mb-2 text-uppercase small" data-aos="fade-up" data-aos-delay="100">Layanan Internet Broadband Super Cepat</h6>
                    <h2 class="fw-bold display-6 mb-4" data-aos="fade-up" data-aos-delay="200">Selamat Datang di ICONNET</h2>

                    <p class="text-muted fs-6" data-aos="fade-up" data-aos-delay="300">
                        ICONNET adalah layanan Internet Broadband berbasis jaringan <strong>full fiber optic</strong> yang dirancang untuk memberikan pengalaman digital terbaik.
                    </p>
                    <p class="text-muted fs-6" data-aos="fade-up" data-aos-delay="400">
                        Layanan ini merupakan hasil rebranding dari Stroomnet dan kini dikelola oleh <strong>PLN Icon Plus</strong>.
                    </p>
                    <p class="text-muted fs-6" data-aos="fade-up" data-aos-delay="500">
                        ICONNET berkomitmen menyediakan internet yang <strong>andal, cepat, dan terjangkau</strong>.
                    </p>

                    <ul class="list-unstyled text-muted fs-6" data-aos="fade-up" data-aos-delay="600">
                        <li>✔️ Jaringan <strong>fiber optic</strong> untuk koneksi internet stabil dan kecepatan tinggi.</li>
                        <li>✔️ Pilihan bandwidth: 10, 20, 35, 50, hingga 100 Mbps, sesuai kebutuhan.</li>
                        <li>✔️ Area layanan luas: Jabodetabek, Jawa, Bali, Sumatera, Kalimantan, dan Indonesia Timur.</li>
                        <li>✔️ Mendukung digitalisasi UMKM, pendidikan daring, dan aktivitas kerja jarak jauh.</li>
                        <li>✔️ Layanan pelanggan 24/7 dan instalasi profesional.</li>
                    </ul>
                </div>

                <!-- Informasi Tambahan -->
                <div class="mt-5" data-aos="fade-up" data-aos-delay="100">
                    <h5 class="fw-bold mb-3">Tentang ICONNET</h5>
                    <p class="text-muted fs-6">
                        ICONNET adalah layanan internet broadband dari <strong>PLN Icon Plus</strong>.
                    </p>

                    <h6 class="fw-semibold mt-4">Keunggulan ICONNET:</h6>
                    <ul class="text-muted fs-6" data-aos="fade-up" data-aos-delay="200">
                        <li><strong>Keandalan Tinggi:</strong> Stabil di berbagai kondisi cuaca.</li>
                        <li><strong>Harga Terjangkau:</strong> Paket layanan fleksibel.</li>
                        <li><strong>Tanpa Batasan Kuota:</strong> Internet unlimited.</li>
                        <li><strong>Dukungan Teknologi:</strong> Terintegrasi dengan ekosistem digital PLN.</li>
                    </ul>

                    <h6 class="fw-semibold mt-4">Paket Layanan:</h6>
                    <ul class="text-muted fs-6" data-aos="fade-up" data-aos-delay="300">
                        <li><strong>ICONNET 10 Mbps</strong> – Cocok untuk browsing ringan.</li>
                        <li><strong>ICONNET 20 Mbps</strong> – Ideal untuk keluarga.</li>
                        <li><strong>ICONNET 35 Mbps</strong> – Untuk belajar & bekerja dari rumah.</li>
                        <li><strong>ICONNET 50 Mbps & 100 Mbps</strong> – Untuk gaming dan smart home.</li>
                    </ul>

                    <h6 class="fw-semibold mt-4">Cakupan Layanan:</h6>
                    <p class="text-muted fs-6" data-aos="fade-up" data-aos-delay="400">
                        ICONNET menjangkau lebih dari <strong>70% wilayah nasional</strong>.
                    </p>

                    <h6 class="fw-semibold mt-4">Penghargaan dan Prestasi:</h6>
                    <ul class="text-muted fs-6" data-aos="fade-up" data-aos-delay="500">
                        <li>🏆 <strong>Broadband Telecom Company of the Year</strong> - Asian Telecom Awards 2024.</li>
                        <li>🏅 Pertumbuhan tercepat di Indonesia.</li>
                        <li>📈 Mendukung program <strong>Smart City</strong>.</li>
                    </ul>

                    <h6 class="fw-semibold mt-4">Cara Daftar Layanan:</h6>
                    <p class="text-muted fs-6" data-aos="fade-up" data-aos-delay="600">
                        Daftar melalui <strong>PLN Mobile</strong> atau situs resmi
                        <a href="https://iconnet.id" target="_blank">www.iconnet.id</a>.
                    </p>

                    <p class="text-muted fs-6 mt-4" data-aos="fade-up" data-aos-delay="700">
                        ICONNET akan terus mendukung konektivitas digital untuk masa depan Indonesia yang lebih cerdas dan terhubung.
                    </p>
                </div>
            </div>
        </div>
    </section>
<section class="py-5 px-4 bg-light">
    <style>
        /* Typography */
        .sub-heading {
            text-align: center;
            font-size: 1.1rem;
            font-weight: 600;
            color: #555;
            margin-bottom: 0.5rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .main-heading {
            text-align: center;
            font-size: 2rem;
            font-weight: 700;
            color: #222;
            margin-bottom: 2rem;
        }

        /* Timeline Container */
        .timeline {
            position: relative;
            max-width: 900px;
            margin: auto;
            padding: 20px 0;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 4px;
            background-color: #ccc;
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -2px;
            z-index: 0;
        }

        .timeline-item {
            padding: 20px 40px;
            position: relative;
            width: 50%;
            box-sizing: border-box;
            z-index: 1;
        }

        .timeline-item.left {
            left: 0;
            text-align: right;
        }

        .timeline-item.right {
            left: 50%;
        }

        .timeline-content {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            position: relative;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
        }

        .timeline-content h3 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .timeline-content p {
            font-size: 1rem;
            color: #555;
            line-height: 1.5;
        }

        .timeline-date {
            position: absolute;
            top: 15px;
            width: 100px;
            font-weight: bold;
            font-size: 2rem;
            color: #063970;
        }

        .timeline-item.left .timeline-date {
            right: -140px;
            text-align: right;
        }

        .timeline-item.right .timeline-date {
            left: -140px;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            width: 18px;
            height: 18px;
            background-color: #009EA9;
            border-radius: 50%;
            top: 25px;
            z-index: 1;
            border: 3px solid white; /* ✅ Border putih */
        }

        .timeline-item.left::before {
            right: -8px;
        }

        .timeline-item.right::before {
            left: -8px;
        }

        /* Responsive */
        @media screen and (max-width: 768px) {
            .timeline::after {
                left: 20px;
            }

            .timeline-item {
                width: 100%;
                padding-left: 60px;
                padding-right: 25px;
                margin-bottom: 30px;
            }

            .timeline-item.left,
            .timeline-item.right {
                left: 0;
                text-align: left;
            }

            .timeline-item.left .timeline-date,
            .timeline-item.right .timeline-date {
                left: 0;
                top: -30px;
                text-align: left;
            }

            .timeline-item.left::before,
            .timeline-item.right::before {
                left: 0;
            }
        }
    </style>

    <div class="timeline-section">
        <p class="sub-heading">Our Story</p>
        <h2 class="main-heading">Sejarah Iconnet</h2>

        <div class="timeline">
            <div class="timeline-item left" data-aos="fade-right">
                <div class="timeline-date">2000</div>
                <div class="timeline-content card">
                    <h3>Established</h3>
                    <p><strong>PT Indonesia Comnets Plus</strong> berdiri.</p>
                </div>
            </div>

            <div class="timeline-item right" data-aos="fade-left">
                <div class="timeline-date">2005</div>
                <div class="timeline-content card">
                    <h3>Izin</h3>
                    <p>Memperoleh izin prinsip Internet Telephony untuk keperluan publik.</p>
                </div>
            </div>

            <div class="timeline-item left" data-aos="fade-right">
                <div class="timeline-date">2007</div>
                <div class="timeline-content card">
                    <h3>Penyelenggara Jasa</h3>
                    <p><strong>PT Indonesia Comnets Plus</strong> memperoleh izin prinsip Penyelenggara Jasa Interkoneksi Internet (NAP) dan penyelenggara Jasa Internet Telepon Keperluan Publik.</p>
                </div>
            </div>

            <div class="timeline-item right" data-aos="fade-left">
                <div class="timeline-date">2020</div>
                <div class="timeline-content card">
                    <h3>Lisensi</h3>
                    <p>PLN Icon Plus memiliki lisensi Jasa Telekomunikasi Layanan Call Center dan launching aplikasi layanan pelanggan New PLN Mobile.</p>
                </div>
            </div>

            <div class="timeline-item left" data-aos="fade-right">
                <div class="timeline-date">2021</div>
                <div class="timeline-content card">
                    <h3>Established</h3>
                    <p><strong>PT Indonesia Comnets Plus</strong> (berbisnis dengan nama PLN Icon Plus) adalah anak usaha PLN yang bergerak di bidang teknologi informasi dan komunikasi.</p>
                </div>
            </div>

            <div class="timeline-item right" data-aos="fade-left">
                <div class="timeline-date">2022</div>
                <div class="timeline-content card">
                    <h3>Berkembang</h3>
                    <p>Iconnet terus melebarkan sayap dan mengembangkan internet broadband di beberapa kota.</p>
                </div>
            </div>

            <div class="timeline-item left" data-aos="fade-right">
                <div class="timeline-date">2023</div>
                <div class="timeline-content card">
                    <h3>Menjangkau Wilayah Pelosok</h3>
                    <p>Iconnet kini hadir hampir di tiap kota dan kabupaten di pulau Jawa, Sumatera, dan Kalimantan serta menjangkau wilayah pelosok.</p>
                </div>
            </div>

            <div class="timeline-item right" data-aos="fade-left">
                <div class="timeline-date">2024</div>
                <div class="timeline-content card">
                    <h3>Transformasi Digital</h3>
                    <p>Iconnet meningkatkan kualitas layanan melalui digitalisasi sistem, termasuk aplikasi mobile untuk pelanggan dan integrasi layanan PLN dalam satu platform.</p>
                </div>
            </div>

            <div class="timeline-item left" data-aos="fade-right">
                <div class="timeline-date">2025</div>
                <div class="timeline-content card">
                    <h3>Ekspansi Nasional</h3>
                    <p>Iconnet memperluas jaringan hingga wilayah Indonesia Timur, serta memperkenalkan layanan bundling TV kabel dan smart home untuk mendukung gaya hidup digital masyarakat Indonesia.</p>
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800, // durasi animasi (ms)
            once: true // animasi hanya sekali
        });
    </script>
</body>

</html>