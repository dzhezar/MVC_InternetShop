<?php
$login = $_POST['login'];
$password = $_POST['password'];

$query = build_select_query('users',['login'=>$login]);
$result = execute_select_query($query);
$selected_password = $result[0]['password'];
$result=password_verify($password,$selected_password);

if(!empty($result)){
?>
<script>	
	alert('Success');
</script>
<?php	
	setcookie('user',true);
		setcookie('user',true);
}
else{
?>
<script>	
	alert('Success');
</script>
<?php
}
?>