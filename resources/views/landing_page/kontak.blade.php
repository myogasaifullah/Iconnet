<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Iconnet</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>

<body class="bg-gray-100">
    <!-- Navbar -->
    @include('layouts.navbar')

    <div class="container mt-5">
        <div class="card p-5 mb-4">
            <h1 class="text-2xl font-bold mb-4 text-center">Hubungi Kami</h1>

            <p class="mb-4 text-center">Jika Anda memiliki pertanyaan, keluhan, atau ingin mengetahui informasi lebih lanjut, silakan hubungi kami melalui salah satu cara berikut:</p>

            <section class="container py-5">
                <div class="row g-4 justify-content-center">
                    <!-- Baris Pertama -->
                    <div class="col-md-3">
                        <div class="contact-card">
                            <div class="contact-icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>

                            <h5>Contact Center</h5>
                            <p>150678</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-card">
                            <div class="contact-icon"><i class="bi bi-whatsapp"></i>
                            </div>
                            <h5>Whatsapp</h5>
                            <p>0811-1200-2123</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-card">
                            <div class="contact-icon"><i class="bi bi-instagram"></i>
                            </div>
                            <h5>Instagram</h5>
                            <p>@iconnet.plniconplus</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-card">
                            <div class="contact-icon"><i class="bi bi-envelope-fill"></i>
                            </div>
                            <h5>E-mail ICONNET</h5>
                            <p>cc.iconnet@iconpln.co.id</p>
                        </div>
                    </div>

                    <!-- Baris Kedua -->
                    <div class="col-md-3">
                        <div class="contact-card">
                            <div class="contact-icon"><i class="bi bi-envelope-fill"></i>
                            </div>
                            <h5>Email Gangguan</h5>
                            <p>cc.iconnet@iconpln.co.id</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-card">
                            <div class="contact-icon"><i class="bi bi-cash-coin"></i>
                            </div>
                            <h5>Refund Iconnet</h5>
                            <p>Pengajuan & Check Refund</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-card">
                            <div class="contact-icon"><i class="bi bi-instagram"></i>
                            </div>
                            <h5>Instagram</h5>
                            <p>@iconnet.here</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="container py-5">
                <!-- Google Maps -->
                <div class="mt-5">
                    <h4 class="text-center mb-3">Lokasi Kami</h4>
                    <div class="ratio ratio-16x9">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.9171751338074!2d112.61570531526062!3d-7.13557497221752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd803ed543f4c5b%3A0xa08c9c8cb5c03273!2sKantor%20PLN%20Iconnet!5e0!3m2!1sen!2sid!4v1646664479673!5m2!1sen!2sid"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </section>
            <div class="mt-8">
                <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Formulir</h2>
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                        <label for="name">Full name</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                        <label for="email">Email address</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                        <label for="phone">Phone number</label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                        <label for="message">Message</label>
                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error sending message!</div>
                    </div>
                    <!-- Submit Button-->
                    <div class="d-grid"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                </form>
            </div>
        </div>
    </div>

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
</body>

</html>