<?php
//模型基类
class Model {
//PDO数据库
protected $db = null;

function __construct() {
	global $db;
    $this->db = &$db;
}
}