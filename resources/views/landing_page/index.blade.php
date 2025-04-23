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

</head>

<body>
    <!-- Navbar -->
    @include('layouts.navbar')
    <!-- Carousel Gambar-->
    @include('components.carousel_banner', ['banners' => $banners])

    <!-- <div id="headerCarousel" class="carousel slide" data-bs-ride="carousel">
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
    </div> -->

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
                <div class="col-lg-6" data-aos="fade-right">
                    <h6 class="text-primary">Layanan Internet Broadband Super Cepat</h6>
                    <h2 class="fw-bold">Selamat datang di Iconnet</h2>
                    <p>Layanan Internet Broadband dengan jaringan full fiber optic. Dengan berbagai paket yang dapat sesuai dengan layanan kebutuhan internet dan multimedia. Sehingga anda bisa menikmati layanan internet PLN terbaik dari kami.</p>
                    <p>ICONNET merupakan metamorfosis atau Rebranding dari Stroomnet dengan produk layanan internet broadband full fiber optic yang diberikan oleh PLN ICON PLUS, salah satu Sub-Holding dari PT PLN (Persero).</p>
                    <a class="btn btn-primary mt-3" href="{{ route('tentang') }}">Info Lengkap →</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Keunggulan -->
    <div class="bg-light row gx-5 justify-content-center" data-aos="fade-down">
        <div class="col-lg-6">
            <div class="text-center my-5" data-aos="zoom-in">
                <h1 class="display-5 fw-bolder mb-2">KEUNGGULAN ICONNET</h1>
                <p class="lead text-black-50 mb-4">
                    Dengan pesatnya perkembangan teknologi mempengaruhi berbagai aspek kehidupan kita yang semakin bergantung pada Internet.
                    Kualitas dan kecepatan yang terus bertambah menjadi kebutuhan baik di rumah, kantor, dan banyak tempat lainnya membuat kami memberikan layanan terbaik untuk anda.
                </p>
            </div>
            <hr class="mt-4" style="border: 2px solid #007bff; width: 100%;" data-aos="fade-up" data-aos-delay="300">
        </div>
    </div>

    <!-- Feature -->
    <section class="bg-white py-5 border-bottom" id="features">
        <div class="container px-5 my-5">
            <div class="row gx-4 gy-4">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-collection"></i>
                        </div>
                        <h2>Reliable</h2>
                        <p>ICONNET memiliki kecepatan internet yang tinggi dan stabil karena menggunakan jaringan Fiber.</p>
                        <a href="https://api.whatsapp.com/send?phone=628117381899" class="text-primary">Call to action <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-building"></i>
                        </div>
                        <h2>Affordable</h2>
                        <p>Koneksi ICONNET sangat stabil karena menggunakan jaringan fiber optic yang tercanggih.</p>
                        <a href="https://api.whatsapp.com/send?phone=628117381899" class="text-primary">Call to action <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-toggles2"></i>
                        </div>
                        <h2>Unlimited</h2>
                        <p>ICONNET saat ini mempunyai coverage area yang paling luas jangkauannya.</p>
                        <a href="https://api.whatsapp.com/send?phone=628117381899" class="text-primary">Call to action <i class="bi bi-arrow-right"></i></a>
                    </div>
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
            <!-- Promo Card -->
            @if($latestPromo)
            <div class="card mb-5 mb-xl-0 py-5 px-4">
                <div class="me-10">
                    <img src="{{ asset('storage/' . $latestPromo->gambar) }}"
                        class="img-fluid rounded mb-10 border-2 border-gray-300 shadow-lg"
                        alt="Promo {{ $latestPromo->judul }}">
                </div>
            </div>
            @else
            <p class="text-center text-gray-500">Belum ada promo tersedia saat ini.</p>
            @endif

            <!-- Tombol -->
            <div class="text-center mt-4">
                <a href="/promo" class="btn btn-outline-primary btn-daftar px-4 py-2">Promo Selengkapnya</a>
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
                <!-- Card 1 -->
                @foreach($pakets as $paket)
                <div class="col mb-4" data-aos="zoom-in" data-aos-delay="100">
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
                                <a href="https://api.whatsapp.com/send?phone=628117381899" class="btn btn-outline-primary btn-daftar">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </section>

    <!-- WHY -->
    <section class="bg-light py-5 border-bottom" id="why">
        <div class="container text-center my-5" data-aos="fade-up">
            <h2 class="fw-bold">Mengapa Memilih Iconnet</h2>
            <div class="row mt-4">
                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card-custom card h-100">
                        <div class="icon">
                            <img src="https://static.thenounproject.com/png/3574480-200.png" alt="Home Broadband">
                        </div>
                        <h5>Home Broadband</h5>
                        <p>Internet broadband menyediakan kecepatan internet yang jauh lebih tinggi dibandingkan teknologi akses internet lainnya.</p>
                    </div>
                </div>
                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card-custom card h-100">
                        <div class="icon">
                            <img src="assets/roket.png" alt="Koneksi Stabil">
                        </div>
                        <h5>Koneksi Stabil</h5>
                        <p>Koneksi broadband Iconnet lebih stabil dan minim gangguan, menjamin koneksi yang andal.</p>
                    </div>
                </div>
                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="300">
                    <div class="card-custom card h-100">
                        <div class="icon">
                            <img src="https://static.vecteezy.com/system/resources/previews/009/408/713/large_2x/computer-icon-transparent-free-png.png" alt="Multimedia">
                        </div>
                        <h5>Multimedia</h5>
                        <p>Iconnet mendukung streaming video berkualitas tinggi dan penggunaan data intensif lainnya.</p>
                    </div>
                </div>
                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="400">
                    <div class="card-custom card h-100">
                        <div class="icon">
                            <img src="assets/gembok.png" alt="Keamanan">
                        </div>
                        <h5>Keamanan</h5>
                        <p>Dengan enkripsi data, Iconnet melindungi informasi pribadi dan sensitif penggunanya.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PETA -->
    <section class="bg-white py-5 border-bottom" id="coverage">
        <div class="container my-5">
            <div class="row align-items-center">
                <!-- Kiri -->
                <div class="col-md-6" data-aos="fade-right">
                    <h5 class="text-primary">Internet Untuk Semua</h5>
                    <h2 class="fw-bold">Jangkauan Internet Wifi Iconnet</h2>
                    <p class="text-muted">
                        Bandar Lampung, Lampung Barat, Lampung Selatan, Lampung Tengah, Lampung Timur, Lampung Utara, Metro, Pesawaran, Pringsewu, Tanggamus, Tulang Bawang
                    </p>
                    <a href="/jangkauan" class="btn btn-primary px-4 py-2">Selengkapnya</a>
                </div>
                <!-- Kanan (Peta) -->
                <div class="col-md-6 text-center">
                    <img src="/assets/lampung.png" alt="Jangkauan Iconnet" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials section -->
    <section class="bg-light py-5 border-bottom">
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h2 class="fw-bolder">TESTIMONI</h2>
            <p class="lead mb-0">Apa kata mereka tentang Iconnet</p>
        </div>

        <!-- Wrapper untuk testimonial + tombol -->
        <div class="position-relative">
            <!-- Tombol Prev -->
            <button class="btn btn-outline-primary position-absolute start-0 top-50 translate-middle-y z-3" style="margin-left: -1rem; height: 3rem; width: 3rem;" onclick="scrollTestimonials(-1)">
                <i class="bi bi-chevron-left fs-4"></i>
            </button>

            <!-- Container Testimoni -->
            <div class="px-5">
                <div class="d-flex overflow-auto pb-3 align-items-center" id="testimonialContainer" style="scroll-behavior: smooth;">
                    @php
                    $testimonials = [
                        
                        ['pesan' => 'Iconnet harganya relatif murah dan terjangkau', 'nama' => 'Murni', 'profesi' => 'Carik Sindumartani'],
                        ['pesan' => 'Internet Iconnet stabil dan cocok untuk kerja remote', 'nama' => 'Rian', 'profesi' => 'Freelancer'],
                        ['pesan' => 'Pelayanan cepat dan ramah, recommended!', 'nama' => 'Ayu', 'profesi' => 'Mahasiswa'],
                        
                        ['pesan' => 'Iconnet harganya relatif murah dan terjangkau', 'nama' => 'Yosa', 'profesi' => 'Mahasiswa'],
                        ['pesan' => 'Internet Iconnet stabil dan cocok untuk kerja remote', 'nama' => 'Anton', 'profesi' => 'Freelancer'],
                        ['pesan' => 'Pelayanan cepat dan ramah, recommended!', 'nama' => 'Dila', 'profesi' => 'Mahasiswa'],
                    ];
                    @endphp

                    @foreach($testimonials as $t)
                    <div class="card shadow-sm border-0 me-3" style="min-width: 300px;" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <i class="bi bi-chat-right-quote-fill text-primary fs-1"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-1 fst-italic">"{{ $t['pesan'] }}"</p>
                                    <div class="small text-muted">- {{ $t['nama'] }}, {{ $t['profesi'] }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Tombol Next -->
            <button class="btn btn-outline-primary position-absolute end-0 top-50 translate-middle-y z-3" style="margin-right: -1rem; height: 3rem; width: 3rem;" onclick="scrollTestimonials(1)">
                <i class="bi bi-chevron-right fs-4"></i>
            </button>
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
    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });
    </script>
    <script>
        function scrollTestimonials(direction) {
            const container = document.getElementById('testimonialContainer');
            const scrollAmount = 320; // Lebih besar dari min-width card agar 1 per klik
            container.scrollBy({
                left: direction * scrollAmount,
                behavior: 'smooth'
            });
        }
    </script>
@unless(request()->is('admin*'))
<script>
    document.addEventListener('DOMContentLoaded', function() {
        fetch('/track-visit', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                page: window.location.pathname,
                screen_width: window.screen.width,
                referrer: document.referrer
            })
        });
    });
</script>
@endunless
</body>

</html>