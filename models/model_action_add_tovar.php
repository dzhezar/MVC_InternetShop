<?php
$connection=new PDO('mysql:host=127.0.0.1;db_name=inet_shop','root','');

$connection->beginTransaction();

$query=$connection->prepare('INSERT into product
 (name,type_id,price,comment)
 VALUES(:name,:type_id,:price,:comment)');

 $query->bindValue(':name',$_POST['name']);
 $query->bindValue(':type_id',$_POST['type_id']);
 $query->bindValue(':price',$_POST['price']);
 $query->bindValue(':comment',$_POST['comment']);  
 
 $query->execute();
 $id = $connection->lastInserId();

 
 $uploads_dir = 'uploads/images/';
 foreach($_FILES['images']['name'] as $key=>$image){
	$tmp_name = $_FILES["images"]["tmp_name"][$key];
    $name = $_FILES["images"]["name"][$key];щ
    if(move_uploaded_file($tmp_name, "$uploads_dir/$name")){
		$image_path = $uploads_dir.$name;
	}  
 }
$query1 =  $connection->prepare('INSERT into product_image
 (product_id,image_path)
 VALUES(:product_id,:image_path)');
 
 $query1->bindValue(':product_id',$id);
 $query1->bindValue(':type_id',$image_path);
 
 $query1->execute();

 $connection->commit();
 
?>