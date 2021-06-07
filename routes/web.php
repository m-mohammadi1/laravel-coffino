<?php

use App\Models\Service;
use App\Models\Category;
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
    return view('front.index');
});


Route::get('/home', function () {

    // $role = Role::create(['name' => 'manager']);
    // $permission = Permission::create(['name' => 'edit service']);
    // $role = Role::findById(1);
    // $permission = Permission::findById(1);
    // $role->givePermissionTo($permission);

    // $permission = Permission::findById(1);
    // $role = Role::findById(1);

    // $role->givePermissionTo($permission);

    // auth()->user()->assignRole($role);
    // dd(auth()->user()->getDirectPermissions());
    // dd(auth()->user()->getPermissionsViaRoles());

    // auth()->user()->givePermissionTo('add service');


});



Route::group([
    'prefix' => 'dashboard',
    'middleware' => 'auth',
    'as' => 'dashboard.',
], function () {

    Route::view('/', 'dashboard.index');

    Route::resource('services', \App\Http\Controllers\Dashboard\ServiceController::class);
    Route::resource('categories', \App\Http\Controllers\Dashboard\CategoryController::class);
    Route::resource('counts', \App\Http\Controllers\Dashboard\CountController::class);



});