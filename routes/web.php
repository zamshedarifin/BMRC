<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login',[\App\Http\Controllers\Admin\Auth\LoginController::class,'showLoginForm'])->name('login');
    Route::post('login',[\App\Http\Controllers\Admin\Auth\LoginController::class,'login'])->name('login');
    Route::get('logout',[\App\Http\Controllers\Admin\Auth\LoginController::class,'logout'])->name('logout');

    Route::middleware('admin')->group(function (){
        //Dashboard route
        Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    });
});
