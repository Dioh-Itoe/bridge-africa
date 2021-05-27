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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [App\Http\Controllers\ProductController::class, 'index'])->name('home');
    Route::post('/dashboard/save-product', [App\Http\Controllers\ProductController::class, 'store'])->name('save-product');
    Route::post('/dashboard/update-product/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('update-product');
    Route::get('/dashboard/delete-product/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('delete-product');


});