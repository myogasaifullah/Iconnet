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
        color: rgb(0, 128, 128); /* Tosca */
    }

    .feature-text b {
        color: rgb(0, 128, 128); /* Tosca untuk teks bold */
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
                        <img src="https://layanan.pln.co.id/_nuxt/img/section2-img1.bafa863.png" alt="Kelistrikan">
                    </div>
                    <div class="col-md-6">
                        <div class="feature-text">
                            <h2>01. Kelistrikan</h2>
                            <h6>Kamu dapat melakukan <b>Pasang Baru</b> dan pilih variasi daya hingga pilihan prabayar atau pascabayar, kamu juga bisa coba fitur <b>Ubah Daya</b> untuk tambah daya biar listrik kamu gak jeglek, selain itu kalau kamu ada ngadain acara besar di rumah bisa mengajukan <b>Penyambungan Sementara</b> lewat PLN Mobile.</h6>
                        </div>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="row align-items-center feature-block flex-md-row-reverse">
                    <div class="col-md-6 text-center">
                        <img src="https://layanan.pln.co.id/_nuxt/img/section2-img2.d3114cc.png" alt="Internet">
                    </div>
                    <div class="col-md-6">
                        <div class="feature-text">
                            <h2>02. Internet</h2>
                            <h6>Dengan pesatnya perkembangan teknologi mempengaruhi berbagai aspek kehidupan kita yang semakin bergantung pada <b>Internet. Kualitas dan kecepatan</b> yang terus bertambah menjadi kebutuhan baik di rumah, kantor, dan banyak tempat lainnya membuat kami memberikan <b>layanan terbaik</b> untuk anda.
                            </h6>
                        </div>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="row align-items-center feature-block">
                    <div class="col-md-6 text-center">
                        <img src="https://layanan.pln.co.id/_nuxt/img/section2-img3.7420bb8.png" alt="Perbaikan">
                    </div>
                    <div class="col-md-6">
                        <div class="feature-text">
                            <h2>03. Perbaikan</h2>
                            <h6>Memudahkan pelanggan dalam memenuhi <b>kebutuhan instalasi</b> listrik di rumah, kantor, atau gedung ketika mengalami gangguan. Anda akan mendapatkan notifikasi work order dan dapat melakukan <b>Tracking status order.</b> Petugas PLN akan datang sesuai jadwal, melakukan pengecekan dan setelah selesai, Anda dapat melakukan approval pekerjaan dan lakukan pembayaran.
                            </h6>
                        </div>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="row align-items-center feature-block flex-md-row-reverse">
                    <div class="col-md-6 text-center">
                        <img src="https://layanan.pln.co.id/_nuxt/img/section2-img4.7f6e57f.png" alt="SPKLU">
                    </div>
                    <div class="col-md-6">
                        <div class="feature-text">
                            <h2>04. SPKLU</h2>
                            <h6>Kalau punya kendaraan listrik ngisi dayanya di mana ya? Di sini nih. Nama tempatnya SPKLU atau Stasiun Pengisian <b>Kendaraan Listrik</b> Umum. Nah untuk mengetahui lokasi isi daya kendaraan listrik kamu yuk, cek fitur <b>Charge.In</b> di PLN Mobile! Kamu akan menemukan lokasi SPKLU terdekat yang ada di sekitar lokasi kamu. <b>Download sekarang!</b></h6>
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