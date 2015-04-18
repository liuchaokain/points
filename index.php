<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');



// 定义应用目录
define('APP_PATH','./Application/');

//关闭目录安全文件的生成
define('BUILD_DIR_SECURE', false);
// 默认绑定Home模块--注意这里
define('BIND_MODULE', 'Home');
//默认绑定User控制器
define('BIND_CONTROLLER','User');
//默认公共模块路径
define('COMMON_PATH','./Common/');
// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',true);
//

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';


// 亲^_^ 后面不需要任何代码了 就是如此简单