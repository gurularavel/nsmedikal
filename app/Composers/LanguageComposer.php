<?php

declare(strict_types=1);

namespace App\Composers;

use App\Models\Language;
use Illuminate\View\View;

class LanguageComposer
{
    public function compose(View $view): void
    {
        $languages = Language::query()
            ->where('status', Language::IS_ACTIVE)
            ->get(['name', 'locale', 'image']);

        $view->with('languages', $languages);
    }
}
