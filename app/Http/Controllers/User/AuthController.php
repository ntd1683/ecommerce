<?php

namespace App\Http\Controllers\User;

use App\Events\UserRegisterEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\ForgotPasswordRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\ProcessResetPasswordRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Http\Requests\VerifyEmailRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function login(): View
    {
        return view('user.auth.login');
    }

    public function processLogin(LoginRequest $request): RedirectResponse
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

    public function logout(): RedirectResponse
    {
        Auth::logout();
        return redirect()->route('login-register')->with('success', 'Log out successfully!');
    }

    public function processRegister(RegisterRequest $request): RedirectResponse
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

    public function forgotPassword(): View
    {
        return view('user.auth.forgotPassword');
    }

    public function processForgotPassword(ForgotPasswordRequest $request): RedirectResponse
    {
        $token = 'user_' . Str::random(15);

        $user = User::Where(['email' => $request->get('email')])->first();
        $user->update(['remember_token' => $token]);

        Mail::send('emails.user.resetPassword', compact('user'), function ($email) use ($user) {
            $email->subject(trans('Tay Nguyen Food - Reset Password'));
            $email->to($user->email, $user->name);
        });

        return redirect()->route('login-register')
            ->with('success', trans('Please check your email to reset your password'));
    }
    public function resetPassword(ResetPasswordRequest $request): View|RedirectResponse
    {
        $token = $request->token;

        $user = User::Where(['remember_token' => $token])->first();
        if (! $user) {
            return redirect()->route('login-register')
                ->withErrors(trans('Unknown error please try again later'));
        }
        return view('user.auth.resetPassword', ['token' => $token]);
    }

    public function processResetPassword(ProcessResetPasswordRequest $request)
    {
        $password = Hash::make($request->get('password'));
        User::where(['remember_token' => $request->get('token')])->update([
            'password' => $password,
            'remember_token' => null,
            'email_verified' => 1,
        ]);
        return redirect()->route('login-register')->with('success', trans('Change Password Successfully !!!'));
    }

    public function verifyEmail(VerifyEmailRequest $request)
    {
        User::where(['remember_token' => $request->get('token')])->update([
            'email_verified' => 1,
            'remember_token' => null,
        ]);

        return redirect()->route('index')->with('success', trans('Verify Email Successfully !!!'));
    }
}
