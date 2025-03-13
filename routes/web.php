<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruKaryawanController;

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

Route::get('/guru-karyawan', [GuruKaryawanController::class, 'index']);