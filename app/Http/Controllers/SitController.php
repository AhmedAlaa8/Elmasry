<?php

namespace App\Http\Controllers;

use App\Http\Requests\order\OrderStoreRequest;
use App\Http\Requests\ordercar\OrdercarStoreRequest;
use App\Models\Car;
use App\Models\Order;
use App\Models\OrderCar;
use App\Models\SpareParts;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class SitController extends Controller
{
    public function sit()
    {
        $cars = Car::get();
        $spareparts = SpareParts::get();
        return view('sit.pages.index', compact('cars', 'spareparts'));
    }
    public function sitlogin()
    {
        $cars = Car::get();
        $spareparts = SpareParts::get();
        return view('sit.pages.sitlogin', compact('cars', 'spareparts'));
    }
    public function showcar()
    {

        $cars = Car::get();
        return view('sit.pages.showcar', compact('cars'));
    }
    public function shows()
    {

        $spareparts = SpareParts::get();
        return view('sit.pages.shows', compact('spareparts'));
    }
    public function showimagecar(Car $car)
    {
        return view('sit.pages.showimagecar', compact('car'));
    }
    public function showimages(SpareParts $spareparts)
    {
        return view('sit.pages.showimagespareparts', compact('spareparts'));
    }
    public function order(Car $car)
    {
        $user = auth()->user();
        return view('sit.pages.order', compact('car', 'user'));
    }
    public function ordersp(SpareParts $spareparts)
    {

        $user = auth()->user();
        return view('sit.pages.ordersp', compact('spareparts', 'user'));
    }
    public function storesp(OrderStoreRequest $request)
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

        Alert::success('سوف يتم التواصل معك في اقرب وقت', 'نجاح شكرا لثقتك بنا');
        return redirect(route('sitlogin.'));
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
        Alert::success('سوف يتم التواصل معك في اقرب وقت', 'نجاح شكرا لثقتك بنا');
        return redirect(route('sitlogin.'));
    }
}
