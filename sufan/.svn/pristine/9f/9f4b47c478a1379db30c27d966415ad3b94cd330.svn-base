<html>
<head>
	<title><?php
	if (isset($this->title)) {
		echo $this->title;
	}else{
		echo TITLE;
	}
	?></title>
	<meta charset="utf-8"><?php
	foreach ($this->meta as $key => $value) {?>
	<meta name="<?php e($key);?>" content="<?php e($value);?>"><?php
	}?>
	<meta name='viewport' content='width=device-width,minimum-scale=1.0 maximum-scale=1.0 user-scalable=no'>
	<?php
	foreach ($this->css as $key => $value) {?>
	<link rel="stylesheet" type="text/css" href="<?php e(URL.$value.'.css');?>"><?php
	}?>
</head>