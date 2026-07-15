<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function login(LoginRequest $request): RedirectResponse
    {
        if (! auth()->attempt($request->validated(), $request->boolean('remember'))) {
            return back()->with('warning', __('login_invalid'));
        }

        return to_route('backend.dashboard')->with('success', __('login'));
    }

    public function loginView(): View
    {
        return view('backend.login.index');
    }

    public function logout(): RedirectResponse
    {
        auth()->logout();

        return to_route('backend.login.view')->with('success', __('logout'));
    }
}
