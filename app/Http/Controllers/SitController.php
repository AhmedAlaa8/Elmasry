<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
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
    public function showcar()
    {
        $users = User::get();
        $cars = Car::get();

        return view('sit.pages.showcar', compact('cars', 'users'));
    }
}
