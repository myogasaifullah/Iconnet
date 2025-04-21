<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Iconnet</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
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

        .top-banner,
        .bottom-banner {
            width: 100%;
        }

        .top-banner img,
        .bottom-banner img {
            display: block;
            width: 100%;
            height: auto;
            object-fit: cover;
            margin: 0;
            padding: 0;
        }

        .login-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        .login-wrapper {
            width: 100%;
            max-width: 400px;
            padding: 30px;
            border-radius: 12px;
            background-color: #ffffff;
            box-shadow: 0 10px 50px rgba(0, 0, 0, 0.05);
            text-align: center;
        }

        .logo {
            max-width: 200px;
            margin-bottom: 10px;
        }

        .title {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 25px;
        }

        .input-box {
            width: 100%;
            padding: 12px 16px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
        }

        .login-btn {
            width: 100%;
            padding: 12px;
            background-color: #002f6c;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
        }

        .login-btn:hover {
            background-color: #0056b3;
        }

        .text-link {
            margin-top: 16px;
            font-size: 13px;
        }

        .text-link a {
            color: #0056b3;
            text-decoration: none;
            font-weight: 500;
        }

        .footer {
            margin-top: 40px;
            font-size: 11px;
            color: #888;
            text-align: center;
        }

        .footer p {
            margin-bottom: 4px;
        }

        .footer-logo {
            max-width: 80px;
            margin: 10px auto;
        }

        .login-section {
            margin: 33px 0;
            /* Atur sesuai kebutuhan */
            width: 100%;
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
                        <a href="#">Lupa Password?</a>
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