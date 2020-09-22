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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
    // 追記 (PHP/Laravel 13)
    Route::post('news/create', 'Admin\NewsController@create');
    // 追記 (PHP/Larabel 15)
    Route::get('news', 'Admin\NewsController@index');
    
    
    // 追記 (PHP/Larabel 15)
    Route::get('news/edit', 'Admin\NewsController@edit');
    // 追記 (PHP/Larabel 15)
    Route::post('news/edit', 'Admin\NewsController@update');
    
    // 追記 (PHP/Larabel 16)
    Route::get('news/delete', 'Admin\NewsController@delete');
    
    
    Route::get('profile/create', 'Admin\ProfileController@add');
    
    // 課題13‐3 admin/profile/create に postメソッドでアクセスしたら ProfileController の create Action に割り当てるように設定
    Route::post('profile/create', 'Admin\ProfileController@create');
    
    Route::get('profile', 'Admin\ProfileController@index');
    
    
    Route::get('profile/edit', 'Admin\ProfileController@edit');
    
    // 課題13‐6 admin/profile/edit に postメソッドでアクセスしたら ProfileController の update Action に割り当てるように設定
    Route::post('profile/edit', 'Admin\ProfileController@update');
    
    Route::get('profile/delete', 'Admin\ProfileController@delete');
    
    
    
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','NewsController@index');

Route::get('/profile', 'ProfileController@index');


