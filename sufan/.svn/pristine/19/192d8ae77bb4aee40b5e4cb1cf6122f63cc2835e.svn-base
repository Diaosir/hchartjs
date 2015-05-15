<?php
//默认控制器，即主页面
class Index extends Controller {
function __construct(){
	parent::__construct();
}

public function index(){
	// if(false){
	// 	Util::go(URL.'doctor/usercenter');
	// }else{
	// 	$this->my_render('login');
	// }
	$this->my_render('index');
}
// 专有渲染函数
private function my_render($view, $data = null) {
    // $this->view->insert_css(INDEX_PUBLIC.'css/demo');
    // $this->view->insert_css(INDEX_PUBLIC.'css/component');
    $this->view->insert_css(INDEX_PUBLIC.'css/index');
    $this->view->insert_js(INDEX_PUBLIC.'js/snap.svg-min.js');
    $this->render('index/'.$view,true,$data);
}
}