<?php
$name=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['password'];
$mes=$_POST['message'];
$connection=mysqli_connect('127.0.0.1', 'mysql', 'mysql', 'регистрация пользователей');
if ($connection==false){
	echo 'Не удалось подключиться к базе данных!<br>';
	echo mysqli_connect_error();
	exit();
}
else{
echo 'Я удачно подключился';
};
echo "123";
$result=mysqli_query($connection, "SELECT*FROM `регистрация`");
$r1=mysqli_fetch_assoc($result);
print_r($r1);
echo "<p>$name</p><p>$email</p><p>$pass</p><p>$_POST[message]</p>";