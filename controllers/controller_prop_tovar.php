<?php
require_once('models/model_prop_tovar.php');


$id = null;
if(isset($_GET['id']))
	$id = $_GET['id'];

$tovar = get_tovar($id);
$images = get_images($id);

require_once('views/view_prop_tovar.php');



?>