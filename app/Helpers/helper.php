<?php

use App\Models\Notify;
use App\Models\Option;
use Illuminate\Database\Eloquent\Collection;
use Ramsey\Uuid\Type\Integer;

if (!function_exists('option')) {
    function option($name, $default = '')
    {
        try {
            $option = Option::query();
            $value = $option->where('name', $name)->firstOrFail()->value;
        } catch (\Exception $e) {
            $value = $default;
        }
        return $value;
    }
}

if (!function_exists('optionSave')) {
    function optionSave($name, $value): void
    {
        $option = Option::query()->firstOrNew([
            'name' => $name,
        ], $attributes = [
            'value' => $value,
        ]);

        if ($option->exists) {
            $option->fill($attributes);
        }

        $option->save();
    }
}

if (!function_exists('getNotify')) {
    function getNotify(): Collection|array
    {
        return Notify::query()->where('author', auth()->user()->id)->get();
    }
}

if (!function_exists('getNameRouteMain')) {
    function getNameRouteMain(): string
    {
        $arrRouteName = explode('.', request()->route()->getName());

        if($arrRouteName[0] == 'admin') {
            return $arrRouteName[1];
        }

        return $arrRouteName[0];
    }
}

if (!function_exists('getTitle')) {
    function getTitle(): string
    {
        $arrRouteName = explode('.', request()->route()->getName());
        if($arrRouteName[0] == 'admin') {
            $tmp = $arrRouteName[1];
            if($arrRouteName[1] == 'index') {
                $tmp = 'dashboard';
            }
            $suffix = 'admin - ' . $tmp;
        } else if($arrRouteName[0] == 'index'){
            return option('site_name', config('app.name', 'Laravel'));
        } else {
            $suffix = $arrRouteName[0];
        }
        $suffix = ucwords($suffix);

        return option('site_name', config('app.name', 'Laravel')) . ' | ' . $suffix;
    }
}

if (!function_exists('userPayment')) {
    function userPayment()
    {
        return auth()->user()->userPayments()->first();
    }
}

if (!function_exists('discountPrice')) {
    function discountPrice($price, $discount): integer
    {
        return ($price * $discount)/100;
    }
}
