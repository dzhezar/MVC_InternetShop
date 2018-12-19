<?php
require_once('models/model_tovar_list.php');

$type_list = get_data('product_type');

$type_id = get_type_id();


if(isset($_GET['filter'])){
	$filter = get_filter();
	$order = get_order();
	$tovar_list = get_filter_tovar_list($type_id,$filter,$order);
}
else
	$tovar_list = get_tovar_list($type_id);

require_once('views/view_tovar_list.php');

function get_type_id(){
	$type_id = null;
if(isset($_GET['$type_id']))
	$type_id = $_GET['$type_id'];
return $type_id;
}
require_once('views/view_tovar_list.php');
function get_order(){
	$order = [];
	$order['name'] = $_GET['name_order'];
	return $order;
}

function get_filter(){
	$filter = [];
	if(!empty($_GET['price_from']))
		$filter['price_from'] = $_GET['price_from'];
	if(!empty($_GET['price_to']))
		$filter['price_to'] = $_GET['price_to'];
	return $filter;
}

?>