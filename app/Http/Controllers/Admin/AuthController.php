<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function login(): View
    {
        return view('admin.auth.login');
    }

    public function processLogin(LoginRequest $request): RedirectResponse
    {
        $remember = $request->has('remember');

        $arr = $request->validated();

        if (Auth::attempt($arr, $remember)) {
            $user = User::query()
                ->where('email', $request->get('email'))
                ->firstOrFail();
            if($user->level >= 1) {
                Auth::login($user, $remember);

                return redirect()
                    ->route('admin.index')
                    ->with('success', 'Login successful');
            }
        }

        return redirect()
            ->back()
            ->with('error', 'Email or password incorrect');
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();
        return redirect()->route('login-register')->with('success', 'Log out successfully!');
    }
}
