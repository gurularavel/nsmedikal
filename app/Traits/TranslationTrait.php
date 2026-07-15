<?php

declare(strict_types=1);

namespace App\Traits;

use App\Models\Language;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

trait TranslationTrait
{
    public function writeTranslationsToFolder(): void
    {
        if ($this->languagesDoesNotExists()) {
            return;
        }

        $this->publishLangFolderIfMissing();

        collect($this->getActiveLocales())->each(function (string $locale): void {
            $this->createLocaleFolderIfMissing($locale);
            $this->createTranslationsFileIfMissing($locale);

            if (count($translations = $this->getTranslationsByLocale($locale)) == 0) {
                logger(count($translations));
                return;
            }

            logger(count($translations));
            $this->writeDataToLocaleFile($locale, $translations);
        });
    }

    private function createLocaleFolderIfMissing(string $locale): void
    {
        if (file_exists($folder = lang_path($locale))) {
            return;
        }

        mkdir($folder);
    }

    private function createTranslationsFileIfMissing(string $locale): void
    {
        if (file_exists($file = lang_path("{$locale}/translations.php"))) {
            return;
        }

        touch($file);
    }

    private function getActiveLocales(): array
    {
        return Language::query()
            ->where('status', 1)
            ->pluck('locale')
            ->toArray();
    }

    private function getTranslationsByLocale(string $locale): Collection
    {
        return DB::table('translations as t')
            ->join('translation_translations as tt', 't.id', 'tt.translation_id')
            ->where('tt.locale', $locale)
            ->oldest('t.key')
            ->pluck('tt.value', 't.key');
    }

    private function languagesDoesNotExists(): bool
    {
        return Language::query()
            ->where('status', 1)
            ->doesntExist();
    }

    private function publishLangFolderIfMissing(): void
    {
        if (file_exists(lang_path())) {
            return;
        }

        Artisan::call('lang:publish');
    }

    private function writeDataToLocaleFile(string $locale, Collection $translations): void
    {
        $file = "<?php \n\ndeclare(strict_types=1);\n\nreturn [\n\n";

        foreach ($translations as $key => $value) {
            $file .= "\t'{$key}' => '{$value}',\n";
        }

        $file .= "\n];\n";

        file_put_contents(lang_path("{$locale}/translations.php"), $file);
    }
}
