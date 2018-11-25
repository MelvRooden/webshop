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

Route::get('/', 'ClientController@index');

Route::get('/create', 'ClientController@index');
Route::get('/profile', 'ClientController@index');

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index/index');
});


