<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel pi>www.malasngoding.com</i>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('pertemuan5', function () {
    return view('pertemuan5');
});

Route::get('index', function () {
    return view('index');
});

Route::get('linktree', function () {
    return view('linktree');
});

Route::get('5026241021', function () {
    return view('5026241021');
});

Route::get('contoh', function () {
    return view('contoh');
});

Route::get('intro', function () {
    return view('intro');
});


Route::get('news', function () {
    return view('news');
});


Route::get('responsive', function () {
    return view('responsive');
});

Route::get('dosen', [DosenController::class, 'inde']);

Route::get('biodata', [DosenController::class, 'biodata']);
