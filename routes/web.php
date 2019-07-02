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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//product
Route::get('/index', 'ProductController@index')->name('index');
Route::get('/products/{product}', 'ProductController@show')->name('productShow');

//category
Route::get('/category', 'CategoryController@index')->name('categoryIndex');
Route::get('/category/{category}', 'CategoryController@show')->name('categoryShow');

//shopping cart
Route::get('/shoppingCart', 'ShoppingCartController@index')->name('shoppingCart');
Route::get('/shoppingCart/store', 'ShoppingCartController@store')->name('shoppingCartStore');
Route::post('/shoppingCart/update', 'ShoppingCartController@update')->name('shoppingCartUpdate');
Route::post('/shoppingCart/destroy', 'ShoppingCartController@destroy')->name('shoppingCartDestroy');

//order
Route::get('/order', 'OrderController@index')->name('order');
Route::get('/order/show', 'OrderController@show')->name('ordershow');
Route::get('/order/store', 'OrderController@store')->name('orderStore');

//laravel home
Route::get('', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');