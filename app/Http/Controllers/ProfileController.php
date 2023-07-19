<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\StoreProfileRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function changePassword(ChangePasswordRequest $request): RedirectResponse
    {
        return redirect()->back()->with('success', 'Password changed successfully');
    }

    public function update(StoreProfileRequest $request): RedirectResponse
    {
        $user = auth()->user();
        $user->update([
            ...$request->validated()
        ]);

        try {
            $email = $user->email;

            if ($request->get('email') && $email !== $request->get('email')) {
                $user->email = $request->get('email');
                $user->email_verified = 0;
                $user->save();
            }
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(trans('Email Exists'));
        }

        return redirect()->back()->with('success', trans('Change Information Successfully'));
    }
}
