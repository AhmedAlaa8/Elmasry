<?php

namespace App\Http\Controllers;

session_start();

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class AuthControlle extends Controller
{
    public function loginPage()
    {
        return view('admin.pages.auth.login');
    }
    public function login(LoginRequest $request)
    {


        $card = $request->only('email', 'password');;
        if (Auth::attempt($card)) {

            $_SESSION['isadmin'] = 1;
            $x = auth()->user();
            if ($x->isadmin == 1) {
                Alert::success('تم الدخول', 'نجاح');
                return redirect(route('admin.home'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();
        session_unset();
        return redirect(route('admin.loginPage'));
    }
}
