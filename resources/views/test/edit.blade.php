<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{url('/test/update/'.$data->uid)}}" method="post">
    @csrf
    用户名: <input type="text" name="user_name" value="{{$data['user_name']}}"><br>
    密码: <input type="password" name="password" value="{{$data['password']}}"><br>
    email: <input type="text" name="email" value="{{$data['email']}}"><br>
            <button>修改</button>
</form>
</body>
</html>