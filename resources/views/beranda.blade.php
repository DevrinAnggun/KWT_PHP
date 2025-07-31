@extends('layout')

@section('content')
<h2>Selamat Datang di Website Resmi Kelurahan Karangtengah</h2>

<!-- Gambar di atas -->
<img src="{{ asset('img/kelurahan.jpg') }}" alt="Foto Kelurahan Karangtengah" style="max-width: 100%; height: auto; margin: 20px 0; border-radius: 8px;">

<p>Website ini merupakan media informasi dan pelayanan online untuk masyarakat Kelurahan Karangtengah, Kecamatan Banjarnegara. Kami hadir untuk memberikan kemudahan akses terhadap berbagai informasi, pelayanan surat menyurat, data penduduk, dan kontak kelurahan.</p>

<hr>

<h3>Tentang Kelurahan Karangtengah</h3>
<p>Kelurahan Karangtengah adalah salah satu kelurahan yang aktif dan dinamis di wilayah Kabupaten Banjarnegara. Kami berkomitmen untuk memberikan pelayanan terbaik kepada warga serta mendorong partisipasi masyarakat dalam pembangunan daerah.</p>

<hr>

<h3>Layanan Unggulan</h3>
<ul>
    <li><strong>Layanan Surat Online:</strong> Pengajuan surat keterangan domisili, usaha, tidak mampu, dan lainnya dapat dilakukan langsung dari website ini.</li>
    <li><strong>Data Penduduk:</strong> Akses informasi jumlah warga, RT/RW, dan data demografis lainnya.</li>
    <li><strong>Kotak Saran & Kontak:</strong> Hubungi perangkat kelurahan secara langsung melalui formulir atau kontak yang tersedia.</li>
</ul>

<hr>

<h3>Berita Terkini</h3>
<p><em>Segera hadir!</em> Halaman berita dan dokumentasi kegiatan masyarakat Karangtengah akan segera tersedia di website ini.</p>

<hr>

<h3>Hubungi Kami</h3>
<p>Silakan kunjungi <a href="{{ route('kontak') }}">halaman kontak</a> jika Anda memiliki pertanyaan atau membutuhkan bantuan lebih lanjut.</p>
@endsection
