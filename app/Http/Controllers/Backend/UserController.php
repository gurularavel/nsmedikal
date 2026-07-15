<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $users = User::query()->paginate();

        return view('backend.users.index', compact('users'));
    }

    public function create(): View
    {
        return view('backend.users.create');
    }

    public function store(StoreUserRequest $request): RedirectResponse
    {
        User::query()->create($request->validated());

        return to_route('backend.users.index')->with('success', __('create'));
    }

    public function edit(User $user): View
    {
        return view('backend.users.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, User $user): RedirectResponse
    {
        $user->update($request->validated());

        return to_route('backend.users.index')->with('success', __('update'));
    }

    public function destroy(User $user): RedirectResponse
    {
        $user->delete();

        return back()->with('success', __('delete'));
    }
}
