<?php
$login = $_POST['login'];
$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$query = build_insert_query('users',['login'=>$login,'password'=>$hashed_password]);
execute_query($query);


?>