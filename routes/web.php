<?php

use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;

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
    return view('welcome');
});


Route::get('/home', function () {

    // Role::create(['name' => 'writer']);
    // $permission = Permission::create(['name' => 'edit post']);
    // $role = Role::findById(1);
    // $permission = Permission::findById(1);
    // $role->givePermissionTo($permission);
    return view('home');

});


Route::group([
    'prefix' => 'dashboard',
    'middleware' => 'auth',
    'as' => 'dashboard.',
], function () {

    Route::view('/', 'dashboard.index');

    Route::resource('service', \App\Http\Controllers\Dashboard\ServiceController::class);
    Route::resource('category', \App\Http\Controllers\Dashboard\CategoryController::class);



});