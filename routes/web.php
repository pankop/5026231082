<?php

use Illuminate\Support\Facades\Route;
//

Route::get('/', function () {
    return view('frontend');
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
