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
    return view('home');
});

Route::get('/analytics', function(){
    return view('analytics');
});

Route::get('/products', function(){
    return view('products.products');
});

Route::get('/products/add', function(){
    return view('products.add_products');
});

