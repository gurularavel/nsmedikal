<?php

namespace App\Observers;

use App\Models\NewsArticle;

class NewsArticleObserver
{
    /**
     * @param NewsArticle $newsArticle
     * @return void
     */
    public function creating(NewsArticle $newsArticle): void
    {
        $userId = auth()->check() ? auth()->id() : 0;

        $newsArticle->setAttribute('user_id', $userId);
    }

    /**
     * @param NewsArticle $newsArticle
     * @return void
     */
    public function saving(NewsArticle $newsArticle): void
    {
        $locale = config('translatable.locale', 'az');

        $newsArticle->setAttribute('slug', str($newsArticle->{"title:$locale"})->slug());
    }
}
