<!DOCTYPE html>
<html lang="id">
<head>
    <!-- Bootstrap 5 CSS & JS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
    <header class="main-header">
    <div class="header-container">
        
        <!-- Kiri: Logo dan Judul digabung dalam satu link -->
        <a href="{{ route('beranda') }}" class="header-logo-title">
            <!-- Ganti 'logo.png' dengan nama file logo Anda jika berbeda -->
            <img src="{{ asset('img/logo.png') }}" alt="Logo Kelurahan" class="header-logo">
            <h1 class="header-title">Kelurahan Karangtengah</h1>
        </a>

        <!-- Kanan: Navigasi -->
<nav class="main-nav">
    <a href="{{ route('beranda') }}">Beranda</a>
    <a href="{{ route('profil') }}">Profil</a>
    <a href="{{ route('layanan') }}">Layanan Surat</a>
    <a href="{{ route('penduduk') }}">Data Penduduk</a>
    <a href="{{ route('kontak') }}">Kontak</a>
    <a href="{{ route('dokumentasi') }}">Dokumentasi</a> {{-- ✅ Tambahan ini --}}
</nav>


    </div>
</header>

    <main>
        @yield('content')
    </main>
<footer style="background-color: #2e8b57; color: white; text-align: center; padding: 10px;">
    <p>&copy; 2025 Kelurahan Karangtengah</p>
</footer>

