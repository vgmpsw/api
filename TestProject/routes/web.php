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
Route::get('/products', 'Products@getProducts');
Route::get('/product/{id}', 'Products@getProduct');
Route::post('/products', 'Products@addProduct');
Route::put('/product/{id}', 'Products@editProduct');
Route::delete('/product/{id}', 'Products@deleteProduct');