<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAddressRequest;
use App\Models\Address;

class AddressController extends Controller
{
    public function store(StoreAddressRequest $request)
    {
        $user = auth()->user();
        Address::query()->updateOrCreate([
            'user_id' => $user->id,
        ], $request->validated());

        return redirect()->back()->with('success', 'Change address successfully');
    }
}
