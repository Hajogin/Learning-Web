<?php 
	$fullName = "Не задано";
	$rule = "Нет";
	$age = "Не выбрано";

	

	if (isset($_GET['full_name'])) {
		$fullName = $_GET['full_name'];
	}
	if (isset($_GET['rule'])) {
		$rule = $_GET['rule'];
	}
	if (isset($_GET['age'])) {
		$age = $_GET['age'];
	}	
	?>

	<h2>Ваше ФИО: <?= $fullName; ?></h2>
	<h2>Ваш возраст: <?= $age; ?></h2>
	<h2>Согласие об обработке персональных данных: <?= $rule; ?></h2>
	