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
        <img src="assets/newtop.png" alt="Top Banner">
    </div>

    <!-- Reset Password Section -->
    <div class="reset-container">
        <div class="reset-wrapper">
            <img src="https://iconnetjabar.com/wp-content/uploads/2023/09/cropped-Favicon-Iconnet-1024x1024-1.png" alt="ICONNET Logo" class="logo">
            <div class="title">Pemulihan Password</div>
            <div class="text-muted">Masukkan alamat email Anda, kami akan mengirimkan link untuk mengatur ulang password Anda.</div>

            <form action="#" method="POST">
                <input type="email" name="email" placeholder="Alamat Email" class="input-box" required>
                <button type="submit" class="login-btn">Kirim Link Reset</button>
            </form>

            <div class="text-link">
                <a href="login">Kembali ke Login</a>
            </div>
        </div>
    </div>

    <!-- Banner Bawah -->
    <div class="bottom-banner">
        <img src="assets/newbot.png" alt="Bottom Banner">
    </div>
</body>

</html>
