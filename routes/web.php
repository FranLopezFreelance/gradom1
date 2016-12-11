<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/* FRONT ROUTES */
Route::get('/', 'FrontController@index');
Route::get('/about', 'FrontController@about');
Route::get('/sections', 'FrontController@sections');
Route::get('/section/{section}', 'FrontController@section');
Route::get('/news', 'FrontController@news');
Route::get('/contact', 'FrontController@contact');

/* CLIENTS ROUTES */
Route::get('/order/newOrder/{section}', 'ClientsController@create');
Route::post('/order/addItem', 'ClientsController@addItem');
Route::post('/order/updateItem', 'ClientsController@updateItem');
Route::get('/order/deleteItem/{item}', 'ClientsController@deleteItem');
Route::get('/order/show/{order}', 'ClientsController@show');
Route::get('/order/confirm/{order}', 'ClientsController@confirm');
Route::get('/orderConfirm/showConfirm/{order}', 'ClientsController@showConfirm');
Route::get('/orderConfirm/pendingOrders', 'ClientsController@pendingOrders');
Route::get('/orderConfirm/deliveredOrders', 'ClientsController@deliveredOrders');
Route::get('/orderConfirm/deliverOrder/{order}', 'ClientsController@deliverOrder');
Route::get('/orderConfirm/deleteOrder/{order}', 'ClientsController@deleteOrder');

/*BACKEND ROUTES*/
Route::get('/backend/products/{section}', 'ProductsController@index');
Route::get('/backend/products/edit/{product}', 'ProductsController@edit');

/* AUTH ROUTES */
Auth::routes();

Route::get('/home', 'HomeController@index');
