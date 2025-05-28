<?php

namespace App\Http\Middleware;

use Closure;

class GuestMiddleware
{
    public function handle($request, Closure $next)
    {
        if (session('UserLogged')) {
            return redirect()->route('dashboard');
        }

        return $next($request);
    }
}
