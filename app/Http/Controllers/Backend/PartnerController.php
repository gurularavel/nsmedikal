<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePartnerRequest;
use App\Http\Requests\UpdatePartnerRequest;
use App\Models\Partner;
use App\Services\FileService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PartnerController extends Controller
{
    public function index(): View
    {
        $partners = Partner::query()->paginate();

        return view('backend.partners.index', compact('partners'));
    }

    public function create(): View
    {
        return view('backend.partners.create');
    }

    public function store(StorePartnerRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $data['image'] = FileService::upload('partners', $request->file('image'));

        Partner::query()->create($data);

        return to_route('backend.partners.index')->with('success', __('create'));
    }

    public function edit(Partner $partner): View
    {
        return view('backend.partners.edit', compact('partner'));
    }

    public function update(UpdatePartnerRequest $request, Partner $partner): RedirectResponse
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            FileService::delete('partners', $partner->getAttribute('image'));

            $data['image'] = FileService::upload('partners', $request->file('image'));
        }

        $partner->update($data);

        return to_route('backend.partners.index')->with('success', __('update'));
    }

    public function destroy(Partner $partner): RedirectResponse
    {
        FileService::delete('partners', $partner->getAttribute('image'));

        $partner->delete();

        return back()->with('success', __('delete'));
    }
}
