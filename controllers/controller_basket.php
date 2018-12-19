<?php
require_once('models/model_basket.php'); 


$basketList = get_basket('product',$_SESSION['basket']);
require_once('views/view_basket.php'); 






?>