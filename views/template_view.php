<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Phone</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>

	<div class='header row'>
		<div class='wrapper'>		
			<img src="./images/logo.jpg" alt=""/>		
			<ul>
			  <li class="active"><a href="tovar">Home</a></li>
			  <li><a href="">Phones</a></li>
			  <li><a href="">About</a></li>
			  <li><a href="">Contact</a></li>
			  <li><a href="registration">Registration</a></li>
			  	<?php
					if(!isset($_COOKIE['user'])||$_COOKIE['user'] == false){
				?>
			  <li><a href="autorization">Authorization</a></li>
				<?php
				}
				else{
				?>
			  <li><a href="logout">Log out</a></li>
			  <?php
				}
				if($_SESSION['basket']){
				?>
					<li><a href="basket">Basket</a></li>
			<?php
			}
			  ?>
			  
            </ul>
		</div>		
	</div>

	<div class='row'>	
		<div class='left_content col'>	
<?php
if(isset($left_controller))
	include 'controllers/'.$left_controller;
else
	echo 'LEFT CONTENT'; 
?>						
		</div>
		<div class='main_content col'>		
			<?php 		
			include 'controllers/'.$controller; 
			?>					
		</div>
		<div class='right_content col'>	
			RIGHT CONTENT
		</div>
	</div>
	<div class='footer row'>
	</div>

</body>
</html>

