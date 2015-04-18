<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <script>

        window.onload=function(){

            if(<?php echo ($info["sex"]); ?> == 0){
                document.getElementsByName('sex')[1].checked=true;
            }else{
                document.getElementsByName('sex')[0].checked=true;
            }

        }
    </script>
</head>

<body>
    <form method="post" action="/points/User/modify/">
        <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">
        姓名: <input type="text" name="username" placeholder="<?php echo ($info["username"]); ?>"><br/>
        性别:<input type="radio" name="sex" class="nv" value="1" >女<input class="nan" type="radio" name="sex" value="0">男<br/>
        <input type="submit" value="修改">
    </form>
</body>
</html>