<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

Route::get('/nama/{yessa}', function ($yessa) {
    return 'Nama saya: ' . $yessa;
});

Route::get('/nim/{param1?}', function ($param1 = '2557301133') {
    return 'NIM saya: ' . $param1;
});

Route::get('/mahasiswa/detail', function () {
    return '<h1>Selamat Datang!</h1><h2>Ini halaman Detail Mahasiswa</h2>';
});

Route::get('/mahasiswa/profile', function () {
    return '<h1>Selamat Datang!</h1><h2>Ini halaman Profil Mahasiswa</h2>';
});
    