<?php
//视图类
class View {
private $css   = null;
private $js    = null;
private $meta  = null;


function __construct() {
	$this->css  = array();
	$this->js   = array();
	$this->meta = array();
}

/*插入CSS
 *data 要插入的CSS
 */
public function insert_css($data) {
	$this->css = array_merge($this->css, explode(',', $data));
}

/*插入数据
 *data 要插入的数据，数组类型
 */
public function insert_data($data){
	foreach ($data as $key => $value) {
		$this->$key = $value;
	}
}

/*插入JS
 *data 要插入的JS
 */
public function insert_js($data) {
	$this->js = array_merge($this->js, explode(',', $data));
}

/*渲染页面
 *name 页面路径
 *header_footer 是否加载默认页头页脚
 */
public function render($name, $header_footer = true){
	if($header_footer){
		require_once VIEW.'common/header_v.php';
	}
	require_once VIEW.$name.'_v.php';
	if($header_footer){
		require_once VIEW.'common/footer_v.php';
	}
}
}
