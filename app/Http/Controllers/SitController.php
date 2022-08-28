<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitController extends Controller
{
    public function sit()
    {
        return view('sit.pages.index');
    }
    public function sitlogin()
    {
        return view('sit.pages.sitlogin');
    }
}
