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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/food', 'FoodsController@index');
Route::get('/food/tambah', 'FoodsController@tambah');
Route::post('/food/store', 'FoodsController@store');
Route::get('/food/edit/{id}', 'FoodsController@edit');
Route::put('/food/update/{id}', 'FoodsController@update');
Route::get('/food/hapus/{id}', 'FoodsController@hapus');

Route::get('/daftar_menu', 'FoodsController@daftar_menu');