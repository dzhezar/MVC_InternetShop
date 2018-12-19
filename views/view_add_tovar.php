<?php
require_once('core/functions.php');
?>
<form action = 'action_add_tovar' method = 'POST' enctype="multipart/form-data">
	Name:
	<input type = 'text' name = 'name'><br>
	Type:
	<?=createSelect(1,$type_list,'type_id');?><br>
	Photo:
	<input type="file" name = 'images[]' multiple accept="image/*"><br>
	Price:
	<input type = 'number' min = 0 name = 'price'><br>
	Comment:
	<textarea name = 'comment'></textarea><br>
	<input type = 'submit'>
</form>	