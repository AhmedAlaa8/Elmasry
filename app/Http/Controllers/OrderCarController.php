<?php

namespace App\Http\Controllers;

use App\Http\Requests\ordercar\OrdercarDeleteRequest;
use App\Http\Requests\ordercar\OrdercarStoreRequest;
use App\Http\Requests\ordercar\OrdercarUpdateRequest;
use App\Models\Car;
use App\Models\OrderCar;
use App\Models\User;

use RealRashid\SweetAlert\Facades\Alert;

class OrderCarController extends Controller
{
    public function index()
    {
        $ordercars = OrderCar::get();
        return view('admin.pages.ordercar.index', compact('ordercars'));
    }
    public function create()
    {
        $users = User::get();
        $cars = Car::get();

        return view('admin.pages.ordercar.create', compact('users', 'cars'));
    }
    public function store(OrdercarStoreRequest $request)
    {
        OrderCar::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'phone2' => $request->phone2,
            'adress' => $request->adress,
            'salary' => $request->salary,
            'user_id' => $request->user_id,
            'car_id' => $request->car_id,

        ]);
        Alert::success('تمت العمليه بنجاح', 'نجاح');
        return redirect(route('admin.ordercar.create'));
    }
    public function edit(OrderCar $ordercar)
    {
        $users = User::get();
        $cars = Car::get();

        return view('admin.pages.ordercar.edit', compact('users', 'cars', 'ordercar'));
    }
    public function update(OrderCar $ordercar, OrdercarUpdateRequest $request)
    {
        $ordercar->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'phone2' => $request->phone2,
            'adress' => $request->adress,
            'salary' => $request->salary,
            'user_id' => $request->user_id,
            'car_id' => $request->car_id,

        ]);
        Alert::success('تمت العمليه بنجاح', 'نجاح');
        return redirect(route('admin.ordercar.index'));
    }
    public function delete(OrderCar $ordercar, OrdercarDeleteRequest $request)
    {
        $ordercar->delete();
        Alert::success('تمت العمليه بنجاح', 'نجاح');
        return redirect(route('admin.ordercar.index'));
    }

    public function ajaxCar($id)
    {
        $car = Car::find($id);


        return response()->json([
            'salary' => $car->salary
        ]);
    }

    public function ajaxCar1($id)
    {

        $x = User::find($id);

        $z = $x->only(['name', 'adress', 'phone']);

        return response()->json(['name' => $z['name'], 'adress' => $z['adress'], 'phone' => $z['phone']]);
    }
}
