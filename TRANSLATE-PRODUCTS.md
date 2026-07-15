# Məhsul Tərcümə Scripti

Məhsulların **adını**, **description**-unu və **linkini (slug)** avtomatik olaraq 3 dilə tərcümə edən müvəqqəti script. Brauzerdən işə salınır.

> Yaradılma tarixi: 2026-07-14

## Layihə haqqında

- **CMS:** Botble CMS (ecommerce plugin), Laravel 12
- **Dillər:**
  - `az` — default dil (məhsulun orijinal məlumatları birbaşa `ec_products` cədvəlindədir)
  - `en_US` — ingilis
  - `ru_RU` — rus

## Dəyişdirilən fayllar

| Fayl | Dəyişiklik |
|---|---|
| `routes/web.php` | Yeganə dəyişdirilən fayl. Əvvəl boş idi, içinə `/translate-products` route-u yazılıb. Yeni fayl əlavə edilməyib. |

## Scriptin yazdığı DB cədvəlləri

| Cədvəl | Nə yazılır |
|---|---|
| `ec_products_translations` | `name`, `description`, `slug` (en_US və ru_RU üçün) |
| `slugs_translations` | Tərcümə olunmuş addan yaradılan link (slug) hər dil üçün |

Mənbə məlumat: `ec_products` cədvəlindəki az dilindəki `name` / `description` / `content`.

## İstifadə

Əvvəlcə route cache-i təmizləyin (lazım olsa):

```bash
php artisan route:clear
```

Brauzerdə açın — **əvvəl mütləq dry run ilə yoxlayın**:

```
https://nsmedikal.test/translate-products?token=nsmed2026&dry=1
```

Nəticə düzgün görünürsə, `&dry=1`-i silib real işə salın:

```
https://nsmedikal.test/translate-products?token=nsmed2026
```

### Parametrlər

| Parametr | İzah |
|---|---|
| `token=nsmed2026` | Mütləqdir — qorunma tokeni |
| `dry=1` | Önizləmə rejimi — heç nə yazılmır, nə tərcümə olunacağı göstərilir |
| `force=1` | Dolu tərcümələrin də üstünə yenidən yazır (default: yalnız boş / az dilində qalmış sahələr) |
| `content=1` | Uzun `content` sahəsini də tərcümə edir |
| `offset=0&limit=50` | Server timeout versə, hissə-hissə işlətmək üçün |

## İş məntiqi

1. `languages` cədvəlindən default olmayan aktiv dillər götürülür (`en_US`, `ru_RU`).
2. Hər məhsul üçün az dilindəki `name` və `description` tərcümə olunur.
3. **Ağıllı skip:** hədəf sahə dolu olsa belə, içindəki mətn az dilindədirsə (tərcümə olunmayıb) yenidən tərcümə edilir. Yoxlama qaydaları:
   - mövcud dəyər az mənbə ilə eynidirsə (sadəcə kopyalanıb);
   - mətndə Azərbaycan hərfləri varsa (`ə`, `ı`, `İ`, `ğ`, `ş`);
   - hədəf rus dilidir, amma mətndə heç kiril hərfi yoxdursa.
4. Tərcümə olunmuş addan hər dil üçün slug yaradılır (`Str::slug`). Eyni dildə slug toqquşarsa, sonuna məhsul id-si əlavə olunur.
5. Nəticələr `ec_products_translations` və `slugs_translations`-a `updateOrInsert` ilə yazılır.

## Tərcümə engine-ləri

1. **Google Translate** (pulsuz `gtx` endpoint) — əvvəl bu yoxlanılır.
2. **MyMemory API** — Google IP-ni bloklayıbsa (captcha/302) avtomatik bura keçir. Ekranda `⚠ Google bloklandı — MyMemory API-yə keçildi` bildirişi görünür.

Qeydlər:

- MyMemory-nin sorğu limiti 500 simvoldur — mətn 450 simvolluq hissələrə bölünüb tərcümə olunur.
- MyMemory-yə e-poçt parametri (`de=ekodrive@gmail.com`) əlavə olunub — gündəlik pulsuz limit ~50 min simvola qalxır.
- Gündəlik limit bitsə "XƏTA" görünəcək — sabah yenidən işə salın, artıq tərcümə olunanlar təkrar edilməyəcək.
- Google bloku adətən bir neçə saata öz-özünə açılır.

## İş bitəndən sonra təmizlik

Bütün tərcümələr tamamlandıqdan sonra `routes/web.php`-ni yenidən boş vəziyyətinə qaytarın:

```php
<?php

```

Sonra:

```bash
php artisan route:clear
```
