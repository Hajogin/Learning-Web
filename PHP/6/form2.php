<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Основы РНР</title>
</head>
<body>
	<?php 
	$name = null;
	$age = null;
		if (isset($_GET['get_name'])) {
		$name = $_GET['get_name'];
	}
	if (isset($_GET['get_age'])) {
		$age = $_GET['get_age'];
	}
	echo "Имя: $name<br> Возраст: $age";

	?>

	<h3>Форма ввода данных</h3>
	<form method="GET">
		<p>Имя: <input type="text" name="get_name"></p>
		<p>Возраст: <input type="number" name="get_age"></p>
		<input type="submit" name="Отправить">
	</form>


</body>
</html>