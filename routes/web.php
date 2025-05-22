<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;
//

Route::get('/', function () {
    return view('welcome');
});


Route::get('halo', function () {
    return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('satu', function () {
    return view('pertama');
});

Route::get('boostrap1', function () {
    return view('boostrap1');
});

Route::get('ets', function () {
    return view('ets');
});

Route::get('js1', function () {
    return view('js1');
});

Route::get('linktree', function () {
    return view('linktree');
});

Route::get('template', function () {
    return view('template');
});

Route::get('validasi1', function () {
    return view('validasi1');
});

Route::get('pertemuan4', function () {
    return view('pertemuan4');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('welcome', [DosenController::class, 'welcome']);

Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);


// route blog
Route::get('/blog',[BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);
