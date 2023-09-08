<?php

use App\Http\Controllers\ProductController;
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

Route::controller(ProductController::class)->group(function () {
    Route::get('/product', 'index');
    Route::get('/product/show/{id}', 'show')->name('show');
    Route::get('/product/pesanan/{id}', 'pesanan')->name('pesanan');
    Route::post('/product/simpan', 'store')->name('simpan');
});

// Route::get('/show', [ProductController::class, 'show'])->name('show');

// Route::get('/product/show', 'show');
