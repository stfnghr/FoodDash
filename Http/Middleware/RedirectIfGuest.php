<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfGuest
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect('/landing');
        }

        return $next($request);
    }
}
