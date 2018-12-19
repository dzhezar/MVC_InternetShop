<form action = 'action_edit_tovar' method = 'POST' enctype="multipart/form-data">
<?php
require_once('core/functions.php');

if(isset($images)){
foreach($images as $image){	
	extract($image);
?>
		<input type='checkbox' name="images[]" value="<?=$id;?>">
		<img style="border: double black;" src="<?=$image_path;?>" width='300px'><br>
<?php
}
}
if(isset($tovar))
	extract($tovar[0]);
?>
	Name:
	<input type = 'text' name = 'name' value = "<?=$name;?>"><br>
	Type:
	<?=createSelect(1,$type_list,'type_id');?><br>
	Photo:
	<input type="file" name = 'images[]' multiple accept="image/*"><br>
	Price:
	<input type = 'number' min = 0 name = 'price' value = "<?=$price;?>"><br>
	Comment:
	<textarea name = 'comment'><?=$comment;?></textarea><br>
	<input type ='hidden' name='id' value="<?=$id?>">
	<input type = 'submit'>
</form>	