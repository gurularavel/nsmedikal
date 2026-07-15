<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCounterRequest;
use App\Http\Requests\UpdateCounterRequest;
use App\Models\Counter;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CounterController extends Controller
{
    public function index(): View
    {
        $counters = Counter::query()->paginate();

        return view('backend.counters.index', compact('counters'));
    }

    public function create(): View
    {
        return view('backend.counters.create');
    }

    public function store(StoreCounterRequest $request): RedirectResponse
    {
        Counter::query()->create($request->validated());

        return to_route('backend.counters.index')->with('success', __('create'));
    }

    public function show(Counter $counter): View
    {
        return view('backend.counters.show', compact('counter'));
    }

    public function edit(Counter $counter): View
    {
        return view('backend.counters.edit', compact('counter'));
    }

    public function update(UpdateCounterRequest $request, Counter $counter): RedirectResponse
    {
        $counter->update($request->validated());

        return to_route('backend.counters.index')->with('success', __('update'));
    }

    public function destroy(Counter $counter): RedirectResponse
    {
        $counter->delete();

        return back()->with('success', __('delete'));
    }
}
