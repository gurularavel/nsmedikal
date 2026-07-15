<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsArticleTranslation extends Model
{
    protected $fillable = [
        'title',
        'description',
        'content',
        'meta_description',
        'meta_keywords',
    ];
}
