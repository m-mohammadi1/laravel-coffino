<?php

use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment;
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
    return view('front.index');
});



Route::get('dashboard/customers/services', [\App\Http\Controllers\Dashboard\CustomerManagement\ServiceController::class, 'index'])->name('customers.services');
Route::get('dashboard/customers/services/{service}/purchase', [\App\Http\Controllers\Dashboard\Purchase\PurchaseController::class, 'purchase'])->name('services.purchase');
Route::get('dashboard/customers/services/{id}/purchase/result', [\App\Http\Controllers\Dashboard\Purchase\PurchaseController::class, 'result'])->name('services.purchase.result');

Route::get('/verify', function() {
    
});





Route::group([
    'prefix' => 'dashboard',
    'middleware' => 'auth',
    'as' => 'dashboard.',
], function () {

    Route::view('/', 'dashboard.index');

    Route::resource('services', \App\Http\Controllers\Dashboard\Administratorship\ServiceController::class);
    Route::resource('categories', \App\Http\Controllers\Dashboard\Administratorship\CategoryController::class);
    Route::resource('counts', \App\Http\Controllers\Dashboard\Administratorship\CountController::class);
});
