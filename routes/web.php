<?php



use App\Http\Controllers\CarController;
use App\Http\Controllers\OrderController;
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
    return redirect('admin/');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('/', function () {
        return view('admin.index');
    });

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
    Route::group(['prefix' => 'spare_parts', 'as' => 'spare_parts.'], function () {

        Route::get('/index', [SparePartsController::class, 'index'])->name('index');
        Route::get('/create', [SparePartsController::class, 'create'])->name('create');
        Route::post('/store', [SparePartsController::class, 'store'])->name('store');
        Route::get('/edit{spare_parts}', [SparePartsController::class, 'edit'])->name('edit');
        Route::put('/update{spare_parts}', [SparePartsController::class, 'update'])->name('update');
        Route::delete('/delete{spare_parts}', [SparePartsController::class, 'delete'])->name('delete');
    });
});
