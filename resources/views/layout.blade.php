<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kelurahan Karangtengah</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Kelurahan Karangtengah</h1>
        <nav>
            <a href="{{ route('beranda') }}">Beranda</a> |
            <a href="{{ route('profil') }}">Profil</a> |
            <a href="{{ route('layanan') }}">Layanan Surat</a> |
            <a href="{{ route('penduduk') }}">Data Penduduk</a> |
            <a href="{{ route('kontak') }}">Kontak</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; 2025 Kelurahan Karangtengah</p>
    </footer>
</body>
</html>
