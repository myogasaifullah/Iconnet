<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PromoLandingController;
use App\Http\Controllers\VisitController;

Route::post('/track-visit', [DashboardController::class, 'trackVisit'])->name('track.visit');
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin_page.dashboard');
    });
});

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
Route::get('/', [LandingController::class, 'showLatestForLandingPage'])->name('welcome');
Route::get('/index', [LandingController::class, 'showLatestForLandingPage'])->name('index');
Route::get('/syarat', fn() => view('landing_page/syarat'))->name('syarat');
Route::get('/kebijakan', fn() => view('landing_page/kebijakan'))->name('kebijakan');
Route::get('/pembayaran', fn() => view('landing_page/pembayaran'))->name('pembayaran');
Route::get('/kontak', fn() => view('landing_page/kontak'))->name('kontak');
Route::get('/myicon', fn() => view('landing_page/myicon'))->name('myicon');
Route::get('/tentang', fn() => view('landing_page/tentang'))->name('tentang');
Route::get('/keunggulan', fn() => view('landing_page/keunggulan'))->name('keunggulan');
Route::get('/jangkauan', fn() => view('landing_page/jangkauan'))->name('jangkauan');
// Route::get('/promo', fn() => view('landing_page/promo'))->name('promo');
Route::get('/promo', [PromoLandingController::class, 'index'])->name('promo.landing');
Route::get('/', [LandingController::class, 'showLatestForLandingPage'])->name('landing.index');
// Route::get('/paket', fn() => view('landing_page/paket'))->name('paket');
Route::get('/paket', [PaketController::class, 'landingPage'])->name('paket.landing');

// Admin page
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Route::get('/dashboard', fn() => view('admin_page/dashboard'))->name('dashboard');
Route::get('/register', fn() => view('admin_page/register'))->name('register');
Route::get('/password', fn() => view('admin_page/password'))->name('password');
Route::get('/login', fn() => view('admin_page/login'))->name('login');
Route::get('/charts', fn() => view('admin_page/charts'))->name('charts');
Route::get('/tables', fn() => view('admin_page/tables'))->name('tables');
