<?php
$connection=mysqli_connect('127.0.0.1', 'mysql', 'mysql', 'регистрация пользователей');
if ($connection==false){
	echo 'Не удалось подключиться к базе данных!<br>'
	echo mysql_connect_error();
	exit();
}

?>