<?php
function get_data($table,$where = null,$what = null){
	$query = build_select_query($table,$where,$what);
	return execute_select_query($query);
}	
function get_tovar($id){
	$query1 = build_select_query('product',['id'=>$id]);	  
	return execute_select_query($query1);
}

function get_images($id){
	$query2 = build_select_query('product_image',['product_id'=>$id]);		  
	return execute_select_query($query2);
}
?>