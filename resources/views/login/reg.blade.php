<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="/static/admin/css/bootstrap.min.css"> 
    <script src="{{asset('/static/admin/js/jquery-3.1.1.min.js')}}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">    
    <title>注册</title>
</head>
<body>
<center><h3>欢迎注册</h3></center>
<form action="{{url('regdo')}}" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">名称</label>
            <div class="col-sm-10">
                <input type="text" name="login_name" class="form-control" id="firstname"  placeholder="请输入昵称">
                <b style="color:red"></b>
            </div>
        </div>
        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">电话</label>
            <div class="col-sm-10">
                <input type="text" name="tel" class="form-control" id="firstname"  placeholder="请输入电话">
                <b style="color:red"></b>
            </div>
        </div>
        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">邮箱</label>
            <div class="col-sm-10">
                <input type="email" name="email" class="form-control" id="firstname"  placeholder="请输入个人邮箱">
                <b style="color:red"></b>
            </div>
        </div>
        <div class="form-group">
            <label for="lastname" class="col-sm-2 control-label">个人密码</label>
            <div class="col-sm-10">
               <input type="password" name="login_pass" class="form-control" id="lastname" placeholder="请输入密码">
               <b style="color:red"></b>
       </div>
       <div class="form-group">
            <label for="lastname" class="col-sm-2 control-label">确认密码</label>
            <div class="col-sm-10">
               <input type="password" name="password" class="form-control" id="lastname" placeholder="请确认密码">
               <b style="color:red"></b>
       </div>
       <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">注册</button>
            </div>
        </div>
</form>
      <script src="https://code.jquery.com/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
</body>
</html>