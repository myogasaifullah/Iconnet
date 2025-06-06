<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Iconnet</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- AOS (Animation on Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="css/styles.css" rel="stylesheet" />

    <style>
        .custom-floating .form-control {
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 1rem 1.25rem;
            background-color: #fff;
            transition: all 0.3s ease-in-out;
        }

        .custom-floating .form-control:focus {
            border-color: #0dcaf0;
            /* warna biru info */
            box-shadow: 0 0 0 0.25rem rgba(13, 202, 240, 0.25);
        }

        .btn-info {
            background-color: #0dcaf0;
            border-color: #0dcaf0;
        }

        .btn-info:hover {
            background-color: #0bb9de;
            border-color: #0bb9de;
        }

        .contact-card {
            background: #ffffff;
            padding: 2rem;
            text-align: center;
            border-radius: 1rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.15);
        }

        .contact-icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 15px;
            border-radius: 50%;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .contact-card h5 {
            color: #333;
        }

        .contact-card p {
            font-size: 1rem;
            color: #6c757d;
        }

        .icon-wrap i {
            font-size: 32px;
            line-height: 1;
        }

        .form-floating label {
            color: #6c757d;
        }

        .form-control:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        }

        .text-center h1,
        .text-center h2 {
            color: #0d1b2a;
        }
    </style>
</head>

<body class="bg-light">

    @include('layouts.navbar')

    <div class="container py-5" data-aos="fade-up">
        <div class="card shadow-sm p-5" data-aos="zoom-in" data-aos-delay="100">
            <h1 class="text-center mb-4 fw-bold" data-aos="fade-down" data-aos-delay="200">Hubungi Kami</h1>
            <p class="text-center mb-5" data-aos="fade-down" data-aos-delay="300">Jika Anda memiliki pertanyaan, keluhan, atau ingin mengetahui informasi lebih lanjut, silakan hubungi kami melalui salah satu cara berikut:</p>

            <div class="row g-4 align-items-start justify-content-center">
                <div class="col-md-4 d-flex" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon-wrap me-3">
                        <i class="bi bi-envelope-paper-fill text-info fs-1"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold">Email & Ponsel</h6>
                        <p class="mb-0">iconnetlampung@gmail.com<br>+62 811-7381-899</p>
                    </div>
                </div>

                <div class="col-md-4 d-flex" data-aos="fade-up" data-aos-delay="500">
                    <div class="icon-wrap me-3">
                        <i class="bi bi-geo-alt-fill text-info fs-1"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold">Kantor Perwakilan Lampung</h6>
                        <p class="mb-0"> Jl. Gn. Rajabasa Raya No.16, Perumnas Way Halim, Kec. Way Halim,<br>Kota Bandar Lampung, Lampung 35132</p>
                    </div>
                </div>

                <div class="col-md-4 d-flex" data-aos="fade-up" data-aos-delay="600">
                    <div class="icon-wrap me-3">
                        <i class="bi bi-instagram text-info fs-1"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold">Sosial Media</h6>
                        <p class="mb-0">Instagram <a href="https://www.instagram.com/iconnetlampung/" target="_blank">iconnetlampung</a><br>WhatsApp: 0811-7381-899</p>
                    </div>
                </div>
            </div>

            <hr class="my-5" data-aos="zoom-in" data-aos-delay="300" />

            <h4 class="text-center mb-4" data-aos="fade-down" data-aos-delay="200">Lokasi Kami</h4>
            <div class="ratio ratio-16x9 mb-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3636.0652622876823!2d105.27721210000001!3d-5.3774149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40db003c2dc063%3A0xc44662a267cb76c5!2sPLN%20ICON%20PLUS%20-%20KP.%20LAMPUNG!5e1!3m2!1sid!2sid!4v1744688020324!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <!-- <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.9171751338074!2d112.61570531526062!3d-7.13557497221752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd803ed543f4c5b%3A0xa08c9c8cb5c03273!2sKantor%20PLN%20Iconnet!5e0!3m2!1sen!2sid!4v1646664479673!5m2!1sen!2sid"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe> -->
            </div>

            <section class="contact-section py-5" data-aos="fade-up" data-aos-delay="200">
                <div class="container">
                    <h2 class="text-center mb-4 fw-bold" data-aos="zoom-in" data-aos-delay="200">Formulir Kontak</h2>
                    <form id="contactForm" action="{{ route('kontak.store') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6" data-aos="fade-right" data-aos-delay="300">
                                <div class="form-floating custom-floating">
                                    <input class="form-control" id="name" name="name" type="text" placeholder="Nama lengkap" required>
                                    <label for="name">Nama Lengkap</label>
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
                                <div class="form-floating custom-floating">
                                    <input class="form-control" id="email" name="email" type="email" placeholder="Email" required>
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="fade-right" data-aos-delay="400">
                                <div class="form-floating custom-floating">
                                    <input class="form-control" id="phone" name="phone" type="tel" placeholder="Nomor Telepon" required>
                                    <label for="phone">Nomor Telepon</label>
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="fade-left" data-aos-delay="400">
                                <div class="form-floating custom-floating">
                                    <input class="form-control" id="address" name="address" type="text" placeholder="Alamat" required>
                                    <label for="address">Alamat</label>
                                </div>
                            </div>
                            <div class="col-md-12" data-aos="fade-up" data-aos-delay="500">
                                <div class="form-floating custom-floating">
                                    <textarea class="form-control" id="message" name="message" placeholder="Pesan" required></textarea>
                                    <label for="message">Pesan</label>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-4" data-aos="zoom-in" data-aos-delay="600">
                            <button class="btn btn-info text-white btn-lg px-5 shadow-sm" id="submitButton" type="submit">Kirim</button>
                        </div>
                        @if(session('success'))
                        <div class="text-center mt-4 text-success fw-bold">
                            {{ session('success') }}
                        </div>
                        @endif

                        @if($errors->any())
                        <div class="text-center mt-4 text-danger fw-bold">
                            <ul class="list-unstyled">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </form>
                </div>
            </section>
        </div>
    </div>

    @include('layouts.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- SB Forms -->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true, // hanya jalan sekali
            duration: 800,
        });
    </script>
</body>


</html>