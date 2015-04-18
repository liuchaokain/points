<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h2 align="center">查询结果页面</h2>
    <table border="1px" align="center" cellpadding="0" cellspacing="0" width="500">
        <tr align="center">
            <td>用户id</td>
            <td>用户名</td>
            <td>用户密码</td>
            <td>性别</td>
            <td>编辑</td>
        </tr>
        <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr align="center">
                <td><?php echo ($data["id"]); ?></td>
                <td><?php echo ($data["username"]); ?></td>
                <td><?php echo ($data["password"]); ?></td>
                <td><?php if($data["sex"] == 0): ?>男<?php else: ?>女<?php endif; ?></td>
                <td><a href="/points/User/edit/id/<?php echo ($data["id"]); ?>">修改</a> | <a href="/points/User/del/id/<?php echo ($data["id"]); ?>">删除</a></td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
</body>
</html>