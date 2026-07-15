<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Company extends Model
{
    use Translatable;

    public const IS_ACTIVE = 1;

    public array $translatedAttributes = [
        'description',
        'products',
    ];

    protected $fillable = [
        'company_category_id',
        'image',
        'name',
        'status',
    ];

    public function companyCategory(): BelongsTo
    {
        return $this->belongsTo(CompanyCategory::class);
    }

    public function getStatusLabelAttribute(): string
    {
        if ($this->getAttribute('status')) {
            return '<span class="label label-lg label-inline label-light-success">Aktiv</span>';
        }

        return '<span class="label label-lg label-inline label-light-danger">Deaktiv</span>';
    }
}
