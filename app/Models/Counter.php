<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    use Translatable;

    public const IS_ACTIVE = 1;

    public array $translatedAttributes = [
        'name',
    ];

    protected $fillable = [
        'amount',
        'status',
    ];

    public function getStatusLabelAttribute(): string
    {
        if ($this->getAttribute('status')) {
            return '<span class="label label-lg label-inline label-light-success">Aktiv</span>';
        }

        return '<span class="label label-lg label-inline label-light-danger">Deaktiv</span>';
    }
}
