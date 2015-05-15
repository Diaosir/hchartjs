<?php
//控制器模板
class Hchart extends Controller {
function __construct(){
	parent::__construct();
}
function index(){
	$this->my_render('index2');
}
function login(){
    $this->my_render('login');
}
function contact(){
    $data=array();
    $this->render('hchart/contact',false,$data);
}
private function my_render($view,$data = null) {
	$hchart_js=$this->getFileName(HCHART_PUBLIC.'assets/js/ace');
    $this->view->insert_css(HCHART_PUBLIC.'assets/css/bootstrap');
    $this->view->insert_css(HCHART_PUBLIC.'assets/css/font-awesome');
    $this->view->insert_css(HCHART_PUBLIC.'assets/css/ace-fonts');
    $this->view->insert_css(HCHART_PUBLIC.'assets/css/ace');
    $this->view->insert_css(CSS.'hz');
    $this->view->insert_js(HCHART_PUBLIC.'assets/js/ace-extra.js');
    $this->view->insert_js(HCHART_PUBLIC.'assets/js/jquery.js');
    $this->view->insert_js(HCHART_PUBLIC.'assets/js/bootstrap.js');
    $this->view->insert_js(JS.'hz.js');
    foreach ($hchart_js as $value) {
        $this->view->insert_js(HCHART_PUBLIC.'assets/js/ace/'.$value);
    }
    $this->render('hchart/'.$view,true,$data);
}
private function getFileName($dir){
	$temparray=scandir($dir);
	$temparray2=array();
	foreach ($temparray as $value) {
		array_push($temparray2, $value);
	}
	return $temparray2;
}
}