<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\UserModel;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function addUser(){

        $pass = 'qwer1234';
        $email = 'tengyijia@qq.com';
        $password = password_hash($pass,PASSWORD_BCRYPT);

        $data=[
            'user_name'=>'tyj',
            'password' =>$password,
            'email' => $email
        ];

        $uid = UserModel::insertGetId($data);
        var_dump($uid);
    }



}
