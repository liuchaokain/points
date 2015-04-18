<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<script>
    function jump(){
        window.location.href="add";
    }
</script>
<body>
    <form action="/points/User/search" method="POST">
        <div align="center">
            姓名:<input type="text" name="username"/><br/>
            性别:<input type="radio" name="sex" value="0"/>男<input type="radio" name="sex" value="1"/>女<br/>
            <input type="submit" value="查询">
        </div>
    </form>
    <table border="1px" width="600" align="center" cellspacing="0" cellpadding="0">
            <tr align="center">
                <td>ID</td>
                <td>姓名</td>
                <td>密码</td>
                <td>性别</td>
                <td>编辑</td>
            </tr>
        <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr align="center">
                <td><?php echo ($data["id"]); ?></td>
                <td><?php echo ($data["username"]); ?></td>
                <td><?php echo ($data["password"]); ?></td>
                <td><?php if($data["sex"] == 0): ?>男<?php else: ?>女<?php endif; ?></td>
                <td><a href="/points/User/edit/id/<?php echo ($data["id"]); ?>">修改</a> | <a href="__ROOT_/User/del/id/<?php echo ($data["id"]); ?>">删除</a></td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            <tr align="center"><td colspan="5"><input type="button" value="添加用户" onclick="jump()"/></td></tr>
    </table>
</body>
</html>