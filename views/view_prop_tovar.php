<a href ='tovar'>Back</a><br>
<?php
if(isset($images)){
	foreach($images as $image){
		extract($image);
		
?>
		<img src="<?=$image_path;?>" width='300px'><br>
<?php
	}
}
 	
if(isset($tovar)){
	extract($tovar[0]);
?>

	<h2>NAME: <b><?=$name;?></b></h2>
	<h3> tovar price: <?=$price;?><br></h3>
	<h4>comment about tovar: '<?=$comment;?>'</h4>
	<a href ='action_add_basket?id=<?=$id;?>'>Add to the basket</a><br>
<?php
}
?>


