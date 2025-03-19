<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/syarat', function () {
    return view('syarat');
})->name('syarat');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/keunggulan', function () {
    return view('keunggulan');
})->name('keunggulan');

Route::get('/promo', function () {
    return view('promo');
})->name('promo');

Route::get('/paket', function () {
    return view('paket');
})->name('paket');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/password', function () {
    return view('password');
})->name('password');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/charts', function () {
    return view('charts');
})->name('charts');

Route::get('/tables', function () {
    return view('tables');
})->name('tables');
