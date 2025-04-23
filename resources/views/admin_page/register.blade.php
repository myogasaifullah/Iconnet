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
            background-color: #ffffff;
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
                <button type="submit" class="login-btn">Daftar</button>
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