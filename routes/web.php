<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/reg','LoginController@reg');  //注册视图
Route::post('/regdo','LoginController@regdo');  //执行注册
Route::get('/login','LoginController@login');  //登录视图
Route::post('/logindo','LoginController@logindo');  //执行登录
Route::get('/center','LoginController@center');  //执行登录
