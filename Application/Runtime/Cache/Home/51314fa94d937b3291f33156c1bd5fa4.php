<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form method="post" action="/points/create" enctype="multipart/form-data">
    姓名: <input type="text" name="username" ><br/>
    密码: <input type="password" name="password"/><br/>
    性别: <input type="radio" name="sex" class="nv" value="1" >女<input class="nan" type="radio" name="sex" value="0">男<br/>
    职务: <input type="radio" name="job" value="1" >后厨<input type="radio" name="job" value="0">前厅<br/>
    身份证照片上传:<br/>
    (正面)：<input type="file" name="card_face" /><br/>
    (背面)：<input type="file" name="card_back" /><br/>
    <input type="submit" value="添加">
</form>
</body>
</html>