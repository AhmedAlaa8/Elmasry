<?php

use App\Http\Controllers\AuthControlle;
use App\Http\Controllers\AuthSitController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\OrderCarController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SitController;
use App\Http\Controllers\SparePartsController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('pages/');
});


Route::group(['prefix' => 'pages', 'as' => 'sit.'], function () {

    Route::get('/loginPage', [AuthSitController::class, 'loginPage'])->name('loginPage');
    Route::post('/login', [AuthSitController::class, 'login'])->name('login');
    Route::get('/re', [AuthSitController::class, 'sitre'])->name('re');
    Route::post('/store', [AuthSitController::class, 'store'])->name('store');
    Route::get('/logout', [AuthSitController::class, 'logout'])->name('logout');
});

Route::get('pages', [SitController::class, 'sit'])->name('sit');



Route::group(['prefix' => 'sitlogin', 'as' => 'sitlogin.', 'middleware' => 'auth'], function () {

    Route::get('', [SitController::class, 'sitlogin'])->name('');
    Route::get('/showcar', [SitController::class, 'showcar'])->name('showcar');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('/loginPage', [AuthControlle::class, 'loginPage'])->name('loginPage');
    Route::post('/login', [AuthControlle::class, 'login'])->name('login');
    Route::get('/logout', [AuthControlle::class, 'logout'])->name('logout');
});


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {

    Route::get('/', function () {
        return view('admin.index');
    })->name('home');

    Route::group(['prefix' => 'user', 'as' => 'user.'], function () {

        Route::get('/index', [UserController::class, 'index'])->name('index');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/store', [UserController::class, 'store'])->name('store');
        Route::get('/edit{user}', [UserController::class, 'edit'])->name('edit');
        Route::put('/update{user}', [UserController::class, 'update'])->name('update');
        Route::delete('/delete{user}', [UserController::class, 'delete'])->name('delete');
    });
    Route::group(['prefix' => 'car', 'as' => 'car.'], function () {

        Route::get('/index', [CarController::class, 'index'])->name('index');
        Route::get('/create', [CarController::class, 'create'])->name('create');
        Route::post('/store', [CarController::class, 'store'])->name('store');
        Route::get('/show{car}', [CarController::class, 'show'])->name('show');
        Route::get('/edit{car}', [CarController::class, 'edit'])->name('edit');
        Route::put('/update{car}', [CarController::class, 'update'])->name('update');
        Route::delete('/delete{car}', [CarController::class, 'delete'])->name('delete');
    });
    Route::group(['prefix' => 'store', 'as' => 'store.'], function () {

        Route::get('/index', [StoreController::class, 'index'])->name('index');
        Route::get('/create', [StoreController::class, 'create'])->name('create');
        Route::post('/store', [StoreController::class, 'store'])->name('store');
        Route::get('/edit{store}', [StoreController::class, 'edit'])->name('edit');
        Route::put('/update{store}', [StoreController::class, 'update'])->name('update');
        Route::delete('/delete{store}', [StoreController::class, 'delete'])->name('delete');
    });
    Route::group(['prefix' => 'order', 'as' => 'order.'], function () {

        Route::get('/index', [OrderController::class, 'index'])->name('index');
        Route::get('/create', [OrderController::class, 'create'])->name('create');
        Route::post('/store', [OrderController::class, 'store'])->name('store');
        Route::get('/edit{order}', [OrderController::class, 'edit'])->name('edit');
        Route::put('/update{order}', [OrderController::class, 'update'])->name('update');
        Route::delete('/delete{order}', [OrderController::class, 'delete'])->name('delete');
    });
    Route::group(['prefix' => 'ordercar', 'as' => 'ordercar.'], function () {

        Route::get('/index', [OrderCarController::class, 'index'])->name('index');
        Route::get('/create', [OrderCarController::class, 'create'])->name('create');
        Route::post('/store', [OrderCarController::class, 'store'])->name('store');
        Route::get('/edit{ordercar}', [OrderCarController::class, 'edit'])->name('edit');
        Route::put('/update{ordercar}', [OrderCarController::class, 'update'])->name('update');
        Route::delete('/delete{ordercar}', [OrderCarController::class, 'delete'])->name('delete');
    });
    Route::group(['prefix' => 'spare_parts', 'as' => 'spare_parts.'], function () {

        Route::get('/index', [SparePartsController::class, 'index'])->name('index');
        Route::get('/create', [SparePartsController::class, 'create'])->name('create');
        Route::post('/store', [SparePartsController::class, 'store'])->name('store');
        Route::get('/show{spareparts}', [SparePartsController::class, 'show'])->name('show');
        Route::get('/edit{spareparts}', [SparePartsController::class, 'edit'])->name('edit');
        Route::put('/update{spareparts}', [SparePartsController::class, 'update'])->name('update');
        Route::delete('/delete{spareparts}', [SparePartsController::class, 'delete'])->name('delete');
    });
});
