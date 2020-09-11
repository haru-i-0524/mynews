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
    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
    
    // 課題4-1. admin/profile/create にアクセスしたら ProfileController の add Actionに
    // 課題12-2. ログインしていない状態でadmin/profile/createにアクセスしたらログイン画面にリダイレクトされるように設定
    Route::get('profile/create', 'Admin\ProfileController@add')->middleware('auth');
    
    // 課題4-2.admin/profile/edit にアクセスしたら ProfileController の edit Action に
     // 課題12-3. ログインしていない状態でadmin/profile/editにアクセスしたらログイン画面にリダイレクトされるように設定
    Route::get('profile/edit', 'Admin\ProfileController@edit')->middleware('auth');
    
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
