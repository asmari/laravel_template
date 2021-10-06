<?php

use App\Http\Controllers\Admin\UserController;
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
    return view('welcome');
});

Route::middleware('auth')->group(function() {
    Route::group(['prefix' => 'admin'], function () {
        /* Route Users */
        Route::group(['prefix' => 'user'], function () {
            Route::get('/', [UserController::class, 'index'])->name('user');
            Route::get('/create', 'Admin\UserController@create')->name('user-create');
            Route::post('/store', 'Admin\UserController@store')->name('user-store');
            Route::get('/{user:id}', 'Admin\UserController@edit')->name('user-edit');
            Route::post('/update/{id}', 'Admin\UserController@update')->name('user-update');
            Route::delete('/{user:id}', 'Admin\UserController@destroy')->name('users-destroy');
        });
        /* Route Role */
        Route::group(['prefix' => 'role'], function () {
            Route::get('/', 'Admin\RoleController@index')->name('role');
            Route::get('/create', 'Admin\RoleController@create')->name('role-create');
            Route::post('/store', 'Admin\RoleController@store')->name('role-store');
            Route::get('/{role:id}', 'Admin\RoleController@edit')->name('role-edit');
            Route::post('/update/{id}', 'Admin\RoleController@update')->name('role-update');
            Route::delete('/{role:id}', 'Admin\RoleController@destroy')->name('role-destroy');
        });
    });
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
