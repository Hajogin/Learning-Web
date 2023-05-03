<?php 
header('Content-Type: text/html; charset=utf-8');

$name = $_POST['firstName'];
$surname = $_POST['lastName'];

setcookie('firstName', $name, time()+3600);
setcookie('lastName', $surname, time()+3600);

if (isset($_COOKIE['firstName']))
{
	$name = $_COOKIE['firstName'];
}
if (isset($_COOKIE['lastName']))
{
	$surname = $_COOKIE['lastName'];
}
echo "Ваше имя: $name <br> Ваша фамилия: $surname";


?>