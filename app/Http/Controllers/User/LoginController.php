<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\UserModel;
use Illuminate\Support\Str;
class LoginController extends Controller
{
    //添加
    public function addUser(){

        $pass = '123123';
        //使用hash密码加密
        $password = password_hash($pass,PASSWORD_BCRYPT);
        $email = 'zhangsan@qq.com';
        $user_name = Str::random(8);
        $data = [
            'user_name' => $user_name,
            'password' => $password,
            'email' => $email,
        ];
        $userInfo = UserModel::insert($data);
        if($userInfo){
            echo "<script>alert('添加成功');location='/test/index'</script>";
        }
    }
    //展示
    public function index(){
        $data = UserModel::all();
        return view('test.index',['data'=>$data]);
    }
    //删除
    public function delete($uid){
        $where = [
            ['uid','=',$uid]
        ];
        $res = UserModel::where($where)->delete();
        if($res){
            echo "<script>alert('删除成功');location='/test/index'</script>";
        }else{
            echo "<script>alert('删除失败');location='/test/index'</script>";
        }
    }
    //修改
    public function edit($uid){
        $data = UserModel::where('uid',$uid)->first();
        return view('test.edit',['data'=>$data]);
    }
    //执行修改
    public function update($uid){
        $data = \request()->except('_token');
        $data['password'] = password_hash($data['password'],PASSWORD_BCRYPT);
        $res = UserModel::where('uid',$uid)->update($data);
        if($res){
            echo "<script>alert('修改成功');location='/test/index'</script>";
        }else{
            echo "<script>alert('修改失败');location='/test/index'</script>";
        }
    }
}
