<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function aboutUs(): View
    {
        return view('user/page/aboutUs');
    }

    public function contactUs(): View
    {
        return view('user/page/contactUs');
    }

    public function shopGrid3Column(): View
    {
        return view('user/page/shopGrid3Column');
    }
}
