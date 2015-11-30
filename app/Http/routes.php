<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/welcome', 'HomeController@welcome');
Route::get('/index', ['middleware' => 'auth', 'uses' => 'HomeController@index']);
Route::get('/', 'HomeController@home');

// 认证路由
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// 注册路由
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// 重置密码
Route::get('auth/password_reset', 'Auth\PasswordController@getEmail');

// 用户管理
Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {
    Route::get('/', 'AdminController@index');
    Route::get('/all/{n?}', 'AdminController@all');
    Route::get('/add', 'AdminController@add');
    Route::post('/create', 'AdminController@create');
    Route::get('/edit/{id}', 'AdminController@edit');
    Route::post('/update', 'AdminController@update');
    Route::get('/delete/{id}', 'AdminController@delete');
});

// 个人设置
Route::get('/setting', 'SettingController@index');
Route::post('/setting/info', 'SettingController@info');
Route::post('/setting/avatar', 'SettingController@avatar');
Route::post('/setting/password', 'SettingController@password');

// 消息管理
Route::get('/message', 'TodoController@index');

// 个人主页
Route::get('/user/{username?}', 'TodoController@index');

// 其他功能模块
Route::get('/help', 'TodoController@index');
Route::get('/feedback', 'TodoController@index');

// 健康数据模块
Route::group(['prefix' => 'health'], function() {
    Route::get('/', 'TodoController@index');
});

// 活动模块
Route::group(['prefix' => 'activity'], function() {
    Route::get('/', 'TodoController@index');
});

// 建议模块
Route::group(['prefix' => 'advice'], function() {
    Route::get('/', 'TodoController@index');
});

// 朋友圈模块
Route::group(['prefix' => 'moment'], function() {
    Route::get('/', 'TodoController@index');
});

// 兴趣组模块
Route::group(['prefix' => 'group'], function() {
    Route::get('/', 'TodoController@index');
});