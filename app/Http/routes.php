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