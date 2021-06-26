<?php

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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// // Auth::routes();

// Route::get('/test', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/sale/transection',App\Http\Controllers\TransectionController::class);
// Route::middleware(['web'])->group(function () {
    
// });
Route::resource('sale',App\Http\Controllers\SaleController::class);
Route::resource('return_product',App\Http\Controllers\ReturnProductController::class);