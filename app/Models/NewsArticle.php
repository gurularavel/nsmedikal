<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Route;

class NewsArticle extends Model
{
    use Translatable;

    public const IS_ACTIVE = 1;

    public array $translatedAttributes = [
        'title',
        'description',
        'content',
        'meta_description',
        'meta_keywords',
    ];

    protected $fillable = [
        'user_id',
        'slug',
        'image',
        'view_counts',
        'published_date',
        'status',
    ];

    public function getStatusLabelAttribute(): string
    {
        if ($this->getAttribute('status')) {
            return '<span class="label label-lg label-inline label-light-success">Aktiv</span>';
        }

        return '<span class="label label-lg label-inline label-light-danger">Deaktiv</span>';
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
