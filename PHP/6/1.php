<meta charset="utf-8">
<?php
$name = "Не задано";
$age = "Не указан";
if (isset($_GET['get_name'])) {
	$name = $_GET['get_name'];
}
if (isset($_GET['get_age'])) {
	$age = $_GET['get_age'];
}
echo "Имя: $name<br> Возраст: $age";

?>