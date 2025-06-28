<?php

namespace App\Http\Middleware;

use App;
use Closure;

class GuestMiddleware
{
    public function handle($request, Closure $next)
    {
        if (session('UserLogged')) {
            return redirect()->route('dashboard');
        }

        $language = session('Nexalang', 'en');
        App::setLocale($language);

        return $next($request);
    }
}
