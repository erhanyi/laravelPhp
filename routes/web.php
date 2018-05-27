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
    return view('frontend.index');
});

Route::group(['prefix'=>'admin'], function (){
    Route::get('/', 'AdminController@get_index');
    Route::get('/ayarlar', 'AdminController@get_ayarlar');
    Route::post('/ayarlar', 'AdminController@post_ayarlar');
});

