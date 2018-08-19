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
Route::get('/404',function (){
    return view('error.404');
});

Route::get('/home',function (){
    return view('customer.home');
});

Route::resource('admin/category', 'CategoryController');
Route::resource('admin/collection', 'CollectionController');
