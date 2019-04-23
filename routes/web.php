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

Route::get('/', 'ProductController@index');

Route::get('/admin', 'ProductController@admin');

Route::get('/admin/buy-product/{id}', 'ProductController@buyProduct');

Route::get('/admin/edit-product/{id}', 'ProductController@editProduct');

Route::get('/admin/delete-voucher/{id}', 'ProductController@deleteVoucher');

Route::post('/admin/add-voucher', 'ProductController@addVoucher');

Route::post('/admin/add-product', 'ProductController@addProduct');
