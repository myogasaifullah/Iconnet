<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Paket;
use App\Models\Promo;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class LandingController extends Controller
{

    public function showLatestForLandingPage()
    {
        $latestPromo = Promo::latest()->first();
        $banners = Banner::latest()->get(); // ambil semua banner
        $pakets = Paket::all(); // tambahkan ini

        return view('landing_page.index', compact('latestPromo', 'banners', 'pakets'));
    }
}
