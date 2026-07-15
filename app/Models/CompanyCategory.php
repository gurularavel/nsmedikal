<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CompanyCategory extends Model
{
    use Translatable;

    public const IS_ACTIVE = 1;

    public array $translatedAttributes = [
        'name',
    ];

    protected $fillable = [
        'parent_id',
        'status',
        'slug',
    ];

    public function children(): HasMany
    {
        return $this->hasMany(CompanyCategory::class, 'parent_id');
    }

    public function companies(): HasMany
    {
        return $this->hasMany(Company::class);
    }

    public function getStatusLabelAttribute(): string
    {
        if ($this->getAttribute('status')) {
            return '<span class="label label-lg label-inline label-light-success">Aktiv</span>';
        }

        return '<span class="label label-lg label-inline label-light-danger">Deaktiv</span>';
    }
}
