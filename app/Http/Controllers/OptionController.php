<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOptionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class OptionController extends Controller
{
    public function index(): view
    {
        return view('admin.page.option');
    }

    public function store(StoreOptionRequest $request)
    {
        optionSave('site_name', $request->get('site_name'));

        if (option('site_logo')) {
            Storage::disk('public')->delete(option('site_logo'));
        }

        if ($request->hasFile('site_logo')) {
            $fileLogo = $request->file('site_logo');
            $nameFileLogo = 'logo_' . Str::random(5) . '.' . $fileLogo->extension();
            $filePathLogo = $fileLogo->storeAs('images', $nameFileLogo, 'public');

            optionSave('site_logo', $filePathLogo);
        }

        if (option('site_favicon')) {
            Storage::disk('public')->delete(option('site_favicon'));
        }

        if ($request->hasFile('site_favicon')) {
            $fileFavicon = $request->file('site_favicon');
            $nameFileFavicon = 'favicon_' . Str::random(5) . '.' . $fileFavicon->extension();
            $filePathFavicon = $fileFavicon->storeAs('images', $nameFileFavicon, 'public');

            optionSave('site_favicon', $filePathFavicon);
        }

        return redirect()->route('admin.index')->with('success', trans('Save Setting Successfully'));
    }
}
