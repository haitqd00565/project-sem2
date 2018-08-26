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

Route::get('/demo/master-layout', function () {
    return view('layout.master');
});

Route::get('/demo/form', function () {
    return view('example.form');
});

Route::get('/demo/list', function () {
    return view('example.list');
});
Route::get('/404', function () {
    return view('error.404');
});

//Route::get('/home',function (){
//    return view('customer.home');
//});

Route::resource('admin/category', 'CategoryController');
Route::resource('admin/collection', 'CollectionController');
Route::resource('admin/product', 'ProductController');

Route::get('detail', function () {
    return view('customer/detail');
});

Route::get('/danh-sach-san-pham', 'Client\ProductController@getListProduct');

Route::get('/them-gio-hang', 'Client\ShoppingCartController@addToCart');
Route::post('/api-them-gio-hang', 'Client\ShoppingCartController@addToCartApi');
Route::get('/xem-gio-hang', 'Client\ShoppingCartController@showCart');
Route::get('/xoa-gio-hang', 'Client\ShoppingCartController@destroyCart');
Route::put('/sua-gio-hang', 'Client\ShoppingCartController@updateCart');
Route::post('/gui-don-hang', 'Client\ShoppingCartController@checkoutCart');

Route::get('/api-get-chart-data', 'OrderController@getChartDataApi');

Route::get('/test', 'Client\ShoppingCartController@demoTransaction');

Route::get('/home', 'Client\ProductController@index');

// Order Manager
Route::get('/admin/order', 'OrderController@index');
Route::get('/admin/order/change-status', 'OrderController@changeStatus');



Route::get('detail',function (){
    return view('client/detailProduct');
});
Route::get('login',function (){
    return view('client.login');
});
Route::get('about', function () {
    return view('client/about');
});
