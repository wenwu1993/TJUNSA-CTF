<?php
return array(
	//'配置项'=>'配置值'

	//路由
	"URL_ROUTER_ON"	=>	true,
	"URL_ROUTE_RULES"	=>	array(
		"index"	=>	"Home/Index/index",
		"register"	=>	"Home/Index/register",
		"login"	=>	"Home/Index/login",
		"logout"	=>	"Home/Index/logout",
		'exercise/:page\d'=>'Ctf/Index/exercise',
		"exercise" =>"Ctf/Index/exercise",
		'question/:id\d'=>'Ctf/Question/question',
		"question"=>"Ctf/Question/question",
		"base"=>"Ctf/Question/base",

		'article/:id\d'	=>	'Article/Index/read',
		"article"	=>	"Article/Index/index",
	),

	//数据库
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => '127.0.0.1', // 服务器地址
	'DB_NAME'   => 'TJUNSA', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => '', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PARAMS' =>  array(), // 数据库连接参数
	'DB_PREFIX' => '', // 数据库表前缀 
	'DB_CHARSET'=> 'utf8', // 字符集
	'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志



	'SHOW_PAGE_TRACE' =>true,// 显示页面Trace信息
);