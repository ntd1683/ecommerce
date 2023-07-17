<?php

namespace App\Http\Controllers\User\Ajax;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ajax\AjaxUploadAvatarRequest;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Trait\ResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AjaxAccountController extends Controller
{
    use ResponseTrait;

    public function uploadAvatar(AjaxUploadAvatarRequest $request)
    {
        try {
            if (auth()->user()->avatar) {
                Storage::disk('public')->delete(auth()->user()->avatar);
            }

            $fileLogo = $request->file('file');
            $nameFileLogo = 'avatar_' . Str::random(5) . '.' . $fileLogo->extension();
            $filePathLogo = $fileLogo->storeAs('images', $nameFileLogo, 'public');

            $user = auth()->user();
            $user->avatar = $filePathLogo;
            $user->save();
            return $this->successResponse([], trans('Change Avatar Successfully'));
        } catch (\Exception $e) {
            return $this->errorResponse(trans('Unknown error, please try again later'));
        }
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        try {
            $password = $request->get('old_password');
            $checkPassword = Hash::check($password, auth()->user()->password);

            if (! $checkPassword) {
                return $this->errorResponse(trans('Invalid old password, please try again later'));
            }

            $user = auth()->user();
            $user->password = Hash::make($request->get('new_password'));
            $user->save();

            return $this->successResponse([], trans('Change Password Successfully'));
        } catch (\Exception $e) {
            return $this->errorResponse($e->getMessage());
        }
    }
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
