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
                    rgb(51, 166, 166)) !important;
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
    @include('components.privacy')

    @include('components.policy')

    @include('layouts.footer')

    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Custom JS -->
    <script>
    function showSection(sectionId, linkElement, listItemId, event) {
        event.preventDefault();

        // Tentukan container induk berdasarkan id item
        const isPrivacy = listItemId.startsWith('item-pengertian') || listItemId.startsWith('item-filelog') ||
                          listItemId.startsWith('item-cookies') || listItemId.startsWith('item-datapengguna') ||
                          listItemId.startsWith('item-penggunaaninformasi') || listItemId.startsWith('item-perubahan');

        const contentSections = isPrivacy
            ? document.querySelectorAll("section#pengertian, section#filelog, section#cookies, section#datapengguna, section#penggunaaninformasi, section#perubahan")
            : document.querySelectorAll("section#pengartian, section#pengumpulan, section#cookie, section#tujuan, section#pembagian, section#penyimpanan, section#hak, section#kebijakan");

        // Sembunyikan semua section terkait
        contentSections.forEach(section => {
            section.classList.remove('active');
        });

        // Tampilkan section yang dipilih
        document.getElementById(sectionId).classList.add('active');

        // Reset active class dari semua link dan list item
        const allListItems = isPrivacy
            ? document.querySelectorAll('#item-pengertian, #item-filelog, #item-cookies, #item-datapengguna, #item-penggunaaninformasi, #item-perubahan')
            : document.querySelectorAll('#item-pengartian, #item-pengumpulan, #item-cookie, #item-tujuan, #item-pembagian, #item-penyimpanan, #item-hak, #item-kebijakan');

        allListItems.forEach(item => item.classList.remove('active-border'));
        document.querySelectorAll('.active-link').forEach(link => link.classList.remove('active-link'));

        // Tambahkan kelas aktif ke item yang diklik
        linkElement.classList.add('active-link');
        document.getElementById(listItemId).classList.add('active-border');
    }
</script>

</body>

</html>