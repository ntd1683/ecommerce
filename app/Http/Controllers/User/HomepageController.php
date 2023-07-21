<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class HomepageController extends Controller
{
    public function __invoke()
    {
        return view('user.homepage.index');
    }
}
