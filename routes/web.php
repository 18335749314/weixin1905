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

// Route::get('/info',function(){
//    phpinfo();
// });

Route::get('save','Admin\TestController@save');
Route::get('adduser','Admin\LoginController@adduser');
Route::get('/wx','Weixin\WxController@wechat');