<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductCategory extends Model
{
    use Translatable;

    public const IS_ACTIVE = 1;
    public const SHOW_IN_MAIN_PAGE = 1;
    public const NOT_SHOW_IN_MAIN_PAGE = 0;
    public const NOT_SHOW_IN_PRODUCTS_PAGE = 0;

    public array $translatedAttributes = [
        'name',
    ];

    protected $fillable = [
        'status',
        'slug',
        'main_page_show',
        'products_page_show',
    ];

    public function getStatusLabelAttribute(): string
    {
        if ($this->getAttribute('status')) {
            return '<span class="label label-lg label-inline label-light-success">Aktiv</span>';
        }

        return '<span class="label label-lg label-inline label-light-danger">Deaktiv</span>';
    }
}
