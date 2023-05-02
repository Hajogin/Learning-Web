<?php
	$fullName = "Не задано";
	$rule = "Нет";
	$languages = [];
	$sex = "Не выбрано";
	$date = "Не выбрано";
	$cities = [];

	if (isset($_GET['full_name'])) {
		$fullName = $_GET['full_name'];
	}
	if (isset($_GET['rule'])) {
		$rule = $_GET['rule'];
	}
	if (isset($_GET['lang'])) {
		$languages = $_GET['lang'];
	}
	if (isset($_GET['sex'])) {
		$sex = $_GET['sex'];
	}
	if (isset($_GET['date'])) {
		$date = $_GET['date'];
	}
	if (isset($_GET['cities'])) {
		$cities = $_GET['cities'];
	}
	?>

	<h2>Ваше ФИО: <?= $fullName; ?></h2>
	<h2>Согласие об обработке персональных данных: <?= $rule; ?></h2>
	<h2>Выбранные курсы:</h2>
	<?php 
	foreach ($languages as $lang) {
		echo "$lang, ";
	}
	 ?>
	 <h2>Выбранная дата: <?= $date; ?></h2>
	 <h2>Ваш пол: <?= $sex; ?></h2>
	 <h2>Ваш город: </h2>
	 <?php 
	foreach ($cities as $city) {
		echo "$city, ";
	}
	 ?>


	 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<form action="" method="get">
		<label>
			ФИО
			<input type="text" name="full_name" value="<?= $fullName ?>">
		</label>
		<br>
		Выбор пола:
		<label>
			Муж.
			<input type="radio" name="sex" value="муж." <?php if ($sex=="Муж") echo "checked"; ?>>
		</label>
		<label>
			Жен.
			<input type="radio" name="sex" value="жен." <?php if ($sex=="Жен") echo "checked"; ?>>
		</label><br>
		<select name="cities[]" size="5" multiple>
			<option value="Москва">Москва</option>
			<option value="Красноярск">Красноярск</option>
			<option value="Омск">Омск</option>
			<option value="Тула">Тула</option>
			<option value="СПБ">СПБ</option>
		</select><br>
		<label>
			PHP:
			<input type="checkbox" name="lang[]" value="PHP">
		</label>
		<br>
		<label>
			JS:
			<input type="checkbox" name="lang[]" value="JS">
		</label>
		<br>
		<label>
			Python:
			<input type="checkbox" name="lang[]" value="Python">
		</label><br>
		<label>
			GO:
			<input type="checkbox" name="lang[]" value="GO">
		</label><br>
		<label>
			Предпологаемая дата обучения:
			<input type="date" name="date">
		</label><br>
		<label>
			Согласие об обработке персональных данных
			<input type="checkbox" name="rule" value="Да">
		</label>
		<button>Отправить</button>
	</form>

	 
	
</body>
</html>