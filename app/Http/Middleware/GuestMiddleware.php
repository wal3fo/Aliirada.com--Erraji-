<?php

namespace App\Http\Middleware;

use App;
use Closure;

class GuestMiddleware
{
    public function handle($request, Closure $next)
    {
        $language = session('Nexalang', 'en');
        App::setLocale($language);

        if (session('UserLogged') && $request->route()->getName() === 'admin.login') {
            return redirect()->route('admin.lists');
        }

        return $next($request);
    }
}
