<?php
/*公共方法类
 *所有不涉及数据库操作的公用函数都请放在此类内
 *所有类都必须是静态类
 */
class Util {

	/*获取POST数据，假如不存在或者为空则返回null
	*name POST的参数名
	*/
	public static function fetch_post($name){
		if(isset($_POST[$name])){
			return $_POST[$name];
		}else{
			return "none";
		}
	}

	/*获取GET数据，假如不存在或为空则返回null
	 *name GET的参数名
	 */
	public static function fetch_get($name){
		if(isset($_GET[$name]) && trim($_GET[$name]) != ''){
			return $_GET[$name];
		}else{
			return null;
		}
	}

	/* 跳转到指定的URL地址
	 * url 要跳转到的URL
	 */
	public static function go($url){
		header('location:'.$url);
		exit();
	}
	/*判断是否登录*/
	public static function is_login(){
		if(SessionUtil::get('is_login') == true){
			return true;
		}else{
			return false;
		}
	}
}