<?php

$isValid =true;
$id = $_GET['id'];
if($isValid){
	require_once('models/model_delete_tovar.php');
}

header('Location:tovar');





?>