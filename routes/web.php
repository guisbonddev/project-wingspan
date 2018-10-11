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

Route::get('/', 'StatusController@view');

Route::get('/admin', function () {
    return view('admin.admin');
});

Route::get('/admin/reasons', 'AdminController@reasons');

Route::get('/admin/create', 'AdminController@create');
