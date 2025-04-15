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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- Di bagian <head> -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body class="bg-white-100 text-gray-800">
    @include('layouts.navbar')
    <section class="bg-white py-1 border-bottom">
        <div class="container my-5">
            <div class="row align-items-center">
                <!-- Bagian Kiri (Peta) -->
                <div class="col-md-6 text-center mb-4 mb-md-0">
                    <img src="/assets/lampung.png" alt="Jangkauan Iconnet" class="img-fluid">
                </div>

                <!-- Bagian Kanan (Teks dan Cakupan Area) -->
                <div class="col-md-6">
                    <h5 class="text-primary">Internet Untuk Semua</h5>
                    <h2 class="fw-bold">Jangkauan Internet Wifi Iconnet</h2>
                    <p class="text-muted">
                        ICONNET telah menjangkau seluruh area di Provinsi Lampung untuk kebutuhan internet masyarakat dengan harga yang terjangkau.
                        ICONNET merupakan jaringan Fiber Optic, menggunakan teknologi terkini sehingga dapat melayani Internet dan TV seamless pada kabel fiber optic yang sama tanpa menurunkan kecepatan dan kualitas.
                        <br><br>
                        Anda bisa mendapatkan akses internet dari Iconnet secara cepat dengan harga terjangkau yang telah mengcover seluruh kabupaten di Lampung.
                    </p>
                    <!-- Tombol jika diaktifkan -->
                    <!-- <a href="/jangkauan" class="btn btn-primary px-4 py-2 mt-3">Daftar Segera →</a> -->
                </div>
                <!-- Icon turun -->
                <div class="text-center mt-4">
                    <div class="flex justify-center items-center mb-3 space-x-4">
                        <div class="w-16 h-px bg-purple-300 border-dashed border-t-2"></div>
                        <div class="w-3 h-3" data-aos="fade-down" data-aos-duration="1000">
                            <img src="assets/turun.jpg" alt="Koneksi Stabil" class="w-full h-full object-contain">
                        </div>
                        <div class="w-16 h-px bg-purple-300 border-dashed border-t-2"></div>
                    </div>
                </div>

                <!-- Cakupan Area -->
                <div class="text-center mt-4">
                    <h2 class="text-2xl font-extrabold text-gray-900 mb-2">Cakupan Area Lampung</h2>

                    <!-- Icon Garis -->
                    <div class="flex justify-center items-center mb-3 space-x-4">
                        <div class="w-16 h-px bg-purple-300 border-dashed border-t-2"></div>
                        <div class="w-3 h-3">
                            <img src="assets/garis.png" alt="Koneksi Stabil" class="w-full h-full object-contain">
                        </div>
                        <div class="w-16 h-px bg-purple-300 border-dashed border-t-2"></div>
                    </div>

                    <!-- List Area -->
                    <p class="text-2xl text-gray-800 leading-relaxed font-black">
                        Bandar Lampung, Lampung Barat, Lampung Selatan, Lampung Tengah <br>
                        Lampung Timur, Lampung Utara, Metro, Pesawaran <br>
                        Pringsewu, Tanggamus, Tulang Bawang
                    </p>

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
    <script>
        AOS.init();
    </script>
</body>

</html>