<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Kebijakan Privasi IconNet" />
    <meta name="author" content="IconNet" />
    <title>Kebijakan Privasi - Iconnet</title>

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
rgb(51, 166, 166) ) !important;
        }
    </style>
</head>

<body class="bg-white text-dark">
    @include('layouts.navbar')
    <section class="hero-section py-5 bg-privacy" data-aos="fade-up" data-aos-duration="1200">
        <div class="container px-4 my-5 text-center">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8">
                    <h1 class="display-5 fw-bold mb-4 text-white ">PRIVACY AND POLICY</h1>
                    <p class="lead mb-4 text-white">ICONNET adalah sebuah internet provider baru yang dulunya bernama Stroomnet. ICONNET Bangkit Bersatu Untuk Indonesia, dengan menjunjung tinggi
                        nilai-nilai Nasionalisme, ICONNET berniat memberikan yang terbaik untuk masyarakat Indonesia</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white py-5 border-bottom">
        <div class="container">
            <div class="row gx-5 gy-4">

                <!-- Sidebar -->
                <div class="col-lg-3">
                    <ul class="list-group list-group-flush sticky-sidebar">
                        <li class="list-group-item fw-bold" id="item-pengertian">
                            <a href="#" id="link-pengertian" class="text-decoration-none text-dark active-link" onclick="showSection('pengertian', this, 'item-pengertian', event)">Pengertian</a>
                        </li>
                        <li class="list-group-item" id="item-filelog">
                            <a href="#" id="link-filelog" class="text-decoration-none text-dark" onclick="showSection('filelog', this, 'item-filelog', event)">File Log</a>
                        </li>
                        <li class="list-group-item" id="item-cookies">
                            <a href="#" id="link-cookies" class="text-decoration-none text-dark" onclick="showSection('cookies', this, 'item-cookies', event)">Cookies</a>
                        </li>
                        <li class="list-group-item" id="item-datapengguna">
                            <a href="#" id="link-datapengguna" class="text-decoration-none text-dark" onclick="showSection('datapengguna', this, 'item-datapengguna', event)">Data Pengguna</a>
                        </li>
                        <li class="list-group-item" id="item-penggunaaninformasi">
                            <a href="#" id="link-penggunaaninformasi" class="text-decoration-none text-dark" onclick="showSection('penggunaaninformasi', this, 'item-penggunaaninformasi', event)">Penggunaan Informasi</a>
                        </li>
                        <li class="list-group-item" id="item-perubahan">
                            <a href="#" id="link-perubahan" class="text-decoration-none text-dark" onclick="showSection('perubahan', this, 'item-perubahan'), event">Perubahan</a>
                        </li>
                    </ul>
                </div>

                <!-- Konten -->
                <div class="col-lg-9">
                    <section id="pengertian" class="content-section active mb-5">
                        <h4 class="fw-bold">Pengertian</h4>
                        <p>
                            Sebagai penyedia jasa layanan internet rumah, kami IconNet sangat menjunjung tinggi privasi pelanggan. Hal ini karena informasi pribadi merupakan hal yang sangat krusial dan tidak boleh diketahui siapapun. Berikut akan kami jelaskan mengenai informasi apa saja yang kami terima dan kami kumpulkan pada saat Anda mengunjungi situs IconNet. Serta, tentang bagaimana kami menyimpan dan menjaga informasi tersebut. Kami tegaskan bahwa kami tidak akan pernah memberikan informasi tersebut kepada siapapun termasuk pihak ketiga.
                        </p>
                    </section>

                    <section id="filelog" class="content-section mb-5">
                        <h4 class="fw-bold">File Log</h4>
                        <p>
                            Seperti situs lain pada umumnya, kami mengumpulkan dan menggunakan data yang terdapat pada file log. Informasi yang terdapat pada file log termasuk alamat IP (Internet Protocol) Anda, ISP (Internet Service Provider), browser yang Anda gunakan, waktu pada saat Anda berkunjung serta halaman mana saja yang Anda buka selama berkunjung di IconNet.
                        </p>
                    </section>

                    <section id="cookies" class="content-section mb-5">
                        <h4 class="fw-bold">Cookies</h4>
                        <p>
                            Situs kami menggunakan cookies untuk menyimpan berbagai informasi seperti preferensi pribadi pada saat mengunjungi situs IconNet serta informasi login. IconNet juga menggunakan layanan tracking dari pihak ketiga untuk mendukung situs kami. Beberapa layanan tersebut mungkin menggunakan cookies ketika melakukan tracking di situs kami. IconNet bekerja sama dengan layanan tracker seperti Google AdWords, Google Analytics, AdRoll serta CrazyEgg. Dimana informasi yang dikirim dapat berupa alamat IP, ISP, browser, sistem operasi yang Anda pakai, dan sebagainya.
                        </p>
                    </section>

                    <section id="datapengguna" class="content-section mb-5">
                        <h4 class="fw-bold">Data Pengguna</h4>
                        <p>
                            Data pengguna meliputi: Nama; Informasi ID Pelanggan PLN atau Nomor Meter PLN; Informasi Nomor KTP; Informasi kontak, termasuk alamat email; Data demografi seperti kode pos, preferensi, dan minat; Informasi lain yang berhubungan dengan survei pelanggan dan/penawaran.
                        </p>
                    </section>

                    <section id="penggunaaninformasi" class="content-section mb-5">
                        <h4 class="fw-bold">Penggunaan Informasi</h4>
                        <p>
                            Kami menggunakan informasi yang dikumpulkan di situs kami untuk melakukan pendaftaran pemasangan internet ke sistem dan upgrade/downgrade kapasitas layanan internet; Memberikan pengalaman yang lebih baik kepada Anda dalam bentuk maintenance service, peningkatan layanan akses internet survey; Mengirimkan informasi terkait pembayaran dan tagihan kepada anda dalam bentuk whatsapp, email atau sms maupun telepon; Meningkatkan pelayanan kami dalam bentuk perbaikan dalam situs.
                        </p>
                    </section>

                    <section id="perubahan" class="content-section mb-5">
                        <h4 class="fw-bold">Perubahan Kebijakan Privasi</h4>
                        <p>
                            Dengan mengakses situs IconNet, maka Anda setuju bahwa kebijakan privasi ini dapat diubah dalam hal apa saja dan kapan saja oleh IconNet. Penggunaan Layanan yang tetap Anda lakukan secara berkelanjutan akan dianggap setuju terhadap perubahan tersebut. Jika Anda tidak ingin melanjutkan menggunakan Layanan kami karena perubahan tersebut, Anda dapat memberitahukan keinginan Anda untuk menghentikan penggunaan layanan internet ke IconNet.
                        </p>
                    </section>
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
        function showSection(id, el, itemId) {

            event.preventDefault()
            // Tampilkan konten sesuai id
            const sections = document.querySelectorAll('.content-section');
            sections.forEach(section => section.classList.remove('active'));

            const selected = document.getElementById(id);
            if (selected) {
                selected.classList.add('active');
                selected.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }

            // Ganti kelas aktif di sidebar
            const links = document.querySelectorAll('.list-group-item a');
            links.forEach(link => link.classList.remove('active-link'));

            const items = document.querySelectorAll('.list-group-item');
            items.forEach(item => item.classList.remove('active-border'));

            // Tambahkan border aktif pada item sidebar yang sesuai
            if (el) {
                el.classList.add('active-link');
                const activeItem = document.getElementById(itemId);
                if (activeItem) {
                    activeItem.classList.add('active-border');
                }
            }
        }
    </script>

</body>

</html>