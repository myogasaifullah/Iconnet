<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\BannerController;

Route::prefix('banner')->name('banner.')->group(function () {
    Route::get('/', [BannerController::class, 'index'])->name('index');
    Route::post('/', [BannerController::class, 'store'])->name('store');
    // Route::get('/{id}/edit', [BannerController::class, 'edit'])->name('edit');
    Route::put('/{id}', [BannerController::class, 'update'])->name('update');
    Route::delete('/{id}', [BannerController::class, 'destroy'])->name('destroy');
});

// Route untuk halaman admin promo
Route::prefix('produk_promo')->name('promo.')->group(function () {
    Route::get('/', [PromoController::class, 'index'])->name('index');
    Route::post('/', [PromoController::class, 'store'])->name('store');
    Route::put('/{promo}', [PromoController::class, 'update'])->name('update');
    Route::delete('/{promo}', [PromoController::class, 'destroy'])->name('destroy');
});

// Route untuk halaman admin paket
Route::prefix('produk_paket')->name('produk_paket.')->group(function () {
    Route::get('/', [PaketController::class, 'index'])->name('index');
    Route::get('/create', [PaketController::class, 'create'])->name('create');
    Route::post('/', [PaketController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [PaketController::class, 'edit'])->name('edit');
    Route::put('/{id}', [PaketController::class, 'update'])->name('update');
    Route::delete('/{id}', [PaketController::class, 'destroy'])->name('destroy');
});

// Route static (landing page)
Route::get('/', fn() => view('landing_page/index'))->name('welcome');
Route::get('/index', fn() => view('landing_page/index'))->name('index');
Route::get('/syarat', fn() => view('landing_page/syarat'))->name('syarat');
Route::get('/kontak', fn() => view('landing_page/kontak'))->name('kontak');
Route::get('/tentang', fn() => view('landing_page/tentang'))->name('tentang');
Route::get('/keunggulan', fn() => view('landing_page/keunggulan'))->name('keunggulan');
Route::get('/promo', fn() => view('landing_page/promo'))->name('promo');
Route::get('/paket', fn() => view('landing_page/paket'))->name('paket');

// Admin page
Route::get('/dashboard', fn() => view('admin_page/dashboard'))->name('dashboard');
Route::get('/register', fn() => view('admin_page/register'))->name('register');
Route::get('/password', fn() => view('admin_page/password'))->name('password');
Route::get('/login', fn() => view('admin_page/login'))->name('login');
Route::get('/charts', fn() => view('admin_page/charts'))->name('charts');
Route::get('/tables', fn() => view('admin_page/tables'))->name('tables');
