<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="PLN Mobile - Semua Keperluan Listrik dan Rumah dalam Satu Aplikasi" />
  <meta name="author" content="PT PLN (Persero)" />
  <title>Iconnet</title>
  <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- AOS CSS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <!-- Custom CSS -->
  <link href="css/styles.css" rel="stylesheet" />
  <style>
    .feature-text h2 {
      color: rgb(0, 128, 128);
    }
    .feature-text b {
      color: rgb(0, 128, 128);
    }
    .section-title {
      color: #007b8a;
    }
    .btn-primary {
      background-color: #007b8a;
      border-color: #007b8a;
    }
    .btn-primary:hover {
      background-color: #005f6b;
      border-color: #005f6b;
    }
  </style>
</head>
<body class="bg-light text-dark">
  <!-- Navbar -->
  @include('layouts.navbar')
  <main>
    <!-- Hero Section -->
    <section class="py-5 bg-white">
      <div class="container px-5">
        <div class="row gx-5 align-items-center">
          <div class="col-lg-6" data-aos="fade-right">
            <h1 class="display-4 fw-bold mb-4">Download Aplikasi <span class="text-primary">PLN Mobile</span></h1>
            <p class="lead mb-4">Nikmati kemudahan layanan PLN hanya dalam satu genggaman. Mulai dari pembelian token, pembayaran listrik, pengaduan, hingga pengajuan pasang baru atau tambah daya.</p>
            <div class="d-flex flex-column flex-md-row">
              <a class="btn btn-primary btn-lg me-md-3 mb-3 mb-md-0" href="https://play.google.com/store/apps/details?id=com.icon.pln123" target="_blank">
                <i class="bi bi-google-play"></i> Google Play
              </a>
              <a class="btn btn-dark btn-lg" href="https://apps.apple.com/id/app/pln-mobile/id1546278038" target="_blank">
                <i class="bi bi-apple"></i> App Store
              </a>
            </div>
          </div>
          <div class="col-lg-6 text-center mt-5 mt-lg-0" data-aos="fade-left">
            <img class="img-fluid rounded" src="assets/m1.png" alt="PLN Mobile" style="max-width: 80%;">
          </div>
        </div>
      </div>
    </section>

    <!-- Features Section -->
    <section class="py-5 bg-white" id="fitur">
      <div class="container py-5">
        <div class="text-center feature-text mb-5" data-aos="fade-up">
          <h2 class="section-title">#SemuaMakinMudah</h2>
          <h1>Dengan Fitur Terbaik PLN Mobile</h1>
          <h5>Tempat seluruh kebutuhan kelistrikan Anda menjadi lebih mudah dan cepat</h5>
        </div>

        <!-- Feature 1 -->
        <div class="row align-items-center feature-block mb-5">
          <div class="col-md-6 text-center" data-aos="fade-right">
            <img src="assets/m2.png" alt="Kelistrikan" class="img-fluid">
          </div>
          <div class="col-md-6" data-aos="fade-left">
            <div class="feature-text">
              <h2>01. Kelistrikan</h2>
              <h6>Kamu dapat melakukan <b>Pasang Baru</b> dan pilih variasi daya hingga pilihan prabayar atau pascabayar, kamu juga bisa coba fitur <b>Ubah Daya</b> untuk tambah daya biar listrik kamu gak jeglek, selain itu kalau kamu ada ngadain acara besar di rumah bisa mengajukan <b>Penyambungan Sementara</b> lewat PLN Mobile.</h6>
            </div>
          </div>
        </div>

        <!-- Feature 2 -->
        <div class="row align-items-center feature-block mb-5 flex-md-row-reverse">
          <div class="col-md-6 text-center" data-aos="fade-left">
            <img src="assets/m3.png" alt="Internet" class="img-fluid">
          </div>
          <div class="col-md-6" data-aos="fade-right">
            <div class="feature-text">
              <h2>02. Internet</h2>
              <h6>Dengan pesatnya perkembangan teknologi mempengaruhi berbagai aspek kehidupan kita yang semakin bergantung pada <b>Internet</b>. Kualitas dan kecepatan yang terus bertambah menjadi kebutuhan baik di rumah, kantor, dan banyak tempat lainnya membuat kami memberikan <b>layanan terbaik</b> untuk anda.</h6>
            </div>
          </div>
        </div>

        <!-- Feature 3 -->
        <div class="row align-items-center feature-block mb-5">
          <div class="col-md-6 text-center" data-aos="fade-right">
            <img src="assets/m4.png" alt="Perbaikan" class="img-fluid">
          </div>
          <div class="col-md-6" data-aos="fade-left">
            <div class="feature-text">
              <h2>03. Perbaikan</h2>
              <h6>Memudahkan pelanggan dalam memenuhi <b>kebutuhan instalasi</b> listrik di rumah, kantor, atau gedung ketika mengalami gangguan. Anda akan mendapatkan notifikasi work order dan dapat melakukan <b>Tracking status order</b>. Petugas PLN akan datang sesuai jadwal, melakukan pengecekan dan setelah selesai, Anda dapat melakukan approval pekerjaan dan lakukan pembayaran.</h6>
            </div>
          </div>
        </div>

        <!-- Feature 4 -->
        <div class="row align-items-center feature-block flex-md-row-reverse">
          <div class="col-md-6 text-center" data-aos="fade-left">
            <img src="assets/m5.png" alt="SPKLU" class="img-fluid">
          </div>
          <div class="col-md-6" data-aos="fade-right">
            <div class="feature-text">
              <h2>04. SPKLU</h2>
              <h6>Kalau punya kendaraan listrik ngisi dayanya di mana ya? Di sini nih. Nama tempatnya SPKLU atau Stasiun Pengisian <b>Kendaraan Listrik</b> Umum. Nah untuk mengetahui lokasi isi daya kendaraan listrik kamu yuk, cek fitur <b>Charge.In</b>lewat PLN Mobile. Tinggal pilih lokasi SPKLU terdekat, cek kapasitas dan kondisi perangkat charger-nya, langsung deh kamu bisa charging kendaraan listrik kamu dengan mudah dan cepat.</h6>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Download Section -->
    <section class="py-5 bg-light" id="unduh">
      <div class="container text-center" data-aos="zoom-in">
        <h2 class="section-title mb-4">Unduh PLN Mobile Sekarang!</h2>
        <p class="mb-4">Dapatkan semua layanan listrik dan rumah hanya dalam satu aplikasi.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
          <a class="btn btn-primary btn-lg" href="https://play.google.com/store/apps/details?id=com.icon.pln123" target="_blank">
            <i class="bi bi-google-play"></i> Google Play
          </a>
          <a class="btn btn-dark btn-lg" href="https://apps.apple.com/id/app/pln-mobile/id1546278038" target="_blank">
            <i class="bi bi-apple"></i> App Store
          </a>
        </div>
      </div>
    </section>
  </main>

  @include('layouts.footer')

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- AOS JS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true
    });
  </script>
</body>
</html>
