<?php

$isValid =true;
$id = $_POST['id'];

if($isValid){
	require_once('models/model_action_edit_tovar.php');
}
else
	header('Location:edit_tovar');

header('Location:tovar');





?>