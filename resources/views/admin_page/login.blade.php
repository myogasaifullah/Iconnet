<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        /* login */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #e0f2fe, #ffffff);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            background-color: white;
            width: 90%;
            max-width: 1000px;
            display: flex;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .left-section {
            flex: 1;
            background: #f0f8ff;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .left-section .illustration {
            width: 80%;
            max-width: 300px;
            margin-bottom: 20px;
        }

        .left-section h1 {
            font-size: 32px;
            color: #0d6efd;
            margin-bottom: 10px;
        }

        .left-section p {
            color: #555;
            font-size: 16px;
        }

        .right-section {
            flex: 1;
            padding: 50px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .right-section h2 {
            font-size: 24px;
            color: #0d6efd;
            margin-bottom: 30px;
        }

        .input-box {
            width: 100%;
            padding: 14px 16px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 12px;
            font-size: 16px;
        }

        .forgot-link {
            font-size: 14px;
            color: #0d6efd;
            text-decoration: none;
            margin-bottom: 20px;
            display: inline-block;
        }

        .login-btn {
            width: 100%;
            padding: 14px;
            background-color: #0d6efd;
            border: none;
            border-radius: 12px;
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .login-btn:hover {
            background-color: #084298;
        }

        .create-account {
            display: block;
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
            color: #0d6efd;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="left-section">
            <img src="assets/login.png" alt="Welcome Illustration" class="illustration">
            <h1>Welcome</h1>
            <p>Log in to access your account and explore our services</p>
        </div>
        <div class="right-section">
            <h2>User Login</h2>
            <form>
                <input type="text" placeholder="Username" class="input-box" required>
                <input type="password" placeholder="Password" class="input-box" required>
                <a href="#" class="forgot-link">Forgot Password?</a>
                <button type="submit" class="login-btn">Login</button>
                <a href="register.html" class="create-account">Create Account</a>
            </form>
        </div>
    </div>
</body>

</html>