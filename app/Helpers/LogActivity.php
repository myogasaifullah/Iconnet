<?php

namespace App\Helpers;

use App\Models\Log;
use Illuminate\Support\Facades\Auth;

class LogActivity
{
    public static function addToLog($activity)
    {
        dd('LogActivity called!');

        Log::create([
            'activity' => $activity,
            'user' => Auth::check() ? Auth::user()->name : 'Guest',
            'created_at' => now(),
        ]);
    }
}
