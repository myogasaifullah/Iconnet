<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use App\Models\Log;
use App\Models\Paket;
use App\Models\Promo;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $visitData = $this->getVisitDataLast7Days();
        $barData = $this->getTop5Pages();
        $logs = Log::orderBy('created_at', 'desc')->limit(10)->get();
    
        $totalKunjungan = Visit::count();
        $totalPaket = Paket::count();
        $totalPromo = Promo::count();
    
        $pageTerendah = Visit::select('page', DB::raw('COUNT(*) as total'))
            ->groupBy('page')
            ->orderBy('total', 'asc')
            ->limit(1)
            ->first();
    
        return view('admin_page.dashboard', compact(
            'visitData',
            'barData',
            'logs',
            'totalKunjungan',
            'totalPaket',
            'totalPromo',
            'pageTerendah'
        ));
    }
    

    protected function getVisitDataLast7Days()
    {
        $startDate = Carbon::now()->subDays(6)->startOfDay(); // 6 hari + hari ini = 7 hari
        $endDate = Carbon::now()->endOfDay();

        $visits = Visit::select(
            DB::raw('DATE(visited_at) as date'),
            DB::raw('COUNT(*) as total')
        )
            ->whereBetween('visited_at', [$startDate, $endDate])
            ->groupBy('date')
            ->orderBy('date')
            ->get()
            ->keyBy('date');

        $dateRange = collect();
        for ($date = $startDate->copy(); $date->lte($endDate); $date->addDay()) {
            $dateString = $date->format('Y-m-d');
            $dateRange->push([
                'date' => $dateString,
                'total' => $visits->has($dateString) ? $visits[$dateString]->total : 0
            ]);
        }

        return $dateRange;
    }

    protected function getTop5Pages()
    {
        return Visit::select('page', DB::raw('COUNT(*) as total'))
            ->groupBy('page')
            ->orderByDesc('total')
            ->limit(5)
            ->get();
    }

    public function trackVisit(Request $request)
    {
        $request->validate([
            'page' => 'required|string'
        ]);

        Visit::create([
            'page' => $request->page,
            'visited_at' => now(),
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent()
        ]);

        return response()->json(['success' => true]);
    }
}
