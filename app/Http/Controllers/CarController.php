<?php

namespace App\Http\Controllers;

use App\Http\Requests\car\CarDeleteRequest;
use App\Http\Traits\imageTrait;
use App\Http\Requests\car\CarStoreRequest;
use App\Http\Requests\car\CarUpdateRequest;
use App\Models\Car;
use App\Models\Store;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CarController extends Controller
{
    use imageTrait;
    public function index()
    {
        $cars = Car::get();
        return view('admin.pages.car.index', compact('cars'));
    }
    public function create()
    {
        return view('admin.pages.car.create');
    }

    public function store(CarStoreRequest $request)
    {

        $file_name = $this->name_image($request->image_car, 'images/car');

        Car::create([
            'name' => $request->name,
            'type' => $request->type,
            'image_car' => $file_name,
            'salary' => $request->salary,
            'color' => $request->color,
            'detilse' => $request->detilse,
            'existing' => $request->existing ?? "0",
        ]);

        if ($request->existing == 1) {

            Store::create([
                'name_category' => $request->name,
                'salary_category' => $request->salary,

            ]);
        }
        Alert::success('تمت العمليه بنجاح', 'نجاح');
        return redirect()->back();
    }
    public function show(Car $car)
    {
        return view('admin.pages.car.show', compact('car'));
    }
    public function edit(Car $car)
    {
        return view('admin.pages.car.edit', compact('car'));
    }
    public function update(Car $car, CarUpdateRequest $request)
    {
        if (isset($request->image_car)) {

            $file_name = $this->name_image($request->image_car, 'images/car');


            $car->update([
                'name' => $request->name,
                'type' => $request->type,
                'image_car' => $file_name,
                'salary' => $request->salary,
                'color' => $request->color,
                'detilse' => $request->detilse,
                'existing' => $request->existing ?? "0",
            ]);
        } else {


            $car->update([
                'name' => $request->name,
                'type' => $request->type,
                'salary' => $request->salary,
                'color' => $request->color,
                'detilse' => $request->detilse,
                'existing' => $request->existing ?? "0",
            ]);
        }

        Alert::success('تمت العمليه بنجاح', 'نجاح');
        return redirect(route('admin.car.index'));
    }



    public function delete(Car $car, CarDeleteRequest $request)
    {
        $images = explode(' ', $car->image_car);




        foreach ($images as $key => $image) {
            $path = 'images/car' . '/' . $image;
            $x = public_path($path);
            $x = unlink($x);
        }

        $car->delete();

        Alert::success('تمت العمليه بنجاح', 'نجاح');
        return redirect(route('admin.car.index'));
    }
}
