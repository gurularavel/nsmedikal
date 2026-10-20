<?php

namespace App\Providers;

use App\Http\Middleware\SiteMaintenance;
use Botble\Base\Facades\DashboardMenu;
use Botble\Base\Forms\FieldOptions\OnOffFieldOption;
use Botble\Base\Forms\Fields\OnOffField;
use Botble\Base\Supports\DashboardMenuItem;
use Botble\Setting\Forms\GeneralSettingForm;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app['router']->pushMiddlewareToGroup('web', SiteMaintenance::class);

        // Admin → Settings → General: "Texniki işlər" səhifəsini bir kliklə aç/bağla
        GeneralSettingForm::extend(function (GeneralSettingForm $form): void {
            $form->add(
                'site_maintenance',
                OnOffField::class,
                OnOffFieldOption::make()
                    ->label('Texniki işlər rejimi')
                    ->value(SiteMaintenance::isEnabled())
                    ->helperText('Aktiv olduqda ziyarətçilər "texniki işlər görülür" səhifəsini görür. Admin paneldə giriş etmiş istifadəçilər saytı normal görür.')
            );
        });

        // Sol menyuda Settings-in üstündə birbaşa keçid
        DashboardMenu::default()->beforeRetrieving(function (): void {
            DashboardMenu::make()
                ->registerItem(
                    DashboardMenuItem::make()
                        ->id('cms-site-maintenance')
                        ->priority(9998)
                        ->name('Texniki işlər')
                        ->icon('ti ti-tool')
                        ->route('settings.general')
                        ->permission('settings.options')
                );
        });
    }
}
