<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('customers', \App\Http\Controllers\CustomerController::class);

// store register
Route::get('/tenant-register', [\App\Http\Controllers\RegisterTenantController::class, 'create'])->name('tenant.register');

Route::post('/tenant-register', [\App\Http\Controllers\RegisterTenantController::class, 'store'])->name('tenant.register.store');
