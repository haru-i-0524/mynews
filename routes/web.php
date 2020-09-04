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
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
    
    // 課題4-1. admin/profile/create にアクセスしたら ProfileController の add Actionに
    Route::get('profile/create', 'Admin\ProfileController@add');
    
    // 課題4-2.admin/profile/edit にアクセスしたら ProfileController の edit Action に
    Route::get('profile/edit', 'Admin\ProfileController@edit');
    
});

// 課題3. 「http://XXXXXX.jp/XXX というアクセスが来たときに、 AAAControllerのbbbというAction に渡すRoutingの設定」
Route::get('XXX', 'XXX\AAAController@bbb');

