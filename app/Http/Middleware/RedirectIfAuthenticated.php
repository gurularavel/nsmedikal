<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next, ?string $guard = null): Response
    {
        if (is_null($guard) && auth()->check()) {
            return to_route('backend.dashboard');
        }

        return $next($request);
    }
}
