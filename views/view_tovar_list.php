<a href ='tovar'>All</a>
<?php
foreach($type_list as $type){
	extract($type);

?>
<a href ='tovar?type_id=<?=$id;?>'><?=$name;?></a>
<?php
}
?>

<a href ='add_tovar'>Add tovar</a>

<div class='product_list_caption row'>
    <div class='product_photo col'>
        Photo
    </div>
    <div class='product_name col'>
         Name
    </div>
    <div class='product_comment col'>
        Comment
    </div>
    <div class='product_price col'>
         Price
    </div>
</div>

<?php
if($tovar_list){
foreach($tovar_list as $tovar){
	extract($tovar);
?>
<div class='product_list_row row'>
    <div class='product_photo col'>
        <img src='<?=$photo;?>'>
    </div>
    <div class='product_name col'>
         <a href ='prop_tovar?id=<?=$id;?>'><?=$name;?></a>
    </div>
    <div class='product_comment col'>
        <?=$comment;?>
    </div>
    <div class='product_price col'>
         <?=$price;?>
    </div>
	<?php
	if(isset($_COOKIE['user'])&&$_COOKIE['user']){
	?>
	<div class='product_price col'>
         <a href ='edit_tovar?id=<?=$id;?>'>Edit</a>
		  <a href ='delete_tovar?id=<?=$id;?>'>Delete</a>
    </div>
	<?php
	}
	?>
</div>
<?php

}
}

?>



