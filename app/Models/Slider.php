<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use Translatable;

    public const IS_ACTIVE = 1;

    public array $translatedAttributes = [
        'title',
        'button_text',
        'button_url',
    ];

    protected $fillable = [
        'image',
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
