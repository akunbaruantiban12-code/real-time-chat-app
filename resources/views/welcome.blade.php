<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

        
    <link rel="icon" type="image/png" sizes="32x32" href="/storage/images/favicon.png">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <style>
        body {
            margin: 0;
            font-family: 'Instrument Sans', sans-serif;
            color: #ffffff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        body.bg {
            background-image: url("/storage/images/k1.jpeg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        @media (min-width: 769px) {
            body.bg {
                background-attachment: fixed;
            }
        }

        @media (max-width: 768px) {
            body.bg {
                background-attachment: scroll;
                background-position: center top;
            }
        }

        .bg-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.45);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            z-index: 0;
        }

        header,
        main {
            position: relative;
            z-index: 1;
        }

       
        header {
            background: #2180F3;
            padding: 25px 32px;
        }

        nav {
            max-width: 1100px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .nav-left {
            display: flex;
            align-items: center;
            gap: 10px;
            background: transparent;
            padding: 0;
        }

        .nav-left img {
            height: 34px;
            width: auto;
            background: transparent;
            display: block;
            mix-blend-mode: multiply; 
        }

        .nav-left span {
            font-weight: 600;
            font-size: 16px;
            color: #ffffff;
        }

        .nav-right {
            display: flex;
            gap: 12px;
        }

        nav a {
            color: #ffffff;
            text-decoration: none;
            font-size: 14px;
            padding: 6px 18px;
            border-radius: 4px;
            transition: 0.2s;
        }

        .btn-login {
            background: #1EBE5D;
        }

        .btn-login:hover {
            background: #17a94f;
        }

        .btn-register {
            background: #ffffff;
            color: #25D366;
            font-weight: 500;
        }

        .btn-register:hover {
            background: #f0fdf4;
        }

        main {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 24px;
        }

        h1 {
            font-size: 26px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .btn-primary {
            background: #2180F3;
            color: #fff;
            border: none;
            padding: 12px 44px;
            border-radius: 6px;
            font-size: 14px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background: #2180F3;
        }

        .divider {
            width: 280px;
            height: 1px;
            background: rgba(255,255,255,0.3);
            margin: 36px 0 18px;
        }

        .footer-text {
            font-size: 14px;
            color: #e5e5e5;
        }

        .footer-text a {
            color: #2180F3;
            font-weight: 500;
        }
    </style>
</head>

<body class="bg">
    <div class="bg-overlay"></div>

    <header>
        @if (Route::has('login'))
            <nav>
                <div class="nav-left">
                    {{-- <img src="/storage/images/logo.svg" alt="Logo"> --}}
                    <span></span>
                </div>

                <div class="nav-right">
                    @auth
                        {{-- <a href="{{ url('/dashboard') }}">Dashboard</a> --}}
                    @else
                        {{-- <a href="{{ route('login') }}" class="btn-login">Log in</a> --}}

                        @if (Route::has('register'))
                            {{-- <a href="{{ route('register') }}" class="btn-register">Register</a> --}}
                        @endif
                    @endauth
                </div>
            </nav>
        @endif
    </header>

    <main>
        <h1>Buka Wchat</h1>

        <a href="{{ route('login') }}" style="text-decoration: none;">
            <button class="btn-primary">
                CHAT
            </button>
        </a>

        <div class="divider"></div>

        <div class="footer-text">
            Belum menggunakan Wchat?
            <a href="{{ route('login') }}">Gunakan Sekarang</a>
        </div>
    </main>

</body>
</html>
