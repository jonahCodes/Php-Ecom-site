<?php

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
Route::get('/','HomeController@index');
Route::get('/product','ShopController@index')->name('shop.index');
Route::get('/product/{product}','ShopController@show')->name('shop.product');

Route::view('/cart','shop.cart')->name('shop.cart');
Route::view('/checkout','shop.checkout');
Route::view('/thankyou','shop.thankyou');
