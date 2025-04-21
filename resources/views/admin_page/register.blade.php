<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register - Iconnet</title>
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
            background-color: #ffffff;
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
        }

        .register-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            padding: 40px 16px;
        }

        .register-wrapper {
            width: 100%;
            max-width: 500px;
            padding: 30px;
            border-radius: 12px;
            background-color: #ffffff;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            text-align: center;
        }

        .logo {
            max-width: 100px;
            margin-bottom: 20px;
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

        .register-btn {
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

        .register-btn:hover {
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
    </style>
</head>

<body>
    <!-- Banner Atas -->
    <div class="top-banner">
        <img src="assets/top.png" alt="Top Banner">
    </div>

    <!-- Register Section -->
    <div class="register-container">
        <div class="register-wrapper">
            <img src="https://iconnetjabar.com/wp-content/uploads/2023/09/cropped-Favicon-Iconnet-1024x1024-1.png" alt="ICONNET Logo" class="logo">
            <div class="title">Buat Akun Baru</div>

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Nama Lengkap" class="input-box" required>
                <input type="email" name="email" placeholder="Email" class="input-box" required>
                <input type="password" name="password" placeholder="Password" class="input-box" required>
                <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" class="input-box" required>
                <button type="submit" class="register-btn">Daftar</button>
            </form>

            <div class="text-link">
                Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a>
            </div>
        </div>
    </div>

    <!-- Banner Bawah -->
    <div class="bottom-banner">
        <img src="assets/bottom.png" alt="Bottom Banner">
    </div>
</body>

</html>
