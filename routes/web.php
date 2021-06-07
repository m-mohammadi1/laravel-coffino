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



Route::get('/pay-test}', function () {

    $invoice = new Invoice();
    $invoice->amount(10000);

    Payment::purchase($invoice, function ($driver, $transactionId) {
        // We can store $transactionId in database.
    });



    // You can specify callbackUrl
    Payment::callbackUrl('http://localhost:8000/verify')->purchase(
        $invoice,
        function ($driver, $transactionId) {
            // We can store $transactionId in database.
        }
    );

});


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
