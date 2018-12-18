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

Route::get('', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/products', 'ProductController@index')->name('products');
Route::get('/products/{product}', 'ProductController@show')->name('products.show');
Route::get('/products/{category}', 'CategoryController@show')->name('categories.show');

Route::get('/home', 'HomeController@index')->name('home');


Route::post('', 'HomeController@show')->name('product.show');

