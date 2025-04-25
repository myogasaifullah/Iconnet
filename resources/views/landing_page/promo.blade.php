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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        /* Style untuk gambar promo */
        .promo-image-container {
            position: relative;
            overflow: hidden;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
        }
        
        .promo-image {
            max-width: 100%;
            max-height: 400px;
            width: auto;
            height: auto;
            object-fit: contain;
            transition: transform 0.3s ease;
        }
        
        .promo-card:hover .promo-image-container {
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
        
        .promo-card:hover .promo-image {
            transform: scale(1.03);
        }
        
        /* Modal untuk preview gambar */
        .modal-image {
            max-width: 90vw;
            max-height: 80vh;
            width: auto;
            height: auto;
        }
        
        /* Responsive adjustments */
        @media (max-width: 1024px) {
            .promo-image {
                max-height: 300px;
            }
        }
        
        @media (max-width: 768px) {
            .promo-image {
                max-height: 250px;
            }
        }
    </style>
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
                <div class="card w-full" data-aos="{{ $loop->iteration % 2 == 0 ? 'fade-left' : 'fade-right' }}">
                    <div class="promo-card flex flex-col lg:flex-row {{ $loop->iteration % 2 == 0 ? 'lg:flex-row-reverse' : '' }} items-center gap-6 bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <!-- Teks -->
                        <div class="w-full lg:w-1/2">
                            <h2 class="text-3xl font-bold mb-4 text-gray-800">{{ $promo->judul }}</h2>
                            <p class="mb-4 text-gray-600">{{ $promo->deskripsi }}</p>
                            <a href="https://api.whatsapp.com/send?phone=628117381899" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded transition-colors duration-300">
                                Info Detail
                            </a>
                        </div>
                        <!-- Gambar -->
                        <div class="w-full lg:w-1/2">
                            <div class="promo-image-container" 
                                 data-bs-toggle="modal" 
                                 data-bs-target="#imageModal"
                                 onclick="showImageModal('{{ asset('/' . $promo->gambar) }}', '{{ $promo->judul }}')">
                                <img src="{{ asset('storage/' . $promo->gambar) }}" 
                                     alt="{{ $promo->judul }}" 
                                     class="promo-image">
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Modal untuk preview gambar -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Preview Promo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="modalImage" class="modal-image mx-auto" src="" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
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
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Inisialisasi AOS
        AOS.init({
            duration: 800,
            once: true,
        });
        
        // Fungsi untuk menampilkan gambar di modal
        function showImageModal(imageSrc, title) {
            document.getElementById('modalImage').src = imageSrc;
            document.getElementById('modalImage').alt = title;
            document.getElementById('imageModalLabel').textContent = title;
        }
    </script>
</body>
</html>