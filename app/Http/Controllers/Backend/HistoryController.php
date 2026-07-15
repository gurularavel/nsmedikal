<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHistoryRequest;
use App\Http\Requests\UpdateHistoryRequest;
use App\Models\History;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class HistoryController extends Controller
{
    public function index(): View
    {
        $histories = History::query()->paginate();

        return view('backend.histories.index', compact('histories'));
    }

    public function create(): View
    {
        return view('backend.histories.create');
    }

    public function store(StoreHistoryRequest $request): RedirectResponse
    {
        History::query()->create($request->validated());

        return to_route('backend.histories.index')->with('success', __('create'));
    }

    public function show(History $history): View
    {
        return view('backend.histories.show', compact('history'));
    }

    public function edit(History $history): View
    {
        return view('backend.histories.edit', compact('history'));
    }

    public function update(UpdateHistoryRequest $request, History $history): RedirectResponse
    {
        $history->update($request->validated());

        return to_route('backend.histories.index')->with('success', __('update'));
    }

    public function destroy(History $history): RedirectResponse
    {
        $history->delete();

        return back()->with('success', __('delete'));
    }
}
