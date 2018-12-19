<?php
$query = build_update_query('product',['name'=>$_POST['name'],
									   'type_id'=>$_POST['type_id'],
								       'price'=>$_POST['price'],
									   'comment'=>$_POST['comment']],
									   $id);
execute_query($query);

$images = $_POST['images'];

foreach($images as $image){
$query2 = build_select_query('product_image',['id'=>$image]);
$result = execute_select_query($query2);
unlink ($result[0]['image_path']);
}





foreach($images as $image){
    $query = build_delete_query('product_image',['id'=>$image]);
	execute_query($query);
}
$uploads_dir = 'uploads/images/';

foreach($_FILES['images']['name'] as $key=>$image){
	$tmp_name = $_FILES["images"]["tmp_name"][$key];
    $name = $_FILES["images"]["name"][$key];
	if($name == null)
		break;
    if(move_uploaded_file($tmp_name, "$uploads_dir/$name")){
		$image_path = $uploads_dir.$name;
		
	}  
$query1 = build_insert_query('product_image',['product_id'=>$id,
						                      'image_path'=>$image_path]);
execute_query($query1);
}
 
?>