@extends('layout')

@section('content')

{{-- Judul Halaman --}}
<h2 class="page-title">Hubungi Kami</h2>
<p class="page-subtitle">Kami siap membantu Anda. Silakan hubungi kami melalui informasi di bawah atau kirimkan pesan melalui formulir.</p>

{{-- Kontainer Utama untuk Kontak --}}
<div class="contact-container">

    <!-- Kolom Informasi Kontak -->
    <div class="contact-info-card">
        <h3 class="card-title">Informasi Kontak</h3>
        <p class="card-intro">Anda dapat mengunjungi kami langsung atau menghubungi kami melalui telepon dan email pada jam kerja.</p>
        
        <ul class="contact-details">
            <li>
                <i class="fas fa-map-marker-alt"></i>
                <div>
                    <strong>Alamat</strong>
                    <span>Jl. Raya Karangtengah No. 1<br>Banjarnegara, Jawa Tengah 53412</span>
                </div>
            </li>
            <li>
                <i class="fas fa-phone-alt"></i>
                <div>
                    <strong>Telepon</strong>
                    <span>(0286) 123456</span>
                </div>
            </li>
            <li>
                <i class="fas fa-envelope"></i>
                <div>
                    <strong>Email</strong>
                    <span>kelurahan@karangtengah.go.id</span>
                </div>
            </li>
            <li>
                <i class="fas fa-clock"></i>
                <div>
                    <strong>Jam Pelayanan</strong>
                    <span>Senin - Jumat: 08:00 - 15:00 WIB</span>
                </div>
            </li>
        </ul>
    </div>

    <!-- Kolom Formulir Kontak -->
    <div class="contact-form-card">
        <h3 class="card-title">Kirim Pesan</h3>
        <form method="POST" action="#">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
            </div>
            <div class="form-group">
                <label for="email">Alamat Email</label>
                <input type="email" id="email" name="email" placeholder="contoh: email@anda.com" required>
            </div>
            <div class="form-group">
                <label for="pesan">Pesan Anda</label>
                <textarea id="pesan" name="pesan" rows="6" placeholder="Tuliskan pertanyaan atau pesan Anda di sini..." required></textarea>
            </div>
            <button type="submit" class="submit-button">
                Kirim Pesan
            </button>
        </form>
    </div>

</div>
@endsection