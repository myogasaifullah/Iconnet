<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Hubungi Kami | Iconnet</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

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
        .contact-card {
            background: #ffffff;
            padding: 2rem;
            text-align: center;
            border-radius: 1rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
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

    <div class="container py-5">
        <div class="card shadow-sm p-5">
            <h1 class="text-center mb-4 fw-bold">Hubungi Kami</h1>
            <p class="text-center mb-5">Jika Anda memiliki pertanyaan, keluhan, atau ingin mengetahui informasi lebih lanjut, silakan hubungi kami melalui salah satu cara berikut:</p>

            <div class="row g-4 justify-content-center">
                <div class="col-md-3" data-aos="fade-up">
                    <div class="contact-card shadow-sm">
                        <div class="contact-icon bg-primary text-white">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <h5>Contact Center</h5>
                        <p class="text-muted">150678</p>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-card shadow-sm">
                        <div class="contact-icon bg-success text-white">
                            <i class="bi bi-whatsapp"></i>
                        </div>
                        <h5>WhatsApp</h5>
                        <p class="text-muted">0811-1200-2123</p>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-card shadow-sm">
                        <div class="contact-icon bg-gradient text-white bg-warning">
                            <i class="bi bi-instagram"></i>
                        </div>
                        <h5>Instagram</h5>
                        <p class="text-muted">@iconnet.plniconplus</p>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="contact-card shadow-sm">
                        <div class="contact-icon bg-danger text-white">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <h5>Email ICONNET</h5>
                        <p class="text-muted">cc.iconnet@iconpln.co.id</p>
                    </div>
                </div>
            </div>

            <hr class="my-5" />

            <h4 class="text-center mb-4">Lokasi Kami</h4>
            <div class="ratio ratio-16x9 mb-5">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.9171751338074!2d112.61570531526062!3d-7.13557497221752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd803ed543f4c5b%3A0xa08c9c8cb5c03273!2sKantor%20PLN%20Iconnet!5e0!3m2!1sen!2sid!4v1646664479673!5m2!1sen!2sid"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <h2 class="text-center mb-4">Formulir Kontak</h2>
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control" id="name" type="text" placeholder="Nama lengkap" data-sb-validations="required" />
                            <label for="name">Nama Lengkap</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">Nama wajib diisi.</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control" id="email" type="email" placeholder="Email" data-sb-validations="required,email" />
                            <label for="email">Email</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">Email wajib diisi.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Format email tidak valid.</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control" id="phone" type="tel" placeholder="Nomor Telepon" data-sb-validations="required" />
                            <label for="phone">Nomor Telepon</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">Nomor telepon wajib diisi.</div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating">
                            <textarea class="form-control" id="message" placeholder="Pesan" style="height: 150px" data-sb-validations="required"></textarea>
                            <label for="message">Pesan</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">Pesan wajib diisi.</div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <button class="btn btn-primary btn-lg px-5" id="submitButton" type="submit">Kirim</button>
                </div>

                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center mt-4 text-success fw-bold">Pesan berhasil dikirim!</div>
                </div>
                <div class="d-none" id="submitErrorMessage">
                    <div class="text-center mt-4 text-danger fw-bold">Terjadi kesalahan saat mengirim pesan!</div>
                </div>
            </form>
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
        AOS.init();
    </script>
</body>

</html>