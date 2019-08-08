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

Route::get('/cart','CartController@index')->name('shop.cart');
Route::post('/cart','CartController@store')->name('cart.store');
Route::delete('/cart/{product}','CartController@destroy')->name('cart.destroy');
Route::get('empty',function(){
    Cart::destroy();
});
Route::view('/checkout','shop.checkout');
Route::view('/thankyou','shop.thankyou');
