<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public const IS_ACTIVE = 1;

    protected $fillable = [
        'name',
        'locale',
        'image',
        'default',
        'status',
    ];

    public function getDefaultLabelAttribute(): string
    {
        if ($this->getAttribute('default')) {
            return '<span class="label label-lg label-inline label-light-success">Hə</span>';
        }

        return '<span class="label label-lg label-inline label-light-danger">Yox</span>';
    }

    public function getStatusLabelAttribute(): string
    {
        if ($this->getAttribute('status')) {
            return '<span class="label label-lg label-inline label-light-success">Aktiv</span>';
        }

        return '<span class="label label-lg label-inline label-light-danger">Deaktiv</span>';
    }
}
