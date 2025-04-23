<?php

namespace App\Http\Middleware;

use App\Models\Visit;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackVisits
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Skip tracking for admin pages and API routes
        if (!$request->is('admin*') && !$request->is('api*')) {
            Visit::create([
                'page' => $request->path(),
                'visited_at' => now()
            ]);
        }

        return $next($request);
    }
}
