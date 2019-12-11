<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use GuzzleHttp\Client;
class TestController extends Controller
{
   public function hello(){
   	echo 'hello world aaa  bbbbdddddd';
   }

   public function redis1(){
       $key = 'weixin';
       $val = 'hello redis';
       Redis::set($key,$val);

       echo date('Y-m-d H:i:s');
   }

   public function baidu(){
       $url = 'https://mp.weixin.qq.com/s/dhlQwsiq9z5hxBn7cgdnIw';
       $client = new Client();
       $response = $client->request('GET',$url);
        echo $response->getBody();
   }
}
