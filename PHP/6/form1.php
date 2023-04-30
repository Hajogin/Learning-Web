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
	if (isset($_POST['post_name'])) {
		$name = $_POST['post_name'];
	}
	if (isset($_POST['post_age'])) {
		$age = $_POST['post_age'];
	}
	echo "Имя: $name <br> Возраст: $age";

	?>

	<h3>Форма ввода данных</h3>
	<form method="POST">
		<p>Имя: <input type="text" name="post_name"></p>
		<p>Возраст: <input type="number" name="post_age"></p>
		<input type="submit" name="Отправить">
	</form>


</body>
</html>