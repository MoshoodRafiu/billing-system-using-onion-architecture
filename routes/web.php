<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
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

Route::controller(DashboardController::class)->group(function () {
    Route::get('/', 'index');
});

Route::controller(CustomerController::class)->group(function () {
    Route::get('/customers', 'create');
    Route::post('/customers', 'store');
    Route::get('/customers/{customer}/edit', 'edit');
    Route::put('/customers/{customer}/edit', 'update');
});