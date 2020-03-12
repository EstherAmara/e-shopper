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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->middleware('is_admin')->name('admin');
Route::get('/admin/products', 'AdminController@products');

Route::get('/vendor', 'VendorsController@index')->middleware('is_vendor')->name('vendor');
Route::get('/vendor/products', 'VendorsController@product')->middleware('is_vendor');

Route::get('/shop', 'ProductsController@index');
Route::post('/products/store', 'ProductsController@store')->middleware('is_vendor');
Route::get('/products/accept/{product}', 'ProductsController@accept')->middleware('is_admin');
Route::get('/products/reject/{product}', 'ProductsController@reject')->middleware('is_admin');

