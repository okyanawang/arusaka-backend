<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user() &&  (Auth::user()->role == 'ADMIN' || Auth::user()->role == 'SUPERADMIN')) {
            return $next($request);
        }
        return response()->json([
            'message' => 'You do not have access to this resource.'
        ], 403);
    }
}
