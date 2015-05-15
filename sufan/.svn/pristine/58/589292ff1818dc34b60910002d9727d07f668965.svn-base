<?php
//默认控制器，即主页面
class Index extends Controller {
function __construct(){
	parent::__construct();
}

public function index(){
	if(false){
		Util::go(URL.'doctor/usercenter');
	}else{
		$this->my_render('login');
	}
}
//用户名和密码已经通过loginHandler验证
public function login(){
	$doctor_login  = Util::fetch_post('doctor_login');
	$doctor_pass   = Util::fetch_post('doctor_pass');
	$doctor_table  = new DoctorTable;
	if($doctor_table->is_exist($doctor_login)){
		if($doctor_table->is_corret_pwd($doctor_login,$doctor_pass)){
			SessionUtil::destroy();
			SessionUtil::set('is_login',true);
			SessionUtil::set('doctor_login',$doctor_login);
			Util::go(URL.'doctor/usercenter');
		}
		else{
			$this->my_render('login');
		}
	}
	else{
		$this->my_render('login');
	}
	
}
//用于ajax验证
public function loginHandler(){
	$doctor_login  = Util::fetch_post('doctor_login');
	$doctor_pass   = Util::fetch_post('doctor_pass');
	$doctor_table  = new DoctorTable;

	if($doctor_table->is_exist($doctor_login)){
		if($doctor_table->is_corret_pwd($doctor_login,$doctor_pass)){
			echo json_encode(array('doctor_login'=>true,'doctor_pass'=>true));
		}
		else{
			echo json_encode(array('doctor_login'=>true,'doctor_pass'=>false));
		}
	}
	else{
		echo json_encode(array('doctor_login'=>false,'doctor_pass'=>false));
	}

}
// 专有渲染函数
private function my_render($view, $data = null) {
    $this->view->insert_css('login');
    $this->render('index/'.$view,$data);
}
}