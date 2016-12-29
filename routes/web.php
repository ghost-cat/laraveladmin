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

Route::get('/', function () {
    return view('welcome');
});

// 后台管理
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){

    Route::get('index', ['uses' => 'IndexController@index']);
});
