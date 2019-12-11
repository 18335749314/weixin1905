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

 Route::get('/info',function(){
    phpinfo();
 });

Route::get('save','Admin\TestController@save');
Route::get('adduser','Admin\LoginController@adduser');


//微信开发
Route::get('/wx','Weixin\WxController@wechat');
Route::post('/wx','Weixin\WxController@receiv');  //接收微信推动的推送事件
