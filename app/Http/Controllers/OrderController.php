<?php

namespace App\Http\Controllers;

use App\Http\Requests\order\OrderDeleteRequest;
use App\Http\Requests\order\OrderStoreRequest;
use App\Http\Requests\order\OrderUpdateRequest;
use App\Models\Car;
use App\Models\Order;
use App\Models\SpareParts;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::get();
        return view('admin.pages.order.index', compact('orders'));
    }
    public function create()
    {
        $users = User::get();
        $spareparts = SpareParts::get();

        return view('admin.pages.order.create', compact('users', 'spareparts'));
    }
    public function store(OrderStoreRequest $request)
    {
        Order::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'phone2' => $request->phone2,
            'adress' => $request->adress,
            'salary' => $request->salary,
            'user_id' => $request->user_id,
            'spare_parts_id' => $request->spare_parts_id,

        ]);
        Alert::success('تمت العمليه بنجاح', 'نجاح');
        return redirect(route('admin.order.create'));
    }
    public function edit(Order $order)
    {
        $users = User::get();
        $spareparts = SpareParts::get();

        return view('admin.pages.order.edit', compact('users', 'spareparts', 'order'));
    }
    public function update(Order $order, OrderUpdateRequest $request)
    {
        $order->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'phone2' => $request->phone2,
            'adress' => $request->adress,
            'salary' => $request->salary,
            'user_id' => $request->user_id,
            'spare_parts_id' => $request->spare_parts_id,

        ]);
        Alert::success('تمت العمليه بنجاح', 'نجاح');
        return redirect(route('admin.order.index'));
    }
    public function delete(Order $order, OrderDeleteRequest $request)
    {
        $order->delete();
        Alert::success('تمت العمليه بنجاح', 'نجاح');
        return redirect(route('admin.order.index'));
    }
}
