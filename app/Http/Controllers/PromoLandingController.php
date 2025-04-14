<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;

class PromoLandingController extends Controller
{
    public function index()
    {
        $promos = Promo::all(); // Mengambil semua data promo
        return view('landing_page.promo', compact('promos')); // Mengirimkan data ke view
    }
    
}
