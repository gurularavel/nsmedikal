<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\NewsArticle;
use Illuminate\View\View;

class NewsArticleController extends Controller
{
    public function index(): View
    {
        $newsArticles = NewsArticle::query()
            ->where('status', NewsArticle::IS_ACTIVE)
            ->get(['id', 'published_date', 'slug', 'image']);

        return view('frontend.news', compact('newsArticles'));
    }

    public function show(string $locale, NewsArticle $newsArticle): View
    {
        $newsArticle->query()->increment('view_counts');

        return view('frontend.news_article', compact('newsArticle'));
    }
}
