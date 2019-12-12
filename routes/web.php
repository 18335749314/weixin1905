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

Route::any('/', function () {
    return view('welcome');
});

Route::any('/info',function(){
	phpinfo();
});
Route::any('/test/hello','Test\TestController@hello');
Route::any('/test/adduser','User\LoginController@addUser');
Route::any('/test/index','User\LoginController@index');
Route::any('/test/delete/{uid}','User\LoginController@delete');
Route::any('/test/edit/{uid}','User\LoginController@edit');
Route::any('/test/update/{uid}','User\LoginController@update');

Route::any('/test/redis1','Test\TestController@redis1');
Route::any('/test/baidu','Test\TestController@baidu');

//微信开发
Route::any('/wx','WeiXin\WxController@wechat');
Route::any('/wx','WeiXin\WxController@receiv');     //接收微信的推送事件
