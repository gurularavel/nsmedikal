<?php

declare(strict_types=1);

namespace App\Composers;

use App\Models\Language;
use Illuminate\View\View;

class ActiveLanguageComposer
{
    public function compose(View $view): void
    {
        $activeLanguage = Language::query()
            ->where('locale', app()->getLocale())
            ->where('status', 1)
            ->first(['name', 'locale', 'image']);

        $view->with('activeLanguage', $activeLanguage);
    }
}
