<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserDeleteRequest;
use RealRashid\SweetAlert\Facades\Alert;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('admin.pages.user.index', compact('users'));
    }
    public function create()
    {
        return view('admin.pages.user.create');
    }
    public function store(UserStoreRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'adress' => $request->adress,
        ]);

        Alert::success('تمت العمليه بنجاح', 'نجاح');
        return redirect()->back();
    }
    public function edit(User $user)
    {
        return view('admin.pages.user.edit', compact('user'));
    }
    public function update(User $user, UserUpdateRequest $request)
    {
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'adress' => $request->adress,
        ]);
        Alert::success('تمت العمليه بنجاح', 'نجاح');
        return redirect(route('admin.user.index'));
    }
    public function delete(User $user, UserDeleteRequest $request)
    {
        $user->delete();
        Alert::success('تمت العمليه بنجاح', 'نجاح');
        return redirect(route('admin.user.index'));
    }
}
