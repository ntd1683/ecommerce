<?php

namespace App\Http\Controllers\User\Ajax;

use App\Http\Controllers\Controller;
use App\Http\Trait\ResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AjaxAccountController extends Controller
{
    use ResponseTrait;
    public function verifyEmail(Request $request)
    {
        if (auth()->user()->email_verified) {
            return $this->errorResponse(trans('Email has been confirmed'));
        }

        $token = 'user_' . Str::random(15);

        $user = auth()->user();
        $user->update(['remember_token' => $token]);

        Mail::send('emails.user.verifyEmail', compact('user'), function ($email) use ($user) {
            $email->subject(trans('Tay Nguyen Food - Verify Email'));
            $email->to($user->email, $user->name);
        });

        return $this->successResponse([], trans('A verification email has been sent to your email'));
    }
}
