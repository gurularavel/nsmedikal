<?php

namespace App\Http\Middleware;

use Botble\Base\Facades\AdminHelper;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class SiteMaintenance
{
    public function handle(Request $request, Closure $next): Response
    {
        if (! config('app.site_maintenance')) {
            return $next($request);
        }

        // Admin paneli (login səhifəsi daxil) həmişə açıqdır, admin girişi etmiş istifadəçi saytı görür
        if (AdminHelper::isInAdmin(true) || Auth::guard('web')->check()) {
            return $next($request);
        }

        return response()
            ->view('maintenance', [], 503)
            ->header('Retry-After', 3600);
    }
}
