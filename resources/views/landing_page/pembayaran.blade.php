<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Kebijakan Privasi IconNet" />
    <meta name="author" content="IconNet" />
    <title>Iconnet</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Bootstrap core CSS -->
    <link href="css/styles.css" rel="stylesheet" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Custom Style -->
    <style>
        .list-group-item a:hover {
            color: #007bff;
            font-weight: bold;
        }

        .list-group-item .active-link {
            color: #007bff !important;
            font-weight: bold;
        }

        @media (min-width: 992px) {
            .sticky-sidebar {
                position: sticky;
                top: 120px;
            }
        }

        .content-section {
            display: none;
        }

        .content-section.active {
            display: block;
            animation: fadeIn 0.3s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Border untuk item aktif */
        .list-group-item.active-border {
            border-left: 4px solid #007bff;
            /* Border kiri berwarna biru */
            background-color: #f8f9fa;
            /* Optional, untuk menambah efek background */
        }

        .list-group-item a.active-link {
            color: #007bff !important;
            font-weight: bold;
        }

        .bg-privacy {
            background: linear-gradient(135deg,
                    rgb(0, 0, 128),
                    rgb(0, 0, 0)) !important;
        }
    </style>
</head>

<body class="bg-white text-dark">
    @include('layouts.navbar')
    <section class="hero-section py-5 bg-privacy" data-aos="fade-up" data-aos-duration="1200">
        <div class="container px-4 my-5 text-center">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8">
                    <h1 class="display-5 fw-bold mb-4 text-white ">METODE PEMBAYARAN</h1>
                    <p class="lead mb-4 text-white">ICONNET adalah sebuah internet provider baru yang dulunya bernama Stroomnet. ICONNET Bangkit Bersatu Untuk Indonesia, dengan menjunjung tinggi
                        nilai-nilai Nasionalisme, ICONNET berniat memberikan yang terbaik untuk masyarakat Indonesia</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white py-5 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="row row-cols-1 g-3">
                        <!-- Card: Mandiri -->
                        <div class="col">
                            <div class="card list-group-item-action active-border active-link" onclick="showSection('mandiri', this)" id="btn-mandiri" style="cursor: pointer;">
                                <div class="card-body">
                                    <h6 class="card-title mb-0">Mandiri Virtual Account</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Card: BRI -->
                        <div class="col">
                            <div class="card list-group-item-action" onclick="showSection('bri', this)" id="btn-bri" style="cursor: pointer;">
                                <div class="card-body">
                                    <h6 class="card-title mb-0">BRI Virtual Account</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Card: BNI -->
                        <div class="col">
                            <div class="card list-group-item-action" onclick="showSection('bni', this)" id="btn-bni" style="cursor: pointer;">
                                <div class="card-body">
                                    <h6 class="card-title mb-0">BNI Virtual Account</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Card: BCA -->
                        <div class="col">
                            <div class="card list-group-item-action" onclick="showSection('bca', this)" id="btn-bca" style="cursor: pointer;">
                                <div class="card-body">
                                    <h6 class="card-title mb-0">BCA Virtual Account</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Card: Alfamart -->
                        <div class="col">
                            <div class="card list-group-item-action" onclick="showSection('alfa', this)" id="btn-alfa" style="cursor: pointer;">
                                <div class="card-body">
                                    <h6 class="card-title mb-0">Alfamart</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Card: Indomaret -->
                        <div class="col">
                            <div class="card list-group-item-action" onclick="showSection('indo', this)" id="btn-indo" style="cursor: pointer;">
                                <div class="card-body">
                                    <h6 class="card-title mb-0">Indomaret</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Card: LinkAja -->
                        <div class="col">
                            <div class="card list-group-item-action" onclick="showSection('link', this)" id="btn-link" style="cursor: pointer;">
                                <div class="card-body">
                                    <h6 class="card-title mb-0">LinkAja</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Card: OVO -->
                        <div class="col">
                            <div class="card list-group-item-action" onclick="showSection('ovo', this)" id="btn-ovo" style="cursor: pointer;">
                                <div class="card-body">
                                    <h6 class="card-title mb-0">OVO</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Card: Gopay -->
                        <div class="col">
                            <div class="card list-group-item-action" onclick="showSection('gopay', this)" id="btn-gopay" style="cursor: pointer;">
                                <div class="card-body">
                                    <h6 class="card-title mb-0">Gopay</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div id="mandiri" class="content-section active">
                        <h4>Pembayaran melalui Bank Mandiri</h4>

                        <h5>1. Pembayaran melalui Mandiri ATM</h5>
                        <ol>
                            <li>Masukkan kartu ATM dan PIN</li>
                            <li>Pilih menu <strong>BAYAR/BELI</strong></li>
                            <li>Pilih menu <strong>LAINNYA → LAINNYA → INTTV</strong></li>
                            <li>Masukkan kode Perusahaan/Institusi: <strong>89450 (ICONNET)</strong></li>
                            <li>Masukkan No. Virtual Account, contoh: <strong>894500000001</strong></li>
                            <li>Konfirmasi: Tekan <strong>1</strong> kemudian tekan <strong>OK</strong></li>
                            <li>Transaksi selesai</li>
                            <li>Simpan struk pembayaran</li>
                        </ol>

                        <h5>2. Pembayaran melalui Mandiri Online</h5>
                        <ol>
                            <li>Buka aplikasi Mandiri Online di handphone atau PC</li>
                            <li>Masukkan <strong>User ID</strong> dan <strong>PIN</strong> di halaman login</li>
                            <li>Pilih menu <strong>BAYAR → BUAT PEMBAYARAN BARU</strong></li>
                            <li>Pilih menu <strong>INTERNET → ICONNET / 89450</strong></li>
                            <li>Pilih rekening sumber</li>
                            <li>Masukkan No. Virtual Account</li>
                            <li>Tekan <strong>Lanjut</strong></li>
                            <li>Tekan <strong>KONFIRMASI</strong></li>
                            <li>Masukkan <strong>MPIN</strong> Banking, kemudian tekan <strong>OK</strong></li>
                            <li>Transaksi selesai</li>
                        </ol>

                        <h5>3. Pembayaran melalui Cabang Bank Mandiri</h5>
                        <ol>
                            <li>Datang ke cabang Bank Mandiri terdekat</li>
                            <li>Isi slip setoran atau pindah buku dengan langkah berikut:</li>
                            <ul>
                                <li>Isi Tanggal, Nama & Alamat Pembayar</li>
                                <li>Isi penerima dengan kode <strong>89450</strong></li>
                                <li>Isi No. Rekening dengan No. Virtual Account</li>
                                <li>Isi jumlah setoran dan terbilang</li>
                                <li>Isi tujuan transaksi, contoh: <em>PEMBAYARAN XXXX</em></li>
                            </ul>
                            <li>Antarkan slip ke teller</li>
                            <li>Teller akan memproses dan mencetak bukti pembayaran</li>
                        </ol>

                        <h5>4. Pembayaran melalui MCM / MIB</h5>
                        <ol>
                            <li>Buka aplikasi <strong>MCM / MIB</strong></li>
                            <li>Masukkan <strong>Company ID, User ID</strong>, dan <strong>Password</strong></li>
                            <li>Pilih menu <strong>PEMBAYARAN → PEMBAYARAN TAGIHAN</strong></li>
                            <li>Pilih rekening debet</li>
                            <li>Pilih kategori institusi: <strong>89450 / ICONNET</strong></li>
                            <li>Masukkan No. Virtual Account</li>
                            <li>Tekan <strong>LANJUT</strong> → <strong>KONFIRMASI</strong></li>
                            <li>Approve transaksi dengan memasukkan <strong>PIN dinamis token</strong></li>
                            <li>Transaksi selesai</li>
                        </ol>
                    </div>

                    <div id="bri" class="content-section">
                        <h4>Pembayaran melalui Bank BRI</h4>

                        <h5>1. Pembayaran melalui ATM BRI</h5>
                        <ol>
                            <li>Masukkan kartu ATM dan PIN</li>
                            <li>Pilih menu <strong>Transaksi Lain → LAINNYA → BRIVA</strong></li>
                            <li>Masukkan Nomor Virtual Account: <strong>1326891</strong> (ICONNET)</li>
                            <li>Masukkan No. VA, contoh: <strong>1326891000000001</strong></li>
                            <li>Pada halaman konfirmasi, pastikan detail pembayaran sudah sesuai (Nomor BRIVA, Nama Pelanggan, dan Jumlah Pembayaran)</li>
                            <li>Transaksi selesai</li>
                            <li>Simpan struk pembayaran</li>
                        </ol>

                        <h5>2. Pembayaran melalui Mobile Banking BRI</h5>
                        <ol>
                            <li>Buka aplikasi BRI Mobile</li>
                            <li>Pilih menu <strong>Mobile Banking BRI → PEMBAYARAN → BRIVA</strong></li>
                            <li>Masukkan Nomor Virtual Account</li>
                            <li>Masukkan jumlah pembayaran</li>
                            <li>Masukkan PIN</li>
                            <li>Transaksi selesai</li>
                            <li>Simpan notifikasi SMS sebagai bukti pembayaran</li>
                        </ol>

                        <h5>3. Pembayaran melalui Internet Banking BRI</h5>
                        <ol>
                            <li>Login ke alamat: <a href="https://ib.bri.co.id/ib-bri/Login.html" target="_blank">https://ib.bri.co.id/ib-bri/Login.html</a></li>
                            <li>Pilih menu <strong>Pembayaran Tagihan → Pembayaran → BRIVA</strong></li>
                            <li>Masukkan Nomor Virtual Account</li>
                            <li>Pada halaman konfirmasi, pastikan detail pembayaran sudah sesuai (Nomor BRIVA, Nama Pelanggan, dan Jumlah Pembayaran)</li>
                            <li>Masukkan password dan mToken</li>
                            <li>Transaksi selesai</li>
                            <li>Simpan struk pembayaran</li>
                        </ol>
                    </div>
                    <div id="bni" class="content-section">
                        <h4>Pembayaran melalui Bank BNI</h4>

                        <h5>1. Pembayaran melalui ATM BNI</h5>
                        <ol>
                            <li>Masukkan kartu ATM dan PIN</li>
                            <li>Pilih menu <strong>Transaksi Lain → LAINNYA → BNIVA</strong></li>
                            <li>Masukkan Nomor Virtual Account: <strong>3438691</strong> (ICONNET)</li>
                            <li>Masukkan No. VA, contoh: <strong>3438691000000001</strong></li>
                            <li>Pada halaman konfirmasi, pastikan detail pembayaran sudah sesuai (Nomor BNIVA, Nama Pelanggan, dan Jumlah Pembayaran)</li>
                            <li>Transaksi selesai</li>
                            <li>Simpan struk pembayaran</li>
                        </ol>

                        <h5>2. Pembayaran melalui Mobile Banking BNI</h5>
                        <ol>
                            <li>Buka aplikasi BNI Mobile</li>
                            <li>Pilih menu <strong>Transfer → Virtual Account Billing → BNIVA</strong></li>
                            <li>Masukkan Nomor Virtual Account</li>
                            <li>Masukkan PIN</li>
                            <li>Transaksi selesai</li>
                            <li>Simpan notifikasi SMS sebagai bukti pembayaran</li>
                        </ol>

                        <h5>3. Pembayaran melalui Internet Banking BNI</h5>
                        <ol>
                            <li>Login ke alamat: <a href="https://ibank.bni.co.id" target="_blank">https://ibank.bni.co.id</a></li>
                            <li>Pilih menu <strong>Transfer → Virtual Account Billing → BNIVA</strong></li>
                            <li>Masukkan Nomor Virtual Account</li>
                            <li>Pada halaman konfirmasi, pastikan detail pembayaran sudah sesuai (Nomor BNIVA, Nama Pelanggan, dan Jumlah Pembayaran)</li>
                            <li>Masukkan password dan mToken</li>
                            <li>Transaksi selesai</li>
                            <li>Simpan struk pembayaran</li>
                        </ol>
                    </div>

                    <div id="bca" class="content-section">
                    <h4>Pembayaran melalui Bank BCA</h4>

                    </div>
                    <div id="alfa" class="content-section">
                        <h4>Pembayaran melalui Gerai Alfamart</h4>
                        <ol>
                            <li>Datang ke gerai Alfamart terdekat</li>
                            <li>Info ke kasir: Pembayaran <strong>DOKU ICONNET</strong></li>
                            <li>Berikan No. Pembayaran, contoh: <strong>111113000000001</strong></li>
                            <li>Pembayaran sesuai jumlah pesanan</li>
                            <li>Transaksi selesai</li>
                            <li>Simpan struk pembayaran</li>
                        </ol>
                    </div>
                    <div id="indo" class="content-section">
                        <h4>Pembayaran melalui Gerai Indomaret</h4>
                        <ol>
                            <li>Datang ke gerai Indomaret</li>
                            <li>Info ke kasir: Pembayaran <strong>Stroomnet</strong></li>
                            <li>Berikan kode: <strong>88267001</strong> + 8 digit kode</li>
                            <li>Bayar sesuai tagihan + admin Rp6.450</li>
                            <li>Transaksi selesai</li>
                            <li>Simpan struk pembayaran</li>
                        </ol>
                    </div>
                    <div id="link" class="content-section">
                    <h4>Pembayaran melalui LinkAja</h4>

                    </div>
                    <div id="ovo" class="content-section">
                    <h4>Pembayaran melalui OVO</h4>

                    </div>
                    <div id="gopay" class="content-section">
                    <h4>Pembayaran melalui Gopay</h4>

                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')

    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Custom JS -->
    <script>
        function showSection(id, buttonElement) {
            // Sembunyikan semua section
            document.querySelectorAll('.content-section').forEach(section => {
                section.classList.remove('active');
            });

            // Tampilkan section yang dipilih
            const selectedSection = document.getElementById(id);
            if (selectedSection) {
                selectedSection.classList.add('active');
            }

            // Reset semua tombol sidebar
            document.querySelectorAll('.list-group-item').forEach(btn => {
                btn.classList.remove('active-border');
                btn.classList.remove('active-link');
            });

            // Aktifkan tombol yang diklik
            buttonElement.classList.add('active-border');
            buttonElement.classList.add('active-link');
        }

        // Aktifkan default saat halaman load
        document.addEventListener("DOMContentLoaded", function() {
            showSection('mandiri', document.getElementById('btn-mandiri'));
        });
    </script>
    <script>
        function showSection(sectionId, element) {
            // Sembunyikan semua content-section
            const sections = document.querySelectorAll('.content-section');
            sections.forEach(section => section.classList.remove('active'));

            // Tampilkan section yang dipilih
            document.getElementById(sectionId).classList.add('active');

            // Hapus 'active-border' dan 'active-link' dari semua card
            const allCards = document.querySelectorAll('.card');
            allCards.forEach(card => {
                card.classList.remove('active-border', 'active-link');
            });

            // Tambahkan 'active-border' dan 'active-link' ke elemen yang diklik
            element.classList.add('active-border', 'active-link');
        }
    </script>

</body>

</html>