<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\WordingController;
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
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        /* Route Wording */
        Route::group(['prefix' => 'translation'], function () {
            Route::get('/', [WordingController::class, 'index'])->name('wording');
            Route::get('/create', [WordingController::class, 'create'])->name('wording-create');
            Route::post('/store', [WordingController::class, 'store'])->name('wording-store');
            Route::get('/{wording:id}', [WordingController::class, 'edit'])->name('wording-edit');
            Route::post('/update/{id}', [WordingController::class, 'update'])->name('wording-update');
            Route::delete('/{wording:id}', [WordingController::class, 'destroy'])->name('wording-destroy');
        });
        /* Route Users */
        Route::group(['prefix' => 'user'], function () {
            Route::get('/', [UserController::class, 'index'])->name('user');
            Route::get('/create', [UserController::class, 'create'])->name('user-create');
            Route::post('/store', [UserController::class, 'store'])->name('user-store');
            Route::get('/{user:id}', [UserController::class, 'edit'])->name('user-edit');
            Route::post('/update/{id}', [UserController::class, 'update'])->name('user-update');
            Route::delete('/{user:id}', [UserController::class, 'destroy'])->name('users-destroy');
        });
        /* Route Role */
        Route::group(['prefix' => 'role'], function () {
            Route::get('/', [UserController::class, 'index'])->name('role');
            Route::get('/create', 'Admin\RoleController@create')->name('role-create');
            Route::post('/store', 'Admin\RoleController@store')->name('role-store');
            Route::get('/{role:id}', 'Admin\RoleController@edit')->name('role-edit');
            Route::post('/update/{id}', 'Admin\RoleController@update')->name('role-update');
            Route::delete('/{role:id}', 'Admin\RoleController@destroy')->name('role-destroy');
        });


    });
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\Web\HomeController::class, 'index'])->name('home');
