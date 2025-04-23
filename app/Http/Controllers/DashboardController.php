<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use App\Models\Log;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Data untuk area chart (kunjungan 7 hari terakhir)
        $visitData = Visit::selectRaw('DATE(visited_at) as date, COUNT(*) as total')
            ->where('visited_at', '>=', Carbon::now()->subDays(7))
            ->groupBy('date')
            ->orderBy('date')
            ->get()
            ->pluck('total', 'date');

        // Data untuk bar chart (5 halaman populer)
        $barData = Visit::selectRaw('page, COUNT(*) as total')
            ->groupBy('page')
            ->orderBy('total', 'desc')
            ->limit(5)
            ->get()
            ->pluck('total', 'page');

        // Data log aktivitas
        $logs = Log::orderBy('created_at', 'desc')->limit(10)->get();

        return view('admin_page.dashboard', compact('visitData', 'barData', 'logs'));
    }

    public function trackVisit(Request $request)
{
    $request->validate([
        'page' => 'required|string'
    ]);

    Visit::create([
        'page' => $request->page,
        'visited_at' => now()
    ]);

    return response()->json(['success' => true]);
}
}