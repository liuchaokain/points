<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form method="post" action="/points/User/create">
    姓名: <input type="text" name="username" ><br/>
    密码: <input type="password" name="password"/><br/>
    性别: <input type="radio" name="sex" class="nv" value="1" >女<input class="nan" type="radio" name="sex" value="0">男<br/>
    <input type="submit" value="添加">
</form>
</body>
</html>