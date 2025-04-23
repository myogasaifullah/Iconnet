<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    public function trackVisit(Request $request)
    {
        $page = $request->input('page');
        Visit::create([
            'page' => $page,
            'visited_at' => now()
        ]);

        return response()->json(['success' => true]);
    }

    public function store(Request $request)
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
