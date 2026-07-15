<?php

namespace App\Composers;

use App\Models\Language;
use Illuminate\View\View;

class LocalesComposer
{
    public function compose(View $view): void
    {
        $view->with('locales', $this->getLocales());
    }

    private function getLocales(): array
    {
        return Language::query()
            ->where('status', 1)
            ->pluck('locale')
            ->toArray();
    }
}
