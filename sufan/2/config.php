<?php
//该文件定义所有常量

/*库目录
 *控制器目录
 *模型目录
 *图片目录
 *附件目录
 *CSS目录
 *JavaScript目录
 *视图目录
 *默认页面标题
 */
$constant = array ('LIB'   => 'lib/',
	               'SYSLIB' => 'lib/system/',
				   'CON'   => 'controller/',
				   'MOD'   => 'model/',
				   'IMG'   => 'public/img/',
				   'ATT'   => 'public/att/',
				   'CSS'   => 'public/css/',
				   'JS'    => 'public/js/',
				   'INDEX_PUBLIC'=>'public/index/',
				   'HCHART_PUBLIC' =>'public/hchart/',
				   'AMCHART_PUBLIC' =>'public/amchart/',
				   'DEFAULT_CSS' => 'global',
				   'DEFAULT_JS'  => 'global',
				   'VIEW'  => 'view/',
				   'TITLE' => 'SuFan');

/*当LOCAL_FLAG为true时，使用本地SQL配置，反之使用服务器配置，默认为SAE
 *网址
 *数据库类型
 *主机
 *端口号
 *数据库名称
 *用户名
 *密码
 */
define("LOCAL_FLAG",false);
if (LOCAL_FLAG) {
	$change_constant = array ('URL'     => 'http://localhost/hchart/2/');
	$db_setting      = array (
						      'DB_TYPE' => 'mysql',
						      'DB_HOST' => 'localhost',
						 	  'DB_PORT' => '3306',
						 	  'DB_NAME' => 'mydb',
						 	  'DB_USER' => 'root',
						 	  'DB_PASS' => '');
} else {
	$change_constant = array ('URL'     => 'http://sufan.sinaapp.com/');
	$db_setting      = array ('DB_TYPE' => 'mysql',
						 	  'DB_HOST' => SAE_MYSQL_HOST_M,
						 	  'DB_PORT' => SAE_MYSQL_PORT,
						 	  'DB_NAME' => SAE_MYSQL_DB,
						 	  'DB_USER' => SAE_MYSQL_USER,
						 	  'DB_PASS' => SAE_MYSQL_PASS);
}

//将数组合并并进行常量定义
$merge_array = array_merge($constant, $change_constant, $db_setting);
foreach ($merge_array as $key => $value) {
	define($key, $value);
}