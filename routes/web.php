<?php

use App\Http\Controllers\Dashboard\Purchase\TransactionController;
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


Route::get('/verify', function () {

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


    Route::group([
        'prefix' => 'customers',
        'as' => 'customers.',
    ], function () {

        Route::get('services', [\App\Http\Controllers\Dashboard\CustomerManagement\ServiceController::class, 'index'])->name('services');
        Route::post('services/purchase', [\App\Http\Controllers\Dashboard\Purchase\PurchaseController::class, 'purchase'])->name('services.purchase');
        Route::get('services/{id}/purchase/result', [\App\Http\Controllers\Dashboard\Purchase\PurchaseController::class, 'result'])->name('services.purchase.result');

        Route::post('services', [\App\Http\Controllers\Dashboard\CustomerManagement\ServiceController::class, 'servicesByCategory'])->name('services.get_by_cat');
        Route::post('services/counts', [\App\Http\Controllers\Dashboard\CustomerManagement\ServiceController::class, 'getServiceCounts'])->name('services.count');

        Route::get('transactions', [\App\Http\Controllers\Dashboard\CustomerManagement\TransactionController::class, 'index'])->name('transactions');

        Route::get('purchased', [\App\Http\Controllers\Dashboard\CustomerManagement\PurhchasedServicesCntroller::class, 'index'])->name('purchased_services');


    });


    Route::resource('transactions', \App\Http\Controllers\Dashboard\Administratorship\TransactionController::class);
    Route::resource('purchases', \App\Http\Controllers\Dashboard\Administratorship\PurchasedServiceController::class);


    Route::group([
        'prefix' => 'profile',
        'as' => 'profile.',
    ], function () {

        Route::get('/', [\App\Http\Controllers\Dashboard\Profile\ProfileController::class, 'index'])->name('index');

    });

});
