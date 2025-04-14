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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>

<body class="bg-gray-100 text-gray-800">
    @include('layouts.navbar')

    <!-- Section Promo -->
    <section id="promo" class="bg-light py-10">
        <div class="container mx-auto px-4">
            <!-- Judul Promo -->
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold mb-2">Promo Spesial!</h2>
                <p class="text-gray-600">Dapatkan produk terbaik kami dengan harga spesial.</p>
            </div>

            <!-- Flex Card -->
            <div class="flex flex-wrap gap-6 justify-center">
                @foreach($promos as $promo)
                <div class="container mx-auto py-8">
                    <div class="flex flex-col lg:flex-row items-center gap-6 bg-white p-6 rounded-lg shadow-lg card">
                        <!-- Bagian Teks -->
                        <div class="w-full lg:w-1/2">
                            <h2 class="text-3xl font-bold mb-4">{{ $promo->judul }}</h2>
                            <p class="mb-4">{{ $promo->deskripsi }}</p>
                            <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Info Detail
                            </a>
                        </div>
                        <!-- Bagian Gambar -->
                        <div class="w-full lg:w-1/2">
                            <img src="{{ asset('storage/' . $promo->gambar) }}" alt="{{ $promo->judul }}" class="w-full h-auto rounded-lg border-2 border-grey-500 shadow-lg">
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
</body>

</html>