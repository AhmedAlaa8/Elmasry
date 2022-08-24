<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AuthControlle extends Controller
{
    public function loginPage()
    {
        return view('admin.pages.auth.login');
    }
    public function login(LoginRequest $request)
    {
        $card = $request->only('email', 'password');

        if (Auth::attempt($card)) {

            Alert::success('تم الدخول', 'نجاح');
            return redirect(route('admin.home'));
        } else {
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('admin.loginPage'));
    }
}
