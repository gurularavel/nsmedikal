<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateSettingRequest;
use App\Models\Setting;
use App\Services\FileService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SettingController extends Controller
{
    public function index(): View
    {
        $settings = Setting::query()->paginate();

        return view('backend.settings.index', compact('settings'));
    }

    public function show(Setting $setting): View
    {
        return view('backend.settings.show', compact('setting'));
    }

    public function edit(Setting $setting): View
    {
        return view('backend.settings.edit', compact('setting'));
    }

    public function update(UpdateSettingRequest $request, Setting $setting): RedirectResponse
    {
        $data = $request->validated();

        if ($data['type'] === 'file' && $request->hasFile('file')) {
            FileService::delete('settings', $setting->getAttribute('value'));

            $data['value'] = FileService::upload('settings', $request->file('file'));
        } else if ($setting->type === 'file') {
            FileService::delete('settings', $setting->getAttribute('value'));
        }

        $setting->update($data);

        return to_route('backend.settings.index')->with('success', __('update'));
    }

    public function destroy(Setting $setting): RedirectResponse
    {
        if ($setting->getAttribute('type') === 'file') {
            FileService::delete('settings', $setting->getAttribute('value'));
        }

        $setting->delete();

        return back()->with('success', __('delete'));
    }
}
