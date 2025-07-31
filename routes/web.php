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
