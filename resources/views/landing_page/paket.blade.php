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
</head>

<body class="bg-gray-100 text-gray-800">
    @include('layouts.navbar')

    <section class="bg-light py-5 border-bottom">
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h6 class="text-primary">Layanan Internet Broadband Super Cepat</h6>
                <h2 class="fw-bolder">Paket Internet Broadband Iconnet
                </h2>
                <p class="lead mb-0">ICONNET adalah penyedia layanan terkemuka dalam solusi konektivitas dan jaringan, menawarkan beragam produk dan layanan berkualitas tinggi untuk memenuhi kebutuhan komunikasi dan konektivitas bisnis Anda.</p>
            </div>
            <div class="row justify-content-center mb-4">
                <div class="col-md-6">
                    <form method="GET" action="{{ route('paket.landing') }}">
                        <div class="input-group">
                            <select name="nama_paket" class="form-select">
                                <option value="">-- Pilih Nama Daerah --</option>
                                @foreach($namaPakets as $nama)
                                <option value="{{ $nama }}" {{ request('nama_paket') == $nama ? 'selected' : '' }}>
                                    {{ $nama }}
                                </option>
                                @endforeach
                            </select>
                            <button class="btn btn-primary" type="submit">Filter</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 gx-5 justify-content-center">
                <!-- Card 1 -->
                @foreach($pakets as $paket)
                <div class="col mb-4">
    <div class="pricing-card border-0 shadow-lg rounded-4 overflow-hidden bg-white">
        <!-- Header with gradient background -->
        <div class="pricing-header text-center p-4" style="background: linear-gradient(135deg, #0093ae, #172858);">
            <h5 class="text-uppercase mb-2" style="color: #fff; font-weight: 700;">{{ $paket->nama_paket }}</h5>
            <h2 style="color: #fff; font-size: 28px;">{{ $paket->kecepatan }}</h2>
            <h1 style="color: #fff; font-size: 32px;">Rp {{ number_format($paket->harga, 0, ',', '.') }}</h1>
            <p style="color: #f8f9fa; font-size: 14px;">Per bulan</p>
        </div>

        <!-- Body with features -->
        <div class="pricing-body p-4 bg-light">
            <ul class="list-unstyled mb-4">
                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> Full Fiber To The Home</li>
                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> Speed Up To {{ $paket->kecepatan }}</li>
                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> Unlimited Quota</li>
                <li class="mb-2"><i class="bi bi-info-circle text-primary me-2"></i> {{ $paket->deskripsi }}</li>
                <li class="mb-2"><i class="bi bi-exclamation-triangle text-warning me-2"></i> Harga Belum Termasuk PPN 11%</li>
            </ul>
            <div class="text-center">
                <a href="https://api.whatsapp.com/send?phone=628117381899"
                   class="btn btn-primary btn-daftar w-100 py-2" style="border-radius: 25px;">
                    <i class="bi bi-whatsapp me-1"></i> Daftar Sekarang
                </a>
            </div>
        </div>
    </div>
</div>

                @endforeach
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