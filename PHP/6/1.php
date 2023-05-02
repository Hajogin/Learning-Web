<meta charset="utf-8">
<?php
// $name = "Не задано";
// $age = "Не указан";
// if (isset($_GET['get_name'])) {
// 	$name = $_GET['get_name'];
// }
// if (isset($_GET['get_age'])) {
// 	$age = $_GET['get_age'];
// }
// echo "Имя: $name<br> Возраст: $age";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Форма ввода</title>
</head>
<body>
	<form action="login.php" method="get">
		<label>
			Логин
			<input type="text" name="login">
		</label>
		<label>
			Пароль
			<input type="password" name="password">
		</label>
		<input type="submit" value="Войти">
	</form>
</body>
</html>