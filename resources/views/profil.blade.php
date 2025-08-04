@extends('layout')

@section('content')

{{-- Kotak untuk Judul Utama dan Deskripsi Awal --}}
<div class="section-box">
    <h2>Profil Kelurahan Karangtengah</h2>
    <p>Kelurahan Karangtengah merupakan salah satu kelurahan yang berada di wilayah administratif Kecamatan Banjarnegara, Kabupaten Banjarnegara, Provinsi Jawa Tengah. Kelurahan ini memiliki peran penting dalam penyelenggaraan pelayanan publik dan pembangunan masyarakat di tingkat kelurahan.</p>
</div>

{{-- Kotak untuk Letak Geografis --}}
<div class="section-box">
    <h3>Letak Geografis</h3>
    {{-- Style pada gambar diubah agar responsif di dalam kotak --}}
    <img src="{{ asset('img/peta.png') }}" alt="Peta Karangtengah" style="max-width: 100%; height: auto; border-radius: 8px; margin-bottom: 15px;">
    <p>Kelurahan Karangtengah terletak di wilayah strategis yang mudah dijangkau dari pusat kota Banjarnegara. Wilayahnya berbatasan langsung dengan beberapa kelurahan dan desa lain di Kecamatan Banjarnegara.</p>
</div>

{{-- Kotak untuk Visi dan Misi (digabung agar lebih rapi) --}}
<div class="section-box">
    <h3>Visi</h3>
    <p>Menjadi kelurahan yang maju, mandiri, dan sejahtera dengan pelayanan publik yang cepat, transparan, dan akuntabel.</p>
    
    <h3 style="margin-top: 25px;">Misi</h3>
    <ul>
        <li>Meningkatkan kualitas pelayanan kepada masyarakat.</li>
        <li>Mendorong partisipasi aktif warga dalam pembangunan kelurahan.</li>
        <li>Mengembangkan potensi ekonomi lokal dan pemberdayaan masyarakat.</li>
        <li>Mewujudkan tata kelola pemerintahan yang baik dan bersih.</li>
    </ul>
</div>

{{-- Kotak untuk Struktur Pemerintahan --}}
<div class="section-box">
    <h3>Struktur Pemerintahan</h3>
    <p>Struktur pemerintahan di Kelurahan Karangtengah dipimpin oleh seorang Lurah yang dibantu oleh Sekretaris Kelurahan, Kepala Seksi Pemerintahan, Kepala Seksi Pelayanan, dan perangkat lainnya yang bertugas melayani kebutuhan administratif warga.</p>
</div>

{{-- Kotak untuk Demografi --}}
<div class="section-box">
    <h3>Demografi</h3>
    <p>Kelurahan Karangtengah terdiri dari beberapa RT dan RW dengan jumlah penduduk yang terus berkembang dari tahun ke tahun. Mayoritas penduduk bermata pencaharian sebagai petani, pedagang, dan pegawai negeri/swasta.</p>
</div>

@endsection