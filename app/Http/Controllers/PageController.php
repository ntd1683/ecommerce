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
}
