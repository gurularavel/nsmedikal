<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLanguageRequest;
use App\Http\Requests\UpdateLanguageRequest;
use App\Models\Language;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class LanguageController extends Controller
{
    public function index(): View
    {
        $languages = Language::query()->paginate();

        return view('backend.languages.index', compact('languages'));
    }

    public function create(): View
    {
        return view('backend.languages.create');
    }

    public function store(StoreLanguageRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $data['image'] = 'data:' . $data['image']->getMimeType() . ';base64,' . base64_encode(file_get_contents($data['image']->getPathname()));

        DB::transaction(function () use ($data) {
            if ($data['default']) {
                Language::query()->update(['default' => 0]);
            }

            Language::query()->create($data);
        });

        return to_route('backend.languages.index')->with('success', __('create'));
    }

    public function edit(Language $language): View
    {
        return view('backend.languages.edit', compact('language'));
    }

    public function update(UpdateLanguageRequest $request, Language $language): RedirectResponse
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $data['image'] = 'data:' . $data['image']->getMimeType() . ';base64,' . base64_encode(file_get_contents($data['image']->getPathname()));
        }

        DB::transaction(function () use ($data, $language) {
            if ($data['default']) {
                Language::query()->update(['default' => 0]);
            }

            $language->update($data);
        });

        return to_route('backend.languages.index')->with('success', __('update'));
    }

    public function destroy(Language $language): RedirectResponse
    {
        $language->delete();

        return back()->with('success', __('delete'));
    }
}
