<?php
//表操作模板类
Class DoctorTable extends Model {
function __construct(){
	parent::__construct();
}
//执行curd
public function run($cmd, $param = null) {
    return $this->db->run($cmd, $param);
}
// 检查医生是否已经存在
public function is_exist($doctor_login) {
    $cmd = 'SELECT doctor_id FROM think_doctor WHERE doctor_login=:doctor_login';
    $param = array('doctor_login' => $doctor_login);
    $result = $this->run($cmd, $param);
    if ($result->rowCount() == 1) {
        return true;
    } else {
        return false;
    }
}
//检查密码是否正确
public function is_corret_pwd($doctor_login,$doctor_pass){
	$cmd     = 'SELECT doctor_id FROM think_doctor WHERE doctor_login = :doctor_login AND doctor_pass =:doctor_pass';
	$param   = array('doctor_login' => $doctor_login,'doctor_pass' => md5($doctor_pass));
	$result  = $this->run($cmd,$param);
	if($result->rowCount() ==1){
		return true;
	}else{
		return false;
	}
}

}