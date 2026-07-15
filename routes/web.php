<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Məhsulların tərcümə scripti (müvəqqəti)
|--------------------------------------------------------------------------
| Mənbə: ec_products (az — default dil)
| Hədəf: ec_products_translations (en_US, ru_RU) + slugs_translations (link)
|
| İstifadə (brauzerdə):
|   https://nsmedikal.test/translate-products?token=nsmed2026
|
| Parametrlər:
|   token=nsmed2026   — mütləqdir
|   dry=1             — yazmadan önizləmə (nə tərcümə olunacağını göstərir)
|   force=1           — dolu tərcümələrin də üstünə yazır (default: yalnız boşları doldurur)
|   content=1         — uzun "content" sahəsini də tərcümə edir
|   offset=0&limit=50 — hissə-hissə işlətmək üçün (timeout olsa)
|
| İş bitəndən sonra bu faylı təmizləyin!
*/

Route::get('translate-products', function () {
    if (request('token') !== 'nsmed2026') {
        abort(403, 'Token yanlışdır. ?token=nsmed2026 əlavə edin.');
    }

    @set_time_limit(0);
    @ini_set('memory_limit', '512M');
    while (ob_get_level()) {
        ob_end_flush();
    }

    $dry = (bool) request('dry');
    $force = (bool) request('force');
    $withContent = (bool) request('content');
    $offset = (int) request('offset', 0);
    $limit = (int) request('limit', 1000);

    $httpGet = function (string $url): array {
        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_USERAGENT => 'Mozilla/5.0',
        ]);
        $body = curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return [$code, (string) $body];
    };

    // Google bizi bloklayıbsa (captcha/302) bu işləmə boyu birbaşa MyMemory istifadə olunur
    $googleBlocked = false;

    // Tərcümə: əvvəl Google gtx, alınmasa MyMemory (pulsuz, gündəlik limitli)
    $translate = function (?string $text, string $target) use ($httpGet, &$googleBlocked) {
        $text = trim((string) $text);
        if ($text === '') {
            return '';
        }

        // MyMemory limiti 500 simvoldur — hər iki engine üçün 450-lik hissələrə böl
        $chunks = [];
        if (mb_strlen($text) <= 450) {
            $chunks = [$text];
        } else {
            $buffer = '';
            foreach (preg_split('/(?<=[.!?\n])\s+/u', $text) as $sentence) {
                if (mb_strlen($buffer . ' ' . $sentence) > 450 && $buffer !== '') {
                    $chunks[] = $buffer;
                    $buffer = $sentence;
                } else {
                    $buffer = $buffer === '' ? $sentence : $buffer . ' ' . $sentence;
                }
            }
            if ($buffer !== '') {
                $chunks[] = $buffer;
            }
        }

        $result = '';
        foreach ($chunks as $chunk) {
            $piece = null;

            // 1) Google Translate (gtx)
            if (! $googleBlocked) {
                [$code, $body] = $httpGet('https://translate.googleapis.com/translate_a/single?client=gtx&sl=az&tl=' . $target . '&dt=t&q=' . urlencode($chunk));
                $data = json_decode($body, true);
                if ($code === 200 && is_array($data) && isset($data[0]) && is_array($data[0])) {
                    $piece = '';
                    foreach ($data[0] as $segment) {
                        $piece .= $segment[0] ?? '';
                    }
                } else {
                    $googleBlocked = true;
                    echo '<div style="color:#fc6">⚠ Google bloklandı — MyMemory API-yə keçildi</div>';
                    flush();
                }
            }

            // 2) MyMemory (ehtiyat)
            if ($piece === null || trim($piece) === '') {
                [$code, $body] = $httpGet('https://api.mymemory.translated.net/get?q=' . urlencode($chunk) . '&langpair=az|' . $target . '&de=ekodrive@gmail.com');
                $data = json_decode($body, true);
                $piece = $data['responseData']['translatedText'] ?? null;

                if ($code !== 200
                    || (int) ($data['responseStatus'] ?? 0) !== 200
                    || ! is_string($piece)
                    || trim($piece) === ''
                    || stripos($piece, 'MYMEMORY WARNING') !== false) {
                    return null; // hər iki engine alınmadı
                }
                $piece = html_entity_decode($piece, ENT_QUOTES | ENT_HTML5, 'UTF-8');
            }

            $result .= ($result === '' ? '' : ' ') . trim($piece);
            usleep(200000); // rate limit-ə düşməmək üçün 0.2s fasilə
        }

        return trim($result);
    };

    // languages cədvəlindən default olmayan aktiv dilləri götür: en_US, ru_RU
    $languages = DB::table('languages')
        ->where('lang_is_default', 0)
        ->orderBy('lang_order')
        ->get(['lang_code', 'lang_locale']);

    $products = DB::table('ec_products')
        ->where('is_variation', 0)
        ->orderBy('id')
        ->offset($offset)
        ->limit($limit)
        ->get(['id', 'name', 'description', 'content']);

    echo '<!doctype html><meta charset="utf-8"><title>Tərcümə</title>'
        . '<body style="font-family:monospace;font-size:13px;background:#111;color:#ddd;padding:20px">'
        . '<h2 style="color:#7fd">Məhsul tərcüməsi — ' . $products->count() . ' məhsul, '
        . $languages->count() . ' hədəf dil' . ($dry ? ' [DRY RUN — yazılmır]' : '') . '</h2>';
    flush();

    $stats = ['name' => 0, 'description' => 0, 'content' => 0, 'slug' => 0, 'skipped' => 0, 'errors' => 0];

    foreach ($products as $product) {
        echo '<div style="margin-top:10px;color:#fc6">#' . $product->id . ' — ' . e($product->name) . '</div>';
        flush();

        $slugRow = DB::table('slugs')
            ->where('reference_type', 'Botble\\Ecommerce\\Models\\Product')
            ->where('reference_id', $product->id)
            ->first();

        foreach ($languages as $lang) {
            $target = explode('_', $lang->lang_locale)[0]; // en_US -> en, ru_RU -> ru

            $existing = DB::table('ec_products_translations')
                ->where('lang_code', $lang->lang_code)
                ->where('ec_products_id', $product->id)
                ->first();

            $update = [];

            $fields = ['name', 'description'];
            if ($withContent) {
                $fields[] = 'content';
            }

            foreach ($fields as $field) {
                $source = trim((string) $product->{$field});
                if ($source === '') {
                    continue; // az-da boşdursa tərcümə ediləcək bir şey yoxdur
                }
                $current = trim((string) ($existing->{$field} ?? ''));
                if ($current !== '' && ! $force) {
                    // Dolu görünsə də içi az dilindədirsə (tərcümə olunmayıb) — yenidən tərcümə et:
                    //  - mənbə ilə eynidir (kopyalanıb), və ya
                    //  - Azərbaycan hərfləri ehtiva edir (ə, ı, İ, ğ, ş), və ya
                    //  - hədəf rus dilidir amma mətndə heç kiril hərfi yoxdur
                    $looksAzerbaijani = mb_strtolower($current) === mb_strtolower($source)
                        || preg_match('/[əƏıİğĞşŞ]/u', $current)
                        || ($target === 'ru' && ! preg_match('/\p{Cyrillic}/u', $current));

                    if (! $looksAzerbaijani) {
                        $stats['skipped']++;
                        continue;
                    }
                }

                $translated = $translate($source, $target);
                if ($translated === null || $translated === '') {
                    $stats['errors']++;
                    echo '<div style="color:#f66">&nbsp;&nbsp;' . $lang->lang_code . ' ' . $field . ': XƏTA (tərcümə alınmadı)</div>';
                    flush();
                    continue;
                }

                $update[$field] = $translated;
                $stats[$field]++;
                echo '<div style="color:#9f9">&nbsp;&nbsp;' . $lang->lang_code . ' ' . $field . ': ' . e(Str::limit($translated, 100)) . '</div>';
                flush();
            }

            // Link (slug) — tərcümə olunmuş addan yaradılır
            if (isset($update['name']) || ($force && $existing && $existing->name)) {
                $slugSource = $update['name'] ?? $existing->name;
                $newSlug = Str::slug($slugSource) ?: Str::slug($slugSource . '-' . $product->id);

                if ($newSlug !== '') {
                    // eyni dildə slug toqquşarsa, sonuna id əlavə et
                    $collision = DB::table('slugs_translations')
                        ->where('lang_code', $lang->lang_code)
                        ->where('key', $newSlug)
                        ->when($slugRow, fn ($q) => $q->where('slugs_id', '!=', $slugRow->id))
                        ->exists();
                    if ($collision) {
                        $newSlug .= '-' . $product->id;
                    }

                    $update['slug'] = $newSlug;

                    if (! $dry && $slugRow) {
                        DB::table('slugs_translations')->upsert(
                            [[
                                'lang_code' => $lang->lang_code,
                                'slugs_id' => $slugRow->id,
                                'key' => $newSlug,
                                'prefix' => $slugRow->prefix,
                            ]],
                            ['lang_code', 'slugs_id'],
                            ['key', 'prefix']
                        );
                    }
                    $stats['slug']++;
                    echo '<div style="color:#6cf">&nbsp;&nbsp;' . $lang->lang_code . ' slug: ' . e($newSlug) . '</div>';
                    flush();
                }
            }

            if (! $dry && $update !== []) {
                DB::table('ec_products_translations')->upsert(
                    [array_merge(
                        ['lang_code' => $lang->lang_code, 'ec_products_id' => $product->id],
                        $update
                    )],
                    ['lang_code', 'ec_products_id'],
                    array_keys($update)
                );
            }
        }
    }

    echo '<h3 style="color:#7fd;margin-top:24px">Nəticə</h3><pre>'
        . 'name tərcümə edildi:        ' . $stats['name'] . PHP_EOL
        . 'description tərcümə edildi: ' . $stats['description'] . PHP_EOL
        . 'content tərcümə edildi:     ' . $stats['content'] . PHP_EOL
        . 'slug yaradıldı:             ' . $stats['slug'] . PHP_EOL
        . 'ötürüldü (artıq dolu):      ' . $stats['skipped'] . PHP_EOL
        . 'xəta:                       ' . $stats['errors'] . PHP_EOL
        . '</pre>'
        . ($dry ? '<p style="color:#fc6">DRY RUN idi — heç nə yazılmadı. Yazmaq üçün ?dry=1-i silin.</p>' : '<p style="color:#9f9">Tamamlandı ✔</p>')
        . '</body>';

    return '';
});
