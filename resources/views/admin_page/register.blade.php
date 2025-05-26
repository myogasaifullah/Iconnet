<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Iconnet - Register</title>
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

        .top-banner, .bottom-banner {
            width: 100%;
        }

        .top-banner img, .bottom-banner img {
            width: 100%;
            display: block;
        }

        .register-container {
            width: 100%;
            max-width: 500px;
            padding: 20px;
            margin: 20px auto;
        }

        .register-wrapper {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .register-logo {
            margin-bottom: 1px;
            max-width: 50px;
        }

        .title {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #333;
        }

        .input-box {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .input-box:focus {
            border-color: #4a90e2;
            outline: none;
        }

        .password-wrapper {
            position: relative;
            margin-bottom: 15px;
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

        .login-btn {
            width: 100%;
            padding: 12px;
            background-color: #4a90e2;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
        }

        .login-btn:hover {
            background-color: #3a7bc8;
        }

        .text-link {
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }

        .text-link a {
            color: #4a90e2;
            text-decoration: none;
            font-weight: 600;
        }

        .text-link a:hover {
            text-decoration: underline;
        }

        /* Error messages */
        .error-message {
            color: #e74c3c;
            font-size: 14px;
            margin-top: -10px;
            margin-bottom: 15px;
            text-align: left;
        }

        .input-error {
            border-color: #e74c3c;
        }
    </style>
</head>

<body>
    <!-- Top Banner -->
    <div class="top-banner">
        <img src="assets/newtop.png" alt="Top Banner">
    </div>

    <!-- Register Section -->
    <div class="register-container">
        <div class="register-wrapper">
            <img src="https://iconnetjabar.com/wp-content/uploads/2023/09/cropped-Favicon-Iconnet-1024x1024-1.png" alt="ICONNET Logo" class="register-logo">
            <div class="title">Buat Akun Baru</div>

            @if ($errors->any())
                <div class="error-message">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Nama Lengkap" class="input-box @error('name') input-error @enderror" value="{{ old('name') }}" required>
                @error('name')
                    <div class="error-message">{{ $message }}</div>
                @enderror

                <input type="email" name="email" placeholder="Email" class="input-box @error('email') input-error @enderror" value="{{ old('email') }}" required>
                @error('email')
                    <div class="error-message">{{ $message }}</div>
                @enderror

                <div class="password-wrapper">
                    <input type="password" name="password" id="password" placeholder="Password" class="input-box @error('password') input-error @enderror" required>
                    <img src="assets/show.png" class="toggle-password" onclick="togglePassword('password', this)">
                </div>
                @error('password')
                    <div class="error-message">{{ $message }}</div>
                @enderror

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

    <!-- Bottom Banner -->
    <div class="bottom-banner">
        <img src="assets/newbot.png" alt="Bottom Banner">
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