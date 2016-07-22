<?php
return array(
	'DB_TYPE' =>  'pdo',     // mysql,mysqli,pdo
    'DB_DSN'    => 'mysql:host=localhost;dbname=ma20160713;charset=utf8',
    'DB_USER' =>  'root',      // 用户名
    'DB_PWD' =>  'root',          // 密码
    'DB_PORT' =>  '3306',        // 端口
    'DB_PREFIX' =>  'tol_',    // 数据库表前缀

    'DEFAULT_FILTER' => 'trim,htmlspecialchars',
);