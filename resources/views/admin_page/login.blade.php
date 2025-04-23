<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Iconnet</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            overflow-x: hidden;
            font-family: 'Poppins', sans-serif;
            background-color:rgb(255, 255, 255);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

       
    </style>
</head>

<body>
    <!-- Banner Atas -->
    <div class="top-banner">
        <img src="assets/top.png" alt="Top Banner">
    </div>

    <!-- Login Section -->
    <section class="login-section">
        <div class="login-container">
            <div class="left-section">
                <!-- <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Logo_PLN.svg/2560px-Logo_PLN.svg.png" alt="PLN Icon Plus" class="footer-logo" /> -->
                <div class="login-wrapper">
                    <img src="https://iconnetjabar.com/wp-content/uploads/2023/09/cropped-Favicon-Iconnet-1024x1024-1.png" alt="ICONNET Logo" class="logo">
                    <div class="title">Semua Makin Mudah</div>

                    @if ($errors->any())
                    <div style="background-color: #f8d7da; color: #842029; padding: 12px; margin-bottom: 20px; border-radius: 8px;">
                        @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                        @endforeach
                    </div>
                    @endif

                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <input type="email" name="email" placeholder="Email" class="input-box" required value="{{ old('email') }}">
                        <input type="password" name="password" placeholder="Password" class="input-box" required>
                        <button type="submit" class="login-btn">Login</button>
                    </form>
                    <div class="text-link">
                        Belum memiliki akun? <a href="{{ route('register') }}">Daftar sekarang</a><br>
                        <a href="password">Lupa Password?</a>
                    </div>
                </div>
            </div>

            <!-- Footer Info
        <div class="footer">
            <p>PT. Indonesia Comnets Plus</p>
            <p>SBU Regional Sumbagsel - Jl. R. Sukamto No. 1792 Palembang</p>
            <p>Telp: 0711 - 363 963 | Email: humas@iconpln.co.id</p>
            <p>Kantor Pusat: Menara PLN Cawang, Jakarta Timur</p>
        </div> -->
        </div>
    </section>

    <!-- Banner Bawah -->
    <div class="bottom-banner">
        <img src="assets/bottom.png" alt="Bottom Banner">
    </div>
</body>

</html>