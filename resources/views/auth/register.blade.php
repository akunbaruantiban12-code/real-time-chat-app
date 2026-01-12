<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register | Wchat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" sizes="32x32" href="/storage/images/favicon.png">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: 'Instrument Sans', sans-serif;
            background: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .auth-container {
            width: 900px;
            max-width: 95%;
            min-height: 520px;
            background: #ffffff;
            display: flex;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .auth-left {
            flex: 1;
            padding: 48px;
        }

        .auth-left h2 {
            margin: 0 0 12px;
            font-size: 28px;
            font-weight: 600;
        }

        /* Tombol kembali */
        .btn-back {
            display: inline-block;
            margin-bottom: 20px;
            font-size: 14px;
            color: #2180F3;
            text-decoration: none;
            font-weight: 600;
        }
        .btn-back:hover {
            text-decoration: underline;
        }

        .divider-text {
            font-size: 13px;
            color: #777;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 12px 14px;
            margin-bottom: 14px;
            border-radius: 6px;
            border: 1px solid #ddd;
            font-size: 14px;
        }

        .btn-register {
            width: 100%;
            padding: 12px;
            background: #2180F3;
            border: none;
            border-radius: 999px;
            color: #fff;
            font-weight: 600;
            cursor: pointer;
            letter-spacing: 1px;
        }

        /* RIGHT */
        .auth-right {
            flex: 1;
            background: #2180F3;
            color: #ffffff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 48px;
            text-align: center;
        }

        .auth-right h2 {
            font-size: 30px;
            margin-bottom: 12px;
        }

        .auth-right p {
            font-size: 14px;
            opacity: 0.9;
            margin-bottom: 24px;
        }

        .btn-login {
            padding: 12px 36px;
            border-radius: 999px;
            border: 1px solid #fff;
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            letter-spacing: 1px;
        }

        @media (max-width: 768px) {
            .auth-container {
                flex-direction: column;
            }

            .auth-right {
                order: -1;
            }
        }
    </style>
</head>
<body>

<div class="auth-container">

    <!-- LEFT -->
    <div class="auth-left">

        <!-- TOMBOL KEMBALI -->
        <a href="{{ url('/') }}" class="btn-back">← Kembali</a>

        <h2>Buat Akun</h2>

        <div class="divider-text">atau daftar menggunakan email</div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <input type="text" name="name" placeholder="Nama Lengkap" required autofocus>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required>

            <button class="btn-register" type="submit">
                SIGN UP
            </button>
        </form>
    </div>

    <!-- RIGHT -->
    <div class="auth-right">
        <h2>Selamat Datang!</h2>
        <p>
            Sudah punya akun?<br>
            silakan login untuk melanjutkan
        </p>
        <a href="{{ route('login') }}" class="btn-login">
            SIGN IN
        </a>
    </div>

</div>

</body>
</html>
