<?php
return array(
	//'配置项'=>'配置值'
	///* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'shop',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '123456',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'sp_',    // 数据库表前缀
    'TMPL_PARSE_STRING' => array(
			'__ADMIN__' => '/tp/Public/Admin',
			'__HOME__' => '/tp/Public/Home',
			'__ADMINCSS__' => '/tp/Public/Admin/css',
			'__ADMINJS__' => '/tp/Public/Admin/js',
			'__ADMINIMG__' => '/tp/Public/Admin/images',
			'__COMMON__'   => '/tp/Public'
		),
);