<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kelurahan Karangtengah</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1;
            padding: 30px;
        }
        footer {
            background-color: #f0f0f0;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <header style="background-color: #2e8b57; color: white; padding: 20px; text-align: center;">
        <h1>Kelurahan Karangtengah</h1>
        <nav style="margin-top: 10px;">
            <a href="{{ route('beranda') }}" style="color: white; margin: 0 10px;">Beranda</a>
            <a href="{{ route('profil') }}" style="color: white; margin: 0 10px;">Profil</a>
            <a href="{{ route('layanan') }}" style="color: white; margin: 0 10px;">Layanan Surat</a>
            <a href="{{ route('penduduk') }}" style="color: white; margin: 0 10px;">Data Penduduk</a>
            <a href="{{ route('kontak') }}" style="color: white; margin: 0 10px;">Kontak</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
<footer style="background-color: #2e8b57; color: white; text-align: center; padding: 10px;">
    <p>&copy; 2025 Kelurahan Karangtengah</p>
</footer>

