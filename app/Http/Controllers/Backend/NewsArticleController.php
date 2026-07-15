<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewsArticleRequest;
use App\Http\Requests\UpdateNewsArticleRequest;
use App\Models\NewsArticle;
use App\Services\FileService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class NewsArticleController extends Controller
{
    public function index(): View
    {
        $news = NewsArticle::query()->paginate();

        return view('backend.news_articles.index', compact('news'));
    }

    public function create(): View
    {
        return view('backend.news_articles.create');
    }

    public function store(StoreNewsArticleRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $data['image'] = FileService::upload('news', $request->file('image'));

        NewsArticle::query()->create($data);

        return to_route('backend.news_articles.index')->with('success', __('create'));
    }

    public function show(NewsArticle $newsArticle): View
    {
        return view('backend.news_articles.show', compact('newsArticle'));
    }

    public function edit(NewsArticle $newsArticle): View
    {
        return view('backend.news_articles.edit', compact('newsArticle'));
    }

    public function update(UpdateNewsArticleRequest $request, NewsArticle $newsArticle): RedirectResponse
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            FileService::delete('news', $newsArticle->getAttribute('image'));

            $data['image'] = FileService::upload('news', $request->file('image'));
        }

        $newsArticle->update($data);

        return to_route('backend.news_articles.index')->with('success', __('update'));
    }

    public function destroy(NewsArticle $newsArticle): RedirectResponse
    {
        FileService::delete('news', $newsArticle->getAttribute('image'));

        $newsArticle->delete();

        return back()->with('success', __('delete'));
    }
}
