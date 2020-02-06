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

Route::get('/product', 'productController@index');

Route::get('/product/tambah', 'productController@tambah');

Route::post('/product/store', 'productController@store');

Route::get('/product/edit/{id}', 'productController@edit');

Route::put('/product/update/{id}', 'productController@update');

Route::get('/product/hapus/{id}', 'productController@delete');

Route::get('/stisla', function() {
	return view('index');

});

