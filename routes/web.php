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

Route::get('/products', 'ProductsController@index')->name('product.index');
Route::get('/products/create', 'ProductsController@create')->name('product.create');
Route::get('/products/{id}', 'ProductsController@show')->name('product.show');
Route::get('/products/{id}/edit', 'ProductsController@edit')->name('product.edit');
Route::post('/products', 'ProductsController@store');
Route::patch('/products/{product}', 'ProductsController@update')->name('product.update');
Route::delete('/products/{product}', 'ProductsController@destroy')->name('product.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
