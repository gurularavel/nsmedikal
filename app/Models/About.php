<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use Translatable;

    public array $translatedAttributes = [
        'description',
    ];

    protected $fillable = [
        'image',
    ];
}
