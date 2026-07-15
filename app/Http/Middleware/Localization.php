<?php

namespace App\Http\Middleware;

use App\Models\Language;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Localization
{
    private function getDefaultLocale(): string
    {
        return config('translatable.locale', 'az');
    }

    private function getDefaultLocales(): array
    {
        return config('translatable.locales', ['az', 'en', 'ru']);
    }

    private function getLocale(): string
    {
        $language = Language::query()->where([
            'default' => 1,
            'status' => 1,
        ]);

        return $language->exists() ? $language->value('locale') : $this->getDefaultLocale();
    }

    private function getLocales(): array
    {
        $language = Language::query()->where([
            'status' => 1,
        ]);

        return $language->exists() ? $language->pluck('locale')->toArray() : $this->getDefaultLocales();
    }

    private function getLocaleParam(Request $request): ?string
    {
        return $request->route('locale');
    }

    private function isBackendRoute(Request $request): bool
    {
        return $request->routeIs('backend.*');
    }

    public function handle(Request $request, Closure $next): Response
    {
        if ($this->isBackendRoute($request)) {
            app()->setLocale($this->getDefaultLocale());

            return $next($request);
        }

        if (is_null($locale = $this->getLocaleParam($request))) {
            return to_route('frontend.home.index', [
                'locale' => $this->getLocale(),
            ]);
        }

        abort_unless(in_array($locale, $this->getLocales()), 404);

        app()->setlocale($locale);

        url()->defaults(['locale' => $locale]);

        return $next($request);
    }
}
