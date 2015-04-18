<?php
define('ROOT_PATH',dirname(dirname(__FILE__)));
return array(
    'self'       =>    __SELF__,
    'maxSize'    =>    3145728,
    'rootPath'   =>    './',
    'savePath'   =>    "../Application/Home/Uploads",
    'saveName'   =>    array('uniqid',''),
    'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
    'autoSub'    =>    true,
    'subName'    =>    array('date','Ymd'),
);