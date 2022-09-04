<?php

namespace App\Http\Controllers;

use App\Http\Requests\sp\SparePartsDeleteRequest;
use App\Http\Requests\sp\SparePartsStoreRequest;
use App\Http\Requests\sp\SparePartsUpdateRequest;
use App\Http\Traits\imageTrait;
use App\Models\SpareParts;
use App\Models\Store;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SparePartsController extends Controller
{
    use imageTrait;
    public function index()
    {
        $spareparts = SpareParts::get();
        return view('admin.pages.spareparts.index', compact('spareparts'));
    }
    public function create()
    {
        return view('admin.pages.spareparts.create');
    }

    public function store(SparePartsStoreRequest $request)
    {


        $file_name = $this->name_image($request->image_s, 'images/spareparts');

        SpareParts::create([
            'name' => $request->name,
            'image_s' => $file_name,
            'salary' => $request->salary,
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
    public function show(SpareParts $spareparts)
    {

        return view('admin.pages.spareparts.show', compact('spareparts'));
    }
    public function edit(SpareParts $spareparts)
    {
        return view('admin.pages.spareparts.edit', compact('spareparts'));
    }
    public function update(SpareParts $spareparts, SparePartsUpdateRequest $request)
    {
        if (isset($request->image_s)) {

            $file_name = $this->name_image($request->image_s, 'images/spareparts');


            $spareparts->update([
                'name' => $request->name,
                'image_s' => $file_name,
                'salary' => $request->salary,
                'detilse' => $request->detilse,
                'existing' => $request->existing ?? "0",
            ]);
        } else {


            $spareparts->update([
                'name' => $request->name,
                'salary' => $request->salary,
                'detilse' => $request->detilse,
                'existing' => $request->existing ?? "0",
            ]);
        }

        Alert::success('تمت العمليه بنجاح', 'نجاح');
        return redirect(route('admin.spare_parts.index'));
    }



    public function delete(SpareParts $spareparts, SparePartsDeleteRequest $request)
    {
        $images = explode(' ', $spareparts->image_s);


        foreach ($images as $key => $image) {
            $path = 'images/spareparts' . '/' . $image;
            $x = public_path($path);
            $x = unlink($x);
        }

        $spareparts->delete();

        Alert::success('تمت العمليه بنجاح', 'نجاح');
        return redirect(route('admin.spare_parts.index'));
    }
}
