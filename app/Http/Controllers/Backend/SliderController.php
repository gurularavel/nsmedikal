<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use App\Models\Slider;
use App\Services\FileService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SliderController extends Controller
{
    public function index(): View
    {
        $sliders = Slider::query()->paginate();

        return view('backend.sliders.index', compact('sliders'));
    }

    public function create(): View
    {
        return view('backend.sliders.create');
    }

    public function store(StoreSliderRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $data['image'] = FileService::upload('sliders', $request->file('image'));

        Slider::query()->create($data);

        return to_route('backend.sliders.index')->with('success', __('create'));
    }

    public function show(Slider $slider): View
    {
        return view('backend.sliders.show', compact('slider'));
    }

    public function edit(Slider $slider): View
    {
        return view('backend.sliders.edit', compact('slider'));
    }

    public function update(UpdateSliderRequest $request, Slider $slider): RedirectResponse
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            FileService::delete('sliders', $slider->getAttribute('image'));

            $data['image'] = FileService::upload('sliders', $request->file('image'));
        }

        $slider->update($data);

        return to_route('backend.sliders.index')->with('success', __('update'));
    }

    public function destroy(Slider $slider): RedirectResponse
    {
        FileService::delete('sliders', $slider->getAttribute('image'));

        $slider->delete();

        return back()->with('success', __('delete'));
    }
}
