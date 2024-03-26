<?php

namespace App\Http\Middleware;

use App\Models\LocationTrackers;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackerMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // LocationTrackers::create([
        //     'ip' => $request->ip(),
        //     'url' => $request->url(),
        //     'method' => $request->method(),
        //     'user_agent' => $request->userAgent(),
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ])

        return $next($request);
    }
}
