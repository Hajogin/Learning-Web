<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

</head>
<body>
	<form action="" method="get">
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
		<select name="cities[]" size="5" multiple>
			<option value="Москва">Москва</option>
			<option value="Красноярск">Красноярск</option>
			<option value="Омск">Омск</option>
			<option value="Тула">Тула</option>
			<option value="СПБ">СПБ</option>
		</select><br>
		<label>
			Согласие об обработке персональных данных
			<input type="checkbox" name="rule" value="Да">
		</label>
		<button>Отправить</button>
	</form>
</body>
</html>

<?php 
	$fullName = "Не задано";
	$rule = "Нет";
	$age = "Не выбрано";
	$cities = [];
	

	if (isset($_GET['full_name'])) {
		$fullName = $_GET['full_name'];
	}
	if (isset($_GET['rule'])) {
		$rule = $_GET['rule'];
	}
	if (isset($_GET['age'])) {
		$age = $_GET['age'];
	}
	if (isset($_GET['cities'])) {
		$cities = $_GET['cities'];
	}
	
	?>

	<h2>Ваше ФИО: <?= $fullName; ?></h2>
	<h2>Ваш возраст: <?= $age; ?></h2>
	<h2>Согласие об обработке персональных данных: <?= $rule; ?></h2>
	<h2>Ваш город: </h2>
	<?php
	foreach ($cities as $city) {
		echo "$city";
	}

    ?>