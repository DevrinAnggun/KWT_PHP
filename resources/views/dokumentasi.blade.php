@extends('layout')

@section('content')
<h2 style="text-align: center;">Dokumentasi Kegiatan</h2>

<div class="galeri">
    {{-- Daftar kegiatan --}}
    @php
        $kegiatan = [
            ['img' => 'kegiatan.jpg', 'judul' => 'Gotong Royong Warga', 'deskripsi' => 'Warga RT 01 bersama-sama membersihkan lingkungan dan selokan sekitar.'],
            ['img' => 'kegiatan.jpg', 'judul' => 'Pembagian Sembako', 'deskripsi' => 'Kelurahan membagikan bantuan sembako kepada warga yang membutuhkan.'],
            ['img' => 'kegiatan.jpg', 'judul' => 'Posyandu Balita', 'deskripsi' => 'Kegiatan rutin pemeriksaan balita dan penyuluhan gizi oleh kader kesehatan.'],
        ];
    @endphp

    {{-- Loop kegiatan --}}
    @foreach ($kegiatan as $index => $item)
    <div class="galeri-item" data-bs-toggle="modal" data-bs-target="#modal{{ $index }}">
        <img src="{{ asset('img/' . $item['img']) }}" alt="{{ $item['judul'] }}">
        <p class="judul-kegiatan">{{ $item['judul'] }}</p>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal{{ $index }}" tabindex="-1" aria-labelledby="modalLabel{{ $index }}" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header bg-success text-white">
            <h5 class="modal-title" id="modalLabel{{ $index }}">{{ $item['judul'] }}</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Tutup"></button>
          </div>
          <div class="modal-body">
            <img src="{{ asset('img/' . $item['img']) }}" class="img-fluid mb-3 rounded" alt="{{ $item['judul'] }}">
            <p style="font-size: 1.1rem;">{{ $item['deskripsi'] }}</p>
          </div>
        </div>
      </div>
    </div>
    @endforeach
</div>
@endsection
