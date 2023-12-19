<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//dashboard
Route::group(['prefix' => 'admin'], function () {
    Route::get('/home', [DashboardController::class, 'home'])->name('name');
});
// end dashboard

//project start
Route::get('/create', [ProductController::class, 'create'])->name('create');
Route::post('/create/store', [ProductController::class, 'create_store'])->name('create.store');
Route::get('/product.list', [ProductController::class, 'product_list'])->name('product.list');
//update product
Route::get('/update/{id}', [ProductController::class, 'update'])->name('update');
//update store
Route::post('/update/store', [ProductController::class, 'update_store'])->name('update.store');
//project end

//sale product
Route::get('/sale/{id}', [ProductController::class, 'sale'])->name('sale');
Route::post('/sale/update', [ProductController::class, 'sale_update'])->name('sale.update');

//transaction.history
Route::get('/transaction/history', [ProductController::class, 'transaction_history'])->name('transaction.history');