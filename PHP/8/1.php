<?php 
header('Content-Type: text/html; charset=utf-8');
$name = "Иван";
$age = "30";

// Сохраняем куки у пользователя
setcookie('name', $name, time() +3600);
setcookie('age', $age, time() +3600);
echo "Куки сохранены <br>";

// Получаем куки от пользователя
if (isset($_COOKIE['name'])) 
{
	$name = $_COOKIE['name'];
}
if (isset($_COOKIE['age'])) 
{
	$age = $_COOKIE['age'];
}
echo "$name <br> $age";
?>