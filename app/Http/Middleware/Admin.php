<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Admin
{
    public function handle($request, Closure $next,$guard = 'admin')
    {
        if (!Auth::guard($guard)->check()) {
            return redirect('/');
        }
        return $next($request);
    }
}
