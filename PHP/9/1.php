<?php 
session_start();
?>
<meta charset="utf-8">
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Форма ввода</title>
</head>
<body>
	<?php 
	if (!empty($_SESSION['isAuthorized'])) {
		echo "Вы уже авторизитованы. <a href='logout.php'>Выход</a>";
	}else {?>

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
	<?php } ?>
</body>
</html>