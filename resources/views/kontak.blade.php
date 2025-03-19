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
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm sticky-top">
        <div class="container px-5">
            <!-- Logo dan Nama Brand -->
            <a class="navbar-brand d-flex align-items-center" href="#!">
                <img src="https://iconnetjabar.com/wp-content/uploads/2023/09/cropped-Iconnet.png" alt="Logo" width="100" class="me-2">
                <span class="fw-bold text-primary"></span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link  menu-link fw-bold" href="{{ route('index') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link fw-bold" href="{{ route('tentang') }}">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link fw-bold" href="{{ route('keunggulan') }}">Keunggulan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link fw-bold" href="{{ route('promo') }}">Promo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link fw-bold" href="{{ route('paket') }}">Paket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link fw-bold" href="{{ route('syarat') }}">Syarat & Ketentuan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active menu-link fw-bold" aria-current="page" href="{{ route('kontak') }}">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container mt-5">
        <div class="card p-5 mb-4">
            <h1 class="text-2xl font-bold mb-4 text-center">Hubungi Kami</h1>

            <p class="mb-4 text-center">Jika Anda memiliki pertanyaan, keluhan, atau ingin mengetahui informasi lebih lanjut, silakan hubungi kami melalui salah satu cara berikut:</p>

            <div class="row">
                <!-- Alamat Kantor -->
                <div class="col-lg-6 col-sm-12 mb-4">
                    <div class="p-4 bg-gray-100 rounded shadow">
                        <h2 class="text-xl font-bold mb-4 text-blue-600">Alamat Kantor</h2>
                        <p class="text-gray-700">Jl. Gn. Rajabasa Raya No.16, Perumnas Way Halim, Kec. Way Halim, Kota Bandar Lampung, Lampung 35132</p>
                        <p class="text-gray-700">Indonesia</p>
                    </div>
                </div>

                <!-- Kontak -->
                <div class="col-lg-6 col-sm-12 mb-4">
                    <div class="p-4 bg-gray-100 rounded shadow">
                        <h2 class="text-xl font-bold mb-4 text-blue-600">Kontak</h2>
                        <p class="text-gray-700"><strong>Telepon:</strong> (061) 123-4567</p>
                        <p class="text-gray-700"><strong>Email:</strong> info@iconnetsumut.com</p>
                    </div>
                </div>
            </div>

            <div class="mt-8">
                <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Formulir Kontak</h2>
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

    <footer class="py-5 bg-light shadow-sm">
        <div id="footer-6" class="footer-area has-animation active-animation">
            <div class="footer-top-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div id="media_image-11" class="widget widget_media_image" style="margin-bottom: 20px;">
                                <a href="#">
                                    <img
                                        loading="lazy"
                                        width="250"
                                        height="73"
                                        src="https://iconnetjabar.com/wp-content/uploads/2023/09/cropped-Iconnet.png"
                                        class="image wp-image-4999 attachment-full size-full has-transparency"
                                        alt="Logo Iconnet"
                                        decoding="async"
                                        style="--dominant-color: #ffffff; max-width: 100%; height: auto; width: 250px;"
                                        srcset="https://iconnetjabar.com/wp-content/uploads/2023/09/cropped-Iconnet.png"
                                        sizes="(max-width: 500px) 100vw, 500px"
                                        data-has-transparency="true"
                                        data-dominant-color="ffffff">
                                </a>
                            </div>
                            <div id="text-16" class="widget widget_text">
                                <div class="textwidget">
                                    <p style="clear: both;">
                                        <a href="https://play.google.com/store/apps/details?id=id.co.iconpln.icrm.customer">
                                            <img loading="lazy" decoding="async" src="https://iconnetjabar.com/wp-content/uploads/2023/09/Logo-MyIcon.png" alt="gambar1" width="60" height="60">
                                        </a>&nbsp; &nbsp; &nbsp;
                                        <a href="https://play.google.com/store/apps/details?id=com.icon.pln123">
                                            <img loading="lazy" decoding="async" src="https://iconnetjabar.com/wp-content/uploads/2023/09/Logo-PLN-Mobile.png" alt="gambar2" width="60" height="60">
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <!-- <div id="rt-about-social-15" class="widget rt_footer_social_widget">
                                <div class="rt-about-widget">
                                    <ul class="footer-social">
                                        <li><a href="https://www.facebook.com/people/Iconnet-SUMUT/61551088654518/?mibextid=ZbWKwL" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://instagram.com/iconnet.sumut" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div id="digeco_address-16" class="widget widget_digeco_address">
                                <h3 class="widgettitle ">Alamat</h3>
                                <p class="rtin-des"></p>
                                <ul class="corporate-address">
                                    <li><i class="flaticon-placeholder"></i>Jl. Gn. Rajabasa Raya No.16, Perumnas Way Halim, Kec. Way Halim, Kota Bandar Lampung, Lampung 35132</li>
                                    <li><i class="flaticon-telephone"></i> <a href="tel:08116241500">08116241500</a></li>
                                    <li><i class="flaticon-plane"></i> <a href="mailto:iconnetsumut@gmail.com">iconnetlampung@gmail.com</a></li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12" style="margin-bottom: 20px;">
                            <div id="nav_menu-25" class="widget widget_nav_menu">
                                <h3 class="widgettitle ">Tentang</h3>
                                <div class="menu-menu-container">
                                    <ul id="menu-menu-3" class="menu">
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4834"><a href="/">Beranda</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4823"><a href="https://iconnetsumut.com/promo/">Promo &amp; Produk</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5136"><a href="https://iconnetsumut.com/cara-pembayaran/">Cara Pembayaran</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5135"><a href="https://iconnetsumut.com/faq/">FAQ</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-5004 current_page_item menu-item-5005"><a href="https://iconnetsumut.com/hubungi-kami/" aria-current="page">Hubungi Kami</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div id="nav_menu-26" class="widget widget_nav_menu">
                                <h3 class="widgettitle ">Layanan Kami</h3>
                                <div class="menu-layanan-kami-container">
                                    <ul id="menu-layanan-kami" class="menu">
                                        <li id="menu-item-5132" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5132"><a href="https://iconnetsumut.com/faq/">Tanya Jawab</a></li>
                                        <li id="menu-item-5134" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5134"><a href="https://iconnetsumut.com/cara-pembayaran/">Cara Pembayaran</a></li>
                                        <li id="menu-item-5133" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5133"><a href="https://iconnetsumut.com/syarat-ketentuan/">Syarat &amp; Ketentuan</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="container px-5">
                                <p class="m-0 text-center text-blue">Copyright &copy; PT INDONESIA COMNETS PLUS © 2024. All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>