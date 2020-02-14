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
    return view('welcome')->name('home');
});

Route::get('/products', 'ProductsController@index')->name('product.index');
Route::get('/products/create', 'ProductsController@create')->name('product.create');
Route::get('/products/{id}', 'ProductsController@show')->name('product.show');
Route::get('/products/{id}/edit', 'ProductsController@edit')->name('product.edit');
Route::post('/products', 'ProductsController@store')->name('product.store');
Route::patch('/products/{id}', 'ProductsController@update')->name('product.update');
Route::delete('/products/{id}', 'ProductsController@destroy')->name('product.destroy');


Route::get('/customers', 'CustomersController@index')->name('customer.index');
Route::get('/customers/create', 'CustomersController@create')->name('customer.create');
Route::get('/customers/{id}/edit', 'CustomersController@edit')->name('customer.edit');
Route::post('/customers', 'CustomersController@store')->name('customer.store');
Route::patch('/customers/{id}', 'CustomersController@update')->name('customer.update');
Route::delete('/customers/{id}', 'CustomersController@destroy')->name('customer.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
