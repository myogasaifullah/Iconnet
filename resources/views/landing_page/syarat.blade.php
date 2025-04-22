<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Iconnet</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
    <!-- Bootstrap Icons -->
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

        .tab-content-section {
            display: none;
        }

        .tab-content-section.active {
            display: block;
            animation: fadeIn 0.5s ease-in-out;
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

        .btn-group .btn {
            background-color: transparent !important;
            border: none !important;
            box-shadow: none !important;
            color: #6c757d;
            /* Warna default teks */
            position: relative;
            padding-bottom: 10px;
            font-weight: 500;
        }

        .btn-group .btn.active {
            color: #007bff;
        }

        .btn-group .btn::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background-color: #007bff;
            bottom: 0;
            left: 0;
            transition: width 0.3s ease;
        }

        .btn-group .btn.active::after {
            width: 100%;
        }

        .btn-group .btn:hover {
            color: #007bff;
        }

        .btn-group .btn:not(.active)::after {
            width: 0;
        }
    </style>
</head>

<body class="bg-light text-dark">

    @include('layouts.navbar')

    <!-- TAB BUTTONS -->
    <div class="container text-center mt-5">
        <div class="text-center mb-4" data-aos="zoom-in" data-aos-delay="200">
            <h2 class="fw-bold">Syarat & Ketentuan</h2>
            <p class="text-muted">Informasi penting terkait layanan Iconnet</p>
        </div>
        <div class="btn-group" role="group">
    <button class="btn active" id="btnLayanan">Layanan</button>
    <button class="btn" id="btnIconnet">Iconnet</button>
</div>
    </div>

    <!-- SECTION: LAYANAN -->
    <div id="sectionLayanan" class="tab-content-section mt-4 active">
        @include('components.layanan')
    </div>

    <!-- SECTION: ICONNET -->
    <div id="sectionIconnet" class="tab-content-section mt-4">
        @include('components.iconnet')
    </div>

    @include('layouts.footer')

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();

        // Tab switching logic
        const btnLayanan = document.getElementById('btnLayanan');
        const btnIconnet = document.getElementById('btnIconnet');
        const sectionLayanan = document.getElementById('sectionLayanan');
        const sectionIconnet = document.getElementById('sectionIconnet');

        btnLayanan.addEventListener('click', () => {
            sectionLayanan.classList.add('active');
            sectionIconnet.classList.remove('active');
            btnLayanan.classList.add('active');
            btnIconnet.classList.remove('active');
        });

        btnIconnet.addEventListener('click', () => {
            sectionIconnet.classList.add('active');
            sectionLayanan.classList.remove('active');
            btnIconnet.classList.add('active');
            btnLayanan.classList.remove('active');
        });
    </script>
</body>

</html>