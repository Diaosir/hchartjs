<?php
//控制器模板
class Demo extends Controller {
function __construct(){
	parent::__construct();
}

public function index(){
	$view_data = array ('title' => '模板标题');
	$this->render("video/index", $view_data);
}
public function api_axis_label(){
	$this->my_render('api_axis_label');
}
public function line_chart(){
	$this->my_render('line_chart');
}
public function spline_chart(){
	$this->my_render('spline_chart');
}
public function multiple_line_chart(){
	$this->my_render('multiple_line_chart');
}
public function line_region(){
	$this->my_render('line_region');
}
public function area_chart(){
	$this->my_render('area_chart');
}
public function bar_chart(){
	$this->my_render('bar_chart');
}
public function pie_chart(){
	$this->my_render('pie_chart');
}
public function donut_chart(){
	$this->my_render('donut_chart');
}
public function gauge_chart(){
	$this->my_render('gauge_chart');
}
public function comb_chart(){
	$this->my_render('comb_chart');
}
public function sub_chart(){
	$this->my_render('sub_chart');
}
public function chart_3d(){
	$this->my_render('3d_chart');
}
public function chart_static_3d(){
	$this->my_render('3d_chart2');
}
public function amchart_demo(){
	$this->my_render('css_animate');
}
private function my_render($view,$data=null){
	$this->view->insert_css(CSS.'demo');
	$this->view->insert_css(CSS.'hz');
	$this->view->insert_js(JS.'d3.v3.js');
	$this->view->insert_js(JS.'hchart.js');
	$this->view->insert_js(JS.'canvg.js');
	$this->view->insert_js(JS.'rgbcolor.js');
	// $this->view->insert_js(JS.'img/StackBlur.js');
	$this->render('demo/'.$view,false,$data);
}
}