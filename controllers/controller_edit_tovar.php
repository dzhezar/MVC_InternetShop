<?php
require_once('models/model_edit_tovar.php');
$id = $_GET['id'];
$type_list = get_data('product_type');
$tovar = get_tovar($id);
$images = get_images($id);

require_once('views/view_edit_tovar.php');




?>