<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

</head>
<body>
	<form action="survey.php" method="get">
		<label>
			ФИО
			<input type="text" name="full_name">
		</label>
		<br>
		<label>
			Возраст
			<input type="number" name="age">
		</label>
		<br>
		<label>
			Согласие об обработке персональных данных
			<input type="checkbox" name="rule" value="Да">
		</label>
		<button>Отправить</button>
	</form>

	
	
</body>
</html>