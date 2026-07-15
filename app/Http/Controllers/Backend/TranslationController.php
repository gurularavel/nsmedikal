<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\FilterTranslationRequest;
use App\Http\Requests\StoreTranslationRequest;
use App\Http\Requests\UpdateTranslationRequest;
use App\Models\Translation;
use App\Traits\TranslationTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TranslationController extends Controller
{
    use TranslationTrait;

    public function index(FilterTranslationRequest $request): View
    {
        $payload = $request->validated();

        $translations = Translation::query()
            ->select(['id', 'key'])
            ->when(!empty($payload['key']), function (Builder $query) use ($payload): Builder {
                return $query->where('key', 'LIKE', "%{$payload['key']}%");
            })
            ->when(!empty($payload['value']), function (Builder $query) use ($payload): Builder {
                return $query->whereTranslationLike('value', "%{$payload['value']}%");
            })
            ->oldest('id')
            ->paginate();

        return view('backend.translations.index', compact('translations'));
    }

    public function create(): View
    {
        return view('backend.translations.create');
    }

    public function store(StoreTranslationRequest $request): RedirectResponse
    {
        Translation::query()->create($request->validated());
        $this->writeTranslationsToFolder();

        return to_route('backend.translations.index')->with('success', __('create'));
    }

    public function show(Translation $translation): View
    {
        return view('backend.translations.show', compact('translation'));
    }

    public function edit(Translation $translation): View
    {
        return view('backend.translations.edit', compact('translation'));
    }

    public function update(UpdateTranslationRequest $request, Translation $translation): RedirectResponse
    {
        $translation->update($request->validated());
        $this->writeTranslationsToFolder();

        return to_route('backend.translations.index')->with('success', __('update'));
    }

    public function destroy(Translation $translation): RedirectResponse
    {
        $translation->delete();
        $this->writeTranslationsToFolder();

        return back()->with('success', __('delete'));
    }
}
