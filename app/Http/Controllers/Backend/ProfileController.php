<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function profile(ProfileRequest $request): RedirectResponse
    {
        $request->user()->update($request->validated());

        return to_route('backend.dashboard')->with('success', __('profile'));
    }

    public function profileView(): View
    {
        return view('backend.profile.index');
    }
}
