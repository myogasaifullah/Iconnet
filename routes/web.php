<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing page/index');
})->name('welcome');

Route::get('/index', function () {
    return view('landing page/index');
})->name('index');

Route::get('/syarat', function () {
    return view('landing page/syarat');
})->name('syarat');

Route::get('/kontak', function () {
    return view('landing page/kontak');
})->name('kontak');

Route::get('/tentang', function () {
    return view('landing page/tentang');
})->name('tentang');

Route::get('/keunggulan', function () {
    return view('landing page/keunggulan');
})->name('keunggulan');

Route::get('/promo', function () {
    return view('landing page/promo');
})->name('promo');

Route::get('/paket', function () {
    return view('landing page/paket');
})->name('paket');

Route::get('/dashboard', function () {
    return view('admin page/dashboard');
})->name('dashboard');

Route::get('/register', function () {
    return view('admin page/register');
})->name('register');

Route::get('/password', function () {
    return view('admin page/password');
})->name('password');

Route::get('/login', function () {
    return view('admin page/login');
})->name('login');

Route::get('/charts', function () {
    return view('admin page/charts');
})->name('charts');

Route::get('/tables', function () {
    return view('admin page/tables');
})->name('tables');
