<?php

namespace App\Http\Controllers;

use App\Http\Requests\store\StoreDeleteRequest;
use App\Http\Requests\store\StoreStoreRequest;
use App\Http\Requests\store\StoreUpdateRequest;
use App\Models\Store;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class StoreController extends Controller
{
    public function index()
    {
        $stores = Store::get();
        return view('admin.pages.store.index', compact('stores'));
    }
    public function create()
    {
        return view('admin.pages.store.create');
    }
    public function store(StoreStoreRequest $request)
    {
        Store::create([
            'name_category' => $request->name_category,
            'salary_category' => $request->salary_category,

        ]);
        Alert::success('تمت العمليه بنجاح', 'نجاح');
        return redirect()->back();
    }
    public function edit(Store $store)
    {
        return view('admin.pages.store.edit', compact('store'));
    }
    public function update(Store $store, StoreUpdateRequest $request)
    {
        $store->update([
            'name_category' => $request->name_category,
            'salary_category' => $request->salary_category,
        ]);
        Alert::success('تمت العمليه بنجاح', 'نجاح');
        return redirect(route('admin.store.index'));
    }
    public function delete(Store $store, StoreDeleteRequest $request)
    {
        $store->delete();
        Alert::success('تمت العمليه بنجاح', 'نجاح');
        return redirect(route('admin.store.index'));
    }
}
