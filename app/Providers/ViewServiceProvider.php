<?php

namespace App\Providers;

use App\Composers\ActiveLanguageComposer;
use App\Composers\CompanyCategoryComposer;
use App\Composers\LanguageComposer;
use App\Composers\LocalesComposer;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        view()->composer('backend/*', LocalesComposer::class);
        view()->composer('frontend/*', CompanyCategoryComposer::class);
        view()->composer('frontend/*', LanguageComposer::class);
        view()->composer('frontend/*', ActiveLanguageComposer::class);
    }
}
