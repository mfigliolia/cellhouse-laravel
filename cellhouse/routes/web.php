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
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

/// FRONT ///
Route::get('/celulares', 'front\FrontController@cells');
Route::get('/celular/{id}', 'front\FrontController@cell');
Route::get('/accesorios', 'front\FrontController@accesorio');
Route::get('/faq', 'front\FrontController@faq');



/// ADMIN ///

Route::get('/admin', 'admin\AdminController@index');

Route::get('/admin/products', 'admin\AdminController@showProducts');
Route::get('/admin/products/add', 'admin\AdminController@addProducts');
Route::post('/admin/products/add', 'admin\AdminController@storeProducts');
Route::get('/admin/products/edit/{id}', 'admin\AdminController@edit');
Route::post('/admin/products/edit/{id}', 'admin\AdminController@update');
Route::get('/admin/products/destroy/{id}', 'admin\AdminController@destroy');

Route::get('admin/categories', 'admin\AdminController@showCategories');
Route::get('/admin/categories/add', 'admin\AdminController@addCategories');
Route::post('/admin/categories/add', 'admin\AdminController@storeCategories');

Route::get('admin/brands', 'admin\AdminController@showBrands');
Route::get('/admin/brands/add', 'admin\AdminController@addBrands');
Route::post('/admin/brands/add', 'admin\AdminController@storeBrands');