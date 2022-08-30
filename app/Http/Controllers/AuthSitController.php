<?php

namespace App\Http\Controllers;

use App\Http\Requests\sit\LoginRequest;
use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class AuthSitController extends Controller
{
    public function loginPage()
    {
        return view('sit.pages.auth.login');
    }
    public function sitre()
    {
        return view('sit.pages.auth.register');
    }
    public function store(UserStoreRequest $request)
    {


        User::create([
            'isadmin' => $request->isadmin ?? "0",
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'adress' => $request->adress,
        ]);

        Alert::success('تمت العمليه بنجاح', 'نجاح');
        return redirect(route('sit.loginPage'));
    }
    public function login(LoginRequest $request)
    {

        $card = $request->only('email', 'password');;
        if (Auth::attempt($card)) {
            $x = auth()->user();
            Alert::success('تم الدخول', 'نجاح');
            return redirect(route('sitlogin.'));
        } else {
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect(route('sit.loginPage'));
    }
}
