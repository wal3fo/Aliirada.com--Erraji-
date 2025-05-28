<?php

namespace App\Http\Middleware;

use Closure;

class StaffMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!session('UserLogged')) {
            return redirect()->route('sessions.signin');
        }

        if(!session('UserNexaJob')) {
            return redirect()->route('dashboard');
        }

        return $next($request);
    }
}
