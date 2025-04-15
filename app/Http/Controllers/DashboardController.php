<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\LogActivity;
use App\Models\Visit;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Grafik kunjungan per hari 7 hari terakhir
        $visitData = Visit::selectRaw('DATE(visited_at) as date, COUNT(*) as total')
            ->where('visited_at', '>=', Carbon::now()->subDays(7))
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        // Data untuk bar chart (halaman yang paling banyak dikunjungi)
        $barData = Visit::selectRaw('page, COUNT(*) as total')
            ->groupBy('page')
            ->orderBy('total', 'desc')
            ->limit(5) // Limit to top 5 pages
            ->get();

        // Data log aktivitas
        $logs = Log::orderBy('created_at', 'desc')->limit(10)->get();

        return view('admin_page.dashboard', compact('visitData', 'barData', 'logs'));
    }
}
