<?php
return array(
	'DB_TYPE' =>  'pdo',     // mysql,mysqli,pdo
    'DB_DSN'    => 'mysql:host=localhost;dbname=ma20160713;charset=utf8',
    'DB_USER' =>  'root',      // 用户名
    'DB_PWD' =>  'root',          // 密码
    'DB_PORT' =>  '3306',        // 端口
    'DB_PREFIX' =>  'zf_',    // 数据库表前缀

//    'DEFAULT_FILTER' => 'trim,htmlspecialchars',

	/************ 图片相关的配置 ***************/
	'IMAGE_CONFIG' => array(
		'maxSize' => 1024*1024,
		'exts' => array('jpg', 'gif', 'png', 'jpeg'),
		'rootPath' => './Public/Uploads/',  // 上传图片的保存路径  -> PHP要使用的路径，硬盘上的路径
		'viewPath' => '/Public/Uploads/',   // 显示图片时的路径    -> 浏览器用的路径，相对网站根目录
	),


);