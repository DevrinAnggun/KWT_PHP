<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
})->name('beranda');

Route::get('/profil', function () {
    return view('profil');
})->name('profil');

Route::get('/layanan-surat', function () {
    return view('layanan');
})->name('layanan');

Route::get('/data-penduduk', function () {
    return view('penduduk');
})->name('penduduk');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/layanan/{jenis}/buat', function($jenis) {
    return view('layanan.buat', ['jenis' => ucfirst(str_replace('_', ' ', $jenis))]);
});

Route::get('/layanan/{jenis}/syarat', function($jenis) {
    return view('layanan.syarat', ['jenis' => ucfirst(str_replace('_', ' ', $jenis))]);
});

Route::get('/layanan/{jenis}/buat', function($jenis) {
    return view('layanan.buat', ['jenis' => ucfirst(str_replace('_', ' ', $jenis))]);
});

Route::get('/layanan/{slug}/buat', [LayananController::class, 'buat']);
Route::get('/layanan/{slug}/syarat', [LayananController::class, 'syarat']);

Route::get('/layanan/{jenis}/buat', function($jenis) {
    return view('layanan.buat_surat', ['jenis' => ucfirst(str_replace('_', ' ', $jenis))]);
});

use App\Http\Controllers\LayananController;
Route::get('/layanan/{jenis}/buat', [LayananController::class, 'buatSurat']);
