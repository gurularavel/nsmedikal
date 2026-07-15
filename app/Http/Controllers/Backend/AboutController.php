<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAboutRequest;
use App\Models\About;
use App\Services\FileService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AboutController extends Controller
{
    public function show(): View
    {
        $about = About::query()->first();

        return view('backend.about.show', compact('about'));
    }

    public function edit(): View
    {
        $about = About::query()->first();

        return view('backend.about.edit', compact('about'));
    }

    public function update(UpdateAboutRequest $request): RedirectResponse
    {
        $about = About::query()->first();

        $data = $request->validated();

        if ($request->hasFile('image')) {
            FileService::delete('about', $about->getAttribute('image'));

            $data['image'] = FileService::upload('about', $request->file('image'));
        }

        $about->update($data);

        return to_route('backend.about.show')->with('success', __('update'));
    }
}
