<?php

use App\Models\Setting;
use Illuminate\Support\Facades\Route;

if (!function_exists('active_page')) {
    function active_page(string $pageRoute): bool
    {
        $currentRoute = Route::currentRouteName();
        $urls = explode('.', $currentRoute);
        return $pageRoute == $currentRoute || collect($urls)->contains($pageRoute);
    }
}

if (!function_exists('setting')) {
    function setting(string $keyword): ?string
    {
        return Setting::query()->where('key', $keyword)->first()?->value;
    }
}
