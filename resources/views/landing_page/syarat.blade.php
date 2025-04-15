<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Syarat & Ketentuan - Iconnet</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        .accordion-button {
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .accordion-button:hover {
            background-color: #f0f0f0;
            color: #007bff;
        }

        .accordion-body {
            transition: all 0.4s ease-in-out;
        }

        .accordion-item {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            margin-bottom: 1rem;
        }
    </style>
</head>
<body class="bg-light text-dark">

    @include('layouts.navbar')

    <section class="container py-5" data-aos="fade-up" data-aos-duration="1000">
        <div class="text-center mb-4" data-aos="zoom-in" data-aos-delay="200">
            <h2 class="fw-bold">Syarat & Ketentuan</h2>
            <p class="text-muted">Informasi penting terkait layanan Iconnet</p>
        </div>

        <div class="accordion" id="accordionTerms">
            <!-- Tab 1 -->
            <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Syarat Layanan IconNet
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                    <div class="accordion-body">
                        <ol class="ps-3">
                            <li>Syarat dan Ketentuan berikut berlaku untuk pengguna perseorangan (‘Pelanggan’) di layanan IconNet (‘Layanan’).</li>
                            <li>Layanan IconNet diberikan kepada Pelanggan sebagai layanan dengan teknologi kecepatan dan bandwidth “up to”.</li>
                            <li>Pelanggan wajib membayar setiap bulan untuk memperpanjang masa aktif layanan.</li>
                            <li>Satu akun IconNet terdiri dari satu akses Broadband Internet.</li>
                            <li>Kualitas layanan tergantung pada perangkat yang digunakan pelanggan.</li>
                            <li>Layanan tanpa jaminan gangguan/ketersediaan, pelanggan berhak mendapatkan dukungan 24/7 dari contact center 150678.</li>
                            <li>Pelanggan memberi izin teknisi masuk wilayahnya untuk instalasi/pemeliharaan.</li>
                            <li>Tidak diperkenankan membagikan/menjual layanan kepada pihak ketiga.</li>
                            <li>Berlaku setelah pelanggan menyetujui formulir registrasi.</li>
                            <li>Pelanggan bertanggung jawab atas informasi yang diberikan.</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- Tab 2 -->
            <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Ketentuan Layanan IconNet
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                    <div class="accordion-body">
                        <ol class="ps-3">
                            <li>Lokasi layanan berada dalam cakupan FTTH ICON+.</li>
                            <li>Biaya instalasi Rp 250.000,-/titik.</li>
                            <li>Perangkat ONT mendukung WiFi (standard).</li>
                            <li>Minimal berlangganan 1 tahun.</li>
                            <li>Jika terminasi dan ingin berlangganan kembali, bebas biaya jika kabel masih layak.</li>
                            <li>Masa tenggang 1 hari setelah jatuh tempo. Lewat itu dianggap terminasi.</li>
                            <li>Garansi perangkat berlaku selama masa aktif, tidak mencakup kerusakan akibat kelalaian pelanggan.</li>
                            <li>Harga sudah termasuk PPN.</li>
                            <li>Biaya bulanan tidak dapat dikembalikan.</li>
                            <li>Biaya lain termasuk biaya mutasi, materai, denda, dsb. sesuai regulasi.</li>
                            <li>Penurunan bandwidth dapat diajukan setelah minimal 3 bulan aktif.</li>
                            <li>Pembatalan sebelum 1 tahun dikenakan biaya sesuai kontrak.</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- Tab 3 -->
            <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Informasi Umum
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                    <div class="accordion-body">
                        <ol class="ps-3">
                            <li>Ketentuan tunduk pada hukum Republik Indonesia.</li>
                            <li>Penyelesaian perselisihan diutamakan musyawarah, jika gagal melalui Pengadilan Negeri Jakarta Pusat.</li>
                            <li>Force majeure membebaskan ICON+ dari kewajiban sementara.</li>
                            <li>Syarat & ketentuan dapat berubah sewaktu-waktu dan diinformasikan di situs resmi.</li>
                            <li>Versi Bahasa Indonesia adalah versi resmi jika terjadi perbedaan interpretasi.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
