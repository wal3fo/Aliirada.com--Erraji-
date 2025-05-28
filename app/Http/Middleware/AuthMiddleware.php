<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class AuthMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!session('UserLogged')) {
            return redirect()->route('sessions.signin');
        }

        $language = session('Nexalang', 'en');
        App::setLocale($language);

        return $next($request);
    }
}
