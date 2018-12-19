<div class='product_list_caption row'>
    <div class='product_photo col'>
        Photo
    </div>
    <div class='product_name col'>
         Name
    </div>
   
    <div class='product_price col'>
         Price
    </div>
</div>
<?php
$sum=0;
if($basketList){
foreach($basketList as $tovar){
	extract($tovar);
?>
<div class='product_list_row row'>
    
    <div class='product_name col'>
         <a href ='prop_tovar?id=<?=$id;?>'><?=$name;?></a>
    </div>
    <div class='product_comment col'>
        <?=$comment;?>
    </div>
    <div class='product_price col'>
         <?=$price;?>
    </div>
	
</div>
<?php
$sum+=$price;
}
}
echo '<br>Сумма заказа: ',$sum;
?>



