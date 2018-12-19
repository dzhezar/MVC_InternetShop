<?php
session_start();
require_once('db_script.php');
require_once('routing.php');

function loadPage(){
	$page = getPage();
	routing($page);
}
function getPage(){
	$result = 'tovar';
	$array = explode('/',$_SERVER['REQUEST_URI']);
	$page = array_pop($array);
	if($page){
		$array = explode('?',$page);
		$result = array_shift($array);
	}
	return $result;
}

 ?>