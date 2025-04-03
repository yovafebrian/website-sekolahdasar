<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruKaryawanController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PrestasiController;

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/navbar', function () {
    return view('navbar');
});
Route::get('/profile', function () {
    return view('pages.profile');
});

Route::get('/tugas-daring', function () {
    return view('pages.tugas-daring');
});

Route::get('/guru-karyawan', function () {
    return view('pages.guru-karyawan');
});

Route::get('/kegiatan', function () {
    return view('pages.kegiatan');
});

Route::get('/kontak', function () {
    return view('pages.kontak');
});
Route::get('/prestasi', function () {
    return view('pages.prestasi');
});

Route::get('/guru-karyawan', [GuruKaryawanController::class, 'index']);
Route::get('/kegiatan', [KegiatanController::class, 'index']);
Route::get('/pengaduan', [PengaduanController::class, 'index'])->name('pengaduan.index');
Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');
Route::get('/profile', [PrestasiController::class, 'index'])->name('profile.index');
Route::get('/prestasi', [PrestasiController::class, 'index'])->name('prestasi');
Route::get('/prestasi/semua', [PrestasiController::class, 'semua'])->name('prestasi.semua');
