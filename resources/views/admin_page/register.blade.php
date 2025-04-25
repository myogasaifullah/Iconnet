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

        .register-logo {
            margin-bottom: 20px;
            max-width: 63px;
        }

        .toggle-password {
            position: absolute;
            right: 12px;
            top: 40%;
            transform: translateY(-50%);
            cursor: pointer;
            width: 20px;
            height: 20px;
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
            <img src="https://iconnetjabar.com/wp-content/uploads/2023/09/cropped-Favicon-Iconnet-1024x1024-1.png" alt="ICONNET Logo" class="register-logo">
            <div class="title">Buat Akun Baru</div>

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Nama Lengkap" class="input-box" required>
                <input type="email" name="email" placeholder="Email" class="input-box" required>
                <div class="password-wrapper">
                    <input type="password" name="password" id="password" placeholder="Password" class="input-box" required>
                    <img src="assets/show.png" class="toggle-password" onclick="togglePassword('password', this)">
                </div>
                <div class="password-wrapper">
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Konfirmasi Password" class="input-box" required>
                    <img src="assets/show.png" class="toggle-password" onclick="togglePassword('password_confirmation', this)">
                </div>
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
    <script>
        function togglePassword(inputId, icon) {
            const input = document.getElementById(inputId);
            const isPassword = input.type === "password";
            input.type = isPassword ? "text" : "password";
            icon.src = isPassword ? "assets/hide.png" : "assets/show.png";
        }
    </script>

</body>

</html>