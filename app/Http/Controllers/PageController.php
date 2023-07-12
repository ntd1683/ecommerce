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

    public function cart(): View
    {
        return view('user/page/cart');
    }

    public function account(): View
    {
        return view('user/page/account');
    }
}
