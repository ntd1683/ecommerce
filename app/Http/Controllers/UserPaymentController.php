<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserPaymentRequest;
use App\Models\UserPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserPaymentController extends Controller
{
    public function store(StoreUserPaymentRequest $request)
    {
        $user = auth()->user();
        $userPayment = UserPayment::query()->updateOrCreate([
            'user_id' => $user->id,
        ], $request->validated());

        if($request->hasFile('qr')) {

            if (userPayment() != null) {
                Storage::disk('public')->delete(userPayment()->qr);
            }

            $fileLogo = $request->file('qr');
            $nameFileLogo = 'qr_' . Str::random(5) . '.' . $fileLogo->extension();
            $filePathLogo = $fileLogo->storeAs('images', $nameFileLogo, 'public');

            $userPayment->qr = $filePathLogo;
            $userPayment->save();
        }

        return redirect()->back()->with('success', 'Change payment successfully');
    }
}
