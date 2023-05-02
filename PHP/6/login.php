<?php 
$login = '';
$password = '';
$isAuthorized = false;

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

foreach ($users as $user) {
	if ($user['login']==$login && $user['password']==$password) {
		$isAuthorized=true;
		break;
	}
}
// if ($login == "admin" && $password =="12") {
// 	$isAuthorized = true;
// }

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
		if ($isAuthorized) {
			echo "Логин и пароль верный!";
		}else {
			echo "Не правильный логин или пароль!";
		}


	 ?>
</body>
</html>