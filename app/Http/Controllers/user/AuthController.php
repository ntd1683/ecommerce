<?php

namespace App\Http\Controllers\user;

use App\Events\UserRegisterEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function login(): View
    {
        return view('user.auth.login');
    }

    public function processLogin(LoginRequest $request)
    {
        $remember = $request->has('remember');

        $arr = $request->validated();

        if (Auth::attempt($arr, $remember)) {
            $user = User::query()
                ->where('email', $request->get('email'))
                ->firstOrFail();
            Auth::login($user, $remember);

            return redirect()
                ->route('index')
                ->with('success', 'Login successful');
        }

        return redirect()
            ->back()
            ->with('error', 'Email or password incorrect');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login-register')->with('success', 'Log out successfully!');
    }

    public function processRegister(RegisterRequest $request)
    {
        $user = User::create([
            ...$request->validated(),
            'password' => Hash::make($request->input('password')),
            'level' => '0',
        ]);

        Auth::login($user, true);

        UserRegisterEvent::dispatch($user);

        return redirect()->route('index')
            ->with('success', 'Create new user successfully!');
    }
}
