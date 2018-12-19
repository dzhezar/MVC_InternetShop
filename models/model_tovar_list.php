<?php
function get_data($table,$where = null,$what = null){
	$query = build_select_query($table,$where,$what);
	return execute_select_query($query);
}
function get_tovar_list($type_id){
	$query = "SELECT id,name,price,comment,
			(SELECT image_path FROM product_image 
			 WHERE product_id = product.id LIMIT 1)
			 as photo
			  FROM product";
	if($type_id){
		$query .= 'WHERE type_id = '.$type.id; 
	}		  
	return execute_select_query($query);
}

function get_filter_tovar_list($type_id,$filter,$option){
	$query = "SELECT id,name,price,comment,
			(SELECT image_path FROM product_image 
			 WHERE product_id = product.id LIMIT 1)
			 as photo
			  FROM product";
	$where = ''; 
	if($type_id)
		$query .= 'WHERE type_id = '.$type.id; 
	
	if(!empty($filter)){
		$and = ' and ';
		$where = $type_id?$and:' WHERE ';
		foreach($filter as $key=>$value){
			switch($key){
				case 'price_from':
					$where.='price>='.$value;
				break;
				case 'price_to':
					$where.='price<='.$value;
				break;
				
			}
			$where.=$and; 
		}
		$where = rtrim($where,$and);
		
	$order_by = ' ORDER by name '.$order['name'];

	$query.=$where.$order_by; 	
	echo $query;
	}
	return execute_select_query($query);
}
?>