<?php 
session_start();

$login = '';
$password = '';

// Если есть сессионная переменная isAuthorized, то сразу авторизируем пользователя без проверок
if (!empty($_SESSION['isAuthorized'])) {
$isAuthorized = true;
}else {
	$isAuthorized = false;
}

if (!empty($_GET['login'])) {
	$login = $_GET['login'];
}
if (!empty($_GET['password'])) {
	$password = $_GET['password'];
}

$users = [
	['login' => 'admin', 'password' =>'12'],
	['login' => 'user', 'password' =>'user'],
	['login' => 'ivan', 'password' =>'QWEasd123'],
	];

// Если пользователь уже авторизирован, то ничего делать не надо, иначе перебираем пользователей, ищем соответствие и если находим, то задаем сессионную переменную $_SESSION['isAuthorized'] и переменную isAuthorized 
if (!$isAuthorized) 
{
	foreach ($users as $user) {
	if ($user['login']==$login && $user['password']==$password) {
		$isAuthorized=true;
		$_SESSION['isAuthorized'] = true;
		break;
	}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Результат авторизации</title>
</head>
<body>
	<?php 
	if (!empty($_SESSION['isAuthorized'])) {
		echo "Вы уже авторизитованы. <a href='logout.php'>Выход</a>";
	}else {
		if ($isAuthorized) {
			echo "Логин и пароль верный!";
		}else {
			echo "Не правильный логин или пароль!";
		}
	}

	?>
</body>
</html>