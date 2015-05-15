<?php
//控制器模板
class doctor extends Controller {
function __construct(){
	parent::__construct();
}
//获取病人基本信息
public function getPatientInfo(){
    echo json_encode($PatientInfo);
}

//获取病人临床信息
public function getClinicalInfo(){
  $patientId    =Util::fetch_post('patient_id');
  switch ($patientId) {
    case 1:
      $clinicalInfo  = array('pgcj' =>array('yesORno'=>1,
                                            'np'     =>1,
                                            'nj'     =>0,
                                            'nt'     =>0,
                                            'ynzd'   =>0,
                                            'pgcj_pc'=>3,
                                            ),
                             'gz'   =>array('yesORno'=>1,
                                            'pndd'   =>1,
                                            'ch'     =>0,
                                            'nxxewl' =>0,
                                            'scsd'   =>0,
                                            'pnsjyc' =>0,
                                            'nhdl'   =>1,
                                            'nlzd'   =>0
                                            ),
                             'sqhbz'=>array('yesOrno'=>1,
                                            'nlgr'   =>1,
                                            'xn'     =>1,
                                            'pgjs'   =>0,
                                            'nzl'    =>1,
                                            'sjs'    =>0,
                                            'sgnbq'  =>0,
                                            'xxhdxck'=>0,
                                            'px'     =>0,
                                            'ddbxz'  =>0,
                                            'other1' =>'没有其他了'),
                             'sqbfb'=>array('yesOrno'=>1,
                                            'mzfqz'  =>1,
                                            'fy'     =>0,
                                            'gxy'    =>1,
                                            'gxb'    =>1,
                                            'nxgyw'  =>0,
                                            'tnb'    =>1,
                                            'mxsb'   =>1,
                                            'sgnbq2'  =>0),
                             'other2'=>'什么都没有哈哈'
                            );
      break;
    default:
      break;
  }

}
public function getPatientInfoHtml(){
  $patientId    =Util::fetch_post('patient_id');
  switch ($patientId) {
    case 1:
      $PatientInfo  =array('main_info'=>array('patient_name'        =>'黄奇伟',
                                            'ill_id'              =>2122,
                                            'patient_sex'         =>1,
                                            'patient_age'         =>'23',
                                            'patient_nation'      =>'汉',
                                            'patient_height'      =>167,
                                            'patient_weight'      =>56,
                                            'patient_address'     =>'广州大学城华南理工大学',
                                            'patient_phone'       =>'13567867676',
                                            'education_level'     =>'大学本科',
                                            'income'              =>'高收入',
                                            ),
                           'family_info'=>array('family_name'       =>'黄奇伟',
                                              'relative'          =>'朋友',
                                              'family_address'    =>'广州大学城华南理工大学',
                                              'post_code'         =>'510006',
                                              'family_phone'      =>'2353454353465'
                                            ),
                           'hospital_info'=>array('in_time'        =>'2001年1月12日',
                                                    'out_time'       =>'2001年1月12日',
                                                    'operation_time' =>'2001年1月12日',
                                                    'cost'           =>230454,
                                                    'fist_diagnose_time'=>'2001年1月12日',
                                                    'last_diagnose'     =>"什么都没有",
                                                 )
        );
      break;
    case 2:
      $PatientInfo  =array('main_info'=>array('patient_name'        =>'我是林夕夕',
                                            'ill_id'              =>232432,
                                            'patient_sex'         =>1,
                                            'patient_age'         =>'100',
                                            'patient_nation'      =>'汉',
                                            'patient_height'      =>140,
                                            'patient_weight'      =>56,
                                            'patient_address'     =>'广州大学城华南理工大学地方',
                                            'patient_phone'       =>'13567867676',
                                            'education_level'     =>'大学本科',
                                            'income'              =>'高收入',
                                            ),
                           'family_info'=>array('family_name'       =>'黄奇伟',
                                              'relative'          =>'朋友',
                                              'family_address'    =>'广州大学城华南理工大学',
                                              'post_code'         =>'510006',
                                              'family_phone'      =>'2353454353465'
                                            ),
                           'hospital_info'=>array('in_time'        =>'2001年1月12日',
                                                    'out_time'       =>'2001年1月12日',
                                                    'operation_time' =>'2001年1月12日',
                                                    'cost'           =>230454,
                                                    'fist_diagnose_time'=>'2001年1月12日',
                                                    'last_diagnose'     =>"什么都没有",
                                                 )
        );
        break;
    default:
      $PatientInfo =null;
      break;
  }
  $this->render('doctor/'.'patientinfo');
}
public function getIppsAndQolHtml(){
  $patientId    =Util::fetch_post('patient_id');
  $infoStyle    =Util::fetch_post('info_style');
  $this->render('doctor/'.'IPPSandQOL');
}
public function getDefaultInfoHtml(){
  $this->render('doctor/'.'defaultinfo');
}
public function getTableInfoStyleHtml(){
  $patientId    =Util::fetch_post('patient_id');
  $tableInfoStyle    =Util::fetch_post('table_info_style');
  $clinicalInfo  = array('pgcj' =>array('yesORno'=>1,
                                        'np'     =>1,
                                        'nj'     =>0,
                                        'nt'     =>0,
                                        'ynzd'   =>0,
                                        'pgcj_pc'=>3,
                                        ),
                         'gz'   =>array('yesORno'=>1,
                                        'pndd'   =>1,
                                        'ch'     =>0,
                                        'nxxewl' =>0,
                                        'scsd'   =>0,
                                        'pnsjyc' =>0,
                                        'nhdl'   =>1,
                                        'nlzd'   =>0
                                        ),
                         'sqhbz'=>array('yesOrno'=>1,
                                        'nlgr'   =>1,
                                        'xn'     =>1,
                                        'pgjs'   =>0,
                                        'nzl'    =>1,
                                        'sjs'    =>0,
                                        'sgnbq'  =>0,
                                        'xxhdxck'=>0,
                                        'px'     =>0,
                                        'ddbxz'  =>0,
                                        'other1' =>'没有其他了'),
                         'sqbfb'=>array('yesOrno'=>1,
                                        'mzfqz'  =>1,
                                        'fy'     =>0,
                                        'gxy'    =>1,
                                        'gxb'    =>1,
                                        'nxgyw'  =>0,
                                        'tnb'    =>1,
                                        'mxsb'   =>1,
                                        'sgnbq2'  =>0),
                         'other2'=>'什么都没有哈哈'
                        );
switch ($tableInfoStyle) {
  case '临床资料':
    $this->render('doctor/'.'clinicalinfo');
    break;
  case '评分表':
    $this->render('doctor/'.'IPPSandQOL');
    break;
  case '术前实验室检查':
    $this->render('doctor/'.'shuQianGuanCha');
    break;
  case '术后早期观察情况':
    $this->render('doctor/'.'shuHouGuanCha');
    break;
  case '围手术期监测指标记录':
    $this->render('doctor/'.'weiShouShu');
    break;
  default:
    $this->render('doctor/'.'defaultinfo');
    break;
}
  
}
//返回输入信息表单
public function getModifyInfoHtml(){
  $patientId    =Util::fetch_post('patient_id');
  $infoStyle    =Util::fetch_post('info_style');
  switch ($infoStyle) {
    case '基本信息':
      $this->render('doctor/'.'modifyPatientInfo');
      break;
    case '联系人':
      $this->render('doctor/'.'modifyFamilyInfo');
      break;
    case '首发症状':
      $this->render('doctor/'.'modifyShouFaBing');
      break;
    case '体检情况':
      $this->render('doctor/'.'modifyTiJian');
      break;
    case 'IPPS评分表':
      $this->render('doctor/'.'modifyIppsInfo');
      break;
    case 'QOL评分表':
      $this->render('doctor/'.'modifyQolInfo');
      break;
    case '血液检查':
      $this->render('doctor/'.'modifyXueYeJianCha');
      break;
    case '尿液检查':
      $this->render('doctor/'.'modifyNiaoYeJianCha');
      break;
    case '更多检查':
      $this->render('doctor/'.'modifyMoreJIanCha');
      break;
    case '血/尿指标':
      $this->render('doctor/'.'modifyXueNiaoZhiBiao');
      break;
    case '手术/麻醉':
      $this->render('doctor/'.'modifyShouShuMaZui');
      break;
    default:
      $this->render('doctor/'.'modifyInfoTemplate');
      break;
  }
}
//储存数据
public function saveInfoData(){
  $infoArray=Util::fetch_post('info_array');
  $infoStyle=Util::fetch_post('info_style');
  echo $infoStyle;
  echo json_encode($infoArray);
}
public function usercenter(){
	if(Util::is_login()){
		$this->my_render('usercenter');
	}
	else{
		Util::go(URL);
	}
}
public function my_render($view,$data = null){
	$this->view->insert_css('global');
	$this->view->insert_js('main');
	$this->view->insert_js('global');
	$this->render('doctor/'.$view, $data);
}
}